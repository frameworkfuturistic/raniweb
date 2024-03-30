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
    <!-- Educational Programs -->
    <section class="text-center about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12  ">
                    <!-- DNB -->
                    <!--   <h1  >OPD Schedule</h2> -->


                    <div class="col-md-12  ;">
                        <h2> Neonatology </h2>
                        <div class="content">
                            <div class="panel panel-success">
                                <div class="panel-body">
                                    <div class="col-xs-12">
                                        <div class="scrollable">
                                            <table class="table table-hover table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Consultant's Name </th>
                                                        <th>Qualification</th>
                                                        <th>OPD Timing </th>
                                                        <th>Availability</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <strong>
                                                            <td><b>Dr. Rajesh Kumar</b></td>
                                                            <td>MBBS, MD(Paed), DM(Neonat)</td>
                                                            <td>09:00 am to 12:00 pm and 03:00 pm to 04:30 pm
                                                            </td>

                                                            <td>Mon,Tues, Wed, Thurs,Fri,Sat</td>
                                                        </strong>
                                                    </tr>
                                                    <tr>
                                                        <strong>
                                                            <td><b>Dr. Prem Ranjan</b></td>
                                                            <td>MBBS, MD(Paed), DM(Neonat)</td>
                                                            <td>10:00 am to 04: pm
                                                            </td>
                                                            <td>Mon,Tues, Wed, Thurs,Fri,Sat,Sun</td>

                                                        </strong>
                                                    </tr>
                                                    <tr>
                                                        <td><b> Dr. Vinod Kumar </b> </td>
                                                        <td>MBBS, DCH, Fellow(Neonat)</td>
                                                        <td>04:00 pm to 04:00 pm</td>
                                                        <td>Mon,Tues, Wed, Thurs,Fri,Sat,Sun</td>

                                                    </tr>




                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- DNB -->
                        <!-- ====================================================================================== -->


                    </div>
                    <div class="col-md-12  ">
                        <h2> General Pediatrics</h2>
                        <div class="content">
                            <div class="panel panel-success">
                                <div class="panel-body">
                                    <div class="col-xs-12">
                                        <div class="scrollable">
                                            <table class="table table-hover table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Consultant's Name </th>
                                                        <th>Qualification</th>
                                                        <th>OPD Timing </th>
                                                        <th>Availability</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <strong>
                                                            <td><b>Dr. P.N.S. Munda</b></td>
                                                            <td>MBBS, MD(Paed), DCH</td>
                                                            <td>04:00 pm to 07:30 pm
                                                            </td>

                                                            <td>Mon,Tues, Wed, Thurs,Fri,Sat</td>
                                                        </strong>
                                                    </tr>
                                                    <tr>
                                                        <strong>
                                                            <td><b>Dr. Sailesh Chandra</b></td>
                                                            <td>MBBS, MD(Paed)</td>
                                                            <td>110:00 am to 02:00 pm (Rani Children Hospiltal) and
                                                                06:00 pm to 07:00 pm
                                                            </td>
                                                            <td>Mon,Tues, Wed, Thurs,Fri,Sat,Sun</td>

                                                        </strong>
                                                    </tr>
                                                    <tr>
                                                        <td><b> Dr. Khalid M. Saiffulah </b> </td>
                                                        <td>MBBS, MD(Paed), MRCP</td>
                                                        <td>11:00 am to 01:00 pm</td>
                                                        <td>Mon,Tues, Wed, Thurs,Fri,Sat</td>

                                                    </tr>
                                                    <tr>
                                                        <td><b> Dr. Amardeep Kumar </b> </td>
                                                        <td>MBBS, MD(Paed)</td>
                                                        <td>01:00 pm to 04:00 pm</td>
                                                        <td>Mon,Tues, Wed, Thurs,Fri,Sat</td>

                                                    </tr>
                                                    <tr>
                                                        <td><b>Dr. Snigdha</b> </td>
                                                        <td>MBBS, MD(Paed)</td>
                                                        <td>11:00 pm to 02:00 pm</td>
                                                        <td>Mon,Tues, Wed, Thurs,Fri,Sat</td>

                                                    </tr>
                                                    <tr>
                                                        <td><b> Emergency Doctor </b> </td>

                                                        <td>24 Hours</td>
                                                        <td>Mon,Tues, Wed, Thurs,Fri,Sat,Sun</td>

                                                    </tr>




                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- DNB -->
                        <!-- ====================================================================================== -->


                    </div>
                     <div class="col-md-12  ">
                        <h2> Pediatric Surgery </h2>
                        <div class="content">
                            <div class="panel panel-success">
                                <div class="panel-body">
                                    <div class="col-xs-12">
                                        <div class="scrollable">
                                            <table class="table table-hover table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Consultant's Name </th>
                                                        <th>Qualification</th>
                                                        <th>OPD Timing </th>
                                                        <th>Availability</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <strong>
                                                            <td><b>Dr. Ramanuj Kumar</b></td>
                                                            <td>MBBS, MS(Paed Surg.),MCH, JCMR</td>
                                                            <td>11:30 am to 01:30 pm and 05:00 pm to 06:00 pm
                                                            </td>

                                                            <td>Mon,Tues, Wed, Thurs,Fri,Sat</td>
                                                        </strong>
                                                    </tr>
                                                    <tr>
                                                        <strong>
                                                            <td><b>Dr. Md. Imran</b></td>
                                                            <td>MBBS, MCH(Paed Surg.)</td>
                                                            <td>08:00 am to 11:00 am
                                                            </td>
                                                            <td>Mon,Tues, Wed, Thurs,Fri,Sat</td>

                                                        </strong>
                                                    </tr>
                                                   




                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- DNB -->
                        <!-- ====================================================================================== -->


                    </div>
                     <div class="col-md-12  ">
                        <h2> Paediatric Gastroenterolgy </h2>
                        <div class="content">
                            <div class="panel panel-success">
                                <div class="panel-body">
                                    <div class="col-xs-12">
                                        <div class="scrollable">
                                            <table class="table table-hover table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Consultant's Name </th>
                                                        <th>Qualification</th>
                                                        <th>OPD Timing </th>
                                                        <th>Availability</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <strong>
                                                            <td><b>Dr. Sougata Mahato</b></td>
                                                            <td>MBBS, MD(Paed), DM(Gastro.)</td>
                                                            <td>09:00 am to 04:00 pm
                                                            </td>

                                                            <td>Mon,Tues, Wed, Thurs,Fri,Sat</td>
                                                        </strong>
                                                    </tr>
                                                
                                                   




                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- DNB -->
                        <!-- ====================================================================================== -->


                    </div>
                     <div class="col-md-12  ">
                        <h2> Pediatric Neurology </h2>
                        <div class="content">
                            <div class="panel panel-success">
                                <div class="panel-body">
                                    <div class="col-xs-12">
                                        <div class="scrollable">
                                            <table class="table table-hover table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Consultant's Name </th>
                                                        <th>Qualification</th>
                                                        <th>OPD Timing </th>
                                                        <th>Availability</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <strong>
                                                            <td><b>Dr. Abhishek Kumar Dubey</b></td>
                                                            <td>MBBS, MD(Paed), DM(Neuro)</td>
                                                            <td>12:00 pm to 02:00 pm
                                                            </td>

                                                            <td>Mon,Tues, Wed, Thurs,Fri,Sat</td>
                                                        </strong>
                                                    </tr>
                                                
                                                   




                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- DNB -->
                        <!-- ====================================================================================== -->


                    </div>
                     <div class="col-md-12  ">
                        <h2>Pediatric Cardiology </h2>
                        <div class="content">
                            <div class="panel panel-success">
                                <div class="panel-body">
                                    <div class="col-xs-12">
                                        <div class="scrollable">
                                            <table class="table table-hover table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Consultant's Name </th>
                                                        <th>Qualification</th>
                                                        <th>OPD Timing </th>
                                                        <th>Availability</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <strong>
                                                            <td><b>Dr. Debabrata Nandi</b></td>
                                                            <td>MBBS, MD, DM(Cardiology)</td>
                                                            <td>09:00 am to 03:00 pm
                                                            </td>

                                                            <td>(Monthly Visit)</td>
                                                        </strong>
                                                    </tr>
                                                
                                                   




                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- DNB -->
                        <!-- ====================================================================================== -->


                    </div>
                     <div class="col-md-12  ">
                        <h2>Pediatric Nephrology </h2>
                        <div class="content">
                            <div class="panel panel-success">
                                <div class="panel-body">
                                    <div class="col-xs-12">
                                        <div class="scrollable">
                                            <table class="table table-hover table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Consultant's Name </th>
                                                        <th>Qualification</th>
                                                        <th>OPD Timing </th>
                                                        <th>Availability</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <strong>
                                                            <td><b>Dr. Rajeev Sinha</b></td>
                                                            <td>MBBS, MD</td>
                                                            <td>09:00 am to 03:00 pm 
                                                            </td>

                                                            <td>(Monthly Visit)</td>
                                                        </strong>
                                                    </tr>
                                                
                                                   




                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- DNB -->
                        <!-- ====================================================================================== -->


                    </div>
                     <div class="col-md-12  ">
                        <h2>Pediatric Development </h2>
                        <div class="content">
                            <div class="panel panel-success">
                                <div class="panel-body">
                                    <div class="col-xs-12">
                                        <div class="scrollable">
                                            <table class="table table-hover table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Consultant's Name </th>
                                                        <th>Qualification</th>
                                                        <th>OPD Timing </th>
                                                        <th>Availability</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <strong>
                                                            <td><b>Dr. Shyamal Kumar Das</b></td>
                                                            <td>MBBS, MD(Paed)</td>
                                                            <td>10:00 am to 04:00 pm 
                                                            </td>

                                                            <td>(Monthly Visit)</td>
                                                        </strong>
                                                    </tr>
                                                
                                                   




                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- DNB -->
                        <!-- ====================================================================================== -->


                    </div>
                     <div class="col-md-12  ">
                        <h2>Pediatric Genetics</h2>
                        <div class="content">
                            <div class="panel panel-success">
                                <div class="panel-body">
                                    <div class="col-xs-12">
                                        <div class="scrollable">
                                            <table class="table table-hover table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Consultant's Name </th>
                                                        <th>Qualification</th>
                                                        <th>OPD Timing </th>
                                                        <th>Availability</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <strong>
                                                            <td><b>Dr. Bhavna Agrwal</b></td>
                                                            <td>MBBS, MD</td>
                                                            <td>11:00 to 03:00 Pm 
                                                            </td>

                                                            <td>(Monthly Visit)</td>
                                                        </strong>
                                                    </tr>
                                                
                                                   




                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- DNB -->
                        <!-- ====================================================================================== -->


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
</body>

</html>
