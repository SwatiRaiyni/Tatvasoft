<!DOCTYPE html>
<html lang="en">
<?php  $base_url = "http://localhost/TatvaSoft/Helperland/"; ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <title>Book-Now</title>
    <script src="https://kit.fontawesome.com/5602f8a8c9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel=stylesheet>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <link rel='stylesheet' href="./assets/css/headerall.css">
    <link rel='stylesheet' href="./assets/css/booknow.css">
</head>

<body>
    <!--for navbar-->

        <?php include('includes/headerall.php'); ?>
        <?php if(!isset($_SESSION['userdata'])){ ?>
         <script> window.location.href="http://localhost/TatvaSoft/Helperland/?loginmodal=true"; </script> <?php }?>
        <section class="backgroung-imgsection">
            <img src="./assets/images/book-service-banner.jpg" id="responsive" >
        </section>
        <section style="min-height:200vh;" >
            <p class="title-main">Set up your cleaning service</p>
            <div class="underline-design ">
              <div class="line line1"></div>
              <img src="./assets/images/forma-1-copy-5.png" alt=" ">
              <div class="line line2"></div>
            </div>
        
        <section class="d-f">
            
            
              <div id="pills-tabContent" class="tab-content">
                <ul class="nav nav-pills mb-3 flex-nowrap" id="pills-tab" >
                    <li class="nav-item" role="button" id="pills-tab1" onclick="setupservice()" >
                      <button class="nav-link active nav-flex" id="setupservice"  type="button" >
                         <img src="./assets/images/setup-service-white.png" id="imgsetupservice"> <p id="forsetup" style="color: white;">Setup Service</p>
                         
                      </button>
                    </li>
                    <li class="nav-item" role="button" id="pills-tab2" onclick="scheduleplan()" >
                      <button class="nav-link nav-flex" id="schedule1"  type="button" >
                         <img src="./assets/images/schedule.png" id="imgschedule"> <p id="schedulep">Schedule & plan</p>
                      </button>
                    </li>
                    <li class="nav-item" role="button" id="pills-tab3" onclick="details_tab()">
                      <button class="nav-link nav-flex" id="details1"  type="button">
                         <img src="./assets/images/details.png" id="details"><p id="detailsp"> Your Details</p>
                      </button>
                    </li>
                    <li class="nav-item" role="button" id="pills-tab4" onclick="payment()">
                        <button class="nav-link nav-flex" id="payment1"  type="button" >
                           <img src="./assets/images/payment.png" id="payment"><p id="paymentp"> Make Payments</p>
                        </button>
                      </li>
                    
                  </ul>
                <form action="" method="post" id="form1">
                <div id="pills-setupservice">
                    <label class="form-label"><b>Enter Postal Code</b></label>
                    <input type="text" name="postalcode" id="postalcode" class="form-control w-230" placeholder="Enter Postal Code" />
                    <input type="button"  name="btnpostal" class="btncheckavailability" value="Check Availability" onclick="form1()" />
                   
                </div><!--ends check availability-->

                </form>
                
               
                
                <form action="" method="post" id="form2"><!--start Second pill-->
                <div id="pills-scheduleplan">
                        <div class="row w-100">
                            <div class="col-sm-12 col-lg-6 m-20">
                                <label class="form-label"><b>When do you need the cleanner?</b></label>
                                <div class="row">
                                    <div class="col-sm-6  m-20">
                                       <input id="date_picker" type="date" name="date" class="form-control" required  />
                                       
                                           
                                    </div>
                                    <div class="col-sm-6 m-20">
                                      <input type="time" class="form-control" id="datetime" name="time" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6 m-20">
                                <label class="form-label"><b>How long do you need your cleanner to stay?</b></label>
                                <select name="time1" id="duration" class="form-control m-20" required>
                                    <option value="3.0">3 Hrs</option>
                                    <option value="3.5">3.5 Hrs</option>
                                    <option value="4.0">4 Hrs</option>
                                    <option value="4.5">4.5 Hrs</option>
                                    <option value="5.0">5 Hrs</option>
                                    <option value="5.5">5.5 Hrs</option>
                                    <option value="6.0">6 Hrs</option>
                                    <option value="6.5">6.5 Hrs</option>
                                    <option value="7.0">7.0 Hrs</option>
                                    <option value="7.5">7.5 Hrs</option>
                                    <option value="8.0">8.0 Hrs</option>
                                    <option value="8.5">8.5 Hrs</option>
                                    <option value="9.0">9.0 Hrs</option>
                                    <option value="9.5">9.5 Hrs</option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <label><b>Extra Services</b></label>
                        
                        <div id="custom-checkboxes" class="check">
                            <div class="checkbox">
                              <input type="checkbox" name="insideCabinet" id="insideCabinetCheck" class="htmlcheckbox" onclick="onInsideCabinet();">
                              <label for="insideCabinetCheck" ><img src="./assets/images/3.png" id="insideCabinetImg" alt=""></label>
                              <p>inside cabinets</p>
                            </div>  
    
                            <div class="checkbox">
                              <input type="checkbox" id="insideFridgeCheck" name="insideFridge" class="htmlcheckbox" onclick="onInsideFridge();">
                              <label for="insideFridgeCheck"><img src="./assets/images/5.png" id="insideFridgeImg" alt="" ></label>
                              <p>inside Fridge</p>
                            </div>
    
                            <div class="checkbox">
                              <input type="checkbox" name="insideOven" id="insideOvenCheck" class="htmlcheckbox" onclick="onInsideOven();">
                              <label for="insideOvenCheck"><img src="./assets/images/4.png" id="insideOvenImg" alt=""></label>
                              <p>inside Oven</p>
                            </div>
    
                            <div class="checkbox">
                              <input type="checkbox" id="laundryCheck" name="laundry" class="htmlcheckbox" onclick="onLaundry();">
                              <label for="laundryCheck"><img src="./assets/images/2.png" id="laundryImg" alt=""></label>
                              <p>Laundry Wash & Dry</p>
                            </div>
    
                            <div class="checkbox">
                              <input type="checkbox" id="interiorCheck" name="interior" class="htmlcheckbox" onclick="onInterior();">
                              <label for="interiorCheck"><img src="./assets/images/1.png" id="interiorImg" alt=""></label>
                              <p>interior Windows</p>
                            </div>
                          </div>
    
                        <hr>
                        <label><b>Comments</b></label>
                        <textarea id="message" class="md-textarea form-control" rows="3" name="message"></textarea>
                        <input type="checkbox" id="havepet" name="checkbox" >I have pets at home
                        <hr>
                        
                        <input type="button" class="btncontinue" value="Continue" onclick="form2()" >
                     
                </div><!--Ends schedule and plan-->
                </form>
              
          
              <form action="#" id="form3"><!--Third pill start-->
                <div id="pills-Details" >
                    <p><b>Enter Your contact details,so we can serve you in better way!</b></p>
                
                <div id="addresses" >
                    <!-- <div class="forborder mt-20">
                      <input type="radio" name="address" id="address1">
                      <label for="address1">
                        <p><b>Address:</b> street 2 40, Troisdorf 53844</p>
                        <p><b>Phone number:</b> 8200035128</p>
                      </label>
                    </div>
                    <div class="forborder mt-20">
                      <input type="radio" name="address" id="address2">
                      <label for="address2">
                        <p><b>Address:</b> street 2 40, Troisdorf 53844</p>
                        <p><b>Phone number:</b> 8200035128</p>
                      </label>
                    </div> -->
                </div>
                <form action="" method="post">
                 <input type="button" class="btnaddnewadd" value="+ Add New Address" id="addnewadd" onclick="btnaddnewadd()">
                     <div id="formadd" class="forborder mt-20 border">
                        <div class="row mt-20 ml-20">
                            <div class="col-sm-6">
                                <label>Street Name</label>
                                <input type="text" name="streetname" class="form-control" placeholder="Street Name" id="addStreetname">
                            </div>
                            <div class="col-sm-6">
                                <label>House Number</label>
                                <input type="number" name="houseno" class="form-control" placeholder="House Number" id="addHouseno">
                            </div>
                        </div>
                        <div class="row mt-20 ml-20">
                            <div class="col-sm-6">
                                <label>Postal code</label>
                                <input type="number" name="code" class="form-control" id="addPostalcode" disabled>
                            </div>
                            <div class="col-sm-6">
                                <label>City</label>
                                <input type="text" name="city" class="form-control" placeholder="Tambatch Dietharz" id="addCity">    
                            </div>
                        </div>
                        <div class="row mt-20 ml-20">
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">+49</span>
                                    <input type="text" name="mobile" class="form-control" placeholder="Phone Number" id="addPhoneno" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex">
                          
                            <input type="button" value="save"  class="btnsave" onclick="save()">
                            <input type="button" value="cancel" class="btncancel"  onclick="btncancel()">
                        </div>
                    </div> 
                  </form>
                    <hr>
                     <p class="mt-20"><b>Your favourite service Provider</b></p>
                    <hr>
                    <p>You can choose your favourite service provider from the below list</p>
                    <div class="appendsp">
                      
                    </div>
                    <input type="button" class="btncontinue" value="Continue" onclick="form4()">
                </div>
                </form><!--ends your details-->

                
                <form action="" id="form4"><!--fourth pill start-->
                <div  id="pills-payment" >
                    <p>Pay Securely with Helperland payment gateway!</p>
                    <label>promo code(optional)</label>
                    <div>
                        <input type="number" class="form-control w-230" placeholder="promo code(optional)">
                        <input type="button" class="btnaddnewadd" value="Apply">
                    </div>
                    <hr>
                    <div class="form-group">
                        <input type="number"  class="form-control w-230" placeholder="card-number" >
                    </div>
                    <hr>
                    <div class="d-flex">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              I accepted <span style="color:#1D7A8C">terms and conditions</span> , the <span style="color: #1D7A8C;">privacy policy</span>. 
                              I confirm that Helperland start to execute the contract before the expiry of the withdrawal period and I lose my right of withdrawal 
                              as a consumer with full performance of the contract.  
                            </label>
                        </div>
                    </div>
                    <hr>
                    <input type="button" class="btncontinue" value="Complete Booking" onclick="completebooking()">
                </div><!--ends payment tabs-->
            </form>


              </div>
              <div  class="rightside">
              <div class="card w-200">
                <div class="card-header">
                  Payment Summary
                </div>
                <div class="card-body">
                <div  id="summary"></div>
                <span  id="summary1"></span>
                 
                  <p><b>Duration</b></p>
                  <p>Basic<span style="float: right;" id="totalhr1">3 Hrs</span></p>
                  <p><b>Extra Services</b></p>
                  <p class="extra-services" id="extra-services"></p>
                  <hr>
                  <p><b><span>Total Service Time</span><span style="float: right;" >Hrs</span><span style="float: right;" value="3" id="totalhr">3</span></b></p>
                  <hr>
                  <p>per Cleaning<span style="float: right;" class="totalcost">$75</span></p>
                  
                  <hr>
                  <h6 class="payment"><b>Total Payment<span class="paymentsub totalcost" >$75</span></b></h6>
                  <br>
                  <h6>Effective Price<span style="float: right;" class="totalcost">$75</span></h6>
                  <!-- <p>You will save 20% according to...</p> -->
                </div>
                <div class="card-footer" data-bs-toggle="modal" data-bs-target="#staticBackdrop" role="button">
                    <p><img src="./assets/images/smiley.png">  See What is always include</p>
                </div>
                </div>

                <div class="rightsecondpart">
                <h6 class="onlyone"><b>Questions?</b></h6>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            What's include in a cleaning?
                        </button>
                    </h2>
                      <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          Bedroom,Living room & Common area, Bathrooms,Kitchen and Extras
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                              Which Helperland professional will come to my place?
                          </button>
                      </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse " aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            Helperland has a vast network of experienced, top-rated cleaners. Based on the time and date of your request, we work to assign the best professional available.Like working with a specific pro? Add them to your Pro Team from the mobile app and they'll be requested first for all future bookings.You will receive an email with details about your professional prior to your appointment.
                        </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                              Can I skip or rescheule bookings?
                          </button>
                      </h2>
                        <div id="collapseThree" class="accordion-collapse collapse " aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            You can reschedule any booking for free at least 24 hours in advance of the scheduled start time. If you need to skip a booking within the minimum commitment, we’ll credit the value of the booking to your account. You can use this credit on future cleanings and other Helperland services.
                        </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                              Test tatva
                          </button>
                      </h2>
                        <div id="collapseFour" class="accordion-collapse collapse " aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            tatva
                          </div>
                        </div>
                      </div>
                </div> <!--ends accordition-->
               <div class="onlyone"><a href="<?= $base_url.'?controller=Contact&function=faq'?>"  style="font-weight:bold;">For More Help</a></div>
                </div><!--ends right second part-->
            </div><!--Ends right side-->
            </section>
    </section>
