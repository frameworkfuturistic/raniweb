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
    <!-- roboto slab -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <!-- roboto slab -->
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
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
            color: #007699 !important;
            font-weight: bold;
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
            font-size: 20px;
            font-weight: 600;
            color: white;
            font-family: 'Roboto Slab', serif;
            text-align: center;
            text-transform: uppercase;
        }

        .panel {
            margin-bottom: 5px;
        }

        .panel-default>.panel-heading {
            color: black;
            background-color: #a8ebff;
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
                float: left;
                padding-top: 5px;
            }

            .carousel-caption p {
                display: none;
            }

            .top-header {
                background: aliceblue;
            }

            .growing {
                float: right;
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


        @keyframes glowing {
            0% {
                background-color: #D71313;
                box-shadow: 0 0 5px #D71313;
                color: white;
            }

            50% {
                background-color: #0802A3;
                box-shadow: 0 0 20px #0802A3;
                color: white;
            }

            100% {
                background-color: #D71313;
                box-shadow: 0 0 5px #D71313;
                color: white;
            }
        }

        .growing {
            animation: glowing 1300ms infinite;
        }
    </style>
</head>

<body>

    <!-- ====================================================
	header section -->
    <!-- <div class="alert header-bg">
     <div class="left-bar">
          
     </div>
</div> -->

    <!-- header section -->
    @include('web-views.menu')
    <!-- header section -->
    <section class="slider" id="home">
        <div class="container-fluid">
            <div class="row">
                <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="header-backup"></div>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="img/2.jpg" alt="" class="reso hidden-xl hidden-lg">
                            <div class="slider1 visible-xl visible-lg parallax-window" data-parallax="scroll"></div>
                            <div class="carousel-caption hidden-xs hidden-sm">
                                <p class="top">The best way to make children good is to make them happy</p>
                                <button class="hidden-xs hidden-sm growing" onclick="window.open('{{$appointmentUrl}}','_blank')"><i class="fa fa-user-md"></i> Book Appointment</button>
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/buildingcopy1.png" alt="" class="reso hidden-xl hidden-lg" id="slide2">
                            <div class="slider2 visible-xl visible-lg"></div>
                            <div class="carousel-caption hidden-xs hidden-sm">
                                <p>Children make your life important</p>
                                <button class="hidden-xs hidden-sm growing" onclick="window.open('{{$appointmentUrl}}','_blank')"><i class="fa fa-user-md"></i> Book Appointment</button>
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/slidedoctor.jpg" alt="" class="reso hidden-xl hidden-lg" id="slide3">
                            <div class="slider3 visible-xl visible-lg"></div>
                            <div class="carousel-caption hidden-xs hidden-sm">
                                <p>Children make your life important</p>
                                <button class="hidden-xs hidden-sm growing" onclick="window.open('{{$appointmentUrl}}','_blank')"><i class="fa fa-user-md"></i> Book Appointment</button>
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/5.jpg" alt="" class="reso hidden-xl hidden-lg" id="slide4">
                            <div class="slider4 visible-xl visible-lg"></div>
                            <div class="carousel-caption hidden-xs hidden-sm">
                                <p>Children make your life important</p>
                                <button class="hidden-xs hidden-sm growing" onclick="window.open('{{$appointmentUrl}}','_blank')"><i class="fa fa-user-md"></i> Book Appointment</button>
                            </div>
                        </div>
                        <!-- accrediations -->
                        <div class="item">
                            <img src="img/accreditations1.jpg" alt="" class="reso hidden-xl hidden-lg" id="slide5">
                            <div class="slider5 visible-xl visible-lg"></div>
                            <!-- <div class="carousel-caption hidden-xs hidden-sm">
                                <p>Children make your life important</p>
                                <button class="hidden-xs hidden-sm" onclick="location.href='tel:+917061159186';">DNB:
                                    7061159186</button>
                            </div> -->
                        </div>
                        <!-- accreditations -->
                        <!-- awards -->
                        <div class="item">
                            <img src="img/award.jpg" alt="" class="reso hidden-xl hidden-lg" id="slide6">
                            <div class="slider6 visible-xl visible-lg"></div>
                            <!-- <div class="carousel-caption">
                                <p>Children make your life important</p>
                                <button class="hidden-xs hidden-sm" onclick="location.href='tel:+917061159186';">DNB:
                                    7061159186</button>
                            </div> -->
                        </div>
                        <!-- awards -->
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div style="background-color:#1C6DD0; padding:15px;">
                    <div class="container hidden-xs hidden-sm">
                        <div class="">
                            <div class="marquee" behavior="alternate" direction="left" onmouseover="this.stop();" onmouseout="this.start();">Emergency No.(24x7) : <i class="fa fa-phone-square"></i>
                                7677111010, 18002574010</div>
                        </div>
                        <!-- <div class="col-md-3">
                            <div class="marquee">DNB: 7061159186</div>
                        </div> -->
                    </div>
                    <div class="container-fluid visible-xs visible-sm">
                        <div class="col-sm-12">
                            <button class="btn btn-sm growing" onclick="window.open('{{$appointmentUrl}}','_blank')"><i class="fa fa-user-md"></i> Book Appointment</button>
                        </div>
                        <div class="col-md-12">
                            <div class="marquee"><i class="fa fa-trophy"></i>DNB: 7061159186</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- end of slider section -->
    <!-- overview -->
    <section class="about text-center" id="about">
        <div class="container">
            <div class="row">
                <h2>About Rani Hospital</h2>
                <div class="col-md-8">
                    <blockquote>
                        <p class="p">
                            Rani Hospital has grown overtime by extending child healthcare specialization in a medically
                            underdeveloped state like Jharkhand. Excellence in the healthcare services has made us a
                            reputation of Regional Tertiary Health Centre for newborn and children in the region. We
                            have a very large share of patients from nearby states. Rani Hospital is a 225 bedded super
                            speciality children hospital situated in the capital of Jharkhand. We have the honour of
                            being the largest treatment facility for sick children in private sector in India. <br>
                            We are in the 18th year of glorious excellence in child care. Our founder Hon. Dr. Rajesh
                            took courageous decision to start a state of the art facility for children healthcare in the
                            region. Rani hospital has come a long way in tertiary child care not only in the state of
                            Jharkhand but in the whole eastern part of the country. There are many medical facilities,
                            which are not available elsewhere in this region. Rani hospital is 225+ bed multi-speciality
                            health centres for Paediatrics with Doctors having decades of experience in handling
                            critical cases.
                            <br>
                            We are an ethical, transparent group and follow purely ‘evidence based medicine’. Still our
                            charges are almost equivalent to the charges prescribed by the government (CGHS rates for
                            Ranchi). We caters for all the strata our society; low income families to the middle and
                            upper income families. Currently we are mainly involved in the care of sick children. Soon
                            we will be starting the services for the women also. For us the care of children will be the
                            first priority.
                        </p>
                    </blockquote>
                </div>
                <!-- sidebar -->
                <div class="col-sm-4">
                    <div class="list-group">
                        <a href="#" class="list-group-item p" style="color: blue;"><i class="fa fa-ambulance"></i>
                            <strong>Ambulance Services</strong></a>
                        <a href="tel:+917677111010" class="list-group-item p">7677111010, 0651-2360430/35</a>
                        <a href="#" class="list-group-item p">Centre of excellence in children’s healthcare</a>
                        <a href="#" class="list-group-item p">Neonatology, Paediatrics</a>
                        <a href="#" class="list-group-item p">Interstate Ambulance Services</a>
                        <a href="#" class="list-group-item p">HHFO, CPAP</a>
                        <a href="#" class="list-group-item p">All Neonatal procedures</a>
                        <a href="#" class="list-group-item p">Screening Of Newborns</a>
                        <a href="#" class="list-group-item p">All types of paediatric surgery</a>
                    </div>
                    <!-- <div class="list-group" style="margin-top: 25px;">
                            
                            </div> -->
                </div>
                <!-- sidebar -->

            </div>
        </div>
    </section>
    <!-- overview -->
    <br><br>
    <!-- bullet texts -->
    <section class="bullet_text text-center">
        <div class="container">
            <div class="row">
                <!-- features -->
                <div class="col-md-6">
                    <div id="introblocks">
                        <div class="table nospace clear">
                            <div class="cell">
                                <!-- ################################################################################################ -->
                                <h4 class="heading"><i class="fa fa-medkit" style="height: 50px;"></i><strong>Our
                                        Specialities</strong>
                                </h4>
                                <ul style="margin-top: -20px;">
                                    <li><i class="fa fa-external-link"></i> <a class="feature" href="#">Centre of
                                            excellence in
                                            children’s healthcare</a></li>
                                    <li><i class="fa fa-external-link"></i> <a class="feature" href="#">225 Bedded Super
                                            Speciality
                                            Children Hospital.</a></li>
                                    <li><i class="fa fa-external-link"></i> <a class="feature" href="#">Best in class
                                            treatment
                                            facility in Eastern India.</a></li>
                                    <li><i class="fa fa-external-link"></i> <a class="feature" href="#">Inter state
                                            Ambulance
                                            Services</a></li>
                                    <li><i class="fa fa-external-link"></i> <a class="feature" href="#">Best Tertiary
                                            care NICU
                                            facility in the region</a></li>
                                    <li><i class="fa fa-external-link"></i> <a class="feature" href="#">Mechanical and
                                            Non Invasive
                                            ventilator</a></li>
                                    <li><i class="fa fa-external-link"></i> <a class="feature" href="#">HHFO, CPAP</a>
                                    </li>
                                    <li><i class="fa fa-external-link"></i> <a class="feature" href="#">All Neonatal
                                            procedures</a>
                                    </li>
                                    <li><i class="fa fa-external-link"></i> <a class="feature" href="#">All types of
                                            paediatric
                                            surgery</a></li>
                                </ul>
                                <!-- ################################################################################################ -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- features -->
                <!-- features3 -->
                <div class="col-md-6">
                    <div id="introblocks">
                        <div class="table nospace clear">
                            <div class="cell">
                                <!-- ################################################################################################ -->
                                <h4 class="heading"><i class="fa fa-medkit" style="height: 50px;"></i><strong>Our
                                        Specialities</strong>
                                </h4>
                                <ul style="margin-top: -20px;">
                                    <li><i class="fa fa-external-link"></i> <a class="feature" href="#">Treatment and
                                            Care of ELBW,
                                            VLBW, LBW in NICU</a></li>
                                    <li><i class="fa fa-external-link"></i> <a class="feature" href="#">Screening Of
                                            Newborns</a>
                                    </li>
                                    <li><i class="fa fa-external-link"></i> <a class="feature" href="#">Special Care &
                                            Neonatal
                                            Intensive Care</a></li>
                                    <li><i class="fa fa-external-link"></i> <a class="feature" href="#">Paediatrics
                                            Emergency
                                            Transport Service</a></li>
                                    <li><i class="fa fa-external-link"></i> <a class="feature" href="#">Preoperative &
                                            Postoperative
                                            Care</a></li>
                                    <li><i class="fa fa-external-link"></i> <a class="feature" href="#">Technology &
                                            Facilities </a>
                                    </li>
                                    <li><i class="fa fa-external-link"></i> <a class="feature" href="#">A Special
                                            Paediatrics
                                            Intensive Care Unit With Ventilators</a></li>
                                    <li><i class="fa fa-external-link"></i> <a class="feature" href="#">Preoperative &
                                            Postoperative
                                            Care</a></li>
                                    <li><i class="fa fa-external-link"></i> <a class="feature" href="#">Neonatal
                                            Intensive Care Unit
                                            Along With Neonatal Ventilators</a></li>
                                </ul>
                                <!-- ################################################################################################ -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- features3 -->
            </div>
        </div>
    </section>
    <!-- bullet texts -->
    <!-- specialities tabs -->
    <section class="about text-center">
        <div class="container">
            <div class="row">
                <!-- specialities tab -->
                <!-- definitions -->
                <section class="about text-center" id="about">
                    <div class="container">
                        <div class="row">
                            <h2>Specialities</h2>
                            <br>
                            <div class="col-sm-3">
                                <!-- left tab -->
                                <ul class="nav nav-pills nav-stacked">
                                    <li class="active"><a data-toggle="tab" href="#Paediatrics">Paediatrics</a></li>
                                    <li><a data-toggle="tab" href="#Neonatology">Neonatology</a></li>
                                    <li><a data-toggle="tab" href="#allergy">Paediatric Surgery</a></li>
                                </ul>
                            </div>
                            <!-- left tab -->
                            <!-- right content -->
                            <div class="col-sm-9">
                                <div class="tab-content">
                                    <div id="Paediatrics" class="tab-pane fade in active">
                                        <h3>Paediatrics</h3>
                                        <p class="definition">Paediatrics is a healthcare specialty, which deals with
                                            the medical
                                            care of infants, children, and adolescents suffering from different
                                            diseases.
                                            Care for children in health and sickness is an integral part of any
                                            hospital. Rani
                                            Hospital, Jharkhand has an established department for paediatric patients
                                            and we strive
                                            to provide quality healthcare with tender care to the children suffering
                                            from illnesses.
                                            With multiple years of expertise in treating paediatric diseases, we have
                                            become one of
                                            the best paediatric hospitals in Jharkhand for paediatric treatment and
                                            management.
                                            <br>
                                            We focus on providing high-quality care centred around the needs and
                                            requirements of
                                            children suffering from a disease. <br>
                                            At Rani Hospital, the Center for Paediatrics offers a rainbow of
                                            services and
                                            comprehensive care for children from birth to the age of 18 years. We
                                            provide a full
                                            range of clinical services, tertiary care, health promotion, and prevention
                                            programs for
                                            children as well as adolescents. <br>
                                            Our specialists possessing a rainbow of skills with immense experience in
                                            all
                                            sub-disciplines of paediatric medicine. We continuously offer
                                            state-of-the-art
                                            paediatric care in the form of open communication, emotional support, and
                                            education to
                                            all patients and their families on ways to manage the clinical problems
                                            related to
                                            children. <br>
                                            The center provides both inpatient and outpatient services to the patients.
                                            The
                                            outpatient services manage a wide range of paediatric medical problems along
                                            with
                                            diagnosis and management of behavioural and developmental conditions such as
                                            attention
                                            deficit hyperactivity disorder (ADHD), autism spectrum disorder, development
                                            issues, and
                                            children having multiple problems who require ongoing care for chronic
                                            conditions. <br>
                                            The consultant paediatricians in the department discuss the condition
                                            thoroughly with
                                            the parents after which they plan a personalized treatment depending on the
                                            child’s
                                            comfort. We take a lot of care in providing child-centric service to the
                                            patients. The
                                            paediatric ward is well furnished with the latest technologies and promotes
                                            the overall
                                            development of the child. This comprehensive approach towards treatment has
                                            made us the
                                            top children’s hospital in Jharkhand.
                                        </p>
                                        <div class="col-md-6">
                                            <img src="img/PICU.png" alt="" style="width:100%;">
                                        </div>
                                        <div class="col-md-6">
                                            <img src="img/PAEDIATRICS2.jfif" alt="" style="width:100%; height:325px;">
                                        </div>
                                    </div>
                                    <div id="Neonatology" class="tab-pane fade">
                                        <h3>Neonatology</h3>
                                        <p class="definition">
                                            Neonatology is a subspecialty in pediatric care that deals with the medical
                                            care for the new-born infants, especially the sick, premature new-borns and
                                            babies with low birth weight than required, or with any infections, heart
                                            problems or congenital defects. This is a hospital-based specialty and is
                                            usually practiced in neonatal intensive care units. At Rani Hospital, the
                                            team of Neonatologists are skilled and equipped with latest technologies to
                                            render care for newborn and pre-term babies with the support of NICU
                                            (Neonatal Intensive Care Units) Level 3 with the following facilities:
                                            <br>
                                            • Dedicated High-Frequency Ventilator
                                            <br>
                                            • Conventional Ventilators <br>
                                            • HFNC <br>
                                            • Blood Gas Analyzer <br>
                                            • Isolation Room <br>
                                            • State-of-the-art Bedside Physiological Monitors <br>
                                            • Incubators and Open Head Warmers <br>
                                            • Digital Syringe and Infusion Pumps <br>
                                            • Specially Designed Nursery to promote the development of the new-born
                                            (special lighting to promote sleep/awake cycle, low ambient noise level)
                                            <br>
                                            • Intensive phototherapy <br>
                                            • Peritoneal dialysis <br>
                                            • Exchange transfusion

                                        </p>
                                        <div class="col-md-12">
                                            <img src="img/NEONATOLOGY1.jfif" alt="" style="width:100%; height:325px;">
                                        </div>
                                        <!-- <div class="col-md-6">
                                            <img src="img/NEONATOLOGY2.jfif" alt="" style="width:100%; height:325px;">
                                        </div> -->
                                    </div>
                                    <div id="allergy" class="tab-pane fade">
                                        <h3>Paediatric Surgery</h3>
                                        <p class="definition">Pediatric and Neonatal Surgery is a subspecialty of the
                                            surgery of infant, child, adolescent, as well as young adult. Such surgery
                                            may be required in diseases like congenital malformations including
                                            lymphangioma, esophageal atresia and tracheoesophageal fistula, cleft lip
                                            and palate, hypertrophic pyloric stenosis etc. Neonatal and Pediatric
                                            Surgery is necessary in case of abdominal wall defects such as
                                            gastroschisis, omphalocele, hernias etc.</p>

                                        <div class="col-md-12">
                                            <img src="img/OT1.jfif" alt="" style="width:100%; height:325px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- right content -->
                        </div>
                    </div>
                </section>
                <!-- definitions -->
                <!-- specialities tab -->
            </div>
        </div>
    </section>
    <!-- specialities tabs -->
    <!-- service section starts here -->
    <section class="service text-center" id="service">
        <div class="container">
            <div class="row">
                <h2>our Services</h2>
                <h4>Rani Hospital is a super-specialty hospital providing healthcare services exclusively in the
                    department of Pediatrics and Neonatology. We will provide pediatric and neonatal care for patients
                    from birth through eighteen years of age. All our services are aligned to this super-specialty
                    expertise only.</h4>
                <!-- <div class="col-md-3 col-sm-6">
                    <div class="single-service">
                        <div class="single-service-img">
                            <div class="service-img">
                                <img class="heart img-responsive" src="img/service1.png" alt="">
                            </div>
                        </div>
                        <h3>Heart problem</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-service">
                        <div class="single-service-img">
                            <div class="service-img">
                                <img class="brain img-responsive" src="img/service2.png" alt="">
                            </div>
                        </div>
                        <h3>brain problem</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-service">
                        <div class="single-service-img">
                            <div class="service-img">
                                <img class="knee img-responsive" src="img/service3.png" alt="">
                            </div>
                        </div>
                        <h3>knee problem</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-service">
                        <div class="single-service-img">
                            <div class="service-img">
                                <img class="bone img-responsive" src="img/service4.png" alt="">
                            </div>
                        </div>
                        <h3>human bones problem</h3>
                    </div>
                </div> -->
                <!-- <h2 style="margin-bottom: 1px; color: white; font-size: 40px; margin-top: -30px;"><strong>Other
                        Services</strong></h2> -->
                <div class="col-sm-4">
                    <div class="list-group">
                        <a href="#" class="list-group-item black">Paediatrics</a>
                        <a href="#" class="list-group-item black">Paediatrics Superspeciality</a>
                        <a href="#" class="list-group-item black">Paediatrics Intensive Care</a>
                        <a href="#" class="list-group-item black">Anaesthesiology</a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="list-group">
                        <a href="#" class="list-group-item black">Neonatal Care</a>
                        <a href="#" class="list-group-item black">Neonatal ICU</a>
                        <a href="#" class="list-group-item black">Laboratory Medicine</a>
                        <a href="#" class="list-group-item black">Pharmacy</a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="list-group">
                        <a href="#" class="list-group-item black">Ambulance Services</a>
                        <a href="#" class="list-group-item black">Laboratory Services</a>
                        <a href="#" class="list-group-item black">Neuroscience</a>
                        <a href="#" class="list-group-item black">Emergency</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- end of service section -->
    <section class="Department text-center" id="Department">
        <div class="container-fluid">
            <div class="row">
                <h2>Our Department</h2>
                <div class="col-md-4 col-sm-6">
                    <div class="single-about-detail clearfix">
                        <div class="about-img">
                            <img class="img-responsive" src="img/PICU.png" alt="" title="Paediatrics Intensive Care">
                        </div>
                        <div class="about-details" style="height:220px;">
                            <div class="pentagon-text">
                                <h1>P</h1>
                            </div>
                            <h3>Paediatrics Intensive Care</h3>
                            <p style="text-align: justify;">The speciality
                                deals with serious, and critical illness in children which have assumed life threatening
                                proportions. In no other branch of medicine is prompt rapid care so rewarding as in
                                Pediatric. We have 25 beded paediatric ICU and 22 beded paediatric HDU. PICU has more
                                than 10 ventilitors.<a href="" style="color: red; font-size: 14px; margin-left: 190px;"></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-about-detail">
                        <div class="about-img" title="Neonatology">
                            <img class="img-responsive" src="img/NICU.png" alt="">
                        </div>
                        <div class="about-details" style="height: 220px;">
                            <div class="pentagon-text">
                                <h1>N</h1>
                            </div>

                            <h3>Neonatology</h3>
                            <p style="text-align: justify;">Our hospital has pioneered and
                                spearheaded the arrival and establishment of advanced Newborn Intensive Care in
                                Jharkhand and whole of eastern India since 2004.NICU has latest facilities including
                                >100 NICU beds, >25 ventilitors, 2 HFO ventilitors, nitric oxide system, therapeutic
                                hypothermia and brain monitoring system(aEEG).<br><a href="" style="color: red; font-size: 14px; margin-left: 280px;"></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-about-detail">
                        <div class="about-img">
                            <img class="img-responsive" src="img/PS.png" alt="" title="Paediatrics Surgery">
                        </div>
                        <div class="about-details" style="height: 220px;">
                            <div class="pentagon-text">
                                <h1>S</h1>
                            </div>
                            <h3>Paediatrics Surgery</h3>
                            <p style="text-align: justify;">We have dedicated operation theater for neonatal and
                                paediatric surgery. We do >100 surgeries for neonate and children every month. We do all
                                complicated surgeries except cardiac surgeries.
                                <br><a href="" style="color: red; font-size: 14px; margin-left: 280px;"></a>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- team section -->
    <section class="team text-center" id="team">
        <div class="container">
            <div class="row">
                <div class="team-heading text-center">
                    <h2>Our Team of Experts</h2>
                    <h4></h4>
                </div>
                <!-- doctor corousel -->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <!-- item 1 -->
                            <div class="col-md-2 single-member col-sm-4">
                                <div class="person">
                                    <img class="img-responsive" src="doctors/drkrishna.jpg" alt="member-1">
                                </div>
                                <div class="person-detail">
                                    <div class="arrow-bottom"></div>
                                    <h4>Dr. Krishna Kumar</h4>
                                    <p><strong>DCH, MD(Paed), MRCP, HOD(Paediatrics)</strong></p>
                                    <p>Senior Consultant Paediatrics/Neonatology</p>
                                    <button type="button" class="btn btn-primary"> About</button>
                                </div>
                            </div>
                            <div class="col-md-2 single-member col-sm-4">
                                <div class="person-detail">
                                    <div class="arrow-top"></div>
                                    <h4>Dr. Ajay Ghosh</h4>
                                    <p><strong>DCH, M.D.(Paed)</strong></p>
                                    <p>Senior Consultant Paediatrics</p> <br>
                                    <button type="button" class="btn btn-primary"> About</button>
                                </div>

                                <div class="person">
                                    <img class="img-responsive" src="doctors/drajay.jpg" alt="member-5">
                                    <!-- <img class="img-responsive" src="img/member2.jpg" alt="member-2"> -->
                                </div>
                            </div>
                            <div class="col-md-2 single-member col-sm-4">
                                <div class="person">
                                    <!-- <img class="img-responsive" src="img/drsakti.jpg" alt="member-3"> -->
                                    <img class="img-responsive" src="img/drrajesh.jpg" alt="member-1">
                                </div>
                                <div class="person-detail">
                                    <div class="arrow-bottom"></div>
                                    <h4>Dr. Rajesh Kumar</h4>
                                    <p><strong>M.D.(Paed), D.M.(Neonat) (Gold medalist)</strong></p>
                                    <p>Medical Director cum Senior Consultant</p>
                                    <button type="button" class="btn btn-primary"> About</button>
                                </div>
                            </div>
                            <div class="col-md-2 single-member col-sm-4">
                                <div class="person-detail">
                                    <div class="arrow-top"></div>
                                    <h4>Dr. Shailesh Chandra</h4>
                                    <p><strong>M.D.(Paed)</strong></p>
                                    <p>Senior Consultant Paediatrics/Neonatology</p>
                                    <br>
                                    <button type="button" class="btn btn-primary"> About</button>
                                </div>
                                <div class="person">
                                    <img class="img-responsive" src="doctors/drshailesh.jpg" alt="member-5">
                                </div>
                            </div>
                            <div class="col-md-2 single-member col-sm-4">
                                <div class="person">
                                    <img class="img-responsive" src="doctors/drkhalid.jpg" alt="member-5">
                                </div>
                                <div class="person-detail">
                                    <div class="arrow-bottom"></div>
                                    <h4>Dr. Khalid M Saifullah</h4>
                                    <p><strong>MD(Paed), MRCP(Paed), MSc(Neonat) </strong></p>
                                    <p style="margin-top: -9px;">Senior Consultant Paediatrics/Neonatology</p>
                                    <button type="button" class="btn btn-primary"> About</button>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-2 single-member col-sm-4">
                                <div class="person-detail">
                                    <div class="arrow-top"></div>
                                    <h4>Dr. Prem Ranjan Kumar</h4>
                                    <p style="text-align: justify;">
                                    <p><strong>M.D.(Paed)</strong></p>
                                    <p>Medical superintendent cum Senior Consultant Paediatrics</p>
                                    <button type="button" class="btn btn-primary"> About</button>
                                </div>
                                <div class="person">
                                    <img class="img-responsive" src="doctors/drprem.jpg" alt="member-5">
                                </div>
                            </div>
                            <!-- item 1 -->
                        </div>
                        <div class="item">
                            <!-- item2 -->
                            <div class="col-md-2 single-member col-sm-4">
                                <div class="person">
                                    <img class="img-responsive" src="doctors/amardeep.jpg" alt="member-1">
                                </div>
                                <div class="person-detail">
                                    <div class="arrow-bottom"></div>
                                    <h4>Dr. Amardeep Kumar</h4>
                                    <p><strong>MBBS, MD(Paed)</strong></p>
                                    <p>Senior Consultant Paediatrics/Neonatology</p> <br>
                                    <button type="button" class="btn btn-primary"> About</button>
                                </div>
                            </div>
                            <div class="col-md-2 single-member col-sm-4">
                                <div class="person-detail">
                                    <div class="arrow-top"></div>
                                    <h4>Dr. Shakti Pad Das</h4>
                                    <p><strong>MBBS, MD(Paed)</strong></p>
                                    <p>Senior Consultant Paediatrics/Neonatology</p> <br>
                                    <button type="button" class="btn btn-primary"> About</button>
                                </div>

                                <div class="person">
                                    <img class="img-responsive" src="img/drsakti.jpg" alt="member-5">
                                    <!-- <img class="img-responsive" src="img/member2.jpg" alt="member-2"> -->
                                </div>
                            </div>
                            <div class="col-md-2 single-member col-sm-4">
                                <div class="person">
                                    <!-- <img class="img-responsive" src="img/drsakti.jpg" alt="member-3"> -->
                                    <img class="img-responsive" src="doctors/vinod.jpg" alt="member-1">
                                </div>
                                <div class="person-detail">
                                    <div class="arrow-bottom"></div>
                                    <h4>Dr. Vinod Kumar</h4>
                                    <p><strong>MBBS, DCH</strong></p>
                                    <p>Fellowship in Neonatology <br>
                                        Senior Consultant Neonatology/Paediatrics</p>
                                    <button type="button" class="btn btn-primary"> About</button>
                                </div>
                            </div>
                            <div class="col-md-2 single-member col-sm-4">
                                <div class="person-detail">
                                    <div class="arrow-top"></div>
                                    <h4>Dr. Md. Khalid</h4>
                                    <p><strong>MBBS, DCH</strong></p>
                                    <p>Senior Consultant</p> <br><br>
                                    <button type="button" class="btn btn-primary"> About</button>
                                </div>
                                <div class="person">
                                    <img class="img-responsive" src="doctors/mdkhalid.jpg" alt="member-5">
                                </div>
                            </div>
                            <div class="col-md-2 single-member col-sm-4">
                                <div class="person">
                                    <img class="img-responsive" src="doctors/jaiprakash.jpg" alt="member-5">
                                </div>
                                <div class="person-detail">
                                    <div class="arrow-bottom"></div>
                                    <h4>Dr. Jai Prakash</h4>
                                    <p><strong>MBBS, MD(Paed)</strong></p>
                                    <p>Senior Consultant Paediatrics/
                                        Neonatology</p>
                                    <button type="button" class="btn btn-primary"> About</button>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-2 single-member col-sm-4">
                                <div class="person-detail">
                                    <div class="arrow-top"></div>
                                    <h4>Dr. Ramanuj Kumar</h4>
                                    <p style="text-align: justify;">
                                    <p><strong>MBBS, MS, MCH</strong></p>
                                    <p>Paediatric Surgeon</p> <br><br>
                                    <button type="button" class="btn btn-primary"> About</button>
                                </div>
                                <div class="person">
                                    <img class="img-responsive" src="doctors/ramanuj.jpg" alt="member-5">
                                </div>
                            </div>
                            <!-- item2 -->
                        </div>
                        <!-- item3 -->
                        <!-- item3 -->
                        <div class="item">
                            <div class="col-md-2 single-member col-sm-4">
                                <div class="person">
                                    <img class="img-responsive" src="doctors/jainendra.jpg" alt="member-1">
                                </div>
                                <div class="person-detail">
                                    <div class="arrow-bottom"></div>
                                    <h4>Dr. Jaindendra Kumar</h4>
                                    <p style="text-align: justify;">
                                    <p><strong>MBBS, MS, MCH</strong></p>
                                    <p>Paediatric Surgeon</p> <br><br>
                                    <button type="button" class="btn btn-primary"> About</button>
                                </div>
                            </div>
                            <div class="col-md-2 single-member col-sm-4">
                                <div class="person-detail">
                                    <div class="arrow-top"></div>
                                    <h4>Dr. Tarun Adukia</h4>
                                    <p><strong>MBBS, MS, MCH(Neurosurgery)</strong></p>
                                    <p>Consultant Neuroscience</p> <br>
                                    <button type="button" class="btn btn-primary"> About</button>
                                </div>

                                <div class="person">
                                    <img class="img-responsive" src="doctors/tarun.jpg" alt="member-5">
                                    <!-- <img class="img-responsive" src="img/member2.jpg" alt="member-2"> -->
                                </div>
                            </div>
                        </div>
                        <!-- item3 -->
                        <!-- item3 -->
                    </div>

                    <!-- Left and right controls -->
                    <!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a> -->
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!-- doctor corousel -->
            </div>
            <hr>
            <!-- doctors List-->
            <div class="panel">
                <div class="panel-body">
                    <div class="accordion" id="accordionExample">
                        <div class="panel-group">
                            <!--neonatology-->
                            <div class="panel panel-default" style="margin-bottom:-15px;">
                                <div class="panel-heading" data-toggle="collapse" href="#Neonatology1">
                                    <h3 class="panel-title">
                                        <a data-toggle="collapse" href="#Neonatology1">Neonatology</a>
                                    </h3>
                                </div>
                                <div id="Neonatology1" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-6">
                                                <div class="section-doctor Pediatrician-doctor">
                                                    <p class="doctors-name">Dr. Rajesh Kumar </p>
                                                    <p class="doctors-degree">MD (Paed),DM (Neonat)</p>
                                                    <p>Mon To Sat | </p>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="section-doctor Pediatrician-doctor">
                                                    <p class="doctors-name">Dr Khaild Md Saifullah </p>
                                                    <p class="doctors-degree">MD (Paed), MRCP</p>
                                                    <p>Mon To Sat | </p>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="section-doctor Pediatrician-doctor">
                                                    <p class="doctors-name"> Dr Vinod Kumar</p>
                                                    <p class="doctors-degree">MBBS, DCH, Fellow (Neonat)</p>
                                                    <p>Sr. Consultant Neonatology/Paediatrics</p>
                                                    <p>Mon To Sat | </p>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="section-doctor Pediatrician-doctor">
                                                    <p class="doctors-name">Dr Vikas Anand</p>
                                                    <p class="doctors-degree">MD (Paed), Fellow (Neonat)</p>
                                                    <p>Mon To Sat | </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- neonatology-->
                        <!-- General Paediatrics-->
                        <div class="panel panel-default" data-toggle="collapse" href="#generalpaediatrics">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <a data-toggle="collapse" href="#generalpaediatrics">General Paediatrics</a>
                                </h3>
                            </div>
                            <div id="generalpaediatrics" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="section-doctor Pediatrician-doctor">
                                                <p class="doctors-name">Dr Krishna Kumar</p>
                                                <p class="doctors-degree">MD (Paed), DCH, MRCP, FRCPCH</p>
                                                <p>Mon To Sat | </p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="section-doctor Pediatrician-doctor">
                                                <p class="doctors-name">Dr Ajay Ghosh</p>
                                                <p class="doctors-degree">DCH, MD (Paed)</p>
                                                <p>Mon To Sat | </p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="section-doctor Pediatrician-doctor">
                                                <p class="doctors-name">Dr Ajit Sahay</p>
                                                <p class="doctors-degree">DCH, MD</p>
                                                <p>Mon To Sat | </p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="section-doctor Pediatrician-doctor">
                                                <p class="doctors-name">Dr Shailesh Chandra</p>
                                                <p class="doctors-degree">MD (Paed)</p>
                                                <p>Mon To Sat | </p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="section-doctor Pediatrician-doctor">
                                                <p class="doctors-name">Dr Prem Ranjan Kumar</p>
                                                <p class="doctors-degree">MD (Paed)</p>
                                                <p>Mon To Sat | </p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="section-doctor Pediatrician-doctor">
                                                <p class="doctors-name">Dr PNS Munda</p>
                                                <p class="doctors-degree">MBBS, MD</p>
                                                <p>Mon To Sat | </p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="section-doctor Pediatrician-doctor">
                                                <p class="doctors-name">Dr Amardeep Kumar</p>
                                                <p class="doctors-degree">MD (Paed)</p>
                                                <p>Mon To Sat | </p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="section-doctor Pediatrician-doctor">
                                                <p class="doctors-name">Dr Dharmendra Kumar</p>
                                                <p class="doctors-degree">MD (Paed), DCH</p>
                                                <p>Mon To Sat | </p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="section-doctor Pediatrician-doctor">
                                                <p class="doctors-name">Dr Shakti Pad Das</p>
                                                <p class="doctors-degree">MD (Paed)</p>
                                                <p>Mon To Sat | </p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="section-doctor Pediatrician-doctor">
                                                <p class="doctors-name">Dr Md. Khalid</p>
                                                <p class="doctors-degree">MBBS, DCH</p>
                                                <p>Mon To Sat | </p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="section-doctor Pediatrician-doctor">
                                                <p class="doctors-name">Dr Archana Kujur</p>
                                                <p class="doctors-degree">MBBS, MD</p>
                                                <p>Mon To Sat | </p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="section-doctor Pediatrician-doctor">
                                                <p class="doctors-name">Dr Pradeep Minz</p>
                                                <p class="doctors-degree">MBBS, MD</p>
                                                <p>Mon To Sat | </p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="section-doctor Pediatrician-doctor">
                                                <p class="doctors-name">Dr Shashank Kumar Sonu</p>
                                                <p class="doctors-degree">MBBS, DCH</p>
                                                <p>Mon To Sat | </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /General Paediatrics-->
                        <!--Surgery-->
                        <div class="panel panel-default" data-toggle="collapse" href="#surgery">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <a data-toggle="collapse" href="#surgery">Surgery</a>
                                </h3>
                            </div>
                            <div id="surgery" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="section-doctor Pediatrician-doctor">
                                                <p class="doctors-name">Dr Ramanuj Kumar</p>
                                                <p class="doctors-degree">MS, MCH</p>
                                                <p>Mon To Sat | </p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="section-doctor Pediatrician-doctor">
                                                <p class="doctors-name">Dr Jainendra Kumar</p>
                                                <p class="doctors-degree">MS, MRCS, MCH</p>
                                                <p>Mon To Sat | </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /surgery-->
                        <!-- Paediatric Critical Care -->
                        <div class="panel panel-default" data-toggle="collapse" href="#Critical">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <a data-toggle="collapse" href="#Critical">Paediatric Critical Care</a>
                                </h3>
                            </div>
                            <div id="Critical" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="section-doctor Pediatrician-doctor">
                                            <p class="doctors-name">Dr Rajesh Kumar</p>
                                            <p class="doctors-degree">MD (Paed), DM (Neonat)</p>
                                            <p>Mon To Sat | </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="section-doctor Pediatrician-doctor">
                                            <p class="doctors-name">Dr Khaild Md Saifullah</p>
                                            <p class="doctors-degree">MD (Paed), MRCP</p>
                                            <p>Mon To Sat | </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="section-doctor Pediatrician-doctor">
                                            <p class="doctors-name">Dr Shakti Pad Das</p>
                                            <p class="doctors-degree">MD (Paed)</p>
                                            <p>Mon To Sat | </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Paediatric Critical Care-->
                        <!-- Paediatric Nephrology-->
                        <div class="panel panel-default" data-toggle="collapse" href="#Nephrology">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <a>Paediatric Nephrology</a>
                                </h3>
                            </div>
                            <div id="Nephrology" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="section-doctor Pediatrician-doctor">
                                            <p class="doctors-name">Dr Rajiv Sinha / Dr Rana Saha</p>
                                            <p class="doctors-degree">Visiting</p>
                                            <p>Mon To Sat | </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Paediatric Nephrology-->
                        <!-- Paediatric Neuroscience-->
                        <div class="panel panel-default" data-toggle="collapse" href="#Neuroscience">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <a> Paediatric Neuroscience</a>
                                </h3>
                            </div>
                            <div id="Neuroscience" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="section-doctor Pediatrician-doctor">
                                            <p class="doctors-name">Dr Tarun Adukia</p>
                                            <p class="doctors-degree">MS, MCH (Neurosurgery)</p>
                                            <p>Mon To Sat | </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Paediatric Neuroscience-->
                        <!-- Anaesthesia-->
                        <div class="panel panel-default" data-toggle="collapse" href="#Anaesthesia">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <a> Anaesthesia</a>
                                </h3>
                            </div>
                            <div id="Anaesthesia" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="section-doctor Pediatrician-doctor">
                                            <p class="doctors-name">Dr JN Jha</p>
                                            <p class="doctors-degree">MD</p>
                                            <p>Mon To Sat | </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Anaesthesia-->
                        <!-- radiology-->
                        <div class="panel panel-default" data-toggle="collapse" href="#radiology">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <a>Radiology</a>
                                </h3>
                            </div>
                            <div id="radiology" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="section-doctor Pediatrician-doctor">
                                            <p class="doctors-name">Dr Rajbala</p>
                                            <p class="doctors-degree">MD (Radiology)</p>
                                            <p>Mon To Sat | </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /radiology-->
                        <!-- pathology-->
                        <div class="panel panel-default" data-toggle="collapse" href="#pathology">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <a>Pathology</a>
                                </h3>
                            </div>
                            <div id="pathology" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="section-doctor Pediatrician-doctor">
                                            <p class="doctors-name">Dr Anirban Sanyal</p>
                                            <p class="doctors-degree">DNB (Pathology)</p>
                                            <p>Mon To Sat | </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /pathology-->
                    </div>
                    <!-- /doctors list-->
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- end of team section -->
    <!-- customer feedback -->
    <!-- customer review -->
    <section class="about text-center" style="margin-bottom: 10px;">
        <div class="container about">
            <div class="row">
                <h1><i class="fa fa-spinner fa-spin"></i> Patient's Feedback</h1>
            </div>
        </div>
        <div class="carousel-reviews broun-block">
            <div class="container">
                <div class="row">
                    <div id="carousel-reviews" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner feedback-inner">
                            <div class="item active">
                                <div class="col-md-4 col-sm-6">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#">Shriram Kumar</a>
                                        <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span></div>
                                        <p>Rani hospital is the best hospital for childrens,docters are very good and
                                            staffs is also having helping nature.
                                            And very very thanks for doctor now my child is so well and out of
                                            trouble....</p>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#">Anshu Kumar</a>
                                        <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span></span></div>
                                        <p>Very nice hospital.dr.shailesh chandra very good and patiently handle each
                                            case.never gives too much medicine to child.and explains very nicely.visited
                                            many doctors for my child,,all told many things but he is very good
                                            doctor.ghabrate mother father v shant ho skte. </p>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#">Rakesh Sharma</a>
                                        <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span></div>
                                        <p>This is one of the best children hospital in jharkhand state of Ranchi
                                            district. Here very good facilities are given by the hospital to take better
                                            treatment of children. If you have any type of problem about your children
                                            of his mother. Here lots of treatment in one roof.</p>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-4 col-sm-6">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#">Shashi Ranjan</a>
                                        <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span></div>
                                        <p>Rani Hospital is the best Paediatric Hospital in Ranchi(Jharkhand)having best
                                            paediatric Doctor Round the clock and equipped with all latest technology to
                                            care the patient with Patient satisfaction and humanity.</p>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#">Mihir Raj</a>
                                        <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span></div>
                                        <p>Its a modern hospital for children in ranchi.
                                            Many people in ranchi come here for the treatment of there child.
                                            And 2 hospital side by side.
                                            Is a good as it have canteen and parking nd stalls outside if u want to use
                                            them. </p>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#">CHITRANJAN SINGH</a>
                                        <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span><span data-value="5" class="glyphicon glyphicon-star"></span> </span></div>
                                        <p>This is the only pediatrician hospital in Jharkhand. It is equipped with
                                            every facility for the treatment of children. Major cases of urban and rural
                                            areas are referred to this hospital.The hospital is so skilled in its work
                                            that until the completion is not satisfied, it does not discharge.
                                            It is my personal opinion that it would be best to get treatment from Dr.
                                            Rajesh, the senior doctor of this hospital.</p>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-reviews" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- customer review -->
    <!-- customer feedback -->
    <!-- map section -->
    <div class="api-map" id="contact">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 map" id="map">
                    <div id="map-container-google-1" class="z-depth-1-half map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d69698.313495919!2d85.3095406171249!3d23.349609799346446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f4e11843d380af%3A0x39715bc46113cea3!2sRani%20Hospital!5e0!3m2!1sen!2sin!4v1642145209640!5m2!1sen!2sin" style="border:0; width: 100%; height: 830px;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of map section -->

    <!-- contact section starts here -->
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="contact-caption clearfix">
                    <div class="contact-heading text-center">
                        <h2>contact us</h2>
                    </div>
                    <div class="col-md-5 contact-info text-left">
                        <h3>contact information</h3>
                        <div class="info-detail">
                            <ul>
                                <li><i class="fa fa-calendar"></i><span>Monday - Friday:</span> 9:30 AM to 6:30 PM</li>
                            </ul>
                            <ul>
                                <li><i class="fa fa-map-marker"></i><span>Address:</span>in Front of Governor House, Behind Machali Ghar</li>
                                <li>Booty Road, Ranchi- 834001</li>
                            </ul>
                            <ul>
                                <li><i class="fa fa-phone"></i><span>Phone:</span> +91-7677111010</li>
                            </ul>
                            <ul>
                                <li><i class="fa fa-phone"></i><span>Telephone:</span> 0651-2360430,0651-2360435,
                                    18002574010</li>
                            </ul>
                            <ul>
                                <li><i class="fa fa-envelope"></i><span>Email:</span><a href="mailto:info@ranihospital.com"></a>info@ranihospital.com</li>
                            </ul>
                            <ul>
                                <li><i class="fa fa-map-marker"></i><a target="_blank" href="https://www.google.com/maps/dir/23.3478614,85.303271/rani+hospital+ranchi/@23.3657258,85.2944984,14z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x39f4e11843d380af:0x39715bc46113cea3!2m2!1d85.3222526!2d23.3826291"><span style="color: white;">Our Location Map</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-offset-1 contact-form">
                        <h3>leave us a message</h3>

                        <form class="form">
                            <input class="name" type="text" placeholder="Name">
                            <input class="email" type="email" placeholder="Email">
                            <input class="phone" type="text" placeholder="Phone No:">
                            <textarea class="message" name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                            <input class="submit-btn" type="submit" value="SUBMIT">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of contact section -->
    <!-- footer starts here -->
    @include('web-views.footer')
    <!-- footer ends here -->
    <!-- script tags
	============================================================= -->
    <script>
        const checkpoint = 700;

        window.addEventListener("scroll", () => {
            const currentScroll = window.pageYOffset;
            if (currentScroll <= checkpoint) {
                opacity = 1 - currentScroll / checkpoint;
            } else {
                opacity = 0;
            }
            document.querySelector(".top").style.opacity = opacity;
        });
    </script>
    <script src="js/jquery-2.1.1.js"></script>
    <!-- <script src="https://maps.google.com/maps/api/js?sensor=true"></script> -->
    <script src="js/gmaps.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>