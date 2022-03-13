<?php

class CustomerController
{  
    function __construct()
    {   
        include('Model/CustomerModel.php');
        $this->model = new CustomerModel();
        
    }
    public function getdata(){
        if($_SERVER["REQUEST_METHOD"] == "GET") {
            $result = $this->model->getdata();
            echo json_encode($result);
        } 
    }

    public function savedata(){
       
        if($_SERVER["REQUEST_METHOD"] == "POST") {
        
            $firstname = $_POST['firstname'];
            $lastname=  $_POST['lastname']; 
            $number = $_POST['mobile'];
            $dob = $_POST['date'];
             $language = $_POST['language'];
            
                $array = [
                    'firstname' =>$firstname,
                    'lastname' =>$lastname,
                    'number'=>$number,
                    'dob'=> $dob,
                    'language'=>$language
                ];
                $result = $this->model->Updatedata($array);
                if($result){
                    $res['status'] = 'yes';
                }
                else{
                    $res['status'] = 'no';
                }
                echo json_encode($res);
        }
    }

    public function getaddress(){
        if($_SERVER["REQUEST_METHOD"] == "GET") {
            $result = $this->model->getaddress();
            echo json_encode($result);
        }
    }

    public function AddAddress(){
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $streetname =  $_POST['streetname'];
            $houseno = $_POST['houseno'];
            $code = $_POST['code'];
            $city = $_POST['city'];
            $mobile=$_POST['mobile'];
            $array = [
                'streetname' => $streetname,
                'houseno'=> $houseno,
                'code'=> $code,
                'city' => $city,
                'mobile' => $mobile
            ];
            $result = $this->model->addaddress($array);
            if($result){
                echo json_encode("yes");
            }
            else{
                echo json_encode("no"); 
            }
        }
    }

    public function deleteaddress(){
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $trash_id = $_POST['trash_id'];
            $array = [
                'trash_id' => $trash_id
            ];
            $result = $this->model->deleteaddress($array);
            if($result){
                echo json_encode("yes");
            }
            else{
                echo json_encode("no"); 
            }

        }
    }

    public function geteditaddress(){
        if($_SERVER["REQUEST_METHOD"] == "GET") {
            
            $edit_id = $_GET['edit_id'];
            $array = [
                'edit_id' => $edit_id
            ];
            $result = $this->model->geteditaddress($array);
            echo json_encode($result);

        }
    }

    public function editaddress(){
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $edit_id = $_POST['edit_id'];
            $streetname =  $_POST['streetname'];
            $houseno = $_POST['houseno'];
            $code = $_POST['code'];
            $city = $_POST['city'];
            $mobile=$_POST['mobile'];
            $array = [
                'edit_id' => $edit_id,
                'streetname' => $streetname,
                'houseno'=> $houseno,
                'code'=> $code,
                'city' => $city,
                'mobile' => $mobile
            ];
            $result = $this->model->editaddress($array);
            if($result){
                $res['status'] = 'yes';
            }
            else{
                $res['status'] = 'no';
            }
            echo json_encode($res);


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
            if($result){
                echo json_encode("yes");
            }
            else{
                echo json_encode("no");
            }

        }
    }

    public function getdashboarddata(){
        if($_SERVER["REQUEST_METHOD"] == "GET") {
            $result = $this->model->getdashboarddata();
            echo json_encode($result);
        } 
    }

    public function geteditdatetime(){
        if($_SERVER["REQUEST_METHOD"] == "GET") {
            
            $edit_id = $_GET['reschedule_edit_id'];
            $array = [
                'edit_id' => $edit_id
            ];
            $result = $this->model->geteditdatetime($array);
            echo json_encode($result);
        } 
    }
    
    public function editdatetime(){
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $edit_id =  $_POST['edit_id'];
            $getdate1 = $_POST['getdate1'];
            $gettime1 = $_POST['gettime1'];
           
            
            $array = [
                'edit_id' => $edit_id,
                'getdate1'=> $getdate1,
                'gettime1'=> $gettime1,
            ];

            $sp_id = $_POST['sp_id'];
            $result = $this->model->editdatetime1($array);
            if($result){
                $res['status'] = 'yes';
                $result1 = $this->model->sendmail($sp_id);
                //print_r($result1);die;
                foreach($result1 as $email){
                $headers = "From: 180320116044.it.swati@gmail.com";
                $sendmail = mail($email,"About Reschedule Service-date and time","Service RequestId=".$edit_id." is reschedule by customer Pls check Your dashboard and updated date and time is ".$getdate1.",". $gettime1,$headers);
                }
            }
            else{
                $res['status'] = 'no';
            }
            echo json_encode($res);
        }
    }

    function cancelsr(){
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $cancel_id = $_POST['cancel_id'];
            $array = [
                'cancel_id' => $cancel_id
            ];
            $result = $this->model->cancelsr1($array);
            if($result){
                echo json_encode("yes");
            }
            else{
                echo json_encode("no");
            }

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

    function gethistorydata(){
        if($_SERVER["REQUEST_METHOD"] == "GET") {
            $result = $this->model->gethistorydata1();
            echo json_encode($result);
        } 
    }

    function checkrating(){
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $sid2 =  $_POST['sid2'];
            $ontime =  $_POST['ontime'];
            $friendly = $_POST['friendly'];
            $qos = $_POST['qos'];
            $comment = $_POST['comment'];
            $array = [
                'sid2' => $sid2,
                'ontime' => $ontime,
                'friendly' => $friendly,
                'qos'=> $qos,
                'comment'=> $comment,
            ];
            $result = $this->model->checkrating1($array);
            if($result){
                $res['status'] = 'yes';
            }
            else{
                $res['status'] = 'no';
            }
            echo json_encode($res);
        } 
    }

    function favpronsdata(){
        if($_SERVER["REQUEST_METHOD"] == "GET") {
            $result = $this->model->favpronsdata1();
            echo json_encode($result);
        }
    }

    function IsFavSP(){
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $u_id =  $_POST['u_id']; 
            $s_id =  $_POST['s_id'];
            $array = [
                'u_id' => $u_id,
                's_id' => $s_id
            ];
            $result = $this->model->IsFavSP1($array);
            echo json_encode($result);
        }
    }

   function IsBlockSP(){
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $u_id =  $_POST['u_id']; 
        $s_id =  $_POST['s_id'];
        $array = [
            'u_id' => $u_id,
            's_id' => $s_id
        ];
        $result = $this->model->IsBlockSP1($array);
        echo json_encode($result);
    }
   }
    
}
?>




