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

    public function ContactUs()
    {
        // echo "inside";
        // echo "<pre>";
        // print_r ($_POST);
        // exit;
        if (isset($_POST)) {
             $base_url = "http://localhost/TatvaSoft/Helperland/contact";
             $mobile =  $_POST['number'];
             $email = $_POST['email'];
             $subject = $_POST['sub'];
             $message = $_POST['comment'];
            
             $name = $_POST['firstname'] . " " . $_POST['lastname'];
             $array = [
                 'name' => $name,
                 'email'=> $email,
                 'msg'=> $message,
                 'mobile' => $mobile,
                  'sub' => $subject
                  
             ];
             $result = $this->model->Contactus($array);
             $_SESSION['firstname'] = $results[0];
             header('Location:' . $base_url);
           
        }
        include("./View/contact.php");
    }
    
    
}