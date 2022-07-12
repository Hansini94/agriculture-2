<!doctype html>
<html lang="en">
  <head>

  <?php
    if (activate_menu('Home') == 'active') {
        $meta = get_meta('Home');
    } else if (activate_menu('about_us') == 'active') {
        $meta = get_meta('about_us');
    } else if (activate_menu('faculty_statistic_undergraduate') == 'active') {
      $meta = get_meta('faculty_statistic_undergraduate');
    } else if (activate_menu('faculty_statistic_academic_staff') == 'active') {
      $meta = get_meta('faculty_statistic_academic_staff');
    } else if (activate_menu('Dean_office') == 'active') {
      $meta = get_meta('Dean_office');
    } else if (activate_menu('Faculty_board') == 'active') {
      $meta = get_meta('Faculty_board');
    } else if (activate_menu('History') == 'active') {
      $meta = get_meta('History');
    } else {
        $meta = get_meta('home');
    }
  ?>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link href="<?php echo base_url("assets/frontend/"); ?>css/agri_uni.css" rel="stylesheet">
    <link href="<?php echo base_url("assets/frontend/"); ?>css/mediaquery.css" rel="stylesheet">
    <!-- Custom CSS -->

    <title>Faculty of Agriculture | Notices</title>

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

        <a class="navbar-brand" href="index.html"><img src="<?php echo base_url("assets/frontend/"); ?>images/logo.png" alt="" class="d-block w-100 top_logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse flex-grow-1 text-right" id="navbarResponsive">


          <ul class="navbar-nav ms-auto first_nav_bar">

            <li class="nav-item">
              <a class="nav-link" href="#">Alumni</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Downloads
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href=".html" style="text-align: left;">Examination Claim Form</a></li>
                <li><a class="dropdown-item" href="#" style="text-align: left;"> Advance Payment Request Form &raquo; </a>
                   <ul class="submenu dropdown-menu">
                    <li><a class="dropdown-item" href=".html" style="text-align: left;">PDF Format </a></li>
                    <li><a class="dropdown-item" href=".html" style="text-align: left;">Word Format</a></li>
                 </ul>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="faq.html">FAQ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Quick Links</a>
            </li>
            <li class="nav-item">
              <div class="input-group search_bar">
                  <input class="form-control border-end-0 border" type="search" value="search" id="example-search-input" style="height: 30px; font-size: 13px;">
                  <span class="input-group-append">
                      <button class="btn btn-outline-secondary bg-white border-start-0 border ms-n5 search_btn" type="button" style="height: 30px;">
                          <i class="fa fa-search" style="position: relative; top: -4px;"></i>
                      </button>
                  </span>
              </div>
            </li>

          </ul>

            <!-- ============== -->
            <div class="clearfix"></div>


          <ul class="navbar-nav ms-auto second_nav_bar">

            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
             <li class="nav-item dropdown <?php
                                                echo activate_menu('about_us');
                                                echo activate_menu('faculty_statistic_undergraduate');
                                                echo activate_menu('faculty_statistic_academic_staff');
                                                echo activate_menu('Dean_office');
                                                echo activate_menu('Faculty_board');
                                                 ?>">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                About Us
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li class="<?php echo activate_menu('about_us'); ?>"><a class="dropdown-item" href="<?php echo base_url("about-us"); ?>">About Us</a></li>

                <li><a class="dropdown-item" href="#"> Faculty Statistics &raquo; </a>
                   <ul class="submenu dropdown-menu">
                    <li class="<?php echo activate_menu('faculty_statistic_undergraduate'); ?>"><a class="dropdown-item" href="<?php echo base_url("faculty-statistic-undergraduate"); ?>">Undergraduates </a></li>
                    <li class="<?php echo activate_menu('faculty_statistic_academic_staff'); ?>"><a class="dropdown-item" href="<?php echo base_url("faculty-statistic-academic-staff"); ?>">Academic Staff</a></li>

                    <!-- <li><a class="dropdown-item" href="#">Submenu item 3 &raquo; </a>
                      <ul class="submenu dropdown-menu">
                        <li><a class="dropdown-item" href="#">Multi level 1</a></li>
                        <li><a class="dropdown-item" href="#">Multi level 2</a></li>
                    </ul>
                    </li> -->

                 </ul>
                </li>

                <li class="<?php echo activate_menu('Dean_office'); ?>"><a class="dropdown-item" href="<?php echo base_url('dean-office') ?>">Dean’s Office</a></li>
                <li class="<?php echo activate_menu('Faculty_board'); ?>"><a class="dropdown-item" href="<?php echo base_url('faculty-board') ?>">Faculty Board</a></li>
                <li><a class="dropdown-item" href="<?php echo base_url('history'); ?>">History</a></li>
                <li><a class="dropdown-item" href="<?php echo base_url('faculty-organization'); ?>">Faculty Organization</a></li>
                <li><a class="dropdown-item" href="<?php echo base_url('faculty-brochure'); ?>">Faculty Brochures</a></li>
                <li><a class="dropdown-item" href="map.html">Map & direction </a></li>

              </ul>
            </li>

             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                University
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
              </ul>
            </li>

             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Faculty
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
              </ul>
            </li>

             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Academics
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="under_pro.html">Undergraduate Programs </a></li>
                <li><a class="dropdown-item" href="http://www.pgia.pdn.ac.lk/" target="_blank">Postgraduate Programme </a></li>
              </ul>
            </li>

             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Research
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="fac_research.html">Faculty Research Committee </a></li>
                <li><a class="dropdown-item" href="review_commit.html">Ethical Review Committee</a></li>
                <li><a class="dropdown-item" href="research_commi.html">Research Stories</a></li>

                <li><a class="dropdown-item" href="#"> Awards &raquo; </a>
                   <ul class="submenu dropdown-menu">
                    <li><a class="dropdown-item" href="cvcd_award.html">CVCD Excellence Award </a></li>
                    <li><a class="dropdown-item" href="presi_award.html">Presidents’ Award</a></li>
                    <li><a class="dropdown-item" href="calling_application.html">Calling Application – 2018</a></li>
                    <li><a class="dropdown-item" href="award.html">Awards - 2018</a></li>

                    <!-- <li><a class="dropdown-item" href="#">Submenu item 3 &raquo; </a>
                      <ul class="submenu dropdown-menu">
                        <li><a class="dropdown-item" href="#">Multi level 1</a></li>
                        <li><a class="dropdown-item" href="#">Multi level 2</a></li>
                    </ul>
                    </li> -->

                 </ul>
                </li>

              </ul>
            </li>

             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                International
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="overview.html">Overview</a></li>
                <li><a class="dropdown-item" href="http://agri.pdn.ac.lk/centers_units/AEU/Sustainable%20Tropical%20Agricultural%20Systems%20of%20Sri%20Lanka.html" target="_blank">Study Abroad Programme for Foreign Universities </a></li>
                <li><a class="dropdown-item" href="fore_stud.html">Current Foreign Students</a></li>
                <li><a class="dropdown-item" href="opp_study_abroad.html">Opportunities for Study Abroad</a></li>
                <li><a class="dropdown-item" href="info_fore_stud.html">Information for Foreign Students</a></li>
              </ul>
            </li>

             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Students
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="student_societies.html">Agriculture Faculty Chess Club</a></li>
              </ul>
            </li>

             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Quality
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="ffq.html">Faculty Quality Assurance Cell (FQAC) </a></li>
                <li><a class="dropdown-item" href="frc.html">Faculty Sub Committees </a></li>
                <li><a class="dropdown-item" href="fp.html">AHEAD Projects  </a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Engagement
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Services
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
              </ul>
            </li>


            <li class="nav-item d-lg-none d-xl-none d-xxl-none">
              <div class="input-group search_bar">
                  <input class="form-control border-end-0 border" type="search" value="search" id="example-search-input" style="height: 30px; font-size: 13px;">
                  <span class="input-group-append">
                      <button class="btn btn-outline-secondary bg-white border-start-0 border ms-n5 search_btn" type="button" style="height: 30px;">
                          <i class="fa fa-search" style="position: relative; top: -4px;"></i>
                      </button>
                  </span>
              </div>
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

        <a class="navbar-brand" href="index.html"><img src="<?php echo base_url("assets/frontend/"); ?>images/logo.png" alt="" class="d-block w-100 top_logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse flex-grow-1 text-right" id="navbarResponsive">


          <ul class="navbar-nav ms-auto first_nav_bar">

           <li class="nav-item">
              <a class="nav-link" href="#">Alumni</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Downloads
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href=".html" style="text-align: left;">Examination Claim Form</a></li>
                <li><a class="dropdown-item" href="#" style="text-align: left;"> Advance Payment Request Form &raquo; </a>
                   <ul class="submenu dropdown-menu">
                    <li><a class="dropdown-item" href=".html" style="text-align: left;">PDF Format </a></li>
                    <li><a class="dropdown-item" href=".html" style="text-align: left;">Word Format</a></li>
                 </ul>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="faq.html">FAQ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Quick Links</a>
            </li>

          </ul>

            <!-- ============== -->
            <div class="clearfix"></div>


          <ul class="navbar-nav ms-auto second_nav_bar">

              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home</a>
              </li>
               <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  About Us
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="about.html">About Us</a></li>

                  <li><a class="dropdown-item" href="#"> Faculty Statistics &raquo; </a>
                     <ul class="submenu dropdown-menu">
                      <li><a class="dropdown-item" href="fac_stats.html">Undergraduates </a></li>
                      <li><a class="dropdown-item" href="ac_staff.html">Academic Staff</a></li>

                      <!-- <li><a class="dropdown-item" href="#">Submenu item 3 &raquo; </a>
                        <ul class="submenu dropdown-menu">
                          <li><a class="dropdown-item" href="#">Multi level 1</a></li>
                          <li><a class="dropdown-item" href="#">Multi level 2</a></li>
                      </ul>
                      </li> -->

                   </ul>
                  </li>

                  <li><a class="dropdown-item" href="dean_office.html">Dean’s Office</a></li>
                  <li><a class="dropdown-item" href="fac_board.html">Faculty Board</a></li>
                  <li><a class="dropdown-item" href="history.html">History</a></li>
                  <li><a class="dropdown-item" href="fac_org.html">Faculty Organization</a></li>
                  <li><a class="dropdown-item" href="fac_broucher.html">Faculty Brochures</a></li>
                  <li><a class="dropdown-item" href="map.html">Map & direction </a></li>

                </ul>
              </li>

               <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  University
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                </ul>
              </li>

               <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Faculty
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                </ul>
              </li>

               <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Academics
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="under_pro.html">Undergraduate Programs </a></li>
                  <li><a class="dropdown-item" href="http://www.pgia.pdn.ac.lk/" target="_blank">Postgraduate Programme </a></li>
                </ul>
              </li>

               <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Research
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="fac_research.html">Faculty Research Committee </a></li>
                  <li><a class="dropdown-item" href="review_commit.html">Ethical Review Committee</a></li>
                  <li><a class="dropdown-item" href="research_commi.html">Research Stories</a></li>

                  <li><a class="dropdown-item" href="#"> Awards &raquo; </a>
                     <ul class="submenu dropdown-menu">
                      <li><a class="dropdown-item" href="cvcd_award.html">CVCD Excellence Award </a></li>
                      <li><a class="dropdown-item" href="presi_award.html">Presidents’ Award</a></li>
                      <li><a class="dropdown-item" href="calling_application.html">Calling Application – 2018</a></li>
                      <li><a class="dropdown-item" href="award.html">Awards - 2018</a></li>

                      <!-- <li><a class="dropdown-item" href="#">Submenu item 3 &raquo; </a>
                        <ul class="submenu dropdown-menu">
                          <li><a class="dropdown-item" href="#">Multi level 1</a></li>
                          <li><a class="dropdown-item" href="#">Multi level 2</a></li>
                      </ul>
                      </li> -->

                   </ul>
                  </li>

                </ul>
              </li>

               <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  International
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="overview.html">Overview</a></li>
                  <li><a class="dropdown-item" href="http://agri.pdn.ac.lk/centers_units/AEU/Sustainable%20Tropical%20Agricultural%20Systems%20of%20Sri%20Lanka.html" target="_blank">Study Abroad Programme for Foreign Universities </a></li>
                  <li><a class="dropdown-item" href="fore_stud.html">Current Foreign Students</a></li>
                  <li><a class="dropdown-item" href="opp_study_abroad.html">Opportunities for Study Abroad</a></li>
                  <li><a class="dropdown-item" href="info_fore_stud.html">Information for Foreign Students</a></li>
                </ul>
              </li>

               <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Students
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="student_societies.html">Agriculture Faculty Chess Club</a></li>
                </ul>
              </li>

               <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Quality
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="ffq.html">Faculty Quality Assurance Cell (FQAC) </a></li>
                  <li><a class="dropdown-item" href="frc.html">Faculty Sub Committees </a></li>
                  <li><a class="dropdown-item" href="fp.html">AHEAD Projects  </a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Engagement
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Services
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                </ul>
              </li>


            <li class="nav-item">
              <div class="input-group search_bar">
                  <input class="form-control border-end-0 border" type="search" value="search" id="example-search-input" style="height: 30px; font-size: 13px;">
                  <span class="input-group-append">
                      <button class="btn btn-outline-secondary bg-white border-start-0 border ms-n5 search_btn" type="button" style="height: 30px;">
                          <i class="fa fa-search" style="position: relative; top: -4px;"></i>
                      </button>
                  </span>
              </div>
            </li>

          </ul>
        </div>
      </div>
    </nav>
    <!-- ============================= -->
    <!-- mobile menu section -->
    <!-- ============================= -->