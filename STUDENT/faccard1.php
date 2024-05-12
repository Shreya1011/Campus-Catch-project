<?php

include "smenu.html";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Campus Catch</title>
  <link href="//fonts.googleapis.com/css2?family=Jost:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
   <link rel="shortcut icon" href="image/banasthali_logo.jpg" type="image/jpg">
<title>Faculty Search</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
  
  }
  
  .containerfac {
    max-width: 800px;
    margin: 20px auto;
    padding: 0 20px;
  }
  
  .search-containerfac {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
  }
  
  .search-input {
    padding: 8px;
    width: 45%;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-right: 10px;
  }
  
  .search-button {
    padding: 8px 20px;
    background-color: #271414;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  .faculty-cards {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
  }
  
  .card {
    width: calc(50% - 10px);
    margin-bottom: 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
    overflow: hidden;
    transition: transform 0.3s ease ;
  }
  
  .card:hover {
    transform: translateY(-20%);
  }
  
  .card img {
    width: 30%;
    height: auto;
    border-radius: 8px 8px 0 0;
    background-position: center;
    background-size: cover;

  }
  
  .card-content {
    padding: 20px;
  }
  
  .filter-dropdown {
    margin-bottom: 20px;
  }
  .footer {
  height:100%;
  background-color:#271414;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  flex-direction: column;
}
</style>
</head>
<body style="background-color: #D0BCA1;">
  
