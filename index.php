<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="FemaleGeek Surabaya - Home">
  <title>FemaleGeek Surabaya - Home</title>

  <!-- stylesheet -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/styles.css" rel="stylesheet">

</head>
<body>

  <!-- navigation -->
  <nav class="navbar navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="/"><img src="assets/img/brand_white.png" alt=""></a>
      </div>
    </div>
  </nav>

  <header id="my-carousel" class="carousel slide">
    <!-- indicators -->
    <ol class="carousel-indicators visible-xs">
      <li data-target="#my-carousel" data-slide-to="0" class="active"></li>
      <li data-target="#my-carousel" data-slide-to="1"></li>
      <li data-target="#my-carousel" data-slide-to="2"></li>
      <li data-target="#my-carousel" data-slide-to="3"></li>
    </ol>

    <!-- carousel -->
    <div class="carousel-inner">
      <div class="item active">
        <div class="fill" style="background-image: url('assets/img/four.jpg');">
          <div class="hero">
            <div class="container">
              <h2>Events</h2>
              <p>How to Become a Developer - Team Female Geek Surabaya at Dilo Surabaya</p>
           
              <a class="btn btn-transparent btn-lg" href="timeline.php" role="button">Timeline</a>
            </div>
          </div><!-- ./hero -->
        </div>
      </div>
      <div class="item">
        <div class="fill" style="background-image: url('assets/img/one.jpg');">
          <div class="hero">
            <div class="container">
              <h2>She love IT. She developes IT</h2>
              <p>Komunitas yang terdiri dari perempuan yang berkecimpung dalam dunia IT bersinergi dengan PHP Indonesia sebagai salah satu group developer IT terbesar di Indonesia</p>
              <a class="btn btn-transparent btn-lg" href="https://femalegeek.phpindonesia.or.id/#team" role="button">Read More</a>
            </div>
          </div><!-- ./hero -->
        </div>
      </div>
      <div class="item">
        <div class="fill" style="background-image: url('assets/img/two.jpg');">
          <div class="hero">
            <div class="container">
              <h2>Sister to Sisters</h2>
              <p>Suatu program mentoring, dimana seorang mentor yang menjadi role model dan teman bicara / diskusi yang berhubungan dengan profesinya sebagai seorang IT engineer/developer/web designer</p>
              <a class="btn btn-transparent btn-lg" href="https://femalegeek.phpindonesia.or.id/#services" role="button">Read More</a>
            </div>
          </div><!-- ./hero -->
        </div>
      </div>
      <div class="item">
        <div class="fill" style="background-image: url('assets/img/three.jpg');">
          <div class="hero">
            <div class="container">
              <h2>E-Magazine</h2>
              <p>Majalah elektronik resmi dari PHP Indonesia yang berisi informasi seputar meetup / seminar maupun workshop yang diselenggarakan oleh PHP Indonesia</p>
              <a class="btn btn-transparent btn-lg" href="http://femalegeek.phpindonesia.or.id/download/27/" role="button">Download</a>
            </div>
          </div><!-- ./hero -->
        </div>
      </div>
    </div>

    <!-- controls -->
    <a class="left carousel-control hidden-xs" href="#my-carousel" data-slide="prev">
      <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control hidden-xs" href="#my-carousel" data-slide="next">
      <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <a class="down carousel-control hidden-xs floating-arrow scroll-about" href="#">
      <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
    </a>
  </header>

  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1>Hi Youths in Surabaya! Here's a good news!</h1>
          <p class="slogan">For you who have a passion in IT, we are from Female Geek Surabaya PHP Indonesia proudly present this event for you "How to Become a Developer".</p>
          <button class="btn btn-success btn-lg scroll-register" type="button">Register Now</button>
        </div>
      </div><!-- /.row -->
    </div>
  </section>

  <section id="speaker">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1>Speakers of the Event</h1>
          <p class="slogan">We have speakers who are experts in theirs fields.</p>
          <div class="row center-block">
            <div class="col-sm-4 text-center">
              <img class="img-circle img-thumbnail" src="assets/img/anne.jpg">
              <h3>Anne Regina Nancy Toar</h3>
              <p><em>Head of FemaleGeek PHP Indonesia</em></p>
            </div>
            <div class="col-sm-4 text-center">
              <img class="img-circle img-thumbnail" src="assets/img/peter.jpg">
              <h3>Peter Jack Kambey</h3>
              <p><em>Head of PHP Indonesia</em></p>
            </div>
            <div class="col-sm-4 text-center">
              <img class="img-circle img-thumbnail" src="assets/img/ibnu.jpg">
              <h3>Ibnu Sina Wardy</h3>
              <p><em>Google Developers Expert</em></p>
            </div>
          </div>
        </div>
      </div><!-- /.row -->
    </div>
  </section>

  <section id="countdown">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center">
          <h1>Countdown to Event</h1>
          <p class="slogan">Event will be held on Sunday, 28 August 2016 09:00:00.</p>
          <div class="row countdown">
            <div class="countdown-item col-sm-3 col-xs-6">
              <div id="countdown-days" class="countdown-number"></div>
              <div class="countdown-label">Days</div>
            </div>
            <div class="countdown-item col-sm-3 col-xs-6">
              <div id="countdown-hours" class="countdown-number"></div>
              <div class="countdown-label">Hours</div>
            </div>
            <div class="countdown-item col-sm-3 col-xs-6">
              <div id="countdown-minutes" class="countdown-number"></div>
              <div class="countdown-label">Minutes</div>
            </div>
            <div class="countdown-item col-sm-3 col-xs-6">
              <div id="countdown-seconds" class="countdown-number"></div>
              <div class="countdown-label">Seconds</div>
            </div>
          </div>
        </div>
      </div><!-- /.row -->
    </div>
  </section
    

  <section id="maps">
    <div id="google-map"></div>
  </section>

  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 text-center">
          <h3>Event Location</h3>
          <p>Dilo Surabaya. Telkom Indonesia Divre V</p>
          <p>Jalan Ketintang No 135 Surabaya. Jawa Timur</p>
        </div>
        <div class="col-sm-6 text-center">
          <h3>Call Us</h3>
          <p>Illa (0858-1018-7939)</p>
          <p>Kiki (0812-8984-6568)</p>
        </div>
      </div><!-- /.row -->
    </div>
  </section>

  <footer>
    <div class="container">
      <p class="text-center">Copyright 2016 - Team Female Geek Surabaya</p>
    </div>
  </footer>

  <a href="#" class="scrolling scroll-up"><span class="glyphicon glyphicon-menu-up"></span></a>

  <!-- javascript -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery.countdown.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnn0J-CaEdKaaMKY5RUxPv9HZ_orpb0eg"></script>

  <script type="text/javascript">
    $('.carousel').carousel({
      interval: 3000
    });

    $('.countdown').countdown('2016/08/28 09:00:00').on('update.countdown', function (event) {
      $('#countdown-days').text(event.offset.totalDays);
      $('#countdown-hours').text(('0' + event.offset.hours).slice(-2));
      $('#countdown-minutes').text(('0' + event.offset.minutes).slice(-2));
      $('#countdown-seconds').text(('0' + event.offset.seconds).slice(-2));
    });

    $(window).on('scroll', function() {
      if($(window).scrollTop() >= 15) {
        $('.navbar').addClass('navbar-inverse');
      } else {
        $('.navbar').removeClass('navbar-inverse');
      }

      if($(window).scrollTop() >= 100) {
        $('.scroll-up').fadeIn();
      } else {
        $('.scroll-up').fadeOut();
      }
    }).scroll();

    $('.scroll-about').click(function(){
      $("html, body").animate({ scrollTop: ($('#about').offset().top - 68) }, 1000);
      return false;
    });

    $('.scroll-register').click(function(){
      $("html, body").animate({ scrollTop: ($('#register').offset().top - 68) }, 1000);
      return false;
    });

    $('.scroll-up').click(function(){
      $("html, body").animate({ scrollTop: 0 }, 1000);
      return false;
    });

    $('#register-form').submit(function(event) {
      event.preventDefault();

      $.ajax({
        url: 'registrasi.php',
        type: 'POST',
        data: $(this).serialize(),
        beforeSend: function() {
          $('#register-form :submit').prop('disabled', true);
          $('#register-form :submit').text('Registering ...');
        },
        success: function(response) {
          $('#register-form :submit').text('Register');
          $('#register-form :submit').prop('disabled', false);
          $('#register-form #messages').html(response);
        },
        error: function(response) {
          $(this).find('#messages').html(response);
        },
      });
    });
  </script>

  <script type="text/javascript">
    function init_map() {
      var myOptions = {
        zoom: 13,
        center: new google.maps.LatLng(-7.310746, 112.7287106),
        mapTypeId: google.maps.MapTypeId.ROADMAP
      };
      map = new google.maps.Map(document.getElementById('google-map'), myOptions);
      marker = new google.maps.Marker({
        map: map,
        position: new google.maps.LatLng(-7.310746, 112.7287106)
      })
      infowindow = new google.maps.InfoWindow({
        content: '<strong>Dilo Surabaya</strong><br>Telkom Indonesia Divre V<br>'
      });
      google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map, marker);
      });
      infowindow.open(map, marker);
    }
    google.maps.event.addDomListener(window, 'load', init_map);
  </script>

</body>
</html>