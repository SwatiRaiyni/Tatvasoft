<?php
session_start();ob_start(); 
class RegisterController{
    public $base_url = 'http://localhost/TatvaSoft/Helperland/';
    function __construct()
    {
        include('Model/RegisterModel.php');
        $this->model = new RegisterModel();
      
    }
    public function Registration()
    {
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $firstname = $_POST['firstname'];
                      $lastname=  $_POST['lastname']; 
                      $email = $_POST['email'];
                      $number = $_POST['number'];
                       $password = $_POST['password'];
                       $confirmpassword =  $_POST['confirmpassword'];
                       $userType =$_POST['userType'] ;
                         $array = [
                            'firstname' =>$firstname,
                            'lastname' =>$lastname,
                            'email'=> $email,
                            'number'=>$number,
                             'password' => $password,
                             'confirmpassword' => $confirmpassword,
                             'userType' => $userType
                           ];
               
        
                if($array['email'] != '' || $array['number'] != ''){
                  
                    $result = $this->model->validation($array);
                    if(count($result)>0){
                      if($array['userType']==1){
                        $_SESSION['status'] = "Email is already available";
                        header('Location:'.  $this->base_url.'?controller=Contact&function=registercustomer');
                      }
                      else{
                        $_SESSION['status2'] = "Email is already available";
                        header('Location:'.  $this->base_url.'?controller=Contact&function=spr');
                      }
                    }
                    else  if($array['password'] != $array['confirmpassword']){
                            if($array['userType']==1){
                                 $_SESSION['status'] = "password and confirm password is not same";
                                header('Location:'.  $this->base_url.'?controller=Contact&function=registercustomer');
                              }
                              else{
                                $_SESSION['status2'] = "password and confirm password is not same";
                                header('Location:'.  $this->base_url.'?controller=Contact&function=spr');
                              } 
                    }
                    else if(!preg_match("/^[a-zA-Z-' ]*$/",$array['firstname'])){
                          if($array['userType']==1){
                             $_SESSION['status'] = "Only letters and white space allowed in firstname";
                            header('Location:'.  $this->base_url.'?controller=Contact&function=registercustomer');
                          }
                          else{
                            $_SESSION['status2'] ="Only letters and white space allowed in firstname";
                            header('Location:'.  $this->base_url.'?controller=Contact&function=spr');
                           } 
                    }
                    else if(!filter_var($array['email'], FILTER_VALIDATE_EMAIL)){
                          if($array['userType']==1){
                            $_SESSION['status'] = "Invalid email format";
                            header('Location:'.  $this->base_url.'?controller=Contact&function=registercustomer');
                          }
                          else{
                             $_SESSION['status2'] ="Invalid email format";
                              header('Location:'.  $this->base_url.'?controller=Contact&function=spr');
                          } 
                    }
                    else if(!preg_match('/^[0-9]{10}+$/', $array['number'])){
                         if($array['userType']==1){
                        $_SESSION['status'] = "Invalid mobile number";
                        header('Location:'.  $this->base_url.'?controller=Contact&function=registercustomer');
                        }
                        else{
                        $_SESSION['status2'] ="Invalid mobile number";
                        header('Location:'.  $this->base_url.'?controller=Contact&function=spr');
                        } 
                    }
                      else if(!preg_match('@[A-Z]@', $array['password']) || !preg_match('@[a-z]@', $array['password']) || !preg_match('@[0-9]@',$array['password']) || !preg_match('@[^\w]@', $array['password']) || strlen($array['password']) < 8) {
                          if($array['userType']==1){
                            $_SESSION['status'] = "Password must contain atleast 8 characters,one uppercase,one number,one special characters";
                            header('Location:'.  $this->base_url.'?controller=Contact&function=registercustomer');
                          }
                          else{
                            $_SESSION['status2'] ="Password must contain atleast 8 characters,one uppercase,one number,one special characters";
                            header('Location:'.  $this->base_url.'?controller=Contact&function=spr');
                          } 
                      }
                    else{//all done 
                      
                        $result = $this->model->Registration($array);
                       // echo "<pre>"; print_r($result); die();
                       if($array['userType']==1){
                        $_SESSION['status1'] = "You have Register SuccessFully Pls Logged in";
                        header('Location:'.  $this->base_url.'?controller=Contact&function=registercustomer');
                        }
                        else{
                        $_SESSION['status3'] ="You have Register SuccessFully Pls Logged in";
                        header('Location:'.  $this->base_url.'?controller=Contact&function=spr');
                        } 
                    }
                    
                }
             
         
    }
  }//end registraion function
    public function login(){
       if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $array = [
              'email'=> $email,
              'password' => $password
            ];
            $result = $this->model->login($array);
            if(count($result)>0){ 
                if($result['UserTypeId'] == 1){
                    $_SESSION['name']=$result['FirstName'];
                    header('Location:'.  $this->base_url.'?controller=Contact&function=customerdashboard');
                }
                elseif($result['UserTypeId'] == 2){
                     $_SESSION['name']=$result['FirstName'];
                    header('Location:'.  $this->base_url.'?controller=Contact&function=spdashboard');
                }
            }
            else{
              
              $_SESSION['status2'] = "Pls register";
        
              header('Location:'.  $this->base_url);
            }
       }
    }//end login function
    public function forgotpassword(){
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
      
      $array = [
        'email'=> $email
      ];
      $result = $this->model->forgotpassword($array);
    
      if(count($result)>0){ 
       //echo '<pre>'; print_r($result['userid']); die;
       $token = $result['UserId'];
        $subject = "Password Reset";
        $body = "Hello, ".$result['FirstName']." Click here to reset your password http://localhost:80/TatvaSoft/Helperland/resetpassword.php?token=$token";
        $headers = "From: 180320116044.it.swati@gmail.com";
        if(mail($email,$subject,$body,$headers)){
          echo"Email successfully";
        }
        else{
          echo "Fail";
        }
      }
      else{
        echo "No email Found";
      }
      }
    }//end forgot password function
    public function getpassword(){
      if (isset($_POST['submit'])) {//echo '<pre>'; print_r($_POST); die;
      // if(isset($_POST['token'])){
         
            $token=$_POST['token'];
            $password = $_POST['password'];
            $confirmpassword = $_POST['confirmpassword'];
            if($password == $confirmpassword){
            $array = [
              'token' => $token,
              'password'=> $password,
              'confirmpassword' => $confirmpassword
            ]; //echo '<pre>'; print_r($_GET['token']); die;
          
            $result = $this->model->getpassword($array);
          
            if($result){
              
              $_SESSION['status1'] = "updated success";
              header('Location:'.  $this->base_url);
            }
            else{
              echo "fail";
            }}
     // echo '<pre>'; print_r($result); die;
    // }
      }
  }//end getpassword function
}






