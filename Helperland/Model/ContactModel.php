<?php
class ContactModel
{

    /* Creates database connection */
    public function __construct()
    {

        $db_host = "localhost";
        $db_user = "root";
        $db_password = "swati";
        $db_name = "helperland";
      
      //   Create Connection
         $this->conn = mysqli_connect($db_host,$db_user,$db_password,$db_name);
     
      // Checking Connection
      //  if($conn -> connect_error) {
        //     die('Connection Failed');
         //}
    }

    public function ContactUs($array)
    {
         $name = $array['name'];
         $email = $array['email'];
          $sub = $array['sub'];
         $mobile = $array['mobile'];
          $msg = $array['msg'];
          $filename = $array['filename'];
            $sql = "INSERT INTO contactus (Name , Email , Subject , PhoneNumber , Message,FileName)
            VALUES ('$name' ,'$email','$sub','$mobile','$msg','$filename')";
            $result =mysqli_query($this->conn, $sql);
            return $result;
           
            if ($result == 'true') {
                $_SESSION['message'] = "Message Has Been Sent Succesfully";
            } else {
                $_SESSION['message'] = "Your Account is not Created Please Try Again.";
            }
            return $_SESSION['message'];
    }

}
?>