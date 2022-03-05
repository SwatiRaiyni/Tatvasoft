<?php
class CustomerModel
{

    /* Creates database connection */
    public function __construct()
    {

        $db_host = "localhost";
        $db_user = "root";
        $db_password = "";
        $db_name = "helperland1";
      
      //   Create Connection
         $this->conn = mysqli_connect($db_host,$db_user,$db_password,$db_name);
        //  if ($this->conn) {
        //     echo "Connected!";
        //   } else {
        //     echo "Connection Failed";
        //   }
    }
    public function getdata(){
        session_start(); 
        
        if(isset($_SESSION['userdata'])){
            $userdata=$_SESSION['userdata'];
        }
        $sql= "select * from user where UserId=". $userdata['UserId'] ;  
        $result = mysqli_query($this->conn, $sql);
        
        $emparray = [];
        while($row =mysqli_fetch_assoc($result))
        {
        $emparray[] = $row;
        }
    
        return $emparray;
        
    }

    public function Updatedata($array){
        session_start(); 
        
        if(isset($_SESSION['userdata'])){
            $userdata=$_SESSION['userdata'];
        }
        $firstname =  $array['firstname'];
        $lastname =  $array['lastname'];
        $number = $array['number'];
        $dob = $array['dob'];
        $language = $array['language']; 
       $sql = "UPDATE user SET " . 
                "FirstName = '$firstname', " .
                "LastName = '$lastname' , " . 
                "Mobile = '$number' , " . 
                "DateOfBirth = '$dob', " . 
                "LanguageId = $language " .
                "WHERE UserId =". $userdata['UserId']; 
       
        
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }

    public function getaddress(){
        session_start();
        if(isset($_SESSION['userdata'])){
            $userdata=$_SESSION['userdata'];
        }
        $sql= "SELECT * FROM useraddress WHERE UserId=". $userdata['UserId'];  
        $result = mysqli_query($this->conn, $sql);
        
        $emparray = [];
         while($row =mysqli_fetch_assoc($result))
        {
        $emparray[] = $row;
        }
        return $emparray;
       
    }

    public function addaddress($array){
        session_start(); 
        if(isset($_SESSION['userdata'])){
            $userdata=$_SESSION['userdata'];
        }
        $streetname = $array['streetname'];
        $houseno = $array['houseno'];
        $code = $array['code'];
        $city = $array['city'];
        $mobile = $array['mobile'];
        $sql = "INSERT INTO useraddress(UserId,AddressLine1,AddressLine2,City,PostalCode,Mobile,Email) VALUES('{$userdata['UserId']}','$houseno','$streetname','$city','$code','$mobile','{$userdata['Email']}')";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }

    public function deleteaddress($array){
        $trash_id = $array['trash_id'];
        $sql = "DELETE FROM useraddress WHERE AddressId = ". $trash_id;
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }

    public function geteditaddress($array){
        $edit_id = $array['edit_id'];
        $sql= "SELECT * FROM useraddress WHERE AddressId=". $edit_id;  
        $result = mysqli_query($this->conn, $sql);
        
        $emparray = [];
         while($row =mysqli_fetch_assoc($result))
        {
        $emparray[] = $row;
        }
        return $emparray;
      

    }

    public function editaddress($array){
        $edit_id = $array['edit_id'];
        $streetname = $array['streetname'];
        $houseno = $array['houseno'];
        $code = $array['code'];
        $city = $array['city'];
        $mobile = $array['mobile'];
        $sql = "UPDATE useraddress SET " . 
                "AddressLine2 = '$streetname', " .
                "AddressLine1 = '$houseno' , " . 
                "PostalCode = '$code' , " . 
                "City = '$city', " . 
                "Mobile = $mobile " .
                "WHERE AddressId =". $edit_id; 
       
        $res = mysqli_query($this->conn, $sql);
        return $res;
          
    }

    public function updatepassword($array){
        session_start(); 
        if(isset($_SESSION['userdata'])){
            $userdata=$_SESSION['userdata'];
        }
        $password = $array['password']; 
        $newpassword = $array['newpassword'];
        $confirmpassword = $array['confirmpassword'];
        $sql= "SELECT Password from user WHERE Password = '$password' " ; 
        $result = mysqli_query($this->conn, $sql);
        $row = mysqli_fetch_assoc($result);
    
        if($row){
            $sql = "UPDATE user SET Password='$newpassword' WHERE UserId=". $userdata['UserId'];
            $result = mysqli_query($this->conn, $sql);
            return $result;
            
        }
       
    }

    public function getdashboarddata(){
        session_start(); 
        if(isset($_SESSION['userdata'])){
            $userdata=$_SESSION['userdata'];
        }
        $sql= "SELECT * FROM servicerequest WHERE UserId=". $userdata['UserId'] ." and Status = 1 "; 
        
        $result = mysqli_query($this->conn, $sql);
        
        $emparray = [];
        $emparray1 = [];
        $obj_merged =  (object)[];
         while($row =mysqli_fetch_assoc($result))
        {
            if($row['ServiceProviderId'] != null){
                
                $sql1= "SELECT * FROM user WHERE UserId=". $row['ServiceProviderId'] ; 
                $result1 = mysqli_query($this->conn, $sql1); 
                while($row1 = mysqli_fetch_assoc($result1))
                {
                    $obj_merged = (object) array_merge((array) $row1, (array) $row);
                }
                $sql2= "SELECT avg(Ratings) as sprating FROM rating WHERE RatingTo=". $row['ServiceProviderId'] ; 
                $result2 = mysqli_query($this->conn, $sql2); 
                while($row2 =mysqli_fetch_assoc($result2))
                {
                    $obj_merged = (object) array_merge((array) $obj_merged, (array) $row2);
                }
                $emparray[] = $obj_merged;
            }
            else{
                $emparray[] = $row;   
            }
        }
        return $emparray;
       
    }

