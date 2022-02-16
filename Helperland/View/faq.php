<?php $base_url='http://localhost/TatvaSoft/Helperland/' ?>
<!DOCTYPE html>
<html>
<head>
<script src="https://kit.fontawesome.com/5602f8a8c9.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel=stylesheet>
<title> FAQS</title>
<link rel="stylesheet" href="./assets/css/faq.css">
<link rel="stylesheet" href="./assets/css/headerall.css">
</head>
<body>
<!--Nav bar start-->

<?php include('includes/headerall.php'); ?>
<img src="./assets/images/group-16.png" class="responsive">

             <h2 class="title-main3">FAQS</h2>
             <div class="underline-design ">
              <div class="line "></div>
              <img src="./assets/images/faq-star.png " alt=" ">
              <div class="line "></div>
          </div >
             <p class="faqsubpart">Whether you are Customer or Service provider,</p>
             <p class="faqsubpart1">We have tried our best to solve all your queries 
             and questions.</p>
             <div id="menu">
             <ul class="nav nav-tabs abc justify-content-center" id="tabination">
              <li class="selected" onclick="customer();" id="customer"> For Customers</li>
              <li onclick="serviceprovider();" id="sp">For Service Provider</li>
            </ul>
            </div>
             
          <br>
          <br>
<div class="tab-content d-flex flex-wrap justify-content-center" id="mainfaq">
  <!--for customer-->
  <div id="customerfaq">
    <div class="wrapping">
      <div class="Quelink">
      <a id="btn2" data-bs-toggle="collapse" data-bs-target="#demo">
      <img src="./assets/images/vector-smart-object-copy.png">
      </a>
      <p class="loc">testQA??</p></div>
      <div id="demo" class="collapse loc11">
      A:testQA
      </div>
      </div>
      
      <div class="wrapping">
      <div class="Quelink">
      <a id="btn3" data-bs-toggle="collapse" data-bs-target="#demo3">
      <img src="./assets/images/vector-smart-object-copy.png">
      </a>
      <p class="loc">Which Helperland professional will come to my place?</p></div>
      <div id="demo3" class="collapse loc11">
      Helperland has a vast network of experienced, top-rated cleaners. Based on the time and date of your request, we work to assign the best professional available.Like working with a specific pro? Add them to your Pro Team from the mobile app and they'll be requested first for all future bookings.You will receive an email with details about your professional prior to your appointment.
      </div>
      </div>
      
      <div class="wrapping">
      <div class="Quelink">
      <a id="btn4" data-bs-toggle="collapse" data-bs-target="#demo4">
      <img src="./assets/images/vector-smart-object-copy.png">
      </a>
      <p class="loc">Can I skip or reschedule bookings?</p></div>
      <div id="demo4" class="collapse loc11">
      You can reschedule any booking for free at least 24 hours in advance of the scheduled start time. If you need to skip a booking within the minimum commitment, we’ll credit the value of the booking to your account. You can use this credit on future cleanings and other Helperland services.
      </div>
      </div>
      
      <div class="wrapping">
      <div class="Quelink">
      <a id="btn5" data-bs-toggle="collapse" data-bs-target="#demo5" >
      <img src="./assets/images/vector-smart-object-copy.png">
      </a>
      <p class="loc">test tatva</p></div>
      <div id="demo5" class="collapse loc11">
      test tatva
      </div>
      </div>
      
      <div class="wrapping">
      <div class="Quelink">
      <a id="btn6" data-bs-toggle="collapse" data-bs-target="#demo6" >
      <img src="./assets/images/vector-smart-object-copy.png">
      </a>
      <p class="loc">test tatvasoft</p></div>
      <div id="demo6" class="collapse loc11">
      test tatvasoft
      </div>
      </div>
      
      <div class="wrapping">
      <div class="Quelink">
      <a id="btn7" data-bs-toggle="collapse" data-bs-target="#demo7" >
      <img src="./assets/images/vector-smart-object-copy.png"> 
      </a>
      <p class="loc">Do I need to be home for the booking?</p></div>
      <div id="demo7" class="collapse loc11">
      We strongly recommend that you are home for the first clean of your booking to show your cleaner around. Some customers choose to give a spare key to their cleaner, but this decision is based on individual preferences.
      </div>
      </div>
      <div class="wrapping">
      <div class="Quelink">
      <a id="btn1" data-bs-toggle="collapse" data-bs-target="#demo1">
      <img src="./assets/images/vector-smart-object-copy.png">
      </a>
      <p class="loc">What's included in a cleaning? </p></div>
      <div id="demo1" class="collapse loc11">
      Bedroom Living Room & Common Areas Bathrooms Kitchen Extras
      </div>
      </div>
      
  </div>
  
<!--for sp-->
<div  id="spfaq">
  <div class="wrapping" >
    <div class="Quelink">
    <a id="btn" data-bs-toggle="collapse" data-bs-target="#s">
    <img src="./assets/images/vector-smart-object-copy.png">
    </a>
    <p class="loc">How much do service providers earn?</p></div>
    <div id="s" class="collapse loc11">
    The self-employed service providers working with Helperland set their own payouts, this means that they decide how much they earn per hour.
    </div>
    </div>
    
    <div class="wrapping">
    <div class="Quelink">
    <a id="btn10" data-bs-toggle="collapse" data-bs-target="#demo12" >
    <img src="./assets/images/vector-smart-object-copy.png">
    </a>
    <p class="loc">What support do you provide to the service providers?</p></div>
    <div id="demo12" class="collapse loc11">
    Our call-centre is available to assist the service providers with all queries or issues in regards to their bookings during office hours. Before a service provider starts receiving jobs, every individual partner receives an orientation session to familiarise with the online platform and their profile.
    </div>
    </div>
    
    </div>
</div>

</div> 
        <h3 class="title-main2">GET OUR MEWSLETTER</h3>
        <div id="container">
          <div class="buttons">
            <div>
                <input type="text" placeholder="YOUR EMAIL" class="email">
                <button class="submitb">Submit</button>
           </div>
          </div>
        </div>
         
        <br>

<?php include('includes/footerall.php'); ?>
