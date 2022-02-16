<?php 
session_start();
if(isset($_SESSION['userdata'])){

$userdata=$_SESSION['userdata'];}
else{
    header('Location:'.  'http://localhost/TatvaSoft/Helperland/?controller=Contact&function=HomePage');
}

?>
<?php $base_url='http://localhost/TatvaSoft/Helperland/' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <title> Customer > Service History</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel=stylesheet>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
   <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css"
    />

    <script
      type="text/javascript"
      charset="utf8"
      src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"
    ></script> 
    
 
    <link rel='stylesheet' href="./assets/css/customerdashboard.css">
</head>

<body>

<!--for navbar-->
<div class="wrapper">
<!-- header -->
<header class="site-header">
        <div class="header-wrapper d-flex justify-content-between align-items-center">
            <a href="?controller=Contact&function=HomePage" title="Helper hand" class="logo-block">
                <img src="./assets/images/site-logo-large.png" alt="Helper hand logo">
            </a>
            <li class="nav-item line100  d-b">
                <a class="nav-link notification">
                    <img src="./assets/images/icon-notification.png">
                    <span class="badge">2</span>
                </a>
               
            </li>
            <div class="header-right-block">
                <div class="right-block-inner d-flex align-items-center">
                    <nav class="navbar navbar-expand-lg align-items-center">
                    <button class="navbar-toggler" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalnavbartoggle" data-bs-dismiss="modal">
                        <span class="navbar-toggler-icon" style="background-image: url('./assets/images/menu-icon.svg');"></span>
                    </button>
                        <div class="collapse navbar-collapse" id="navbarNav" >
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item">
                                    <a class="nav-link border-btn" href="#" title="Book a Cleaner">Book Now</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= $base_url.'?controller=Contact&function=price'?>" title="Prices">Prices and Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" title="Blog">Warranty</a>
                                </li>
                              
                                <li class="nav-item">
                                    <a class="nav-link" href="#" title="Login" >Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= $base_url.'?controller=Contact&function=ContactUs'?>" title="Contact us">Contact</a>
                                </li>
                                
                                <li class="nav-item line100  ">
                                    <a class="nav-link notification">
                                        <img src="./assets/images/icon-notification.png">
                                        <span class="badge">2</span>
                                    </a>
                                   
                                </li>
                                <li class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle dropdown1" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false" >
                                        <img src="./assets/images/personforma-1.png" alt="">
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                                        <li>Welcome ,<br> <?php echo $userdata['FirstName'];?></li>
                                        <li><hr class="dropdown-divider"></li>
                                      <li><a class="dropdown-item active"   href="#dashboard"   onclick="dashboard();" role="button">My Dashboard</a></li>
                                      <li><a class="dropdown-item" href="#mySettings" id="mysettings"  onclick="mysettings();" role="button"> My Settings</a></li>
                                      <li><a class="dropdown-item" href="<?= $base_url.'?controller=Contact&function=logout'?>">Log out</a></li>
                                    </ul>
                                  
                                </li>
                               
                            </ul>
                            
                        </div>
                    </nav>
                   
            </div>
                
            </div>
        </div>
</header>
<!--modal for tabs -->
<div class="modal fade navbar-tmodel" id="exampleModalnavbartoggle" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-center">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="staticBackdropLabel">Welcome, <br><b><?php echo $userdata['FirstName'];?></b> </h4>
                </div>
                <div class="modal-body tab">
                    <a href="#dashboard" class="" onclick="dashboard();" role="button">Dashboard</a>
                    <a href="#servicehistory"  class="active" onclick="history();" role="button">Service History</a>
                    <a href="#serviceschedule"  class="" onclick="schedule();" role="button">Service Schedule</a>
                    <a href="#favouriteprones" class="" onclick="favprons();" role="button">Favourite Prons</a>
                    <a href="#invoices" class="" onclick="invoice()" role="button">Invoices</a>
                    <a href="#notifications" class="" onclick="notification();" role="button">Notifications</a>
                   
                    <a href="#mySettings" id="mysettings"  onclick="mysettings();" role="button">My Settings</a>
                    <a href="<?= $base_url.'?controller=Contact&function=logout'?>">Logout</a>
                </div>
                <div class="modal-footer tab">
                    <a href="#"> Book Now </a>
                    <a href="">Prices & Services</a>
                    <a href="#">Warranty</a>
                    <a href="#">Blog</a>
                    <a href="">Contact</a>
                </div>
                <div class="modal-footer tab footer-widget">
                    <ul class="social-media-list d-flex justify-content-center">
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
<!--End Modal-->
<!--Modal for Service Details--> 
<div class="modal fade" id="ModalServiceDetails" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
          
          
            <div class="modal-header">
              <h5 class="modal-title">Service Details</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="mb-3">
               <h5>05/10/2021 08:00 - 11:30 </h5>
               <p><b>Duration</b> : 3.5 Hrs</p>
                <hr>
                <p><b>Service Id</b>:8485</p>
                <p><b>Extras</b>:Inside cabinets</p>
                <p><b>Net Amount:</b><span class="singlefont"><i class="fa fa-eur"></i>63</span></p>
                <hr>
                <p><b>Service Address</b> :Koenigstrasse 112, 99897 Tambach-Dietharz</p>
                <p><b>Billing Address</b> : Same as cleaning Service</p>
                <p><b>Phone</b> : +49 9955648797</p>
                <p><b>Email</b> :patel2128@gmail.com</p>
                <hr>
                <p><b>Comments</b></p>
                <p>I don't have pets at home</p>
                <hr>
                <button class="Reschedule"> Reschedule </button>
                <button class="cancel"> cancel </button>
              </div>
             </div>
        </div>
    </div>
</div>
<!--end-->
<!--Modal for Rescheule Request-->
<div class="modal fade" id="RescheduleServiceRequest" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel2">Reschedule Services Request</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="#">
                <p><b>Select New Date & Time</b></p>
                <div class="row">
                    <div  class="col-sm-6">
                       <div class="form-group">
                          <input type="date" class="form-control1 w200">
                       </div>
                    </div>
                    <div  class="col-sm-6">
                        <div class="form-group">
                            <input type="time" class="form-control1 w200">
                        </div>
                    </div>
                </div>
                <hr>
                <div class=" text-center">
                    <button type="button"  class="blue-btn1">Login</a>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<!--Modal End-->
