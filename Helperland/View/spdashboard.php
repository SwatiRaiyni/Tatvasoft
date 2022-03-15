<?php 
session_start();
if(isset($_SESSION['userdata'])){
$userdata=$_SESSION['userdata'];}
else{
        header('Location:'. 'http://localhost/TatvaSoft/Helperland/?controller=Contact&function=HomePage');
}
?>

<?php $base_url='http://localhost/TatvaSoft/Helperland/' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <title>Service Provider > Upcoming-services</title>
    <script src="./assets/js/5602f8a8c9.js" crossorigin="anonymous"></script>
    
    <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel=stylesheet>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin="" />
    <!-- <link href='./assets/js/main.css' rel='stylesheet' />
    <script src='./assets/js/main.js'></script> -->
    
    
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
<link rel='stylesheet' href="./assets/css/spdashboard.css">
   
</head>

<body>
   
<!--for navbar-->
<div class="wrapper">
<!-- header -->
<?php include('includes/cusp.php'); ?>

<?php
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$test = explode('=', $actual_link);
$last = end($test);
?>


<!--Modal for Accept Service Request-->

<div class="modal fade" id="ServiceAcceptModal" tabindex="-1" aria-labelledby="exampleModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title">Service Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" id="servicedetails">
                    <input type="hidden" name="service_id" id="service_id1" class="service_id">
                    <input type="hidden" name="zipcode1" id="zipcode" class="zipcode1">
                    <input type="hidden" name="mydate" id="mydate" class="mydate">
                    <input type="hidden" name="mystart_time" id="mystart_time" class="mystart_time">
                    <input type="hidden" name="myend_time" id="myend_time" class="myend_time">

                        <div class="row">
                            <div class="col-7 modal-section-body">
                                <div class="row">
                                    <p class="m-time"><span id="appenddate"> </span></p>
                                    <p><b>Duration : </b> <span id="duration"></span> </p>
                                </div>
                                <hr>
                                <div class="row">
                                    <p class="m-head"><b>Service Id : </b><span id="serviceid"> </span></p>
                                    <p><b>Extras : </b><span id="extra"></span></p>
                                    <p><b>Total Payment : </b> <i class="fa fa-eur singlefont"></i> <span class="singlefont" id="totalcost"></span></p>
                                </div>
                                <hr>
                                <div class="row">
                                    <p class="m-head"><b>Customer Name: <span id="custname"> </span> </b></p>
                                    <p><b>Service Address : </b> <span id="address"></span></p>
                                    <p><b>Distance : </b></p>
                                </div>
                                <hr>
                                <div class="row">
                                    <p class="m-head"><b>Comments : </b><span id="comments"></span></p>
                                    <p> <span id="haspets"></span></p>
                                </div>
                                <hr>
                                <div class="row modal-button">
                                    <div class="col">
                                    <button  type="button" class="modal-button-Accept" id="btn1" data-bs-dismiss="modal" aria-label="Close" onclick="accept();" ><i class="fa fa-check"></i>Accept</button>
                                    <button  type="button" class="modal-button-cancel" id="btn2" data-bs-dismiss="modal" aria-label="Close" onclick="cancel();"><i class="fa fa-times"></i> Cancel</button>
                                    <button  type="button" class="modal-button-complete" id="btn3" data-bs-dismiss="modal" aria-label="Close" onclick="complete();"><i class="fa fa-check"></i>Complete</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5 modal-section-map">
                            <div id="mappappend"></div>
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
        <h1 class="title-main">Welcome, <span class="title-main1"><?php echo $userdata['FirstName'];?></span></h1>
    </section>
  
    <section id="tab-section">
        <div class="div-main container-fluild" >
            <div class="div-tab">
                <div class="div-sub">
                <a href="#dashboard" id="dashboard1" class="active" onclick="dashboard();" role="button">Dashboard</a>
                <a href="#newservicerequests" id="newservice" class="" onclick="newservice();" role="button" >New Service Requests</a>
                <a href="#upcomingservice" id="upcoming" class="" onclick="upcoming();" role="button">Upcoming Service</a>
                <a href="#serviceschedule" id="schedule" class="" onclick="schedule();" role="button">Service Schedule</a>
                <a href="#servicehistory" id="history" class="" onclick="history();" role="button">Service History</a>
                <a href="#myratings" id="ratings" class="" onclick="ratings();" role="button">My Ratings</a>
                <a href="#bookcustomer" id="customer" class="" onclick="bookcustomer();" role="button">Block Customer</a>
                </div>
            </div>
