<?php

include "smenu.html";
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
            margin: 0;
            padding: 0px;
        }
        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #CD8D7A; 
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
            background-color: #7D0A0A; 
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
<header id="site-header" class="fixed-top">
            <div class="container">
              <nav class="navbar navbar-expand-lg navbar-dark stroke">
                <h1>
                  <a class="navbar-brand" href="main.html" style="font-size: 40px;">Campus Catch</a>
                </h1>
                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                  data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                  aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                  <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                  </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                  <ul class="navbar-nav ml-lg-auto">
                      <li class="nav-item"><a class="nav-link" href="main.html"  style="font-size: 25px";>Home</a></li>
                      <li class="nav-item"><a class="nav-link" href="about.html"  style="font-size: 25px">About</a></li>
                      <li class="nav-item"><a class="nav-link" href="courses.html"  style="font-size: 25px">Program List</a></li>
                      <li class="nav-item"><a class="nav-link" href="main.html"  style="font-size: 25px">Faculty</a></li>
                      <li class="nav-item"><a class="nav-link" href="main.html"  style="font-size: 25px">Clubs</a></li>
                      <li class="nav-item"><a class="nav-link" href="main.html"  style="font-size: 25px">News</a></li>
                      <li class="nav-item"><a class="nav-link" href="Contact.html"  style="font-size: 25px">Contact</a></li>
                      <li class="nav-item"><a class="nav-link" href="faq.html"  style="font-size: 25px">FAQ</a></li>
                      <li class="nav-item"><a class="nav-link" href="userprofile.html"  style="font-size: 25px">Profile</a></li>
        
                  </ul>
                </div>
              </nav>
            </div>
          </header>
         
<?php


include_once "../shared/connection.php";

if(isset($_GET['email'])) {
    $profile_id = $_GET['email'];
    $result = mysqli_query($conn, "SELECT * FROM student WHERE email='$profile_id'");

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
    $con = $_POST['con'];
    $SID = $_POST['SID'];
    $cour = $_POST['cour'];
    $det = $_POST['det'];
    $host = $_POST['host'];
    $cgp = $_POST['cgp'];
    $lp = $_POST['lp'];


    $dest="../shared/images/".$_FILES['dest']['name'];
    move_uploaded_file($_FILES['dest']['tmp_name'],$dest);

    $update_query = "UPDATE student SET sname='$name',contact_no='$con',smartid='$SID',course='$cour',details='$det', impath='$dest',Hostel='$host',cgpa='$cgp',Linkedin='$lp'  WHERE  email='$profile_id'";
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
        <input type="text" name="name" value="<?php echo $profile['sname']; ?>"><br>

        <label for="con">Contact :</label>
        <input type="mobile" name="con" value="<?php echo $profile['contact_no']; ?>"><br>

        <label for="SID">Smart Card ID :</label>
        <input type="text" name="SID" value="<?php echo $profile['smartid']; ?>"><br>

        <label for="cour">Course :</label>
        <input type="text" name="cour" value="<?php echo $profile['course']; ?>"><br>

        <label for="det">Academic Details :</label>
        <input type="text" name="det" value="<?php echo $profile['details']; ?>"><br>

        <label for="host">Hostel :</label>
        <input type="text" name="host" value="<?php echo isset($profile['Hostel']) ? $profile['Hostel'] : ''; ?>"><br>

        <label for="cgp">CGPA :</label>
        <input type="text" name="cgp" value="<?php echo isset($profile['cgpa']) ? $profile['cgpa'] : ''; ?>"><br>

        <label for="lp">Linkedin :</label>
        <input type="text" name="lp" value="<?php echo isset($profile['Linkedin']) ? $profile['Linkedin'] : ''; ?>"><br>


        <label for="dest">Profile pic :</label>
        <input type="file" name="dest"><br> 
        

        <button type="submit">Update Profile</button>
    </form>
</body>
</html>
