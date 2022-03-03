<?php session_start();?>
<?php $base_url='http://localhost/TatvaSoft/Helperland/' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <title>SP Register</title>
    <script src="https://kit.fontawesome.com/5602f8a8c9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel=stylesheet>
    <link rel='stylesheet' href="./assets/css/headerall.css">
    <link rel='stylesheet' href="./assets/css/ServiceProviderRegister.css">
</head>

<body>
    <!--for navbar-->
<div class="wrapper">
        <!-- header -->
        <header class="site-header">
            <div class="header-wrapper d-flex justify-content-between align-items-center">
                <a href="<?= $base_url.'?controller=Contact&function=HomePage'?>" title="Helper hand" class="logo-block">
                    <img src="./assets/images/site-logo-large.png" alt="Helper hand logo">
                </a>
                <div class="header-right-block">
                    <div class="right-block-inner d-flex align-items-center">
                        <nav class="navbar navbar-expand-lg align-items-center">
                        <button style="color:white; margin-right: 15px;" class="navbar-toggler" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalnavbartoggle" data-bs-dismiss="modal"> 
                            <i class="fas fa-bars"></i>
                        </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav align-items-center">
                                    <li class="nav-item">
                                        <a class="nav-link border-btn" href="<?= $base_url.'?loginmodal=true'?>" title="Book a Cleaner">Book Now</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= $base_url.'?controller=Contact&function=price'?>" title="Prices">Prices</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" title="Our Guarantee">Our Guarantee</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" title="Blog">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= $base_url.'?controller=Contact&function=ContactUs'?>" title="Contact us">Contact us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link border-btn" href="<?= $base_url.'?loginmodal=true'?>">Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link border-btn" href="<?= $base_url.'?controller=Contact&function=spr'?>">Become a Helper</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <div class="custom-dropdown">
                            <select class="country-dropdown">
                                <option value="India" data-image="./assets/images/india.svg">India</option>
                                <option value="Australia" data-image="./assets/images/australia.svg">Australia</option>      
                                <option value="United States" data-image="./assets/images/united-states.svg">United States</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
</header>
<div class="modal fade navbar-tmodel" id="exampleModalnavbartoggle" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog modal-dialog-center">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-footer tab">
                    <a href="<?= $base_url.'?loginmodal=true'?>" title="Book a Cleaner">Book Now</a>
                    <a href="<?= $base_url.'?controller=Contact&function=price'?>">Prices & Services</a>
                    <a href="#">Warranty</a>
                    <a href="#">Blog</a>
                    <a href="<?= $base_url.'?controller=Contact&function=ContactUs'?>">Contact</a>
                    <a class="nav-link  nav-padding "  href="<?= $base_url.'?loginmodal=true'?>">Login</a>
                    <a class="nav-link  nav-padding " href="<?= $base_url.'?controller=Contact&function=spr'?>">Become a Helper</a>
            </div>
            <div class=" tab footer-widget d-flex justify-content-center">
                   <a href="#" target="_blank" title="Facebook">
                        <img src="./assets/images/facebook.png" alt="Facebook">
                    </a>
                    <a href="#" target="_blank" title="Instagram">
                        <img src="./assets/images/ic-instagram.png" alt="Instagram">
                    </a>
            </div>
        </div>
    </div>
