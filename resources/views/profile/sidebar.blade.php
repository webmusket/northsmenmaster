
<div class="rightcontainer">
    <div class="alert alert-secondary">
        <ul>
            <li>
                <span>{{Auth::user()->name}}</span>
            </li>
            <li>
                <strong>Email:</strong> {{Auth::user()->email}}
            </li>
        </ul>
    </div>

    <div class="list-group">
    	<a href="/profile-info" class="list-group-item list-group-item-action">Profiles</a>
		<a href="/pending-carts" class="list-group-item list-group-item-action ">Pending Carts</a>
		<a href="/order-records" class="list-group-item list-group-item-action">Order records</a>
		<a href="/wishlist" class="list-group-item list-group-item-action">Wish List</a>

		<a href="/profile-measurements" class="list-group-item list-group-item-action">Mesurments</a>
		<a href="/address" class="list-group-item list-group-item-action">Address</a>
		<a href="/invite-your-friends" class="list-group-item list-group-item-action">INVITE YOUR FRIENDS</a>
	</div>

</div>