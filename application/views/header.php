<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="UTF-8">

    <title>Dorm Booking</title>

    <link rel="stylesheet" href="<?= base_url("public/css/style.css"); ?>">
    <link href="<?= base_url('public/css/bootstrap.min.css" rel="stylesheet')?>">
    <link rel="stylesheet" href="<?= base_url("public/css/weblog.css"); ?>" media="screen">
    <link href="https://fonts.googleapis.com/css?family=Taviraj:300" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <style>
        .mySlides {
            display: none
        }

        .w3-left, .w3-right, .w3-badge {
            cursor: pointer
        }

        .w3-badge {
            height: 13px;
            width: 13px;
            padding: 0
        }
    </style>

</head>
<body>

<div class="container">

    <header class="site-header">
        <h1>Dorm Booking</h1>
        <nav>
            <span class="menu" >
                <ul>
                    <li><a href="<?= base_url(); ?>">Home</a></li>
                    <li><a href="#footer">About</a></li>
                    <?php if ( $this->session->logged_in ) : ?>
                        <li><a href="<?= base_url('logout'); ?>">Logout</a></li>
                    <?php else: ?>
                        <li><a href="<?= base_url('login'); ?>">Login</a></li>
                    <?php endif; ?>
                </ul>
            </span>
        </nav>
    </header>
    <div class="site-announcement">
        <div class="w3-content w3-display-container" style="max-width:1200px">
            <img class="mySlides" src="public/images/dorm1.png" style="width:100%">
            <img class="mySlides" src="public/images/dorm2.png" style="width:100%">
            <img class="mySlides" src="public/images/dorm3.png" style="width:100%">
            <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">

                <!--        move button-->
                <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
                <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>

                <!--        count button-->
                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
                <!--        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>-->
            </div>
        </div>

        <script>
            var slideIndex = 1;
            showDivs(slideIndex);

            function plusDivs(n) {
                showDivs(slideIndex += n);
            }

            function currentDiv(n) {
                showDivs(slideIndex = n);
            }

            function showDivs(n) {
                var i;
                var x = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("demo");
                if (n > x.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = x.length
                }
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" w3-white", "");
                }
                x[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " w3-white";
            }
        </script>
    </div>


