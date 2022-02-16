<!-- header -->
<?php 

if(isset($_SESSION['userdata'])){
$userdata=$_SESSION['userdata'];}
?>
<?php $base_url='http://localhost/TatvaSoft/Helperland/' ?>



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
                                        <a class="nav-link border-btn" href="<?= $base_url.'?controller=Book&function=BookNow'?>" title="Book a Cleaner">Book now</a>
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

                                   <?php if(!isset($_SESSION['userdata'])){ ?>
        <li class="nav-item">
        <a class="nav-link border-btn" id="homelogin" data-bs-toggle="modal" data-bs-target="#ModalFormlogin" href="<?= $base_url.'?controller=Contact&function=HomePage&loginmodal=true'?>">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link border-btn" href="<?= $base_url.'?controller=Contact&function=spr'?>">Become a Helper</a>
      </li>
      <?php }else{ ?>
         <li class="nav-item line100">
         <a class="nav-link notification">
             <img src="./assets/images/icon-notification.png">
             <span class="badge">2</span>
         </a>
     </li>
     <li class="dropdown nav-item drop-strat">
         <a class=" dropdown-toggle  nav-link" role="button"  id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false" >
             <img src="./assets/images/personforma-1.png" alt="">
      </a>
         <ul class="dropdown-menu dropdown-menu-dark dpm" aria-labelledby="dropdownMenuButton2">
             <li class="dropdown-item">Welcome ,<br> <?php echo $userdata['FirstName'];?></li>
             <li><hr class="dropdown-divider"></li>
           <li><a class="dropdown-item active"  href="#dashboard"   onclick="dashboard();" role="button">My Dashboard</a></li>
           <li><a class="dropdown-item" href="#mySettings" id="mysettings"  onclick="mysettings();" role="button"> My Settings</a></li>
           <li><a class="dropdown-item" href="<?= $base_url.'?controller=Contact&function=logout'?>">Log out</a></li>
         </ul>
       
     </li>
     <?php }?>
      
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

                <?php  if(isset($_SESSION['userdata'])){ ?>
                    <h4 class="modal-title" id="staticBackdropLabel">Welcome, <br><b><?php echo $userdata['FirstName'];?></b> </h4><?php } ?>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>
             <?php   if(isset($_SESSION['userdata'])){
                if($_SESSION['userdata']['UserTypeId']==2){?>
                <div class="modal-body tab">
                    <a href="#dashboard"  class="" onclick="dashboard();" role="button">Dashboard</a>
                    <a href="#newservicerequests" class="" onclick="newservice();" role="button">New Service Requests</a>
                    <a href="#upcomingservice"   class="active" onclick="upcoming();" role="button">Upcoming Service</a>
                    <a href="#serviceschedule" class="" onclick="schedule();" role="button">Service Schedule</a>
                    <a href="#servicehistory"  class="" onclick="history();" role="button">Service History</a>
                    <a href="#myratings"  class="" onclick="ratings();" role="button">My Ratings</a>
                    <a href="#blockcustomer"   class="" onclick="bookcustomer();" role="button">Block Customer</a>
                    
                    <a href="#mySettings" id="mysettings"  onclick="mysettings();" role="button">My Settings</a>
                    <a href="<?= $base_url.'?controller=Contact&function=logout'?>">Logout</a>
                </div><?php } elseif($_SESSION['userdata']['UserTypeId']==1){?>
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
              <?php  }}?>
                <div class="modal-footer tab">
                    <a href="<?= $base_url.'?controller=Book&function=BookNow'?>">Book now </a>
                    <a href="<?= $base_url.'?controller=Contact&function=price'?>">Prices & Services</a>
                    <a href="#">Warranty</a>
                    <a href="#">Blog</a>
                    <a href="<?= $base_url.'?controller=Contact&function=ContactUs'?>">Contact</a>
                    <?php if(!isset($_SESSION['userdata'])){ ?>
                      <a class="nav-link  nav-padding " data-bs-toggle="modal" data-bs-target="#ModalFormlogin" href="<?= $base_url.'?controller=Contact&function=HomePage'?>">Login</a>
                      <a class="nav-link  nav-padding " href="<?= $base_url.'?controller=Contact&function=spr'?>">Become a Helper</a>

                     <?php } ?>
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



