<?php require('inc/frontend.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="FemaleGeek Surabaya - Timeline">
  <title>FemaleGeek Surabaya - Timeline</title>

  <!-- stylesheet -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/styles.css" rel="stylesheet">

</head>
<body>

  <!-- navigation -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href=""><img src="assets/img/brand_white.png" alt=""></a>
      </div>
    </div>
  </nav>

  <section id="timeline">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1>Timeline Registrations</h1>
        </div>
        <div class="col-md-12">

          <div class="timeline">

          <?php foreach ($datarr as $row) { ?>
            <?php if ($row['konfirm']) { ?>
            <article class="timeline-entry">
            <?php } else { ?>
            <article class="timeline-entry left-aligned">
            <?php } ?>
              <div class="timeline-entry-inner">
                <time class="timeline-time"><span><?php echo tglku($row['tgl'], 'H:i:s'); ?></span> <span><?php echo tglku($row['tgl'], 'd F Y'); ?></span></time>
                <?php if ($row['konfirm']) { ?>
                  <div class="timeline-icon bg-success"><span class="glyphicon glyphicon-ok"></span></div>
                <?php } else { ?>
                  <div class="timeline-icon bg-warning"><span class="glyphicon glyphicon-time"></span></div>
                <?php } ?>
                <div class="timeline-label">
                  <h2><?php echo ucwords(strtolower($row['nama'])); ?> <span class="text-muted"><?php echo ucwords(strtolower($row['kota'])); ?></span></h2>
                  <p><strong><?php echo trim($row['kode']); ?></strong><br>Status <?php echo ($row['konfirm']) ? '<strong class="text-success">Confirmed</strong>' : '<strong class="text-warning">Waiting</strong>'; ?></p>
                </div>
              </div>
            </article>
          <?php } ?>

            <article class="timeline-entry begin">
              <div class="timeline-entry-inner">
                <time class="timeline-time"><span>00:00:00</span> <span>27 June 2016</span></time>
                <div class="timeline-icon bg-secondary">
                  <span class="glyphicon glyphicon-flag"></span>
                </div>
                <div class="timeline-label">
                  <h2>Registration Open</h2>
                </div>
              </div>
            </article>
          </div>

        </div>
      </div><!-- /.row -->
    </div>
  </section>

  <a href="#" class="scrolling scroll-up"><span class="glyphicon glyphicon-menu-up"></span></a>

  <footer>
    <div class="container">
      <p class="text-center">Copyright 2016 - Team Female Geek Surabaya</p>
    </div>
  </footer>

  <a href="#" class="scrolling scroll-up"><span class="glyphicon glyphicon-menu-up"></span></a>

  <!-- javascript -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  <script type="text/javascript">
    $(window).on('scroll', function() {
      if($(window).scrollTop() >= 100) {
        $('.scroll-up').fadeIn();
      } else {
        $('.scroll-up').fadeOut();
      }
    }).scroll();

    $('.scroll-up').click(function(){
      $("html, body").animate({ scrollTop: 0 }, 1000);
      return false;
    });
  </script>

</body>
</html>