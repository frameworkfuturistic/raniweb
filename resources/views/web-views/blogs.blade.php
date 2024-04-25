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

        //blog style start

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-auto-rows: auto;
            grid-gap: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 40px;
            color: #333;
        }

        .blog-card {
            width: 100%;
            height: 300px;
            border: 1px solid #ccc;
            border-radius: 8px;
            overflow: hidden;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .blog-card:hover {
            transform: translateY(-5px);
        }

        .blog-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .blog-content {
            padding: 20px;
        }

        .blog-title {
            font-size: 20px;
            margin-bottom: 10px;
            cursor: pointer;
            color: #333;
            transition: color 0.3s ease;
        }

        .blog-title:hover {
            color: #0066cc;
        }

        .blog-description {
            font-size: 16px;
            line-height: 1.5;
            max-height: 75px;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }

        .blog-description.expand {
            max-height: none;
        }
        /* Style for Read More link */
.read-more {
    display: inline-block;
    margin-top: 10px;
    color: #007bff;
    text-decoration: none;
}

.read-more:hover {
    text-decoration: underline;
}


        //blog sidebar css

        /* Style for sidebar cards */
        .sidebar-card {
            margin-bottom: 30px;
            /* Add margin between sidebar cards */
        }

        /* Style for images in sidebar cards */
        .sidebar-card img {
            width: 100%;
            /* Make images responsive */
            border-radius: 5px;
            /* Add border radius to images */
        }

        /* Style for sidebar sections */
        .sidebar-section {
            padding: 20px;
            /* Add padding inside sidebar sections */
            background-color: #f8f9fa;
            /* Set background color for sidebar sections */
            border-radius: 5px;
            /* Add border radius to sidebar sections */
        }

        /* Style for heading of sidebar sections */
        .sidebar-section h3 {
            font-size: 18px;
            /* Adjust heading font size */
            color: #333;
            /* Set heading color */
            margin-bottom: 10px;
            /* Add margin below heading */
        }

        /* Style for list items in sidebar */
        .sidebar-section .blog-list {
            list-style-type: none;
            /* Remove default list styles */
            padding: 0;
            /* Remove default padding */
        }

        /* Style for links in sidebar */
        .sidebar-section .blog-list li a {
            display: block;
            /* Make links block-level for full width */
            padding: 5px 0;
            /* Add padding to links */
            color: #666;
            /* Set link color */
            text-decoration: none;
            /* Remove underline from links */
        }

        /* Style for links on hover in sidebar */
        .sidebar-section .blog-list li a:hover {
            color: #007bff;
            /* Change link color on hover */
        }
    </style>
</head>

<body>

    <!-- ====================================================
 header section -->
    @include('web-views.menu')
    <h1> Blogs</h1>

    <div class="col-md-8">
        <!-- First Row -->
        <div class="blog-card" onclick="toggleDescription(this)">
            <img src="img/blogs.jpg" alt="Blog Image" class="blog-image">
            <div class="blog-content">
                <h2 class="blog-title" onclick="toggleDescription(this)">Blog Title 1</h2>
                <p class="blog-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eget felis
                    aliquam, vulputate nulla id, consequat odio.</p>
                     <a href="description-page.html" class="read-more">Read More</a>
            </div>
        </div>

        <div class="blog-card">
            <img src="img/blogs1.jpg" alt="Blog Image" class="blog-image">
            <div class="blog-content">
                <h2 class="blog-title" onclick="toggleDescription(this)">Blog Title 2</h2>
                <p class="blog-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eget felis
                    aliquam, vulputate nulla id, consequat odio.</p>
            </div>
        </div>

        <div class="blog-card">
            <img src="img/blogs1.jpg" alt="Blog Image" class="blog-image">
            <div class="blog-content">
                <h2 class="blog-title" onclick="toggleDescription(this)">Blog Title 3</h2>
                <p class="blog-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eget felis
                    aliquam, vulputate nulla id, consequat odio.</p>
            </div>
        </div>
        <div class="blog-card">
            <img src="img/blogs1.jpg" alt="Blog Image" class="blog-image">
            <div class="blog-content">
                <h2 class="blog-title" onclick="toggleDescription(this)">Blog Title 3</h2>
                <p class="blog-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eget felis
                    aliquam, vulputate nulla id, consequat odio.</p>
            </div>
        </div>
        <div class="blog-card">
            <img src="img/blogs1.jpg" alt="Blog Image" class="blog-image">
            <div class="blog-content">
                <h2 class="blog-title" onclick="toggleDescription(this)">Blog Title 3</h2>
                <p class="blog-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eget felis
                    aliquam, vulputate nulla id, consequat odio.</p>
            </div>
        </div>

        <!-- Repeat the same structure for subsequent rows -->
        <!-- Second Row -->
        <!-- Third Row -->
        <!-- and so on... -->
    </div>
     <div class="col-md-4">
            <!-- Sidebar Section: Upcoming Blogs -->
            <div class="sidebar-card">
                <img src="img/blogs.jpg" alt="Upcoming Blogs Image">
                <div class="sidebar-section">
                    <h3>Upcoming Blogs</h3>
                    <ul class="blog-list">
                        <li><a href="#">Upcoming Blog 1</a></li>
                        <li><a href="#">Upcoming Blog 2</a></li>
                        <li><a href="#">Upcoming Blog 3</a></li>
                        <!-- Add more upcoming blogs here -->
                    </ul>
                </div>
            </div>
            <!-- Sidebar Section: Recent Blogs -->
            <div class="sidebar-card">
                <img src="img/blogs1.jpg" alt="Recent Blogs Image">
                <div class="sidebar-section">
                    <h3>Recent Blogs</h3>
                    <ul class="blog-list">
                        <li><a href="#">Recent Blog 1</a></li>
                        <li><a href="#">Recent Blog 2</a></li>
                        <li><a href="#">Recent Blog 3</a></li>
                        <!-- Add more recent blogs here -->
                    </ul>
                </div>
            </div>
            <!-- Sidebar Section: List of Blogs -->
            <div class="sidebar-card">
                <img src="img/blogs.jpg" alt="All Blogs Image">
                <div class="sidebar-section">
                    <h3>List of Blogs</h3>
                    <ul class="blog-list">
                        <li><a href="#">Blog 1</a></li>
                        <li><a href="#">Blog 2</a></li>
                        <li><a href="#">Blog 3</a></li>
                        <!-- Add more blogs here -->
                    </ul>
                </div>
            </div>
        </div>
    <!-- footer starts here -->
    @include('web-views.footer')
    <!-- script tags
 ============================================================= -->
    <script>
        function toggleDescription(title) {
            var description = title.nextElementSibling;
            description.classList.toggle("expand");
        }
    </script>
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

</body>

</html>
