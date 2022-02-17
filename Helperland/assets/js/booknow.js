var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0');
var yyyy = today.getFullYear();
today = yyyy + '-' + mm + '-' + dd;
$('#date_picker').attr('min',today);
                                        
var insideCabinet=document.getElementById("insideCabinetCheck");
var insideFridge=document.getElementById("insideFridgeCheck");
var insideOven=document.getElementById("insideOvenCheck");
var laundry=document.getElementById("laundryCheck");
var interior=document.getElementById("interiorCheck");
var totalhr = document.getElementById("totalhr");

function onInsideCabinet(){
          if(insideCabinet.checked == true){
            document.getElementById("insideCabinetImg").src="./assets/images/3-green.png";
            $("#extra-services").append("<p  class='five' style='display: flex;justify-content: space-between;'>Inside Cabinet <span style='text-align: right;''>30 Mins &nbsp;</span></p>");
            $("#extra-services1").append("<p  class='five1' style='display: flex;justify-content: space-between;'>Inside Cabinet <span style='text-align: right;''>30 Mins &nbsp;</span></p>");
            let addhour = parseFloat($("#duration").val()) + 0.5;
            $("#duration").val(addhour.toFixed(1));
            $("#totalhr").html($("#duration").val());
            $("#totalhrr").html($("#duration").val());
            $(".totalcost").html('$'+ Math.floor(parseFloat($("#duration").val()) * 25));
           }
          else{
            document.getElementById("insideCabinetImg").src="./assets/images/3.png";
            $(".five").hide();
            $(".five1").hide();
            let addhour = parseFloat($("#duration").val()) - 0.5;
            $("#duration").val(addhour.toFixed(1));
            $("#totalhr").html($("#duration").val());
            $("#totalhrr").html($("#duration").val());
            $(".totalcost").html('$'+ Math.floor(parseFloat($("#duration").val()) * 25));
          }
}

function onInsideFridge(){
          if(insideFridge.checked){
            document.getElementById("insideFridgeImg").src="./assets/images/5-green.png";
            $("#extra-services").append("<p  class='four' style='display: flex;justify-content: space-between;'>Inside Fridge <span style='text-align: right;''>30 Mins &nbsp;</span</p>");
            $("#extra-services1").append("<p  class='four1' style='display: flex;justify-content: space-between;'>Inside Fridge <span style='text-align: right;''>30 Mins &nbsp;</span</p>");
             let addhour = parseFloat($("#duration").val()) + 0.5;
            $("#duration").val(addhour.toFixed(1));
            $("#totalhr").html($("#duration").val());
            $("#totalhrr").html($("#duration").val());
             $(".totalcost").html('$'+ Math.floor(parseFloat($("#duration").val()) * 25));
          }
          else{
            document.getElementById("insideFridgeImg").src="./assets/images/5.png";
            $(".four").hide();
            $(".four1").hide();
            let addhour = parseFloat($("#duration").val()) - 0.5;
            $("#duration").val(addhour.toFixed(1));
            $("#totalhr").html($("#duration").val());
            $("#totalhrr").html($("#duration").val());
             $(".totalcost").html('$'+ Math.floor(parseFloat($("#duration").val()) * 25));
          }
}

function onInsideOven(){
          if(insideOven.checked){
            document.getElementById("insideOvenImg").src="./assets/images/4-green.png";
            $("#extra-services").append("<p  class='three' style='display: flex;justify-content: space-between;'>Inside Oven<span style='text-align: right;''>30 Mins &nbsp;</span</p>");
            $("#extra-services1").append("<p  class='three' style='display: flex;justify-content: space-between;'>Inside Oven<span style='text-align: right;''>30 Mins &nbsp;</span</p>");
            let addhour = parseFloat($("#duration").val()) + 0.5;
            $("#duration").val(addhour.toFixed(1));
            $("#totalhr").html($("#duration").val());
            $("#totalhrr").html($("#duration").val());
             $(".totalcost").html('$'+ Math.floor(parseFloat($("#duration").val()) * 25));
          }
          else{
            document.getElementById("insideOvenImg").src="./assets/images/4.png";
            $(".three").hide();
            $(".three1").hide();
            let addhour = parseFloat($("#duration").val()) - 0.5;
            $("#duration").val(addhour.toFixed(1));
            $("#totalhr").html($("#duration").val());
            $("#totalhrr").html($("#duration").val());
             $(".totalcost").html('$'+ Math.floor(parseFloat($("#duration").val()) * 25));
          }
}

