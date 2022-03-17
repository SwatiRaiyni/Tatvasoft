<?php

class RegisterModel
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
    public function validation($array){
        $email=$array['email'];
        $qry = "select * from user where  Email='$email'";
        $result = mysqli_query($this->conn, $qry);
        if(mysqli_num_rows($result) > 0){
            return mysqli_fetch_assoc($result);
        }
        else{
            return [];
        }
    }
    public function Registration($array)
    {
        $firstname =  $array['firstname'];
        $lastname =  $array['lastname'];
        $email = $array['email'];
        $number = $array['number'];
        $password = $array['password'];
        $confirmpassword = $array['confirmpassword'];
        $userType = $array['userType'];
       
            $sql = "INSERT INTO user(FirstName,LastName , Email ,Password , Mobile,UserTypeId)
            VALUES ( '$firstname','$lastname','$email','$password','$number','$userType')";
             
            $result = mysqli_query($this->conn, $sql);
            return $result;
           
          
    }
    public function login($array){
        $email = $array['email'];
        $password = $array['password'];
        $sql= "select * from user where Email='$email' ";
        $result = mysqli_query($this->conn, $sql);
         if(mysqli_num_rows($result) > 0){
             return mysqli_fetch_assoc($result);
         }
         else{
             return [];
         }
    }

    public function passwordverify($array){
        $email = $array['email'];
        $password = $array['password'];
        $sql = "SELECT * FROM user WHERE Password='$password'";
        $result = mysqli_query($this->conn, $sql);
         if(mysqli_num_rows($result) > 0){
             return mysqli_fetch_assoc($result);
         }
         else{
             return [];
         }

    }
    public function forgotpassword($email){
      //  $email = $array['email'];
        $sql = "select * from user where Email='$email'";
        $result = mysqli_query($this->conn, $sql);
        if(mysqli_num_rows($result) > 0){
            return mysqli_fetch_assoc($result);
        }
        else{
            return [];
        }

    }
    public function getpassword($array){
        $token = $array['token'];
        $password = $array['password'];
        $confirmpassword = $array['confirmpassword'];
        $sql = "update user set Password='$password' where Userid=$token";
        $result = mysqli_query($this->conn, $sql);
        return $result;
        // if(mysqli_num_rows($result) > 0){
        //     return mysqli_fetch_assoc($result);
        // }
        // else{
        //     return [];
        // }

    }
}
?>
