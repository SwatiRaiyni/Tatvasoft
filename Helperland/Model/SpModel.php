<?php
class SpModel
{

    /* Creates database connection */
    public function __construct()
    {

        $db_host = "localhost";
        $db_user = "root";
        $db_password = "";
        $db_name = "helperland1";
        $this->conn = mysqli_connect($db_host,$db_user,$db_password,$db_name);
    }

    public function getdata(){
        session_start(); 
        
        if(isset($_SESSION['userdata'])){
            $userdata=$_SESSION['userdata'];
        }
        $sql= "select * from user where UserId=". $userdata['UserId'] ;  
        $result = mysqli_query($this->conn, $sql);
        
        $emparray = [];
        $obj_merged =  (object)[];
        while($row =mysqli_fetch_assoc($result))
        {
            $sql1= "SELECT * FROM useraddress WHERE UserId=". $row['UserId'] ;
            $result1 = mysqli_query($this->conn, $sql1); 
            while($row1 = mysqli_fetch_assoc($result1))
            {
                $obj_merged = (object) array_merge((array) $row1, (array) $row);
            }
            $emparray[] = $obj_merged;
        }
        return $emparray;
                
    }

    public function checkpostalcode($postalcode){
        $sql= "SELECT ZipcodeValue FROM zipcode WHERE ZipcodeValue='$postalcode' "; 
        $result = mysqli_query($this->conn, $sql);
        $row =mysqli_fetch_assoc($result);
        $count=$result->num_rows;
        return $count;
    }

    public function Updatedata($array){
        session_start(); 
        
        if(isset($_SESSION['userdata'])){
            $userdata=$_SESSION['userdata'];
        }
        $firstname = $array['firstname']; 
        $lastname = $array['lastname'];
        $number = $array['number'];
        $dob = $array['dob']; 
        $nationality = $array['nationality'];
        $gender = $array['gender'];
        $img = $array['img']; 
        $sname = $array['sname'];
        $hnumber = $array['hnumber'];
        $postalcode = $array['postalcode'];
        $city = $array['city'];

        $sql1 = "UPDATE user SET " . 
        "FirstName = '$firstname', " .
        "LastName = '$lastname' , " . 
        "Mobile = '$number' , " . 
        "DateOfBirth = '$dob', " . 
        "NationalityId = '$nationality' ," .
        "Gender = '$gender', " . 
        "UserProfilePicture = '$img' " .
        "WHERE UserId =". $userdata['UserId']; 
        $result1 = mysqli_query($this->conn, $sql1);

        $sql = "UPDATE useraddress SET " . 
        "AddressLine1 = '$hnumber', " .
        "AddressLine2 = '$sname' , " . 
        "City = '$city' , " . 
        "PostalCode = '$postalcode', " .
        "Mobile = '$number' " . 
        "WHERE UserId =". $userdata['UserId'];
        $result = mysqli_query($this->conn, $sql);
        $emparray = [];
        $emparray = array($result1, $result);
        return $emparray;

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

    public function newservicerequestdata1(){
        
        $sql= "SELECT * FROM servicerequest WHERE Status = 1 "; 
        
        $result = mysqli_query($this->conn, $sql);
        
        $emparray = [];
        $emparray1 = [];
        $obj_merged =  (object)[];
         while($row = mysqli_fetch_assoc($result))
        {   
                
                $sql1= "SELECT FirstName,LastName FROM user WHERE UserId=". $row['UserId'] ; 
                $result1 = mysqli_query($this->conn, $sql1); 
                while($row1 = mysqli_fetch_assoc($result1))
                {
                    $obj_merged = (object) array_merge((array) $row1, (array) $row);
                }
                $sql2= "SELECT * FROM servicerequestaddress WHERE ServiceRequestId=". $row['ServiceRequestId'] ; 
                $result2 = mysqli_query($this->conn, $sql2); 
                while($row2 =mysqli_fetch_assoc($result2))
                {
                    $obj_merged = (object) array_merge((array) $obj_merged, (array) $row2);
                }
                $emparray[] = $obj_merged;
         
            
        }//echo '<pre>'; print_r($emparray);die;
        return $emparray;
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

    function accept1($service_id1,$date){
        session_start(); 
        if(isset($_SESSION['userdata'])){
            $userdata=$_SESSION['userdata'];
        }
       
       $sql = "UPDATE servicerequest SET Status = 4,SPAcceptedDate = '$date', ServiceProviderId = ".$userdata['UserId']." 
         WHERE ServiceRequestId =". $service_id1; 
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }

}