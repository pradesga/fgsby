<?php require("inc/frontend.php"); ?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>FemaleGeek Surabaya</title>
    
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">
    <link href="css/main.css" rel="stylesheet">
</head>
<body>
    <center>
        <a class="logofg" href="/"><img src="img/fg.png"></a>
    </center>
    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="http://placehold.it/1200x400/16a085/ffffff&text=About Us">
                    <div class="carousel-caption">
                        <h3>FemaleGeek PHPIndonesia</h3>
                        <p>She loves IT. She developed IT FemaleGeek adalah komunitas yang terdiri dari perempuan yang berkecimpung dalam dunia IT bersinergi dengan PHP Indonesia sebagai salah satu group developer IT besar di Indonesia. <a class="btn btn-primary" href="timeline.php">Timeline</a></p>
                    </div>
                </div>
                <!-- End Item -->
                <div class="item">
                    <img src="http://placehold.it/1200x400/e67e22/ffffff&text=Projects">
                    <div class="carousel-caption">
                        <h3></h3>
                        <p>Kami dari Female Geek Surabaya sedang mencoba untuk berpartisipasi kepada Masyarakat. Ada beberapa Project yg sedang kami garap untuk kemajuan perkembangan IT di Indonesia.</p>
                    </div>
                </div>
                <!-- End Item -->
                <div class="item">
                    <img src="http://placehold.it/1200x400/2980b9/ffffff&text=Portfolio">
                    <div class="carousel-caption">
                        <h3></h3>
                        <p>Portofolio kami bisa dilihat di <a href="https://www.facebook.com/femalegeek">Disini</a>.</p>
                    </div>
                </div>
                <!-- End Item -->
                <div class="item">
                    <img src="http://placehold.it/1200x400/8e44ad/ffffff&text=Event">
                    <div class="carousel-caption">
                        <h3></h3>
                        <p>Event FemaleGeek pertama kami. <a href="registrasi.php" class="btn btn-primary">Registrasi disini</a>.</p>
                    </div>
                </div>
                <!-- End Item -->
            </div>
            <!-- End Carousel Inner -->
            <ul class="nav nav-pills nav-justified">
                <li data-target="#myCarousel" data-slide-to="0" class="active"><a href="#">About<small>Female Geek</small></a></li>
                <li data-target="#myCarousel" data-slide-to="1"><a href="#">Projects<small>Project Us</small></a></li>
                <li data-target="#myCarousel" data-slide-to="2"><a href="#">Portfolio<small>My Portofolio</small></a></li>
                <li data-target="#myCarousel" data-slide-to="3"><a href="#">Event<small>Event FG</small></a></li>
            </ul>
        </div>
        <!-- End Carousel -->
    </div>

    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

<script type="text/javascript">
$(document).ready( function() {
    $('#myCarousel').carousel({
        interval: 4000
    });
});
</script>

</body>
</html>