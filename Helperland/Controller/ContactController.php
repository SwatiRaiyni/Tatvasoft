<?php

class ContactController
{  
    function __construct()
    {   
        include('Model/ContactModel.php');
        $this->model = new ContactModel();
        
    }
    public function HomePage(){
        include("./View/homepage.php");

    }
    public function price(){
    
        include("./View/price.php");
    }
    public function faq(){
        include("./View/faq.php");
    }
    public function about(){
        include("./View/about.php");
    }
    public function registercustomer(){
        include("./View/registrationuser.php");
    }
    public function spr(){
        include("./View/ServiceProviderRegister.php");
    }
    public function customerdashboard(){
        include("./View/customerdashboard.php");
    }
    public function spdashboard(){
       include("./View/spdashboard.php");
    }
    public function resetpassword(){
        include("./View/resetpassword.php");
    }
    public function conta(){
        include("./View/contact.php");
    }

    public function admin(){
        include("./View/admin.php");
    }
    
    public function logout()
    {   session_start();
        unset($_SESSION['userdata']);
        $_SESSION['isloggedin'] = 'FALSE';
       // session_destroy();
        
         header('Location: http://localhost/TatvaSoft/Helperland/');
        
    }
    public function ContactUs()
    {  //session_destroy();
        session_start();
       
        if($_SERVER["REQUEST_METHOD"] == "POST") {
             $base_url = "http://localhost/TatvaSoft/Helperland/contact";
             $mobile =  $_POST['number'];
             $email = $_POST['email'];
             $subject = $_POST['sub'];
             $message = $_POST['comment'];
             $filename= $_FILES["file"]["name"];
             $path = './assets/images/forcontact/'.$filename;
             move_uploaded_file($_FILES['file']['tmp_name'], $path);
             $name = $_POST['firstname'] . " " . $_POST['lastname'];
             $array = [
                 'name' => $name,
                 'email'=> $email,
                 'msg'=> $message,
                 'mobile' => $mobile,
                    'sub' => $subject,
                  'filename' =>$filename
                  
             ];
            
              if(!preg_match('/^[0-9]{10}+$/', $array['mobile'])){
                $_SESSION['msg1'] = "invalid moblie";
                header('Location:'.  $this->base_url.'?controller=Contact&function=ContactUs');
              }
                else{
                    $result = $this->model->Contactus($array);
                    header('Location:'.  $this->base_url.'?controller=Contact&function=ContactUs');
                }
          
           
        }
        include("./View/contact.php");
    }
    
    
}