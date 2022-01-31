<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <title> Contact</title>
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
      
      <a href="G:\TatvaSoft\HTML\Service Provider  Become-a-provider(6th- page)\index.html" class="acti rounded-pill border-1 rp" >Become a helper</a>
      <a href="homepage.php" class="acti rounded-pill border-1 rp3">Login</a>
      <a href="contact.php">Contact</a>
      <a href="#about">Blog</a>
      <a href="#contact">Warranty</a>
      <a href="price.php" class="rounded-pill border-1 rp ">Prices & Services</a>
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
    <form action="http://localhost/TatvaSoft/Helperland/?controller=Register&function=Registration" method="post" accept-charset="utf-8">
        <div class="modal-body">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 modal-body1" >
                    <input class="form-control" name="firstname" placeholder="Firstname" type="text"
                        />
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 modal-body1" >
                    <input class="form-control" name="lastname" placeholder="Lastname" type="text"
                         />
                </div>
            </div>
            <div class="row">
               
                <div class="col-lg-6 col-md-6 col-sm-6 modal-body1" >
                    <input class="form-control" name="email" placeholder="Email address" type="email"
                        />
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 modal-body1" >
                   
                    <input type="number" name="number" class="form-control" id="inlineFormInputGroup"
                             placeholder="Mobile number">
                 </div>
            </div>
            <div class="row">
               
                <div class="col-lg-6 col-md-6 col-sm-6 modal-body1" >
                    <input class="form-control" name="password" placeholder="password" type="password"
                        />
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 modal-body1" >
                    
                    <input type="password" class="form-control" name="confirmpassword"
                             placeholder="Confirm password">
                 </div>
            </div>
            <div class="form-elements">
                <input class="form-elements-input" type="checkbox" value="" id="flexCheckDefault1">
                <label class="form-elements-label" for="flexCheckDefault1">
                    I have Read <span> privacy policy</span>
                </label> 
            </div>
            
        </div>
        <div class="submitbtn">
            <button>Register</button>
        </div>
        <div class="form-elements1">
           
            <label class="form-elements1-label" for="flexCheckDefault1">
                Already register? <a href="homepage.php" > Login now </a>
            </label> 
        </div>
    </form>
  </div>
  <?php include('includes/footerall.php'); ?>
 