<!--Modal for payment summary-->
    <div class="hidepaymentsummary" >
  <div class="centerbtn"><button type="button" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#exampleModal">
        Payment Summary
      </button></div>  
      
     
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Payment Summary</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div  id="summaryp"></div>
                <span id="summaryp1"></span>
                <p><b>Duration</b></p>
                <p>Basic<span style="float: right;" id="totalhr11">3 Hrs</span></p>
                <p><b>Extra Services</b></p>
                <div class="extra-services" id="extra-services1"></div>
                <hr>
                <p><b><span>Total Service Time</span><span style="float: right;" >Hrs</span><span style="float: right;" value="3" id="totalhrr">3</span></b></p>
                <!-- <p><b>Total Service Time<span style="float: right;" id="totalhr">3 Hrs</span></b></p> -->
                <hr>
                <p>per Cleaning<span style="float: right;" class="totalcost">$75</span></p>
                
                <hr>
                <h6 class="payment"><b>Total Payment<span class="paymentsub totalcost">$75</span></b></h6>
                <br>
                <h6>Effective Price<span style="float: right;" class="totalcost">$75</span></h6>
                <!-- <p>You will save 20% according to...</p> -->
            </div>
            <div class="modal-footer" data-bs-toggle="modal" data-bs-target="#staticBackdrop" role="button">
                <p><img src="./assets/images/smiley.png">  See What is always include</p>
            </div>
          </div>
        </div>
      </div>
      </div>
