<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <?php
      if ($meta == 1) {
        $meta = get_meta('Home');
      } else if ($meta == 2) {
          $meta = get_meta('Undergraduate_programme');
      } else if ($meta == 3) {
        $meta = get_meta('Advanced_module');
      } else if ($meta == 4) {
        $meta = get_meta('Postgraduate_programme');
      } else if ($meta == 5) {
        $meta = get_meta('Staff');
      } else if ($meta == 6) {
        $meta = get_meta('Module');
      } else if ($meta == 7) {
        $meta = get_meta('Module_gip');
      } else if ($meta == 8) {
        $meta = get_meta('Module_mbb');
      } else if ($meta == 9) {
        $meta = get_meta('Module_ppm');
      } else if ($meta == 10) {
        $meta = get_meta('Student_alumni');
      } else if ($meta == 11) {
        $meta = get_meta('Research_Projects');
      } else if ($meta == 12) {
        $meta = get_meta('Student_Research');
      } else if ($meta == 13) {
        $meta = get_meta('News');
      } else if ($meta == 14) {
        $meta = get_meta('Publications');
      } else {
          $meta = get_meta('Home');
      }
    ?>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $meta[0]->vMeta_description; ?>" />
    <link rel="canonical" href="<?php echo $meta[0]->vOg_url; ?>" />
    <meta property="og:site_name" content="<?php echo $meta[0]->vTitle; ?> | <?php echo $meta[0]->vPage_name; ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?php echo $meta[0]->vOg_title; ?>" />
    <meta property="og:description" content="<?php echo $meta[0]->vOg_description; ?>" />
    <meta property="og:url" content="<?php echo $meta[0]->vOg_url; ?>" />
    <title><?php echo $meta[0]->vTitle; ?></title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link href="<?php echo base_url("assets/frontend/"); ?>css/agri_uni.css" rel="stylesheet">
    <link href="<?php echo base_url("assets/frontend/"); ?>css/mediaquery.css" rel="stylesheet">
    <!-- Custom CSS -->

    <title>Sub Campus, MI</title>

    <!--favicon-->
    <link rel="shortcut icon" href="<?php echo base_url("assets/frontend/"); ?>images/favicon.png" />
    <!--favicon-->

    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Add icon library -->

    <!--loading effect-->
    <link rel="stylesheet" href="<?php echo base_url("assets/frontend/"); ?>css/loading_styles.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="<?php echo base_url("assets/frontend/"); ?>css/aos.css" type="text/css" media="screen"/>
    <!--loading effect-->

    <!-- owl carousel -->
    <link href="<?php echo base_url("assets/frontend/"); ?>owl/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/frontend/"); ?>owl/owl_css.css">
    <!-- owl carousel -->


    <!--scroll bar style-->
    <style>
      ::-webkit-scrollbar {
        background: #000000;
        height: 5px;
        width: 5px;
      }

      ::-webkit-scrollbar-track {
        box-shadow: inset 0 0 2px #000000;
      }

      ::-webkit-scrollbar-thumb {
        background: #005a2b;
        border-radius: 2px;
      }

      ::-webkit-scrollbar-thumb:hover {
        background: #00b456;
      }
    </style>
    <!--scroll bar style-->


  </head>
  <body>


    <!--=============================================-->
  <!--===================header====================-->

   
    <!-- header section -->

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top desktop_menu d-none d-lg-block" style="position: absolute; background-color: #ffffff !important;">
      <div class="container">
<?php 
        $logo = get_logo();
        ?>

        <a class="navbar-brand" href="<?php echo base_url("/"); ?>"><img src="<?php echo base_url('front_img/').$logo->fFacultyLogo; ?>" alt="" class="d-block w-100 top_logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse flex-grow-1 text-right" id="navbarResponsive">

          <ul class="navbar-nav ms-auto second_nav_bar">

             <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url("/"); ?>">Home</a>
            </li>

             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Academic
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="<?php echo base_url('Undergraduate-Programme'); ?>">Undergraduate Programme</a></li>
                <!--<li><a class="dropdown-item" href="<?php echo base_url('Postgraduate-Programme'); ?>">Postgraduate Programme</a></li>-->
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('Staff'); ?>">Staff</a>
            </li>

            <!-- <li class="nav-item dropdown">-->
            <!--  <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">-->
            <!--    Students-->
            <!--  </a>-->
            <!--  <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">-->
            <!--    <li><a class="dropdown-item" href="<?php echo base_url('Module'); ?>">Students</a></li>-->
            <!--    <li><a class="dropdown-item" href="<?php echo base_url('Student-Alumni'); ?>">Alumni</a></li>-->
            <!--  </ul>-->
            <!--</li>-->

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Research
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="<?php echo base_url('Research-Projects'); ?>">Research Projects</a></li>
                <li><a class="dropdown-item" href="<?php echo base_url('Student-Research'); ?>">Student Research</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Others
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="<?php echo base_url('News'); ?>">News</a></li>
                <li><a class="dropdown-item" href="<?php echo base_url('Publications'); ?>">Featured Publications </a></li>
              </ul>
            </li>

          </ul>
        </div>
      </div>
    </nav>



    <!-- ============================= -->
    <!-- mobile menu section -->
    <!-- ============================= -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top d-lg-none d-xl-none d-xxl-none" style="position: absolute; background-color: #ffffff !important;">
      <div class="container">

        <a class="navbar-brand" href="<?php echo base_url("/"); ?>"><img src="<?php echo base_url('front_img/').$logo->fFacultyLogo; ?>" alt="" class="d-block w-100 top_logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse flex-grow-1 text-right" id="navbarResponsive">


          <ul class="navbar-nav ms-auto second_nav_bar">

             <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url("/"); ?>">Home</a>
            </li>

             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Academic
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="<?php echo base_url('Undergraduate-Programme'); ?>">Undergraduate Programme</a></li>
                <!--<li><a class="dropdown-item" href="<?php echo base_url('Postgraduate-Programme'); ?>">Postgraduate Programme</a></li>-->
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('Staff'); ?>">Staff</a>
            </li>

             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Students
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="<?php echo base_url('Module'); ?>">Students</a></li>
                <li><a class="dropdown-item" href="<?php echo base_url('Student-Alumni'); ?>">Alumni</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Research
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="<?php echo base_url('Research-Projects'); ?>">Research Projects</a></li>
                <li><a class="dropdown-item" href="<?php echo base_url('Student-Research'); ?>">Student Research</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Others
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="<?php echo base_url('News'); ?>">News</a></li>
                <li><a class="dropdown-item" href="<?php echo base_url('Publications'); ?>">Featured Publications </a></li>
              </ul>
            </li>

          </ul>
        </div>
      </div>
    </nav>
    <!-- ============================= -->
    <!-- mobile menu section -->
    <!-- ============================= -->