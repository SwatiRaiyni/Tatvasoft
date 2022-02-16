<?php

class BookController
{
    function __construct()
    {
        include('Model/BookModel.php');
        $this->model = new BookModel();
    }
    public function BookNow(){
        include("./View/booknow.php");

    }
    public function postalcodeavailability(){
        
        if($_SERVER["REQUEST_METHOD"] == "POST") {
           $code =  $_POST['postalcode'];
           $result = $this->model->checkcode($code);
        }
    }
    public function tabtwo(){
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $array = [];
            if(isset($_POST['insideCabinet'])){
                array_push($array,1);
            }
            if(isset($_POST['insideFridge'])){
                array_push($array,2);
            }
            if(isset($_POST['insideOven'])){
                array_push($array,3);
            }
            if(isset($_POST['laundry'])){
                array_push($array,4);
            }
            if(isset($_POST['interior'])){
                array_push($array,5);
            }
            session_start();
            $_SESSION['array']=$array;
            
           $result = $this->model->tabsecond();
          
        }
    }
    public function tabthree(){
        if($_SERVER["REQUEST_METHOD"] == "GET") {
            $result = $this->model->tabthird();
        } 
    }
    public function tabfour(){
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            
                $result = $this->model->tabfour();
            
        }
    }
    public function AddAddress(){
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $streetname =  $_POST['streetname'];
            $houseno = $_POST['houseno'];
            $code = $_POST['code'];
            $city = $_POST['city'];
            $mobile=$_POST['mobile'];
            $array = [
                'streetname' => $streetname,
                'houseno'=> $houseno,
                'code'=> $code,
                'city' => $city,
                 'mobile' => $mobile
            ];
            $result = $this->model->addaddress($array);
          
        }
    }
    public function Completebooking(){
        if($_SERVER["REQUEST_METHOD"] == "POST") {

            $postalcode = $_POST['postalcode'];
            // $cabinet = $_POST['cabinet'];
            // $window = $_POST['window'];
            // $fridge = $_POST['fridge'];
            // $oven = $_POST['oven'];
            // $laundry = $_POST['laundry'];
            $serviceStartDate = $_POST['serviceStartDate'];
            $serviceHours = $_POST['serviceHours'];
            $extraHours = $_POST['extraHours'];
            $subTotal = $_POST['subTotal'];
            $totalCost = $_POST['totalCost'];
            $comments = $_POST['comments'];
            $paymentDue = $_POST['paymentDue'];
            $havepets = $_POST['havepets'];
            $paymentDone = $_POST['paymentDone'];
            $addressId = $_POST['addressId']; 
            $array = [
                    'postalcode' => $postalcode,
                    
                    'serviceStartDate'=> $serviceStartDate,
                    'serviceHours'=> $serviceHours,
                    'extraHours' => $extraHours,
                    'subTotal' => $subTotal,
                    'totalCost' => $totalCost,
                    'comments'=> $comments,
                    'paymentDue'=> $paymentDue,
                    'havepets' => $havepets,
                    'paymentDone' => $paymentDone,
                    'addressId' => $addressId
            ];
            // $name =[
            //     'cabinet' => $cabinet,
            //         'window' => $window,
            //         'fridge' => $fridge,
            //         'oven' => $oven,
            //         'laundry' => $laundry,
            // ];
            
            $result = $this->model->bookingdone($array);
            
            
        }
    }

    
}
?>