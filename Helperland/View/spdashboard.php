<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <title>Service Provider > Upcoming-services</title>
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


    <link rel='stylesheet' href="./assets/css/spdashboard.css">
</head>

<body>
   
<!--for navbar-->
<div class="wrapper">
<!-- header -->
<header class="site-header">
        <div class="header-wrapper d-flex justify-content-between align-items-center">
            <a href="#" title="Helper hand" class="logo-block">
                <img src="./assets/images/site-logo-large.png" alt="Helper hand logo">
            </a>
            <li class="nav-item line100 d-b">
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
                                    <a class="nav-link" href="#" title="Prices">Prices and Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" title="Blog">Warranty</a>
                                </li>
                              
                                <li class="nav-item">
                                    <a class="nav-link" href="#" title="Login" >Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" title="Contact us">Contact</a>
                                </li>
                                <li class="nav-item line100">
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
                                        <li>Welcome ,<br> Swati Raiyani!</li>
                                        <li><hr class="dropdown-divider"></li>
                                      <li><a class="dropdown-item active"  href="#dashboard"   onclick="dashboard();" role="button">My Dashboard</a></li>
                                      <li><a class="dropdown-item" href="#mySettings" id="mysettings"  onclick="mysettings();" role="button"> My Settings</a></li>
                                      <li><a class="dropdown-item" href="#">Log out</a></li>
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
                    <h4 class="modal-title" id="staticBackdropLabel">Welcome, <br><b>Swati!</b> </h4>
                </div>
                <div class="modal-body tab">
                    <a href="#dashboard"  class="" onclick="dashboard();" role="button">Dashboard</a>
                    <a href="#newservicerequests" class="" onclick="newservice();" role="button">New Service Requests</a>
                    <a href="#upcomingservice"   class="active" onclick="upcoming();" role="button">Upcoming Service</a>
                    <a href="#serviceschedule" class="" onclick="schedule();" role="button">Service Schedule</a>
                    <a href="#servicehistory"  class="" onclick="history();" role="button">Service History</a>
                    <a href="#myratings"  class="" onclick="ratings();" role="button">My Ratings</a>
                    <a href="#blockcustomer"   class="" onclick="bookcustomer();" role="button">Block Customer</a>
                    
                    <a href="#mySettings" id="mysettings"  onclick="mysettings();" role="button">My Settings</a>
                    <a href="">Logout</a>
                </div>
                <div class="modal-footer tab">
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
<!--End Model-->
<!--Modal for cancel service request-->
<div class="modal fade" id="ServiceCancelModal" tabindex="-1" aria-labelledby="exampleModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <div class="row">
                            <div class="col-7 modal-section-body">
                                <div class="row">
                                    <p class="m-head"><b>Service Details</b></p>
                                    <p class="m-time">07/10/2021 08:00 -11:00 </p>
                                    <p>Duration: 3 Hrs </p>
                                </div>
                                <hr>
                                <div class="row">
                                    <p class="m-head"><b>Service Id: 8488</b></p>
                                    <p>Extras:</p>
                                    <p>Total Payment: <span class="m-currency">56,25 €</p>
                                </div>
                                <hr>
                                <div class="row">
                                    <p class="m-head"><b>Customer Name: Gaurang Patel.</b></p>
                                    <p>Service Address: Koenigstrasse 112,99897 Tambach-Dietharz</p>
                                    <p>Distance: 296,76</p>
                                </div>
                                <hr>
                                <div class="row">
                                    <p class="m-head"><b>Comments</b></p>
                                    <p><span class="fa fa-times-circle-o"></span> I dont't have pets at home</p>
                                </div>
                                <hr>
                                <div class="row modal-button">
                                    <div class="col">
                                        <button class="modal-button-cancel"><i class="fa fa-times"></i> Cancel</button>
                                        <button class="modal-button-complete"><i class="fa fa-check"></i>
                                            Complete</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5 modal-section-map">
                                <iframe allowfullscreen="" frameborder="0"
                                    src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJxzZgCD_hvkcRTC-2Pt6bXt0&amp;key=AIzaSyAag-Mf1I5xbhdVHiJmgvBsPfw7mCqwBKU"></iframe>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
<!--complete-->
<!--Modal for Accept Service Request-->

