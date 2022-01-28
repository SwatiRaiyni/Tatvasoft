<?php
  $base_url = "http://localhost/TatvaSoft/Helperland/";
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <title> Contact</title>
    <link rel="stylesheet" href="./assets/css/contact.css">
</head>
<body>
<!--Nav bar-->
  <div class="topnav" id="myTopnav">
    <div class="dropdown">
        <div class="dropbtn" >
            <img src="./assets/images/site-logo-large.png" class="white_logo_transparent_background-copy-6">
        </div>
        
      </div> 
      
      <a href="G:\TatvaSoft\HTML\Service Provider  Become-a-provider(6th- page)\index.html" class="acti rounded-pill border-1 rp" >Become a helper</a>
      <a href="homepage.php" class="acti rounded-pill border-1 rp3">Login</a>
      <a href="contact.php">Contact</a>
      <a href="#about">Blog</a>
      <a href="#contact">Warranty</a>
      <a href="price.php" class="rounded-pill border-1 rp ">Prices & Services</a>
      <a href="#home" class="acti rounded-pill border-1 rp1">Book Now</a>
      <a href="javascript:void(0);"  class="icon" onclick="myFunction()">&#9776;</a>
</div>
        <img src="./assets/images/contact.png" id="responsive">
        <!--Contact us heading-->
            <h1 class="title-main1">Contact us</h1>
             <div class="underline-design ">
              <div class="line"></div>
              <img src="./assets/images/faq-star.png" alt=" ">
              <div class="line"></div>
              </div>
        <!--for contact us card-->
             <div class="contact-list row">
              <div class="c-list col-xl-4 col-md-4">
                  <div class="c-img">
                      <img src="./assets/images/location.png">
                  </div>
                  <div class="c-title">
                      <p>1111 Lorem ipsum text 100,<br> Lorem ipsum AB</p>
                  </div>
              </div>
              <div class="c-list col-xl-4 col-md-4">
                  <div class="c-img">
                      <img src="./assets/images/phone-call.png">
                  </div>
                  <div class="c-title">
                      <p>+49 (40) 123 56 7890<br>+49 (40) 987 56 0000</p>
                  </div>
              </div>
              <div class="c-list col-xl-4 col-md-4">
                  <div class="c-img">
                      <img src="./assets/images/message_contact.png">
                  </div>
                  <div class="c-title">
                      <p>info@helperland.com</p>
                  </div>
              </div>
            </div>
            <!--for line break-->
            <hr>
            <!--Get in touch part with form-->
            <h2 class="title-main3">Get in touch with us</h2>
            <div class="underline-design ">
             <div class="line " ></div>
             <img src="./assets/images/faq-star.png" alt=" ">
             <div class="line "></div>
             </div>
            <br>
            
 
             <!--for form-->
              <div class="c-form">
                <form autocomplete="off" enctype="multipart/form-data" action="http://localhost/TatvaSoft/Helperland/?controller=Contact&function=ContactUs" method="post">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 modal-body1" >
                                <input class="form-control" name="firstname" placeholder="Firstname" type="text"
                                    autofocus require/>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 modal-body1" >
                                <input class="form-control" name="lastname" placeholder="Lastname" type="text"
                                    autofocus require/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 modal-body1" >
                                
                               <input type="number" name="number" class="form-control" id="inlineFormInputGroup"
                                        placeholder="Mobile number">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 modal-body1" >
                                <input class="form-control" name="email" placeholder="Email address" type="email"
                                    require />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 modal-body1">
                                <div class="form-group">
                                    <select id="inputState" class="form-control" name="sub">
                                        
                                        <option value="Select">Select</option>
                                        <option value="Subscription">Subscription</option>
                                        <option value="Feedback">Feedback</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <textarea style="resize:vertical;" class="form-control" placeholder="Message..."
                                    rows="7" name="comment" ></textarea>
                            </div>
                        </div>
                                                
                    </div>
                    <div class="submitbtn">
                        <button name="submit" type="submit">Submit</button>
                    </div>
                </form>
              </div>
             <!--for google MAp-->
            <section id="map">
                <iframe allowfullscreen="" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJxzZgCD_hvkcRTC-2Pt6bXt0&amp;key=AIzaSyAag-Mf1I5xbhdVHiJmgvBsPfw7mCqwBKU"></iframe>
            </section>
            <!--Get our Newsletter part-->
              <h2 class="title-main2">GET OUR MEWSLETTER</h2>
               
                 
                    <div id="container">
                        <div class="buttons">
                                
                                <div>
                                  <input type="text" placeholder="YOUR EMAIL" class="email">
                                  <button class="submitb">Submit</button>
                                </div>
                        </div>
                    </div>
                    <br>
                    <br>
</div>
<!--footer part start-->
<?php include('includes/footerall.php'); ?>
          