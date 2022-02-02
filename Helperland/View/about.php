<?php $base_url='http://localhost/TatvaSoft/Helperland/' ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title> About</title>
<link rel="stylesheet" href="./assets/css/about.css">
</head>
<body>
<!--for nav bar-->
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
      <!--navbar complete-->
           <img src="./assets/images/about.png" id="responsive" >
             <h2 class="title-main1">A Few Words about Us</h2>
             <div class="underline-design ">
              <div class="line "></div>
              <img src="./assets/images/faq-star.png" alt=" ">
              <div class="line "></div>
          </div >
             <br>
    <!--Content start-->        
<p class="forp"> We are providers of professional home cleaning services, offering hourly based house cleaning options, which mean that you don’t have to fret about getting your house cleaned anymore. We will handle everything for you, so that you can focus on spending your precious time with your family members.

</p>
<p class="forp"> 
We have a number of experienced cleaners to help you make cleaning out or shifting your home an easy affair. </p>
   
    <h2 class="title-main1"> Our Story</h2>
    <div class="underline-design ">
      <div class="line"></div>
      <img src="./assets/images/faq-star.png" alt=" ">
      <div class="line"></div>
  </div >
    <br>
    <!--Second content-->
    <p class="forp">A cleaner is a type of industrial or domestic worker who cleans homes or commercial premises for payment. Cleaners may specialise in cleaning particular things or places, such as window cleaners. Cleaners often work when the people who otherwise occupy the space are not around. They may clean offices at night or houses during the workday</p>
    
    <br>

    <!--Get our newsletter part-->
    <h3 class="title-main2">GET OUR MEWSLETTER</h3>
      <div id="container">
          <div class="buttons">
            <div>
                <input type="text" placeholder="YOUR EMAIL" class="email">
                <button class="submitb">Submit</button>
           </div>
          </div>
      </div>
      <!--complete-->
                   
      <br>
      <?php include('includes/footerall.php'); ?>
     