<div class="modal fade" id="ServiceAcceptModal" tabindex="-1" aria-labelledby="exampleModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <div class="row">
                            <div class="col-7 modal-section-body">
                                <div class="row">
                                    <p class="m-head"><b>Service Details</b></p>
                                    <p class="m-time">07/10/2021 08:00 -11:00 </p>
                                    <p>Duration: 3 Hrs </p>
                                </div>
                                <hr>
                                <div class="row">
                                    <p class="m-head"><b>Service Id: 8488</b></p>
                                    <p>Extras:</p>
                                    <p>Total Payment: <span class="m-currency">56,25 €</p>
                                </div>
                                <hr>
                                <div class="row">
                                    <p class="m-head"><b>Customer Name: Gaurang Patel.</b></p>
                                    <p>Service Address: Koenigstrasse 112,99897 Tambach-Dietharz</p>
                                    <p>Distance: 296,76</p>
                                </div>
                                <hr>
                                <div class="row">
                                    <p class="m-head"><b>Comments</b></p>
                                    <p><span class="fa fa-times-circle-o"></span> I dont't have pets at home</p>
                                </div>
                                <hr>
                                <div class="row modal-button">
                                    <div class="col">
                                        
                                        <button class="modal-button-Accept"><i class="fa fa-check"></i>
                                            Accept</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5 modal-section-map">
                                <iframe allowfullscreen="" frameborder="0"
                                    src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJxzZgCD_hvkcRTC-2Pt6bXt0&amp;key=AIzaSyAag-Mf1I5xbhdVHiJmgvBsPfw7mCqwBKU"></iframe>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
<!--complete-->

<main style="min-height:100vh;">
    <section id="section-home">
        <h1 class="title-main">Welcome, <span class="title-main1">Swati!</span></h1>
    </section>
  
    <section id="tab-section">
        <div class="div-main container-fluild" >
            <div class="div-tab">
                <a href="#dashboard" id="dashboard1" class="" onclick="dashboard();" role="button">Dashboard</a>
                <a href="#newservicerequests" id="newservice" class="" onclick="newservice();" role="button" >New Service Requests</a>
                <a href="#upcomingservice" id="upcoming" class="active" onclick="upcoming();" role="button">Upcoming Service</a>
                <a href="#serviceschedule" id="schedule" class="" onclick="schedule();" role="button">Service Schedule</a>
                <a href="#servicehistory" id="history" class="" onclick="history();" role="button">Service History</a>
                <a href="#myratings" id="ratings" class="" onclick="ratings();" role="button">My Ratings</a>
                <a href="#bookcustomer" id="customer" class="" onclick="bookcustomer();" role="button">Block Customer</a>
                
            </div>