<!--Modal for Cancel Service Request-->
<div class="modal fade" id="CancelServiceRequest" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel2">Cancel Service Request</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="#">
                <p><b>Why you want to cancel the service request?</b></p>
                <textarea rows="5" class="form-control" placeholder="why do you want to cancel service requests?"></textarea>
                <hr>
                <div class=" text-center">
                    <button type="button"  class="blue-btn1">Cancel Now</a>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<!--Modal End-->
<!--Modal for Rating in service history tab-->
<div class="modal fade navbar-tmodel" id="exampleModalRateSP" tabindex="-1"
aria-labelledby="exampleModalLabel2" aria-hidden="true">
<div class="modal-dialog modal-dialog-center">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="td-rating">
                <div class="rating-user"><img src="./assets/images/forma-1_1.png" alt="">
                </div>
                <div class="rating-info">
                    <div class="info-name">Swati Raiyani</div>
                    <div class="info-ratings">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star-o"></span>
                        4
                    </div>
                </div>
            </div>

            <div class="m-heading">
                Rate Your Service Provider
            </div>
            <hr>
            <div class="m-form">
                <form action="#">
                    <div class="m-ratings">
                        <p>On Time Arrival</p> 
                        <div class="info-ratings">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star-o"></span>
                        </div>
                    </div>
                    <div class="m-ratings">
                        <p>Friendy</p> 
                        <div class="info-ratings">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star-o"></span>
                        </div>
                    </div>
                    <div class="m-ratings">
                        <p>Quality of Service</p> 
                        <div class="info-ratings">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star-o"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="feedback">Feedback on Service Provider</label>
                        <textarea name="" id="" class="form-control" rows="2"></textarea>
                    </div>
                    <div >
                         <button class="blue-btn1" type="button">Submit</button>
                    </div>
                </form>
            </div>

        </div>
        
    </div>
</div>
</div>
<!--End Model-->
<!--Modal for EditAddress-->
<div class="modal fade" id="EditAddress" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel2">Edit Addresses</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="#">
                <div class="row">
                    <div  class="col-sm-6">
                       <div class="form-group">
                           <label>Street name</label>
                          <input type="text" class="form-control w200" placeholder="Koenigstreet20">
                       </div>
                    </div>
                    <div  class="col-sm-6">
                        <div class="form-group">
                            <label>House Number</label>
                            <input type="text" class="form-control w200" placeholder="112">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div  class="col-sm-6">
                       <div class="form-group">
                           <label>Postal code</label>
                          <input type="text" class="form-control w200" placeholder="99397">
                       </div>
                    </div>
                    <div  class="col-sm-6">
                        <div class="form-group">
                            <label>City</label>
                            <input type="text" class="form-control w200" placeholder="Ahmedabad">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label>Phone Number</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">+49</span>
                            <input type="text" class="form-control" placeholder="Phone Number" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>
                <hr>
                <div class=" text-center">
                    <button type="button"  class="blue-btn1">Edit</a>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<!--end edit modal--> 
<!--Modal for add address-->
<div class="modal fade" id="AddNewAddress" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel2">Add New Address</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="#">
                <div class="row">
                    <div  class="col-sm-6">
                       <div class="form-group">
                           <label>Street name</label>
                          <input type="text" class="form-control w200" placeholder="Koenigstreet20">
                       </div>
                    </div>
                    <div  class="col-sm-6">
                        <div class="form-group">
                            <label>House Number</label>
                            <input type="text" class="form-control w200" placeholder="112">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div  class="col-sm-6">
                       <div class="form-group">
                           <label>Postal code</label>
                          <input type="text" class="form-control w200" placeholder="99397">
                       </div>
                    </div>
                    <div  class="col-sm-6">
                        <div class="form-group">
                            <label>City</label>
                            <input type="text" class="form-control w200" placeholder="Ahmedabad">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label>Phone Number</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">+49</span>
                            <input type="text" class="form-control" placeholder="Phone Number" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>
                <hr>
                <div class=" text-center">
                    <button type="button"  class="blue-btn1">Add</a>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<!--end--> 
<!--Modal for delete Address-->
<div class="modal fade" id="DeleteAddress" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel2">Delete Address</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="#">
                <div class="row">
                    <div class="col">
                        <p> Are You Sure to delete the Address?</p>
                    </div>
                </div>   
                <hr>
                <div class=" text-center">
                    <button type="button"  class="blue-btn1">Delete</a>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

<!--end Modal--> 


<main style="min-height:100vh;">
    <section id="section-home">
        <h1 class="title-main">Welcome, <span class="title-main1"><?= $userdata['FirstName'];?></span></h1>
    </section>
  
    <section id="tab-section">
        <div class="div-main container-fluild" >
            <div class="div-tab" >
                <a href="#dashboard" id="dashboard1" class="" onclick="dashboard();" role="button">Dashboard</a>
                <a href="#servicehistory" id="history" class="active" onclick="history();" role="button">Service History</a>
                <a href="#serviceschedule" id="schedule" class="" onclick="schedule();" role="button">Service Schedule</a>
                <a href="#favouriteprones" id="favprons" class="" onclick="favprons();" role="button" >Favourite Prons</a>
                <a href="#invoices" id="invoice" class="" onclick="invoice();" role="button">Invoices</a>
                <a href="#notifications" id="notification" class="" onclick="notification();" role="button">Notifications</a>
                
            </div>