</div>
<main>
<section id="section-home" style="background-image: url(./assets/images/spregister.png);">
                    <div class="hero-image" >
                        <div id="form">
                            <div class="form">
                                <div class="text-center">
                                    <span>Register as Helper!</span>
                                </div>
                                <?php if(isset($_SESSION['status2'])){?>
                                    
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Hey!</strong> <?php  echo $_SESSION['status2']; ?> 
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    <?php   
                                    unset($_SESSION['status2']);}
                                    ?>
                                    <?php if(isset($_SESSION['status3'])){?>
                                    
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Hey!</strong> <?php  echo $_SESSION['status3']; ?> 
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    <?php   
                                    unset($_SESSION['status3']);}
                                    ?>
                                <form  action="http://localhost/TatvaSoft/Helperland/?controller=Register&function=Registration"   method="post">
                                    <input type="hidden" name="userType" value="2">
                                    <div class="row">
                                        <div class="">
                                            <input class="form-control" name="firstname" placeholder="First name" type="text"
                                                required autofocus min="2" max="30"/>
                                           
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="">
                                            <input class="form-control" name="lastname" placeholder="Last name" type="text"
                                             required autofocus/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="">
                                            <input class="form-control" name="email" placeholder="Email Address" type="email" require/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">+46</div>
                                                </div>
                                                <input type="number" class="form-control" id="inlineFormInputGroup"
                                                    placeholder="Phone number" name="number" required autofocus/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="">
                                            <input type="password" class="form-control" name="password" placeholder="Password" type="text"
                                                required autofocus />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="">
                                            <input type="password" class="form-control" name="confirmpassword" placeholder="Confirm Password" type="text"
                                               required autofocus/>
                                        </div>
                                    </div>
                                    <div class="form-elements">
                                        <input class="form-elements-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-elements-label" for="flexCheckDefault">
                                            Send me newsletters from Helperland 
                                        </label>
                                        
                                    </div>
                                    <div class="form-elements">
                                        <input class="form-elements-input" type="checkbox" value="" id="flexCheckDefault1">
                                        <label class="form-elements-label" for="flexCheckDefault1">
                                            I accept <span>terms and conditions </span>&<span> privacy policy</span>
                                        </label> 
                                    </div>
                                    <div class="row form-elements">
                                        <img src="./assets/images/layer-20.png" alt="">
                                    </div>    
                                    <div class="get-started text-center row">
                                        <button type="submit">Get Started <img src="./assets/images/shape-2.png" alt=""></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                
                <div class="scroll-link-wrapper">
                    <a href="#" title="Scroll Down" class="scroll-link">
                        <img src="./assets/images/white-down-arrow.png" alt="Scroll-down">
                    </a>
                </div>

            </section>
           
            <!--for three cards-->
            <input type="hidden" id="msg" value="<?php if(isset($msg)){echo $msg;}  ?>">
          
            <h2 class="text-center title-main1">How it works</h2>
            <div>
                
            <div class="yhl">
                <div class="l">
                  <div>
                    <h3 class="lh3">  Register yourself</h3>
                    <p> Provide your basic information to register
                        yourself as a service provider.</p>
                        <a href="#" title="Read More" class="arrow-link">Read more<em><img src="./assets/images/right-arrow-gray.png" alt="right arrow"></em></a>
                  </div>
                  
                </div>
                <div class="ima">
                    <img src="./assets/images/group-18_31.png" class="ima1">
                </div>
           </div>
           <div class="yhl2">
            <div class="l2">
              <div>
                <h3 class="lh32">Get service requests</h3>
                <p>You will get service requests from
                    customes depend on service area and profile.</p>
                    <a href="#" title="Read More" class="arrow-link">Read more<em><img src="./assets/images/right-arrow-gray.png" alt="right arrow"></em></a>
              </div>
              
            </div>
            <div class="ima5">
                <img src="./assets/images/group-18_21.png" class="ima6">
            </div>
       </div>
           <div class="yhl1">
            <div class="l1">
              <div>
                <h3 class="lh31"> Complete Service</h3>
                <p>Accept service requests from your customers
                    and complete your work.</p>
                    <a href="#" title="Read More" class="arrow-link">Read more<em><img src="./assets/images/right-arrow-gray.png" alt="right arrow"></em></a>
              </div>
            </div>
            <div class="ima2">
                <img src="./assets/images/group-18_41.png" class="ima3">
            </div>
            </div>
        </div>
            <section class="our-news-letter">
                <div class="container text-center">
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
        </main>
    </div>

<!--footer Section-->
    <div class="container-fluid footer-section ">
        <footer >
            <div class="footer-content d-flex flex-wrap justify-content-center justify-content-md-between">
                <div class="footer-logo"><a href="<?= $base_url.'?controller=Contact&function=HomePage'?>"><img src="./assets/images\site-logo.png" alt=""></a></div>
                <div class=" footer-nav d-flex flex-sm-column flex-md-row  justify-content-center ">
                    <a class="nav-link " href="<?= $base_url.'?controller=Contact&function=HomePage'?>">Home</a>
                    <a class="nav-link " href="<?= $base_url.'?controller=Contact&function=about'?> ">About</a>
                    <a class="nav-link " href="# ">Testimonials</a>
                    <a class="nav-link " href="<?= $base_url.'?controller=Contact&function=faq'?> ">faqs</a>
                    <a class="nav-link " href="# ">Insurance Policy</a>
                    <a class="nav-link " href="# ">Impressum</a>
                </div>
                    <div class="col-lg-2 footer-widget">
                        <ul class="social-media-list d-flex justify-content-end" style="list-style-type:none;">
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
            </footer>
    </div>
    <div class="container-fluid privacy-policy-sec">
      <p class="text-center">©2021 Helperland. All rights reserved. Terms and Conditions <span style="color:#6EABEF; ">Privacy Policy</span></p>
    </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
        <script type="text/javascript" src="./assets/js/ServiceProviderRegister.js"></script>
        
</body>
    
</html>