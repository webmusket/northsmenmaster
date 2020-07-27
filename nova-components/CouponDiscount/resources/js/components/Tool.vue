<template>
	<div class="main">
		<div style="margin-bottom: 20px;border-bottom: 1px solid #ccd0d4;font-size: 14px;
    padding: 8px 12px;
    margin: 0;
    line-height: 1.4;"><b>{{resourceName.toUpperCase()}} DATA</b></div>
    	<div class="mainarea">
		  	<div class="tab">
			  <button class="tablinks active" @click="openCity(event, 'London')" id="defaultOpen">General</button>
			  <button class="tablinks" @click="openCity(event, 'Paris')">User Restriction</button>
			  <button class="tablinks" @click="openCity(event, 'Tokyo')">Usage limits</button>
			</div>
			<form @submit.prevent="submit">
			<div id="London" class="tabcontent">
			    <div class="row">
			      <div class="col-25">
			        <label for="lname">Discount Amount</label>
			      </div>
			      <div class="col-75">
			        <input type="number" id="lname" v-model="amount" placeholder="0">
			      </div>
			    </div>
			    <div class="row">
			      <div class="col-25">
			        <label for="country">Discount Type</label>
			      </div>
			      <div class="col-75">
			        <select id="country" v-model="amount_type">
			          <option value="Percentage Discount">Percentage Discount</option>
			          <option value="Fixed Cart Discount">Fixed Cart Discount</option>
			          <option value="Fixed Product Discount">Fixed Product Discount</option>
			        </select>
			      </div>
			    </div>
			  
			</div>

			<div id="Paris" class="tabcontent">
			    
			    <div class="row">
			      <div class="col-25">
			        <label for="couponproducts">Products</label>
			      </div>
			      <div class="col-75">
			        <multiselect id="couponproducts" :multiple="true" v-model="couponproducts" :options="products" ></multiselect>
			      </div>
			      <p style="clear: both;"></p>
			    </div>

			    <div class="row">
			      <div class="col-25">
			        <label for="excludecouponproducts">Exclude Products</label>
			      </div>
			      <div class="col-75">
			        <multiselect id="excludecouponproducts" :multiple="true" v-model="excludecouponproducts"  :options="products" ></multiselect>
			      </div>
			      <p style="clear: both;"></p>
			    </div>

			    <div class="row">
			      <div class="col-25">
			        <label for="couponcategories">Product categories</label>
			      </div>
			      <div class="col-75">
			        <multiselect id="couponcategories" :multiple="true" v-model="couponcategories" :options="categories"></multiselect>
			      </div>
			      <p style="clear: both;"></p>
			    </div>

			    <div class="row">
			      <div class="col-25">
			        <label for="excludecouponcategories">Exclude Product categories</label>
			      </div>
			      <div class="col-75">
			        <multiselect id="excludecouponcategories" :multiple="true" v-model="excludecouponcategories" :options="categories"></multiselect>
			      </div>
			      <p style="clear: both;"></p>
			    </div>

			    <div class="row">
			      <div class="col-25">
			        <label for="couponemails">Allowed emails</label>
			      </div>
			      <div class="col-75">
			        <multiselect id="couponemails" :multiple="true" v-model="couponemails" :options="emails"></multiselect>
			      </div>
			    </div>


			</div>

			<div id="Tokyo" class="tabcontent">
			    
			    <div class="row">
			      <div class="col-25">
			        <label for="individual">Individual use only</label>
			      </div>
			      <div style="margin-top: 20px;    margin-top: 17px;
    width: 3%;" class="col-75">
			        <input style="    height: 18px;" type="checkbox" id="individual" v-model="individual">
			      </div>
			      <p style="clear: both;"></p>
			    </div>
			    <div class="row">
			      <div class="col-25">
			        <label for="email">Email</label>
			      </div>
			      <div class="col-75">
			        <input type="text" id="email" v-model="couponemail" placeholder="john@emil.com">
			      </div>
			    </div>
			    <div class="row">
			      <div class="col-25">
			        <label for="max_usages">Usage limit per coupon</label>
			      </div>
			      <div class="col-75">
			        <input type="number" id="max_usages" v-model="max_uses" placeholder="Unlimited Usage">
			      </div>
			    </div>

			    <div class="row">
			      <div class="col-25">
			        <label for="max_user_usages">Usage limit per user</label>
			      </div>
			      <div class="col-75">
			        <input type="number" id="max_user_usages" v-model="max_uses_user" placeholder="Unlimited Usage">
			      </div>
			    </div>

			    <div class="row">
			      <div class="col-25">
			        <label for="minimumspent">Minimum Spent</label>
			      </div>
			      <div class="col-75">
			        <input type="number" id="minimumspent" v-model="minimumspent" placeholder="0">
			      </div>
			    </div>
			  
			</div>

			<div  class="row">
		      <input style="margin-top: 10px;" type="submit" value="Submit">
		    </div>
			</form>
		</div>
	</div>
  
