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
            color: #fff;
            /* Change color to bright white */
            position: absolute;
            top: 5px;
            /* Adjust top position as needed */
            right: 15px;
            /* Adjust right position as needed */
            font-size: 40px;
            /* Increase font size */
            font-weight: normal;
            /* Adjust font weight as needed */
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: #999;
            text-decoration: none;
            cursor: pointer;
        }

        //pdf downaload modal style wire:
        .modal-content {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .preview-image {
            cursor: pointer;

        }

        .pdf-section {
    background-color: #f7f9fc;
    border: 2px solid #007bff;
    border-radius: 10px;
    padding: 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    transition: background-color 0.3s, transform 0.3s;
}
.pdf-section:hover {
    background-color: #e9ecef;
    transform: translateY(-5px);
}
.pdf-icon-container {
    background-color: #007bff;
    padding: 20px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: background-color 0.3s, transform 0.3s;
}
.pdf-icon {
    font-size: 50px;
    color: #fff;
}
.pdf-section p {
    margin-top: 15px;
    font-weight: bold;
    color: #007bff;
}
.pdf-section:hover .pdf-icon-container {
    background-color: #0056b3;
    transform: scale(1.1);
}
.pdf-section:hover p {
    color: #0056b3;
}
.modal-header .close {
    font-size: 1.5rem;
    color: #007bff;
    transition: color 0.3s, transform 0.3s;
}
.modal-header .close:hover {
    color: #0056b3;
    transform: rotate(90deg);
}
.modal-header .close span {
    display: block;
    padding: 15px;
    border-radius: 50%;
    background-color: #f1f1f1;
}
.modal-footer .close {
    font-size: 2rem; /* Increase the font size for better visibility */
    color: #ff0000; /* Bright red color for high visibility */
    transition: color 0.3s, transform 0.3s, background-color 0.3s; /* Add transition for color and background */
    padding: 10px; /* Add padding for a larger clickable area */
    border-radius: 50%; /* Make the button circular */
    background-color: #f8d7da; /* Light red background for better contrast */
}

.modal-footer .close:hover {
    color: #ffffff; /* Change text color to white on hover */
    background-color: #dc3545; /* Dark red background on hover */
    transform: rotate(90deg); /* Rotate icon on hover */
}

.modal-footer .close span {
    display: block;
}

.modal-header .close span:hover {
    background-color: #e9ecef;
}
/* Style for the modal content */
.modal-content {
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
}
/* Style for the buttons in the modal */
.modal-body .btn {
    border-radius: 20px;
    font-size: 1rem;
    padding: 10px 20px;
    transition: background-color 0.3s, transform 0.3s;
}
.modal-body .btn:hover {
    transform: translateY(-2px);
}
.modal-body .btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}
.modal-body .btn-primary:hover {
    background-color: #0056b3;
    border-color: #004494;
}
.modal-body .btn-success {
    background-color: #28a745;
    border-color: #28a745;
}
.modal-body .btn-success:hover {
    background-color: #218838;
    border-color: #1e7e34;
}
/* Gradient text effect */
 .gradient-text {
           background: linear-gradient(90deg, #ff7e5f, #feb47b); /* Gradient colors */
            -webkit-background-clip: text;
            color: transparent;
            font-size: 24px; /* Increase the text size */
            font-family: 'Arial', sans-serif; /* Change the font */
            transition: background 0.3s ease-in-out, font-size 0.3s ease-in-out;
        }

             /* Hover effect for gradient text */
        .gradient-text:hover {
            background: linear-gradient(90deg, #6a11cb, #2575fc); /* Different gradient on hover */
            -webkit-background-clip: text;
            color: transparent;
            font-size: 26px; /* Slightly increase the text size on hover */
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
            <div class="row"><div class="col-md-12">
    <!-- DNB -->
    <h2>Course materials</h2>
    <h1><i class="fa fa-spinner"></i> Course materials </h1>
    <div class="row">
        <div class="col-md-6">
            <div class="notice">
                <!-- Centered Heading -->
                <h3 class="text-center">Important Course Materials </h3>
                <!-- Paragraph Section -->
                <div class="paragraph-section">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
                        accumsan tempor quam,
                        ut scelerisque metus tincidunt eget. Fusce ut venenatis ligula. Lorem ipsum
                        dolor sit amet, consectetur adipiscing elit.
                        Nulla accumsan tempor quam, ut scelerisque metus tincidunt eget. Fusce ut
                        venenatis ligula.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="text-center pdf-section">
                <div class="pdf-icon-container">
                    <i class="fa fa-file-pdf-o pdf-icon" aria-hidden="true" id="pdfIcon"></i>
                </div>
                <p   class="gradient-text" >Click the icon to view PDF options</p>
            </div>
        </div>
    </div>
    <hr class="linecolor">
</div>
               

                            <hr class="linecolor">
                        </div>

                      <div id="previewModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="previewModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="previewModalLabel">PDF Options</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="text-center modal-body">
                <button id="previewButton" class="mb-2 btn btn-primary">Preview PDF</button>
                <button id="downloadButton" class="btn btn-success">Download PDF</button>
            </div>
        </div>
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

    <script>
        $(document).ready(function() {
            $('#pdfIcon').on('click', function() {
                $('#previewModal').modal('show');
            });

            $('#previewButton').on('click', function() {
                window.open('/TestPDFfile.pdf', '_blank');
            });

            $('#downloadButton').on('click', function() {
                window.location.href = '/download-pdf';
            });
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