function onLaundry(){
          if(laundry.checked){
            document.getElementById("laundryImg").src="./assets/images/2-green.png";
            $("#extra-services").append("<p  class='two' style='display: flex;justify-content: space-between;'>Laundry & Wash <span style='text-align: right;''>30 Mins &nbsp;</span</p>");
            $("#extra-services1").append("<p  class='two1' style='display: flex;justify-content: space-between;'>Laundry & Wash <span style='text-align: right;''>30 Mins &nbsp;</span</p>");
            let addhour = parseFloat($("#duration").val()) + 0.5;
            $("#duration").val(addhour.toFixed(1));
            $("#totalhr").html($("#duration").val());
            $("#totalhrr").html($("#duration").val());
             $(".totalcost").html('$'+ Math.floor(parseFloat($("#duration").val()) * 25));
          }
          else{
            document.getElementById("laundryImg").src="./assets/images/2.png";
            $(".two").hide();
            $(".two1").hide();
            let addhour = parseFloat($("#duration").val()) - 0.5;
            $("#duration").val(addhour.toFixed(1));
            $("#totalhr").html($("#duration").val());
            $("#totalhrr").html($("#duration").val());
             $(".totalcost").html('$'+ Math.floor(parseFloat($("#duration").val()) * 25));
          }
}

function onInterior(){
          if(interior.checked){
            document.getElementById("interiorImg").src="./assets/images/1-green.png";
            $("#extra-services").append("<p  class='one' style='display: flex;justify-content: space-between;'>Interior Cleaning <span style='text-align: right;''>30 Mins &nbsp;</span</p>");
            $("#extra-services1").append("<p  class='one' style='display: flex;justify-content: space-between;'>Interior Cleaning <span style='text-align: right;''>30 Mins &nbsp;</span</p>");
            let addhour = parseFloat($("#duration").val()) + 0.5;
            $("#duration").val(addhour.toFixed(1));
            $("#totalhr").html($("#duration").val());
            $("#totalhrr").html($("#duration").val());
             $(".totalcost").html('$'+ Math.floor(parseFloat($("#duration").val()) * 25));
          }
          else{
            document.getElementById("interiorImg").src="./assets/images/1.png";
            $(".one").hide();
            $(".one1").hide();
            let addhour = parseFloat($("#duration").val()) - 0.5;
            $("#duration").val(addhour.toFixed(1));
            $("#totalhr").html($("#duration").val());
            $("#totalhrr").html($("#duration").val());
             $(".totalcost").html('$'+ Math.floor(parseFloat($("#duration").val()) * 25));
        }
}
document.getElementById("duration").onchange = function(){
   $("#totalhr1").html($("#duration").val());
   $("#totalhr11").html($("#duration").val());
    $("#totalhr").html($("#duration").val());
    $("#totalhrr").html($("#duration").val());
   if(interior.checked){
            let addhour = parseFloat($("#duration").val()) + 0.5;
            $("#duration").val(addhour.toFixed(1));
            $("#totalhr").html($("#duration").val());
            $("#totalhrr").html($("#duration").val());
    }
   if(laundry.checked){
            let addhour = parseFloat($("#duration").val()) + 0.5;
            $("#duration").val(addhour.toFixed(1));
            $("#totalhr").html($("#duration").val());
            $("#totalhrr").html($("#duration").val());
    }
   if(insideOven.checked){
            let addhour = parseFloat($("#duration").val()) + 0.5;
            $("#duration").val(addhour.toFixed(1));
            $("#totalhr").html($("#duration").val());
            $("#totalhrr").html($("#duration").val());
    }
   if(insideCabinet.checked == true){
            let addhour = parseFloat($("#duration").val()) + 0.5;
            $("#duration").val(addhour.toFixed(1));
            $("#totalhr").html($("#duration").val());
            $("#totalhrr").html($("#duration").val());
    }
   if(insideFridge.checked){
            let addhour = parseFloat($("#duration").val()) + 0.5;
            $("#duration").val(addhour.toFixed(1));
            $("#totalhr").html($("#duration").val());
            $("#totalhrr").html($("#duration").val());
    }
   $(".totalcost").html('$'+ Math.floor(parseFloat($("#duration").val()) * 25));
   
}

