<?php

   Class insertcontact{
    public $data;
    public function __construct($data){
      $this->data = $data;
    }
  
   
  public function insert_data()
  {
   
    $conn = new mysqli('localhost','root','swati','helperland');
    if($conn->connect_error){
        echo "Connection unSuccessfully";
        die("Something went wrong");
    }
        $name=$this->data['firstname'];
        $number=$this->data['number'];
        $email=$this->data['email'];

       
    
    $qry="INSERT INTO contactus (Name,Email,PhoneNumber,SubjectType,Message) VALUES ('$name','$email','$number','444','asd')";

    $result = $conn->query($qry);
   return $result;
  
  }
 }
?>