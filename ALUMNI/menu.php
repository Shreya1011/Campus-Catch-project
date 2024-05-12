<?php
include "authguard.php"; 
$email=$_SESSION['email'];
$uname = $_POST['aluname'];
$contact = $_POST['contact_no'];
$bat = $_POST['batch'];
$desig = $_POST['designation'];
$profile = $_POST['Linkedln_Profile'];
$eventsl = $_POST['Events_link'];
$events = $_POST['Events_Management'];

print_r($_FILES['pdtimg']['tmp_name']);
$dest_file_path="../shared/images/".$_FILES['pdtimg']['name'];
move_uploaded_file($_FILES['pdtimg']['tmp_name'],$dest_file_path);
echo"<br>";
include_once "../shared/connection.php";
$status=mysqli_query($conn,"insert into alumni(aluname,email,contact_no,batch,designation,Linkedln_Profile,Events_Management,Events_link,impath) values('$uname','$email','$contact','$bat','$desig','$profile','$events','$eventsl','$dest_file_path')");
if($status){
   echo "Dashboard created";
   header("location:fetch1.php");
}
else{
   echo "Error";
   echo mysqli_error($conn);
}
?>