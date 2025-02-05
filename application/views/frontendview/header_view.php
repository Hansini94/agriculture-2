<!doctype html>
<html lang="en">
  <head>

  <?php
      if ($meta == 1) {
        $meta = get_meta('Home');
      } else if ($meta == 2) {
          $meta = get_meta('about_us');
      } else if ($meta == 3) {
        $meta = get_meta('Faculty_statistic_undergraduate');
      } else if ($meta == 4) {
        $meta = get_meta('Faculty_statistic_academic_staff');
      } else if ($meta == 5) {
        $meta = get_meta('Dean_office');
      } else if ($meta == 6) {
        $meta = get_meta('Faculty_board');
      } else if ($meta == 7) {
        $meta = get_meta('History');
      } else if ($meta == 8) {
        $meta = get_meta('Faculty_organization');
      } else if ($meta == 9) {
        $meta = get_meta('Faculty_brochure');
      } else if ($meta == 10) {
        $meta = get_meta('Undergraduate_programme');
      } else if ($meta == 11) {
        $meta = get_meta('Postgraduate_programme');
      } else if ($meta == 11) {
        $meta = get_meta('Postgraduate_programme');
      } else if ($meta == 12) {
        $meta = get_meta('International');
      } else if ($meta == 13) {
        $meta = get_meta('Quality');
      } else if ($meta == 14) {
        $meta = get_meta('Research');
      } else if ($meta == 15) {
        $meta = get_meta('Faurs');
      } else if ($meta == 16) {
        $meta = get_meta('Engagement');
      } else if ($meta == 17) {
        $meta = get_meta('Services'); 
      } else if ($meta == 18) {
        $meta = get_meta('Alumni'); 
      } else if ($meta == 19) {
        $meta = get_meta('Downloads'); 
      } else if ($meta == 20) {
        $meta = get_meta('FAQ'); 
      } else if ($meta == 21) {
        $meta = get_meta('Future_students'); 
      } else if ($meta == 22) {
        $meta = get_meta('Examination_time_tables'); 
      } else if ($meta == 23) {
        $meta = get_meta('Class_time_tables'); 
      } else if ($meta == 24) {
        $meta = get_meta('Dean_list'); 
      } else if ($meta == 25) {
        $meta = get_meta('Awards'); 
      } else if ($meta == 26) {
        $meta = get_meta('Academic_calendar'); 
      } else if ($meta == 27) {
        $meta = get_meta('Getting_around'); 
      } else if ($meta == 28) {
        $meta = get_meta('Faculty_staff'); 
      } else if ($meta == 29) {
        $meta = get_meta('Current_student'); 
      } else if ($meta == 30) {
        $meta = get_meta('Gpa_calculator'); 
      } else if ($meta == 31) {
        $meta = get_meta('Pandemic_information'); 
      } else if ($meta == 32) {
        $meta = get_meta('Rag_harassment_complaint'); 
      } else if ($meta == 33) {
        $meta = get_meta('Resources_students'); 
      } else if ($meta == 34) {
        $meta = get_meta('Search_results'); 
      } else if ($meta == 35) {
        $meta = get_meta('Special_notices'); 
      } else if ($meta == 36) {
        $meta = get_meta('Student_life'); 
      } else if ($meta == 37) {
        $meta = get_meta('Student_notices'); 
      } else if ($meta == 38) {
        $meta = get_meta('News'); 
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
  
  <!--75 logo-->
  <img src="<?php echo base_url('front_img/logo_75.png'); ?>" alt="" class="d-block w-100 logo_75">
  <!--75 logo-->

    <!-- header section -->

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top desktop_menu d-none d-lg-block" style="position: absolute; background-color: #ffffff !important;">
      <div class="container">

        <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url('assets/frontend/images/logo.png'); ?>" alt="" class="d-block w-100 top_logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse flex-grow-1 text-right" id="navbarResponsive">

          <ul class="navbar-nav ms-auto first_nav_bar">

            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('alumni'); ?>">Alumni</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Downloads
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="<?php echo base_url('downloads-staff'); ?>" style="text-align: left;">Staff Downloads</a></li>
                <li><a class="dropdown-item" href="<?php echo base_url('downloads-students'); ?>" style="text-align: left;">Students Downloads</a></li>
                <li><a class="dropdown-item" href="<?php echo base_url('downloads-faculty'); ?>" style="text-align: left;">Faculty Downloads</a></li>
                <!-- <li><a class="dropdown-item" href="#" style="text-align: left;">Faculty Downloads &raquo;</a>
                   <ul class="submenu dropdown-menu">
                    <li><a class="dropdown-item" href="" style="text-align: left;">e-Newsletter</a></li>
                    <li><a class="dropdown-item" href="" style="text-align: left;">Faurs</a></li>
                    <li><a class="dropdown-item" href="" style="text-align: left;">Hanthana Blossoms</a></li>
                 </ul>
                </li> -->
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('faq'); ?>">FAQ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('partnership'); ?>">Quick Links</a>
            </li>
            <!-- <li class="nav-item">
              <div class="input-group search_bar">
                  <input class="form-control border-end-0 border" type="search" value="search" id="example-search-input" style="height: 30px; font-size: 13px;">
                  <span class="input-group-append">
                      <button class="btn btn-outline-secondary bg-white border-start-0 border ms-n5 search_btn" type="button" style="height: 30px;">
                          <i class="fa fa-search" style="position: relative; top: -4px;"></i>
                      </button>
                  </span>
              </div>
            </li> -->

            <li class="nav-item">
              <form action="<?php echo base_url('search'); ?>" class="search-form" method="post">
                <div class="input-group search_bar">
                    <input class="form-control border-end-0 border" type="search" value="" id="example-search-input search_text" name="search_text" style="height: 30px; font-size: 13px;" placeholder="search">
                    <span class="input-group-append">
                        <button class="btn btn-outline-secondary bg-white border-start-0 border ms-n5 search_btn" type="submit" style="height: 30px;">
                            <i class="fa fa-search" style="position: relative; top: -4px;"></i>
                        </button>
                    </span>
                </div>
              </form>
            </li>
          </ul>

            <!-- ============== -->
            <div class="clearfix"></div>


          <ul class="navbar-nav ms-auto second_nav_bar">

            <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="https://www.pdn.ac.lk/" target="_blank">University </a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">  Faculty  </a>
                <ul class="dropdown-menu">

                 <li><a class="dropdown-item" href="#"> About Us &raquo; </a>
                   <ul class="submenu dropdown-menu">
                    <li><a class="dropdown-item" href="<?php echo base_url("about-us"); ?>">Mission, Vision, Dean’s Message </a></li>
                    
                    <li><a class="dropdown-item" href="#">Faculty Statistics &raquo; </a>
                        <ul class="submenu dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo base_url("faculty-statistic-undergraduate"); ?>">Undergraduates </a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url("faculty-statistic-academic-staff"); ?>">Academic Staff</a></li>
                        </ul>
                    </li>

                    <li><a class="dropdown-item" href="<?php echo base_url("dean-office"); ?>">Dean’s Office</a></li>
                    <li><a class="dropdown-item" href="<?php echo base_url("faculty-board"); ?>">Faculty Board</a></li>
                    <li><a class="dropdown-item" href="<?php echo base_url("history"); ?>">History</a></li>
                    <li><a class="dropdown-item" href="<?php echo base_url("faculty-organization"); ?>">Faculty Organization</a></li>

                    <!-- <li><a class="dropdown-item" href="fac_broucher.html">Faculty Brochures</a></li>
                    <li><a class="dropdown-item" href="map.html">Map & direction </a></li> -->

                 </ul>
                </li>

                <li><a class="dropdown-item" href="<?php echo base_url("faculty-brochure"); ?>">Brochure</a></li>
                <li><a class="dropdown-item" href="http://localhost/agriculture_local/mi/" target="_blank">Sub Campus, MI </a></li>

                <li><a class="dropdown-item" href="#"> Departments &raquo; </a>
                   <ul class="submenu dropdown-menu">
                    <li><a class="dropdown-item" href="http://localhost/agriculture_local/abo/" target="_blank">Agricultural Biology </a></li>
                    <li><a class="dropdown-item" href="http://localhost/agriculture_local/agebm/" target="_blank">Agricultural Economics & Business Management </a></li>
                    <li><a class="dropdown-item" href="http://localhost/agriculture_local/agen/" target="_blank">Agriculture Engineering </a></li>
                    <li><a class="dropdown-item" href="http://localhost/agriculture_local/aget/" target="_blank">Agriculture Extension</a></li>
                    <li><a class="dropdown-item" href="http://localhost/agriculture_local/ansc/" target="_blank">Animal Science </a></li>
                    <li><a class="dropdown-item" href="http://localhost/agriculture_local/crsc/" target="_blank">Crop Science  </a></li>
                    <li><a class="dropdown-item" href="http://localhost/agriculture_local/fods/" target="_blank">Food Science & Technology </a></li>
                    <li><a class="dropdown-item" href="http://localhost/agriculture_local/sosc/" target="_blank">Soil Science  </a></li>
                 </ul>
                </li>

                <li><a class="dropdown-item" href="#"> Centers and Units &raquo;</a>
                   <ul class="submenu dropdown-menu">
                    <li><a class="dropdown-item" href="http://localhost/agriculture_local/abc/" target="_blank">Agribusiness Centre (AbC)  </a></li>
                    <li><a class="dropdown-item" href="http://localhost/agriculture_local/agbc/" target="_blank">Agricultural Biotechnology Centre </a></li>
                    <li><a class="dropdown-item" href="http://localhost/agriculture_local/aeu/" target="_blank">Agriculture Education Unit (AEU)</a></li>
                    <li><a class="dropdown-item" href="http://localhost/agriculture_local/eltu/" target="_blank">English Language Teaching Unit (ELTU) </a></li>
                    <li><a class="dropdown-item" href="http://localhost/agriculture_local/ccgu/" target="_blank">Counselling and Career Guidance Unit </a></li>
                    <li><a class="dropdown-item" href="http://localhost/agriculture_local/cdu/" target="_blank">Community Development Unit </a></li>
                    <li><a class="dropdown-item" href="http://localhost/agriculture_local/gewiu/" target="_blank">Gender Education and Women's Initiative Unit (GEWIU)</a></li>
                    <li><a class="dropdown-item" href="http://localhost/agriculture_local/iqac/" target="_blank">Internal Quality Assurance Unit (IQAC)</a></li>
                 </ul>
                </li>

                <li><a class="dropdown-item" href="#">Teaching/ Students Research Farms &raquo;</a>
                   <ul class="submenu dropdown-menu">
                    <li><a class="dropdown-item" href="http://localhost/agriculture_local/uesd/" target="_blank">University Experimental Station, Dodangolla </a></li>
                    <li><a class="dropdown-item" href="http://localhost/agriculture_local/lsfu/" target="_blank">Livestock Farm, Udaperadeniya </a></li>
                    <!--<li><a class="dropdown-item" href="http://localhost/agriculture_local/agri_meewathura_farm/" target="_blank">Meewathura Farm, Peradeniya </a></li>-->
                 </ul>
                </li>

                 <li><a class="dropdown-item" href="http://www.lib.pdn.ac.lk/branches/agri" target="_blank">Agriculture Library </a></li>

                 <!--  <li><a class="dropdown-item" href="#">Downloads &raquo;</a>
                   <ul class="submenu dropdown-menu">
                    <li><a class="dropdown-item" href="">e-Newsletter</a></li>
                    <li><a class="dropdown-item" href="">Faurs</a></li>
                    <li><a class="dropdown-item" href="">Hanthana Blossoms</a></li>
                 </ul>
                </li> -->

                </ul>
            </li>

            <!-- 
             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                University
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
              </ul>
            </li> -->

             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Academics
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="<?php echo base_url("undergraduate-programme"); ?>">Undergraduate Programs </a></li>
                <li><a class="dropdown-item" href="<?php echo base_url("postgraduate-programme"); ?>">Postgraduate Programme </a></li>
              </ul>
            </li>

             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Research
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="<?php echo base_url().'research/faculty-research-committee'; ?>">Faculty Research Committee </a></li>
                <li><a class="dropdown-item" href="<?php echo base_url().'research/ethical-clearance-committee'; ?>">Ethical Review Committee</a></li>
                <li><a class="dropdown-item" href="<?php echo base_url().'research-stories'; ?>">Research Stories</a></li>
                <li><a class="dropdown-item" href="<?php echo base_url().'excellence-award'; ?>">Awards</a></li>
                <li><a class="dropdown-item" href="<?php echo base_url('faurs'); ?>">FAuRS</a></li>

                <!-- <li><a class="dropdown-item" href="#"> Awards &raquo; </a>
                   <ul class="submenu dropdown-menu">
                    <li><a class="dropdown-item" href="cvcd_award.html">CVCD Excellence Award </a></li>
                    <li><a class="dropdown-item" href="presi_award.html">Presidents’ Award</a></li>
                    <li><a class="dropdown-item" href="calling_application.html">Calling Application – 2018</a></li>
                    <li><a class="dropdown-item" href="award.html">Awards - 2018</a></li>
                 </ul>
                </li> -->

              </ul>
            </li>

             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                International
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="<?php echo base_url().'international-overview'; ?>">Overview</a></li>
                <li><a class="dropdown-item" href="http://localhost/agriculture_local/aeu/" target="_blank">Study Abroad Programme for Foreign Universities </a></li>
                <li><a class="dropdown-item" href="<?php echo base_url().'international/current-foreign-students'; ?>">Current Foreign Students</a></li>
                <li><a class="dropdown-item" href="<?php echo base_url().'international/opportunities-study-abroad'; ?>">Opportunities for Study Abroad</a></li>
                <li><a class="dropdown-item" href="<?php echo base_url().'international/info-for-foreign-students'; ?>">Information for Foreign Students</a></li>
              </ul>
            </li>

             <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Students
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="student_societies.html">Agriculture Faculty Chess Club</a></li>
              </ul>
            </li> -->

             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Quality
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="<?php echo base_url().'quality/functions-of-foaqac'; ?>">Faculty Quality Assurance Cell (FQAC) </a></li>
                <li><a class="dropdown-item" href="<?php echo base_url().'quality/frc'; ?>">Faculty Sub Committees </a></li>
                <li><a class="dropdown-item" href="<?php echo base_url().'quality/ahead-project'; ?>">AHEAD Projects  </a></li>

                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">

                  <li><a class="dropdown-item" href="#"> Downloads &raquo; </a>
                     <ul class="submenu dropdown-menu">
                      <?php
                        $quality_downloads = get_quality_downloads();
                        foreach($quality_downloads as $download) {
                      ?>
                      <li><a class="dropdown-item" href="<?php echo base_url('front_img/').$download->fPdf; ?>" target="_blank"><?php echo $download->vHeading; ?> </a></li>
                      <?php } ?>
                   </ul>
                  </li>
                </ul>

                <li><a class="dropdown-item" href="#">Downloads  &raquo; </a>
                   <ul class="submenu dropdown-menu desktop_menu_engage_sub_menu">
                    <?php
                      $quality_downloads = get_quality_downloads();
                      foreach($quality_downloads as $download) {
                    ?>
                    <li><a class="dropdown-item" href="<?php echo base_url('front_img/').$download->fPdf; ?>" target="_blank"><?php echo $download->vHeading; ?> </a></li>
                    <?php } ?>
                 </ul>
                </li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Engagement
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="<?php echo base_url('engagement-overview'); ?>">Overview</a></li>
                <li><a class="dropdown-item" href="<?php echo base_url('partnership'); ?>">Partnerships</a></li>

                <li><a class="dropdown-item" href="#">Engagements &raquo; </a>
                   <ul class="submenu dropdown-menu desktop_menu_engage_sub_menu">
                    <li><a class="dropdown-item" href="<?php echo base_url('research-engagements'); ?>">Research Engagements</a></li>
                    <li><a class="dropdown-item" href="<?php echo base_url('student-engagements'); ?>">Student Engagements</a></li>
                    <li><a class="dropdown-item" href="<?php echo base_url('community-engagements'); ?>">Community Engagements</a></li>
                 </ul>
                </li>

              </ul>


            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Services
              </a>
              <ul class="dropdown-menu desktop_menu_services_dropdown" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="<?php echo base_url('services/transcript-request'); ?>">Transcript Request (For students)</a></li>
                <li><a class="dropdown-item" href="<?php echo base_url('services/outreach-centers'); ?>">Outreach Centres</a></li>
                <li><a class="dropdown-item" href="<?php echo base_url('services/analytical-services'); ?>">Analytical Services</a></li>
                <li><a class="dropdown-item" href="<?php echo base_url('services/research-experimental-facilities'); ?>">Research & Experimental Facilities</a></li>

              </ul>
            </li>


          </ul>
        </div>
      </div>
    </nav>



    <!-- ============================= -->
    <!-- mobile menu section -->
    <!-- ============================= -->
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top d-lg-none d-xl-none d-xxl-none" id="main_mobile_navbar" style="position: absolute; background-color: #ffffff !important;">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url('assets/frontend/images/logo.png'); ?>" alt="" class="d-block w-100 top_logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo base_url(); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="https://www.pdn.ac.lk/" target="_blank">University</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo base_url('alumni'); ?>">Alumni</a>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">&nbsp;Downloads&nbsp;</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo base_url('downloads-staff'); ?>">Staff Downloads</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('downloads-students'); ?>">Students Downloads</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('downloads-faculty'); ?>">Faculty Downloads</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo base_url('faq'); ?>">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo base_url('partnership'); ?>">Quick Links</a>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">&nbsp;Faculty&nbsp;</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">&nbsp;About Us&nbsp;</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?php echo base_url("about-us"); ?>">Mission, Vision, Dean’s Message</a></li>
                                    <li class="nav-item dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">&nbsp;Faculty Statistics&nbsp;</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="<?php echo base_url("faculty-statistic-undergraduate"); ?>">Undergraduates</a></li>
                                            <li><a class="dropdown-item" href="<?php echo base_url("faculty-statistic-academic-staff"); ?>">Academic Staff</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="<?php echo base_url("dean-office"); ?>">Dean’s Office</a></li>
                                    <li><a class="dropdown-item" href="<?php echo base_url("faculty-board"); ?>">Faculty Board</a></li>
                                    <li><a class="dropdown-item" href="<?php echo base_url("history"); ?>">History</a></li>
                                    <li><a class="dropdown-item" href="<?php echo base_url("faculty-organization"); ?>">Faculty Organization</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="<?php echo base_url("faculty-brochure"); ?>">Brochure</a></li>
                            <li><a class="dropdown-item" href="http://localhost/agriculture_local/mi/" target="_blank">Sub Campus, MI</a></li>
                            <li class="nav-item dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">&nbsp;Departments&nbsp;</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="http://localhost/agriculture_local/abo/" target="_blank">Agricultural Biology </a></li>
                                    <li><a class="dropdown-item" href="http://localhost/agriculture_local/agebm/" target="_blank">Agricultural Economics & Business Management </a></li>
                                    <li><a class="dropdown-item" href="http://localhost/agriculture_local/agen/" target="_blank">Agriculture Engineering </a></li>
                                    <li><a class="dropdown-item" href="http://localhost/agriculture_local/aget/" target="_blank">Agriculture Extension</a></li>
                                    <li><a class="dropdown-item" href="http://localhost/agriculture_local/ansc/" target="_blank">Animal Science </a></li>
                                    <li><a class="dropdown-item" href="http://localhost/agriculture_local/crsc/" target="_blank">Crop Science  </a></li>
                                    <li><a class="dropdown-item" href="http://localhost/agriculture_local/fods/" target="_blank">Food Science & Technology </a></li>
                                    <li><a class="dropdown-item" href="http://localhost/agriculture_local/sosc/" target="_blank">Soil Science  </a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">&nbsp;Centers and Units&nbsp;</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="http://localhost/agriculture_local/abc/" target="_blank">Agribusiness Centre (AbC)  </a></li>
                                    <li><a class="dropdown-item" href="http://localhost/agriculture_local/agbc/" target="_blank">Agricultural Biotechnology Centre </a></li>
                                    <li><a class="dropdown-item" href="http://localhost/agriculture_local/aeu/" target="_blank">Agriculture Education Unit (AEU)</a></li>
                                    <li><a class="dropdown-item" href="http://localhost/agriculture_local/eltu/" target="_blank">English Language Teaching Unit (ELTU) </a></li>
                                    <li><a class="dropdown-item" href="http://localhost/agriculture_local/ccgu/" target="_blank">Counselling and Career Guidance Unit </a></li>
                                    <li><a class="dropdown-item" href="http://localhost/agriculture_local/cdu/" target="_blank">Community Development Unit </a></li>
                                    <li><a class="dropdown-item" href="http://localhost/agriculture_local/gewiu/" target="_blank">Gender Education and Women's Initiative Unit (GEWIU)</a></li>
                                    <li><a class="dropdown-item" href="http://localhost/agriculture_local/iqac/" target="_blank">Internal Quality Assurance Unit (IQAC)</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">&nbsp;Teaching/ Students Research Farms&nbsp;</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="http://localhost/agriculture_local/uesd/" target="_blank">University Experimental Station, Dodangolla </a></li>
                                    <li><a class="dropdown-item" href="http://localhost/agriculture_local/lsfu/" target="_blank">Livestock Farm, Udaperadeniya </a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="http://www.lib.pdn.ac.lk/branches/agri" target="_blank">Agriculture Library</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">&nbsp;Academics&nbsp;</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo base_url('undergraduate-programme'); ?>">Undergraduate Programs</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('postgraduate-programme'); ?>">Postgraduate Programme</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">&nbsp;Research&nbsp;</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo base_url().'research/faculty-research-committee'; ?>">Faculty Research Committee </a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url().'research/ethical-clearance-committee'; ?>">Ethical Review Committee</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url().'research-stories'; ?>">Research Stories</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url().'excellence-award'; ?>">FAuRS</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">&nbsp;International&nbsp;</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo base_url().'international-overview'; ?>">Overview</a></li>
                            <li><a class="dropdown-item" href="http://localhost/agriculture_local/aeu/" target="_blank">Study Abroad Programme for Foreign Universities </a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url().'international/current-foreign-students'; ?>">Current Foreign Students</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url().'international/opportunities-study-abroad'; ?>">Opportunities for Study Abroad</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url().'international/info-for-foreign-students'; ?>">Information for Foreign Students</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">&nbsp;Quality&nbsp;</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo base_url().'quality/functions-of-foaqac'; ?>">Faculty Quality Assurance Cell (FQAC) </a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url().'quality/frc'; ?>">Faculty Sub Committees </a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url().'quality/ahead-project'; ?>">AHEAD Projects  </a></li>
                            <li class="nav-item dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">&nbsp;Downloads&nbsp;</a>
                                <ul class="dropdown-menu">
                                    <?php
                                        $quality_downloads = get_quality_downloads();
                                        foreach($quality_downloads as $download) {
                                    ?>
                                        <li><a class="dropdown-item" href="<?php echo base_url('/').$download->fPdf; ?>" target="_blank"><?php echo $download->vHeading; ?> </a></li>
                                    <?php } ?>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">&nbsp;Engagement&nbsp;</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo base_url('engagement-overview'); ?>">Overview</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('partnership'); ?>">Partnerships</a></li>
                            <li class="nav-item dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">&nbsp;Downloads&nbsp;</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?php echo base_url('research-engagements'); ?>">Research Engagements</a></li>
                                    <li><a class="dropdown-item" href="<?php echo base_url('student-engagements'); ?>">Student Engagements</a></li>
                                    <li><a class="dropdown-item" href="<?php echo base_url('community-engagements'); ?>">Community Engagements</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">&nbsp;Services&nbsp;</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo base_url('services/transcript-request'); ?>">Transcript Request (For students)</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('services/outreach-centers'); ?>">Outreach Centres</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('services/analytical-services'); ?>">Analytical Services</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('services/research-experimental-facilities'); ?>">Research & Experimental Facilities</a></li>
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
    
    
<!--    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top d-lg-none d-xl-none d-xxl-none" style="position: absolute; background-color: #ffffff !important;">-->
<!--      <div class="container">-->

<!--        <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url('assets/frontend/images/logo.png'); ?>" alt="" class="d-block w-100 top_logo"></a>-->
<!--        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">-->
<!--          <span class="navbar-toggler-icon"></span>-->
<!--        </button>-->

<!--        <div class="collapse navbar-collapse flex-grow-1 text-right" id="navbarResponsive">-->


<!--          <ul class="navbar-nav ms-auto first_nav_bar">-->

<!--           <li class="nav-item">-->
<!--              <a class="nav-link" href="<?php echo base_url('alumni'); ?>">Alumni</a>-->
<!--            </li>-->
<!--            <li class="nav-item dropdown">-->
<!--              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">-->
<!--                Downloads-->
<!--              </a>-->
<!--              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">-->
<!--                <li><a class="dropdown-item" href="<?php echo base_url('downloads-staff'); ?>" style="text-align: left;">Staff Downloads</a></li>-->
<!--                <li><a class="dropdown-item" href="<?php echo base_url('downloads-students'); ?>" style="text-align: left;">Students Downloads</a></li>-->
<!--                 <li><a class="dropdown-item" href="<?php echo base_url('downloads-faculty'); ?>" style="text-align: left;">Faculty Downloads</a></li>-->
                <!-- <li><a class="dropdown-item" href="#">Faculty Downloads &raquo;</a>
<!--                   <ul class="submenu dropdown-menu">-->
<!--                    <li><a class="dropdown-item" href="">e-Newsletter</a></li>-->
<!--                    <li><a class="dropdown-item" href="">Faurs</a></li>-->
<!--                    <li><a class="dropdown-item" href="">Hanthana Blossoms</a></li>-->
<!--                 </ul>-->
<!--                </li> -->-->
<!--              </ul>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--              <a class="nav-link" href="<?php echo base_url('faq'); ?>">FAQ</a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--              <a class="nav-link" href="<?php echo base_url('partnership'); ?>">Quick Links</a>-->
<!--            </li>-->

<!--          </ul>-->

            <!-- ============== -->
<!--            <div class="clearfix"></div>-->


<!--          <ul class="navbar-nav ms-auto second_nav_bar">-->

<!--            <li class="nav-item active">-->
<!--              <a class="nav-link" href="<?php echo base_url(); ?>">Home</a>-->
<!--            </li>-->

<!--            <li class="nav-item">-->
<!--              <a class="nav-link" href="https://www.pdn.ac.lk/" target="_blank">University </a>-->
<!--            </li>-->

<!--            <li class="nav-item dropdown">-->
<!--                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">  Faculty  </a>-->
<!--                <ul class="dropdown-menu">-->
<!--                    <li>-->
<!--                        <a class="dropdown-item" href="#" data-bs-toggle="dropdown"> About Us &raquo; </a>-->
<!--                        <ul class="submenu dropdown-menu">-->
<!--                            <li><a class="dropdown-item" href="<?php echo base_url("about-us"); ?>">Mission, Vision, Dean’s Message </a></li>-->
<!--                            <li><a class="dropdown-item" href="#">Faculty Statistics &raquo; </a>-->
<!--                                 <ul class="submenu dropdown-menu">-->
<!--                                    <li><a class="dropdown-item" href="<?php echo base_url("faculty-statistic-undergraduate"); ?>">Undergraduates </a></li>-->
<!--                                    <li><a class="dropdown-item" href="<?php echo base_url("faculty-statistic-academic-staff"); ?>">Academic Staff</a></li>-->
<!--                                </ul>-->
<!--                            </li>-->

<!--                            <li><a class="dropdown-item" href="<?php echo base_url("dean-office"); ?>">Dean’s Office</a></li>-->
<!--                            <li><a class="dropdown-item" href="<?php echo base_url("faculty-board"); ?>">Faculty Board</a></li>-->
<!--                            <li><a class="dropdown-item" href="<?php echo base_url("history"); ?>">History</a></li>-->
<!--                            <li><a class="dropdown-item" href="<?php echo base_url("faculty-organization"); ?>">Faculty Organization</a></li>-->

                            <!-- <li><a class="dropdown-item" href="fac_broucher.html">Faculty Brochures</a></li>
<!--                            <li><a class="dropdown-item" href="map.html">Map & direction </a></li> -->-->
<!--                        </ul>-->
<!--                    </li>-->

<!--                    <li><a class="dropdown-item" href="<?php echo base_url("faculty-brochure"); ?>">Brochure</a></li>-->
<!--                    <li><a class="dropdown-item" href="http://localhost/agriculture_local/mi/" target="_blank">Sub Campus, MI </a></li>-->

<!--                    <li><a class="dropdown-item" href="#"> Departments &raquo; </a>-->
<!--                        <ul class="submenu dropdown-menu">-->
<!--                            <li><a class="dropdown-item" href="http://localhost/agriculture_local/abo/" target="_blank">Agricultural Biology </a></li>-->
<!--                            <li><a class="dropdown-item" href="http://localhost/agriculture_local/agebm/" target="_blank">Agricultural Economics & Business Management </a></li>-->
<!--                            <li><a class="dropdown-item" href="http://localhost/agriculture_local/agen/" target="_blank">Agriculture Engineering </a></li>-->
<!--                            <li><a class="dropdown-item" href="http://localhost/agriculture_local/aget/" target="_blank">Agriculture Extension</a></li>-->
<!--                            <li><a class="dropdown-item" href="http://localhost/agriculture_local/ansc/" target="_blank">Animal Science </a></li>-->
<!--                            <li><a class="dropdown-item" href="http://localhost/agriculture_local/crsc/" target="_blank">Crop Science  </a></li>-->
<!--                            <li><a class="dropdown-item" href="http://localhost/agriculture_local/fods/" target="_blank">Food Science & Technology </a></li>-->
<!--                            <li><a class="dropdown-item" href="http://localhost/agriculture_local/sosc/" target="_blank">Soil Science  </a></li>-->
<!--                        </ul>-->
<!--                    </li>-->

<!--                    <li><a class="dropdown-item" href="#"> Centers and Units &raquo;</a>-->
<!--                        <ul class="submenu dropdown-menu">-->
<!--                            <li><a class="dropdown-item" href="http://localhost/agriculture_local/abc/" target="_blank">Agribusiness Centre (AbC)  </a></li>-->
<!--                            <li><a class="dropdown-item" href="http://localhost/agriculture_local/agbc/" target="_blank">Agricultural Biotechnology Centre </a></li>-->
<!--                            <li><a class="dropdown-item" href="http://localhost/agriculture_local/aeu/" target="_blank">Agriculture Education Unit (AEU)</a></li>-->
<!--                            <li><a class="dropdown-item" href="http://localhost/agriculture_local/eltu/" target="_blank">English Language Teaching Unit (ELTU) </a></li>-->
<!--                            <li><a class="dropdown-item" href="http://localhost/agriculture_local/ccgu/" target="_blank">Counselling and Career Guidance Unit </a></li>-->
<!--                            <li><a class="dropdown-item" href="http://localhost/agriculture_local/cdu/" target="_blank">Community Development Unit </a></li>-->
<!--                            <li><a class="dropdown-item" href="http://localhost/agriculture_local/gewiu/" target="_blank">Gender Education and Women's Initiative Unit (GEWIU)</a></li>-->
<!--                            <li><a class="dropdown-item" href="http://localhost/agriculture_local/iqac/" target="_blank">Internal Quality Assurance Unit (IQAC)</a></li>-->
<!--                        </ul>-->
<!--                    </li>-->

<!--                    <li><a class="dropdown-item" href="#">Teaching/ Students Research Farms &raquo;</a>-->
<!--                        <ul class="submenu dropdown-menu">-->
<!--                            <li><a class="dropdown-item" href="http://localhost/agriculture_local/uesd/" target="_blank">University Experimental Station, Dodangolla </a></li>-->
<!--                            <li><a class="dropdown-item" href="http://localhost/agriculture_local/lsfu/" target="_blank">Livestock Farm, Udaperadeniya </a></li>-->
                            <!--<li><a class="dropdown-item" href="http://localhost/agriculture_local/agri_meewathura_farm/" target="_blank">Meewathura Farm, Peradeniya </a></li>-->
<!--                        </ul>-->
<!--                    </li>-->

<!--                    <li><a class="dropdown-item" href="http://www.lib.pdn.ac.lk/branches/agri" target="_blank">Agriculture Library </a></li>-->

                      <!-- <li><a class="dropdown-item" href="#">Downloads &raquo;</a>
<!--                       <ul class="submenu dropdown-menu">-->
<!--                        <li><a class="dropdown-item" href="">e-Newsletter</a></li>-->
<!--                        <li><a class="dropdown-item" href="">Faurs</a></li>-->
<!--                        <li><a class="dropdown-item" href="">Hanthana Blossoms</a></li>-->
<!--                     </ul>-->
<!--                    </li> -->-->

<!--                </ul>-->
<!--            </li>-->

<!-- 
<!--             <li class="nav-item dropdown">-->
<!--              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">-->
<!--                University-->
<!--              </a>-->
<!--              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">-->
<!--                <li><a class="dropdown-item" href="#">Action</a></li>-->
<!--                <li><a class="dropdown-item" href="#">Another action</a></li>-->
<!--              </ul>-->
<!--            </li> -->-->

<!--             <li class="nav-item dropdown">-->
<!--              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">-->
<!--                Academics-->
<!--              </a>-->
<!--              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">-->
<!--                <li><a class="dropdown-item" href="<?php echo base_url("undergraduate-programme"); ?>">Undergraduate Programs </a></li>-->
<!--                <li><a class="dropdown-item" href="<?php echo base_url("postgraduate-programme"); ?>" >Postgraduate Programme </a></li>-->
<!--              </ul>-->
<!--            </li>-->

<!--             <li class="nav-item dropdown">-->
<!--              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">-->
<!--                Research-->
<!--              </a>-->
<!--              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">-->
<!--                <li><a class="dropdown-item" href="<?php echo base_url().'research/faculty-research-committee'; ?>">Faculty Research Committee </a></li>-->
<!--                <li><a class="dropdown-item" href="<?php echo base_url().'research/ethical-clearance-committee'; ?>">Ethical Review Committee</a></li>-->
<!--                <li><a class="dropdown-item" href="<?php echo base_url().'research-stories'; ?>">Research Stories</a></li>-->
<!--                <li><a class="dropdown-item" href="<?php echo base_url().'excellence-award'; ?>">FAuRS</a></li>-->

                <!-- <li><a class="dropdown-item" href="#"> Awards &raquo; </a>
<!--                   <ul class="submenu dropdown-menu">-->
<!--                    <li><a class="dropdown-item" href="cvcd_award.html">CVCD Excellence Award </a></li>-->
<!--                    <li><a class="dropdown-item" href="presi_award.html">Presidents’ Award</a></li>-->
<!--                    <li><a class="dropdown-item" href="calling_application.html">Calling Application – 2018</a></li>-->
<!--                    <li><a class="dropdown-item" href="award.html">Awards - 2018</a></li>-->
<!--                 </ul>-->
<!--                </li> -->-->

<!--              </ul>-->
<!--            </li>-->

<!--             <li class="nav-item dropdown">-->
<!--              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">-->
<!--                International-->
<!--              </a>-->
<!--              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">-->
<!--              <li><a class="dropdown-item" href="<?php echo base_url().'international-overview'; ?>">Overview</a></li>-->
<!--                <li><a class="dropdown-item" href="http://localhost/agriculture_local/aeu/" target="_blank">Study Abroad Programme for Foreign Universities </a></li>-->
<!--                <li><a class="dropdown-item" href="<?php echo base_url().'international/current-foreign-students'; ?>">Current Foreign Students</a></li>-->
<!--                <li><a class="dropdown-item" href="<?php echo base_url().'international/opportunities-study-abroad'; ?>">Opportunities for Study Abroad</a></li>-->
<!--                <li><a class="dropdown-item" href="<?php echo base_url().'international/info-for-foreign-students'; ?>">Information for Foreign Students</a></li>-->
<!--              </ul>-->
<!--            </li>-->

             <!-- <li class="nav-item dropdown">
<!--              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">-->
<!--                Students-->
<!--              </a>-->
<!--              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">-->
<!--                <li><a class="dropdown-item" href="student_societies.html">Agriculture Faculty Chess Club</a></li>-->
<!--              </ul>-->
<!--            </li> -->-->

<!--             <li class="nav-item dropdown">-->
<!--              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">-->
<!--                Quality-->
<!--              </a>-->
<!--              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">-->
<!--              <li><a class="dropdown-item" href="<?php echo base_url().'quality/functions-of-foaqac'; ?>">Faculty Quality Assurance Cell (FQAC) </a></li>-->
<!--                <li><a class="dropdown-item" href="<?php echo base_url().'quality/frc'; ?>">Faculty Sub Committees </a></li>-->
<!--                <li><a class="dropdown-item" href="<?php echo base_url().'quality/ahead-project'; ?>">AHEAD Projects  </a></li>-->

<!--                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">-->

<!--                  <li><a class="dropdown-item" href="#"> Downloads &raquo; </a>-->
<!--                    <ul class="submenu dropdown-menu">-->
                      <?php
                        // $quality_downloads = get_quality_downloads();
                        // foreach($quality_downloads as $download) {
                      ?>
                      <!--<li><a class="dropdown-item" href="<?php echo base_url('/').$download->fPdf; ?>" target="_blank"><?php echo $download->vHeading; ?> </a></li>-->
                      <?php 
                    //   } 
                      ?>
    <!--               </ul>-->
    <!--              </li>-->
    <!--            </ul>-->

    <!--          </ul>-->
    <!--        </li>-->

    <!--        <li class="nav-item dropdown">-->
    <!--          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">-->
    <!--            Engagement-->
    <!--          </a>-->
    <!--          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">-->
    <!--            <li><a class="dropdown-item" href="<?php echo base_url('engagement-overview'); ?>">Overview</a></li>-->
    <!--            <li><a class="dropdown-item" href="<?php echo base_url('partnership'); ?>">Partnerships</a></li>-->

    <!--            <li><a class="dropdown-item" href="#">Engagements &raquo; </a>-->
    <!--               <ul class="submenu dropdown-menu">-->
    <!--                <li><a class="dropdown-item" href="<?php echo base_url('research-engagements'); ?>">Research Engagements</a></li>-->
    <!--                <li><a class="dropdown-item" href="<?php echo base_url('student-engagements'); ?>">Student Engagements</a></li>-->
    <!--                <li><a class="dropdown-item" href="<?php echo base_url('community-engagements'); ?>">Community Engagements</a></li>-->
    <!--             </ul>-->
    <!--            </li>-->

    <!--          </ul>-->

    <!--        </li>-->

    <!--        <li class="nav-item dropdown">-->
    <!--          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">-->
    <!--            Services-->
    <!--          </a>-->
    <!--          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">-->
    <!--            <li><a class="dropdown-item" href="<?php echo base_url('services/transcript-request'); ?>">Transcript Request (For students)</a></li>-->
    <!--            <li><a class="dropdown-item" href="<?php echo base_url('services/outreach-centers'); ?>">Outreach Centres</a></li>-->
    <!--            <li><a class="dropdown-item" href="<?php echo base_url('services/analytical-services'); ?>">Analytical Services</a></li>-->
    <!--            <li><a class="dropdown-item" href="<?php echo base_url('services/research-experimental-facilities'); ?>">Research & Experimental Facilities</a></li>-->
    <!--          </ul>-->
    <!--        </li>-->

    <!--        <li class="nav-item">-->
    <!--          <div class="input-group search_bar">-->
    <!--              <input class="form-control border-end-0 border" type="search" value="search" id="example-search-input" style="height: 30px; font-size: 13px;">-->
    <!--              <span class="input-group-append">-->
    <!--                  <button class="btn btn-outline-secondary bg-white border-start-0 border ms-n5 search_btn" type="button" style="height: 30px;">-->
    <!--                      <i class="fa fa-search" style="position: relative; top: -4px;"></i>-->
    <!--                  </button>-->
    <!--              </span>-->
    <!--          </div>-->
    <!--        </li>-->

    <!--      </ul>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</nav>-->
    <!-- ============================= -->
    <!-- mobile menu section -->
    <!-- ============================= -->

    <header>
      <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <?php 
            // $mobileSliders = get_mobile_sliders();
            // $numRecords = count($mobileSliders);
            //     $count = 0;
            //     for($i=0;$i<$numRecords;$i++){
            ?>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $i; ?>" class="<?php if($i == 0){echo 'active';}?>" aria-current="true" aria-label="Slide <?php echo $i+1; ?>"></button>
          <?php 
        //   } 
          ?>
          <!--<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>-->
          <!--<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>-->
          <!--<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>-->
        </div> 
        <div class="carousel-inner">
          <?php
            $mainSliders = get_main_sliders();
            $count = 0;
            foreach($mainSliders as $slider) {

          ?>
          <div class="carousel-item <?php if($count == 0) { echo "active"; } ?>" style="background-image: url('<?php echo base_url("front_img/").$slider->fImage; ?>')">
            <div class="container carousel-caption">
              <div class="row">
                <!--<div class="col-xxl-6 offset-xxl-6 col-xl-6 offset-xl-6 col-lg-6 offset-lg-6 col-md-6 offset-md-6 col-sm-12 carousel_caption_col angled-bottom-left">-->
                  <!--<h5><?php echo $slider->vTitle; ?></h5>-->
                  <!--<p><?php echo $slider->vCaption; ?></p>-->
                <!--</div>-->
              </div>
            </div>
          </div>
          <?php $count++; } ?>
        </div>
         <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </header>

    <!-- header section -->

    <!--=============================================-->
  <!--===================header====================-->


  <!--=============================================-->
  <!--===================body====================-->


    <!-- mobile slider section -->
    <div class="container-fluid no_padding d-none">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <?php 
            $mobileSliders = get_mobile_sliders();
            $numRecords = count($mobileSliders);
                $count = 0;
                for($i=0;$i<$numRecords;$i++){
            ?>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $i; ?>" class="<?php if($i == 0){echo 'active';}?>" aria-current="true" aria-label="Slide <?php echo $i+1; ?>"></button>
          <?php } ?>
          <!--<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>-->
          <!--<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>-->
        </div>
        <div class="carousel-inner">
          <?php
            $mobileSliders = get_mobile_sliders();
            $count = 0;
            foreach($mobileSliders as $mobSlider) {

          ?>
          <div class="carousel-item <?php if($count==0) { echo "active"; } ?>">
            <img src="<?php echo base_url("front_img/").$mobSlider->fImage; ?>" class="d-block w-100" alt="...">
          </div>
          <?php $count++; } ?>
        </div>
        <!--<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">-->
        <!--  <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
        <!--  <span class="visually-hidden">Previous</span>-->
        <!--</button>-->
        <!--<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">-->
        <!--  <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
        <!--  <span class="visually-hidden">Next</span>-->
        <!--</button>-->
      </div>
    </div>
    <!-- mobile slider section -->