<?php

include "fmenu.html";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profiles</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        /* body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            display: flex;
            align-items: center;
            justify-content: center; 
            height: 100vh;
            background-color: #FFE4C9;
        } */

        .outer {
            margin:50px;
            display: flex;
            flex-direction: column;
        }

        .containerr {
            margin-top: 20px;
            display: flex;
        }

        .profile {
            width: 300px;
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 20%;
            text-align: center;
            flex: 1;
        }

        .profile img {
            width: 200px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 15px;
        }

        .profile h2 {
            margin-bottom: 10px;
            color: #333;
        }

        .profile p {
            color: #666;
        }

        .student {
            transform: translateX(+50%);
            background-color: #87CEFA;
        }

        .faculty {
            transform: translateY(-10%);
            z-index: 1;
            background-color: #90EE90;
        }

        .alumni {
            transform: translateX(-50%);
            background-color: #85586F;
        }

        .profile-button {
            background-color: white;
            color: Black;
            max-width: max-content;
            padding: 15px 30px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .select {
            margin: 0;
            text-align: center;
            color: black;
        }

        @media screen and (max-width: 1125px) {
            body {
                align-items: flex-start;
            }

            .outer {
                width: 100%;
            }
        }
    
    </style>

</head>

<body style="background-color:  #FFE4C9;">
    
    <div class="outer">
    <h1 class="select">SELECT USER PROFILE</h1>
    <div class="containerr">
    <div class="profile student">
        <img src="data:image/png;base64,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" alt="Student Avatar">
        <h2>Student</h2>
    </div>

    <div class="profile faculty">
        <img src="data:image/png;base64,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" alt="Faculty Avatar">
        <h2>Faculty</h2>
    </div>

    <div class="profile alumni">
        <img src="https://previews.123rf.com/images/vectorkif/vectorkif1609/vectorkif160900070/65327593-student-girl-flat-style-beautiful-vector-icon-avatar.jpg" alt="Alumni Avatar">
        <h2>Alumni</h2>
        </a>
    </div>
   </div>
   <div class="select">   
        <a href="http://localhost/Project_work_final/shared/register.html">
        <button class="profile-button">SELECT</button>
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
</body>

 <script src="../assets/js/jquery-3.3.1.min.js"></script>
<script>
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
<script src="../assets/js/bootstrap.min.js"></script>
</html>