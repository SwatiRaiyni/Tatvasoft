<?php

class SpController
{  

    function __construct()
    {   
        include('Model/SpModel.php');
        include ('calender.php');
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
           $checkpostalcode = $this->model->checkzipcodeintable($postalcode);
           if($checkpostalcode > 0){
            if(!empty($checkaddress)){
                $array = [
                    'sname'=>$sname,
                    'hnumber'=> $hnumber,
                    'number'=> $number,
                    'postalcode'=> $postalcode,
                    'city' => $city
                ];//update
                $table2 = $this->model->updModel($array);
            }
            else{
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
           // echo '<pre>'; print_r($result); die;
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
            $select_starttime = str_replace(':', '.', $mystart_time);
            $select_endtime = str_replace(':', '.', $myend_time);
            $error = "";

            for ($i = 0; $i < count($result1); $i++) {
                $res = $result1[$i];
                $sdate = $res['ServiceStartDate'];
                if($res["ServiceRequestId"]==$service_id1){
                    continue;
                }
                
            $service_starttime = str_replace(':', '.', $res["ServiceStartTime"]);
            $service_hour = $res["SubTotal"];
            $service_endtime = $service_starttime + $service_hour;
                
                if($select_starttime == $service_starttime || $select_endtime == $service_endtime || $select_starttime == $service_endtime || $select_endtime == $service_starttime ||
                    ($select_starttime < $service_starttime && $select_endtime > $service_starttime) || ($service_starttime-$select_endtime) < 1 ||
                    ($select_starttime > $service_starttime && $select_starttime < $service_endtime) || ($select_starttime-$service_endtime) < 1){
                    $error = "Another service request has been assigned to the service provider on $sdate from ".$service_starttime." to ". $service_endtime ." Either choose another date or pick up a different time slot";
                    break;
                }
            }
            if($error == ""){           
                if(empty($result1)){
                    $result = $this->model->accept1($service_id1,$date);
                    if($result){
                        echo json_encode(['error' => $error]);
                        $checkpostalcode = $this->model->checkpostalcode($postalcode,$service_id1);
                        foreach($checkpostalcode as $email){
                            $headers = "From: 180320116044.it.swati@gmail.com";
                            $sendmail = mail($email,"About Service Request","service request has ". $service_id1 ." already been accepted by someone and is no more available to You",$headers);
                        }
                    }
                    else{
                        echo json_encode(['error' => $error]); 
                    }
                }
            }else{
                echo json_encode(['error' => $error]); 
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
   
    function scheduledata(){
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $date = $_POST['date'];
            $result = $this->model->upcomingdata1();
            // echo '<pre>';print_r($result);die;
            $this->Controller = new Calendar($date);
            $i=0;
            foreach($result as $val){
                $sdate = $val->ServiceStartDate;
                $subtotal = $val->SubTotal;
                $stime=  date('H:i', strtotime($sdate));// print_r($sdate); die;
                $stime1 = str_replace(':', '.', $stime);
                $etime = $stime1 + $subtotal;
                $etime1 = str_replace('.', ':', $etime);
                $this->Controller->add_event($stime."-".$etime1,date('Y-m-d',strtotime($val->ServiceStartDate)), 1, 'green',$i++);
            }
            echo json_encode(['html' => $this->Controller->mycalendar(),'result' => $result]);
        }
    }

}
?>