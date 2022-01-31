<?php

class RegisterController{
    function __construct()
    {
        include('Model/RegisterModel.php');
        $this->model = new RegisterModel();
      
    }
    // public function HomePage()
    // {
       
    //     include("./View/homepage.php");
    // }
    public function Registration()
    {
   // echo $_POST['firstname'];

//         $nameErr = $emailErr = $mobilenoErr = $genderErr = $websiteErr = $agreeErr = "";  
//         $name = $email = $mobileno = $gender = $website = $agree = "";  
  
// //Input fields validation  
// if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      
// //String Validation  
//     if (empty($_POST['firstname'])) {  
//          echo  "Name is required";  
//     } else {  
//         //  $name = input_data($_POST['firstname']);  
//         //      // check if name only contains letters and whitespace  
//         //      if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
//         //          $nameErr = "Only alphabets and white space are allowed";  
//         //      }  
//     }  
      
//     //Email Validation   
//     if (empty($_POST["email"])) {  
//             echo "Email is required";  
//     } else {  
//             // $email = input_data($_POST["email"]);  
//             // // check that the e-mail address is well-formed  
//             // if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
//             //     $emailErr = "Invalid email format";  
//             // }  
//      }  
    
//     //Number Validation  
//     if (empty($_POST["number"])) {  
//             echo "Mobile no is required";  
//     } else {  
//         //     $mobileno = input_data($_POST["number"]);  
//         //     // check if mobile no is well-formed  
//         //     if (!preg_match ("/^[0-9]*$/", $mobileno) ) {  
//         //     $mobilenoErr = "Only numeric value is allowed.";  
//         //     }  
//         // //check mobile no length should not be less and greator than 10  
//         // if (strlen ($mobileno) != 10) {  
//         //     $mobilenoErr = "Mobile no must contain 10 digits.";  
//         //     }  
//     }  
      
//     // //URL Validation      
//     // if (emptyempty($_POST["website"])) {  
//     //     $website = "";  
//     // } else {  
//     //         $website = input_data($_POST["website"]);  
//     //         // check if URL address syntax is valid  
//     //         if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {  
//     //             $websiteErr = "Invalid URL";  
//     //         }      
//     // }  
      
//     // //Empty Field Validation  
//     // if (emptyempty ($_POST["gender"])) {  
//     //         $genderErr = "Gender is required";  
//     // } else {  
//     //         $gender = input_data($_POST["gender"]);  
//     // }  
  
//     // //Checkbox Validation  
//     // if (!isset($_POST['agree'])){  
//     //         $agreeErr = "Accept terms of services before submit.";  
//     // } else {  
//     //         $agree = input_data($_POST["agree"]);  
//     // }  
// }  
// function input_data($data) {  
//   $data = trim($data);  
//   $data = stripslashes($data);  
//   $data = htmlspecialchars($data);  
//   return $data;  
// }  
  
  
       
        if (isset($_POST)) {
             $base_url = "http://localhost/TatvaSoft/Helperland/";
             $firstname =  $_POST['firstname'];
             $lastname =  $_POST['lastname'];
             $email = $_POST['email'];
             $number = $_POST['number'];
             $password = $_POST['password'];
             $confirmpassword = $_POST['confirmpassword'];
            
           // $this->signupUser();
             

            //  function emptyInput(){
            //      $result;
            //      if(empty($firstname) || empty($lastname) || empty($email) || empty($number) || empty($password) || empty($confirmpassword) ){
            //         $result = false;
            //      }
            //      else{
            //          $result=true;
            //      }
            //      return $result;
            //  }
            //  function invalidUid(){
            //      $result;
            //      if(!preg_match("/^[a-zA-Z0-9]*$/",$firstname)){
            //          $result = false;
            //      }
            //      else{
            //          $result = true;
            //      }
            //      return $result;
            //  }
            //  function invalidEmail(){
            //      $result;
            //      if(!filter_var($this->email,FILTER_VALIDATE_EMAIL)){
            //          $result = false;
            //      }
            //      else{
            //          $result = true;
            //      }
            //      return $result;
            //  }
            //  function pwdMatch(){
            //      $result;
            //      if($password !== $confirmpassword){
            //          $result = false;
            //      }
            //      else{
            //          $result = true;
            //      }
            //      return $result;
            //  }
            //  function uidTakenCheck(){
            //      $result;
            //      if(!checkUser($firstname,$email)){
            //          $result = false;
            //      }
            //      else{
            //          $result = true;
            //      }
            //      return $result;
            //  }

             
            //  if(emptyInput() == false){
            //     echo " Empty input";
            //     //exit();
            // }
        //      if(invalidUid() == false){
        //          echo "Invalid username!";
        //    //      //exit();
        //     }
        //     if(invalidEmail() == false){
        //         echo "Invalid Email!";
        //    //     //exit();
        //     }
        //    if(pwdMatch() == false){
        //        echo "password don;t match!";
        //        //exit();
        //    }
        //    if(uidTakenCheck() == false){
        //        echo " Username or email taken!";
        //       // exit();
        //    }
        //    $this->setUser($firstname,$lastname,$email,$number,$password,$confirmpassword);
        
            
        //    //  $this->signupUser();
        //    signupUser();
             $array = [
                 'firstname' => $firstname,
                 'lastname' => $lastname,
                 'email'=> $email,
                 'number'=> $number,
                  'password' => $password,
                  'confirmpassword' => $confirmpassword
                ];
             $result = $this->model->Registration($array);
            // $_SESSION['firstname'] = $results[0];
            // header('Location:' . $base_url);
    //          if($result){
    //             echo "<div class='form'>
    // <h3>You are registered successfully.</h3>
    // <br/>Click here to <a href='login.php'>Login</a></div>";
    //         }
            
         }

    }
}

?>