<div class="content-section">
            <div class="divContent" id="mySettings">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                      <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">My Details</button>
                      <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">My Addresses</button>
                      <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Change Password</button>
                    </div>
                  </nav>
                  <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row m-20">
                            <div class="col-sm-4 m-20">
                                <div class="form-group">
                                    <label>First name</label>
                                    <input type="text" class="form-control" placeholder="Swati">
                                </div>

                            </div>
                            <div class="col-sm-4 m-20">
                                <div class="form-group">
                                    <label>Last name</label>
                                    <input type="text" class="form-control" placeholder="Raiyani">
                                </div>
                            </div>
                            <div class="col-sm-4 m-20">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="Swati@gmail.com">
                                </div>
                            </div>
                        </div>
                        <div class="row m-20">
                            <div class="col-sm-4 m-20">
                                <label>Mobile Number</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">+49</span>
                                    <input type="text" class="form-control" placeholder="Phone Number" aria-label="Username" aria-describedby="basic-addon1">
                                  </div>
                            </div>
                            <div class="col-sm-8 m-20">
                                <div class="form-group">
                                    <label>Date of Birth</label>
                                    <input type="date" class="form-control" placeholder="03/09/2001">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row m-20">
                            <div class="col m-20">
                                
                                <div class="dropdown">
                                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                      My Preferred Language
                                    </a>
                                  
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                      <li><a class="dropdown-item" href="#">English</a></li>
                                      <li><a class="dropdown-item" href="#">Hindi</a></li>
                                      
                                    </ul>
                                  </div>

                            </div>
                        </div>
                        <a href="#" class="btn btn-primary m-20">Save</a>
                        
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <table  class="current-services">
                            <thead>
                                <tr>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                       <div><b>Address:</b> Second Street 23, 53225 Bonn</div> 
                                        <div><b>Phone number:</b> 9988556644</div>
                                    </td>
                                    <td class="buttoncenter">
                                        <button class="Reschedule"  data-bs-toggle="modal"
                                    data-bs-target="#EditAddress" data-bs-dismiss="modal"> Edit </button>
                                    <button class="cancel" data-bs-toggle="modal"
                                    data-bs-target="#DeleteAddress" data-bs-dismiss="modal"> Delete </button> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                       <div><b>Address:</b> Second Street 23, 53225 Bonn</div> 
                                        <div><b>Phone number:</b> 9988556644</div>
                                    </td>
                                    <td class="buttoncenter">
                                        <button class="Reschedule"  data-bs-toggle="modal"
                                    data-bs-target="#EditAddress" data-bs-dismiss="modal"> Edit </button>
                                    <button class="cancel" data-bs-toggle="modal"
                                    data-bs-target="#DeleteAddress" data-bs-dismiss="modal"> Delete </button> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                       <div><b>Address:</b> Second Street 23, 53225 Bonn</div> 
                                        <div><b>Phone number:</b> 9988556644</div>
                                    </td>
                                    <td class="buttoncenter">
                                        <button class="Reschedule"  data-bs-toggle="modal"
                                    data-bs-target="#EditAddress" data-bs-dismiss="modal"> Edit </button>
                                    <button class="cancel" data-bs-toggle="modal"
                                    data-bs-target="#DeleteAddress" data-bs-dismiss="modal"> Delete </button> 
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <button class="Reschedule" data-bs-toggle="modal"
                                    data-bs-target="#AddNewAddress" data-bs-dismiss="modal"> Add New Address </button>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="form-group m-20">
                            <label>Old Password</label>
                            <input type="password" class="form-control" placeholder="old password ">
                        </div>
                        <div class="form-group m-20">
                            <label>New Password</label>
                            <input type="password" class="form-control" placeholder="new password">
                        </div>
                        <div class="form-group m-20">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" placeholder="Confirm password">
                        </div>
                        <div class="m-20">
                            <button class="Reschedule"> Save </button>
                        </div>
                    </div>
                  </div>

            </div>
            <div  class="divContent" id="dashboard">
                <div class="row">
                    <div class="col-sm-6 title-filter">
                        <h3 class="medium-title"> Current Service Request </h3>
                    </div>
                    <div class="col-sm-6">
                        <a class="btn btn-primary add-button" role="button" routerlink="/book-service" title="Add New Service Request" href="#">
                            Add New Service Request</a>
                    </div>
                    
                </div>
                <div>
                    <table  id="dashboardforpagination" class="current-services ">
                        <thead>
                            <tr>
                                <th>Service Id<img src="./assets/images/form-1_2.png"></th>
                                <th>Service Date<img src="./assets/images/form-1_2.png"></th>
                                <th>Service Provider <img src="./assets/images/form-1_2.png"></th>
                                <th>Payment<img src="./assets/images/form-1_2.png"></th>
                                <th>Action<img src="./assets/images/form-1_2.png"></th>
                                
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a  data-bs-toggle="modal"
                                    data-bs-target="#ModalServiceDetails" data-bs-dismiss="modal" >323436</a></td>
                                <td>
                                    <div><img src="./assets/images/calculator.png"   data-bs-toggle="modal"
                                        data-bs-target="#ModalServiceDetails" data-bs-dismiss="modal"><b>31/03/2018</b></div>
                                    <div><img src="./assets/images/layer-712.png">12:00 - 18:00</div>
                                </td>
                                <td>
                                    <div class="td-rating">
                                        <div class="rating-user"><img src="./assets/images/forma-1_1.png"></div>
                                        <div class="rating-info">
                                            <div class="info-name">Lyum Watson</div>
                                            <div class="info-ratings">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star-o"></span>
                                                4
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                   <div class="singlefont"><i class="fa fa-eur"></i>63</div>
                                </td>
                                <td class="buttoncenter">
                                    <button class="Reschedule"  data-bs-toggle="modal"
                                    data-bs-target="#RescheduleServiceRequest" data-bs-dismiss="modal"> Reschedule </button>
                                    <button class="cancel" data-bs-toggle="modal"
                                    data-bs-target="#CancelServiceRequest" data-bs-dismiss="modal"> cancel </button>
                                </td>
                                
                            </tr>
                            <tr>
                                <td><a  data-bs-toggle="modal"
                                    data-bs-target="#ModalServiceDetails" data-bs-dismiss="modal">323436</a></td>
                                <td>
                                    <div><img src="./assets/images/calculator.png"  data-bs-toggle="modal"
                                        data-bs-target="#ModalServiceDetails" data-bs-dismiss="modal"><b>15/03/2018</b></div>
                                    <div><img src="./assets/images/layer-712.png">12:00 - 18:00</div>
                                </td>
                                <td>
                                    <div class="td-rating">
                                        <div class="rating-user"><img src="./assets/images/forma-1_1.png"></div>
                                        <div class="rating-info">
                                            <div class="info-name">Lyum Watson</div>
                                            <div class="info-ratings">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star-o"></span>
                                                4
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                   <div class="singlefont"><i class="fa fa-eur"></i>63</div>
                                </td>
                                <td class="buttoncenter">
                                    <button class="Reschedule"  data-bs-toggle="modal"
                                    data-bs-target="#RescheduleServiceRequest" data-bs-dismiss="modal"> Reschedule </button>
                                    <button class="cancel" data-bs-toggle="modal"
                                    data-bs-target="#CancelServiceRequest" data-bs-dismiss="modal"> cancel </button>
                                </td>
                               
                            </tr>
                            <tr>
                                <td><a  data-bs-toggle="modal"
                                    data-bs-target="#ModalServiceDetails" data-bs-dismiss="modal">323436</a></td>
                                <td>
                                    <div><img src="./assets/images/calculator.png"  data-bs-toggle="modal"
                                        data-bs-target="#ModalServiceDetails" data-bs-dismiss="modal"><b>10/03/2018</b></div>
                                    <div><img src="./assets/images/layer-712.png">12:00 - 18:00</div>
                                </td>
                                <td>
                                    <div class="td-rating">
                                        <div class="rating-user"><img src="./assets/images/forma-1_1.png"></div>
                                        <div class="rating-info">
                                            <div class="info-name">Lyum Watson</div>
                                            <div class="info-ratings">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star-o"></span>
                                                4
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                   <div class="singlefont"><i class="fa fa-eur"></i>63</div>
                                </td>
                                <td class="buttoncenter">
                                    <button class="Reschedule"  data-bs-toggle="modal"
                                    data-bs-target="#RescheduleServiceRequest" data-bs-dismiss="modal"> Reschedule </button>
                                    <button class="cancel" data-bs-toggle="modal"
                                    data-bs-target="#CancelServiceRequest" data-bs-dismiss="modal"> cancel </button>
                                </td>
                               
                               
                            </tr>
                            <tr>
                                <td><a  data-bs-toggle="modal"
                                    data-bs-target="#ModalServiceDetails" data-bs-dismiss="modal">323436</a></td>
                                <td>
                                    <div><img src="./assets/images/calculator.png"  data-bs-toggle="modal"
                                        data-bs-target="#ModalServiceDetails" data-bs-dismiss="modal"><b>28/02/2018</b></div>
                                    <div><img src="./assets/images/layer-712.png">12:00 - 18:00</div>
                                </td>
                                <td>
                                    <div class="td-rating">
                                        <div class="rating-user"><img src="./assets/images/forma-1_1.png"></div>
                                        <div class="rating-info">
                                            <div class="info-name">Lyum Watson</div>
                                            <div class="info-ratings">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star-o"></span>
                                                4
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                   <div class="singlefont"><i class="fa fa-eur"></i>63</div>
                                </td>
                                <td class="buttoncenter">
                                    <button class="Reschedule"  data-bs-toggle="modal"
                                    data-bs-target="#RescheduleServiceRequest" data-bs-dismiss="modal"> Reschedule </button>
                                    <button class="cancel"> cancel </button>
                                </td>
                                
                            </tr>
                            <tr>
                                <td><a  data-bs-toggle="modal"
                                    data-bs-target="#ModalServiceDetails" data-bs-dismiss="modal">323436</a></td>
                                <td>
                                    <div><img src="./assets/images/calculator.png"  data-bs-toggle="modal"
                                        data-bs-target="#ModalServiceDetails" data-bs-dismiss="modal"><b>15/02/2018</b></div>
                                    <div><img src="./assets/images/layer-712.png">12:00 - 18:00</div>
                                </td>
                                <td>
                                    <div class="td-rating">
                                        <div class="rating-user"><img src="./assets/images/forma-1_1.png"></div>
                                        <div class="rating-info">
                                            <div class="info-name">Lyum Watson</div>
                                            <div class="info-ratings">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star-o"></span>
                                                4
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                   <div class="singlefont"><i class="fa fa-eur"></i>63</div>
                                </td>
                                <td class="buttoncenter">
                                    <button class="Reschedule"  data-bs-toggle="modal"
                                    data-bs-target="#RescheduleServiceRequest" data-bs-dismiss="modal"> Reschedule </button>
                                    <button class="cancel" data-bs-toggle="modal"
                                    data-bs-target="#CancelServiceRequest" data-bs-dismiss="modal"> cancel </button>
                                </td>
                               
                            </tr>
                           
                            
                            <tr>
                                <td><a  data-bs-toggle="modal"
                                    data-bs-target="#ModalServiceDetails" data-bs-dismiss="modal">323436</a></td>
                                <td>
                                    <div><img src="./assets/images/calculator.png"  data-bs-toggle="modal"
                                        data-bs-target="#ModalServiceDetails" data-bs-dismiss="modal"><b>11/02/2018</b></div>
                                    <div><img src="./assets/images/layer-712.png">12:00 - 18:00</div>
                                </td>
                                <td>
                                    <div class="td-rating">
                                        <div class="rating-user"><img src="./assets/images/forma-1_1.png"></div>
                                        <div class="rating-info">
                                            <div class="info-name">Lyum Watson</div>
                                            <div class="info-ratings">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star-o"></span>
                                                4
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                   <div class="singlefont"><i class="fa fa-eur"></i>63</div>
                                </td>
                                <td class="buttoncenter">
                                    <button class="Reschedule"  data-bs-toggle="modal"
                                    data-bs-target="#RescheduleServiceRequest" data-bs-dismiss="modal"> Reschedule </button>
                                    <button class="cancel" data-bs-toggle="modal"
                                    data-bs-target="#CancelServiceRequest" data-bs-dismiss="modal"> cancel </button>
                                </td>
                                
                            </tr>
                            <tr>
                                <td><a>323436</a></td>
                                <td>
                                    <div><img src="./assets/images/calculator.png"  data-bs-toggle="modal"
                                        data-bs-target="#ModalServiceDetails" data-bs-dismiss="modal"><b>31/01/2018</b></div>
                                    <div><img src="./assets/images/layer-712.png">12:00 - 18:00</div>
                                </td>
                                <td>
                                    <div class="td-rating">
                                        <div class="rating-user"><img src="./assets/images/forma-1_1.png"></div>
                                        <div class="rating-info">
                                            <div class="info-name">Lyum Watson</div>
                                            <div class="info-ratings">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star-o"></span>
                                                4
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                   <div class="singlefont"><i class="fa fa-eur"></i>63</div>
                                </td>
                                <td class="buttoncenter">
                                    <button class="Reschedule"  data-bs-toggle="modal"
                                    data-bs-target="#RescheduleServiceRequest" data-bs-dismiss="modal"> Reschedule </button>
                                    <button class="cancel" data-bs-toggle="modal"
                                    data-bs-target="#CancelServiceRequest" data-bs-dismiss="modal"> cancel </button>
                                </td>
                                
                            </tr>
                            <tr>
                                <td><a>323436</a></td>
                                <td>
                                    <div><img src="./assets/images/calculator.png"  data-bs-toggle="modal"
                                        data-bs-target="#ModalServiceDetails" data-bs-dismiss="modal""><b>10/01/2018</b></div>
                                    <div><img src="./assets/images/layer-712.png">12:00 - 18:00</div>
                                </td>
                                <td>
                                    <div class="td-rating">
                                        <div class="rating-user"><img src="./assets/images/forma-1_1.png"></div>
                                        <div class="rating-info">
                                            <div class="info-name">Lyum Watson</div>
                                            <div class="info-ratings">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star-o"></span>
                                                4
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                   <div class="singlefont"><i class="fa fa-eur"></i>63</div>
                                </td>
                                <td class="buttoncenter">
                                    <button class="Reschedule"  data-bs-toggle="modal"
                                    data-bs-target="#RescheduleServiceRequest" data-bs-dismiss="modal"> Reschedule </button>
                                    <button class="cancel" data-bs-toggle="modal"
                                    data-bs-target="#CancelServiceRequest" data-bs-dismiss="modal"> cancel </button>
                                </td>
                                
                            </tr>
                            <tr>
                                <td><a  data-bs-toggle="modal"
                                    data-bs-target="#ModalServiceDetails" data-bs-dismiss="modal">323436 </a></td>
                                <td>
                                    <div><img src="./assets/images/calculator.png"  data-bs-toggle="modal"
                                        data-bs-target="#ModalServiceDetails" data-bs-dismiss="modal""><b>05/01/2018</b></div>
                                    <div><img src="./assets/images/layer-712.png">12:00 - 18:00</div>
                                </td>
                                <td>
                                    <div class="td-rating">
                                        <div class="rating-user"><img src="./assets/images/forma-1_1.png"></div>
                                        <div class="rating-info">
                                            <div class="info-name">Lyum Watson</div>
                                            <div class="info-ratings">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star-o"></span>
                                                4
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                   <div class="singlefont"><i class="fa fa-eur"></i>63</div>
                                </td>
                                <td class="buttoncenter">
                                    <button class="Reschedule"  data-bs-toggle="modal"
                                    data-bs-target="#RescheduleServiceRequest" data-bs-dismiss="modal"> Reschedule </button>
                                    <button class="cancel" data-bs-toggle="modal"
                                    data-bs-target="#CancelServiceRequest" data-bs-dismiss="modal"> cancel </button>
                                </td>
                                
                            </tr>
                            <tr>
                                <td><a>323436</a></td>
                                <td>
                                    <div><img src="./assets/images/calculator.png"  data-bs-toggle="modal"
                                        data-bs-target="#ModalServiceDetails" data-bs-dismiss="modal""><b>01/01/2018</b></div>
                                    <div><img src="./assets/images/layer-712.png">12:00 - 18:00</div>
                                </td>
                                <td>
                                    <div class="td-rating">
                                        <div class="rating-user"><img src="./assets/images/forma-1_1.png"></div>
                                        <div class="rating-info">
                                            <div class="info-name">Lyum Watson</div>
                                            <div class="info-ratings">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star-o"></span>
                                                4
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                   <div class="singlefont"><i class="fa fa-eur"></i>63</div>
                                </td>
                                <td class="buttoncenter">
                                    <button class="Reschedule"  data-bs-toggle="modal"
                                    data-bs-target="#RescheduleServiceRequest" data-bs-dismiss="modal"> Reschedule </button>
                                    <button class="cancel" data-bs-toggle="modal"
                                    data-bs-target="#CancelServiceRequest" data-bs-dismiss="modal"> cancel </button>
                                </td>
                                
                            </tr>
                            <tr>
                                <td><a>323436</a></td>
                                <td>
                                    <div><img src="./assets/images/calculator.png"  data-bs-toggle="modal"
                                        data-bs-target="#ModalServiceDetails" data-bs-dismiss="modal"" ><b>01/01/2018</b></div>
                                    <div><img src="./assets/images/layer-712.png">12:00 - 18:00</div>
                                </td>
                                <td>
                                    <div class="td-rating">
                                        <div class="rating-user"><img src="./assets/images/forma-1_1.png"></div>
                                        <div class="rating-info">
                                            <div class="info-name">Lyum Watson</div>
                                            <div class="info-ratings">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star-o"></span>
                                                4
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                   <div class="singlefont"><i class="fa fa-eur"></i>63</div>
                                </td>
                                <td class="buttoncenter">
                                    <button class="Reschedule"  data-bs-toggle="modal"
                                    data-bs-target="#RescheduleServiceRequest" data-bs-dismiss="modal"> Reschedule </button>
                                    <button class="cancel" data-bs-toggle="modal"
                                    data-bs-target="#CancelServiceRequest" data-bs-dismiss="modal"> cancel </button>
                                </td>
                                
                            </tr>
                        </tbody>
                    </table>
                </div>
               
            </div>
            <div class="divContent" id="serviceschedule">
               

            </div>
            <div class="divContent" id="servicehistory">
                <div class="row">
                    <div class="col-sm-6 title-filter">
                        <h3 class="medium-title"> Service History </h3>
                    </div>
                    <div class="col-sm-6">
                        <a class="btn btn-primary add-button" style="float: right;" routerlink="/book-service" title="Add New Service Request" href="#">
                            Export</a>
                    </div>
                    
                </div>

                
                <div>
                    <table  id="tblCustomers"  class="current-services ">
                        <thead>
                            <tr>
                                <th>Service Id<img src="./assets/images/form-1_2.png"></th>
                                <th>Service Date<img src="./assets/images/form-1_2.png"></th>
                                <th>Service Provider <img src="./assets/images/form-1_2.png"></th>
                                <th>Payment<img src="./assets/images/form-1_2.png"></th>
                                <th>Status<img src="./assets/images/form-1_2.png"></th>
                                <th>Rate SP<img src="./assets/images/form-1_2.png"></th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>323436</td>
                                <td>
                                    <div><img src="./assets/images/calculator.png"><b>31/03/2018</b></div>
                                    <div><img src="./assets/images/layer-712.png">12:00 - 18:00</div>
                                </td>
                                <td>
                                    <div class="td-rating" >
                                        <div class="rating-user"><img src="./assets/images/forma-1_1.png"></div>
                                        <div class="rating-info">
                                            <div class="info-name">Lyum Watson</div>
                                            <div class="info-ratings">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star-o"></span>
                                                4
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                   <div class="singlefont"><i class="fa fa-eur"></i>63</div>
                                </td>
                                <td class="buttoncenter">
                                    <button class="Completed"> Completed </button>
                                </td>
                                <td class="buttoncenter">
                                    <button class="RateSP" data-bs-toggle="modal"
                                    data-bs-target="#exampleModalRateSP" data-bs-dismiss="modal"> Rate SP </button>
                                 </td>
                               
                            </tr>
                            <tr>
                                <td>323436</td>
                                <td>
                                    <div><img src="./assets/images/calculator.png"><b>15/03/2018</b></div>
                                    <div><img src="./assets/images/layer-712.png">12:00 - 18:00</div>
                                </td>
                                <td>
                                    <div class="td-rating">
                                        <div class="rating-user"><img src="./assets/images/forma-1_1.png"></div>
                                        <div class="rating-info">
                                            <div class="info-name">Lyum Watson</div>
                                            <div class="info-ratings">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star-o"></span>
                                                4
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                   <div class="singlefont"><i class="fa fa-eur"></i>63</div>
                                </td>
                                <td class="buttoncenter">
                                    <button class="Completed"> Completed </button>
                                </td>
                                <td class="buttoncenter">
                                    <button class="RateSP" data-bs-toggle="modal"
                                    data-bs-target="#exampleModalRateSP" data-bs-dismiss="modal"> Rate SP </button>
                                 </td>
                               
                            </tr>
                            <tr>
                                <td>323436</td>
                                <td>
                                    <div><img src="./assets/images/calculator.png"><b>10/03/2018</b></div>
                                    <div><img src="./assets/images/layer-712.png">12:00 - 18:00</div>
                                </td>
                                <td>
                                    <div class="td-rating">
                                        <div class="rating-user"><img src="./assets/images/forma-1_1.png"></div>
                                        <div class="rating-info">
                                            <div class="info-name">Lyum Watson</div>
                                            <div class="info-ratings">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star-o"></span>
                                                4
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                   <div class="singlefont"><i class="fa fa-eur"></i>63</div>
                                </td>
                                <td class="buttoncenter">
                                    <button class="Completed"> Completed </button>
                                </td>
                                <td class="buttoncenter">
                                    <button class="RateSP" data-bs-toggle="modal"
                                    data-bs-target="#exampleModalRateSP" data-bs-dismiss="modal"> Rate SP </button>
                                 </td>
                               
                            </tr>
                            <tr>
                                <td>323436</td>
                                <td>
                                    <div><img src="./assets/images/calculator.png"><b>28/02/2018</b></div>
                                    <div><img src="./assets/images/layer-712.png">12:00 - 18:00</div>
                                </td>
                                <td>
                                    <div class="td-rating">
                                        <div class="rating-user"><img src="./assets/images/forma-1_1.png"></div>
                                        <div class="rating-info">
                                            <div class="info-name">Lyum Watson</div>
                                            <div class="info-ratings">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star-o"></span>
                                                4
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                   <div class="singlefont"><i class="fa fa-eur"></i>63</div>
                                </td>
                                <td class="buttoncenter">
                                    <button class="Canceled"> Cancelled </button>
                                </td>
                                <td class="buttoncenter">
                                    <button class="RateSP" data-bs-toggle="modal"
                                    data-bs-target="#exampleModalRateSP" data-bs-dismiss="modal"> Rate SP </button>
                                 </td>
                               
                               
                            </tr>
                            <tr>
                                <td>323436</td>
                                <td>
                                    <div><img src="./assets/images/calculator.png"><b>15/02/2018</b></div>
                                    <div><img src="./assets/images/layer-712.png">12:00 - 18:00</div>
                                </td>
                                <td>
                                    <div class="td-rating">
                                        <div class="rating-user"><img src="./assets/images/forma-1_1.png"></div>
                                        <div class="rating-info">
                                            <div class="info-name">Lyum Watson</div>
                                            <div class="info-ratings">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star-o"></span>
                                                4
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                   <div class="singlefont"><i class="fa fa-eur"></i>63</div>
                                </td>
                                <td class="buttoncenter">
                                    <button class="Completed"> Completed </button>
                                </td>
                                <td class="buttoncenter">
                                    <button class="RateSP" data-bs-toggle="modal"
                                    data-bs-target="#exampleModalRateSP" data-bs-dismiss="modal"> Rate SP </button>
                                 </td>
                               
                            </tr>
                           
                            
                            <tr>
                                <td>323436</td>
                                <td>
                                    <div><img src="./assets/images/calculator.png"><b>11/02/2018</b></div>
                                    <div><img src="./assets/images/layer-712.png">12:00 - 18:00</div>
                                </td>
                                <td>
                                    <div class="td-rating">
                                        <div class="rating-user"><img src="./assets/images/forma-1_1.png"></div>
                                        <div class="rating-info">
                                            <div class="info-name">Lyum Watson</div>
                                            <div class="info-ratings">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star-o"></span>
                                                4
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                   <div class="singlefont"><i class="fa fa-eur"></i>63</div>
                                </td>
                                <td class="buttoncenter">
                                    <button class="Canceled"> Cancelled </button>
                                </td>
                                <td class="buttoncenter">
                                    <button class="RateSP" data-bs-toggle="modal"
                                    data-bs-target="#exampleModalRateSP" data-bs-dismiss="modal"> Rate SP </button>
                                 </td>
                               
                            </tr>
                            <tr>
                                <td>323436</td>
                                <td>
                                    <div><img src="./assets/images/calculator.png"><b>31/01/2018</b></div>
                                    <div><img src="./assets/images/layer-712.png">12:00 - 18:00</div>
                                </td>
                                <td>
                                    <div class="td-rating">
                                        <div class="rating-user"><img src="./assets/images/forma-1_1.png"></div>
                                        <div class="rating-info">
                                            <div class="info-name">Lyum Watson</div>
                                            <div class="info-ratings">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star-o"></span>
                                                4
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                   <div class="singlefont"><i class="fa fa-eur"></i>63</div>
                                </td>
                                <td class="buttoncenter">
                                    <button class="Completed"> Completed </button>
                                </td>
                                <td class="buttoncenter">
                                    <button class="RateSP"> Rate SP </button>
                                 </td>
                               
                            </tr>
                            <tr>
                                <td>323436</td>
                                <td>
                                    <div><img src="./assets/images/calculator.png"><b>10/01/2018</b></div>
                                    <div><img src="./assets/images/layer-712.png">12:00 - 18:00</div>
                                </td>
                                <td>
                                    <div class="td-rating">
                                        <div class="rating-user"><img src="./assets/images/forma-1_1.png"></div>
                                        <div class="rating-info">
                                            <div class="info-name">Lyum Watson</div>
                                            <div class="info-ratings">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star-o"></span>
                                                4
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                   <div class="singlefont"><i class="fa fa-eur"></i>63</div>
                                </td>
                                <td class="buttoncenter">
                                    <button class="Completed"> Completed</button>
                                </td>
                                <td class="buttoncenter">
                                    <button class="RateSP" data-bs-toggle="modal"
                                    data-bs-target="#exampleModalRateSP" data-bs-dismiss="modal"> Rate SP </button>
                                 </td>
                               
                            </tr>
                            <tr>
                                <td>323436</td>
                                <td>
                                    <div><img src="./assets/images/calculator.png"><b>05/01/2018</b></div>
                                    <div><img src="./assets/images/layer-712.png">12:00 - 18:00</div>
                                </td>
                                <td>
                                    <div class="td-rating">
                                        <div class="rating-user"><img src="./assets/images/forma-1_1.png"></div>
                                        <div class="rating-info">
                                            <div class="info-name">Lyum Watson</div>
                                            <div class="info-ratings">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star-o"></span>
                                                4
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                   <div class="singlefont"><i class="fa fa-eur"></i>63</div>
                                </td>
                                <td class="buttoncenter">
                                    <button class="Canceled"> Cancelled </button>
                                </td>
                                <td class="buttoncenter">
                                    <button class="RateSP" data-bs-toggle="modal"
                                    data-bs-target="#exampleModalRateSP" data-bs-dismiss="modal"> Rate SP </button>
                                 </td>
                               
                            </tr>
                            <tr>
                                <td>323436</td>
                                <td>
                                    <div><img src="./assets/images/calculator.png"><b>01/01/2018</b></div>
                                    <div><img src="./assets/images/layer-712.png">12:00 - 18:00</div>
                                </td>
                                <td>
                                    <div class="td-rating">
                                        <div class="rating-user"><img src="./assets/images/forma-1_1.png"></div>
                                        <div class="rating-info">
                                            <div class="info-name">Lyum Watson</div>
                                            <div class="info-ratings">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star-o"></span>
                                                4
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                   <div class="singlefont"><i class="fa fa-eur"></i>63</div>
                                </td>
                                <td class="buttoncenter">
                                    <button class="Canceled"> Cancelled </button>
                                </td>
                                <td class="buttoncenter">
                                    <button class="RateSP" data-bs-toggle="modal"
                                    data-bs-target="#exampleModalRateSP" data-bs-dismiss="modal"> Rate SP </button>
                                 </td>
                               
                            </tr>
                            <tr>
                                <td>323436</td>
                                <td>
                                    <div><img src="./assets/images/calculator.png"><b>01/01/2018</b></div>
                                    <div><img src="./assets/images/layer-712.png">12:00 - 18:00</div>
                                </td>
                                <td>
                                    <div class="td-rating">
                                        <div class="rating-user"><img src="./assets/images/forma-1_1.png"></div>
                                        <div class="rating-info">
                                            <div class="info-name">Lyum Watson</div>
                                            <div class="info-ratings">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star-o"></span>
                                                4
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                   <div class="singlefont"><i class="fa fa-eur"></i>63</div>
                                </td>
                                <td class="buttoncenter">
                                    <button class="Canceled"> Cancelled </button>
                                </td>
                                <td class="buttoncenter">
                                    <button class="RateSP" data-bs-toggle="modal"
                                    data-bs-target="#exampleModalRateSP" data-bs-dismiss="modal"> Rate SP </button>
                                 </td>
                               
                            </tr>
                        </tbody>
                    </table>
                </div>
              
            </div>
            <div class="divContent" id="favouriteprones">
                <div id="favprones">
                <div class="row m-20" >
                    <div class="col-sm-4 m-20">
                      <div class="card">
                        <div class="card-body text-center">
                         <div class="td-rating" style="justify-content: center;">  <div class="rating-user"> <img src="./assets/images/forma-1_1.png"></div></div>
                          <h5 class="card-title">Kavan Patel</h5>
                          <div class="td-rating" style="justify-content: center;">
                            <div class="rating-info">
                                <div class="info-ratings">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star-o"></span>
                                    4
                                </div>
                            </div>
                        </div>
                          <p class="card-text">1 Cleanings</p>
                          <a href="#" class="btn btn-primary">Remove</a>
                          <button class="cancel">Block</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4 m-20">
                        <div class="card">
                          <div class="card-body text-center">
                           <div class="td-rating" style="justify-content: center;">  <div class="rating-user"> <img src="./assets/images/forma-1_1.png"></div></div>
                            <h5 class="card-title">Kavan Patel</h5>
                            <div class="td-rating" style="justify-content: center;">
                              <div class="rating-info">
                                  <div class="info-ratings">
                                      <span class="fa fa-star"></span>
                                      <span class="fa fa-star"></span>
                                      <span class="fa fa-star"></span>
                                      <span class="fa fa-star"></span>
                                      <span class="fa fa-star-o"></span>
                                      4
                                  </div>
                              </div>
                          </div>
                            <p class="card-text">1 Cleanings</p>
                            <a href="#" class="btn btn-primary">Remove</a>
                            <button class="cancel">Block</button>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 m-20">
                        <div class="card">
                          <div class="card-body text-center">
                           <div class="td-rating" style="justify-content: center;">  <div class="rating-user"> <img src="./assets/images/forma-1_1.png"></div></div>
                            <h5 class="card-title">Kavan Patel</h5>
                            <div class="td-rating" style="justify-content: center;">
                              <div class="rating-info">
                                  <div class="info-ratings">
                                      <span class="fa fa-star"></span>
                                      <span class="fa fa-star"></span>
                                      <span class="fa fa-star"></span>
                                      <span class="fa fa-star"></span>
                                      <span class="fa fa-star-o"></span>
                                      4
                                  </div>
                              </div>
                          </div>
                            <p class="card-text">1 Cleanings</p>
                            <a href="#" class="btn btn-primary">Remove</a>
                            <button class="cancel">Block</button>
                          </div>
                        </div>
                      </div>
                      </div>
                    <div class="row m-20">
                        <div class="col-sm-4 m-20">
                            <div class="card">
                              <div class="card-body text-center">
                               <div class="td-rating" style="justify-content: center;">  <div class="rating-user"> <img src="./assets/images/forma-1_1.png"></div></div>
                                <h5 class="card-title">Kavan Patel</h5>
                                <div class="td-rating" style="justify-content: center;">
                                  <div class="rating-info">
                                      <div class="info-ratings">
                                          <span class="fa fa-star"></span>
                                          <span class="fa fa-star"></span>
                                          <span class="fa fa-star"></span>
                                          <span class="fa fa-star"></span>
                                          <span class="fa fa-star-o"></span>
                                          4
                                      </div>
                                  </div>
                              </div>
                                <p class="card-text">1 Cleanings</p>
                                <a href="#" class="btn btn-primary">Remove</a>
                                <button class="cancel">Block</button>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
               
            </div><!--End fav prones-->
            <div class="divContent" id="invoices">
                
            </div>
            <div class="divContent" id="notifications">
               
            </div>

            

