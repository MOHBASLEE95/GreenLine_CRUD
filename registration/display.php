<?php
session_start();

include('config.php');


if(isset($_GET['del']))
      {
        
              mysqli_query($con,"delete from fusers where id = '".$_GET['id']."'");
                  $_SESSION['msg']="data deleted !!";
                  header('location:display.php');
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
  width: 800px;
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
    
<form method="get" class="contact100-form validate-form">
        
<p style="color:Blue;"><?php
        if (isset($_SESSION['msg'])) {
           echo htmlentities($_SESSION['msg']);
                echo htmlentities($_SESSION['msg']="");
        }
        ?></p>  
                  <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                      <tr>
                        <th class="center">Id</th>
                        <th class="hidden-xs"> First Name</th>
                        
                        <th class="hidden-xs">Last Name</th>
                        <th class="hidden-xs">E-mail</th>
                        <th class="hidden-xs"> File</th>
                        <th>Action</th>
                        
                      </tr>
                    </thead>
                    <tbody>


<?php $sql=mysqli_query($con,"select * from fusers ");

while($row=mysqli_fetch_array($sql))
{
?>

                      <tr>
                        <td><?php echo $row['id'];?>
                        </td>
                        
                        
                      
                        
                        <td><?php echo $row['first_name'];?>
                        </td>
                        
                        <td><?php echo $row['last_name'];?></td>
                        <td><?php echo $row['email'];?>
                        </td>
                        <td><?php echo $row['file'];
                          
                        ?></td>
                        
                        
                        
                        <td >
                        <div class="visible-md visible-lg hidden-sm hidden-xs">
              <a href="editinfo.php?id=<?php echo $row['id'];?>" class="btn btn-transparent btn-xs" tooltip-placement="top" tooltip="Edit"><i class="fa fa-pencil"></i></a>
                          
  <a href="display.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Remove"><i class="fa fa-times fa fa-white"></i></a>
                        </div>
                        <?php }?>
                        </span>
                            </button>
                          
                              
                            </ul>
                          </div>
                        </div></td>
                      </tr>
                      
                      
                      
                      
                    </tbody>
                  </table>
        
        

              </form>
</div>
</body>
</html>