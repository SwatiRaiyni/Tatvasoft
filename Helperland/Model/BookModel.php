
<?php

 //echo $userdata['UserId'];die;
class BookModel
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
    }
    public function checkcode($code){ 
        session_start();
        $sql = "SELECT * FROM zipcode WHERE ZipcodeValue = '$code'";
       $postalcode = 'postalcode';
        $result =mysqli_query($this->conn, $sql);
        $count=$result->num_rows;
        unset($_SESSION['postalcode']);
        $_SESSION['postalcode'] = $code;
        return $count;
       
    }
    
    public function tabthird(){
        session_start(); 
        $postalcode = 'postalcode';
        if(isset($_SESSION['userdata'])){
            $userdata=$_SESSION['userdata'];
        }
         $sql= "select * from useraddress where UserId=". $userdata['UserId'] ." and PostalCode=".$_SESSION['postalcode'];  
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
    public function bookingdone($array){
        session_start(); 
        if(isset($_SESSION['userdata'])){
            $userdata=$_SESSION['userdata'];
        }
        $postalcode = $array['postalcode'];
        $serviceStartDate = $array['serviceStartDate'];

        //$datetime = date('Y-m-d H:i:s');
        //$date = date('Y-m-d', strtotime($datetime));
        //$time = date('H:i:s', strtotime($datetime));


       // $serviceStartDate = $serviceStartDate.' '.date('H:i:s');
        $serviceStartTime = $array['serviceStartTime']; 
        $serviceStartDate1 = $serviceStartDate.' '.$array['serviceStartTime']; 
        $serviceHours = $array['serviceHours'];
        $extraHours = $array['extraHours'];
        $subTotal = $array['subTotal'];
        $totalCost = $array['totalCost'];
        $comments = $array['comments'];
        $paymentDue = $array['paymentDue'];
        $havepets = $array['havepets'];
        $paymentDone = $array['paymentDone'];
        $addressId = $array['addressId'];
        $rand = rand(1000,2000);
        $sql = "INSERT INTO servicerequest(UserId,ServiceId,ServiceStartDate,ZipCode,ServiceHourlyRate,ServiceHours,
        ExtraHours,SubTotal,
        TotalCost,Comments,
        PaymentDue,PaymentDone,HasPets,HasIssue,Status) VALUES('{$userdata['UserId']}',
        $rand,'$serviceStartDate1','$postalcode',
        25,'$serviceHours','$extraHours','$subTotal',
        '$totalCost','$comments',$paymentDue,true,$havepets,false,1)";
        $qry1 =  mysqli_query($this->conn, $sql); 
        if ($qry1) {
            $last_id = mysqli_insert_id($this->conn);
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
          }


        $address = "SELECT * FROM useraddress where AddressId = '$addressId'";
        $add = mysqli_query($this->conn, $address);
        while($row =mysqli_fetch_assoc($add))
       {
        $qry = "INSERT INTO servicerequestaddress (ServiceRequestId,AddressLine1,AddressLine2,City,PostalCode,Mobile,Email) 
         VALUES ('$last_id','{$row['AddressLine1']}','{$row['AddressLine2']}',
         '{$row['City']}','{$row['PostalCode']}','{$row['Mobile']}','{$userdata['Email']}')";
        $add1 = mysqli_query($this->conn, $qry);
       }
       $array = $_SESSION['array'];
       $array1 = (int)implode("", $array); 
       $srextra = "INSERT INTO servicerequestextra (ServiceRequestId ,ServiceExtraId ) VALUES ('$last_id' , $array1)";
    
       $srextra1 = mysqli_query($this->conn, $srextra);
       $emparray = [];
       $emparray = array($qry1, $add1, $srextra1,$last_id);
       return $emparray;
        // if ($qry1 &&  $add1 && $srextra1) {
        //     $res['status'] = 'yes';
        //     $res['id'] = $last_id;
        // } 
        // else{
        //     $res['status'] = 'no';
        //     $res['id'] = 0;
        // }

       // echo json_encode($res);

    
    }

}
?>