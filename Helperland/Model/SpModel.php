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
        $sql= "SELECT FirstName,LastName,Email,Mobile,DateOfBirth,NationalityId,Gender,UserProfilePicture,UserId  FROM user where UserId=". $userdata['UserId'] ;  
        $result = mysqli_query($this->conn, $sql);
        $res1 =mysqli_fetch_assoc($result);
        

        $sql1= "SELECT * FROM useraddress WHERE UserId=". $res1['UserId'] ;
        $res2 = mysqli_query($this->conn, $sql1);
        $res2 = mysqli_fetch_assoc($res2);

        if(!empty($res2)){
            $rs2 = $res2;
        }else{
            $rs2 = [];
        }
        $all_res = array_merge($res1, $rs2);
        return $all_res;
                
    }

    public function checkaddress1(){
        session_start(); 
        if(isset($_SESSION['userdata'])){
            $userdata=$_SESSION['userdata'];
        }
        $sql = "SELECT * FROM useraddress WHERE UserId=".$userdata['UserId'];
        $result = mysqli_query($this->conn, $sql);
        $count=$result->num_rows;
        return $count;

    }

    public function updModel($array){
        //session_start(); 
        if(isset($_SESSION['userdata'])){
            $userdata=$_SESSION['userdata'];
        }
        $sname = $array['sname'];
        $hnumber = $array['hnumber'];
        $postalcode = $array['postalcode'];
        $number = $array['number'];
        $city = $array['city'];
        $sql = "UPDATE useraddress SET " . 
        "AddressLine1 = '$hnumber', " .
        "AddressLine2 = '$sname' , " . 
        "City = '$city' , " . 
        "PostalCode = '$postalcode', " .
        "Mobile = '$number' " . 
        "WHERE UserId =". $userdata['UserId'];
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }

    public function insModel($array){
        if(isset($_SESSION['userdata'])){
            $userdata=$_SESSION['userdata'];
        }
        $sname = $array['sname'];
        $hnumber = $array['hnumber'];
        $postalcode = $array['postalcode'];
        $number = $array['number'];
        $city = $array['city'];
        
       $sql = "INSERT INTO useraddress(UserId,AddressLine1,AddressLine2,City,PostalCode,Mobile,Email)VALUES('{$userdata['UserId']}',$hnumber,'$sname','$city',$postalcode,$number,'{$userdata['Email']}')";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }

    public function Updatedata($array){
       
        if(isset($_SESSION['userdata'])){
            $userdata=$_SESSION['userdata'];
        }
        $firstname = $array['firstname']; 
        $lastname = $array['lastname'];
        $number = $array['number'];
        $dob = $array['dob']; 
        $nationality = $array['nationality'];
        $gender = $array['gender'];
        $postalcode = $array['postalcode'];
        $img = $array['img']; 
        $sql = "UPDATE user SET " . 
        "FirstName = '$firstname', " .
        "LastName = '$lastname' , " . 
        "Mobile = '$number' , " . 
        "DateOfBirth = '$dob', " . 
        "NationalityId = '$nationality' ," .
        "Gender = '$gender', " . 
        "ZipCode = '$postalcode', " . 
        "UserProfilePicture = '$img' " .
        "WHERE UserId =". $userdata['UserId']; 
        $result = mysqli_query($this->conn, $sql);
        return $result;
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
    
        session_start(); 
        if(isset($_SESSION['userdata'])){
            $userdata=$_SESSION['userdata'];
        }
        $id = $userdata['UserId'];
        $sql11 ="SELECT ZipCode FROM user WHERE UserId =".$userdata['UserId'];
        $result = mysqli_query($this->conn, $sql11);
        while($row = mysqli_fetch_assoc($result))
        { 
            $zipcode = $row['ZipCode'];
        } //print_r($zipcode);die;
        $sql= "SELECT * FROM servicerequest  WHERE (ServiceProviderId is NULL || ServiceProviderId = ".$id.") && ZipCode = ".$zipcode." && Status=1 "; 
        $result = mysqli_query($this->conn, $sql);
        
        
        $emparray = [];
        $emparray1 = [];
        $emparray15 = [];
        $obj_merged =  (object)[];
         while($row = mysqli_fetch_assoc($result))
         {  

        //     $servicesdate = $row['ServiceStartDate'];//2022-02-12 08:57:51.000 formate
        //     $subtotal = $row['SubTotal']*60;//4.5
        //     $time = new DateTime($servicesdate);
        //     $time->add(new DateInterval('PT' . $subtotal . 'M'));
        //     $endtime = $time->format('Y-m-d H:i:s');//2022-02-12 13:27:51 formate
        //      print_r( $endtime);die;

        //  echo  $sql15 = "SELECT * FROM servicerequest WHERE (ServiceProviderId=".$id." AND ServiceStartDate <= ".$servicesdate." AND ". $servicesdate ." <= ". $endtime ." ) OR (ServiceProviderId=".$id." AND ServiceStartDate <= ".$endtime." AND  >= ". $endtime ." ) OR (ServiceProviderId=".$id." AND ServiceStartDate >= ".$endtime." AND DATE_ADD(".$servicesdate.",interval  ".$subtotal." minute) <= ". $endtime .")"; die;

        

          //  $result15 = mysqli_query($this->conn, $sql15); 
           // print_r($result15->num_rows());die;
            // while($row15 = mysqli_fetch_assoc($result15))
            //     {
            //         $emparray15[] = $row15;
            //     }print_r($emparray15);die;
               $sql = "SELECT * FROM `favoriteandblocked` t1 , `favoriteandblocked` t2 WHERE t1.UserId=t2.TargetUserId AND t2.UserId=t1.TargetUserId AND t1.UserId=$id AND t1.TargetUserId=".$row['UserId'];
               $result1 = mysqli_query($this->conn, $sql);
               $rowcount=mysqli_num_rows($result1);

               if($rowcount > 0){

               $sql ="SELECT * FROM `favoriteandblocked` t1 , `favoriteandblocked` t2 WHERE t1.UserId=t2.TargetUserId AND t2.UserId=t1.TargetUserId AND t1.UserId=$id AND t1.TargetUserId=".$row['UserId']." AND t1.IsBlocked = 0 AND t2.IsBlocked = 0"; 
                $result1 = mysqli_query($this->conn, $sql);
                $rowcount=mysqli_num_rows($result1);
                if($rowcount > 0){


                $sql1= "SELECT FirstName,LastName,ZipCode FROM user WHERE UserId=". $row['UserId'] ; 
                $result1 = mysqli_query($this->conn, $sql1); 
                while($row1 = mysqli_fetch_assoc($result1))
                {
                    $obj_merged = (object) array_merge((array) $row1, (array) $row);
                }//echo '<pre>'; print_r($obj_merged);die;
                $sql2= "SELECT * FROM servicerequestaddress WHERE ServiceRequestId=". $row['ServiceRequestId'] ." AND PostalCode= $zipcode" ;
                $result2 = mysqli_query($this->conn, $sql2); 
                
                while($row2 =mysqli_fetch_assoc($result2))
                {
                    $obj_merged = (object) array_merge((array) $obj_merged, (array) $row2);
                }
                $emparray[] = $obj_merged;
                } 
            }  
            else{
            $sql1= "SELECT FirstName,LastName,ZipCode FROM user WHERE UserId=". $row['UserId'] ; 
            $result1 = mysqli_query($this->conn, $sql1); 
            while($row1 = mysqli_fetch_assoc($result1))
            {
                $obj_merged = (object) array_merge((array) $row1, (array) $row);
            }//echo '<pre>'; print_r($obj_merged);die;
            $sql2= "SELECT * FROM servicerequestaddress WHERE ServiceRequestId=". $row['ServiceRequestId'] ." AND PostalCode= $zipcode" ;
            $result2 = mysqli_query($this->conn, $sql2); 
            
            while($row2 =mysqli_fetch_assoc($result2))
            {
                $obj_merged = (object) array_merge((array) $obj_merged, (array) $row2);
            }
            $emparray[] = $obj_merged;
        }
            
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

    function checkvalidation($service_id1,$mydate,$mystart_time,$myend_time){

        session_start();
        if(isset($_SESSION['userdata'])){
            $userdata=$_SESSION['userdata'];
        }
        $id = $userdata['UserId'];

        $mydate = date('Y-m-d', strtotime(str_replace('/', '-', $mydate)));
        $st = str_replace(':', '.', $mystart_time);//." = ";
        $et = str_replace(':', '.', $myend_time);
        $tot = (float)$et-(float)$st;
        $con_date = $mydate.' '.$mystart_time.':00';
        
     $sql = "SELECT ServiceRequestId, DATE_FORMAT(ServiceStartDate, '%H:%i') as ServiceStartTime,DATE_FORMAT(ServiceStartDate, '%Y-%m-%d') as ServiceStartDate, SubTotal FROM servicerequest WHERE Status=4 AND ServiceProviderId=".$id." AND DATE(ServiceStartDate) = DATE('".$mydate."')"; 
        $result = mysqli_query($this->conn, $sql);
        $emparray = [];
        while($row = mysqli_fetch_assoc($result)){
               
                $emparray[] = $row;
            } //print_r($emparray);die;
       
        return $emparray;

      


    }

    function accept1($service_id1,$date){
        //session_start(); 
        if(isset($_SESSION['userdata'])){
            $userdata=$_SESSION['userdata'];
        }
       
       $sql = "UPDATE servicerequest SET Status = 4,SPAcceptedDate = '$date', ServiceProviderId = ".$userdata['UserId']." 
         WHERE ServiceRequestId =". $service_id1; 
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }

    function checkpostalcode($postalcode,$service_id1){
        
        if(isset($_SESSION['userdata'])){
            $userdata=$_SESSION['userdata'];
        }
        $id = $userdata['UserId'];
        $sql = "SELECT UserId,UserTypeId,ZipCode,Email FROM user WHERE UserTypeId=2 AND ZipCode=$postalcode ";
        $result = mysqli_query($this->conn, $sql);
        $emparray = [];
        if($result->num_rows > 0){
            while($row = mysqli_fetch_assoc($result)){
                if($row['UserId'] == $id){
                    continue;
                }
                $emparray[] = $row['Email'];
            } //print_r($emparray);die;
        }
        return $emparray;
    }

    function cancel1($service_id1,$date){
       
       
       $sql = "UPDATE servicerequest SET Status = 1,SPAcceptedDate = NULL, ServiceProviderId = NULL
         WHERE ServiceRequestId =". $service_id1; 
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }

    function complete1($service_id1,$date){
        session_start(); 
        if(isset($_SESSION['userdata'])){
            $userdata=$_SESSION['userdata'];
        }
       
       $sql = "UPDATE servicerequest SET Status = 2,SPAcceptedDate = '$date', ServiceProviderId = ".$userdata['UserId']." 
         WHERE ServiceRequestId =". $service_id1; 
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }

    function showcustrating1(){
        session_start(); 
        if(isset($_SESSION['userdata'])){
            $userdata=$_SESSION['userdata'];
        }
         $sql = "SELECT x.*,y.*,z.* FROM (SELECT * FROM rating) as x,(SELECT UserId,FirstName,LastName FROM user) as y ,
         (SELECT ServiceRequestId,ServiceProviderId,ServiceStartDate,ServiceId,SubTotal FROM servicerequest WHERE Status=2) as z WHERE x.ServiceRequestId=z.ServiceRequestId
          AND x.RatingFrom=y.UserId 
         AND z.ServiceProviderId=".$userdata['UserId'] ;
         $result = mysqli_query($this->conn, $sql);
         $emparray = [];
         while($row =mysqli_fetch_assoc($result))
         {
         $emparray[] = $row;
         } //echo'<pre>'; print_r($emparray);die;
         return $emparray;
    }

    function upcomingdata1(){
        session_start(); 
        if(isset($_SESSION['userdata'])){
            $userdata=$_SESSION['userdata'];
        }
        $sql= "SELECT * FROM servicerequest WHERE Status = 4  AND ServiceProviderId = ".$userdata['UserId']; 
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
            $sql3= "SELECT * FROM servicerequestextra WHERE ServiceRequestId=". $row['ServiceRequestId'] ; 
            $result3 = mysqli_query($this->conn, $sql3); 
            while($row3 =mysqli_fetch_assoc($result3))
            {
            $obj_merged = (object) array_merge((array) $obj_merged, (array) $row3);
            }
            $emparray[] = $obj_merged;
        }//echo '<pre>'; print_r($emparray);die;
        return $emparray;
    }

    function historydata1(){
        session_start(); 
        if(isset($_SESSION['userdata'])){
            $userdata=$_SESSION['userdata'];
        }
        $sql= "SELECT * FROM servicerequest WHERE Status = 2  AND ServiceProviderId = ".$userdata['UserId']; 
        $result = mysqli_query($this->conn, $sql);
        $emparray = [];
        $obj_merged =  (object)[];
         while($row = mysqli_fetch_assoc($result))
        {   
            $sql1= "SELECT FirstName,LastName,UserId FROM user WHERE UserId=". $row['UserId'] ; 
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

    function blockcustomerdata1(){

        session_start(); 
        if(isset($_SESSION['userdata'])){
            $userdata=$_SESSION['userdata'];
        }
        $spid=$userdata['UserId'];
        $sql="SELECT DISTINCT UserId,ServiceProviderId,UserId FROM servicerequest WHERE ServiceProviderId=$spid AND Status=2";
        $result = mysqli_query($this->conn, $sql);
        $data_main=[];
        $data = [];
        while($row = mysqli_fetch_assoc($result))
        {
            if ($row['ServiceProviderId'] != NULL ) {
                $id = $row['UserId'];
                $userdata = $this->getdata1($id);
                $getfp=$this->getdata3($id,$spid);
                $data = array_merge($data,$userdata,$getfp);
            }
            array_push($data_main, $data);
        }
 //echo "<pre>"; print_r($data_main);die;
        return $data_main;
      
    }

    public function getdata1($id){
        $sql1="SELECT CONCAT(FirstName,' ',LastName) as FullName,UserProfilePicture FROM user where UserId=$id";
        $result = mysqli_query($this->conn, $sql1);
        $success = mysqli_fetch_assoc($result);
        if($success)
        {
            return $success;
        }else{
            return [];
        }
    }
    
    public function getdata3($id,$spid){
        $sql ="SELECT UserId,TargetUserId,IsBlocked FROM favoriteandblocked WHERE UserId=$spid AND TargetUserId=$id";
        $result = mysqli_query($this->conn, $sql);
        if($result->num_rows > 0){
            $success = mysqli_fetch_assoc($result);
            if($success)
            {
                return $success;
            }
            else{
                return [];
            }
        }
        else{
            $sql2 = "INSERT INTO favoriteandblocked(UserId,TargetUserId,IsFavorite,IsBlocked)VALUES($spid,$id,0,0)"; 
            $result1 = mysqli_query($this->conn, $sql2);
            if($result1){
                $sql1 ="SELECT Id,UserId,TargetUserId,IsFavorite,IsBlocked FROM favoriteandblocked WHERE UserId=$spid AND TargetUserId=$id";
                $result = mysqli_query($this->conn, $sql1);
                $success = mysqli_fetch_assoc($result);
                if($success)
                {
                 return $success;
                }else{
                 return [];
                }
            }
            else{
                return [];
            }

           
        }

    }

    


    
}