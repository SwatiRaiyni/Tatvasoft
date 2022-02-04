<?php session_start();?>
<?php $base_url='http://localhost/TatvaSoft/Helperland/' ?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js" ></script>

    <title> RegisterUser</title>
    <link rel="stylesheet" href="./assets/css/registration.css">
</head>
<body>
<!--Nav bar-->
  <div class="topnav" id="myTopnav">
    <div class="dropdown">
        <div class="dropbtn" >
            <img src="./assets/images/site-logo-large.png" class="white_logo_transparent_background-copy-6">
        </div>
        
      </div> 
      
      <a href="<?= $base_url.'?controller=Contact&function=spr'?>" class="acti rounded-pill border-1 rp" >Become a helper</a>
      <a href="<?= $base_url.'?controller=Contact&function=HomePage'?>" class="acti rounded-pill border-1 rp3">Login</a>
      <a href="<?= $base_url.'?controller=Contact&function=ContactUs'?>">Contact</a>
      <a href="#about">Blog</a>
      <a href="#contact">Warranty</a>
      <a href="<?= $base_url.'?controller=Contact&function=price'?>" class="rounded-pill border-1 rp ">Prices & Services</a>
      <a href="#home" class="acti rounded-pill border-1 rp1">Book Now</a>
      <a href="javascript:void(0);"  class="icon" onclick="myFunction()">&#9776;</a>
</div>


<!--for heading-->
<h1>Create an account</h1>
<div class="underline-design ">
 <div class="line"></div>
 <img src="./assets/images/faq-star.png" alt=" ">
 <div class="line "></div>
 </div>


  <!--for form-->
  <div class="c-form">

    <form name="RegForm" action="<?=$base_url.'?controller=Register&function=Registration' ?>" method="post" accept-charset="utf-8">
        <input type="hidden" name="userType" value="1">

        <div class="modal-body">
                <?php if(isset($_SESSION['status'])){?>
               <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> 
                <strong>Hey!</strong> <?php  echo $_SESSION['status']; ?> 
                </div>
                
                <?php   
                unset($_SESSION['status']);}
                ?>
                 <?php if(isset($_SESSION['status1'])){?>
               <div class="alert alert-success alert-dismissible" role="alert">
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> 
                <strong>Hey!</strong> <?php  echo $_SESSION['status1']; ?> 
                </div>
                
                <?php   
                unset($_SESSION['status1']);}
                ?>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 modal-body1" >
                    <input class="form-control" name="firstname" placeholder="Firstname" type="text"
                     required/>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 modal-body1" >
                    <input class="form-control" name="lastname" placeholder="Lastname" type="text"
                    required />
                </div>
            </div>
            <div class="row">
            
                <div class="col-lg-6 col-md-6 col-sm-6 modal-body1" >
                    <input class="form-control" name="email" placeholder="Email address" type="email"
            required />
                   
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 modal-body1" >
                   
                    <input type="number" name="number" class="form-control" id="inlineFormInputGroup"
                             placeholder="Mobile number" pattern="\d{3}[\-]\d{3}[\-]\d{4}" required/>
                 </div>
            </div>
            <div class="row">
               
                <div class="col-lg-6 col-md-6 col-sm-6 modal-body1" >
                    <input class="form-control" name="password" placeholder="password" type="password"
                    required />
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 modal-body1" >
                    
                    <input type="password" class="form-control" name="confirmpassword"
                             placeholder="Confirm password" required/>
                 </div>
            </div>
            <div class="form-elements">
                <input class="form-elements-input" type="checkbox" value="" id="flexCheckDefault1" >
                <label class="form-elements-label" for="flexCheckDefault1" >
                    I have Read <span> privacy policy</span>
                </label> 
            </div>
            
        </div>
        <div class="submitbtn">
            <button type="submit">Register</button>
        </div>
        <div class="form-elements1">
           
            <label class="form-elements1-label" for="flexCheckDefault1">
                Already register? <a href="<?= $base_url.'?controller=Contact&function=HomePage'?>" > Login now </a>
            </label> 
        </div>
    </form>
  </div>
  
<?php include('includes/footerall.php'); ?>
 