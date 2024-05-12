<?php

include "smenu.html";
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
      
    .form1{
            background-color:#CD8D7A;

        }
    </style>
</head>
<body style="background-color: #D0BCA1;">
    

    <div class="row justify-content-center">
        <div class="col-md-10 border-right">
            <form action="smenu.php" class="form1" method="POST" enctype="multipart/form-data">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-center col-md-12 mb-3">
                        <h4 class="text-center" font-size="20px">Profile Information</h4>
                    </div>
                    
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        <label for="profile-picture">
                            <div class="d-flex flex-column align-items-center">
                                <img id="uploaded-image" class="rounded-circle mt-5" width="150px" src="data:image/jpeg;base64,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">
                                <span class="font-weight-bold mt-3">Student Updated Photo</span>
                                <div class="d-flex justify-content-between align-items-center experience"><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;UPLOAD</span></div><br>
                            </div>
                        </label>
                       
                        <input type="file" id="profile-picture" name="pdtimg" accept="image/*" style="display: none;" onchange="displayImage(event)">
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12">
                            <label class="labels"> First Name</label>
                            <input type="text" class="form-control" name="sname"  placeholder="First Name" value="">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <label class="labels">Email ID :</label>
                            <input type="email" class="form-control" name="Email" placeholder="Enter your emai-id">
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Contact Number :</label>
                            <input type="mobile" placeholder="+91" class="form-control" name="contact_no" placeholder="+91">
                        </div>
                        <div class="col-md-12">
                            <label class="labels"> Smart_Card_ID :</label>
                            <input type="text" placeholder="SmartCardId" class="form-control" name="smartid">
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Course :</label>
                            <input type="text" placeholder="Course Enrolled" name="course" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Current CGPA :</label>
                            <input type="text" placeholder="Enter your current cgpa"class="form-control" name="cgpa">
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Academic Details :</label>
                            <input type="text" placeholder="(Your highest Qualification)"class="form-control" name="details">
                        </div>
                        <div class="col-md-12">
                           <label class="labels">Enter your linkedin profile :</label>
                           <input required type="text" name="Linkedin" placeholder="Linkedin_profile" class="form-control mt-3">
                        </div>
                        <div class="col-md-12">
                            <label class="labels"> Hostel :</label>
                            <input type="text" placeholder="Hostel Name" class="form-control" name="Hostel">
                        </div>
                        <div>

                    </div>
                    <div class="mt-3 text-center">
                        <button class="mt-2 btn btn-success">Save Profile</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


          
        <script>
            function displayImage(event) {
                var uploadedImage = document.getElementById('uploaded-image');
                uploadedImage.src = URL.createObjectURL(event.target.files[0]);
            }
        </script>  
        <div class="footer mt-5">
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
        </body>
</html>        








       









