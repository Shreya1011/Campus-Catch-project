<?php

include "menu.html";
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

    $result = mysqli_query($conn, "SELECT * FROM alumni WHERE email='$profile_id'");

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
    $dest="../shared/images/".$_FILES['dest']['name'];
    move_uploaded_file($_FILES['dest']['tmp_name'],$dest);
    $Contact=$_POST['Contact'];
    $Batch=$_POST['Batch'];
    $designation = $_POST['designation'];
    $LProfile=$_POST['LProfile'];
    $Emgmt=$_POST['Emgmt'];
    $Emgmtl=$_POST['Emgmtl'];
    $update_query = "UPDATE alumni SET impath='$dest',contact_no='$Contact',batch='$Batch',designation='$designation',Linkedln_Profile='$LProfile',Events_Management='$Emgmt',Events_link='$Emgmtl'  WHERE  email='$profile_id'";
    $update_result = mysqli_query($conn, $update_query);

    if($update_result) {
        echo "Profile updated successfully";
        
    } else {
        echo "Error updating profile";
    }
}

mysqli_close($conn);
?>


    <form method="POST" enctype="multipart/form-data">

        <label for="dest">Profile pic :</label>
        <input type="file" name="dest"><br>
        
        <label for="Contact">Contact_no:</label>
        <input type="mobile" name="Contact" value="<?php echo $profile['contact_no']; ?>"><br>

        <label for="Batch">Batch:</label>
        <input type="integer" name="Batch" value="<?php echo $profile['batch']; ?>"><br>
        
        <label for="designation">Designation:</label>
        <input type="text" name="designation" value="<?php echo $profile['designation']; ?>"><br>

        <label for="LProfile">Linkedin_profile:</label>
        <input type="text" name="LProfile" value="<?php echo $profile['Linkedln_Profile']; ?>"><br>

        <label for="Emgmt">Events_description:</label>
        <input type="text" name="Emgmt" value="<?php echo $profile['Events_Management']; ?>"><br>
        <label for="Emgmtl">Events_link:</label>
        <input type="text" name="Emgmtl" value="<?php echo $profile['Events_link']; ?>"><br>


        <button type="submit">Update Profile</button>
    </form>
</body>
</html>
