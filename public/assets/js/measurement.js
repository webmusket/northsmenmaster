

// converter

var standBtn = document.getElementById('measureStandard');
var metricBtn = document.getElementById('measureMetric');


 $('.measureStandard').on('click',function(){
      $('#standardM').show();
      $('#metricM').hide();
      $('.measureMetric').removeClass('disabled');
      $(".measureStandard").addClass('disabled');





        // feet - cm
        var cm = $(this).closest('div').find('#fValue3').val();
        var inches = (cm*0.393701).toFixed(0);
        var feet = Math.floor(inches / 12);
        inches %= 12;
        if (feet == 3) {
          document.getElementById("fValue1").selectedIndex = "2";
        }        
        else if (feet == 4) {
          document.getElementById("fValue1").selectedIndex = "3";
        }        
        else if (feet == 5) {
          document.getElementById("fValue1").selectedIndex = "4";
        }        
        else if (feet == 6) {
          document.getElementById("fValue1").selectedIndex = "5";
        }
        
        if (inches == 0){
          document.getElementById("fValue2").selectedIndex = "1";
        }        
        else if (inches == 1){
          document.getElementById("fValue2").selectedIndex = "2";
        }
        else if (inches == 2){
          document.getElementById("fValue2").selectedIndex = "3";
        }
        else if (inches == 3){
          document.getElementById("fValue2").selectedIndex = "4";
        }
        else if (inches == 4){
          document.getElementById("fValue2").selectedIndex = "5";
        }
        else if (inches == 5){
          document.getElementById("fValue2").selectedIndex = "6";
        }
        else if (inches == 6){
          document.getElementById("fValue2").selectedIndex = "7";
        }
        else if (inches == 7){
          document.getElementById("fValue2").selectedIndex = "8";
        }
        else if (inches == 8){
          document.getElementById("fValue2").selectedIndex = "*";
        }
        else if (inches == 9){
          document.getElementById("fValue2").selectedIndex = "10";
        }
        else if (inches == 10){
          document.getElementById("fValue2").selectedIndex = "11";
        }
        else if (inches == 11){
          document.getElementById("fValue2").selectedIndex = "12";
        }
        else if (inches == 12){
          document.getElementById("fValue2").selectedIndex = "13";
        }





        // kg - pound

        var v_kg=$(this).closest('div').find('#wValue2').val();  
        var v_pd = v_kg*2.20462;
        v_pd = v_pd.toFixed(2);
        $(this).closest('div').find("#wValue1").val(v_pd);

        // inch - cm 

      var v_cm=$(this).closest('div').find('.qty_input').val();
      var v_in=v_cm*0.393701;
      v_in = v_in.toFixed(2);
      $(this).closest('div').find(".qty_input").val(v_in);

});

$('.measureMetric').on('click',function(){
      $('#standardM').hide();
      $('#metricM').show();
      $('.measureStandard').removeClass('disabled');
      $(".measureMetric").addClass('disabled');

      // ft - cm

      var ft = $(this).closest('div').find('#fValue1').val();
      var inC = $(this).closest('div').find('#fValue2').val();
      var cmC = inC*2.54 + ft*30.48;
      $(this).closest('div').find("#fValue3").val(cmC);

        // kg - pound

        var v_pd=$(this).closest('div').find('#wValue1').val();  
        var v_kg = v_pd*0.453591;
        v_kg = v_kg.toFixed(2);
        $(this).closest('div').find("#wValue2").val(v_kg);

          // inch - cm 

        var v_in=$(this).closest('div').find('.qty_input').val();
        var v_cm=v_in*2.54;
        v_cm = v_cm.toFixed(2);
        $(this).closest('div').find(".qty_input").val(v_cm);

});

// error msg

$('.mbtnnxt').click(function(){
   $("#myCarousel").carousel("next");

if( !$('.fValue').val() && !$('#fValue3').val())  { 
	document.getElementById("errorAlert").innerHTML = "Please fill the required information";

  setTimeout(function(){
    document.getElementById("errorAlert").innerHTML = '';
}, 3000);
	return false;
	}

  else if( !$('.wValue').val() && !$('#wValue2').val())  { 
  document.getElementById("errorAlert").innerHTML = "Please fill the required information";

  setTimeout(function(){
    document.getElementById("errorAlert").innerHTML = '';
}, 3000);
  return false;
  }


});



