<?php
class AdminModel
{

    /* Creates database connection */
    public function __construct()
    {

        $db_host = "localhost";
        $db_user = "root";
        $db_password = "";
        $db_name = "helperland1";
        $this->conn = mysqli_connect($db_host,$db_user,$db_password,$db_name);
       
    }

    function servicerequestdata1(){
        session_start(); 
        if(isset($_SESSION['userdata'])){
            $userdata=$_SESSION['userdata'];
        }
        $sql= "SELECT * FROM servicerequest";
        $result = mysqli_query($this->conn, $sql);
        $emparray = [];
        $emparray1 = [];
        $obj_merged =  (object)[];
        $obj_merged1 =  (object)[];
         while($row = mysqli_fetch_assoc($result))
        {
            if($row['ServiceProviderId'] != null){
                
                $sql1= "SELECT FirstName,LastName,UserId,UserProfilePicture FROM user WHERE UserId=". $row['ServiceProviderId']; 
                $result1 = mysqli_query($this->conn, $sql1); 
                while($row1 = mysqli_fetch_assoc($result1))
                {
                    $obj_merged = (object) array_merge((array) $row1, (array) $row);
                }
                $sql12= "SELECT FirstName as custfname,LastName as custlname,UserId as custuserid FROM user WHERE UserId=". $row['UserId']; 
                $result12 = mysqli_query($this->conn, $sql12); 
                while($row12 = mysqli_fetch_assoc($result12))
                {
                    $obj_merged = (object) array_merge((array) $row12, (array) $obj_merged);
                }
                $sql2= "SELECT avg(Ratings) as sprating FROM rating WHERE RatingTo=". $row['ServiceProviderId'] ; 
                $result2 = mysqli_query($this->conn, $sql2); 
                while($row2 =mysqli_fetch_assoc($result2))
                {   
                    $obj_merged = (object) array_merge((array) $obj_merged, (array) $row2);
                   
                }
                $sql3 = "SELECT * FROM servicerequestaddress WHERE ServiceRequestId = ".$row['ServiceRequestId'];
                $result3 = mysqli_query($this->conn, $sql3); 
                while($row2 =mysqli_fetch_assoc($result3))
                { 
                  $obj_merged = (object) array_merge((array) $obj_merged, (array) $row2);
                }
                
                $emparray[] = $obj_merged;
            }
            else{
                $sql1= "SELECT FirstName as custfname,LastName as custlname,UserId FROM user WHERE UserId = ".$row['UserId']; 
                $result1 = mysqli_query($this->conn, $sql1); 
                while($row1 = mysqli_fetch_assoc($result1))
                {
                    $obj_merged1 = (object) array_merge((array) $row1, (array) $row);
                }
                $sql3 = "SELECT * FROM servicerequestaddress WHERE ServiceRequestId = ".$row['ServiceRequestId'];
                $result3 = mysqli_query($this->conn, $sql3); 
                while($row2 =mysqli_fetch_assoc($result3))
                { 
                  $obj_merged1 = (object) array_merge((array) $obj_merged1, (array) $row2);
                }
                
                $emparray[] = $obj_merged1;
            }
        }
      //     echo '<pre>'; print_r($emparray);die;
        return $emparray;

       
    }
}