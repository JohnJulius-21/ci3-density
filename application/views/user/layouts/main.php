<!DOCTYPE HTML>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Density Living</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="" />
  <link rel="stylesheet" type="text/css"
    href="//fonts.googleapis.com/css?family=|Roboto+Sans:400,700|Playfair+Display:400,700">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&display=swap" rel="stylesheet">


  <link rel="stylesheet" href="<?php echo base_url('assets/user/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/user/css/animate.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/user/css/owl.carousel.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/user/css/aos.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/user/css/bootstrap-datepicker.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/user/css/jquery.timepicker.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/user/css/fancybox.min.css'); ?>">

  <link rel="stylesheet" href="<?php echo base_url('assets/user/fonts/ionicons/css/ionicons.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/user/fonts/fontawesome/css/font-awesome.min.css'); ?>">

  <!-- Theme Style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/user/css/style.css'); ?>">
</head>

<body>

  <header class="site-header js-site-header">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-6 col-lg-4 site-logo" data-aos="fade">
          <a href="<?php echo site_url('home/index'); ?>">
            <img id="logo" src="<?php echo base_url('assets/user/images/density-logo.png'); ?>"
              alt="Density Living Logo">
          </a>
        </div>
        <div class="col-6 col-lg-8">
          <div class="site-menu-toggle js-site-menu-toggle" data-aos="fade">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <!-- END menu-toggle -->

          <div class="site-navbar js-site-navbar">
            <nav role="navigation">
              <div class="container">
                <div class="row full-height align-items-center">
                  <div class="col-md-6 mx-auto">
                    <ul class="list-unstyled menu">
                      <li class="<?php echo is_active_menu('home'); ?>"><a
                          href="<?php echo site_url('home'); ?>">Home</a></li>
                      <li class="<?php echo is_active_menu('reservation'); ?>"><a class="nav-link <?php echo ($this->uri->segment(1) == 'reservation') ? 'active' : ''; ?>"
                          href="<?php echo site_url('reservation'); ?>">Reservation</a></li>
                      <li><a href="contact.html">Request Form</a></li>
                      <li><a href="contact.html">Contact</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- END head -->

  <section class="site-hero overlay"
    style="background-image: url('<?php echo base_url('assets/user/images/hero.jpg'); ?>')"
    data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row site-hero-inner justify-content-center align-items-center">
        <div class="col-md-10 text-center" data-aos="fade-up">
          <span class="custom-caption text-uppercase text-white d-block mb-3">FEELS THE DIFFERENCE WITH
            <h1 class="heading">DENSITY LIVING</h1>
        </div>
      </div>
    </div>

    <a class="mouse smoothscroll" href="#next">
      <div class="mouse-icon">
        <span class="mouse-wheel"></span>
      </div>
    </a>
  </section>

  <!-- END section -->

  <!-- Content section -->
  <div class="mt-3 mb-3">
    <?php echo isset($content) ? $this->load->view($content, NULL, TRUE) : ''; ?>
  </div>
  <!-- END section -->



  <footer class="section footer-section">
    <div class="container">
      <div class="row pt-5">
        <p class="col-md-6 text-left">
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;
          <script>document.write(new Date().getFullYear());</script> All rights reserved
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
      </div>
    </div>
  </footer>

  <script src="<?php echo base_url('assets/user/js/jquery-3.3.1.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/user/js/jquery-migrate-3.0.1.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/user/js/popper.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/user/js/bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/user/js/owl.carousel.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/user/js/jquery.stellar.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/user/js/jquery.fancybox.min.js'); ?>"></script>


  <script src="<?php echo base_url('assets/user/js/aos.js'); ?>"></script>

  <script src="<?php echo base_url('assets/user/js/bootstrap-datepicker.js'); ?>"></script>
  <script src="<?php echo base_url('assets/user/js/jquery.timepicker.min.js'); ?>"></script>



  <script src="<?php echo base_url('assets/user/js/main.js'); ?>"></script>
  <script>
    window.addEventListener('scroll', function () {
      const logo = document.getElementById('logo');
      if (window.scrollY > 50) { // Ubah 50 sesuai kebutuhan
        logo.src = "<?php echo base_url('assets/user/images/density-logo2.png'); ?>"; // Ganti dengan path logo baru
      } else {
        logo.src = "<?php echo base_url('assets/user/images/density-logo.png'); ?>"; // Ganti dengan path logo awal
      }
    });
  </script>
</body>

</html>