<div class="containerfac">
  <div class="search-containerfac">
    <div>
      <label for="department">Filter by Department:</label>
      <select id="department" onchange="filterByDepartment()">
        <option value="all">All Departments</option>
        <option value="Education">Education</option>
        <option value="Physical Education">Physical Education</option>
        <option value="Performing Arts">Performing Arts</option>
        <option value="Design">Design</option>
        <option value="Visual Arts">Visual Arts</option>
        <option value="Journalism and Mass Communication">Journalism and Mass Communication</option>
        <option value="Home Science">Home Science</option>
        <option value="English and Modern European Languages">English and Modern European Languages</option>
        <option value="Hindi and Modern Indian Languages">Hindi and Modern Indian Languages</option>
        <option value="Sanskrit, Philosophy and Vedic Studies">Sanskrit, Philosophy and Vedic Studies</option>
        <option value="Earth Science">Earth Science</option>
        <option value="Mathematics and Statistics">Mathematics and Statistics</option>
        <option value="Computer Science">Computer Science</option>
        <option value="Management Studies">Management Studies</option>
        <option value="Bioscience and Biotechnology">Bioscience and Biotechnology</option>
        <option value="Chemical Engineering">Chemical Engineering</option>
        <option value="Chemistry">Chemistry</option>
        <option value="Pharmacy">Pharmacy</option>
        <option value="Economics">Economics</option>
        <option value="History and Indian Culture">History and Indian Culture</option>
        <option value="Political Science and Public Administration">Political Science and Public Administration</option>
        <option value="Psycology">Psycology</option>
        <option value="Sociology">Sociology</option>
        <option value="Physical Science">Physical Science</option>
        <option value="Automation">Automation</option>
        <option value="Law">Law</option>
        


      </select>
    </div>
    <div>
      <input type="text" id="searchInput" class="search-input" placeholder="Search faculty...">
      <button onclick="searchFaculty()" class="search-button">Search</button>
    </div>
  </div>

  <div class="faculty-cards">
    <div class="card education">
      <img src="emoji.jpg" alt="Faculty 1">
      <div class="card-content">
        <h3>Dr Ajay Surana</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Education</p>
      </div>
    </div>
    <div class="card Physical-Education">
      <img src="emoji.jpg" alt="Faculty 2">
      <div class="card-content">
        <h3>Ms Anjana Singha</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Physical Education</p>
      </div>
    </div>
    <div class="card performing-arts">
      <img src="emoji.jpg" alt="Faculty 3">
      <div class="card-content">
        <h3>Prof Ina Shastri</h3>
        <p>Designation: Professor</p>
        <p>Department: Performing Arts</p>
      </div>
    </div>
    <div class="card visual-arts">
      <img src="emoji.jpg" alt="Faculty 4">
      <div class="card-content">
        <h3>Prof Ila Yadav</h3>
        <p>Designation: Professor</p>
        <p>Department: Visual Arts</p>
      </div>
    </div>
    <div class="card journalism-and-mass-communication">
      <img src="emoji.jpg" alt="Faculty 5">
      <div class="card-content">
        <h3>Prof Monika Jain</h3>
        <p>Designation: Professor</p>
        <p>Department: Journalism and Mass Communication</p>
      </div>
    </div>
    <div class="card design">
      <img src="emoji.jpg" alt="Faculty 6">
      <div class="card-content">
        <h3>Prof Himadri Ghosh</h3>
        <p>Designation: Professor</p>
        <p>Department: Design</p>
      </div>
    </div>
    <div class="card home-science">
      <img src="emoji.jpg" alt="Faculty 7">
      <div class="card-content">
        <h3>Prof Chandra Kumari</h3>
        <p>Designation: Professor</p>
        <p>Department: Home Science</p>
      </div>
    </div>
    <div class="card english-and-modern-european-languages">
      <img src="emoji.jpg" alt="Faculty 8">
      <div class="card-content">
        <h3>Prof Hamsavahini Singh</h3>
        <p>Designation: Professor</p>
        <p>Department: English and Modern European Languages</p>
      </div>
    </div>
    <div class="card english-and-modern-european-languages">
      <img src="emoji.jpg" alt="Faculty 9">
      <div class="card-content">
        <h3>Prof Pradeep Kumar Seth</h3>
        <p>Designation: Professor</p>
        <p>Department: English and Modern European Languages</p>
      </div>
    </div>
    <div class="card hindi-and-modern-indian-languages">
      <img src="emoji.jpg" alt="Faculty 10">
      <div class="card-content">
        <h3>Prof Geeta Kapil</h3>
        <p>Designation: Professor</p>
        <p>Department: Hindi and Modern Indian Languages</p>
      </div>
    </div>
    <div class="card sanskrit-philosophy-and-vedic-studies">
      <img src="emoji.jpg" alt="Faculty 11">
      <div class="card-content">
        <h3>Dr Anita Jain</h3>
        <p>Designation: Professor, Dean and Head</p>
        <p>Department: Sanskrit, Philosophy and Vedic Studies</p>
      </div>
    </div>
    <div class="card earth-science">
      <img src="emoji.jpg" alt="Faculty 12">
      <div class="card-content">
        <h3>Prof Veena Sharma</h3>
        <p>Designation: Professor</p>
        <p>Department: Earth Science</p>
      </div>
    </div>
    <div class="card Mathematics and Statistics">
      <img src="emoji.jpg" alt="Faculty 13">
      <div class="card-content">
        <h3>Prof G N Purohit</h3>
        <p>Designation: Professor</p>
        <p>Department: Mathematics and Statistics</p>
      </div>
    </div>
    <div class="card computer-science">
      <img src="facimg/ckjha.jpg" alt="Faculty 14">
      <div class="card-content">
        <h3>Dr Chandra Kumar Jha</h3>
        <p>Designation: Professor and <Head></Head></p>
        <p>Department: Computer Science</p>
      </div>
    </div>
    <div class="card chemical-engineering">
      <img src="emoji.jpg" alt="Faculty 15">
      <div class="card-content">
        <h3>Prof B R Natrajan</h3>
        <p>Designation: Professor</p>
        <p>Department: Chemical Engineering</p>
      </div>
    </div>
    <div class="card management-studies">
      <img src="emoji.jpg" alt="Faculty 16">
      <div class="card-content">
        <h3>Dr Chitra Purohit</h3>
        <p>Designation: Professor</p>
        <p>Department: Management Studies</p>
      </div>
    </div>
    <div class="card management-studies">
      <img src="emoji.jpg" alt="Faculty 17">
      <div class="card-content">
        <h3>Dr Harsh Purohit</h3>
        <p>Designation: Professor and Dean</p>
        <p>Department: Management Studies</p>
      </div>
    </div>
    <div class="card bioscience-And-biotechnology">
      <img src="emoji.jpg" alt="Faculty 18">
      <div class="card-content">
        <h3>Prof Dipjyoti Chakraborty</h3>
        <p>Designation: Professor</p>
        <p>Department: Bioscience and Biotechnology</p>
      </div>
    </div>
    <div class="card chemistry">
      <img src="emoji.jpg" alt="Faculty 19">
      <div class="card-content">
        <h3>Prof Jaya Dwivedi</h3>
        <p>Designation: Professor</p>
        <p>Department: Chemistry</p>
      </div>
    </div>
    <div class="card pharmacy">
      <img src="emoji.jpg" alt="Faculty 20">
      <div class="card-content">
        <h3>Prof Sarwesh Kumar Paliwal</h3>
        <p>Designation: Professor</p>
        <p>Department: Pharmacy</p>
      </div>
    </div>
    <div class="card economics">
      <img src="emoji.jpg" alt="Faculty 21">
      <div class="card-content">
        <h3>Prof Seema Sharma</h3>
        <p>Designation: Professor</p>
        <p>Department: Economics</p>
      </div>
    </div>
    <div class="card economics">
      <img src="emoji.jpg" alt="Faculty 22">
      <div class="card-content">
        <h3>Prof Siddharth Shastri</h3>
        <p>Designation: Professor</p>
        <p>Department: Economics</p>
      </div>
    </div>
    <div class="card political-science-and-public-administration">
      <img src="emoji.jpg" alt="Faculty 23">
      <div class="card-content">
        <h3>Prof Nirmala Singh</h3>
        <p>Designation: Professor</p>
        <p>Department: Political Science and Public Administration</p>
      </div>
    </div>
    <div class="card history-and-indian-culture">
      <img src="emoji.jpg" alt="Faculty 24">
      <div class="card-content">
        <h3>Prof Preeti Sharma</h3>
        <p>Designation: Professor</p>
        <p>Department: History and Indian Culture</p>
      </div>
    </div>
    <div class="card sociology">
      <img src="emoji.jpg" alt="Faculty 25">
      <div class="card-content">
        <h3>Prof Manju Singh</h3>
        <p>Designation: Professor</p>
        <p>Department: Sociology</p>
      </div>
    </div>
    <div class="card psycology">
      <img src="emoji.jpg" alt="Faculty 26">
      <div class="card-content">
        <h3>Prof Charu Vyas</h3>
        <p>Designation: Professor</p>
        <p>Department: Psycology</p>
      </div>
    </div>
    <div class="card physical-sciences">
      <img src="emoji.jpg" alt="Faculty 27">
      <div class="card-content">
        <h3>Dr Parvej Ahmad Alvi</h3>
        <p>Designation: Associate Professor and <Head></Head></p>
        <p>Department: Chemistry</p>
      </div>
    </div>
    <div class="card physical-sciences">
      <img src="emoji.jpg" alt="Faculty 28">
      <div class="card-content">
        <h3>Dr Ritu Vijay</h3>
        <p>Designation: Professor and Dean</p>
        <p>Department: Physical Sciences</p>
      </div>
    </div>
    <div class="card automation">
      <img src="emoji.jpg" alt="Faculty 29">
      <div class="card-content">
        <h3>Prof Shailly Sharam</h3>
        <p>Designation: Professor</p>
        <p>Department: Automation</p>
      </div>
    </div>
    <div class="card law">
      <img src="emoji.jpg" alt="Faculty 30">
      <div class="card-content">
        <h3>Prof Ashok Kumar Keshot</h3>
        <p>Designation: Professor</p>
        <p>Department: Law</p>
      </div>
    </div>
    <div class="card law">
      <img src="emoji.jpg" alt="Faculty 31">
      <div class="card-content">
        <h3>Prof Anil Mehta</h3>
        <p>Designation: Professor</p>
        <p>Department: Law</p>
      </div>
    </div>
    <div class="card computer-science">
      <img src="emoji.jpg" alt="Faculty 32">
      <div class="card-content">
        <h3>Smt Abha Purohit</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Computer Science</p>
      </div>
    </div>
      <div class="card computer-science">
      <img src="emoji.jpg" alt="Faculty 33">
      <div class="card-content">
        <h3>Dr Aditi Paul</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Computer Science</p>
      </div>
      </div>
    <div class="card computer-science">
      <img src="emoji.jpg" alt="Faculty 34">
      <div class="card-content">
        <h3>Dr Abhay Kumar Rai</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Computer Science</p>
      </div>
    </div>
    <div class="card computer-science">
      <img src="emoji.jpg" alt="Faculty 35">
      <div class="card-content">
        <h3>Prof Aditya Shastri</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Computer Science</p>
      </div>
    </div>
    <div class="card computer-science">
      <img src="emoji.jpg" alt="Faculty 36">
      <div class="card-content">
        <h3>Dr Ajay Kumar Yadav</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Computer Science</p>
      </div>
    </div>
    <div class="card computer-science">
      <img src="emoji.jpg" alt="Faculty 37">
      <div class="card-content">
        <h3>Dr Ajit Kumar Jain</h3>
        <p>Designation: Associate Professor</p>
        <p>Department: Computer Science</p>
      </div>
    </div>
    <div class="card computer-science">
      <img src="emoji.jpg" alt="Faculty 38">
      <div class="card-content">
        <h3>Dr Amrita</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Computer Science</p>
      </div>
    </div>
    <div class="card computer-science">
      <img src="emoji.jpg" alt="Faculty 39">
      <div class="card-content">
        <h3>Ms Anjali Verma</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Computer Science</p>
      </div>
    </div><div class="card computer-science">
      <img src="emoji.jpg" alt="Faculty 40">
      <div class="card-content">
        <h3>Dr anoop Kumar Bhola</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Computer Science</p>
      </div>
    </div>
    <div class="card computer-science">
      <img src="emoji.jpg" alt="Faculty 41">
      <div class="card-content">
        <h3>Dr Archana Mangal</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Computer Science</p>
      </div>
    </div>
    <div class="card computer-science">
      <img src="emoji.jpg" alt="Faculty 42">
      <div class="card-content">
        <h3>Shri Ashok Kumar</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Computer Science</p>
      </div>
    </div>
    <div class="card computer-science">
      <img src="emoji.jpg" alt="Faculty 43">
      <div class="card-content">
        <h3>Smt Bharti Nathani</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Computer Science</p>
      </div>
    </div>
    <div class="card computer-science">
      <img src="emoji.jpg" alt="Faculty 44">
      <div class="card-content">
        <h3>Smt Bhawana Tyagi</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Computer Science</p>
      </div>
    </div>
    <div class="card computer-science">
      <img src="emoji.jpg" alt="Faculty 45">
      <div class="card-content">
        <h3>Dr Deepak Kumar</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Computer Science</p>
      </div>
    </div>
    <div class="card computer-science">
      <img src="emoji.jpg" alt="Faculty 46">
      <div class="card-content">
        <h3>Ms Deepika Sainani</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Computer Science</p>
      </div>
    </div>
    <div class="card computer-science">
      <img src="emoji.jpg" alt="Faculty 47">
      <div class="card-content">
        <h3>Smt Deepti Saxena</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Computer Science</p>
      </div>
    </div>
    <div class="card computer-science">
      <img src="emoji.jpg" alt="Faculty 48">
      <div class="card-content">
        <h3>Smt Dipanwita Thakur</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Computer Science</p>
      </div>
    </div>
    <div class="card computer-science">
      <img src="emoji.jpg" alt="Faculty 49">
      <div class="card-content">
        <h3>Ms Divya</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Computer Science</p>
      </div>
    </div>
    <div class="card computer-science">
      <img src="emoji.jpg" alt="Faculty 50">
      <div class="card-content">
        <h3>Dr Iti Mathur Joshi</h3>
        <p>Designation: Assosiate Professor</p>
        <p>Department: Computer Science</p>
      </div>
    </div>
    <div class="card computer-science">
      <img src="emoji.jpg" alt="Faculty 51">
      <div class="card-content">
        <h3>Dr Abhay Kumar Rai</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Computer Science</p>
      </div>
    </div>
    <div class="card computer-science">
      <img src="emoji.jpg" alt="Faculty 52">
      <div class="card-content">
        <h3>Smt Karuna Sharma</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Computer Science</p>
      </div>
    </div>
    <div class="card computer-science">
      <img src="emoji.jpg" alt="Faculty 53">
      <div class="card-content">
        <h3>Dr Khandakar F Rahman</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Computer Science</p>
      </div>
    </div>
    <div class="card computer-science">
      <img src="emoji.jpg" alt="Faculty 54">
      <div class="card-content">
        <h3>Ms Kirti Pandey</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Computer Science</p>
      </div>
    </div>
    <div class="card computer-science">
      <img src="emoji.jpg" alt="Faculty 55">
      <div class="card-content">
        <h3>Dr Kuldeep Kumar Yogi</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Computer Science</p>
      </div>
    </div>
    <div class="card computer-science">
      <img src="emoji.jpg" alt="Faculty 56">
      <div class="card-content">
        <h3>Prof Kusum Gupta</h3>
        <p>Designation: Professor</p>
        <p>Department: Computer Science</p>
      </div>
    </div>
    <div class="card computer-science">
      <img src="emoji.jpg" alt="Faculty 57">
      <div class="card-content">
        <h3>Shri Lal Sahab</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Computer Science</p>
      </div>
    </div>
    <div class="card computer-science">
      <img src="emoji.jpg" alt="Faculty 58">
      <div class="card-content">
        <h3>Dr Mainaz Faridi</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Computer Science</p>
      </div>
    </div>
    <div class="card computer-science">
      <img src="emoji.jpg" alt="Faculty 59">
      <div class="card-content">
        <h3>Dr Manjeet Kumar</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Computer Science</p>
      </div>
    </div>
    <div class="card computer-science">
      <img src="emoji.jpg" alt="Faculty 60">
      <div class="card-content">
        <h3>Dr Meenakshi Pareek</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Computer Science</p>
      </div>
    </div>
    <div class="card computer-science">
      <img src="emoji.jpg" alt="Faculty 61">
      <div class="card-content">
        <h3>Smt Monika</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Computer Science</p>
      </div>
    </div>
    <div class="card computer-science">
      <img src="emoji.jpg" alt="Faculty 62">
      <div class="card-content">
        <h3>Ms Monika Narang</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Computer Science</p>
      </div>
    </div>
    <div class="card computer-science">
      <img src="emoji.jpg" alt="Faculty 63">
      <div class="card-content">
        <h3>Dr Monika Saxena</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Computer Science</p>
      </div>
    </div>
    <div class="card computer-science">
      <img src="emoji.jpg" alt="Faculty 64">
      <div class="card-content">
        <h3>Dr Nisheeth Joshi</h3>
        <p>Designation: Assosiate Professor</p>
        <p>Department: Computer Science</p>
      </div>
    </div>
    <div class="card computer-science">
      <img src="emoji.jpg" alt="Faculty 65">
      <div class="card-content">
        <h3>Ms Pooja Asopa</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Computer Science</p>
      </div>
    </div>
    <div class="card computer-science">
      <img src="emoji.jpg" alt="Faculty 66">
      <div class="card-content">
        <h3>Prof Praveen Dhyani</h3>
        <p>Designation: Professor</p>
        <p>Department: Computer Science</p>
      </div>
    </div>
    <div class="card computer-science">
      <img src="emoji.jpg" alt="Faculty 67">
      <div class="card-content">
        <h3>Dr Rahul Kumar Vijay</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Computer Science</p>
      </div>
    </div>
    <div class="card computer-science">
      <img src="emoji.jpg" alt="Faculty 68">
      <div class="card-content">
        <h3>Dr Rajiv Singh</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Computer Science</p>
      </div>
    </div>
    <div class="card computer-science">
      <img src="emoji.jpg" alt="Faculty 69">
      <div class="card-content">
        <h3>Smt Richa Jain</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Computer Science</p>
      </div>
    </div>
    <div class="card computer-science">
      <img src="emoji.jpg" alt="Faculty 70">
      <div class="card-content">
        <h3>Shri Roopesh Kumar</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Computer Science</p>
      </div>
    </div>
    <div class="card computer-science">
      <img src="emoji.jpg" alt="Faculty 71">
      <div class="card-content">
        <h3>Ms Sakshi Indolia</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Computer Science</p>
      </div>
    </div>
    <div class="card computer-science">
      <img src="emoji.jpg" alt="Faculty 72">
      <div class="card-content">
        <h3>Prof Sanjay Kumar Sharma</h3>
        <p>Designation: Professor</p>
        <p>Department: Computer Science</p>
      </div>
    </div>
    <div class="card computer-science">
      <img src="facimg/saurabhmukherjee.jpg" alt="Faculty 73">
      <div class="card-content">
        <h3>Prof Saurabh Mukherjee</h3>
        <p>Designation: Professor</p>
        <p>Department: Computer Science</p>
      </div>
    </div>
    <div class="card computer-science">
      <img src="emoji.jpg" alt="Faculty 74">
      <div class="card-content">
        <h3>Ms Sneha Asopa</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Computer Science</p>
      </div>
    </div>
    <div class="card computer-science">
      <img src="emoji.jpg" alt="Faculty 75">
      <div class="card-content">
        <h3>Dr Sudha Morwal</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Computer Science</p>
      </div>
    </div>
    <div class="card computer-science">
      <img src="emoji.jpg" alt="Faculty 76">
      <div class="card-content">
        <h3>Shri Sushil Buriya</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Computer Science</p>
      </div>
    </div>
    <div class="card computer-science">
      <img src="emoji.jpg" alt="Faculty 77">
      <div class="card-content">
        <h3>Dr Swati Nigam</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Computer Science</p>
      </div>
    </div><div class="card computer-science">
      <img src="emoji.jpg" alt="Faculty 78">
      <div class="card-content">
        <h3>Ms Uma Sharma</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Computer Science</p>
      </div>
    </div><div class="card computer-science">
      <img src="emoji.jpg" alt="Faculty 79">
      <div class="card-content">
        <h3>Dr Vaibhav Vyas</h3>
        <p>Designation: Assosiate Professor</p>
        <p>Department: Computer Science</p>
      </div>
    </div><div class="card computer-science">
      <img src="emoji.jpg" alt="Faculty 80">
      <div class="card-content">
        <h3>Shri Vivek Purohit</h3>
        <p>Designation: Assosiate Professor</p>
        <p>Department: Computer Science</p>
      </div>
    </div>
    <div class="card computer-science">
      <img src="emoji.jpg" alt="Faculty 81">
      <div class="card-content">
        <h3>Dr Yogesh Kumar Gupta</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Computer Science</p>
      </div>
    </div>
    <div class="card mathematics-and-statistics">
      <img src="emoji.jpg" alt="Faculty 82">
      <div class="card-content">
        <h3>Dr Abhishek Singh</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Mathematics and Statistics</p>
      </div>
    </div>
    <div class="card mathematics-and-statistics">
      <img src="emoji.jpg" alt="Faculty 83">
      <div class="card-content">
        <h3>Dr Amit Kumar</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Mathematics and Statistics</p>
      </div>
    </div>
    <div class="card mathematics-and-statistics">
      <img src="emoji.jpg" alt="Faculty 84">
      <div class="card-content">
        <h3>Shri Ankush Goel</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Mathematics and Statistics</p>
      </div>
    </div>
    <div class="card mathematics-and-statistics">
      <img src="emoji.jpg" alt="Faculty 85">
      <div class="card-content">
        <h3>Shri Ayush Tripathi</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Mathematics and Statistics</p>
      </div>
    </div>
    <div class="card mathematics-and-statistics">
      <img src="emoji.jpg" alt="Faculty 86">
      <div class="card-content">
        <h3>Ms Bhagwati Devi</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Mathematics and Statistics</p>
      </div>
    </div>
    <div class="card mathematics-and-statistics">
      <img src="emoji.jpg" alt="Faculty 87">
      <div class="card-content">
        <h3>Dr Gargi Tyagi</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Mathematics and Statistics</p>
      </div>
    </div>
    <div class="card mathematics-and-statistics">
      <img src="emoji.jpg" alt="Faculty 88">
      <div class="card-content">
        <h3>Dr Geetanjali Sharma</h3>
        <p>Designation: Assosiate Professor</p>
        <p>Department: Mathematics and Statistics</p>
      </div>
    </div>
    <div class="card mathematics-and-statistics">
      <img src="emoji.jpg" alt="Faculty 89">
      <div class="card-content">
        <h3>Dr Gulab Singh</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Mathematics and Statistics</p>
      </div>
    </div>
    <div class="card mathematics-and-statistics">
      <img src="emoji.jpg" alt="Faculty 90">
      <div class="card-content">
        <h3>Dr Isha Singh</h3>
        <p>Designation: Assosiate Professor</p>
        <p>Department: Mathematics and Statistics</p>
      </div>
    </div>
    <div class="card mathematics-and-statistics">
      <img src="emoji.jpg" alt="Faculty 91">
      <div class="card-content">
        <h3>Ms Kumari Bhawna</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Mathematics and Statistics</p>
      </div>
    </div>
    <div class="card mathematics-and-statistics">
      <img src="emoji.jpg" alt="Faculty 92">
      <div class="card-content">
        <h3>Dr Madhuri Jain</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Mathematics and Statistics</p>
      </div>
    </div>
    <div class="card mathematics-and-statistics">
      <img src="emoji.jpg" alt="Faculty 93">
      <div class="card-content">
        <h3>Shri Manish Raghav</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Mathematics and Statistics</p>
      </div>
    </div>
    <div class="card mathematics-and-statistics">
      <img src="emoji.jpg" alt="Faculty 94">
      <div class="card-content">
        <h3>Smt Manju Suresh Prasad</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Mathematics and Statistics</p>
      </div>
    </div>
    <div class="card mathematics-and-statistics">
      <img src="emoji.jpg" alt="Faculty 95">
      <div class="card-content">
        <h3>Dr Manoj Kumar Singh</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Mathematics and Statistics</p>
      </div>
    </div>
    <div class="card mathematics-and-statistics">
      <img src="emoji.jpg" alt="Faculty 96">
      <div class="card-content">
        <h3>Dr Naresh Chandra</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Mathematics and Statistics</p>
      </div>
    </div>
    <div class="card mathematics-and-statistics">
      <img src="emoji.jpg" alt="Faculty 97">
      <div class="card-content">
        <h3>Dr Prashant Kushwah</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Mathematics and Statistics</p>
      </div>
    </div>
    <div class="card mathematics-and-statistics">
      <img src="emoji.jpg" alt="Faculty 98">
      <div class="card-content">
        <h3>Dr Praveen Kumar Tripathi</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Mathematics and Statistics</p>
      </div>
    </div>
    <div class="card mathematics-and-statistics">
      <img src="emoji.jpg" alt="Faculty 99">
      <div class="card-content">
        <h3>Dr Preeti Jain</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Mathematics and Statistics</p>
      </div>
    </div>
    <div class="card mathematics-and-statistics">
      <img src="emoji.jpg" alt="Faculty 100">
      <div class="card-content">
        <h3>Dr Priya Das</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Mathematics and Statistics</p>
      </div>
    </div>
    <div class="card mathematics-and-statistics">
      <img src="emoji.jpg" alt="Faculty 101">
      <div class="card-content">
        <h3>Shri Qazi Ahmad Jamal</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Mathematics and Statistics</p>
      </div>
    </div>
    <div class="card mathematics-and-statistics">
      <img src="emoji.jpg" alt="Faculty 102">
      <div class="card-content">
        <h3>Dr Ramdayal Singh Kushwaha</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Mathematics and Statistics</p>
      </div>
    </div>
    <div class="card mathematics-and-statistics">
      <img src="emoji.jpg" alt="Faculty 103">
      <div class="card-content">
        <h3>Ms Sanchita Sharma</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Mathematics and Statistics</p>
      </div>
    </div>
    <div class="card mathematics-and-statistics">
      <img src="emoji.jpg" alt="Faculty 104">
      <div class="card-content">
        <h3>Prof Sarla Pareek</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Mathematics and Statistics</p>
      </div>
    </div>
    <div class="card mathematics-and-statistics">
      <img src="emoji.jpg" alt="Faculty 105">
      <div class="card-content">
        <h3>Prof Shalini Chandra</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Mathematics and Statistics</p>
      </div>
    </div>
    <div class="card mathematics-and-statistics">
      <img src="emoji.jpg" alt="Faculty 106">
      <div class="card-content">
        <h3>Dr Shanu Goyal</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Mathematics and Statistics</p>
      </div>
    </div>
    <div class="card mathematics-and-statistics">
      <img src="emoji.jpg" alt="Faculty 107">
      <div class="card-content">
        <h3>Dr Shard Chander Pandey</h3>
        <p>Designation: Assosiate Professor</p>
        <p>Department: Mathematics and Statistics</p>
      </div>
    </div>
      <div class="card mathematics-and-statistics">
        <img src="emoji.jpg" alt="Faculty 108">
        <div class="card-content">
          <h3>Dr Shard Sumit Pant</h3>
          <p>Designation: Assistant Professor</p>
          <p>Department: Mathematics and Statistics</p>
        </div>
      </div>
        <div class="card mathematics-and-statistics">
          <img src="emoji.jpg" alt="Faculty 109">
          <div class="card-content">
            <h3>Ms Teena Goyal</h3>
            <p>Designation: Assistant Professor</p>
            <p>Department: Mathematics and Statistics</p>
          </div>
          </div>
          <div class="card mathematics-and-statistics">
            <img src="emoji.jpg" alt="Faculty 110">
            <div class="card-content">
              <h3>Dr Usha Sharma</h3>
              <p>Designation: Assistant Professor</p>
              <p>Department: Mathematics and Statistics</p>
            </div>
          </div>
    <div class="card education">
      <img src="emoji.jpg" alt="Faculty 111">
      <div class="card-content">
        <h3>Dr Jyoti Kumari</h3>
        <p>Designation:  Assistant Professor</p>
        <p>Department: Education</p>
      </div>
    </div>
    <div class="card education">
      <img src="emoji.jpg" alt="Faculty 112">
      <div class="card-content">
        <h3>Dr Kamal Thakur</h3>
        <p>Designation:  Assistant Professor</p>
        <p>Department: Education</p>
      </div>
    </div>
    <div class="card education">
      <img src="emoji.jpg" alt="Faculty 113">
      <div class="card-content">
        <h3>Dr Murlidhar Mishra</h3>
        <p>Designation:  Assosiate Professor</p>
        <p>Department: Education</p>
      </div>
    </div>
    <div class="card Physical-education">
      <img src="emoji.jpg" alt="Faculty 114">
      <div class="card-content">
        <h3>Smt Deep Shikha Raghav</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Physical Education</p>
      </div>
    </div>
    <div class="card Physical-education">
      <img src="emoji.jpg" alt="Faculty 115">
      <div class="card-content">
        <h3>Dr Usha Tiwari</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Physical Education</p>
      </div>
    </div>
    <div class="card performing-arts">
      <img src="emoji.jpg" alt="Faculty 117">
      <div class="card-content">
        <h3>Dr Ankit Bhatt</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Performing Arts</p>
      </div>
    </div>
    <div class="card performing-arts">
      <img src="emoji.jpg" alt="Faculty 118">
      <div class="card-content">
        <h3>Shri Manik Banerjee</h3>
        <p>Designation: Assosiate Professor</p>
        <p>Department: Performing Arts</p>
      </div>
    </div>
    <div class="card visual-arts">
      <img src="emoji.jpg" alt="Faculty 119">
      <div class="card-content">
        <h3>Dr Annapurna Shukla</h3>
        <p>Designation: Assosiate Professor</p>
        <p>Department: Visual Arts</p>
      </div>
    </div>
    <div class="card visual-arts">
      <img src="emoji.jpg" alt="Faculty 120">
      <div class="card-content">
        <h3>Dr Megha Attray Purohit</h3>
        <p>Designation: Assosiate Professor</p>
        <p>Department: Visual Arts</p>
      </div>
    </div>
    <div class="card journalism-and-mass-communication">
      <img src="emoji.jpg" alt="Faculty 121">
      <div class="card-content">
        <h3>Shri Gajanand</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Journalism and Mass Communication</p>
      </div>
    </div>
    <div class="card journalism-and-mass-communication">
      <img src="emoji.jpg" alt="Faculty 122">
      <div class="card-content">
        <h3>Dr Namrata Arora Charpe</h3>
        <p>Designation: Assosiate Professor</p>
        <p>Department: Journalism and Mass Communication</p>
      </div>
    </div>
    <div class="card design">
      <img src="emoji.jpg" alt="Faculty 123">
      <div class="card-content">
        <h3>Dr Deepika Purohit</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Design</p>
      </div>
    </div>
    <div class="card design">
      <img src="emoji.jpg" alt="Faculty 123">
      <div class="card-content">
        <h3>Dr Kavita Chaudhary</h3>
        <p>Designation: Assosiate Professor</p>
        <p>Department: Design</p>
      </div>
    </div>
    <div class="card home-science">
      <img src="emoji.jpg" alt="Faculty 124">
      <div class="card-content">
        <h3>Ms Charu Panwar</h3>
        <p>Designation: Assistant Professor</p>
        <p>Department: Home Science</p>
      </div>
    </div>
    <div class="card home-science">
      <img src="emoji.jpg" alt="Faculty 125">
      <div class="card-content">
        <h3>Ms Chetna Singh</h3>
        <p>Designation: Lecturer</p>
        <p>Department: Home Science</p>
      </div>
    </div>
    <div class="card home-science">
      <img src="emoji.jpg" alt="Faculty 126">
      <div class="card-content">
        <h3>Dr Gita Bisla</h3>
        <p>Designation: Assosiate Professor</p>
        <p>Department: Home Science</p>
      </div>
    </div>
    <div class="card english-and-modern-european-languages">
      <img src="emoji.jpg" alt="Faculty 127">
      <div class="card-content">
        <h3>Shri Ankit Kumar Burnwal</h3>
        <p>Designation: Lecturer</p>
        <p>Department: English and Modern European Languages</p>
      </div>
    </div>
    
    <div class="card chemistry">
      <img src="emoji.jpg" alt="Faculty 128">
      <div class="card-content">
        <h3>Faculty Name 4</h3>
        <p>Designation: Professor</p>
        <p>Department: Chemistry</p>
      </div>
    </div>

  </div>
