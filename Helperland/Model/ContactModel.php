<?php
class ContactModel
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
           
    }

    public function Mail(){
      $sql = "SELECT UserTypeId,Email FROM user WHERE UserTypeId=3";
      $result =mysqli_query($this->conn, $sql);
      $res2 = mysqli_fetch_assoc($result);
      return $res2;

    }

}
?>