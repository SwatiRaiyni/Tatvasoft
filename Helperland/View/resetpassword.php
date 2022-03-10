
<?php  $base_url = 'http://localhost/TatvaSoft/Helperland/'; 
session_start();
if(isset($_SESSION['status3'])){ 
    $variablephp = $_SESSION['status3'];
?>

<script>
var variablejs = "<?php echo $variablephp; ?>" ;
alert("Error! = " + variablejs);
</script>
    
   
   <?php  unset($_SESSION['status3']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <title>Change your password</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel=stylesheet>
    <link rel='stylesheet' href="./assets/css/homepage.css">
   
</head>
<body>

<form action="<?= $base_url.'?controller=Register&function=getpassword'?>" method="post" accept-charset="utf-8">

<input type="hidden" class="form-control" placeholder="Password" name="token" value=<?php if(isset($_GET['token'])){ echo $_GET['token']; }?> />

    <center>
    
    <div  class="col-sm-4" style="margin:100px 0px 20px 0px;">
       <div class="form-group">
           <label>New Password</label>
          <input type="password" class="form-control" id="myInput" placeholder="Password" name="password">
       </div>
    </div>
    <div  class="col-sm-4">
        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" class="form-control" id="myInput1" placeholder="Confirm Password" name="confirmpassword" >
        </div>
    </div>
    
    
</center>
<div class="text-center" style="margin:20px 0px;">
    <button type="submit" name="submit" class="blue-btn1">save</a>
</div>

</form>
</body>
</html>