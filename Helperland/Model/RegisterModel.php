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
    public function Registration($array)
    {
       
        $firstname =  $array['firstname'];
        $lastname =  $array['lastname'];
        $email = $array['email'];
        $number = $array['number'];
        $password = $array['password'];
        $confirmpassword = $array['confirmpassword'];

        // function checkUser($firstname , $email){
        //     $stamt = $this->conn()->prepare('select firstname from user1 where firstname=? OR email = ?;');
        //     if(!$stamt->execute(array($firstname , $email))){
        //         $stamt = null;
        //         echo ("already Register");
        //     }
        //     $resultCheck;
        //     if($stamt->rowCount() > 0 ){
        //         $resultCheck = false;

        //     }
        //     else{
        //         $resultCheck = true;
        //     }
        //     return $resultCheck;
        // }
        //  function setUser($firstname,$lastname,$email,$number,$password,$confirmpassword){
            $sql = "INSERT INTO user1 ( firstname , lastname , email , number,password,confirmpassword)
            VALUES ( '$firstname','$lastname','$email','$number','$password','$confirmpassword')";
            $result = mysqli_query($this->conn, $sql);
            return $result;
           
            if ($result = 'yes') {
                $_SESSION['message'] = "Message Has Been Sent Succesfully";
            } else {
                $_SESSION['message'] = "Your Account is not Created Please Try Again.";
            }
            return $_SESSION['message'];
        // }
        

    }


}
?>