<!--Ends Modal-->
<!--modal for what we include-->

  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">What we include in cleaning?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-sm-4">
                    <p><b>Bedroom and Living Room</b></p>
                    <ul class="no-bullets">
                        <li><img src="./assets/images/included.png" class="rotate">Dust all accessible surface</li>
                        <li><img src="./assets/images/included.png" class="rotate"> Wipe down all mirrors and glass fixtures</li>
                        <li><img src="./assets/images/included.png" class="rotate">Clean all floor surfaces</li>
                        <li><img src="./assets/images/included.png" class="rotate">Take out garbage and recycling</li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <p><b>Bathrooms</b></p>
                        <ul class="no-bullets">
                            <li><img src="./assets/images/included.png" class="rotate">Wash and sanitize the toilet, shower, tub, sink</li>
                            <li><img src="./assets/images/included.png" class="rotate">Dust all accessible surfaces</li>
                            <li><img src="./assets/images/included.png" class="rotate"> Wipe down all mirrors and glass fixtures</li>
                            <li><img src="./assets/images/included.png" class="rotate">Clean all floor surfaces</li>
                            <li><img src="./assets/images/included.png" class="rotate">Take out garbage and recycling</li>
                        </ul>
                </div>
                <div class="col-sm-4">
                    <p><b>Kitchens</b></p>
                        <ul class="no-bullets" >
                            <li><img src="./assets/images/included.png" class="rotate">Dust all accessible surfaces</li>
                            <li><img src="./assets/images/included.png" class="rotate"> Empty sink and load up dishwasher</li>
                            <li><img src="./assets/images/included.png" class="rotate">Wipe down exterior of stove, oven and fridge</li>
                            <li><img src="./assets/images/included.png" class="rotate"> Clean all floor surfaces</li>
                            <li><img src="./assets/images/included.png" class="rotate">Take out garbage and recycling</li>
                        </ul>
                </div>
            </div>
        </div>
        
      </div>
    </div>
  </div>
