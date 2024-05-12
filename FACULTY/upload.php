<?php
include "authguard.php";
$email=$_SESSION['email']; 
$uname=$_POST['Name'];
$desig=$_POST['Designation'];
$dom=$_POST['domain'];
$cont=$_POST['contact'];
$gdrive=$_POST['drive'];
$depart=$_POST['department'];
$Research=$_POST['research'];
$lprofile=$_POST['Linkedin'];

//print_r($_FILES);
print_r($_FILES['pdtimg']['tmp_name']);
$dest_file_path="../shared/images/".$_FILES['pdtimg']['name'];
move_uploaded_file($_FILES['pdtimg']['tmp_name'],$dest_file_path);
echo"<br>";

print_r($_FILES['pdtimg1']['tmp_name']);
$dest_file_path1="../shared/images/".$_FILES['pdtimg1']['name'];
move_uploaded_file($_FILES['pdtimg1']['tmp_name'],$dest_file_path1);
echo"<br>";

include_once "../shared/connection.php";
$status=mysqli_query($conn,"insert into faculty(Name,email,Designation,impath,impath1,domain,contact,drive,department,research,Linkedin) values('$uname','$email','$desig','$dest_file_path','$dest_file_path1','$dom','$cont','$gdrive','$depart','$Research','$lprofile') ");
if($status){

    echo "Profile created successfully!";
    header("location:fetch.php");
}
else{
    echo "Error";
    echo mysqli_error($conn);
}
?>