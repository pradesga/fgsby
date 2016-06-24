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
    
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">
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
                    <a href="/timeline.php"><img src="img/1.jpg"></a>
                </div>
                <!-- End Item -->
                <div class="item">
                    <img src="img/2.jpg" alt="Kami dari Female Geek Surabaya sedang mencoba untuk berpartisipasi kepada Masyarakat. Ada beberapa Project yg sedang kami garap untuk kemajuan perkembangan IT di Indonesia.">
                </div>
                <!-- End Item -->
                <div class="item">
                    <a href="https://www.facebook.com/femalegeek" target="_blank"><img src="img/3.jpg" alt="Portofolio kami bisa dilihat di https://www.facebook.com/femalegeek"></a>
                </div>
                <!-- End Item -->
                <div class="item">
                    <a href="/registrasi.php"><img src="img/4.jpg" alt="Mari bergabung pada event FemaleGeek Surabaya, Registrasi sekarang!"></a>
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

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

<script type="text/javascript">
$(document).ready( function() {
    $('#myCarousel').carousel({
        interval: 4000
    });

    var clickEvent = false;
    $('#myCarousel').on('click', '.nav a', function() {
        clickEvent = true;
        $('.nav li').removeClass('active');
        $(this).parent().addClass('active');        
    }).on('slid.bs.carousel', function(e) {
        if(!clickEvent) {
            var count = $('.nav').children().length -1;
            var current = $('.nav li.active');
            current.removeClass('active').next().addClass('active');
            var id = parseInt(current.data('slide-to'));
            if(count == id) {
                $('.nav li').first().addClass('active');
            }
        }
        clickEvent = false;
    });
});
</script>

</body>
</html>