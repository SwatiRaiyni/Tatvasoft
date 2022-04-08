<!--Modal for login--> 

<?php $base_url='http://localhost/TatvaSoft/Helperland/' ?>
<div class="modal fade" id="ModalFormlogin" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
              <!-- Login Form -->
              <form  id="form">
                <input type="hidden" name="userType" >
                <div class="modal-header">
                  <h5 class="modal-title">Login to your account</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div class="signup-msg"></div>
               
                  <div class="mb-3">
                    <input type="text" name="email" value="<?php if(isset($_COOKIE['emailcookie'])){ echo $_COOKIE['emailcookie']; } ?>" class="form-control" id="Username" placeholder="Email" required autofocus/>
                  </div>
                  <div class="mb-3">
                    <input type="password" name="password" value="<?php if(isset($_COOKIE['passwordcookie'])){ echo $_COOKIE['passwordcookie']; } ?>" class="form-control" id="Password" placeholder=" Password" required/>
                  </div>
                  <div class="mb-3">
                      <input class="form-check-input" type="checkbox" name="rememberme" id="remember"/>
                      <label class="form-check-label" for="remember">Remember Me</label>
                  </div>
                </div>
                <div class=" text-center">
                    <button type="button" id="clickBtn" class="blue-btn1">Login</a>
                </div>
               <center style="margin-top: 20px;" > <a class="float-center" role="button" data-bs-target="#forgotpassword" data-bs-toggle="modal" data-bs-dismiss="modal">Forgot Password?</a></center>
                <p class="text-center" style="margin-top: 20px;">Don't have an account? <a href="<?= $base_url.'?controller=Contact&function=registercustomer'?>">Create an account</a></p> 
            </form>
          </div>
        </div>
</div>
<!--end-->
<!--Modal for forgot password-->
<div class="modal fade" id="forgotpassword" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel2">Forgot Password</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="<?= $base_url.'?controller=Register&function=forgotpassword'?>" method="post">
               
             
                <div class="mb-3 form-group icon-textbox">
                    <input type="email" name="email" class="form-control" placeholder="Email" required/>
                </div>
                <div class=" text-center">
                <button class="blue-btn1 mb-3" type="submit">Send</button>
            </div>
                <div class="text-center mb-2"><a href="#" data-bs-toggle="modal"
                        data-bs-target="#ModalFormlogin" data-bs-dismiss="modal">Login Now</a></div>
            </form>
        </div>
    </div>
</div>
</div>
<!--Modal End-->
<script>


   </script>



 
