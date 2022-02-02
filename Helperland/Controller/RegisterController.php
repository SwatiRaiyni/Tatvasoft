<?php

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
           //  echo '<pre>'; print_r($_POST); //die();
              $array = [
                 'firstname' =>$_POST['firstname'],
                 'lastname' => $_POST['lastname'],
                 'email'=> $_POST['email'],
                 'number'=>$_POST['number'],
                  'password' => $_POST['password'],
                  'confirmpassword' =>  $_POST['confirmpassword'],
                  'userType' =>$_POST['userType']
                ];
                if($array['email'] != '' || $array['number'] != ''){
                  
                    $result = $this->model->validation($array);
                    if(count($result)>0){
                      if($array['userType']=='customer'){
                        header('Location:'.  $this->base_url.'?controller=Contact&function=registercustomer&parameter=Email is already available..Pls Enter another Email');
                      }
                      else{
                        header('Location:'.  $this->base_url.'?controller=Contact&function=spr&parameter=Email is already available..Pls Enter another Email');
                      }
                    }
                    else{
                        if($array['password'] != $array['confirmpassword']){
                            if($array['userType']=='customer'){
                                header('Location:'.  $this->base_url.'?controller=Contact&function=registercustomer&parameter=password and confirm password is not same');
                              }
                              else{
                                header('Location:'.  $this->base_url.'?controller=Contact&function=spr&parameter=password and confirm password is not same');
                              } 
                        }
                        else{
                        $result = $this->model->Registration($array);
                        header('Location:' . $this->base_url);
                        }
                    }
                }
            else{
                echo "All fields are necessary";
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
                if($result['userType'] == 'customer'){
                    header('Location:'.  $this->base_url.'?controller=Contact&function=customerdashboard');
                }
                elseif($result['userType'] == 'Service_Provider'){
                    header('Location:'.  $this->base_url.'?controller=Contact&function=spdashboard');
                }
            }
            else{
              echo "pls register";
            }
       }
    }//end login function
}



?>