</div>            
</div>
</section>


</main>
</div>

<!--footer section-->
<footer class="site-footer">
    <div class="footer-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 footer-widget">
                    <a href="#" title="Helper Hand">
                        <img src="./assets/images/site-logo.png" alt="Helper Hand">
                    </a>
                </div>
                <div class="col-lg-8 footer-widget">
                    <ul class="footer-navigation d-flex justify-content-center">
                        <li>
                            <a href="" title="Home">Home</a>
                        </li>
                        <li>
                            <a href="" title="About">About</a>
                        </li>
                        <li>
                            <a href="#" title="Testimonials">Testimonials</a>
                        </li>
                        <li>
                            <a href="" title="FAQs">FAQs</a>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script
      type="text/javascript"
      src="https://cdn.datatables.net/v/dt/dt-1.11.3/r-2.2.9/rg-1.1.4/datatables.min.js"
    ></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js"></script>
    <!--for service history-->
    <script>
      $(document).ready(function () {
        $("#tblCustomers").DataTable();
      });
    </script>

    <script>
        const dt1 = new DataTable("#tblCustomers", {
        dom: 't<"table-bottom d-flex justify-content-between"<"table-bottom-inner d-flex"li>p>',
        responsive: false,
        pagingType: "full_numbers",
        language: {
            paginate: {
            first: "<img src='./assets/images/pagination-first.png' alt='first'/>",
            previous: "<img src='./assets/images/pagination-left.png' alt='previous' />",
            next: '<img src="./assets/images/pagination-left.png" alt="next" style="transform: rotate(180deg)" />',
            last: "<img src='./assets/images/pagination-first.png' alt='first' style='transform: rotate(180deg) ' />",
            },
            info: "Total Record: _MAX_",
            lengthMenu: "Show_MENU_Entries",
        },
        buttons: ["excel"],
        columnDefs: [{ orderable: false, targets: 5 }],
    });
    </script>
<!--for dashboard pagination-->
<script>
    $(document).ready(function () {
      $("#dashboardforpagination").DataTable();
    });
  </script>

  <script>
      const dt2 = new DataTable("#dashboardforpagination", {
      dom: 't<"table-bottom d-flex justify-content-between"<"table-bottom-inner d-flex"li>p>',
      responsive: true,
      pagingType: "full_numbers",
      language: {
          paginate: {
          first: "<img src='./assets/images/pagination-first.png' alt='first'/>",
          previous: "<img src='./assets/images/pagination-left.png' alt='previous' />",
          next: '<img src="./assets/images/pagination-left.png" alt="next" style="transform: rotate(180deg)" />',
          last: "<img src='./assets/images/pagination-first.png' alt='first' style='transform: rotate(180deg) ' />",
          },
          info: "Total Record: _MAX_",
          lengthMenu: "Show_MENU_Entries",
      },
      buttons: ["excel"],
      columnDefs: [{ orderable: false, targets: 4 }],
  });
 
  </script>
  

    <script type="text/javascript" src="./assets/js/customerdashboard.js"></script>
</body>

</html>
