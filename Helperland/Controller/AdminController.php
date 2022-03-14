<?php

class AdminController
{  
    function __construct()
    {   
        include('Model/AdminModel.php');
        $this->model = new AdminModel();
        
    }

    function servicerequestdata(){
        if($_SERVER["REQUEST_METHOD"] == "GET") {
            $result = $this->model->servicerequestdata1();
            echo json_encode($result);
        }
    }
}