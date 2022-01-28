<?php
 include_once("../Model/index_model.php");

 Class Controller{
  public $data;
    public function __construct($data){
        $this->data=$data;
    }
   
    public function Contact()
    {
      
       $result="";
         if(isset($this->data['submit'])){
            $obj=new insertcontact($this->data);
            $result = $obj->insert_data();
         }

         if($result){
             header("location: ../View/contact.php");
          }
          else{
              echo ("not success");
          }
    
    
        }
}
 $var= new Controller($_POST);
 $var->Contact();
?>