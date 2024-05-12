
<?php
include_once "authguard.php";
include "fmenu.html";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Professional Dashboard</title>
   
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
    
        <form action="upload.php" class="form1" method="POST" enctype="multipart/form-data">
            
        <div class="p-3 py-5">
            <div class="d-flex justify-content-center col-md-12 mb-3">
                        <h4 class="text-center" font-size="20px">Profile Information</h4>
            </div>
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        <label for="profile-picture">
                            <div class="d-flex flex-column align-items-center">
                                <img id="uploaded-image" class="rounded-circle mt-5" width="150px" src="https://e7.pngegg.com/pngimages/349/288/png-clipart-teacher-education-student-course-school-avatar-child-face-thumbnail.png">
                                <span class="font-weight-bold mt-3">Faculty Updated Photo</span>
                                <div class="d-flex justify-content-between align-items-center experience"><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;UPLOAD</span></div><br>
                            </div>
                        </label>
                       
                        <input type="file" id="profile-picture" name="pdtimg" accept="image/*" style="display: none;" onchange="displayImage(event)">
            </div>
           <!-- <label class="labels" for="pdtimg">Profile Picture</label>
            <input type="file" name="pdtimg" class="form-control mt-2" required>
-->         
           <div class="row mt-2">
            <div class="col-md-12">
            <label class="labels" for="Name">Name</label>
            <input type="text" name="Name" placeholder="Enter your name" class="form-control mt-3" required>
            </div>
            </div>

            <div class="row mt-3">
                        <div class="col-md-12">
            <label class="labels" for="email">Email</label>
            <input type="email" name="email" placeholder="Enter your email" class="form-control mt-3" required>
            </div>
            <div class="col-md-12">
            <label class="labels" for="domain">Your Major domain</label>
            <input type="text" name="domain" placeholder="Major Subjects you teach" class="form-control mt-3" required>
            </div>
            <div class="col-md-12">
            <label class="labels" for="Designation">Designation</label>
            <input type="text" name="Designation" placeholder="Enter your designation" class="form-control mt-3" required>
            </div>
            <div class="col-md-12">
            <label class="labels" for="contact">Contact No.</label>
            <input type="mobile" name="contact" placeholder=" " class="form-control mt-3" >
            </div>
            <div class="col-md-12">
            <label class="labels" for="pdtimg1">Add Time Table</label>
            <input type="file" name="pdtimg1" class="form-control mt-2">
            </div>
            <div class="col-md-12">
            <label class="labels" for="drive">Link for Study Material</label>
            <input type="text" name="drive" placeholder="Drive link to share your books , notes or articles" class="form-control mt-3" >
            </div>
            <div class="col-md-12">
            <label class="labels" for="department">Department </label>
            <input type="text" name="department" placeholder=" Your depatment of domain" class="form-control mt-3" required>
            </div>
            <div class="col-md-12">
            <label class="labels" for="research">Research link</label>
            <input type="text" name="research" placeholder="Research you have done or you are working on it." class="form-control mt-3">
            </div>
            <div class="col-md-12">
            <label class="labels" for="Linkedin">Linkedin Profile</label>
            <input type="text" name="Linkedin" placeholder=" " class="form-control mt-3">
            </div>
            </div>
            <div class="mt-3 text-center">
                <button class="mt-2 btn btn-success">Submit</button>
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

<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Professional Dashboard</title>
    
    
</head>
<body>
    <div class="vh-100 d-flex justify-content-center align-items-center flex-column">
        <form action="upload.php" class="container" method="POST" enctype="multipart/form-data">
            <div class="text-center">
                <h1>Create your Dashboard</h1>
            </div>
            <label class="labels" for="pdtimg">Profile Picture</label>
            <input type="file" name="pdtimg" class="form-control mt-2" required>

            <label class="labels" for="Name">Name</label>
            <input type="text" name="Name" placeholder="Enter your name" class="form-control mt-3" required>

            <label class="labels" for="Email">Email</label>
            <input type="email" name="Email" placeholder="Enter your email" class="form-control mt-3" required>

            <label class="labels" for="Designation">Designation</label>
            <input type="text" name="Designation" placeholder="Enter your designation" class="form-control mt-3" required>

            <label class="labels" for="pdtimg1">Add Time Table</label>
            <input type="file" name="pdtimg1" class="form-control mt-2">

            <div class="text-center">
                <button class="btn profile-button">Submit</button>
            </div>
        </form>
    </div>
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
</html>-->
