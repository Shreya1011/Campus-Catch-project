<?php
session_start();
$_SESSION['login_status']=false;

$uname=$_POST['username'];
$upass=$_POST['password'];







//$conn=new mysqli("localhost","root","","college");
include_once "../shared/connection.php";
$sql_cursor=mysqli_query($conn,"SELECT * FROM user WHERE username='$uname' AND password='$upass'");
$matched_row_count=mysqli_num_rows($sql_cursor);
if($matched_row_count==0){
    echo "<div style='text-align: center; background-color: beige;'><img src='images/oops.jpeg' alt='Image' style='width: 500px; height: 500px; border-radius'><br>Invalid Credentials. <a href='login.html'>Click here</a> to go back to login page.</div>";

}
else{ 
    echo "Login Success";
    $row=mysqli_fetch_assoc($sql_cursor);
    $email=$row['email'];
    $username=$row['username'];
    $user_type=$row['user_type'];

    if($user_type=="alumni"){ 
        $_SESSION['login_status']=true;
        $_SESSION["email"]=$email;
        $_SESSION["user_type"]=$user_type;
        $_SESSION["username"]=$username;
        header("location:../ALUMNI/main.php");    
    }
    else if($user_type=="faculty"){
        $_SESSION['login_status']=true;
        $_SESSION["email"]=$email;
        $_SESSION["user_type"]=$user_type;
        $_SESSION["username"]=$username;
        header("location:../FACULTY/main.php");
    }
    else if($user_type=="student"){
        $_SESSION['login_status']=true;
        $_SESSION["email"]=$email;
        $_SESSION["user_type"]=$user_type;
        $_SESSION["username"]=$username;
        header("location:../STUDENT/main.php");
    }
}
?>
