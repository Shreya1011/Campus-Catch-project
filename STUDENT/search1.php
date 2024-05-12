
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
    <style>
body, h1, h2, p {
    margin: 0;
    padding: 0;
}

.container {
    
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    padding: 20px;
}

.card {
    border: 1px solid #ccc;
    border-radius: 10px;
    padding: 20px;
    margin: 10px;
    width: 300px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    
}

.card h2 {
    font-size: 20px;
    margin-bottom: 10px;
}

.card p {
    margin: 5px 0;
}

.card img {
    width: 100%;
    border-radius: 10px;
    margin-top: 10px;
}


@media screen and (max-width: 768px) {
    .card {
        width: calc(50% - 20px);
    }
}

@media screen and (max-width: 480px) {
    .card {
        width: calc(100% - 20px);
    }
}
</style>
</head>
<body>

<?php
include "smenu.html";
include_once "../shared/connection.php";

if (isset($_POST['search_query'])) {
    $search_query = $_POST['search_query'];

    $sql_alumni = "SELECT aluname as name,email,contact_no as mobile, batch as class,designation as Desig, impath,Linkedln_Profile as lp,Events_Management as eve,Events_link as link ,    'Alumni' as category FROM alumni WHERE aluname LIKE '%$search_query%'";
    $result_alumni = $conn->query($sql_alumni);


    $sql_faculty = "SELECT Name as name, email, contact as mobile, domain as class, Designation as Desig, impath, Linkedin as lp, department as eve, drive as link, impath1, research, 'Faculty' as category FROM faculty WHERE Name LIKE '%$search_query%'";
    $result_faculty = $conn->query($sql_faculty);

    echo '<div class="container">';
    
    if ($result_alumni->num_rows > 0) {
        while($row = $result_alumni->fetch_assoc()) {
            echo "<div class='card'>
                    <p>Category: ".$row["category"]."</p>
                    <h2>".$row["name"]."</h2>
                    <img src='".$row["impath"]."' alt='Image'>
                    <p>Email: ".$row["email"]."</p>
                    <p>Contact No.: ".$row["mobile"]."</p>
                    <p>Batch: ".$row["class"]."</p>
                    <p>Designation: ".$row["Desig"]."</p>
                    <p>LinkedIn Profile: ".$row["lp"]."</p>
                    <p>Events Management: ".$row["eve"]."</p>
                    <p>Events Link: ".$row["link"]."</p>
                    
                    
                </div>";
        }
    }


   
    if ($result_faculty->num_rows > 0) {
        while($row = $result_faculty->fetch_assoc()) {
                    echo "<div class='card'>
                    <p>Category: ".$row["category"]."</p>

                    <h2>".$row["name"]."</h2>
                    <img src='".$row["impath"]."' alt='Image'>
                    <p>Designation: ".$row["Desig"]."</p>
                    <p>Email: ".$row["email"]."</p>
                    <p>Contact_No: ".$row["mobile"]."</p>
                    <p>Domain: ".$row["class"]."</p>
                    <p>Department: ".$row["eve"]."</p>
                    <p>LinkedIn Profile: ".$row["lp"]."</p>
                    <p>Research: ".$row["research"]."</p>
                    <p>Drive link: ".$row["link"]."</p>
                    <img src='".$row["impath1"]."' alt='Image'>
                    
                    
                    
                </div>";
        }
    }
    echo '</div>'; 
    $conn->close();
}
?>

</body>
</html>
