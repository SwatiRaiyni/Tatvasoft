
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
        if($count == 1){
        unset($_SESSION['postalcode']);
        $_SESSION['postalcode'] = $code;
        echo json_encode("Yes");
        }
        else{
            echo json_encode("No");
        }
    }
    public function tabsecond(){
        echo json_encode("yes");
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
        echo json_encode($emparray);
    }
    public function tabfour(){
        echo json_encode("yes");
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
        if (mysqli_query($this->conn, $sql)) {
            echo json_encode("yes");
        } 
        else{
            echo json_encode("no");
        }
    }
    public function bookingdone($array){
        session_start(); 
        if(isset($_SESSION['userdata'])){
            $userdata=$_SESSION['userdata'];
        }
        $postalcode = $array['postalcode'];
        // $cabinet = $array['cabinet'];
        // $window = $array['window'];
        // $fridge = $n['fridge'];
        // $oven = $name['oven'];
        // $laundry = $name['laundry'];
        $serviceStartDate = $array['serviceStartDate'];
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
        PaymentDue,PaymentDone,HasPets,	CreatedDate,ModifiedDate,HasIssue) VALUES('{$userdata['UserId']}',
        $rand,'$serviceStartDate','$postalcode',
        25,'$serviceHours','$extraHours','$subTotal',
        '$totalCost','$comments',$paymentDue,true,$havepets,curdate(),curdate(),false)";
        $qry1 =  mysqli_query($this->conn, $sql); 
        if ($qry1) {
            $last_id = mysqli_insert_id($this->conn);
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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

        if ($qry1 &&  $add1 && $srextra1) {
             echo json_encode("yes");
        } 
        else{
            echo json_encode("no");
        }
    
    }

}
?>