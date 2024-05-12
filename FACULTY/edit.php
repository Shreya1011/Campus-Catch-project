<?php

include "fmenu.html";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="../assets/css/style.css">
   
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #EBD9B4;
            margin: 10;
            padding: 0px;
        }
        form {
            max-width: 700px;
            margin: 10px auto;
            padding: 20px;
            background-color:#CD8D7A ; 
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 5px;
            color:  #37474f; 
        }
        input[type="text"], input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #607d8b; 
            color: white;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #455a64; 
        }
        .fixed{
            background: url(..//image/gathering3.jpg);
            margin: 0px;
        }
    </style>
</head>
<body>

<?php


include_once "../shared/connection.php";

if(isset($_GET['email'])) {
    $profile_id = $_GET['email'];
    $result = mysqli_query($conn, "SELECT * FROM faculty WHERE email='$profile_id'");

    if(mysqli_num_rows($result) == 1) {
        $profile = mysqli_fetch_assoc($result);
    } else {
        echo "Profile not found";
        exit;
    }
} else {
    echo "Profile email not provided";
    exit;
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $dom1=$_POST['dom1'];
    $cont1=$_POST['cont1'];
    $gdrive1=$_POST['gdrive1'];
    $depart1=$_POST['depart1'];
    $Research1=$_POST['Research1'];
    $lprofile1=$_POST['lprofile1'];


    
    $dest="../shared/images/".$_FILES['dest']['name'];
    move_uploaded_file($_FILES['dest']['tmp_name'],$dest);

    $dest1="../shared/images/".$_FILES['dest1']['name'];
    move_uploaded_file($_FILES['dest1']['tmp_name'],$dest1);

    $update_query = "UPDATE faculty SET Name='$name', Designation='$designation', impath='$dest', impath1='$dest1',domain='$dom1',contact='$cont1',drive='$gdrive1',department='$depart1',research='$Research1',Linkedin='$lprofile1' WHERE  email='$profile_id'";
    $update_result = mysqli_query($conn, $update_query);

    if($update_result) {
        echo "Profile updated successfully";
        
        exit;
    } else {
        echo "Error updating profile";
    }
}

mysqli_close($conn);
?>

    <form method="POST" enctype="multipart/form-data">
        <label for="name">Name :</label>
        <input type="text" name="name" value="<?php echo $profile['Name']; ?>"><br>

        <label for="designation">Designation :</label>
        <input type="text" name="designation" value="<?php echo $profile['Designation']; ?>"><br>

        <label for="dest">Profile pic :</label>
        <input type="file" name="dest"><br> <!-- Changed input type to file -->

        <label for="dest1">Schedule :</label>
        <input type="file" name="dest1"><br> <!-- Changed input type to file -->

        <label for="dom1">Domain :</label>
        <input type="text" name="dom1" value="<?php echo $profile['domain']; ?>"><br>

        <label for="cont1">Contact :</label>
        <input type="mobile" name="cont1" value="<?php echo $profile['contact']; ?>"><br>

        <label for="gdrive1">Drive link :</label>
        <input type="text" name="gdrive1" value="<?php echo $profile['drive']; ?>"><br>

        <label for="lprofile1">Linkedin profile :</label>
        <input type="text" name="lprofile1" value="<?php echo $profile['Linkedin']; ?>"><br>

        <label for="Research1">Research :</label>
        <input type="text" name="Research1" value="<?php echo $profile['research']; ?>"><br>

        <label for="depart1">Department :</label>
        <input type="text" name="depart1" value="<?php echo $profile['department']; ?>"><br>
        

        <button type="submit">Update Profile</button>
    </form>
</body>
</html>
