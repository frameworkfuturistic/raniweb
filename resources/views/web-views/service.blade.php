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
    </style>
</head>

<body>

    <!-- ====================================================
 header section -->
    @include('web-views.menu')
    <!-- end of header area -->
    <!--all services  -->
    <section class="text-center about">
        <div class="container">
            <div class="row">
                <h2>Services</h2>
                <!-- tieup -->
                <h4 class="event_head"><i class="fa fa-spinner fa-spin"></i> Our Tieup With Companies</h4>
                <!-- corousel -->
                <!-- corousel -->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="panel-group row">
                                <div class="col-md-4">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <img class="tieup-img"
                                                src="http://sparrowsoftech.com/img/client_logo/boi.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <img class="tieup-img"
                                                src="http://sparrowsoftech.com/img/client_logo/ner.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <img class="tieup-img"
                                                src="http://sparrowsoftech.com/img/client_logo/suda.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="panel-group row">
                                <div class="col-md-4">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <img class="tieup-img"
                                                src="http://sparrowsoftech.com/img/client_logo/boi.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <img class="tieup-img"
                                                src="http://sparrowsoftech.com/img/client_logo/ner.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <img class="tieup-img"
                                                src="http://sparrowsoftech.com/img/client_logo/suda.png" alt="">
                                        </div>
                                    </div>
                                </div>
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
                    <!-- tieup -->
                    <br>
                    <br>
                    <!-- tabs -->
                    <div class="col-sm-3">
                        <!-- left tab -->
                        <ul class="nav nav-pills nav-stacked">
                            <li class="active"><a data-toggle="tab" href="#Paediatrics" aria-expanded="true"
                                    class="active">Ambulance Services</a></li>
                            <li class=""><a data-toggle="tab" href="#Neonatology" class=""
                                    aria-expanded="false">Laboratory Services</a></li>
                            <li class=""><a data-toggle="tab" href="#allergy" class=""
                                    aria-expanded="false">Radiology</a></li>
                            <li class=""><a data-toggle="tab" href="#emergency" class=""
                                    aria-expanded="false">Pharmacy
                                    Services </a></li>
                            <li class=""><a data-toggle="tab" href="#Endocrinology" class=""
                                    aria-expanded="false">Vaccination </a></li>
                            <li class=""><a data-toggle="tab" href="#Cardiology" class=""
                                    aria-expanded="false">Immunisation Schedule </a></li>
                            <li><a data-toggle="tab" href="#Critical">OPD Services </a></li>
                            <li><a data-toggle="tab" href="#NeonatologyFacilities"> Neonatology Facilities </a></li>
                            <li><a data-toggle="tab" href="#PedriaticIntensiveCare"> Pedriatic Intensive Care </a>
                            </li>
                            <li><a data-toggle="tab" href="#PedriaticSurgery">Pedriatic Surgery</a></li>
                            <li><a data-toggle="tab" href="#PediatricGastroentrology">Pediatric Gastroentrology</a>
                            <li><a data-toggle="tab" href="#SuperspecialityDepartment">Super Speciality Department</a>
                            <li><a data-toggle="tab" href="#SpecialityClinic">Speciality Clinic</a>
                            </li>

                        </ul>
                    </div>
                    <!-- left tab -->
                    <!-- right content -->
                    <div class="col-sm-9">
                        <div class="tab-content">
                            <div id="Paediatrics" class="tab-pane fade active in">
                                <h2><i class="fa fa-spinner"></i> AMBULANCE SERVICES</h2>
                                <blockquote>
                                    <p class="p">
                                        The fleet of ambulances at Rani Hospital are well-equipped with emergency
                                        medicines and
                                        basic life support equipments to facilitate efficient and timely
                                        transportation
                                        of patients
                                        to and from the hospital under the care of trained personnel. Our critical care
                                        ambulance is equipped with transport ventilitor and transport incubator.
                                        <br>
                                        The ambulances are critical to transport patients to our partner
                                        tertiary-care
                                        paediatric
                                        hospitals in Kolkata.
                                        <br>
                                        To use the ambulance service call <strong><a
                                                href="tel:7677111010">[7677111010,0651-2360430/35]</a></strong>
                                    </p>
                                    <div class="col-md-6">
                                        <img src="img/ambulance.jpg" alt="" style="width:100%;">
                                    </div>
                                    <div class="col-md-6">
                                        <img src="img/ambulance2.jpg" alt="" style="width:100%;">
                                    </div>
                                </blockquote>
                            </div>
                            <div id="Neonatology" class="tab-pane fade">
                                <h2><i class="fa fa-spinner"></i> LABORATORY SERVICES</h2>
                                <div class="col-md-12">
                                    <img src="img/lab2.webp" alt="" style="width:50%;">
                                </div>
                                <br>
                                <div class="col-md-12">
                                    <blockquote>
                                        <h3> <i></i> QUICK REPORT: </h3>

                                        <p class = "p">
                                            <i class="fa fa-external-link"></i>1. CBC 30 MIN
                                            <br>
                                            <i class="fa fa-external-link"></i>2. VBG 15 MIN
                                            <br>
                                            <i class="fa fa-external-link"></i>3. CRP, LFT, KFT 1 HOUR
                                            <br>
                                            <i class="fa fa-external-link"></i>3. CRP, LFT, KFT 1 HOUR
                                            <br>
                                            <i class="fa fa-external-link"></i>4. BLOOD CULTURE 48 HOURS
                                            UNIQUE FEATURES:
                                            <br>
                                            • SENSITIVITY PATTERN FOR MULTI DRUG RESISTANT ORGANISM
                                            <br>
                                            <i class="fa fa-external-link"></i>5. FUNGAL CULTURE: UNIQUE FEATURE WITH
                                            SENSITIVITY PATTERN
                                            <br>
                                            <i class="fa fa-external-link"></i>6. CBNAAT – TAT 1.5 HOURS
                                            <br>
                                            (UNIQUE SENSITIVITY OF RIFAMPICIN INH BOTH)
                                            <i class="fa fa-external-link"></i>7.BONE MARROW – ASPIRATION BIOPSY
                                            <br>
                                            <i class="fa fa-external-link"></i>8. SPECIAL TEST
                                            (A) DENGUE IgM(ELISA)
                                            (B)SCRUB TYPHUS ELISA

                                            <br>
                                            <i class="fa fa-external-link"></i> 9. TTG ANTIGLIADIN ANTIBODY
                                            <br>
                                            <i class="fa fa-external-link"></i> 10. HBSAg/HCV/HIV
                                            <br>
                                            <i class="fa fa-external-link"></i> 11. Ig PROFILE IgG/IgM/IgA/IgE
                                            <br>
                                            <i class="fa fa-external-link"></i> 12. ALLERGY PANEL TEST
                                            <br>
                                            <i class="fa fa-external-link"></i> 13. PCR – CSF/RESPIRATORY ASPIRATE
                                            PANEL
                                            <br>

                                        </p>
                                    </blockquote>

                                    <blockquote>

                                        <p class="p">
                                            The laboratory located in the ground floor of the Hospital provides
                                            comprehensive
                                            round-the-clock services in the following areas:
                                            <br>
                                            <i class="fa fa-external-link"></i> Clinical Biochemistry
                                            <br>
                                            <i class="fa fa-external-link"></i> Clinical Microbiology
                                            <br>
                                            <i class="fa fa-external-link"></i> Clinical Pathology
                                            <br>
                                            The lab, equipped with the latest testing equipments, strictly follows the
                                            best
                                            practices to
                                            ensure accurate and reliable test results.
                                        </p>
                                    </blockquote>
                                </div>
                            </div>
                            <div id="allergy" class="tab-pane fade">
                                <h2><i class="fa fa-spinner"></i> RADIOLOGY</h2>
                                <div class="col-md-6">
                                    <blockquote>
                                        <p class="p">
                                            The Radiology department is committed to providing safe, reliable and speedy
                                            radio-diagnostic support round-the-clock (on call basis). The department has
                                            facilities for
                                            all 'conventional' radiography, including bedside radiographs for the
                                            critically
                                            ill patient
                                            who cannot be moved.
                                            <br>
                                            Scope of Radiology services include-
                                            <br>
                                            <i class="fa fa-external-link"></i> X-Ray (General)
                                            <br>
                                            <i class="fa fa-external-link"></i> Ultrasonography
                                            <br>
                                            <i class="fa fa-external-link"></i> Paediatric ECHO
                                            <br>
                                            <i class="fa fa-external-link"></i> CT Scan
                                        </p>
                                    </blockquote>
                                </div>
                                <div class="col-md-6">
                                    <img src="img/radiology.jpg" alt="" style="width:100%;">
                                </div>
                            </div>
                            <div id="emergency" class="tab-pane fade">
                                <h2><i class="fa fa-spinner"></i> PHARMACY SERVICES</h2>
                                <div class="col-md-12">
                                    <img src="img/pharmacy.jpg" alt="" style="width:50%;">
                                </div>
                                <div class="col-md-12">
                                    <blockquote>
                                        <p class="p">
                                            The Pharmacy (outsourced) located on the ground floor of the Hospital caters
                                            to
                                            the need of
                                            outpatients & inpatients in neonatology and paediatrics.
                                        </p>
                                    </blockquote>
                                </div>
                            </div>
                            <!-- endocrinology -->
                            <div id="Endocrinology" class="tab-pane fade">
                                <h2><i class="fa fa-spinner"></i> VACCINATION</h2>
                                <div class="col-md-12">
                                    <img src="img/vaccination.jpg" alt="" style="width:50%;">
                                </div>
                                <div class="col-md-12">
                                    <blockquote>
                                        <p class="p">
                                            Vaccination is a proven method of preventive care as they are known to
                                            produce
                                            antibodies to
                                            fight various diseases. While the benefits of immunisation are invisible, it
                                            may
                                            be tempting
                                            to say ‘NO’ to immunisation. However, this puts health at risk of catching
                                            some
                                            severe or
                                            fatal diseases. In reality, taking a vaccination is better and safer than
                                            not
                                            taking one.
                                            Vaccination may not be 100% effective, but it is the best defence against
                                            epidemics that
                                            kill or disable millions of people.
                                        </p>
                                    </blockquote>
                                </div>
                                <!-- vaccination table list -->
                                <table class="table table-bordered table-striped table-hover vaccine_table">
                                    <thead>
                                        <tr>
                                            <th>Weeks/Months/Year</th>
                                            <th>Vaccine Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                Birth
                                            </td>
                                            <td>BCG <br>
                                                OPV <br>
                                                Hepatitis-B1</td>
                                        </tr>
                                        <tr>
                                            <td>6 Weeks</td>
                                            <td>
                                                DTwP-1/DTaP-1 <br>
                                                OPV/IPV-1 <br>
                                                HIB-1 <br>
                                                Hepatitis-B2 <br>
                                                Pneumococal-1 <br>
                                                Rotavirus-1
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>10 Weeks</td>
                                            <td>
                                                DTwP-2/DTaP-2 <br>
                                                OPV/IPV-2 <br>
                                                HIB-2 <br>
                                                Pneumococal-2 <br>
                                                Rotavirus-2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>14 Weeks</td>
                                            <td>
                                                DTwP-3/DTaP-3 <br>
                                                OPV/IPV-3 <br>
                                                HIB-3 <br>
                                                Pneumococal-3 <br>
                                                Rotavirus-3
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6 Months</td>
                                            <td>
                                                Hepatitis-B3 <br>
                                                Flu-1
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7 Months</td>
                                            <td>
                                                Flu-2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>9 Months</td>
                                            <td>
                                                MMR-1 <br>
                                                Meningococcal Conjugate
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>9 to 12 Months</td>
                                            <td>
                                                Typhoid Conjugate
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>> 1 Year</td>
                                            <td>
                                                Hepatitis-A-1 <br>
                                                JE1 <br>
                                                Meningococcal Conjugate
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>>13 Months</td>
                                            <td>
                                                JE2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>>15 Months</td>
                                            <td>
                                                Varicella-1 <br>
                                                MMR-2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>16 to 18 Months</td>
                                            <td>
                                                Pneumococal(Booster-1) <br>
                                                DTwP(Booster-1) <br>
                                                OPV/IPV(Booster-1) <br>
                                                HIB(Booster-1)
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>18 Months</td>
                                            <td>
                                                Hepatitis 'A'(2nd Dose)
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>>2 Years</td>
                                            <td>
                                                Typhoid Conjugate(2nd Dose) <br>
                                                Meningococcal Conjugate <br>
                                                Pneumococal Polysaccharide-23
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>>4 to 6 Years(Booster-2)</td>
                                            <td>
                                                DTwP+DtwP(Booster-2) <br>
                                                MMR-3/MMRV <br>
                                                Vericella-2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>>10 Years(Boys/Girls)</td>
                                            <td>
                                                Tdap/Td
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>>10 Years(Girls Only)</td>
                                            <td>
                                                HPV-1 <br>
                                                HPV-2 <br>
                                                HPV-3
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- vaccination table list -->
                            </div>
                            <!-- endocrinology -->
                            <!-- cardiology -->
                            <div id="Cardiology" class="tab-pane fade">
                                <h2><i class="fa fa-spinner"></i> Immunisation Schedule</h2>
                                <div class="col-md-12">
                                    <img src="img/immusition.jpeg" alt="" style="width:50%;">
                                </div>
                                <div class="col-md-12">
                                    <blockquote>
                                        <p class="p">
                                            With some diseases your child’s immunity will eventually wear off, and so
                                            they
                                            will need
                                            booster immunizations at intervals to stay fully protected. Thus, it is
                                            important to keep
                                            your child's immunization schedule up to date.
                                        </p>
                                    </blockquote>
                                </div>
                                <!-- table -->
                                <!-- table -->
                                <blockquote>
                                    <p class="p">For any medical information about Vaccination, please contact:
                                        <br>
                                        <strong>Dr Shailesh Chandra [contact details]</strong>
                                        <br>
                                        For any general information (Vaccine availability, cost, etc) about
                                        Vaccination,
                                        please
                                        contact:
                                        <br>
                                        <strong>[OPD Helpline details]</strong>
                                        <a href="tel:7858800108">7858800108</a>
                                    </p>
                                </blockquote>
                            </div>
                            <!-- cardiology -->
                            <!-- Critical care -->
                            <div id="Critical" class="tab-pane fade">
                                <h2><i class="fa fa-spinner"></i> OPD SERVICES</h2>
                                <div class="col-md-12">
                                    <img src="img/opd.avif" alt="" style="width:50%;">
                                </div>
                                <div class="col-md-12">
                                    <blockquote>
                                        <p class="p">As the pioneer healthcare provider in Jharkhand, we are aware
                                            of
                                            our
                                            immense
                                            responsibility and commitment to the improvement in the health and
                                            well-being of
                                            our
                                            children.
                                            <br>
                                            Our neonatologists and paediatricians provide comprehensive healthcare
                                            involving
                                            management
                                            of various illnesses, growth assessments, nutrition advice and immunisation
                                            services in the
                                            outpatient clinics to children from birth to 18 years of age.
                                            <br>
                                            List of Doctors (neonatology; paediatrics; paediatric surgery), with OPD
                                            schedule
                                            <br>
                                            <br>
                                            Speciality Clinics
                                            <br>
                                            <i class="fa fa-external-link"></i> Paediatric Cardiology – [Doctor +
                                            Schedule]
                                            <br>
                                            <i class="fa fa-external-link"></i> Paediatric Gastroenterology – [Doctor +
                                            Schedule]
                                            <br>
                                            <i class="fa fa-external-link"></i> Paediatric Nephrology – [Doctor +
                                            Schedule]
                                            <br>
                                            <br>
                                            OPD Helpline: [<a href="tel:7858800108">7858800108</a>]
                                            <br>
                                            Emergency 24x7: [0651-2360430/35]
                                        </p>
                                    </blockquote>
                                </div>
                                <div class="col-md-6">
                                    <img src="img/consultationchamber.jpg" alt="" style="width:100%;">
                                </div>
                                <div class="col-md-6">
                                    <img src="img/OPDwaiting_area.jpg" alt="" style="width:100%;">
                                </div>
                            </div>
                            <!-- pediatricGastroentrology -->
                            <div id="pediatricGastroentrology" class="tab-pane fade">
                                <h2><i class="fa fa-spinner"></i> PEDIATRIC GASTROENTEROLOGY </h2>

                                <blockquote>
                                    <p class="p ">
                                        <u>
                                            DIAGNOSTIC
                                        </u>
                                        <br>
                                        <br>
                                        <i class="fa fa-external-link"></i> 1. UPPER GI ENDOSCOPY
                                        <br>
                                        <i class="fa fa-external-link"></i> 2. COLONOSCOPY
                                        <br>
                                        <i class="fa fa-external-link"></i> 3. SIGMOIDOSCOPY
                                        <br>
                                        <i class="fa fa-external-link"></i> 4. LIVER BIOPSY
                                        <br>

                                        <br>

                                    </p>
                                </blockquote>
                                <blockquote>
                                    <p class="p">
                                        <u>
                                            THERAPEUTIC
                                        </u>
                                        <br>
                                        <br>
                                        <i class="fa fa-external-link"></i> EVL BANDING
                                        <br>
                                        <i class="fa fa-external-link"></i> ENDOSCOPIC SCLEROTHERAPY
                                        <br>
                                        <i class="fa fa-external-link"></i> DILATATION OF STRICTURE (BOTH CRE AND SG)
                                        <br>
                                        <i class="fa fa-external-link"></i> FOREIGN BODY REMOVAL
                                        <br>

                                        <i class="fa fa-external-link"></i> PEG TUBE INSERTION
                                        <br>

                                        <br>

                                    </p>
                                </blockquote>
                                <div class="col-md-6">
                                    <img src="img/consultationchamber.jpg" alt="" style="width:100%;">
                                </div>
                                <div class="col-md-6">
                                    <img src="img/OPDwaiting_area.jpg" alt="" style="width:100%;">
                                </div>
                            </div>
                            <!-- NEONATOLOGY FACILITIES-->
                            <div id="NeonatologyFacilities" class="tab-pane fade">
                                <h2><i class="fa fa-spinner"></i> NEONATOLOGY </h2>
                                <div class="col-md-12">
                                    <img src="img/Neonatal_Jacoplane.jpg" alt="" style="width:50%;">
                                </div>
                                <blockquote>

                                    <p class="p ">
                                        <br>
                                        <u>
                                            FACILITIES
                                        </u>
                                        <br>
                                        <br>
                                        <u class="text-danger font-weight-normal bg-danger">
                                            <i class="fa fa-external-link text-danger bg-danger "></i> UPCOMMING :-DrNB
                                            NEONATOLOGY PROGRAMME
                                        </u>
                                        <br>
                                        <br>
                                        <i class="fa fa-external-link"></i> • NICU LEVEL- III
                                        <br>
                                        <i class="fa fa-external-link"></i> • SURFACTANT THERAPY
                                        <br>
                                        <i class="fa fa-external-link"></i> • PHOTOTHERAPY
                                        <br>
                                        <i class="fa fa-external-link"></i> • EXCHANGE TRANSFUSION

                                        <br>
                                        <i class="fa fa-external-link"></i> • VENTILATOR

                                        <br>
                                        <i class="fa fa-external-link"></i> • HHFNC

                                        <br>
                                        <i class="fa fa-external-link"></i> • NIV

                                        <br>
                                        <i class="fa fa-external-link"></i> • WARMER

                                        <br>
                                        <i class="fa fa-external-link"></i> • MULTIPARA MONITOR

                                        <br>
                                        <i class="fa fa-external-link"></i>• INFUSION PUMP

                                        <br>
                                        <i class="fa fa-external-link"></i>• BED SIDE X-RAY

                                        <br>
                                        <i class="fa fa-external-link"></i>• BED SIDE USG

                                        <br>
                                        <i class="fa fa-external-link"></i>• UMBILICAL CATHETER INSERTION
                                        <br>

                                        <br>

                                    </p>
                                </blockquote>
                                <blockquote>
                                    <p class="p">
                                        <u>
                                            UNIQUE FACILITIES
                                        </u>
                                        <br>
                                        <br>
                                        <i class="fa fa-external-link"></i> • HIGH FREQUENCY OSCILLATORY VENTILATION
                                        (HFOV)
                                        <br>
                                        <i class="fa fa-external-link"></i>• BLOOD BANK
                                        <br>
                                        <i class="fa fa-external-link"></i>• CRASH CART INTENSIVE PHOTOTHERAPY
                                        <br>
                                        <i class="fa fa-external-link"></i>• BED SIDE aEEG FOR CONTINUOUS MONITORING
                                        <br>
                                        <i class="fa fa-external-link"></i>• BED SIDE ECHO ROUND THE CLOCK

                                        <br>
                                        <i class="fa fa-external-link"></i>• BED SIDE USG SKULL & LUNGS ROUND THE CLOCK

                                        <br>
                                        <i class="fa fa-external-link"></i>• MILK BANK

                                        <br>
                                        <i class="fa fa-external-link"></i> • NITRIC OXIDE THERAPY
                                        <br>
                                        <i class="fa fa-external-link"></i> • THERAPEUTIC HYPOTHERMIA (FULL BODY
                                        COOLING)
                                        <br>
                                        <i class="fa fa-external-link"></i>• ROUND THE CLOCK PRESENCE OF MD/DM DOCTOR
                                        <br>
                                        <i class="fa fa-external-link"></i>• ROP : SCREENING AND INTRAVITREAL VEGF
                                        INJECTION
                                        <br>
                                        <br>

                                        <br>

                                    </p>
                                </blockquote>
                                <div class="col-md-6">
                                    <img src="img/consultationchamber.jpg" alt="" style="width:100%;">
                                </div>
                                <div class="col-md-6">
                                    <img src="img/OPDwaiting_area.jpg" alt="" style="width:100%;">
                                </div>
                            </div>

                            <!-- PEDIATRIC INTENSIVE CARE -->
                            <div id="PedriaticIntensiveCare" class="tab-pane fade">
                                <h2><i class="fa fa-spinner"></i> PEDIATRIC INTENSIVE CARE </h2>
                                 <div class="col-md-12">
                                    <img src="img/paediatric-intensive-care-unit.png" alt="" style="width:50%;">
                                </div>
                                <blockquote>

                                    <p class="p ">
                                        <br>
                                        <u>
                                            TWO FULL TIME CONSULTANTS
                                        </u>
                                        <br>
                                        <br>
                                        <u class="text-danger font-weight-normal bg-danger">
                                            <i class="fa fa-external-link text-danger bg-danger "></i> UPCOMMING :-
                                            HEMODIALYSIS
                                        </u>
                                        <br>
                                        <br>
                                        <i class="fa fa-external-link"></i>1. DrNB PICU
                                        <br>
                                        <i class="fa fa-external-link"></i> 2. PDCC PICU


                                    </p>
                                </blockquote>
                                <blockquote>
                                    <p class="p">
                                        <u>
                                            FACILITIES:
                                        </u>
                                        <br>
                                        <br>
                                        <i class="fa fa-external-link"></i> • VENTILATOR
                                        (HFOV)
                                        <br>
                                        <i class="fa fa-external-link"></i>• PERITONEAL DIALYSIS
                                        <br>
                                        <i class="fa fa-external-link"></i>• BED SIDE ULTRASOUND
                                        <br>
                                        <i class="fa fa-external-link"></i>• ONSD MONITORING FOR RAISED ICP
                                        <br>
                                        <i class="fa fa-external-link"></i>• BED SIDE ECHO

                                        <br>
                                        <i class="fa fa-external-link"></i>• CENTRAL LINE INSERTION ROUND THE CLOCK





                                    </p>
                                </blockquote>
                                <div class="col-md-6">
                                    <img src="img/consultationchamber.jpg" alt="" style="width:100%;">
                                </div>
                                <div class="col-md-6">
                                    <img src="img/OPDwaiting_area.jpg" alt="" style="width:100%;">
                                </div>
                            </div>
                            <!-- Pedriatic Surgery -->
                            <div id="PedriaticSurgery" class="tab-pane fade">
                                <h2><i class="fa fa-spinner"></i> Pedriatic Surgery </h2>
                                 <div class="col-md-12">
                                    <img src="img/Best-Pediatric-Surgeons-in-India.jpg" alt="" style="width:50%;">
                                </div>
                                <blockquote>
                                    <p class="p">
                                        <u>
                                            RUNNIG PROGRAMME
                                        </u>

                                        <br>
                                        <br>
                                        <i class="fa fa-external-link"></i> DrNB PEDIATRIC SURGERY PROGRAMME
                                        <br>
                                        <br>

                                        <u>
                                            OTHER SURGICAL SPECIALITIES:
                                        </u>
                                        <br>
                                        <br>
                                        <i class="fa fa-external-link"></i>1. NEURO SURGERY (MCH NEUROSURGERY)
                                        <br>
                                        <i class="fa fa-external-link"></i>2. URO SURGERY (MCH UROLOGY)
                                        <br>
                                        <i class="fa fa-external-link"></i>3. TRANSURETHRAL CYSTOSCOPIC PROCEDURES
                                        <br>
                                        <i class="fa fa-external-link"></i>4. TRANSURETHRAL PUV FULGURATION







                                    </p>
                                </blockquote>
                                <blockquote>

                                    <p class="p ">
                                        <br>




                                        <i class="fa fa-external-link"></i>• DEDICATED FULLY EQUIPED (4 OT)
                                        <br>
                                        <i class="fa fa-external-link"></i> • NEONATAL SURGERY& DEDICATED NEONATAL OT
                                        <br>
                                        <i class="fa fa-external-link"></i> • LAPAROSCOPIC SURGERY
                                        <br>
                                        <i class="fa fa-external-link"></i> • BRONCHOSCOPIC FOREIGN BODY REMOVAL
                                        <br>
                                        <i class="fa fa-external-link"></i> • ENDOSCOPIC FOREIGN BODY REMOVAL
                                        <br>
                                        <i class="fa fa-external-link"></i> • VP SHUNT INSERTION


                                    </p>
                                </blockquote>

                            </div>
                            <!-- Pediatric Gastroentrology -->
                            <div id="PediatricGastroentrology" class="tab-pane fade">
                                <h2><i class="fa fa-spinner"></i>PEDIATRIC GASTROENTEROLOGY </h2>
                                  <div class="col-md-12">
                                    <img src="img/pediaGastro.jpg" alt="" style="width:50%;">
                                </div>
                                <blockquote>
                                    <p class="p">
                                        <u>
                                            DIAGNOSTIC
                                        </u>
                                        <br>
                                        <br>
                                        <i class="fa fa-external-link"></i>1. UPPER GI ENDOSCOPY
                                        <br>
                                        <i class="fa fa-external-link"></i>2. COLONOSCOPY
                                        <br>
                                        <i class="fa fa-external-link"></i>3. SIGMOIDOSCOPY
                                        <br>
                                        <i class="fa fa-external-link"></i>4. LIVER BIOPSY
                                    </p>
                                </blockquote>
                                <blockquote>

                                    <p class="p ">

                                        <u>
                                            THERAPEUTIC
                                        </u>
                                        <br>
                                        <br>


                                        <i class="fa fa-external-link"></i>• EVL BANDING
                                        <br>
                                        <i class="fa fa-external-link"></i>• ENDOSCOPIC SCLEROTHERAPY
                                        <br>
                                        <i class="fa fa-external-link"></i> • POLYPECTOMY
                                        <br>
                                        <i class="fa fa-external-link"></i> • DILATATION OF STRICTURE (BOTH CRE AND SG)
                                        <br>
                                        <i class="fa fa-external-link"></i>• FOREIGN BODY REMOVAL
                                        <br>
                                        <i class="fa fa-external-link"></i>• PEG TUBE INSERTION


                                    </p>
                                </blockquote>

                            </div>
                            <!-- SUPERSPECIALITY DEPARTMENT -->
                            <div id="SuperspecialityDepartment" class="tab-pane fade">
                                <h2><i class="fa fa-spinner"></i>Super Speciality Department </h2>
                                <div class="col-md-12">
                                    <img src="img/superspeciality.jpeg" alt="" style="width:50%;">
                                </div>
                                <blockquote>
                                    <p class="p">
                                        <u>
                                            FACILITIES :
                                        </u>
                                        <br>
                                        <br>
                                        <i class="fa fa-external-link"></i>• EEG FACILITY
                                        <br>
                                        <i class="fa fa-external-link"></i>• CT SCAN BRAIN ROUND THE CLOCK
                                        <br>
                                        <i class="fa fa-external-link"></i>• CONSULTANT FNB PED. NEONATOLOGY

                                    </p>
                                </blockquote>
                                <blockquote>

                                    <p class="p ">

                                        <u>
                                            PEDIATRIC CARDIOLOGY
                                        </u>
                                        <br>
                                        <i class="fa fa-external-link"></i>• BED SIDE ECHO
                                        <br>
                                        <i class="fa fa-external-link"></i>• 1 FNB PEDIATRIC CARDIO
                                        <br>
                                        <i class="fa fa-external-link"></i>• 1 PDCC PEDIATRIC CARDIO
                                        <br>
                                        <i class="fa fa-external-link"></i> • 2 DM NEONATOLOGIST WITH BEDSIDE ECHO
                                        EXPERTISE
                                        <br>


                                    </p>
                                </blockquote>

                            </div>
                            <!-- SPECIALITY CLINIC -->
                            <div id="SpecialityClinic" class="tab-pane fade">
                                <h2><i class="fa fa-spinner"></i>Speciality Clinic </h2>
                                  <div class="col-md-12">
                                    <img src="img/healthcare2.jpg" alt="" style="width:50%;">
                                </div>
                                <blockquote>
                                    <p class="p">
                                        <u>
                                            FACILITIES:
                                        </u>

                                        <br>
                                        <i class="fa fa-external-link"></i>• PEDIATRIC NEPHRO ONCE A MONTH
                                        <br>
                                        <i class="fa fa-external-link"></i>• DEVELOPMENTAL PEDIATRIC ONCE A MONTH
                                        <br>
                                        <i class="fa fa-external-link"></i>• GENETICS CLINIC ONCE A MONTH

                                    </p>
                                </blockquote>


                            </div>
                        </div>


















    </section>
    <!-- all services -->
    <!-- Service -->
    <section class="text-center service" id="service">
        <div class="container">
            <div class="row">
                <h2>our services</h2>
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
                <!-- <h2 style="margin-bottom: 1px; color: white; font-size: 40px; margin-top: -30px;"><strong>Services</strong></h2> -->
                <div class="col-sm-4">
                    <div class="list-group">
                        <a href="#" class="list-group-item black">Padiatric</a>
                        <a href="#" class="list-group-item black">Padiatric Superspeciality</a>
                        <a href="#" class="list-group-item black">Padiatric Intensive Care</a>
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
    </section>
    <!-- Service -->
    <br>
    <br>
    <hr>
    <!-- footer starts here -->
    @include('web-views.footer')
    <!-- script tags
 ============================================================= -->

    <script src="js/jquery-2.1.1.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/gmaps.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
