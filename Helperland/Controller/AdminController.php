<?php

class AdminController
{  
    function __construct()
    {   
        include('Model/AdminModel.php');
        $this->model = new AdminModel();
        
    }

    function servicerequestdata(){
        if($_SERVER["REQUEST_METHOD"] == "GET") {
            $result = $this->model->servicerequestdata1();
            echo json_encode($result);
        }
    }

    function usermanagementdata(){
        if($_SERVER["REQUEST_METHOD"] == "GET") {
            $result = $this->model->usermanagementdata1();
            echo json_encode($result);
        }
    }

    function getuserdata(){
        $result = $this->model->getdata1();
        //print_r($result);die;

        $option = '';
        $option .= "<option value=''>User name</option>";
        foreach($result as $kk => $vv){
            $id = $vv['UserId'];
            $name = $vv['FirstName'];
            $lname = $vv['LastName'];
            $option .= "<option value='".$id."'>".$name." ". $lname ."</option>";
        }

        echo json_encode($option);
    }

    function getservicerequestcust(){
        $result = $this->model->getservicerequestcust1();
        $option = '';
        $option .= "<option value=''>Customer</option>";
        foreach($result as $kk => $vv){
            $id = $vv['UserId'];
            $name = $vv['FirstName'];
            $lname = $vv['LastName'];
            $option .= "<option value='".$id."'>".$name ."  ". $lname ."</option>";
        }

        echo json_encode($option);
    }

    function getservicerequestsp(){
        $result = $this->model->getservicerequestsp1();
        $option = '';
        $option .= "<option value=''>Service Provider</option>";
        foreach($result as $kk => $vv){
            $id = $vv['UserId'];
            $name = $vv['FirstName'];
            $lname = $vv['LastName'];
            $option .= "<option value='".$id."'>".$name ."  ". $lname ."</option>";
        }

        echo json_encode($option);
    }

    function searchservicereq(){
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $id_sel = $_POST['id_sel'];
            $zip_sel = $_POST['zip_sel'];
            $email_sel = $_POST['email_sel'];
            $cust_sel = $_POST['cust_sel'];
            $sp_sel = $_POST['sp_sel'];
            $status_sel = $_POST['status_sel'];
            $check_sel = $_POST['check_sel'];
            $fromd_sel = $_POST['fromd_sel'];
            $tod_sel = $_POST['tod_sel'];
            $array = [
                    'id_sel' => $id_sel,
                    'zip_sel'=> $zip_sel,
                    'email_sel' => $email_sel,
                    'cust_sel'=> $cust_sel,
                   'sp_sel' => $sp_sel,
                    'status_sel' => $status_sel,
                    'check_sel' => $check_sel,
                    'fromd_sel' => $fromd_sel,
                    'tod_sel' => $tod_sel
            ];
            $result = $this->model->searchservicereq1($array);
           // echo '<pre>';print_r($result);die;
           if(!empty($result)){
            echo json_encode( $result); 
           }else{
            echo json_encode($result); 
           }
        }
    }

    function searchdata(){
        if($_SERVER["REQUEST_METHOD"] == "POST") {

            
            $user_sel = $_POST['user_sel'];
            $type_sel = $_POST['type_sel'];
            $mol_sel = $_POST['mol_sel'];
            $pos_sel = $_POST['pos_sel'];
            $email_sel = $_POST['email_sel'];
            $from_sel = $_POST['from_sel'];
            $to_sel = $_POST['to_sel'];
           $result = "";
           
            $array = [
                    'user_sel' => $user_sel,
                    'type_sel'=> $type_sel,
                    'mol_sel' => $mol_sel,
                    'pos_sel'=> $pos_sel,
                   'email_sel' => $email_sel,
                    'from_sel' => $from_sel,
                    'to_sel' => $to_sel,
                   
            ];
            $result = $this->model->searchdata1($array);
           if(!empty($result)){
            echo json_encode( $result); 
           }else{
            echo json_encode($result); 
           }
        }
     
    }

    function IsApprovedSP(){
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $u_id =  $_POST['u_id']; 
            $result = $this->model->IsApprovedSP1($u_id);
            echo json_encode($result);
        }
    }

    function editaddress(){
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $id =  $_POST['id'];
            $getdate1 = $_POST['getdate1'];
            $gettime1 = $_POST['gettime1'];
            $sname1 =  $_POST['sname1'];
            $hnumber1 = $_POST['hnumber1'];
            $pcode1 = $_POST['pcode1'];
            $city = $_POST['city'];
            $array = [
                'id' => $id,
                'getdate1'=> $getdate1,
                'gettime1'=> $gettime1,
            ];
            $result = $this->model->edittimedate1($array);
            $array = [
                'id' => $id,
                'sname1' => $sname1,
                'hnumber1'=> $hnumber1,
                'pcode1'=> $pcode1,
                'city'=> $city,
            ];
            $result1 = $this->model->editaddress1($array);
            
            if($result && $result1){
                echo json_encode("yes");
                $sendmail = $this->model->collectallemail($id); //print_r($sendmail);die;
                foreach($sendmail as $email){
                    $headers = "From: 180320116044.it.swati@gmail.com";
                    $sendmail = mail($email,"Update Service Request ","service request has ". $id ." is updated by admin ",$headers);
                }
            }
            else{
                echo json_encode("no");
            }
            
           
        }
    }

    
}