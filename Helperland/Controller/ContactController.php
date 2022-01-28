<?php
class ContactController
{
    function __construct()
    {
        include('Model/ContactModel.php');
        $this->model = new ContactModel();
        
        // session_start();
        // $_SESSION['error'] = '';
    }
    public function HomePage()
    {
        // echo "in";
        // exit;
        include("./View/homepage.php");
    }
    public function ContactUs()
    {
        // echo "inside";
        // echo "<pre>";
        // print_r ($_POST);
        // exit;
        if (isset($_POST)) {
            $base_url = "http://localhost/Helperland/contact";
            $mobile =  $_POST['number'];
            $email = $_POST['email'];
            $subject = $_POST['sub'];
             $message = $_POST['comment'];
            $name = $_POST['firstname'] . " " . $_POST['lastname'];
            $array = [
                'name' => $name,
                'email'=> $email,
                'mobile' => $mobile,
                 'sub' => $subject,
                 'msg'=> $message,
            ];
            $result = $this->model->Contactus($array);
            $_SESSION['firstname'] = $results[0];
            header('Location:' . $base_url);
            
        }
    }
    
    
}