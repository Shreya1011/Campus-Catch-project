<?php
$uname=$_POST['username'];
$utype=$_POST['user_type'];
$email=$_POST['email'];
$upass=$_POST['password'];
$upass1=$_POST['confirm_password'];

include_once "../shared/connection.php";
$status=mysqli_query($conn,"insert into user(username,user_type,email,password,confirm_password) values('$uname','$utype','$email','$upass','$upass1')");
if($status){
   
   echo "<div style='text-align: center; background-color: white;'><img src='images/registration.png' alt='Image' style='width: 500px; height: 200px; margin-top:10% '><br><a href='login.html'>Click here</a> to go back to login.</div>";

}
else{
   echo "<div style='text-align: center; background-color: beige;'><img src='images/oops.jpeg' alt='Image' style='width: 500px; height: 500px; border-radius:50%'><br>Error in Registration</div>";

   
   echo mysqli_error($conn);
}
?>