document.getElementById("date_picker").onchange = function(){
  var date=document.getElementById("date_picker").value;
  document.getElementById("summary").innerHTML=date ;
  document.getElementById("summaryp").innerHTML=date ;
}
document.getElementById("time").onchange = function(){
  var time=document.getElementById("time").value;
  document.getElementById("summary1").innerHTML=time ;
  document.getElementById("summaryp1").innerHTML=time ;
}

function btnaddnewadd(){
  document.getElementById("addnewadd").style.display="none";
  document.getElementById("formadd").style.display="block";
}
function btncancel(){
  document.getElementById("formadd").style.display="none";
  document.getElementById("addnewadd").style.display="block";
}

var img1 =document.getElementById("imgsetupservice");
var img2=document.getElementById("imgschedule");
var img3=document.getElementById("details");
var img4=document.getElementById("payment");
var p1=document.getElementById("forsetup");
var p2=document.getElementById("schedulep");
var p3=document.getElementById("detailsp");
var p4=document.getElementById("paymentp");
var btn1=document.getElementById("setupservice");
var btn2=document.getElementById("schedule1");
var btn3=document.getElementById("details1");
var btn4=document.getElementById("payment1");
var setup=document.getElementById("pills-setupservice");
var schedulep=document.getElementById("pills-scheduleplan");
var detail=document.getElementById("pills-Details");
var payment1=document.getElementById("pills-payment");
var postalcode=document.getElementById("postalcode");
var tab1=document.getElementById("pills-tab1");
var tab2=document.getElementById("pills-tab2");
var tab3=document.getElementById("pills-tab3");
var tab4=document.getElementById("pills-tab4");

tab2.style.pointerEvents="none";
tab3.style.pointerEvents="none";
tab4.style.pointerEvents="none";
var addPostalcode;
function setupservice(){
  img1.src="./assets/images/setup-service-white.png";
  img2.src="./assets/images/schedule.png";
  img3.src="./assets/images/details.png";
  img4.src="./assets/images/payment.png";
  p1.style.color="white";
  p2.style.color="#646464";
  p3.style.color="#646464";
  p4.style.color="#646464";
  btn1.style.backgroundColor="#1d7a8c";
  btn2.style.backgroundColor="#f3f3f3";
  btn3.style.backgroundColor="#f3f3f3";
  btn4.style.backgroundColor="#f3f3f3";
  tab2.style.pointerEvents="none";
  tab3.style.pointerEvents="none";
  tab4.style.pointerEvents="none";
  setup.style.display="block";
  schedulep.style.display="none";
  detail.style.display="none";
  payment1.style.display="none";
}
function scheduleplan(){
  img1.src="./assets/images/setup-service-white.png";
  img2.src="./assets/images/schedule-white.png";
  img3.src="./assets/images/details.png";
  img4.src="./assets/images/payment.png";
  p1.style.color="white";
  p2.style.color="white";
  p3.style.color="#646464";
  p4.style.color="#646464";
  btn1.style.backgroundColor="#1d7a8c";
  btn2.style.backgroundColor="#1d7a8c";
  btn3.style.backgroundColor="#f3f3f3";
  btn4.style.backgroundColor="#f3f3f3";
  btn1.style.borderRight="1px solid white";
  btn2.style.borderRight="1px solid #ddd";
  btn3.style.borderRight="1px solid #ddd";
  tab2.style.pointerEvents="auto";
  tab3.style.pointerEvents="none";
  tab4.style.pointerEvents="none";
  setup.style.display="none";
  schedulep.style.display="block";
  detail.style.display="none";
  payment1.style.display="none";
}
function details(){
  img1.src="./assets/images/setup-service-white.png";
  img2.src="./assets/images/schedule-white.png";
  img3.src="./assets/images/details-white.png";
  img4.src="./assets/images/payment.png";
  p1.style.color="white";
  p2.style.color="white";
  p3.style.color="white";
  p4.style.color="#646464";
  btn1.style.backgroundColor="#1d7a8c";
  btn2.style.backgroundColor="#1d7a8c";
  btn3.style.backgroundColor="#1d7a8c";
  btn4.style.backgroundColor="#f3f3f3";
  btn1.style.borderRight="1px solid white";
  btn2.style.borderRight="1px solid white";
  btn3.style.borderRight="1px solid #ddd";
  tab2.style.pointerEvents="auto";
  tab3.style.pointerEvents="auto";
  tab4.style.pointerEvents="none";
  setup.style.display="none";
  schedulep.style.display="none";
  detail.style.display="block";
  payment1.style.display="none";
  document.getElementById("addPostalcode").value = document.getElementById("postalcode").value;
  form3();

}

