<?php
include "authguard.php";
include "menu.html";
$email=$_SESSION['email'];
include_once "../shared/connection.php";

$result = mysqli_query($conn, "SELECT * FROM alumni where email='$email'");

if ($result && mysqli_num_rows($result) > 0) {
     $row = mysqli_fetch_assoc($result);
    echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Profile</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: beige; 
        color: #5C4033;
    }


    .faculty-card {
        margin-bottom: 20px;
        text-align: center; 
        color: #37474f;
        background-color: #B19470; 
        margin-left:10%;
        margin-right:10%;
    }

    .faculty-card img.profile-pic {
        max-width: 200px; 
        height: 200px;
        border-radius: 50%;
        margin-top: 25px;
        margin-bottom: 10px;
        border: 3px solid #37474f;
        object-fit: cover;
    }

    .faculty-card img.timetable-img {
        max-width: 400px; 
        height: auto;
        display: block;
        margin: 10px auto;
        border-radius: 5px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        object-fit: cover;
    }

    .faculty-card h2,
    .faculty-card p {
        margin: 0; 
    }

    .faculty-card h2 {
        color: #000000; 
    }

    .faculty-card a {
        color:black;
        text-decoration: none;
    }

    .faculty-card a:hover {
        text-decoration: underline;
    }

    .form-control {
        width: 100%;
        padding: 12px;
        margin-top: 15px;
        border: 1px solid #90a4ae; 
        border-radius: 5px;
        box-sizing: border-box;
        outline: none;
        transition: border-color 0.3s;
        background-color: #f5f5dc; 
    }

    .form-control:focus {
        border-color: #607d8b; 
    }

    .btn {
        background-color: #607d8b; /* Blue Grey */
        color: #fff;
        border: none;
        
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .btn:hover {
        background-color: #455a64; 
    }

    .text-center {
        text-align: center;
    }

    h1 {
        color: #37474f; 
    }

    input[type="file"] {
        background-color: #f5f5dc; 
        border: 1px solid #90a4ae; 
    }
    .faculty-card p{
        border:2px solid black;
        color:#000000;
        margin-left:90px;
        margin-right:90px;
    }  
</style>
</head>
<body>
<div class="container">';

    
  

       echo "<div class='faculty-card'>";
    
    
        $impath = $row['impath'];
        echo "<h2>Alumni Profile</h2>";
        echo "<img src='". $row['impath'] ."' class='profile-pic'>";
        echo "<h2>" . $row["aluname"] . "</p></h2>";
        echo "<p>Email :" . $row["email"] . "</p>";
        echo "<p>Contact No :" . $row["contact_no"] . "</p>";
        echo "<p>Batch :" . $row["batch"] . "</p>";
        echo "<p>Designation : " . $row["designation"] . "</p>";
        echo "<p>LinkedIn Profile : <a href='" . $row["Linkedln_Profile"] . "'>" . $row["Linkedln_Profile"] . "</a></p>";
        echo "<p>Events Description :" . $row["Events_Management"] . "</p>";
        echo "<p>Events Link :" . $row["Events_link"] . "</p>";
        
        echo "<hr>";
        echo "<a href='edit.php?email={$row['email']}' class='btn btn-primary'>Edit Profile</a>";
        echo "</div>";
    
    echo '</div>
</body>
</html>';
} else {
    echo "No data found";
}
mysqli_close($conn);
?>
