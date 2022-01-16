var insideCabinet=document.getElementById("insideCabinetCheck");
var insideFridge=document.getElementById("insideFridgeCheck");
var insideOven=document.getElementById("insideOvenCheck");
var laundry=document.getElementById("laundryCheck");
var interior=document.getElementById("interiorCheck");
function onInsideCabinet(){
          if(insideCabinet.checked){
            document.getElementById("insideCabinetImg").src="assets/3-green.png";
          }
          else{
            document.getElementById("insideCabinetImg").src="assets/3.png";
          }
}

function onInsideFridge(){
          if(insideFridge.checked){
            document.getElementById("insideFridgeImg").src="assets/5-green.png";
          }
          else{
            document.getElementById("insideFridgeImg").src="assets/5.png";
          }
}

function onInsideOven(){
          if(insideOven.checked){
            document.getElementById("insideOvenImg").src="assets/4-green.png";
          }
          else{
            document.getElementById("insideOvenImg").src="assets/4.png";
          }
}

function onLaundry(){
          if(laundry.checked){
            document.getElementById("laundryImg").src="assets/2-green.png";
          }
          else{
            document.getElementById("laundryImg").src="assets/2.png";
          }
}

function onInterior(){
          if(interior.checked){
            document.getElementById("interiorImg").src="assets/1-green.png";
          }
          else{
            document.getElementById("interiorImg").src="assets/1.png";
        }
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

function setupservice(){
  img1.src="assets/setup-service-white.png";
  img2.src="assets/schedule.png";
  img3.src="assets/details.png";
  img4.src="assets/payment.png";
  p1.style.color="white";
  p2.style.color="#646464";
  p3.style.color="#646464";
  p4.style.color="#646464";
  btn1.style.backgroundColor="#1d7a8c";
  btn2.style.backgroundColor="#f3f3f3";
  btn3.style.backgroundColor="#f3f3f3";
  btn4.style.backgroundColor="#f3f3f3";
  setup.style.display="block";
  schedulep.style.display="none";
  detail.style.display="none";
  payment1.style.display="none";
}
function scheduleplan(){
  img1.src="assets/setup-service-white.png";
  img2.src="assets/schedule-white.png";
  img3.src="assets/details.png";
  img4.src="assets/payment.png";
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
  setup.style.display="none";
  schedulep.style.display="block";
  detail.style.display="none";
  payment1.style.display="none";

  
}
function details(){
  img1.src="assets/setup-service-white.png";
  img2.src="assets/schedule-white.png";
  img3.src="assets/details-white.png";
  img4.src="assets/payment.png";
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
  setup.style.display="none";
  schedulep.style.display="none";
  detail.style.display="block";
  payment1.style.display="none";
}
function payment(){
  img1.src="assets/setup-service-white.png";
  img2.src="assets/schedule-white.png";
  img3.src="assets/details-white.png";
  img4.src="assets/payment-white.png";
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
  setup.style.display="none";
  schedulep.style.display="none";
  detail.style.display="none";
  payment1.style.display="block";
  
}
        var addStreetname =document.getElementById("addStreetname");
        var addHouseno=document.getElementById("addHouseno");
        var addPostalcode=document.getElementById("addPostalcode");
        var addPhoneno=document.getElementById("addPhoneno");
        var addCity=document.getElementById("addCity");
        
function save(){
  // document.getElementById("addresses").classList.add("forborder ");
  document.getElementById("addresses").innerHTML+='<div><input type="radio" name="address" id="address'+addHouseno.value+'"><label for="address'+addHouseno.value+'"><p><b>Address:</b> '+addStreetname.value+' '+ addHouseno.value +', '+ addCity.value+' '+addPostalcode.value+'</p><p><b>Phone number:</b> '+addPhoneno.value+'</p></label></div>';
        
  
}