function details_tab(){
  img1.src="./assets/images/setup-service-white.png";
  img2.src="./assets/images/schedule-white.png";
  img3.src="./assets/images/details-white.png";
  img4.src="./assets/images/payment.png";
  p1.style.color="white";
  p2.style.color="white";
  p3.style.color="white";
  p4.style.color="#646464";
  btn1.style.backgroundColor="#1d7a8c";
  btn2.style.backgroundColor="#1d7a8c";
  btn3.style.backgroundColor="#1d7a8c";
  btn4.style.backgroundColor="#f3f3f3";
  btn1.style.borderRight="1px solid white";
  btn2.style.borderRight="1px solid white";
  btn3.style.borderRight="1px solid #ddd";
  tab2.style.pointerEvents="auto";
  tab3.style.pointerEvents="auto";
  tab4.style.pointerEvents="none";
  setup.style.display="none";
  schedulep.style.display="none";
  detail.style.display="block";
  payment1.style.display="none";
  document.getElementById("addPostalcode").value = document.getElementById("postalcode").value;
  
}

function payment(){
  img1.src="./assets/images/setup-service-white.png";
  img2.src="./assets/images/schedule-white.png";
  img3.src="./assets/images/details-white.png";
  img4.src="./assets/images/payment-white.png";
  p1.style.color="white";
  p2.style.color="white";
  p3.style.color="white";
  p4.style.color="white";
  btn1.style.backgroundColor="#1d7a8c";
  btn2.style.backgroundColor="#1d7a8c";
  btn3.style.backgroundColor="#1d7a8c";
  btn4.style.backgroundColor="#1d7a8c";
  btn1.style.borderRight="1px solid white";
  btn2.style.borderRight="1px solid white";
  btn3.style.borderRight="1px solid white";
  tab2.style.pointerEvents="auto";
  tab3.style.pointerEvents="auto";
  tab4.style.pointerEvents="auto";
  setup.style.display="none";
  schedulep.style.display="none";
  detail.style.display="none";
  payment1.style.display="block";
  
}
function form1(){
 // $('#addresses div').html('');
  var postalcode=document.getElementById("postalcode").value;
  if(postalcode == ""){
    swal({
      title: "Alert!",
      text: "pls enter postal code First to continue..",
      icon: "warning",
      dangerMode: true,
    });
    
  }
  else{
    $.ajax({
      url:'http://localhost/TatvaSoft/Helperland/?controller=Book&function=postalcodeavailability',
      method: 'POST',
      dataType:'json',
      data:{
        postalcode : postalcode,
      },
      success:function(data){
        if(data == "Yes"){
         scheduleplan();
        }
        else{
          swal({
            title: "Alert!",
            text: "We are not providing service in this area. We’ll notify you if any helper would start working near your area.",
            icon: "warning",
            dangerMode: true,
          });
        }
      },
      error:function(err){
       console.error(err);
      }
    });
  }
}
function form2(){
  $.ajax({
    url:'http://localhost/TatvaSoft/Helperland/?controller=Book&function=tabtwo',
    method: 'POST',
    dataType:'json',
    data:$('#form2').serialize(),
    success:function(data){
      if(data == "yes"){
        details();
      }
      else{
        swal({
          title: "Alert!",
          text: "service is not available on this postalcode",
          icon: "warning",
          dangerMode: true,
        });
        
      }

    },
    error:function(err){
     console.error(err);
    }

  });
}

