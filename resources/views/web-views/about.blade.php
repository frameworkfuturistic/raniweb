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
    <meta name="Keywords" content="Children Hospital, Hospital, Jharkhand, Ranchi, Multispecialty, ICU, Neonatal ICU, 24x7 Critical Care Ambulance Service">
    <meta name="Description" content="Rani Hospital is the largest Children Hospital in Jharkhand. 250 bedded hospital with modern clinical and surgical facilities for infants and children.">
    <title>Rani Hospital</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
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
    </style>
</head>

<body>

    <!-- ====================================================
	header section -->
    @include('web-views.menu')
    <!-- end of header area -->
    <!-- about section -->
    <section class="text-center about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>about us</h2>
                    <div class="row">
                        <!-- about -->

                        <div class="col-sm-7 para">
                            <blockquote style="margin-top: 5px;">
                                <p class="p">We are a center of excellence in children’s healthcare. The idea of setting
                                    up a good hospital for children was born over four decades ago when our medical
                                    director was still studying in kinder gardens at Daltonganj. His Nanaji (Maternal
                                    grandfather) was the head clerk in district hospital Palamu at Daltonganj. Currently
                                    this hospital is run by a non-profit charitable organization; “Dukhharan Memorial
                                    Charitable Trust”. This trust has been formed in the memory of our medical
                                    director’s Nanaji (Late Sri Dukhharan Prasad Sinha). Our team started a children’s
                                    hospital in rented premises in year 2004 (Rani Children Hospital, Karamtoli,
                                    Ranchi). This modern Children’s Hospital (Rani Hospital) was started in year 2010.
                                    Till year 2015 theses two hospitals were run by a private limited company. The
                                    assets related to the hospitals were donated to the trust in year 2015. Since then
                                    these hospital are run by the trust.</p>
                            </blockquote>
                        </div>
                        <div class="col-md-5">
                            <h4 class="event_head"><i class="fa fa-spinner fa-spin"></i> Gallery</h4>
                            <!-- corousel -->
                            <!-- corousel -->
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="img/event1.jfif" alt="" class="eventimg">
                                    </div>

                                    <div class="item">
                                        <img src="img/event2.jfif" alt="" class="eventimg">
                                    </div>

                                    <div class="item">
                                        <img src="img/event3.jfif" alt="" class="eventimg">
                                    </div>
                                </div>
                                <!-- Left and right controls -->
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left event_margin"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right event_margin"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <!-- corousel -->
                        </div>
                        <!-- about -->
                        <div class="col-sm-12">
                            <h1>Who we are</h1>
                            <blockquote>
                                <p class="p">We are in the 20phpth year of glorious excellence in child care. Our founder
                                    Hon. Dr. Rajesh took courageous decision to start a state of the art facility for
                                    children healthcare in the region. Rani hospital has come a long way in tertiary
                                    child care not only in the state of Jharkhand but in the whole eastern part of the
                                    country. There are many medical facilities, which are not available elsewhere in the
                                    region. Rani hospital is 225+ bed multi-speciality health centres for Paediatrics
                                    with Doctors having decades of experience in handling critical cases. [List some
                                    awards and Recognitions also]</p>
                            </blockquote>
                        </div>
                    </div>
                    <h1>Quality Policy</h1>
                    <blockquote>
                        <p class="p">We are committed to meet and exceed the requirements and expectations of our
                            individual and corporate patients by providing coordinated, compassionate and
                            high-quality healthcare services.</p>
                    </blockquote>
                    <!-- how the dream become reality -->
                    <div class="">
                        <h1>how the dream become reality</h1>
                        <blockquote>
                            <p class="p">The idea of setting up a good hospital for children was born over four decades
                                ago when our medical director was still studying in kinder gardens at Daltonganj. His
                                Nanaji (Maternal grandfather) was the head clerk in district hospital Palamu at
                                Daltonganj. Currently this hospital is run by a non-profit charitable organization;
                                “Dukhharan Memorial Charitable Trust”. This trust has been formed in the memory of our
                                medical director’s Nanaji (Late Sri Dukhharan Prasad Sinha). Our team started a
                                children’s hospital in rented premises in year 2004 (Rani Children Hospital, Karamtoli,
                                Ranchi). This modern Children’s Hospital (Rani Hospital) was started in year 2010. Till
                                year 2015 theses two hospitals were run by a private limited company. The assets related
                                to the hospitals were donated to the trust in year 2015. Since then these hospital are
                                run by the trust.</p>
                        </blockquote>
                    </div>
                    <!-- how the dream become reality -->
                    <!-- tab-content-->
                    <div classr="row">
                        <div class="col-md-7">
                            <h1>Our Mission</h1>
                            <blockquote>
                                <p class="p">Our mission is to be a centre of excellence for neonatal and paediatric
                                    health care in India.</p>
                            </blockquote>
                        </div>
                        <div class="col-md-5">
                            <h1>Our Vision</h1>
                            <blockquote>
                                <p class="p">Our Vision is to provide highest standard of care at affordable cost.</p>
                            </blockquote>
                        </div>
                        <div class="col-md-12">
                            <h1>Our Values</h1>
                            <ul>
                                <li style="list-style: initial;">
                                    <p class="p">We maintain the highest standards and achieve them by continually
                                        measuring and improving our outcomes.</p>
                                </li>
                                <li style="list-style:initial;">
                                    <p class="p">We welcome change, encourage invention and continually seek better,
                                        more efficient ways to achieve our goals.</p>
                                </li>
                                <li style="list-style:initial;">
                                    <p class="p">We collaborate and share knowledge to benefit patients and fellow
                                        caregivers for the advancement of our mission.</p>
                                </li>
                                <li style="list-style:initial;">
                                    <p class="p">We strive to exceed our patients' expectations for comfort and
                                        convenience.</p>
                                </li>
                                <li style="list-style:initial;">
                                    <p class="p">We adhere to high moral principles and professional standards by a
                                        commitment to honesty, confidentiality, trust, respect and transparency.</p>
                                </li>
                                <li style="list-style:initial;">
                                    <p class="p">We demonstrate our commitment to world-class care by providing a caring
                                        and supportive environment for our patients, patients' families and fellow
                                        caregivers.</p>
                                </li>
                            </ul>
                            <h1>What we do</h1>
                            <blockquote>
                                <p class="p">We have a complete range of child healthcare services from critical care to
                                    preventive care. Most babies admitted to the NICU are premature (born before 37
                                    weeks of pregnancy), have low birth weight (less than 2.5 Kgs), have a medical
                                    condition that requires special care or any other life threatening condition. Twins,
                                    triplets, and other multiples often are admitted to the NICU, as they tend to be
                                    born earlier and smaller than single birth babies. Babies with medical conditions
                                    such as heart problems, infections, or birth defects are also cared for in the NICU.
                                </p>
                                <p class="p">Care of illness supported by our multi disciplinary specialty services
                                    including General Paediatrics, Neonatology, Nephrology, Neurology, Gastroenterology,
                                    Haematology, Oncology, Cardiology, Genetic and Metabolic Diseases, Paediatric
                                    Dentistry and Nutrition.</p>
                            </blockquote>
                        </div>
                    </div>
                    <!-- /tab-content-->
                </div>
            </div>
        </div>
    </section>
    <!-- end of about section -->
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
    <script src="js/gmaps.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>