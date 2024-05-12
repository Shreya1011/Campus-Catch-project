<?php
$conn=new mysqli("localhost","root","","college");
if($conn->connect_error){
    echo "Error in sql Connection";
    die;
}
?>