    function geteditdatetime($array){
        $edit_id = $array['edit_id'];
        $sql= "SELECT ServiceStartDate FROM servicerequest WHERE ServiceRequestId=". $edit_id;  
        $result = mysqli_query($this->conn, $sql);
        
        $emparray = [];
         while($row =mysqli_fetch_assoc($result))
        {
        $emparray[] = $row;
        }
        return $emparray;
       
    }

    function editdatetime1($array){
        $edit_id = $array['edit_id'];
        $getdate1 = $array['getdate1'];
        $gettime1 = $array['gettime1'];
        
        $mydate = date('Y-m-d', strtotime($getdate1));
        $mytime = date('H:i:s', strtotime($gettime1));

       $datetime = $mydate.' '.$mytime;
        
        $sql = "UPDATE servicerequest SET " . 
                "ServiceStartDate = '$datetime' " .
                "WHERE ServiceRequestId =". $edit_id; 
       
        $res = mysqli_query($this->conn, $sql);
         return $res;
    }

    function cancelsr1($array){
        $cancel_id = $array['cancel_id'];
        $sql = "UPDATE servicerequest SET " . 
                "Status = 3 " .
                "WHERE ServiceRequestId =". $cancel_id;
        $result = mysqli_query($this->conn, $sql);
        return $result;
            
    }

    function getservicedetails1($array){
        $service_id = $array['service_id'];
        $sql= "SELECT * FROM servicerequest as a INNER JOIN servicerequestaddress as b INNER JOIN 
        servicerequestextra as c  WHERE a.ServiceRequestId=". $service_id ."  AND  b.ServiceRequestId=". $service_id ." AND c.ServiceRequestId=". $service_id; 
        $result = mysqli_query($this->conn, $sql);
        $emparray = [];
         while($row =mysqli_fetch_assoc($result))
        {
        $emparray[] = $row;
        }
        return $emparray;
         
    }

    function gethistorydata1(){
        session_start(); 
        if(isset($_SESSION['userdata'])){
            $userdata=$_SESSION['userdata'];
        }
        $sql= "SELECT * FROM servicerequest WHERE UserId=". $userdata['UserId'] ." AND Status IN (2,3)";
        $result = mysqli_query($this->conn, $sql);
        $emparray = [];
        $emparray1 = [];
        $obj_merged =  (object)[];
         while($row =mysqli_fetch_assoc($result))
        {
            if($row['ServiceProviderId'] != null){
                
                $sql1= "SELECT * FROM user WHERE UserId=". $row['ServiceProviderId'] ; 
                $result1 = mysqli_query($this->conn, $sql1); 
                while($row1 = mysqli_fetch_assoc($result1))
                {
                    $obj_merged = (object) array_merge((array) $row1, (array) $row);
                }
                $sql2= "SELECT avg(Ratings) as sprating FROM rating WHERE RatingTo=". $row['ServiceProviderId'] ; 
                $result2 = mysqli_query($this->conn, $sql2); 
                while($row2 =mysqli_fetch_assoc($result2))
                {   
                    $obj_merged = (object) array_merge((array) $obj_merged, (array) $row2);
                   
                }
                $sql3 = "SELECT * FROM rating WHERE ServiceRequestId = ".$row['ServiceRequestId'];
                $result3 = mysqli_query($this->conn, $sql3); 
                if(mysqli_num_rows($result3) > 0){
                    $obj = (object) array('alreadyrated' => true);
                    $obj_merged = (object) array_merge((array) $obj_merged, (array) $obj);
                }
                else{
                    $obj = (object) array('alreadyrated' => false);
                    $obj_merged = (object) array_merge((array) $obj_merged, (array) $obj);
                }
                $emparray[] = $obj_merged;
            }
            else{
                $emparray[] = $row;
            }
        }
        return $emparray;
       
    }

    function checkrating1($array){
        session_start(); 
        if(isset($_SESSION['userdata'])){
            $userdata=$_SESSION['userdata'];
        }
        $sid2 = $array['sid2'];
        $ontime = $array['ontime'];
        $friendly = $array['friendly'];
        $qos = $array['qos'];
        $comment = $array['comment'];
        $sql= "SELECT ServiceProviderId FROM servicerequest WHERE UserId=". $userdata['UserId'] ." AND Status IN (2,3) AND ServiceRequestId = " .$sid2 ;
        $result = mysqli_query($this->conn, $sql);
       
        $emparray = [];
         while($row = mysqli_fetch_assoc($result))
        {
            if($row['ServiceProviderId'] != null){
                $sql1= "SELECT UserId FROM user WHERE UserId=". $row['ServiceProviderId'] ; 
                $result1 = mysqli_query($this->conn, $sql1); 
                while($row1 = mysqli_fetch_assoc($result1))
                {
                    $emparray =  array_merge($row1,$row);
                }
            }
            else{
                $emparray[] = $row;
            }
        }
        $avg1 = (float)(($ontime + $friendly + $qos)/3);
        $sql1 = "INSERT INTO rating(ServiceRequestId,RatingFrom,RatingTo,Ratings,Comments,OnTimeArrival,Friendly,QualityOfService)VALUES($sid2,'{$userdata['UserId']}','{$emparray['ServiceProviderId']}',$avg1,'$comment',$ontime,$friendly,$qos)";
        $res1 = mysqli_query($this->conn, $sql1);
        return $res1;
        
    }
}
?>