<div class="content-section">
            <div class="divContent" id="mySettings"><!--my settings tab start-->
                <div id="menu">
                    <ul class="nav nav-tabs abc justify-content-center" id="tabination">
                        <li class="selected" onclick="details();" id="mdetail">My Details</li>
                        <li onclick="changepass();" id="cpass">Change Password</li>
                     </ul>
                </div>
                <div class="tab-content" id="myTabContent">
                    
                        <div  id="nav-home">
                        <form action="#" method="post" id="datauser">
                        <p><b> Account Status : </b> Active </p>
                        <div class="d-flex">
                        <h6><b>Basic Details</b></h6>
                        <div class="pa"><img src=""  class="imgall"> </div>
                        </div>
                        <hr class="w-75">
                        
                        <div class="row m-20">
                            <div class="col-sm-4 m-20">
                                <div class="form-group">
                                    <label>First name</label>
                                    <input type="text" class="form-control firstname" name="fname" id="fname">
                                </div>

                            </div>
                            <div class="col-sm-4 m-20">
                                <div class="form-group">
                                    <label>Last name</label>
                                    <input type="text" class="form-control lastname" name="lname" id="lname">
                                </div>
                            </div>
                            <div class="col-sm-4 m-20">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control email1" name="email" id="email" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row m-20">
                            <div class="col-sm-4 m-20">
                                <label>Mobile Number</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">+91</span>
                                    <input type="tel" max-width="10" min-width="10" name="mobile" id="mobile" class="form-control number" aria-label="Username" aria-describedby="basic-addon1">
                                  </div>
                            </div>
                            <div class="col-sm-4 m-20">
                                <div class="form-group">
                                    <label>Date of Birth</label>
                                    <input type="date" class="form-control dob1" name="dob" id="dob">
                                </div>
                            </div>
                            <div class="col-sm-4 m-20">
                                <div class="form-group">
                                    <label>Nationality</label>
                                    <select class="form-select " aria-label="Default select example" id="nationality" name="nationality">
                                        <option selected value="4">German</option>
                                        <option value="1">American</option>
                                        <option value="2">Indian</option>
                                        <option value="3">Canadian</option>
                                      </select>
                                </div>
                            </div>
                        </div>
                        <label> <b>Gender</b> </label>
                        <div class="row">
                        <div class="form-check col" style="margin-left:20px;">
                            <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="1">
                            <label class="form-check-label" for="exampleRadios1">
                              Male
                            </label>
                        </div>
                        <div class="form-check col">
                            <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="2">
                            <label class="form-check-label" for="exampleRadios2">
                              Female
                            </label>
                        </div>
                        <div class="form-check col">
                            <input class="form-check-input" type="radio" name="gender" id="exampleRadios3" value="3">
                            <label class="form-check-label" for="exampleRadios3">
                              Rather not to say
                            </label>
                        </div>
                        </div>
                        <label><b> Select Avatar </b></label>
                        
                        <div class="form-group">
                        <div id="custom-checkboxes" class="check">
                            <div class="radio">
                              <input type="radio" name="img" id="img1" class="htmlcheckbox" onclick="image1();" value="avatar-female.png">
                              <label for="img1"><img src="./assets/images/avatar-female.png" id="insideCabinetImg" ></label>
                            </div>  
    
                            <div class="radio">
                              <input type="radio"  id="img2" name="img" class="htmlcheckbox" onclick="image2();" value="avatar-car.png">
                              <label for="img2"><img src="./assets/images/avatar-car.png" id="insideFridgeImg" alt="" ></label>
                            </div>
    
                            <div class="radio">
                              <input type="radio"  name="img" id="img3" class="htmlcheckbox" onclick="image3();" value="avatar-hat.png">
                              <label for="img3"><img src="./assets/images/avatar-hat.png" id="insideOvenImg" alt=""></label>
                            </div>
    
                            <div class="radio">
                              <input type="radio" id="img4" name="img" class="htmlcheckbox" onclick="image4();" value="avatar-iron.png">
                              <label for="img4"><img src="./assets/images/avatar-iron.png" id="laundryImg" alt=""></label>
                            </div>
    
                            <div class="radio">
                              <input type="radio" id="img5" name="img" class="htmlcheckbox" onclick="image5();" value="avatar-male.png">
                              <label for="img5"><img src="./assets/images/avatar-male.png" id="interiorImg" alt=""></label>
                            </div>

                            <div class="radio">
                              <input type="radio" id="img6" name="img" class="htmlcheckbox" onclick="image6();" value="avatar-ship.png">
                              <label for="img6"><img src="./assets/images/avatar-ship.png" id="interiorImg" alt=""></label>
                            </div>
                          </div>
                            
                        </div>
                    <!-- </select> -->
                        
                        <h6><b>My Address</b></h6>
                        <hr>
                        <div class="row m-20">
                            <div class="col-sm-4 m-20">
                                <div class="form-group">
                                    <label>Street Name</label>
                                    <input type="text" name="sname" id="sname" class="form-control stname" placeholder="Koenigstrasse">
                                </div>

                            </div>
                            <div class="col-sm-4 m-20">
                                <div class="form-group">
                                    <label>House Number</label>
                                    <input type="text" name="hnumber" id="hnumber" class="form-control hno" placeholder="22">
                                </div>
                            </div>
                            <div class="col-sm-4 m-20">
                                <div class="form-group">
                                    <label>Postal code</label>
                                    <input type="text" name="postalcode" id="postalcode" class="form-control pcode" placeholder="993499">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" name="city" id="city" class="form-control city1" placeholder="Tambach-Dietharz">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="m-20">
                            <button type="button" name="editaddress" id="btnClick" class="Reschedule"> Save </button>
                        </div>
                    </form>
                    </div><!--First tab complete-->
                    
                    <div id="nav-contact">
                        <form action="#" method="post" id="forpassword">
                        
                        <div class="row">
                            <div class="col-sm-8 col-md-6 m-201">
                            <label>Old Password</label>
                            <input type="password" class="form-control" autocomplete="off" name="password1" id="password1" placeholder="old password ">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-8 col-md-6 m-201">
                            <label>New Password</label>
                            <input type="password" class="form-control" autocomplete="off" name="newpassword" id="newpassword" placeholder="new password">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-8 col-md-6 m-201">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" autocomplete="off" name="confirmpassword" id="confirmpassword" placeholder="Confirm password">
                            </div>
                        </div>
                        <div class="m-201">
                            <button type="button" class="Reschedule" onclick="changepassword();"> Save </button>
                        </div>
                        </form>
                    </div><!--Complete nav contact-->
                   
                  </div>
            </div>
            <!--End mysettings tab-->
            <!--dashboard strts-->
            <div class="divContent" id="dashboard">
            </div>
            <!--dashboard ends-->
            <!--New service request starts-->
            <div class="divContent" id="newservicerequests">
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
                        <tbody id="newservicerequestdata">
                            
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
                        <tbody id="upcomingservicedata">
                            
                        </tbody>
                    </table>
                </div>
            </div>
            <!--upcoming service ends-->

            <!--service schedule starts-->
            <div class="divContent" id="serviceschedule">
            <!-- <div id="calendar" style="height:1000px !important;"></div> -->
            </div>
            <!--service schedule ends-->
            <!--service history starts-->
            <div class="divContent" id="servicehistory">
                
                 <div class="row">
                    <div class="col">
                       
                        <button class="add-button1" onclick="html_table_to_excel('xlsx')" >Export</button>
                    </div>
                </div>
                <div>
                    <table  class="current-services" id="mytable" >
                        <thead>
                            <tr>
                                <th>Service ID <img src="./assets/images/form-1_2.png"></th>
                                <th>Service date <img src="./assets/images/form-1_2.png"></th>
                                <th>Cutomer details <img src="./assets/images/form-1_2.png"></th>
                            </tr>
                        </thead>
                        <tbody id="historydata">
                            
                        </tbody>
                    </table>
                </div>
               
            </div>
            <!--service history ends-->
            <!--Myratings section starts-->
            <div class="divContent" id="myratings">
                <div>
                <table  class="current-services" id="mytable4">
                    <thead id="thead">
                    </thead>
                    <tbody id="sprating">
                    
                    </tbody>
                </table>
                </div>
            </div>
            <!--My ratings ends-->
            <!--block customer start-->
            <div class="divContent" id="bookcustomer">
                <div class="blockcustmer">
                </div>
            </div>
            <!--block customer ends-->
           
           
            