</div>
<div class="footer">
  <p>Copyright &copy; campus_catch.org</p>
  <a href=""></a>
  <p style="padding-top:10px;">Follow on</p>
  <div class="social">
          <a href="https://twitter.com/banasthali-vidyapith"><svg style="background: white" width="23" height="23" class="hk" viewBox="3 5 23 20"><path d="M22.05 7.54a4.47 4.47 0 0 0-3.3-1.46 4.53 4.53 0 0 0-4.53 4.53c0 .35.04.7.08 1.05A12.9 12.9 0 0 1 5 6.89a5.1 5.1 0 0 0-.65 2.26c.03 1.6.83 2.99 2.02 3.79a4.3 4.3 0 0 1-2.02-.57v.08a4.55 4.55 0 0 0 3.63 4.44c-.4.08-.8.13-1.21.16l-.81-.08a4.54 4.54 0 0 0 4.2 3.15 9.56 9.56 0 0 1-5.66 1.94l-1.05-.08c2 1.27 4.38 2.02 6.94 2.02 8.3 0 12.86-6.9 12.84-12.85.02-.24 0-.43 0-.65a8.68 8.68 0 0 0 2.26-2.34c-.82.38-1.7.62-2.6.72a4.37 4.37 0 0 0 1.95-2.51c-.84.53-1.81.9-2.83 1.13z"></path></svg></a>
          <a href="https://www.linkedin.com/school/banasthali-vidyapith/"><svg style="background: black;border-radius: 21px;" width="29" height="29" viewBox="0 0 29 29" fill="none" class="hk"><path d="M5 6.36C5 5.61 5.63 5 6.4 5h16.2c.77 0 1.4.61 1.4 1.36v16.28c0 .75-.63 1.36-1.4 1.36H6.4c-.77 0-1.4-.6-1.4-1.36V6.36z"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M10.76 20.9v-8.57H7.89v8.58h2.87zm-1.44-9.75c1 0 1.63-.65 1.63-1.48-.02-.84-.62-1.48-1.6-1.48-.99 0-1.63.64-1.63 1.48 0 .83.62 1.48 1.59 1.48h.01zM12.35 20.9h2.87v-4.79c0-.25.02-.5.1-.7.2-.5.67-1.04 1.46-1.04 1.04 0 1.46.8 1.46 1.95v4.59h2.87v-4.92c0-2.64-1.42-3.87-3.3-3.87-1.55 0-2.23.86-2.61 1.45h.02v-1.24h-2.87c.04.8 0 8.58 0 8.58z" fill="#fff"></path></svg></a>
          <a href="https://www.instagram.com/banasthali_vidyapith_official/"><svg style="color: white" xmlns="http://www.w3.org/2000/svg" width="29" height="23" fill="currentColor" class="hk" viewBox="0 0 20 23"> <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" fill="white"></path></svg></a>
          <a href="https://www.facebook.com/banasthali.org/"><svg style="background: white;border-radius:20px" width="29" height="29" class="hk"><path d="M23.2 5H5.8a.8.8 0 0 0-.8.8V23.2c0 .44.35.8.8.8h9.3v-7.13h-2.38V13.9h2.38v-2.38c0-2.45 1.55-3.66 3.74-3.66 1.05 0 1.95.08 2.2.11v2.57h-1.5c-1.2 0-1.48.57-1.48 1.4v1.96h2.97l-.6 2.97h-2.37l.05 7.12h5.1a.8.8 0 0 0 .79-.8V5.8a.8.8 0 0 0-.8-.79"></path></svg>
      </div>
      <p style="padding-top:10px;">Banasthali Vidyapith, Vanasthali Rd, Aliyabad, Radha Kishnpura, Rajasthan 304022 </p>
      <p style="padding-top:10px;">Phone No:- 01438 – 228524  FAX No:- 01438-228365
      Email:- banasthaliexam@gmail.com / bvexamination@gmail.com.</p>