<div class="content-section">
            <div class="divContent" id="mySettings"><!--my settings tab start-->
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#MyDetails" type="button" role="tab" aria-controls="home" aria-selected="true">My Details</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#changePassword" type="button" role="tab" aria-controls="profile" aria-selected="false">Change Password</button>
                    </li>
                    
                  </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="MyDetails" role="tabpanel" aria-labelledby="home-tab">
                        <P><b> Account Status : </b> Active </p>
                        <h6><b>Basic Details</b></h6>
                        <hr>
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
                            <div class="col-sm-4 m-20">
                                <div class="form-group">
                                    <label>Date of Birth</label>
                                    <input type="date" class="form-control" placeholder="03/09/2001">
                                </div>
                            </div>
                            <div class="col-sm-4 m-20">
                                <div class="form-group">
                                    <label>Nationality</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>German</option>
                                        <option value="1">American</option>
                                        <option value="2">Indian</option>
                                        <option value="3">Canadian</option>
                                      </select>
                                </div>
                            </div>
                        </div>
                        <label> Gender </label>
                        <div class="row ">
                        <div class="form-check col" style="margin-left:20px;">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                            <label class="form-check-label" for="exampleRadios1">
                              Male
                            </label>
                        </div>
                        <div class="form-check col">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                            <label class="form-check-label" for="exampleRadios2">
                              Female
                            </label>
                        </div>
                        <div class="form-check col">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                            <label class="form-check-label" for="exampleRadios3">
                              Rather not to say
                            </label>
                        </div>
                        </div>
                        <label> Select Avatar</label>
                        
                        <div class="form-group">
                            <div class="columnAvatar">
                                <img class="avatar" src="./assets/images/avatar-female.png">
                            </div>
                            <div class="columnAvatar">
                                <img class="avatar" src="./assets/images/avatar-car.png">
                            </div>
                            <div class="columnAvatar">
                                <img class="avatar" src="./assets/images/avatar-hat.png">
                            </div>
                            <div class="columnAvatar">
                                <img class="avatar" src="./assets/images/avatar-iron.png">
                            </div>
                            <div class="columnAvatar">
                                <img class="avatar" src="./assets/images/avatar-male.png">
                            </div>
                            <div class="columnAvatar">
                                <img class="avatar" src="./assets/images/avatar-ship.png">
                            </div>
                        </div>
                    </select>
                        
                        <h6 style="margin-top:190px;"><b>My Address</b></h6>
                        <hr>
                        <div class="row m-20">
                            <div class="col-sm-4 m-20">
                                <div class="form-group">
                                    <label>Street Name</label>
                                    <input type="text" class="form-control" placeholder="Koenigstrasse">
                                </div>

                            </div>
                            <div class="col-sm-4 m-20">
                                <div class="form-group">
                                    <label>House Number</label>
                                    <input type="text" class="form-control" placeholder="22">
                                </div>
                            </div>
                            <div class="col-sm-4 m-20">
                                <div class="form-group">
                                    <label>Postal code</label>
                                    <input type="email" class="form-control" placeholder="993499">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="email" class="form-control" placeholder="Tambach-Dietharz">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="m-20">
                            <button class="Reschedule"> Save </button>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="changePassword" role="tabpanel" aria-labelledby="profile-tab">
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
            <!--End mysettings tab-->
            <!--dashboard strts-->
            <div class="divContent" id="dashboard">
                <div class="row">
                <div class="col title-filter">
                    <span style="color: black;">Service area :
                        <select name="mySelect" id="mySelect" onchange="setValue();">
                            <option value="1" selected="">2 KM</option>
                            <option value="2"> 5 KM</option>
                            <option value="3"> 10 KM</option>
                            <option value="4">15 KM</option>
                            <option value="3"> 20 KM</option>
                            <option value="4">25 KM</option>
                        </select></span>
                </div>
                <div class="col">
                    <input type="checkbox"> <span> Include Pet at home</span>
                </div>
                
            </div> 
            <div>
                <table class="current-services" id="mytable3"> 
                    <thead>
                        <tr>
                            <th>Service ID <img src="./assets/images/form-1_2.png"></th>
                            <th>Service date <img src="./assets/images/form-1_2.png"></th>
                            <th>Cutomer details <img src="./assets/images/form-1_2.png"></th>
                            <th>Payment <img src="./assets/images/form-1_2.png"></th>
                            <th>Time Conflict <img src="./assets/images/form-1_2.png"></th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>323436</td>
                            <td>
                                <div><img src="./assets/images/calculator.png"><b>09/04/2018</b></div>
                                <div><img src="./assets/images/layer-712.png" >12:00 - 18:00</div>
                            </td>
                            <td>
                                <div>David Bough</div>
                                <div><img src="./assets/images/layer-719.png">Musterstrabe 5,12345 Bonn</div>
                            </td>
                            <td> <i class="fa fa-eur"></i>56,25</td>
                            <td></td>
                            <td class="buttonaccept"><button data-bs-toggle="modal"
                                data-bs-target="#ServiceAcceptModal"
                                data-bs-dismiss="modal">Accept</button>
                            </td>
                        </tr>
                        <tr>
                            <td>323436</td>
                            <td>
                                <div><img src="./assets/images/calculator.png"><b>09/04/2018</b></div>
                                <div><img src="./assets/images/layer-712.png">12:00 - 18:00</div>
                            </td>
                            <td>
                                <div>David Bough</div>
                                <div><img src="./assets/images/layer-719.png">Musterstrabe 5,12345 Bonn</div>
                            </td>
                            <td> <i class="fa fa-eur"></i>56,25</td>
                            <td></td>
                            <td class="buttonaccept"><button data-bs-toggle="modal"
                                data-bs-target="#ServiceAcceptModal"
                                data-bs-dismiss="modal">Accept</button>
                            </td>
                        </tr>
                        <tr>
                            <td>323436</td>
                            <td>
                                <div><img src="./assets/images/calculator.png"><b>09/04/2018</b></div>
                                <div><img src="./assets/images/layer-712.png" >12:00 - 18:00</div>
                            </td>
                            <td>
                                <div>David Bough</div>
                                <div><img src="./assets/images/layer-719.png">Musterstrabe 5,12345 Bonn</div>
                            </td>
                            <td> <i class="fa fa-eur"></i>56,25</td>
                            <td></td>
                            <td class="buttonaccept"><button data-bs-toggle="modal"
                                data-bs-target="#ServiceAcceptModal"
                                data-bs-dismiss="modal">Accept</button>
                            </td>
                        </tr>
                        <tr>
                            <td>323436</td>
                            <td>
                                <div><img src="./assets/images/calculator.png"><b>09/04/2018</b></div>
                                <div><img src="./assets/images/layer-712.png">12:00 - 18:00</div>
                            </td>
                            <td>
                                <div>David Bough</div>
                                <div><img src="./assets/images/layer-719.png">Musterstrabe 5,12345 Bonn</div>
                            </td>
                            <td> <i class="fa fa-eur"></i>56,25</td>
                            <td></td>
                            <td class="buttonaccept"><button data-bs-toggle="modal"
                                data-bs-target="#ServiceAcceptModal"
                                data-bs-dismiss="modal">Accept</button>
                            </td>
                        </tr>
                        <tr>
                            <td>323436</td>
                            <td>
                                <div><img src="./assets/images/calculator.png"><b>09/04/2018</b></div>
                                <div><img src="./assets/images/layer-712.png">12:00 - 18:00</div>
                            </td>
                            <td>
                                <div>David Bough</div>
                                <div><img src="./assets/images/layer-719.png">Musterstrabe 5,12345 Bonn</div>
                            </td>
                            <td> <i class="fa fa-eur"></i>56,25</td>
                            <td></td>
                            <td class="buttonaccept"><button data-bs-toggle="modal"
                                data-bs-target="#ServiceAcceptModal"
                                data-bs-dismiss="modal">Accept</button>
                            </td>
                        </tr>
                       
                        
                        <tr>
                            <td>323436</td>
                            <td>
                                <div><img src="./assets/images/calculator.png"><b>09/04/2018</b></div>
                                <div><img src="./assets/images/layer-712.png">12:00 - 18:00</div>
                            </td>
                            <td>
                                <div>David Bough</div>
                                <div><img src="./assets/images/layer-719.png">Musterstrabe 5,12345 Bonn</div>
                            </td>
                            <td> <i class="fa fa-eur"></i>56,25</td>
                            <td></td>
                            <td class="buttonaccept">
                                <button data-bs-toggle="modal"
                                data-bs-target="#ServiceAcceptModal"
                                data-bs-dismiss="modal">Accept</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
            <!--dashboard ends-->
            <!--service schedule starts-->
            <div class="divContent" id="serviceschedule">
               

            </div>
            <!--service schedule ends-->
            <!--service history starts-->
            <div class="divContent" id="servicehistory">
                
                 <div class="row">
                    <div class="col title-filter">
                        <p class="medium-title"> Payment Status:
                            <select name="mySelect" id="mySelect" onchange="setValue();">
                                <option value="1" selected="">All</option>
                                <option value="2"> All 1</option>
                                <option value="3"> All 2</option>
                                <option value="4">All 3</option>
                                <option value="3"> All 4</option>
                                <option value="4">All 5</option>
                            </select>
                        </p>
                    </div>
                    <div class="col">
                       <div class="buttonaccept"> <button class="btn btn-primary " style="float: right;" routerlink="/book-service" title="Add New Service Request" href="#">
                            Export</button></div>
                    </div>
                    
                </div>
                <div>
                    <table  class="current-services" id="mytable">
                        <thead>
                            <tr>
                                <th>Service ID <img src="./assets/images/form-1_2.png"></th>
                                <th>Service date <img src="./assets/images/form-1_2.png"></th>
                                <th>Cutomer details <img src="./assets/images/form-1_2.png"></th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>323436</td>
                                <td>
                                    <div><img src="./assets/images/calculator.png"><b>09/04/2018</b></div>
                                    <div><img src="./assets/images/layer-712.png" >12:00 - 18:00</div>
                                </td>
                                <td>
                                    <div>David Bough</div>
                                    <div><img src="./assets/images/layer-719.png">Musterstrabe 5,12345 Bonn</div>
                                </td>
                               
                            </tr>
                            <tr>
                                <td>323436</td>
                                <td>
                                    <div><img src="./assets/images/calculator.png"><b>09/04/2018</b></div>
                                    <div><img src="./assets/images/layer-712.png">12:00 - 18:00</div>
                                </td>
                                <td>
                                    <div>David Bough</div>
                                    <div><img src="./assets/images/layer-719.png">Musterstrabe 5,12345 Bonn</div>
                                </td>
                                
                            </tr>
                            <tr>
                                <td>323436</td>
                                <td>
                                    <div><img src="./assets/images/calculator.png"><b>09/04/2018</b></div>
                                    <div><img src="./assets/images/layer-712.png" >12:00 - 18:00</div>
                                </td>
                                <td>
                                    <div>David Bough</div>
                                    <div><img src="./assets/images/layer-719.png">Musterstrabe 5,12345 Bonn</div>
                                </td>
                               
                            </tr>
                            <tr>
                                <td>323436</td>
                                <td>
                                    <div><img src="./assets/images/calculator.png"><b>09/04/2018</b></div>
                                    <div><img src="./assets/images/layer-712.png">12:00 - 18:00</div>
                                </td>
                                <td>
                                    <div>David Bough</div>
                                    <div><img src="./assets/images/layer-719.png">Musterstrabe 5,12345 Bonn</div>
                                </td>
                               
                            </tr>
                            <tr>
                                <td>323436</td>
                                <td>
                                    <div><img src="./assets/images/calculator.png"><b>09/04/2018</b></div>
                                    <div><img src="./assets/images/layer-712.png">12:00 - 18:00</div>
                                </td>
                                <td>
                                    <div>David Bough</div>
                                    <div><img src="./assets/images/layer-719.png">Musterstrabe 5,12345 Bonn</div>
                                </td>
                               
                            </tr>
                           
                            
                            <tr>
                                <td>323436</td>
                                <td>
                                    <div><img src="./assets/images/calculator.png"><b>09/04/2018</b></div>
                                    <div><img src="./assets/images/layer-712.png">12:00 - 18:00</div>
                                </td>
                                <td>
                                    <div>David Bough</div>
                                    <div><img src="./assets/images/layer-719.png">Musterstrabe 5,12345 Bonn</div>
                                </td>
                                
                            </tr>
                        </tbody>
                    </table>
                </div>
               
            </div>
            <!--service history ends-->
            <!--Myratings section starts-->
            <div class="divContent" id="myratings">
                <div class="card m-20" style="width: auto; box-shadow: 0 0 6px rgb(0 0 0 / 25%);">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h5 class="card-title">8318</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Gaurang Patel</h6>
                            </div>
                            <div class="col-sm-6">
                                <div><img src="./assets/images/calculator.png"><b>09/04/2018</b></div>
                                <div><img src="./assets/images/layer-712.png">12:00 - 18:00</div>
                            </div>
                            <div class="col-sm-3">
                                <span>ratings</span>
                                <div class="td-rating" >
                                    <div class="rating-info">
                                        <div class="info-ratings">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star-o"></span>
                                            Very good
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <hr>
                    <p>Customer Comments</p>
                    </div> 
                </div>
                <div class="card" style="width: auto; box-shadow: 0 0 6px rgb(0 0 0 / 25%);">
                    <div class="card-body m-20">
                        <div class="row">
                            <div class="col-sm-3">
                                <h5 class="card-title">7216</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Gaurang Patel</h6>
                            </div>
                            <div class="col-sm-6">
                                <div><img src="./assets/images/calculator.png"><b>09/04/2018</b></div>
                                <div><img src="./assets/images/layer-712.png">12:00 - 18:00</div>
                            </div>
                            <div class="col-sm-3">
                                <span>ratings</span>
                                <div class="td-rating">
                                    <div class="rating-info">
                                        <div class="info-ratings">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star-o"></span>
                                            Very good
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <hr>
                    <p>Customer Comments</p>
                    <p> Excellent work done by the provider i am very happy and would like to receive the services of the same provider.</p>
                    </div> 
                </div>
            </div>
            <!--My ratings ends-->
            <!--block customer start-->
            <div class="divContent" id="bookcustomer">
                <div class="row m-20" >
                    <div class="col-sm-4 m-20">
                      <div class="card">
                        <div class="card-body text-center">
                         <div class="td-rating" style="justify-content: center;">  <div class="rating-user"> <img src="./assets/images/forma-1_1.png"></div></div>
                          <h5 class="card-title">Swati Raiyani</h5>
                         <button class="cancel">Block</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4 m-20">
                        <div class="card">
                          <div class="card-body text-center">
                           <div class="td-rating" style="justify-content: center;">  <div class="rating-user"> <img src="./assets/images/forma-1_1.png"></div></div>
                            <h5 class="card-title">Kavan Patel</h5>
                           <button class="cancel">Block</button>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 m-20">
                        <div class="card">
                          <div class="card-body text-center">
                           <div class="td-rating" style="justify-content: center;">  <div class="rating-user"> <img src="./assets/images/forma-1_1.png"></div></div>
                            <h5 class="card-title">Gurang Patel</h5>
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
                                <h5 class="card-title">Keyur Nakrani</h5>
                               <button class="cancel">Block</button>
                              </div>
                            </div>
                          </div>
                    </div>
            </div>
            <!--block customer ends-->
            <!--New service request starts-->
            <div class="divContent" id="newservicerequests">
                
                <div class="row">
                    <div class="col title-filter">
                        <span style="color: black;">Service area :
                            <select name="mySelect" id="mySelect" onchange="setValue();">
                                <option value="1" selected="">2 KM</option>
                                <option value="2"> 5 KM</option>
                                <option value="3"> 10 KM</option>
                                <option value="4">15 KM</option>
                                <option value="3"> 20 KM</option>
                                <option value="4">25 KM</option>
                            </select></span>
                    </div>
                    <div class="col">
                        <input type="checkbox"> <span> Include Pet at home</span>
                    </div>
                    
                </div> 
                <div>
                    <table class="current-services" id="mytable1"> 
                        <thead>
                            <tr>
                                <th>Service ID <img src="./assets/images/form-1_2.png"></th>
                                <th>Service date <img src="./assets/images/form-1_2.png"></th>
                                <th>Cutomer details <img src="./assets/images/form-1_2.png"></th>
                                <th>Payment <img src="./assets/images/form-1_2.png"></th>
                                <th>Time Conflict <img src="./assets/images/form-1_2.png"></th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>323436</td>
                                <td>
                                    <div><img src="./assets/images/calculator.png"><b>09/04/2018</b></div>
                                    <div><img src="./assets/images/layer-712.png" >12:00 - 18:00</div>
                                </td>
                                <td>
                                    <div>David Bough</div>
                                    <div><img src="./assets/images/layer-719.png">Musterstrabe 5,12345 Bonn</div>
                                </td>
                                <td> <i class="fa fa-eur"></i>56,25</td>
                                <td></td>
                                <td class="buttonaccept"><button data-bs-toggle="modal"
                                    data-bs-target="#ServiceAcceptModal"
                                    data-bs-dismiss="modal">Accept</button>
                                </td>
                            </tr>
                            <tr>
                                <td>323436</td>
                                <td>
                                    <div><img src="./assets/images/calculator.png"><b>09/04/2018</b></div>
                                    <div><img src="./assets/images/layer-712.png">12:00 - 18:00</div>
                                </td>
                                <td>
                                    <div>David Bough</div>
                                    <div><img src="./assets/images/layer-719.png">Musterstrabe 5,12345 Bonn</div>
                                </td>
                                <td> <i class="fa fa-eur"></i>56,25</td>
                                <td></td>
                                <td class="buttonaccept"><button data-bs-toggle="modal"
                                    data-bs-target="#ServiceAcceptModal"
                                    data-bs-dismiss="modal">Accept</button>
                                </td>
                            </tr>
                            <tr>
                                <td>323436</td>
                                <td>
                                    <div><img src="./assets/images/calculator.png"><b>09/04/2018</b></div>
                                    <div><img src="./assets/images/layer-712.png" >12:00 - 18:00</div>
                                </td>
                                <td>
                                    <div>David Bough</div>
                                    <div><img src="./assets/images/layer-719.png">Musterstrabe 5,12345 Bonn</div>
                                </td>
                                <td> <i class="fa fa-eur"></i>56,25</td>
                                <td></td>
                                <td class="buttonaccept"><button data-bs-toggle="modal"
                                    data-bs-target="#ServiceAcceptModal"
                                    data-bs-dismiss="modal">Accept</button>
                                </td>
                            </tr>
                            <tr>
                                <td>323436</td>
                                <td>
                                    <div><img src="./assets/images/calculator.png"><b>09/04/2018</b></div>
                                    <div><img src="./assets/images/layer-712.png">12:00 - 18:00</div>
                                </td>
                                <td>
                                    <div>David Bough</div>
                                    <div><img src="./assets/images/layer-719.png">Musterstrabe 5,12345 Bonn</div>
                                </td>
                                <td> <i class="fa fa-eur"></i>56,25</td>
                                <td></td>
                                <td class="buttonaccept"><button data-bs-toggle="modal"
                                    data-bs-target="#ServiceAcceptModal"
                                    data-bs-dismiss="modal">Accept</button>
                                </td>
                            </tr>
                            <tr>
                                <td>323436</td>
                                <td>
                                    <div><img src="./assets/images/calculator.png"><b>09/04/2018</b></div>
                                    <div><img src="./assets/images/layer-712.png">12:00 - 18:00</div>
                                </td>
                                <td>
                                    <div>David Bough</div>
                                    <div><img src="./assets/images/layer-719.png">Musterstrabe 5,12345 Bonn</div>
                                </td>
                                <td> <i class="fa fa-eur"></i>56,25</td>
                                <td></td>
                                <td class="buttonaccept"><button data-bs-toggle="modal"
                                    data-bs-target="#ServiceAcceptModal"
                                    data-bs-dismiss="modal">Accept</button>
                                </td>
                            </tr>
                           
                            
                            <tr>
                                <td>323436</td>
                                <td>
                                    <div><img src="./assets/images/calculator.png"><b>09/04/2018</b></div>
                                    <div><img src="./assets/images/layer-712.png">12:00 - 18:00</div>
                                </td>
                                <td>
                                    <div>David Bough</div>
                                    <div><img src="./assets/images/layer-719.png">Musterstrabe 5,12345 Bonn</div>
                                </td>
                                <td> <i class="fa fa-eur"></i>56,25</td>
                                <td></td>
                                <td class="buttonaccept">
                                    <button data-bs-toggle="modal"
                                    data-bs-target="#ServiceAcceptModal"
                                    data-bs-dismiss="modal">Accept</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
               
            </div>
            <!--new service request ends-->
            <!--upcoming service starts-->
            <div class="divContent" id="upcomingservice">
                <div>
                     <table class="current-services" id="mytable2"> 
                       
                        <thead>
                            <tr>
                                <th>Service ID <img src="./assets/images/form-1_2.png"></th>
                                <th>Service date <img src="./assets/images/form-1_2.png"></th>
                                <th>Cutomer details <img src="./assets/images/form-1_2.png"></th>
                                <th> Payment <img src="./assets/images/form-1_2.png"></th>
                                <th>Distance <img src="./assets/images/form-1_2.png"></th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>323436</td>
                                <td class="abc">
                                    <div><img src="./assets/images/calculator.png"><b>09/04/2018</b></div>
                                    <div><img src="./assets/images/layer-712.png" >12:00 - 18:00</div>
                                </td>
                                <td>
                                    <div>David Bough</div>
                                    <div><img src="./assets/images/layer-719.png">Musterstrabe 5,12345 Bonn</div>
                                </td>
                                <td> <i class="fa fa-eur"></i>56,25</td>
                                <td>15 km</td>
                                <td class="buttoncancel"><button  data-bs-toggle="modal"
                                    data-bs-target="#ServiceCancelModal"
                                    data-bs-dismiss="modal">Cancel</button>
                                </td>
                            </tr>
                            <tr>
                                <td>323436</td>
                                <td>
                                    <div><img src="./assets/images/calculator.png"><b>09/04/2018</b></div>
                                    <div><img src="./assets/images/layer-712.png">12:00 - 18:00</div>
                                </td>
                                <td>
                                    <div>David Bough</div>
                                    <div><img src="./assets/images/layer-719.png">Musterstrabe 5,12345 Bonn</div>
                                </td>
                                <td> <i class="fa fa-eur"></i>56,25</td>
                                <td>15 km</td>
                                <td class="buttoncancel"><button  data-bs-toggle="modal"
                                    data-bs-target="#ServiceCancelModal"
                                    data-bs-dismiss="modal">Cancel</button>
                                </td>
                            </tr>
                            <tr>
                                <td>323436</td>
                                <td>
                                    <div><img src="./assets/images/calculator.png"><b>09/04/2018</b></div>
                                    <div><img src="./assets/images/layer-712.png" >12:00 - 18:00</div>
                                </td>
                                <td>
                                    <div>David Bough</div>
                                    <div><img src="./assets/images/layer-719.png">Musterstrabe 5,12345 Bonn</div>
                                </td>
                                <td> <i class="fa fa-eur"></i>56,25</td>
                                <td>15 km</td>
                                <td class="buttoncancel"><button  data-bs-toggle="modal"
                                    data-bs-target="#ServiceCancelModal"
                                    data-bs-dismiss="modal">Cancel</button>
                                </td>
                            </tr>
                            <tr>
                                <td>323436</td>
                                <td>
                                    <div><img src="./assets/images/calculator.png"><b>09/04/2018</b></div>
                                    <div><img src="./assets/images/layer-712.png">12:00 - 18:00</div>
                                </td>
                                <td>
                                    <div>David Bough</div>
                                    <div><img src="./assets/images/layer-719.png">Musterstrabe 5,12345 Bonn</div>
                                </td>
                                <td> <i class="fa fa-eur"></i>56,25</td>
                                <td>15 km</td>
                                <td class="buttoncancel"><button  data-bs-toggle="modal"
                                    data-bs-target="#ServiceCancelModal"
                                    data-bs-dismiss="modal">Cancel</button>
                                </td>
                            </tr>
                            <tr>
                                <td>323436</td>
                                <td>
                                    <div><img src="./assets/images/calculator.png"><b>09/04/2018</b></div>
                                    <div><img src="./assets/images/layer-712.png">12:00 - 18:00</div>
                                </td>
                                <td>
                                    <div>David Bough</div>
                                    <div><img src="./assets/images/layer-719.png">Musterstrabe 5,12345 Bonn</div>
                                </td>
                                <td> <i class="fa fa-eur"></i>56,25</td>
                                <td>15 km</td>
                                <td class="buttoncancel"><button  data-bs-toggle="modal"
                                    data-bs-target="#ServiceCancelModal"
                                    data-bs-dismiss="modal">Cancel</button>
                                </td>
                            </tr>
                            <tr>
                                <td>323436</td>
                                <td>
                                    <div><img src="./assets/images/calculator.png"><b>09/04/2018</b></div>
                                    <div><img src="./assets/images/layer-712.png">12:00 - 18:00</div>
                                </td>
                                <td>
                                    <div>David Bough</div>
                                    <div><img src="./assets/images/layer-719.png">Musterstrabe 5,12345 Bonn</div>
                                </td>
                                <td> <i class="fa fa-eur"></i>56,25</td>
                                <td>15 km</td>
                                <td class="buttoncancel"><button  data-bs-toggle="modal"
                                    data-bs-target="#ServiceCancelModal"
                                    data-bs-dismiss="modal">Cancel</button>
                                </td>
                            </tr>
                            <tr>
                                <td>323436</td>
                                <td>
                                    <div><img src="./assets/images/calculator.png"><b>09/04/2018</b></div>
                                    <div><img src="./assets/images/layer-712.png">12:00 - 18:00</div>
                                </td>
                                <td>
                                    <div>David Bough</div>
                                    <div><img src="./assets/images/layer-719.png">Musterstrabe 5,12345 Bonn</div>
                                </td>
                                <td> <i class="fa fa-eur"></i>56,25</td>
                                <td>15 km</td>
                                <td class="buttoncancel"><button  data-bs-toggle="modal"
                                    data-bs-target="#ServiceCancelModal"
                                    data-bs-dismiss="modal">Cancel</button>
                                </td>
                            </tr>
                            <tr>
                                <td>323436</td>
                                <td>
                                    <div><img src="./assets/images/calculator.png"><b>09/04/2018</b></div>
                                    <div><img src="./assets/images/layer-712.png">12:00 - 18:00</div>
                                </td>
                                <td>
                                    <div>David Bough</div>
                                    <div><img src="./assets/images/layer-719.png">Musterstrabe 5,12345 Bonn</div>
                                </td>
                                <td> <i class="fa fa-eur"></i>56,25</td>
                                <td>15 km</td>
                                <td class="buttoncancel"><button  data-bs-toggle="modal"
                                    data-bs-target="#ServiceCancelModal"
                                    data-bs-dismiss="modal">Cancel</button>
                                </td>
                            </tr>
                            <tr>
                                <td>323436</td>
                                <td>
                                    <div><img src="./assets/images/calculator.png"><b>09/04/2018</b></div>
                                    <div><img src="./assets/images/layer-712.png">12:00 - 18:00</div>
                                </td>
                                <td>
                                    <div>David Bough</div>
                                    <div><img src="./assets/images/layer-719.png">Musterstrabe 5,12345 Bonn</div>
                                </td>
                                <td> <i class="fa fa-eur"></i>56,25</td>
                                <td>15 km</td>
                                <td class="buttoncancel"><button  data-bs-toggle="modal"
                                    data-bs-target="#ServiceCancelModal"
                                    data-bs-dismiss="modal">Cancel</button>
                                </td>
                            </tr>
                            <tr>
                                <td>323436</td>
                                <td>
                                    <div><img src="./assets/images/calculator.png"><b>09/04/2018</b></div>
                                    <div><img src="./assets/images/layer-712.png">12:00 - 18:00</div>
                                </td>
                                <td>
                                    <div>David Bough</div>
                                    <div><img src="./assets/images/layer-719.png">Musterstrabe 5,12345 Bonn</div>
                                </td>
                                <td> <i class="fa fa-eur"></i>56,25</td>
                                <td>15 km</td>
                                <td class="buttoncancel"><button  data-bs-toggle="modal"
                                    data-bs-target="#ServiceCancelModal"
                                    data-bs-dismiss="modal">Cancel</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
               
            </div>
            <!--upcoming service ends-->
            