function form3(){
 
  $.ajax({
    url:'http://localhost/TatvaSoft/Helperland/?controller=Book&function=tabthree',
    contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
    method: 'GET',
    dataType:'json',
    data:$('#form3').serialize(),
    success:function(data){
    
    var count = Object.keys(data).length;
    $('#addresses').empty();
    for(let i=0;i < count; i++){
        document.getElementById("addresses").innerHTML+='<div><input type="radio" name="address" id="address'+ data[i].AddressId +
         '" value="'+' '+ data[i].AddressId + '"><label for="address' + data[i].AddressId +'"><p><b>Address:</b> '+
          data[i].AddressLine2 +" "+ data[i].AddressLine1 +','+data[i].City +" "+ data[i].PostalCode +
          '</p><p><b>Phone number:</b> '+ data[i].Mobile +'</p></label></div>';
  
    }
    },
    error:function(err){
     console.error(err);
    }

  });




}
function form4(){
  var id1=document.querySelector('input[name=address]:checked'); 
   if(id1){
  $.ajax({
    url:'http://localhost/TatvaSoft/Helperland/?controller=Book&function=tabfour',
    contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
    method: 'POST',
    dataType:'json',
    
    data:$('#form3').serialize(),
    success:function(data){
      if(data == "yes"){
        payment();//fourth tab
      }
      else{
        alert ("service is not available on this postalcode");
      }
    },
    error:function(err){
     console.error(err);
    }

  });
}
}
      
function save(){
  document.getElementById("formadd").style.display="none";
  document.getElementById("addnewadd").style.display="block";

        var addStreetname =document.getElementById("addStreetname").value;
        var addHouseno=document.getElementById("addHouseno").value;
        var addPostalcode=document.getElementById("addPostalcode").value;
        var addPhoneno=document.getElementById("addPhoneno").value;
        var addCity=document.getElementById("addCity").value;
        
 $.ajax({
  url:'http://localhost/TatvaSoft/Helperland/?controller=Book&function=AddAddress',
  contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
  method: 'POST',
  dataType:'json',
  data:{
    streetname : addStreetname ,
    houseno :addHouseno , 
    code :addPostalcode , 
    mobile :addPhoneno , 
    city :addCity
    },
  success:function(data){
    if(data == "yes"){
      details();//third tab
    }
    else{
      alert ("service is not available on this postalcode");
    } 
  },
  error:function(err){
   console.error(err);
  }
});    
  
}

function completebooking(){
  var data = {};
  var extrahour = 0;
  data.postalcode = document.getElementById("postalcode").value;
  data.serviceStartDate = document.getElementById("date_picker").value;
  data.extraHours = extrahour;
  data.serviceHours = parseFloat(document.getElementById("duration").value) -  data.extraHours ;
  data.subTotal = parseFloat(extrahour) + parseFloat(data.serviceHours);
  data.totalCost = ( data.subTotal) * 25;
  data.comments = document.getElementById("message").value;
  data.paymentDue = false;
  data.havepets = document.getElementById("havepet").checked;
  data.paymentDone = true;
  data.addressId = $('#addresses div input[type=radio]:checked').val();
  console.log(data.addressId);

  $.ajax({
    type : 'POST',
    url : 'http://localhost/TatvaSoft/Helperland/?controller=Book&function=Completebooking',
    contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
    data :data ,
    dataType:'json',
    success :function(data){
      
      if(data.status == "yes"){
        var id = data.id;
        swal("Good job!", "booking successful : "+id, "success");
        
      }
      else{
        swal({
          title: "Alert!",
          text: "Booking Failed",
          icon: "warning",
          dangerMode: true,
        });
        
      }
    },
    error:function(err){
      console.error(err);
     }
  });


}

