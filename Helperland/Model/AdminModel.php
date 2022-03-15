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

    function usermanagementdata1(){
        $sql = "SELECT FirstName,LastName,UserTypeId,DATE(CreatedDate) as CreatedDate,Mobile,ZipCode,IsApproved,UserId FROM user WHERE UserTypeId In (1,2)";
        $result = mysqli_query($this->conn, $sql); 
        $emparray = [];
        while($row = mysqli_fetch_assoc($result))
        {
            $emparray[] = $row;
        }
        return $emparray;
    }

    function getdata1(){
        $sql = "SELECT FirstName,LastName,UserId FROM user WHERE UserTypeId In (1,2) ";
        $result = mysqli_query($this->conn, $sql); 
        $emparray = $result->fetch_all(MYSQLI_ASSOC);
        return $emparray;
    }

    function getservicerequestcust1(){
        $sql = "SELECT FirstName,LastName,UserId FROM user WHERE UserTypeId=1 ";
        $result = mysqli_query($this->conn, $sql); 
        $emparray = $result->fetch_all(MYSQLI_ASSOC);
        return $emparray;
    }

   function getservicerequestsp1(){
    $sql = "SELECT FirstName,LastName,UserId FROM user WHERE UserTypeId=2 ";
    $result = mysqli_query($this->conn, $sql); 
    $emparray = $result->fetch_all(MYSQLI_ASSOC);
    return $emparray;
   }

    function searchdata1($array){
        $user_sel = $array['user_sel']; 
        $type_sel = $array['type_sel'];
        $mol_sel = $array['mol_sel'];
        $pos_sel = $array['pos_sel'];
        $email_sel = $array['email_sel'];
        $from_sel = $array['from_sel'];
        $to_sel = $array['to_sel'];

        $where = '';

        if($user_sel != '' ){ $where .= "UserId=".$user_sel." AND "; }
        if($type_sel != '' ){ $where .= "UserTypeId=".$type_sel." AND "; }
        if($mol_sel != '' ){ $where .= " Mobile=".$mol_sel." AND "; }
        if($pos_sel != '' ){ $where .= " ZipCode=".$pos_sel." AND "; }
        if($email_sel != '' ){ $where .= " Email='".$email_sel."' AND "; }
        if($from_sel != '' ){ 
            $from_sel = date('Y-m-d', strtotime(str_replace('/','-',$from_sel)));
            $where .= " DATE(CreatedDate) >= DATE('".$from_sel."') AND "; }
        if($to_sel != '' ){ 
            $to_sel = date('Y-m-d', strtotime(str_replace('/','-',$to_sel)));
            $where .= " DATE(CreatedDate) <= DATE('".$to_sel."') AND "; }
    
        $where = rtrim($where," AND");
       $sql = "SELECT * FROM user WHERE UserTypeId in (1,2) AND $where";
        $result = mysqli_query($this->conn, $sql);
        $emparray = [];
        if(!empty($result)){
            while($row = mysqli_fetch_assoc($result))
            {
                $emparray[] = $row;
            }
        }
        return $emparray;
    }

    function searchservicereq1($array){
        $id_sel = $array['id_sel']; 
        $zip_sel = $array['zip_sel'];
        $email_sel = $array['email_sel'];
        $cust_sel = $array['cust_sel'];
        $sp_sel = $array['sp_sel'];
        $status_sel = $array['status_sel'];
        $check_sel = $array['check_sel'];
        $fromd_sel = $array['fromd_sel']; 
        $tod_sel = $array['tod_sel'];

        $where = '';

        if($id_sel != '' ){ $where .= " a.ServiceRequestId=".$id_sel." AND "; }
        if($zip_sel != '' ){ $where .= " a.ZipCode=".$zip_sel." AND "; }
        if($email_sel != '' ){ $where .= " b.Email='".$email_sel."' AND "; }
        if($cust_sel != '' ){ $where .= " a.UserId=".$cust_sel." AND "; }
        if($sp_sel != '' ){ $where .= " a.ServiceProviderId=".$sp_sel." AND "; }
        if($status_sel != '' ){ $where .= " a.Status=".$status_sel." AND "; }
        if($check_sel != '' ){ $where .= " a.HasIssue=".$check_sel." AND "; }
        if($fromd_sel != '' ){ 
            $fromd_sel = date('Y-m-d', strtotime(str_replace('/','-',$fromd_sel)));
            $where .= " DATE(a.ServiceStartDate) >= DATE('".$fromd_sel."') AND "; }
        if($tod_sel != '' ){ 
            $tod_sel = date('Y-m-d', strtotime(str_replace('/','-',$tod_sel)));
            $where .= " DATE(a.ServiceStartDate) <= DATE('".$tod_sel."') AND "; }
        $where = rtrim($where," AND");
       $sql= "SELECT * FROM servicerequest as a join servicerequestaddress as b on a.ServiceRequestId = b.ServiceRequestId WHERE $where"; 
        $result = mysqli_query($this->conn, $sql);
        $emparray = [];
        $obj_merged =  (object)[];
        $obj_merged1 =  (object)[];
        if(!empty($result)){
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
    }
    return $emparray;
}
 

    function IsApprovedSP1($u_id){
      
        $sql="SELECT UserId,IsApproved FROM user WHERE UserId = ".$u_id; 
        $result = mysqli_query($this->conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
           
                if($row['IsApproved'] == 1){
                    $sql1 = "UPDATE user SET IsApproved=0 WHERE UserId=".$u_id;
                    $result1 = mysqli_query($this->conn, $sql1);
                }else{
                    $sql1 = "UPDATE user SET IsApproved=1 WHERE UserId=".$u_id;
                    $result1 = mysqli_query($this->conn, $sql1);
                }
        }
        if($result1){
            return "yes";
        }
        else{
            return "no";
        }
    }

    function edittimedate1($array){
        $id = $array['id']; 
        $getdate1 = $array['getdate1'];
        $gettime1 = $array['gettime1'];
        $mydate = date('Y-m-d', strtotime($getdate1));
        $mytime = date('H:i:s', strtotime($gettime1));
        $datetime = $mydate.' '.$mytime;
        $sql1 = "UPDATE servicerequest SET " . 
                "ServiceStartDate = '$datetime' " .
                "WHERE ServiceRequestId =". $id; 
       
        $result = mysqli_query($this->conn, $sql1);
        return $result;

    }

    function editaddress1($array){
        $id = $array['id']; 
        $sname1 = $array['sname1'];
        $hnumber1 = $array['hnumber1'];
        $pcode1 = $array['pcode1'];
        $city = $array['city'];
        $sql = "UPDATE servicerequestaddress SET " . 
        "AddressLine2 = '$sname1', " .
        "AddressLine1 = '$hnumber1' , " . 
        "PostalCode = '$pcode1' , " . 
        "City = '$city' " . 
        "WHERE ServiceRequestId =". $id; 
        $result = mysqli_query($this->conn, $sql);
        return $result;

    }

    function collectallemail($id){
       
        $sql = "SELECT a.ServicerequestId,b.Email,a.ServiceProviderId FROM servicerequest as a join servicerequestaddress as b  WHERE a.ServiceRequestId=$id AND b.ServiceRequestId=$id"; 
        $result = mysqli_query($this->conn, $sql);
       
        $obj_merged =  (object)[];
        while($row = mysqli_fetch_assoc($result)){
            if($row['ServiceProviderId'] != null){
                $sql = "SELECT Email as email FROM user WHERE userId=".$row['ServiceProviderId'];
                $result1 = mysqli_query($this->conn, $sql);
                while($row1 = mysqli_fetch_assoc($result1))
                {
                    $obj_merged = (object) array_merge((array) $row1, (array) $row['Email']);
                }
            }else{
                $obj_merged = $row;
            }
            
        }
        //echo'<pre>'; print_r($obj_merged);die;
        return $obj_merged;
        

    }
}