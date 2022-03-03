
<?php //session_start();
//print_r($_SESSION); echo  $_SESSION['msg1']; die();
  $base_url = "http://localhost/TatvaSoft/Helperland/";
  error_reporting(0);
?> 
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/5602f8a8c9.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel=stylesheet>
    <title> Contact</title>
    <link rel="stylesheet" href="./assets/css/headerall.css">
    <link rel="stylesheet" href="./assets/css/contact.css">
    
</head>
<body>

<?php include('includes/headerall.php'); ?>

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
                <form autocomplete="off" enctype="multipart/form-data" action="<?= $base_url.'?controller=Contact&function=ContactUs' ?>" method="post">

                    <div class="modal-body">
                   
                
                    <?php   if(isset($_SESSION['msg1'])){?> 
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                 
                 <strong>Hey!</strong> <?php echo  $_SESSION['msg1']; ?>
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                 </div> 
               
                <?php unset($_SESSION['msg1']); } ?>
               
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 modal-body1" >
                                <input class="form-control" name="firstname" placeholder="Firstname" type="text"
                                    autofocus required/>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 modal-body1" >
                                <input class="form-control" name="lastname" placeholder="Lastname" type="text"
                                    autofocus required/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 modal-body1" >
                                
                               <input type="tel" minlength="10" maxlength="10" name="number" class="form-control" id="inlineFormInputGroup"
                                        placeholder="Mobile number" required>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 modal-body1" >
                                <input class="form-control" name="email" placeholder="Email address" type="email"
                                    required />
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
                            <div class="col-lg-12 col-md-12 col-sm-12 modal-body1">
                                <textarea style="resize:vertical;" class="form-control" placeholder="Message..."
                                    rows="7" name="comment" ></textarea>
                            </div>
                        </div>
                        
                        <div class="mb-3 row ">
                            <div class="col-lg-12 col-md-12 col-sm-12 submitbtn">
                                <input  type="file" class="form-control-lg" name="file" id="formFile">
                            </div>
                        </div>
                      
                                                
                   
                    <div class="submitbtn">
                        <button name="submit" type="submit">Submit</button>
                    </div>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="./assets/js/contact.js"></script>


</body>
</html>        