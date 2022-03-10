<?php 
session_start();
$base_url='http://localhost/TatvaSoft/Helperland/';
if(isset($_SESSION['userdata'])){
    $userdata=$_SESSION['userdata'];}
else{
    header('Location:'. 'http://localhost/TatvaSoft/Helperland/?controller=Contact&function=HomePage');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <title> Customer Dashboard</title>
    
    <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
    <script src="https://kit.fontawesome.com/5602f8a8c9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel=stylesheet>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
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
    
    <link rel='stylesheet' href="./assets/css/headerall.css">
    <link rel='stylesheet' href="./assets/css/customerdashboard.css">
</head>

<body >

<!--for navbar-->
<div class="wrapper">
<!-- header -->
<?php include('includes/cusp.php'); ?>

<?php
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$test = explode('=', $actual_link);
$last = end($test);


?>
<?php $base_url='http://localhost/TatvaSoft/Helperland/' ?>
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
            <form action="#" id="servicedetails">
            <input type="hidden" name="service_id" id="service_id1" class="service_id">
              <div class="mb-3" >
               <p><b>Date:</b><span id="appenddate"> </span></p>
               <p ><b>Duration : </b> <span id="duration"></span></p>
                <hr>
                <p><b>Service Id : </b><span id="serviceid"> </span></p>
                <p><b>Extras :</b><span id="extra"></span></p>
                <p><b>Net Amount:</b><i class="fa fa-eur singlefont"></i><span class="singlefont" id="totalcost"></span></p>
                <hr>
                <p><b>Service Address :</b> <span id="address"></span></p>
                <p><b>Billing Address</b> : Same as cleaning Service</p>
                <p><b>Phone : </b>  <span id="mobile1"></span></p>
                <p><b>Email : </b> <span id="email1"></span></p>
                <hr>
                <p><b>Comments : </b><span id="comments"></span></p>
                <p><span id="haspets"></span></p>
                <hr> 
                
                <button  type="button" class="Reschedule" id="btn1" data-bs-dismiss="modal" aria-label="Close" onclick="reschedule($('.service_id').val())" > Reschedule </button>
                <button class="cancel" type="button" id="btn2" data-bs-dismiss="modal" aria-label="Close" onclick="trash21($('.service_id').val())"> cancel </button>
              </div>
            </form>
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
            <form action="#" id="datetimeforreschedule">
            
            <input type="hidden" name="reschedule_edit_id" id="reschedule_edit_id1" class="reschedule_edit_id">
                <p><b>Select New Date & Time</b></p>

                <div class="row">
                    <div  class="col-sm-6">
                       <div class="form-group">
                          <input type="date" class="form-control w200 " id="getdate1" name="getdate1">
                       </div>
                    </div>
                    <div  class="col-sm-6">
                        <div class="form-group">
                            <input type="time" class="form-control w200" id="gettime1" name="gettime1">
                        </div>
                    </div>
                </div>
                <hr>
                <div class=" text-center">
                    <button type="button" data-bs-dismiss="modal" aria-label="Close" class="blue-btn1" onclick="editdatetime();">Reschedule</a>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<!--  -->
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
            <form action="#" id="cancelsr">
            <input type="hidden" name="cancel_id" id="cancel_id1" class="cancel_id">
                <p><b>Why you want to cancel the service request?</b></p>
                <textarea rows="5" class="form-control" placeholder="why do you want to cancel service requests?"></textarea>
                <hr>
                <div class=" text-center">
                    <button type="button"  class="blue-btn1" data-bs-dismiss="modal" aria-label="Close" onclick="cancelsr();">Cancel Now</a>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<!--Modal End-->
<!--Modal for Rating in service history tab-->
<div class="modal fade" id="exampleModalRateSP" tabindex="-1"
aria-labelledby="exampleModalLabel2" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
        <div class="abc1"></div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="m-heading">
                Rate Your Service Provider
            </div>
            <hr>
            <div class="m-form">
                <form  id="ratingcust">
                    <input type="hidden" name="sid" class="sid1" id="sid2">
                <div class="m-ratings">
                        <p>On Time Arrival</p>
                        <div  class="rateYo ontime" data-rateyo-rating="1"></div>
                        <input type="hidden" name="ontime" id="ontime" class="getvalue" name="getvalue" >
                </div>
                <div class="m-ratings">
                        <p>Friendly</p>
                        <div  class="rateYo friendly" data-rateyo-rating="1"></div>
                        <input type="hidden" name="friendly" id="friendly" class="getvalue1" name="getvalue" >
                </div>
                <div class="m-ratings">
                        <p>Quality of Service</p>
                        <div  class="rateYo qos" data-rateyo-rating="1"></div>
                        <input type="hidden" name="qos" id="qos" class="getvalue2" name="getvalue" >
                </div>
                <div class="form-group">
                        <label for="feedback">Feedback on Service Provider</label>
                        <textarea name="comment" id="comment1" class="form-control" rows="2"></textarea>
                </div>
                <div>
                    <button class="blue-btn1" type="button" data-bs-dismiss="modal" aria-label="Close" onclick="checkrating();">Submit</button>
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
            <form action="#" id="editdata">
            <input type="hidden" name="edit_id" id="edit_id" class="edit_id1">
                <div class="row">
                    <div  class="col-sm-6">
                       <div class="form-group">
                           <label>Street name</label>
                          <input type="text" class="form-control w200" id="addStreetname1" name="addStreetname1">
                       </div>
                    </div>
                    <div  class="col-sm-6">
                        <div class="form-group">
                            <label>House Number</label>
                            <input type="text" class="form-control w200" id="addHouseno1" name="addHouseno1">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div  class="col-sm-6">
                       <div class="form-group">
                           <label>Postal code</label>
                          <input type="text" class="form-control w200" id="addPostalcode1" name="addPostalcode1">
                       </div>
                    </div>
                    <div  class="col-sm-6">
                        <div class="form-group">
                            <label>City</label>
                            <input type="text" class="form-control w200" id="addCity1" name="addCity1">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label>Phone Number</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">+91</span>
                            <input type="text" class="form-control" id="addPhoneno1" name="addPhoneno1" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>
                <hr>
                <div class=" text-center">
                    <button type="button"  class="blue-btn1" data-bs-dismiss="modal" aria-label="Close" onclick="edit();">Edit</a>
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
                          <input type="text" class="form-control w200" placeholder="Koenigstreet20" id="addStreetname">
                       </div>
                    </div>
                    <div  class="col-sm-6">
                        <div class="form-group">
                            <label>House Number</label>
                            <input type="text" class="form-control w200" placeholder="112" id="addHouseno">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div  class="col-sm-6">
                       <div class="form-group">
                           <label>Postal code</label>
                          <input type="text" class="form-control w200" placeholder="99397" id="addPostalcode">
                       </div>
                    </div>
                    <div  class="col-sm-6">
                        <div class="form-group">
                            <label>City</label>
                            <input type="text" class="form-control w200" placeholder="Ahmedabad" id="addCity">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label>Phone Number</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">+91</span>
                            <input type="tel" class="form-control" placeholder="Phone Number" id="addPhoneno" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>
                <hr>
                <div class=" text-center">
                    <button type="button" class="blue-btn1"  data-bs-dismiss="modal" aria-label="Close" onclick="addaddress();">Add</a>
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
            <form action="" method="post" id="deletedata">
                <input type="hidden" name="trash_id" class="trash_id">
                <div class="row">
                    <div class="col">
                        <p> <b> Are You Sure to delete the Address? </b></p>
                        <span>Once You deleted address You can not recover your deleted address !</span>
                    </div>
                </div>   
                <hr>
                <div class="text-center">
                    <button type="button" class="blue-btn1" data-bs-dismiss="modal" aria-label="Close" onclick="trash();">Delete</a>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

<!--end Modal--> 


<main style="min-height:100vh;">
    <section id="section-home">
        
        <h1 class="title-main">Welcome, <span class="title-main1"><?= $userdata['FirstName']; ?></span></h1>
    </section>
  
    <section id="tab-section">
        <div class="div-main container-fluild" >
            <div class="div-tab" >
                <a href="#dashboard" id="dashboard1" class="active" onclick="dashboard();" role="button">Dashboard</a>
                <a href="#servicehistory" id="history" class="" onclick="history();" role="button">Service History</a>
                <a href="#serviceschedule" id="schedule" class="" onclick="schedule();" role="button">Service Schedule</a>
                <a href="#favouriteprones" id="favprons" class="" onclick="favprons();" role="button" >Favourite Prons</a>
                <a href="#invoices" id="invoice" class="" onclick="invoice();" role="button">Invoices</a>
                <a href="#notifications" id="notification" class="" onclick="notification();" role="button">Notifications</a>
                
            </div>
<div class="content-section">
            <div class="divContent" id="mySettings">
            

                <div id="menu">
                    <ul class="nav nav-tabs abc justify-content-center" id="tabination">
                        <li class="selected" onclick="details();" id="mdetail">My Details</li>
                        <li onclick="address();" id="madd">My Addresses</li>
                        <li onclick="changepass();" id="cpass">Change Password</li>
                     </ul>
                </div>


                <br>
                <br>
                  <div class="tab-content" id="nav-tabContent">

                    <div  id="nav-home">
                    <form action="" method="post" id="datauser">
                        <div class="row m-20">
                            <div class="col-sm-4 m-20">
                                <div class="form-group">
                                    <label>First name</label>
                                    <input type="text"  name="firstname" id="fname" class="form-control fname"  />
                                </div>

                            </div>
                            <div class="col-sm-4 m-20">
                                <div class="form-group">
                                    <label>Last name</label>
                                    <input type="text"  name="lastname" id="lname" class="form-control lname"  />
                                </div>
                            </div>
                            <div class="col-sm-4 m-20">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email"  name="email" id="email" class="form-control email" disabled  />
                                </div>
                            </div>
                        </div>
                        <div class="row m-20">
                            <div class="col-sm-4 m-20">
                                <label>Mobile Number</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">+91</span>
                                    <input type="tel"  name="mobile" minlength="10" maxlength="10" id="mobile" class="form-control mobile"  />
                                  </div>
                            </div>
                            <div class="col-sm-4 m-20">
                                <div class="form-group">
                                    <label>Date of Birth</label>
                                    <input type="date"  name="date" class="form-control dob" id="date"/>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col">
                                    <label> My Preffered language </label><br>
                                    <select name="language" id="language1">
                                        <option value="1">English</option>
                                        <option value="2">Hindi</option>
                                    </select>
                            </div>
                        </div>
                        <button type="button" name="submit" id="btnClick"  class="Reschedule">Save</button>
                    </form>
                    </div><!--first tab complete-->
                    <div  id="nav-profile">
                        <form action="#" method="post" id="addressuser">
                        <table  class="current-services" id="service">
                            <thead>
                                <tr>
                                    <th>Billing Address</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="caddress1">
                            
                            </tbody>
                        </table>
                        </form>
                        <button class="Reschedule" type="button" data-bs-toggle="modal"
                            data-bs-target="#AddNewAddress" data-bs-dismiss="modal" > Add New Address </button>

                    </div><!--2nd tab complete-->


                    <div id="nav-contact">
                        <form action="#" id="forpassword" method="post">
                        
                        <div class="row">
                            <div class="col-sm-8 col-md-6 m-20">
                            <label>Old Password</label>
                            <input type="password" class="form-control" autocomplete="off" name="password1" id="password1" placeholder="old password ">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-8 col-md-6 m-20">
                            <label>New Password</label>
                            <input type="password" class="form-control" autocomplete="off" name="newpassword" id="newpassword" placeholder="new password">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-8 col-md-6 m-20">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" autocomplete="off" name="confirmpassword" id="confirmpassword" placeholder="Confirm password">
                            </div>
                        </div>
                        <div class="m-20">
                            <button type="button" class="Reschedule" onclick="changepassword();"> Save </button>
                        </div>
                        </form>
                    </div><!--3rd tab complete-->
                  </div>

            </div><!--complete mysettings tab-->
            <div  class="divContent" id="dashboard">
                <div class="row">
                    <div class="col-sm-6 title-filter">
                        <h3 class="medium-title"> Current Service Request </h3>
                    </div>
                    <div class="col-sm-6">
                        <a role="button" class="add-button1"  href="<?= $base_url.'?controller=Book&function=BookNow'?>">
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
                                <th style="min-width :120px !important; text-align:center; ">Action<img src="./assets/images/form-1_2.png"></th>
                            </tr>
                        </thead>
                        <tbody id="dashboarddata">
                        </tbody>
                    </table>
                </div>
               
            </div><!--complete dashboard-->
            <div class="divContent" id="serviceschedule">
               

            </div><!--complete serviceschedule-->
            <div class="divContent" id="servicehistory">
                <div class="row">
                    <div class="col-sm-6 title-filter">
                        <h3 class="medium-title"> Service History </h3>
                    </div>
                    <div class="col-sm-6">
                    <a role="button" class="add-button1" onclick="html_table_to_excel('xlsx')" >Export</a>
                    
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
                        <tbody id="historydata">
                        </tbody>
                    </table>
                </div>
            </div><!--Complete service history part-->
            <div class="divContent" id="favouriteprones">
                <div id="favprones" class="favpro">
                
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
<?php include('includes/footerall.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script
      type="text/javascript"
      src="https://cdn.datatables.net/v/dt/dt-1.11.3/r-2.2.9/rg-1.1.4/datatables.min.js"
    ></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
    <!--for service history-->
    
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
  
<!--for mysetting address-->
<script>
    const dt3 = new DataTable("#service", {
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

    <script type="text/javascript" src="./assets/js/customerdashboard.js"></script>


<script>
   $( document ).ready(function() {

var test = '<?= $last ?>';
// var str = document.URL;
// var arr = str.split ("#");
// var arr = arr[1];
if(test == 'dashboard'){
    dashboard();
}
else if(test == 'favouriteprones'){
    favprons();
}
else if(test == 'serviceschedule'){
    schedule();
}
else if(test == 'servicehistory' ){
    history();
}
else if(test == 'invoice'){
    invoice();
}
else if(test == 'notiftcation'){
    notification();
}
else if(test == 'mysettings'){
    mysettings();
}


// if(arr == 'favouriteprones'){
//     favprons();
// }else if(arr == 'serviceschedule'){
//     schedule();
// }else if(arr == 'invoices'){
//     invoice();
// }
// else if(arr == 'dashboard'){
//     dashboard();
// }
// else if(arr == 'notifications'){
//     notification();
// }
// else if(arr == 'servicehistory' ){
//     history();
// }

});
function trash2(id){
    $('.trash_id').val(id);
    $("#DeleteAddress").modal('show');
}
function edit2(id){
    $('.edit_id1').val(id);
    geteditaddress();
    $("#EditAddress").modal('show');
}
function reschedule(id){
    $('.reschedule_edit_id').val(id);
    geteditdatetime();
    $("#RescheduleServiceRequest").modal('show');
    $("#ModalServiceDetails").modal('hide');
}

function trash21(id){
    $('.cancel_id').val(id);
    $("#CancelServiceRequest").modal('show');
    $("#ModalServiceDetails").modal('hide');
}
function servicedetails(obj){
    var id = obj.attr('data-id');
    var date = obj.attr('data-date');
    var stime = obj.attr('data-time');
    var etime = obj.attr('data-etime');
    $("#appenddate").text(date + ' ' +stime + '-' + etime);
    $('.service_id').val(id);
    getservicedetails();
    $("#ModalServiceDetails").modal('show');
}





</script>
</body>

</html>
