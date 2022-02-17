
<?php $base_url='http://localhost/TatvaSoft/Helperland/' ?>

<!DOCTYPE html>
<html>
<head>
    
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/5602f8a8c9.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel=stylesheet>
<title> RegisterUser</title>
<link rel="stylesheet" href="./assets/css/headerall.css">
<link rel="stylesheet" href="./assets/css/registration.css">
</head>
<body>

<?php include('includes/headerall.php'); ?>

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
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Hey!</strong> <?php  echo $_SESSION['status']; ?> 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php   
                        unset($_SESSION['status']);}
                    ?>

                    <?php if(isset($_SESSION['status1'])){?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Hey!</strong> <?php  echo $_SESSION['status1']; ?> 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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
                Already register? <a href="<?= $base_url.'?loginmodal=true'?>" > Login now </a>
            </label> 
        </div>
    </form>
  </div>
  
<?php include('includes/footerall.php'); ?>
 