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
        
            $number = $_POST['mobile'];
            $sname = $_POST['sname'];
            $hnumber = $_POST['hnumber'];
            $postalcode = $_POST['postalcode'];
            $city = $_POST['city'];
            
           $checkaddress = $this->model->checkaddress1();
            if(!empty($checkaddress)){
                $array = [
                    'sname'=>$sname,
                    'hnumber'=> $hnumber,
                    'number'=> $number,
                    'postalcode'=> $postalcode,
                    'city' => $city
                ];//update
                $table2 = $this->model->updModel($array);//print_r($table2);die;
            }else{
                $array = [
                    'sname'=>$sname,
                    'hnumber'=> $hnumber,
                    'number'=>$number,
                    'postalcode'=>$postalcode,
                    'city' => $city,
                ];//insert
                $table2 = $this->model->insModel($array);
            }

            $firstname = $_POST['fname'];
            $lastname=  $_POST['lname']; 
            $number = $_POST['mobile'];
            $dob = $_POST['dob'];
            $nationality = $_POST['nationality'];
            $gender = $_POST['gender'];
            $postalcode = $_POST['postalcode'];
            $img =  $_POST['img']; 
            $array = [
                'firstname'=>$firstname,
                'lastname'=>$lastname,
                'number'=>$number,
                'dob'=>$dob,
                'nationality'=>$nationality,
                'gender'=>$gender,
                'postalcode' =>$postalcode,
                'img'=>$img
            ];
            $result = $this->model->Updatedata($array);
            if($result && $table2){
                echo json_encode("yes");
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
            $postalcode = $_POST['postalcode'];
            $mydate = $_POST['mydate'];
           $mystart_time = $_POST['mystart_time'];
          $myend_time = $_POST['myend_time'];
            $date = date('Y-m-d H:i:s');


            $result1 = $this->model->checkvalidation($service_id1,$mydate,$mystart_time,$myend_time);
            if(empty($result1)){
            $result = $this->model->accept1($service_id1,$date);
            
            if($result){
                echo json_encode("yes");
               // $email = [];
                $checkpostalcode = $this->model->checkpostalcode($postalcode,$service_id1);
               // print_r($checkpostalcode);die;
                foreach($checkpostalcode as $email){
                    $headers = "From: 180320116044.it.swati@gmail.com";
                    $sendmail = mail($email,"About Service Request","service request has ". $service_id1 ." already been accepted by someone and is no more available to You",$headers);
                }
            }
            else{
             echo json_encode("no"); 
            }
        }else{
            echo json_encode("no"); 
        }



         }
    }

    function cancel(){
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $service_id1 =  $_POST['service_id1'];
            $date = date('Y-m-d H:i:s');
            $result = $this->model->cancel1($service_id1,$date);
            if($result){
             echo json_encode("yes");
            }
            else{
             echo json_encode("no"); 
            }
        }
    }

    function complete(){
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $service_id1 =  $_POST['service_id1'];
            $date = date('Y-m-d H:i:s');
            $result = $this->model->complete1($service_id1,$date);
            if($result){
             echo json_encode("yes");
            }
            else{
             echo json_encode("no"); 
            }
        }
    }

    function showcustrating(){
        if($_SERVER["REQUEST_METHOD"] == "GET") {
            $result = $this->model->showcustrating1();
            echo json_encode($result);
        } 
    }

    function upcomingdata(){
        if($_SERVER["REQUEST_METHOD"] == "GET") {
            $result = $this->model->upcomingdata1();
            echo json_encode($result);
        }
    }

    function historydata(){
        if($_SERVER["REQUEST_METHOD"] == "GET") {
            $result = $this->model->historydata1();
            echo json_encode($result);
        }
    }

    function blockcustomerdata(){
        if($_SERVER["REQUEST_METHOD"] == "GET") {
            $result = $this->model->blockcustomerdata1();
            echo json_encode($result);
        }
    }

    

}
?>