// increament decreament

$(function () {
    $('.plus-btn').on('click',function(){
        var qty = $(this).closest('div').find('.qty_input');
        var currentVal = parseFloat($(qty).val());
        if (!isNaN(currentVal)) {
            $(qty).val((currentVal + 0.25));
        }
    });
    $('.minus-btn').on('click',function(){
        var qty = $(this).closest('div').find('.qty_input');
        var currentVal = parseFloat($(qty).val());
        if (!isNaN(currentVal) && currentVal > 0) {
            $(qty).val((currentVal - 0.25));
        }
    });
});


// final modal

$(function () {
    $('.mbtnprv , .mbtnnxt').on('click',function(){

var qty1 = document.getElementById("qty1").value;
var qty2 = document.getElementById("qty2").value;
var qty3 = document.getElementById("qty3").value;
var qty4 = document.getElementById("qty4").value;
var qty5 = document.getElementById("qty5").value;
var qty6 = document.getElementById("qty6").value;
var qty7 = document.getElementById("qty7").value;
var qty8 = document.getElementById("qty8").value;
var qty9 = document.getElementById("qty9").value;
var qty10 = document.getElementById("qty10").value;
var qty11 = document.getElementById("qty11").value;
var qty12 = document.getElementById("qty12").value;
var qty13 = document.getElementById("qty13").value;
var qty14 = document.getElementById("qty14").value;

//extracode written by md asaduzzaman
var stdfit = $('#heightinstandard option:selected').val();
var stdinch = $('#fValue2 option:selected').val();
var stdweight = document.getElementById("stdweight").value;
var metheight = document.getElementById("fValue3").value;
var metweight = document.getElementById("wValue2").value;


var backposture = $('input[name=backposture]:checked').val();
var shoulder = $('input[name=shoulder]:checked').val();
var ashoulder = $('input[name=ashoulder]:checked').val();
var fit = $('input[name=fit]:checked').val();




document.getElementById("bm1").innerHTML = qty1;
document.getElementById("bm2").innerHTML = qty2;
document.getElementById("bm3").innerHTML = qty3;
document.getElementById("bm4").innerHTML = qty4;
document.getElementById("bm5").innerHTML = qty5;
document.getElementById("bm6").innerHTML = qty6;
document.getElementById("bm7").innerHTML = qty7;
document.getElementById("bm8").innerHTML = qty8;
document.getElementById("bm9").innerHTML = qty9;
document.getElementById("bm10").innerHTML = qty10;
document.getElementById("bm11").innerHTML = qty11;
document.getElementById("bm12").innerHTML = qty12;
document.getElementById("bm13").innerHTML = qty13;
document.getElementById("bm14").innerHTML = qty14;

//code written by me 
document.getElementById("fit").innerHTML = stdfit;
document.getElementById("inch").innerHTML = stdinch;
document.getElementById("stdweight").innerHTML = stdweight;
document.getElementById("cm").innerHTML = metheight;
document.getElementById("metweight").innerHTML = metweight;

document.getElementById("backposture").innerHTML = backposture;
document.getElementById("shoulder").innerHTML = shoulder;
document.getElementById("bodyfit").innerHTML = fit;

//code writen by me
document.getElementById('im1').value = qty1;
document.getElementById('im2').value = qty2;
document.getElementById('im3').value = qty3;
document.getElementById('im4').value = qty4;
document.getElementById('im5').value = qty5;
document.getElementById('im6').value = qty6;
document.getElementById('im7').value = qty7;
document.getElementById('im8').value = qty8;
document.getElementById('im9').value = qty9;
document.getElementById('im10').value = qty10;

document.getElementById('im11').value = qty11;
document.getElementById('im12').value = qty12;
document.getElementById('im13').value = qty13;
document.getElementById('im14').value = qty14;


 });

});