<!--end modal-->
        <section class="our-news-letter">
            <div class="container text-center">
                <a href="#" class="scroll-top"><img src="./assets/images/up.png" alt="up-arrow"></a>
                <h2>GET OUR NEWSLETTER</h2>
                <div class="form-row d-flex justify-content-center align-items-center">
                    <div class="form-group">
                        <label for="email" style="display: none;">YOUR EMAIL</label>
                        <input type="text" placeholder="YOUR EMAIL" id="email" class="form-control">
                    </div>
                    <div class="btn-wrapper">
                        <button class="red-btn">Submit</button>
                    </div>
                </div>
            </div>
        </section>
</div><!--wrapper class ends-->



<!--footer section-->

 <footer class="site-footer">
    <div class="footer-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 footer-widget">
                    <a href="<?= $base_url.'?controller=Contact&function=HomePage'?>" title="Helper Hand">
                        <img src="./assets/images/site-logo.png" alt="Helper Hand">
                    </a>
                </div>
                <div class="col-lg-8 footer-widget">
                    <ul class="footer-navigation d-flex justify-content-center">
                        <li>
                            <a href="<?= $base_url.'?controller=Contact&function=HomePage'?>" title="Home">Home</a>
                        </li>
                        <li>
                            <a href="<?= $base_url.'?controller=Contact&function=about'?>" title="About">About</a>
                        </li>
                        <li>
                            <a href="#" title="Testimonials">Testimonials</a>
                        </li>
                        <li>
                            <a href="<?= $base_url.'?controller=Contact&function=faq'?>" title="FAQs">FAQs</a>
                        </li>
                        <li>
                            <a href="#" title="Insurance Policy">Insurance Policy</a>
                        </li>
                        <li>
                            <a href="#" title="Impressum">Impressum</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 footer-widget">
                    <ul class="social-media-list d-flex justify-content-end">
                        <li>
                            <a href="#" target="_blank" title="Facebook">
                                <img src="./assets/images/facebook.png" alt="Facebook">
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" title="Instagram">
                                <img src="./assets/images/ic-instagram.png" alt="Instagram">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container text-center">
            <p>©2018 Helperland. All rights reserved.     Terms and Conditions  |   <a href="#" title="Privacy Policy">Privacy Policy</a></p>
            
        </div>
    </div>
</footer> 
<!--footer section end-->
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
            <script type="text/javascript" src="./assets/js/booknow.js"></script>
    </body>
        
    </html>