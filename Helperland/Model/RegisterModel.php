<?php

class RegisterModel
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
    //     if($conn -> connect_error) {
    //         die('Connection Failed');
    //     }
    }
    public function validation($array){
        $email=$array['email'];
        $qry = "select * from user1 where  email='$email'";
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
             $sql = "INSERT INTO user1 ( userType,firstname , lastname , email , number,password,confirmpassword)
            VALUES ( '$userType','$firstname','$lastname','$email','$number','$password','$confirmpassword')";
            $result = mysqli_query($this->conn, $sql);

            return $result;
           
            if ($result = 'yes') {
                $_SESSION['message'] = "Message Has Been Sent Succesfully";
            } else {
                $_SESSION['message'] = "Your Account is not Created Please Try Again.";
            }
            return $_SESSION['message'];
    }
    public function login($array){
        $email = $array['email'];
        $password = $array['password'];
        $sql= "select * from user1 where email='$email' and password='$password'";
        $result = mysqli_query($this->conn, $sql);
        if(mysqli_num_rows($result) > 0){
            return mysqli_fetch_assoc($result);
            
        }
        else{
            return [];
        }

    }
}
?>
