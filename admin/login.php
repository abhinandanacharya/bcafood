<?php
session_start();
include '../cdn.php';
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
</head>
<body>
	<?php 
	include '../connection.php';

    include 'login-admin-nav.php';
    if(isset($_POST['username'])){
        // echo "select id from login where username='".$_POST['username']."' and password='".$_POST['password']."'";
        $data=mysqli_num_rows(mysqli_query($conn,"select id from login where username='".$_POST['username']."' and password='".$_POST['password']."'"));
        if($data==1){
            // echo "hello";exit;
            $_SESSION['admin_login']="LoginIn";
            header("location:index.php");
        }
        
    }
	?>
    <form method="post">
        <table class="table table-striped table-bordered" style="width:100%">
            <tbody>
                <tr>
                    <td colspan="2"><a href="vegetable.php">Login Form</a></td>
                </tr>
                <tr>
                    <th>Username</th>
                    <td><input type="text" class="form-control" name="username"></td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td><input type="password" class="form-control" name="password"></td>
                </tr>
                <tr>
                    <th colspan="2"><input type="submit" value="Submit"></th>
                </tr>
            </tbody>
        </table>
    </form>
</body>
</html>