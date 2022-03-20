<?php 
session_start();
if(isset($_SESSION['userdata'])){
$userdata=$_SESSION['userdata'];
}else{
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
    <title>Admin</title>
    <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel=stylesheet>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
    <link rel='stylesheet' href="./assets/css/admin.css">
</head>

<body>

<div class="adminportal">
<section  class="d-block">
        <nav class="navbar navbar-expand-lg">
            <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="modal"
            data-bs-target="#navbartoggle" data-bs-dismiss="modal">
            <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">helperland</a>
           <ul class="navbar-nav">
                <li class="nav-item" >
                    <a class="nav-link" href="#"><img src="./assets/images/admin_name.png" class="admin-user"><?= $userdata['FirstName'] ?> <?= $userdata['LastName']; ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $base_url.'?controller=Contact&function=logout'?>"><img src="./assets/images/logout.png"></a>
                </li>
            </ul>
        </nav>

        <section id="tab-section">
            <div class="div-main container-fluild">
                <div class="div-tab">
                    <a href="#servicerequest" id="request" class="active" onclick="servicerequest();" role="button">Service Requests</a>
                    <a href="#usermanagement" id="usermange" class="" onclick="usermanage();" role="button">User Mangement</a>
                </div>
                <div class="content-section">
                    <div id="servicerequest">
                        <div class="usermangement" >
                            <div class="u1"> <p>Service Requests</p></div> 
                        </div>
                       
                        <div class="search-section1">
                                <form action="#" id="forreset1">
                                    <ul class="control-list">
                                        <li>
                                            <input type="text" class="form-control id_sel" placeholder="ServiceId">
                                        </li>
                                        <li>
                                            <input type="text" class="form-control zip_sel" placeholder="postalcode">
                                        </li>
                                        <li>
                                            <input type="text" class="form-control w240 email1_sel" placeholder="Email">
                                        </li>
                                        <li>
                                            <select class="form-select w220 cust_sel" aria-label="Default select example">
                                            <option value="">Customer</option>
                                            </select>
                                        </li>
                                        <li>
                                            <select class="form-select w152 sp_sel" aria-label="Default select example">
                                            <option value="">ServiceProvider</option>
                                            </select>
                                        </li>
                                        <li>
                                            <select class="form-select w120 status_sel" aria-label="Default select example">
                                                <option value="">Status</option>
                                                <option value="1">Pending</option>
                                                <option value="2">complete</option>
                                                <option value="3">cancel</option>
                                                <option value="4">Assigned</option>
                                            </select>
                                        </li>
                                        <li>
                                            <div class="checkbox inline">
                                                <input type="checkbox" value="0" class="check_sel" onclick="$(this).val(this.checked ? 1 : 0)">Has issue
                                            </div>
                                        </li>
                                        <li>
                                            <div class="input-wrapper">
                                                <img src="./assets/images/for.png">
                                                <input type="text" class="form-control w140 fromd_sel" placeholder="     From Date">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="input-wrapper">
                                                <img src="./assets/images/for.png">
                                                <input type="text" class="form-control w140 tod_sel" placeholder="     To Date">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="buttons">
                                                <button type="button" class="search"  onclick="searchservicerequest();">Search</button>
                                                <button type="button" class="clear" onclick="servicerequestdata();">Clear</button>
                                            </div>
                                        </li>
                                    </ul>
                                </form>
                        </div>
                        <div class="table-section">
                            <table class="current-services" id="mytable11" >
                                <thead>
                                    <tr>
                                        <th>Service Id</th>
                                        <th>Service Date</th>
                                        <th>Customer details</th>
                                        <th>Service Provider</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="servicerequestdata">
                                    
                                </tbody>
                            </table>
                        </div>
                        <div class="footer">
                            ©2022 Helperland. All rights reserved.
                        </div>
                        
                    </div>
                    <div id="usermanagement">
                        <div class="usermangement" >
                          <div class="u1"> <p>User Management</p></div> 
                          <!-- <div>  <button class="buttonright"><span class="fa fa-plus-circle"></span>Add New User</button></div> -->
                        </div>

                        <div class="search-section1">
                            <form action="#" id="forreset11">
                                <ul class="control-list">
                                    <li>
                                        <select class="form-select w205 user_sel" aria-label="Default select example">
                                            <option value="">User name</option>
                                        </select> 
                                    </li>
                                    <li>
                                        <select class="form-select w205 type_sel" aria-label="Default select example">
                                            <option value="">User Type</option>
                                            <option value="1">Customer</option>
                                            <option value="2">Sp</option>
                                            
                                        </select>
                                    </li>
                                    <li>
                                        <div class="input-group w219">
                                            <span class="input-group-text" id="basic-addon1">+49</span>
                                            <input type="text" class="form-control mol_sel" placeholder="Phone Number" aria-label="Username" aria-describedby="basic-addon1">
                                          </div>
                                    </li>
                                    <li>
                                        <input type="text" class="form-control w140 pos_sel" placeholder="postalcode">
                                    </li>
                                    <li>
                                        <input type="text" class="form-control w240 email_sel" placeholder="Email">
                                    </li>
                                    <li>
                                        <div class="input-wrapper">
                                            <img src="./assets/images/for.png">
                                            <input type="text" class="form-control w140 from_sel"  placeholder="     From Date">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="input-wrapper">
                                            <img src="./assets/images/for.png">
                                            <input type="text" class="form-control w140 to_sel" placeholder="     To Date">
                                        </div>
                                    </li>
                                    <li>
                                    <div class="buttons">
                                        <button type="button"  class="search" onclick="search();">Search</button>
                                        <button type="button" class="clear" onclick="usermanagementdata();">Clear</button>
                                    </div>
                                    </li>
                                </ul>
                                
                            </form>
                        </div>
                            <div>  
                            <button class="buttonright2" onclick="html_table_to_excel('xlsx');" >Export</button>
                                
                          </div>

                        <div class="table-section">
                            <table class="table" id="tblCustomers">
                                <thead>
                                    <tr>
                                        <th>User Name</th>
                                        <th>Date of Registration</th>
                                        <th>User Type</th>
                                        <th>Phone</th>
                                        <th>Postal Code</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="usermanagment">
                                </tbody>
                            </table>
                        </div>
                        <div class="footer">
                            ©2022 Helperland. All rights reserved.
                        </div>
                    </div>
                   
                </div>
            </div>
        </section>
</section>
<!--Modal for navbar toggle-->
        <div class="modal fade navbar-tmodel" id="navbartoggle" tabindex="-1"
        aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-center">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="staticBackdropLabel">Welcome, <br><b>Admin</b> </h4>
                </div>
                <div class="modal-body">
                    <a href="#servicerequest" class="" onclick="servicerequest();" role="button">Service Requests</a>
                    <a href="#usermanagement" class="active" onclick="usermanage()" role="button">User Mangement</a>
                </div>
                <div class="modal-footer">
                    <a href="#">Prices & Services</a>
                    <a href="#">Warranty</a>
                    <a href="#">Blog</a>
                    <a href="#">Contact</a>
                </div>
            </div>
        </div>
    </div>
    <!--End Model-->
<!-- Model For Edit and Reschedule Service -->
<div class="modal fade" id="editServiceRequest" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
             <div class="modal-header">
                <h4 class="modal-title" id="staticBackdropLabel">Edit Service Request</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#">
                    <input type="hidden" id="id" class="id">
                    <div class="row">
                        <div  class="col-sm-6">
                           <div class="form-group">
                               <label>Date</label>
                               <input type="date" name="date" class="form-control1 w200 date" id="getdate1">
                           </div>
                        </div>
                        <div  class="col-sm-6">
                            <div class="form-group">
                                <label>Time</label>
                                <input type="time" name="time1" id="time1" class="form-control1 w200 time">
                            </div>
                        </div>
                    </div>
                    <h5>Service Address</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Street name</label>
                                <input type="text" name="sname" id="sname1" class="form-control1 w200 sname1">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>House number</label>
                                <input type="text" name="hnumber" id="hnumber1" class="form-control1 w200 hnumber1">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="postalcode">Postal Code</label>
                                <input type="text" name="pcode" id="pcode1" class="form-control1 w205 pcode1">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="city">City</label>
                                <select name="city" id="city" class="form-control1 w205 city1">
                                    <option value="Ahmedabad">Ahmedabad</option>
                                    <option value="surat">Surat</option>
                                </select>
                            </div>
                        </div>
                    </div>
                     <h5>Invoice Address</h5>
                     <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Street name</label>
                                <input type="text" class="form-control1 w200">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>House number</label>
                                <input type="text" class="form-control1 w200">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Postal Code</label>
                                <input type="text" class="form-control1 w205">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="city">City</label>
                                <select name="" id="" class="form-control1 w205">
                                    <option value="Ahmedabad">Ahmedabad</option>
                                    <option value="Surat">Surat</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <h5>Why do you want to rechedule service requests?</h5>
                    <div class="row">
                        <div class="col">
                            <textarea rows="5" class="form-control1 w400" placeholder="why do you want to rechedule service requests?"></textarea>
                        </div>
                    </div>
                    <h5>Call Center EMP notes</h5>
                    <div class="row">
                        <div class="col">
                            <textarea rows="5" class="form-control1 w400" placeholder="Enter Notes"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="button" data-bs-dismiss="modal" aria-label="Close" class="btn btn-modal form-control1 w401" onclick="editaddress();">Update</button>
                        </div>
                    </div>
                </form>
                
            </div> 
            
        </div>
    </div>
</div>
<!-- End Model -->

</div>
</body>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"></script> -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script
      type="text/javascript"
      src="https://cdn.datatables.net/v/dt/dt-1.11.3/r-2.2.9/rg-1.1.4/datatables.min.js"
    ></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="./assets/js/admin.js"></script>
</body>

<script>
    function getaddress(obj){

        var id = obj.attr('data-id');
        var addressline1 = obj.attr('data-add1');
        var addressline2 = obj.attr('data-add2');
        var pcode = obj.attr('data-pcode');
        var city = obj.attr('data-city');
        var sdate = obj.attr('data-sdate');
        var date = sdate.split('/')[0];
        var month = sdate.split('/')[1];
        var year = sdate.split('/')[2];
        var newdate = year +'-'+ (month<9 ? '0'+month : month) +'-'+ (date<9 ? '0'+date : date);
        var stime = obj.attr('data-stime'); 
        
        $('.id').val(id);
        $('.hnumber1').val(addressline1);
        $('.sname1').val(addressline2);
        $('.pcode1').val(pcode);
        $('.city1').val(city);
        $('#getdate1').val(newdate);
        $('.time').val(stime);
        $("#editServiceRequest").modal('show');
    
    }
</script>


</html>