</div>            
</div>
</section>


</main>
</div><!--ends wrapper class-->

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
<!--footer section end-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <script
      type="text/javascript"
      src="https://cdn.datatables.net/v/dt/dt-1.11.3/r-2.2.9/rg-1.1.4/datatables.min.js"
    ></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js"></script>
    <script>
      $(document).ready(function () {
        $("#mytable").DataTable();
      });
    </script>
    <!--for service history-->
    <script>
        const dt = new DataTable("#mytable", {
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
        columnDefs: [{ orderable: false, targets: 2 }],
    });
    </script>

<script>
    $(document).ready(function () {
      $("#mytable1").DataTable();
    });
  </script>
  <!--for service Request-->
  <script>
      const dt1 = new DataTable("#mytable1", {
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
      columnDefs: [{ orderable: false, targets: 5}],
  });
  </script>
   <!-- for upcoming service-->
   <script>
    $(document).ready(function () {
      $("#mytable2").DataTable();
    });
  </script>
   <script>
    const dt2 = new DataTable("#mytable2", {
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
    columnDefs: [{ orderable: false, targets: 5}],
});
</script> 
<!--for dashboard-->
<script>
    $(document).ready(function () {
      $("#mytable3").DataTable();
    });
  </script>
   <script>
    const dt3 = new DataTable("#mytable3", {
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
    columnDefs: [{ orderable: false, targets: 5}],
});
</script> 
    <script type="text/javascript" src="./assets/js/spdashboard.js"></script>
   
</body>

</html>