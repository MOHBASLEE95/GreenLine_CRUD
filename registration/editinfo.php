<?php
session_start();

include('config.php');
$id=$_GET['id'];// get  id
if(isset($_POST['submit']))
{ 

  
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];

$doc = $_FILES['file']['name'];
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
 
 $sql=mysqli_query($con,"Update fusers set first_name='$first_name',last_name='$last_name',email='$email',file='$doc' where id='$id'");
if($sql)
{
$_SESSION['msg']="Details updated Successfully";
header('location:display.php');
}
else{
  $_SESSION['err']=mysqli_error($con);
}
}
}
?>







<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Bootstrap Simple Registration Form</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
  color: #fff;
  background: #63738a;
  font-family: 'Roboto', sans-serif;
}
.form-control {
  height: 40px;
  box-shadow: none;
  color: #969fa4;
}
.form-control:focus {
  border-color: #5cb85c;
}
.form-control, .btn {        
  border-radius: 3px;
}
.signup-form {
  width: 450px;
  margin: 0 auto;
  padding: 30px 0;
    font-size: 15px;
}
.signup-form h2 {
  color: #636363;
  margin: 0 0 15px;
  position: relative;
  text-align: center;
}
.signup-form h2:before, .signup-form h2:after {
  content: "";
  height: 2px;
  width: 30%;
  background: #d4d4d4;
  position: absolute;
  top: 50%;
  z-index: 2;
} 
.signup-form h2:before {
  left: 0;
}
.signup-form h2:after {
  right: 0;
}
.signup-form .hint-text {
  color: #999;
  margin-bottom: 30px;
  text-align: center;
}
.signup-form form {
  color: #999;
  border-radius: 3px;
  margin-bottom: 15px;
  background: #f2f3f7;
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  padding: 30px;
}
.signup-form .form-group {
  margin-bottom: 20px;
}
.signup-form input[type="checkbox"] {
  margin-top: 3px;
}
.signup-form .btn {        
  font-size: 16px;
  font-weight: bold;    
  min-width: 140px;
  outline: none !important;
}
.signup-form .row div:first-child {
  padding-right: 10px;
}
.signup-form .row div:last-child {
  padding-left: 10px;
}     
.signup-form a {
  color: #fff;
  text-decoration: underline;
}
.signup-form a:hover {
  text-decoration: none;
}
.signup-form form a {
  color: #5cb85c;
  text-decoration: none;
} 
.signup-form form a:hover {
  text-decoration: underline;
}  
</style>
</head>
<body>

<div class="signup-form">
    <form role="form" name="record" method="post" enctype='multipart/form-data'  class="contact100-form validate-form">
    <h2>Register</h2>
    <p class="hint-text"><?php
        if (isset($_SESSION['msg'])) {
           echo htmlentities($_SESSION['msg']);
                echo htmlentities($_SESSION['msg']="");


        }

        if (isset($_SESSION['err'])) {
           echo htmlentities($_SESSION['err']);
                echo htmlentities($_SESSION['err']="");
              }
        ?></p>

<?php $sql=mysqli_query($con,"select * from fusers where id= '".$_GET['id']."'");

while($row=mysqli_fetch_array($sql))
{
?>
        <div class="form-group">
      <div class="row">
        <div class="col"><input type="text" class="form-control" name="first_name" placeholder="First Name" required="required" value="<?php echo htmlentities($row['first_name']);?>"></div>
        <div class="col"><input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required" value="<?php echo htmlentities($row['last_name']);?>"></div>
      </div>          
        </div>
        <div class="form-group">
          <input type="email" class="form-control" name="email" placeholder="Email" required="required" value="<?php echo htmlentities($row['email']);?>">
        </div>
         <div class="form-group">
          <input type="file" class="form-control" name="file" placeholder="Email" required="required" value="<?php echo htmlentities($row['file']);?>">
        </div>
    

        
    <div class="form-group">
            
            <button class="btn btn-success btn-lg btn-block" type="submit" name="submit"> UPDATE</button>
        </div>
       <?php
     }
       ?>

    </form>
  
</div>
</body>
</html>