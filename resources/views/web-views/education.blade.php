<?php
//include connection
// $db=mysqli_connect("localhost","root","","rani",3307);
// $sql="select * from blog_posts where topic='topic-1' order by postID desc limit 8";
// $sql1="select * form blog_posts where topic='topic-2' order by postID desc limit 8";
// $result=mysqli_query($db,$sql);
// $result1=mysqli_query($db,$sql1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Keywords"
        content="Children Hospital, Hospital, Jharkhand, Ranchi, Multispecialty, ICU, Neonatal ICU, 24x7 Critical Care Ambulance Service">
    <meta name="Description"
        content="Rani Hospital is the largest Children Hospital in Jharkhand. 250 bedded hospital with modern clinical and surgical facilities for infants and children.">
    <title>Rani Hospital</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet'
        type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Ibarra+Real+Nova&display=swap" rel="stylesheet">
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="img/logo2.png">
    <!-- favicon -->
    <!--   Google Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Adamina">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Advent+Pro">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amarante">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anton">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Asset">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Capriola">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- roboto slab -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <!-- roboto slab -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="js/modernizr.js"></script>
    <style>
        .p {
            font-size: 18px;
            text-align: justify;
            font-family: 'Ibarra Real Nova', serif !important;
        }

        .about h1 {
            font-size: 30px;
            color: #5393de;
            text-align: left;
        }

        .about h2 {
            font-size: 50px;
        }

        body {
            background-color: aliceblue;
        }

        .para {
            -webkit-box-shadow: inset 1000px 1000px 2px 2px #f0f3f5;
            box-shadow: inset 1000px 1000px 2px 2px #deefff;
            -webkit-border-radius: 15px 15px 15px 15px;
            border-radius: 15px 15px 15px 15px;
        }

        blockquote {
            -webkit-box-shadow: inset 1000px 1000px 2px 2px #e5f5f5;
            box-shadow: inset 1000px 1000px 2px 2px #f0f8ff;
            -webkit-border-radius: 15px 15px 15px 15px;
            border-radius: 15px 15px 15px 15px;
        }

        input,
        textarea {
            font-family: cursive;
            background: #f5eee6;
        }

        .list-group-item {
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            font-size: large;
            font-family: auto;
            background: #cfedfb;
            color: black;
        }

        a.list-group-item {
            color: #032f4a;
        }

        .nav>li>a {
            margin-right: -10px;
        }

        .about-details {
            height: 240px;
        }

        .nav-item {
            width: 30%;
        }

        .nav-pills>li.active>a,
        .nav-pills>li.active>a:hover,
        .nav-pills>li.active>a:focus {
            color: #337ab7;
            border-bottom: 1px solid #337ab7;
            background: none;
        }

        .table-bordered>tbody>tr>th {
            background: #b5eaf3;
            color: black;
            font-family: auto;
            text-align: center;
        }

        td {
            font-family: auto;
            background: #ffffff;
        }

        td:hover {
            background: aliceblue;
        }

        .pre-scrollable {
            max-height: 300px;
        }

        hr {
            margin-top: 20px;
            margin-bottom: 20px;
            border: 0;
            border-top: 1px solid #b7baba;
        }

        .marquee {
            font-size: 28px;
            font-weight: 600;
            color: white;
            font-family: sans-serif;
        }

        .panel {
            margin-bottom: 5px;
        }

        .panel-default>.panel-heading {
            color: black;
            background-color: #e5e5e5;
            border-color: #ddd;
        }

        .panel-default>.panel-heading:hover {
            background: #caf3ff;
        }

        .panel-title {
            margin-top: 0;
            margin-bottom: 0;
            font-size: 19px;
            color: inherit;
            text-align: left;
            font-family: 'Lato', sans-serif;
        }

        .panel-body {
            padding: 10px;
            font-size: 17px;
            font-family: auto;
        }

        .navbar-default .navbar-nav>li>a {
            color: #fff;
        }

        .navbar-default .navbar-nav>li>a:hover {
            color: #fff;
        }

        .Pediatrician-doctor {
            border: 2px solid #c4e6e7;
            border-left: 30px solid #c4e6e7;
        }

        .section-doctor {
            display: block;
            text-align: left;
            padding: 0px 0px 0px 0px;
            margin-bottom: 25px;
            min-height: 145px;
            transition: 0.2s ease all 0s;
        }

        .section-doctor:hover {
            transform: scale(1.1);
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .section-doctor .doctors-name {
            margin: 0px;
            font-size: 17px;
            text-transform: uppercase;
            padding-bottom: 5px;
        }

        .section-doctor p {
            padding-left: 10px;
        }

        .section-doctor p {
            margin-bottom: 0px;
        }

        .doctors-name {
            padding: 10px;
            border-radius: 8px;
            margin-top: 0;
            margin: 0px;
            font-size: 16px;
            text-transform: uppercase;
            font-weight: 700;
        }

        .section-doctor .doctors-degree {
            padding: 0;
            margin: 0px 0px;
            padding-left: 10px;
        }

        .section-doctor p {
            padding-left: 10px;
        }

        .section-doctor p {
            margin-bottom: 0px;
            font-size: 15px;
        }

        @media only screen and (max-width: 600px) {
            .marquee {
                font-size: 11px;
            }

            .carousel-caption p {
                display: none;
            }

            .top-header {
                background: aliceblue;
            }
        }

        @media (min-width:1824px) {
            .reso {
                min-width: 1900px;
            }

            .service {
                background-size: cover;
            }
        }

        .notice {
            text-align: center;
            /* Center the heading */
        }

        .paragraph-section {
            height: 200px;
            /* Adjust paragraph section height as needed */
            overflow: auto;
            /* Enable scrolling if content exceeds height */
        }

        .image-section {
            display: flex;
            /* Use flexbox for positioning */
            align-items: center;
            /* Center image vertically */
            justify-content: center;
            /* Center image horizontally */
            height: 200px;
            /* Adjust image section height as needed */
        }

        .image-section img {
            max-width: 100%;
            /* Ensure image doesn't exceed container width */
            max-height: 100%;
            /* Ensure image doesn't exceed container height */
        }

        /* Modal styles */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1000;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgba(0, 0, 0, 0.8);
            /* Black background with opacity */
        }

        /* Modal content */
        .modal-content {
            margin: auto;
            display: block;
            max-width: 80%;
            max-height: 80%;
        }

        /* Close button */
        .close {
            color: white;
            position: absolute;
            top: 10px;
            right: 25px;
            font-size: 35px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: #999;
            text-decoration: none;
            cursor: pointer;
        }

        /* Modal styles */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1000;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgba(0, 0, 0, 0.8);
            /* Black background with opacity */
            margin-bottom: 20px;
        }

        /* Modal content */
        .modal-content {
            margin: auto;
            display: block;
            max-width: 50%;
            max-height: 50%;
            margin-bottom: 20px;
        }

        /* Close button */
       .close {
        color: #fff; /* Change color to bright white */
        position: absolute;
        top: 5px; /* Adjust top position as needed */
        right: 15px; /* Adjust right position as needed */
        font-size: 40px; /* Increase font size */
        font-weight: normal; /* Adjust font weight as needed */
        cursor: pointer;
    }

        .close:hover,
        .close:focus {
            color: #999;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <!-- ====================================================
 header section -->
    @include('web-views.menu')
    <!-- end of header area -->
    <!-- Educational Programs -->

   

      <section class="text-center about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- DNB -->
                    <h2>Notice  Programs</h2>
                    <h1><i class="fa fa-spinner"></i> Doctors Notice</h1>
                    <div class="col-md-6">
                        <blockquote>
                                 <div class="notice-container" style="margin-top: 20px;"> <!-- Adjust margin-top value as needed -->
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="notice">
                            <!-- Centered Heading -->
                            <h3 class="text-center">Important Notice</h3>
                            <!-- Paragraph Section -->
                            <div class="paragraph-section">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla accumsan tempor
                                    quam,
                                    ut scelerisque
                                    metus tincidunt eget. Fusce ut venenatis ligula. Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit.
                                    Nulla accumsan tempor quam, ut scelerisque metus tincidunt eget. Fusce ut
                                    venenatis
                                    ligula.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- Demo Image Section -->
                        <div class="image-section">
                            <img src="img/blogs1.jpg" alt="Demo Image" class="preview-image">
                        </div>
                    </div>
                    <div id="imagePreviewModal" class="modal">
                        <span class="close">&times;</span>
                        <img class="modal-content" id="previewImage">
                    </div>
                </div>
            </div>
        </div>
                        </blockquote>
                    </div>
                    
                    <!-- DNB -->
                    <!-- ====================================================================================== -->
                  
                    <hr class="linecolor">
                </div>
            </div>
        </div>
    </section>
    
    <section class="text-center about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- DNB -->
                    <h2>Educational Programs</h2>
                    <h1><i class="fa fa-spinner"></i> DNB</h1>
                    <div class="col-md-6">
                        <blockquote>
                            <p class="p">
                                <i class="fa fa-external-link"></i> Rani Hospital has been accredited by national borad
                                of
                                examinations in Medical Sciences for DNB (Pediatrics) course from january 2019 sesion
                                for
                                04(Post MD) and 04 (Post Diploma) seats.
                            </p>
                            <p class="p"><i class="fa fa-external-link"></i> Also been accredited by National
                                Board
                                of
                                Examinations in Medical Sciences for DNB super speciality course - DrNB (Pediatric
                                surgery)
                                from ;july 2021 session for seats.</p>
                            <p class="p"><i class="fa fa-external-link"></i> The Hospital is also accredited by
                                national
                                Board of Examinations in Medical Sciences for Post MBBS Diploma (DCH) course for 04
                                seats</p>
                            <p class="p"><i class="fa fa-external-link"></i> For further details please visit the
                                website:
                                <a href="www.natboard.edu.in">www.natboard.edu.in</a>
                            </p>
                            <p class="p"><i class="fa fa-external-link"></i> In-house registered Instituitional
                                Ethics Committee (IEC) with Department of Health Research (DHR), Ministry of Health and
                                Family Welfare, New Delhi vide File no-EC/NEW/INST/2020/1133 and also has
                                Inhouse Scientific Research Committee (SRC)
                            </p>
                        </blockquote>
                    </div>
                    <div class="col-md-6">
                        <img src="img/DNB1.jpg" alt="" style="width: 100%;">
                    </div>
                    <!-- DNB -->
                    <!-- ====================================================================================== -->
                    <div class="col-md-12">
                        <h1><i class="fa fa-spinner"></i> Fellowship in neonatology </h1>
                        <blockquote>
                            <p class="p">RANI HOSPITAL also runs IAP Neonatology Chapter Fellowship Training
                                Programme (4 seats per year) </p>
                        </blockquote>
                        <h1><i class="fa fa-external-link"></i> Our Faculties for DNB:</h1>
                        <p class="p">1. Dr Krishna Kumar MBBS MD, MRCP-HEAD OF THE DEPARTMENT</p>
                        <p class="p">2. Dr Ajay Ghosh MBBS, DCH, MD(Paed)</p>
                        <p class="p">3. Dr. Rajesh Kumar MBBS MD(PED) DM(NEONATOLOGY) SENIOR CONSULTANT CUM
                            MEDICAL
                            DIRECTOR
                        </p>
                        <p class="p">4. Dr Shailesh Chandra SENIOR CONSULTANT MBBS MD(PED)</p>
                        <p class="p">5. Dr Khalid Md Saifullah MBBS MD MRCP SENIOR CONSULTANT</p>
                        <p class="p">6. Dr Prem Ranjan Kumar MBBS MD (PED) SENIOR CONSULTANT</p>
                        <p class="p">7. Dr. Amardeep Kumar MBBS MD (PED) SENIOR CONSULTANT</p>
                        <!--  <p class="p">8. Dr Shakti Pad Das MBBS MD (PED) JUNIOR CONSULTANT</p>
                               <p class="p">9. Dr Jai Prakash MBBS MD (PED) JUNIOR CONSULTANT</p>
                         -->


                        <h1><i class="fa fa-external-link"></i> Our Faculties for Pediatric Surgery:</h1>
                        <p class="p">01. Dr Ramanuj Kumar MBBS MS MCh (Ped Surgery)</p>
                        <!--   <p class="p">02. Dr Jainender Kumar MBBS MS MCh (Ped Surgery)</p> -->

                    </div>
                    <hr class="linecolor">
                </div>
            </div>
        </div>
    </section>
    <!-- Educational Programs -->
    <br>
    <br>
    <hr>
    <!-- footer starts here -->
    @include('web-views.footer')
    <!-- script tags
 ============================================================= -->
    <script>
        $(document).ready(function() {
            $("#Neonatology").show();
        });
    </script>
    <script src="js/jquery-2.1.1.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/gmaps.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>

    <script>
        // Get the modal
        var modal = document.getElementById('imagePreviewModal');

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementsByClassName('preview-image')[0];
        var modalImg = document.getElementById('previewImage');
        img.onclick = function() {
            modal.style.display = 'block';
            modalImg.src = this.src;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName('close')[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = 'none';
        }
    </script>
</body>

</html>
