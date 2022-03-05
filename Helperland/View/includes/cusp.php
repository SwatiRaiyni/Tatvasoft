<nav id="headerall"  class="navbar navbar-expand-lg ">
            
      <a href="<?= $base_url.'?controller=Contact&function=HomePage'?>"><img src="./assets/images/site-logo-large.png" id="logo-faq"  alt=""></a>
      <button style="color:white; margin-right: 15px;" class="navbar-toggler" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalnavbartoggle" data-bs-dismiss="modal"> 
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto" id="faq-nav">
        <li class="nav-item">
          <a class="nav-link rounded-pill nav-padding greenlink" aria-current="page" href="<?= $base_url.'?controller=Book&function=BookNow'?>">Book now</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-padding rounded-pill" href="<?= $base_url.'?controller=Contact&function=price'?>">Price & Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-padding" href="#">Warranty</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-padding" href="#">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-padding" href="<?= $base_url.'?controller=Contact&function=ContactUs'?>">Contact</a>
        </li>
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
            <?php   if(isset($_SESSION['userdata'])){
                if($_SESSION['userdata']['UserTypeId']==1){?>
            <li><a class="dropdown-item active"  href="http://localhost/TatvaSoft/Helperland/?controller=Contact&function=customerdashboard&&id=dashboard"   onclick="dashboard();" role="button">My Dashboard</a></li>
            <li><a class="dropdown-item" href="http://localhost/TatvaSoft/Helperland/?controller=Contact&function=customerdashboard&&id=mysettings" id="mysettings"  onclick="mysettings();" role="button"> My Settings</a></li>
            <?php } elseif($_SESSION['userdata']['UserTypeId']==2){?>
              <li><a class="dropdown-item active"  href="http://localhost/TatvaSoft/Helperland/?controller=Contact&function=spdashboard&&id=dashboard"   onclick="dashboard();" role="button">My Dashboard</a></li>
            <li><a class="dropdown-item" href="http://localhost/TatvaSoft/Helperland/?controller=Contact&function=spdashboard&&id=mysettings" id="mysettings"  onclick="mysettings();" role="button"> My Settings</a></li>
            <?php } }?>
            <li><a class="dropdown-item" href="<?= $base_url.'?controller=Contact&function=logout'?>">Log out</a></li>
         </ul>
       </li>
     
    </ul>
  </div>
</nav>




<div class="modal fade navbar-tmodel" id="exampleModalnavbartoggle" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    
        <div class="modal-dialog modal-dialog-center">
            <div class="modal-content">
              <div class="modal-header">
               
                    <h4 class="modal-title" id="staticBackdropLabel">Welcome, <br><b><?php echo $userdata['FirstName'];?></b> </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <?php   if(isset($_SESSION['userdata'])){
                if($_SESSION['userdata']['UserTypeId']==2){?>
                <div class="modal-body tab">
                    <a href="http://localhost/TatvaSoft/Helperland/?controller=Contact&function=spdashboard&&id=dashboard"  class="" onclick="dashboard();" role="button">Dashboard</a>
                    <a href="http://localhost/TatvaSoft/Helperland/?controller=Contact&function=spdashboard&&id=newservicerequests" class="" onclick="newservice();" role="button">New Service Requests</a>
                    <a href="http://localhost/TatvaSoft/Helperland/?controller=Contact&function=spdashboard&&id=upcomingservice"   class="active" onclick="upcoming();" role="button">Upcoming Service</a>
                    <a href="http://localhost/TatvaSoft/Helperland/?controller=Contact&function=spdashboard&&id=serviceschedule" class="" onclick="schedule();" role="button">Service Schedule</a>
                    <a href="http://localhost/TatvaSoft/Helperland/?controller=Contact&function=spdashboard&&id=servicehistory"  class="" onclick="history();" role="button">Service History</a>
                    <a href="http://localhost/TatvaSoft/Helperland/?controller=Contact&function=spdashboard&&id=myratings"  class="" onclick="ratings();" role="button">My Ratings</a>
                    <a href="http://localhost/TatvaSoft/Helperland/?controller=Contact&function=spdashboard&&id=blockcustomer"   class="" onclick="bookcustomer();" role="button">Block Customer</a>
                    <a href="http://localhost/TatvaSoft/Helperland/?controller=Contact&function=spdashboard&&id=mysettings" id="mysettings"  onclick="mysettings();" role="button">My Settings</a>
                    <a href="<?= $base_url.'?controller=Contact&function=logout'?>">Logout</a>
                </div>
                <?php } elseif($_SESSION['userdata']['UserTypeId']==1){?>
                <div class="modal-body tab">
                    <a href="http://localhost/TatvaSoft/Helperland/?controller=Contact&function=customerdashboard&&id=dashboard" class="" onclick="dashboard();" role="button">Dashboard</a>
                    <a href="http://localhost/TatvaSoft/Helperland/?controller=Contact&function=customerdashboard&&id=servicehistory"  class="active" onclick="history();" role="button">Service History</a>
                    <a href="http://localhost/TatvaSoft/Helperland/?controller=Contact&function=customerdashboard&&id=serviceschedule"  class="" onclick="schedule();" role="button">Service Schedule</a>
                    <a href="http://localhost/TatvaSoft/Helperland/?controller=Contact&function=customerdashboard&&id=favouriteprones" class="" onclick="favprons();" role="button">Favourite Prons</a>
                    <a href="http://localhost/TatvaSoft/Helperland/?controller=Contact&function=customerdashboard&&id=invoice" class="" onclick="invoice()" role="button">Invoices</a>
                    <a href="http://localhost/TatvaSoft/Helperland/?controller=Contact&function=customerdashboard&&id=notiftcation" class="" onclick="notification();" role="button">Notifications</a>
                    <a href="http://localhost/TatvaSoft/Helperland/?controller=Contact&function=customerdashboard&&id=mysettings" id="mysettings"  onclick="mysettings();" role="button">My Settings</a>
                    <a href="<?= $base_url.'?controller=Contact&function=logout'?>">Logout</a>
                </div>
                <?php  }}?>
               
                <div class="modal-footer tab">
                    <a href="<?= $base_url.'?controller=Book&function=BookNow'?>">Book Now </a>
                    <a href="<?= $base_url.'?controller=Contact&function=price'?>">Prices & Services</a>
                    <a href="#">Warranty</a>
                    <a href="#">Blog</a>
                    <a href="<?= $base_url.'?controller=Contact&function=ContactUs'?>">Contact</a>
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