</div>            
</div>
</section>


</main>
</div><!--ends wrapper class-->

<!--footer section-->

<?php include('includes/footerall.php'); ?>

<!--footer section end-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
  integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
  crossorigin=""></script>
    
    <script
      type="text/javascript"
      src="https://cdn.datatables.net/v/dt/dt-1.11.3/r-2.2.9/rg-1.1.4/datatables.min.js"
    ></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="./assets/js/spdashboard.js"></script>

    <script>
   $( document ).ready(function() {

var test = '<?= $last ?>';

if(test == 'dashboard'){
    dashboard();
}else if(test == 'mysettings'){
    mysettings();
}else if(test == 'newservicerequests'){
    newservice();
}else if(test == 'upcomingservice'){
    upcoming();
}else if(test == 'serviceschedule' ){
    schedule();
}else if(test == 'servicehistory'){
    history();
}else if(test == 'myratings'){
    ratings();
}else if(test == 'blockcustomer' ){
    bookcustomer();
}
});
function servicedetails(obj){
    var id = obj.attr('data-id');
    var date = obj.attr('data-date');
    var stime = obj.attr('data-time');
    var etime = obj.attr('data-etime');
    var fname = obj.attr('data-fname');
    var lname = obj.attr('data-lname');
    var zipcode = obj.attr('data-zcode');
    $('.zipcode1').val(zipcode);
    $("#custname").text(fname + ' ' + lname);
    $("#appenddate").text(date + ' ' +stime + '-' + etime);
    $('.service_id').val(id);
    getservicedetails();

    $('.mydate').val(date);
    $('.mystart_time').val(stime);
    $('.myend_time').val(etime);

    $("#ServiceAcceptModal").modal('show');
}
</script>  
</body>

</html>