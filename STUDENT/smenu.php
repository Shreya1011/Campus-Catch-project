<?php
include "authguard.php";
$email=$_SESSION['email']; 
$stname=$_POST['sname'];
$contact=$_POST['contact_no'];
$sid=$_POST['smartid'];
$course_enrolled=$_POST['course'];
$sdetail=$_POST['details'];
$hostels=$_POST['Hostel'];
$CGPA=$_POST['cgpa'];
$lprofile=$_POST['Linkedin'];


print_r($_FILES['pdtimg']['tmp_name']);
$dest_file_path="../shared/images/".$_FILES['pdtimg']['name'];
move_uploaded_file($_FILES['pdtimg']['tmp_name'],$dest_file_path);
echo"<br>";
//$conn=new mysqli("localhost","root","","college");
include_once "../shared/connection.php";
$status=mysqli_query($conn,"insert into student(sname,email,contact_no,smartid,course,details,impath,Hostel,cgpa,Linkedin) values('$stname','$email','$contact','$sid','$course_enrolled','$sdetail','$dest_file_path','$hostels','$CGPA','$lprofile')");
if($status){
   echo "Dashboard created";
   header("location:fetch2.php");
}
else{
   echo "Error";
   echo mysqli_error($conn);
}
?>