<p style="padding-top:10px;">Working Days : Wednesday - Monday</p>
                  <br><a style="padding-bottom: 20px;" href="https://www.ugc.gov.in/oldpdf/ragging/minuterag230409.pdf" class="txt15">
                      Anti Ragging Policy - UGC (READ)
                      </a>
</div>

<script>
  //Fac Card JS
function searchFaculty() {
  var input, filter, cards, card, i, txtValue;
  input = document.getElementById('searchInput');
  filter = input.value.toUpperCase();
  cards = document.getElementsByClassName('card');

  for (i = 0; i < cards.length; i++) {
    card = cards[i];
    txtValue = card.textContent || card.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      card.style.display = '';
    } else {
      card.style.display = 'none';
    }
  }
}

function filterByDepartment() {
  var departmentSelect, departmentValue, cards, i;
  departmentSelect = document.getElementById('department');
  departmentValue = departmentSelect.value;
  cards = document.getElementsByClassName('card');

  if (departmentValue === 'all') {
    for (i = 0; i < cards.length; i++) {
      cards[i].style.display = '';
    }
  } else {
    for (i = 0; i < cards.length; i++) {
      if (cards[i].classList.contains(departmentValue.toLowerCase())) {
        cards[i].style.display = '';
      } else {
        cards[i].style.display = 'none';
      }
    }
  }
}
//fac card JS end

$(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
 
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

      $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
</script>

</body>
</html>
