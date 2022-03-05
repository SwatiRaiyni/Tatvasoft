<?php

class SpController
{  
    function __construct()
    {   
        include('Model/SpModel.php');
        $this->model = new SpModel();
        
    }

    public function getdata(){
        if($_SERVER["REQUEST_METHOD"] == "GET") {
            $result = $this->model->getdata();
            echo json_encode($result);
        }
    }

    public function editspaddress(){
        if($_SERVER["REQUEST_METHOD"] == "POST") {
        
            $firstname = $_POST['fname'];
            $lastname=  $_POST['lname']; 
            $number = $_POST['mobile'];
            $dob = $_POST['dob'];
            $nationality = $_POST['nationality'];
            $gender = $_POST['gender'];
            $img =  $_POST['img']; //print_r($img); die;
            $sname = $_POST['sname'];
            $hnumber = $_POST['hnumber'];
            $postalcode = $_POST['postalcode'];
            $city = $_POST['city'];

            $result1 = $this->model->checkpostalcode($postalcode);
            
            $array = [
                'firstname' =>$firstname,
                'lastname' =>$lastname,
                'number'=>$number,
                'dob'=> $dob,
                'nationality'=>$nationality,
                'gender' =>$gender,
                'img' =>$img,
                'sname'=>$sname,
                'hnumber'=> $hnumber,
                'postalcode'=>$postalcode,
                'city' => $city
            ];
            
            if($result1 != 0){
                $result = $this->model->Updatedata($array);
                if($result){
                    echo json_encode("yes");
                }
            }
            else{
                echo json_encode("no");
            }
        }
    }
    
    public function changepassword(){
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $password = $_POST['password'];
            $newpassword =  $_POST['newpassword'];
            $confirmpassword = $_POST['confirmpassword'];
            $array = [
                'password' => $password,
                'newpassword' => $newpassword,
                'confirmpassword'=> $confirmpassword,
            ];
           
            $result = $this->model->updatepassword($array);
           // print_r($result);
            if($result){
                echo json_encode("yes");
            }
            else{
                echo json_encode("no");
            }

        }
    }

    public function newservicerequestdata(){
        if($_SERVER["REQUEST_METHOD"] == "GET") {
            $result = $this->model->newservicerequestdata1();
            echo json_encode($result);
        } 
    }

    function getservicedetails(){
        if($_SERVER["REQUEST_METHOD"] == "GET") {
            $service_id = $_GET['service_id'];
            $array = [
                'service_id' => $service_id
            ];
            $result = $this->model->getservicedetails1($array);
            echo json_encode($result);
        }  
    }

    function accept(){
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $service_id1 =  $_POST['service_id1'];
            $date = date('Y-m-d H:i:s');
            $result = $this->model->accept1($service_id1,$date);
            if($result){
             echo json_encode("yes");
            }
            else{
             echo json_encode("no"); 
            }
         }
    }
}
?>