</template>

<script>
import Multiselect from 'vue-multiselect'


export default {
	components: { Multiselect },
  props: ['resourceName', 'resourceId', 'panel'],

  data () {
      return {
      	individual: false,
      	couponemail: null,
      	amount: null,
      	amount_type: null,
      	minimumspent: null,
      	max_uses_user: null,
      	max_uses: null,
      	excludecouponproducts: [],
      	excludecouponcategories: [],
        couponcategories: [],
        couponproducts: [],
        couponemails: [],
        products: [],
        categories: []
      }
    },
  created() {
  	axios.get('/nova-vendor/coupon-discount/loaddata/'+ this.resourceId).then(response => {
	        
	        this.individual = response.data.individual,
	      	this.couponemail = response.data.couponemail,
	      	this.amount = response.data.amount,
	      	this.amount_type = response.data.amount_type,
	      	this.minimumspent = response.data.minimumspent,
	      	this.max_uses_user = response.data.max_uses_user,
	      	this.max_uses = response.data.max_uses,
	      	this.excludecouponproducts = response.data.excludecouponproducts,
	      	this.excludecouponcategories = response.data.excludecouponcategories,
	        this.couponcategories = response.data.couponcategories,
	        this.couponproducts = response.data.couponproducts,
	        this.couponemails = response.data.couponemails,
	        this.products = response.data.products,
	        this.categories = response.data.categories

	      })
      axios.get('/nova-vendor/coupon-discount/readymade-products').then(response => {
	        this.products = response.data
	      })
      axios.get('/nova-vendor/coupon-discount/emails').then(response => {
	        this.emails = response.data
	      })
      axios.get('/nova-vendor/coupon-discount/categories').then(response => {
	        this.categories = response.data
	      })
    },

  mounted() {
  
	document.getElementById("defaultOpen").click();
  },
   methods: {
    openCity: function (evt, cityName) {
      var i, tabcontent, tablinks;
	  tabcontent = document.getElementsByClassName("tabcontent");
	  for (i = 0; i < tabcontent.length; i++) {
	    tabcontent[i].style.display = "none";
	  }
	  tablinks = document.getElementsByClassName("tablinks");
	  for (i = 0; i < tablinks.length; i++) {
	    tablinks[i].className = tablinks[i].className.replace(" active", "");
	  }
	  document.getElementById(cityName).style.display = "block";
	  evt.currentTarget.className += " active";
    },
    submit() {
      this.errors = {};
      axios.post('/nova-vendor/coupon-discount/coupon-settings' , 
      	{
      		coupon_id: this.resourceId,
      		individual: this.individual,
      		couponemail: this.couponemail,
      		amount: this.amount,
      		amount_type: this.amount_type,
      		minimumspent: this.minimumspent,
      		max_uses_user: this.max_uses_user,
      		max_uses: this.max_uses,
      		excludecouponproducts: this.excludecouponproducts,
      		excludecouponcategories: this.excludecouponcategories,
      		couponcategories: this.couponcategories,
      		couponproducts: this.couponproducts,
      		couponemails: this.couponemails

      	}).then(response => {
      		console.log(response.data)
        alert("Updated")
        window.location.reload(true)
      }).catch(error => {
        if (error.response.status === 422) {
          this.errors = error.response.data.errors || {};
          console.log(error.response.data.errors)
        }
      });
    },

    
  }

}
</script>




<style>
.main{
	background: #fff;
	border-radius: 10px;
	padding: 20px;
	height: 500px;
}
.mainarea{
	margin-top: 10px;
}

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 20%;
  height: 360px;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button .active {
  background-color: #ddd;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 80%;
  border-left: none;
  height: 360px;
}

input, select, textarea,multiselect {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

</style>
<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
