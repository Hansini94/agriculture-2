<!doctype html>
<html lang="en">
  <head>
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

        <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url('assets/frontend/images/logo.png'); ?>" alt="" class="d-block w-100 top_logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse flex-grow-1 text-right" id="navbarResponsive">

          <ul class="navbar-nav ms-auto first_nav_bar">

            <li class="nav-item">
              <a class="nav-link" href="http://173.231.230.98/~tgcss/vibudha/agri_css/sub_site_css/alumni.html">Alumni</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Downloads
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="staff_down.html" style="text-align: left;">Staff Downloads</a></li>
                <li><a class="dropdown-item" href="stud_down.html" style="text-align: left;">Students Downloads</a></li>
                <li><a class="dropdown-item" href="fac_down.html" style="text-align: left;">Faculty Downloads</a></li>
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
              <a class="nav-link" href="faq.html">FAQ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="engage_partner.html">Quick Links</a>
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
                    <li class="<?php echo activate_menu('about_us'); ?>"><a class="dropdown-item" href="<?php echo base_url("about-us"); ?>">Mission, Vision, Dean’s Message </a></li>
                    
                    <li><a class="dropdown-item" href="#">Faculty Statistics &raquo; </a>
                      <ul class="submenu dropdown-menu">
                        <li class="<?php echo activate_menu('Faculty_statistic_undergraduate'); ?>"><a class="dropdown-item" href="<?php echo base_url("faculty-statistic-undergraduate"); ?>">Undergraduates </a></li>
                        <li class="<?php echo activate_menu('Faculty_statistic_academic_staff'); ?>"><a class="dropdown-item" href="<?php echo base_url("faculty-statistic-academic-staff"); ?>">Academic Staff</a></li>
                    </ul>
                    </li>

                    <li class="<?php echo activate_menu('Dean_office'); ?>"><a class="dropdown-item" href="<?php echo base_url("dean-office"); ?>">Dean’s Office</a></li>
                    <li class="<?php echo activate_menu('Faculty_board'); ?>"><a class="dropdown-item" href="<?php echo base_url("faculty-board"); ?>">Faculty Board</a></li>
                    <li class="<?php echo activate_menu('History'); ?>"><a class="dropdown-item" href="<?php echo base_url("history"); ?>">History</a></li>
                    <li class="<?php echo activate_menu('Faculty_organization'); ?>"><a class="dropdown-item" href="<?php echo base_url("faculty-organization"); ?>">Faculty Organization</a></li>

                    <!-- <li><a class="dropdown-item" href="fac_broucher.html">Faculty Brochures</a></li>
                    <li><a class="dropdown-item" href="map.html">Map & direction </a></li> -->

                 </ul>
                </li>

                <li class="<?php echo activate_menu('Faculty_brochure'); ?>"><a class="dropdown-item" href="<?php echo base_url("faculty-brochure"); ?>">Brochure</a></li>
                <li><a class="dropdown-item" href="http://agri.pdn.ac.lk/MI/" target="_blank">Sub Campus, MI </a></li>

                <li><a class="dropdown-item" href="#"> Departments &raquo; </a>
                   <ul class="submenu dropdown-menu">
                    <li><a class="dropdown-item" href="http://agri.pdn.ac.lk/abo/" target="_blank">Agricultural Biology </a></li>
                    <li><a class="dropdown-item" href="http://agri.pdn.ac.lk/agebm/" target="_blank">Agricultural Economics & Business Management </a></li>
                    <li><a class="dropdown-item" href="http://agri.pdn.ac.lk/agen/" target="_blank">Agriculture Engineering </a></li>
                    <li><a class="dropdown-item" href="http://agri.pdn.ac.lk/aget/" target="_blank">Agriculture Extension</a></li>
                    <li><a class="dropdown-item" href="http://agri.pdn.ac.lk/ansc/" target="_blank">Animal Science </a></li>
                    <li><a class="dropdown-item" href="fhttp://agri.pdn.ac.lk/crsc/" target="_blank">Crop Science  </a></li>
                    <li><a class="dropdown-item" href="http://agri.pdn.ac.lk/fods/" target="_blank">Food Science & Technology </a></li>
                    <li><a class="dropdown-item" href="http://agri.pdn.ac.lk/sosc/" target="_blank">Soil Science  </a></li>
                 </ul>
                </li>

                <li><a class="dropdown-item" href="#"> Centers and Units &raquo;</a>
                   <ul class="submenu dropdown-menu">
                    <li><a class="dropdown-item" href="http://agri.pdn.ac.lk/abc/" target="_blank">Agribusiness Centre (AbC)  </a></li>
                    <li><a class="dropdown-item" href="http://agri.pdn.ac.lk/agbc/" target="_blank">Agricultural Biotechnology Centre </a></li>
                    <li><a class="dropdown-item" href="http://agri.pdn.ac.lk/centers_units/AEU/" target="_blank">Agriculture Education Unit (AEU)</a></li>
                    <li><a class="dropdown-item" href="http://agri.pdn.ac.lk/eltu/" target="_blank">English Language Teaching Unit (ELTU) </a></li>
                 </ul>
                </li>

                <li><a class="dropdown-item" href="#">Teaching/ Students Research Farms &raquo;</a>
                   <ul class="submenu dropdown-menu">
                    <li><a class="dropdown-item" href="http://agri.pdn.ac.lk/farms/dodangolla/index.php" target="_blank">University Experimental Station, Dodangolla </a></li>
                    <li><a class="dropdown-item" href="http://agri.pdn.ac.lk/livestock/" target="_blank">Livestock Farm, Udaperadeniya </a></li>
                    <li><a class="dropdown-item" href="http://agri.pdn.ac.lk/404" target="_blank">Meewathura Farm, Peradeniya </a></li>
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
                <li class="<?php echo activate_menu('Undergraduate_programme'); ?>"><a class="dropdown-item" href="<?php echo base_url("undergraduate-programme"); ?>">Undergraduate Programs </a></li>
                <li class="<?php echo activate_menu('Postgraduate_programme'); ?>"><a class="dropdown-item" href="<?php echo base_url("postgraduate-programme"); ?>">Postgraduate Programme </a></li>
              </ul>
            </li>

             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Research
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="<?php echo base_url().'research/faculty-research-committee'; ?>">Faculty Research Committee </a></li>
                <li><a class="dropdown-item" href="<?php echo base_url().'research/ethical-clearance-committee'; ?>">Ethical Review Committee</a></li>
                <li><a class="dropdown-item" href="<?php echo base_url().'research/faculty-research'; ?>">Research Stories</a></li>
                <li><a class="dropdown-item" href="<?php echo base_url().'excellence-award'; ?>">Awards</a></li>
                <li><a class="dropdown-item" href="faurs.html">Faurs</a></li>

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
              <li><a class="dropdown-item" href="<?php echo base_url().'international'; ?>">Overview</a></li>
                <li><a class="dropdown-item" href="http://agri.pdn.ac.lk/centers_units/AEU/Sustainable%20Tropical%20Agricultural%20Systems%20of%20Sri%20Lanka.html" target="_blank">Study Abroad Programme for Foreign Universities </a></li>
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
                <li><a class="dropdown-item" href="engage_over.html">Overview</a></li>
                <li><a class="dropdown-item" href="engage_partner.html">Partnerships</a></li>

                <li><a class="dropdown-item" href="#">Engagements &raquo; </a>
                   <ul class="submenu dropdown-menu desktop_menu_engage_sub_menu">
                    <li><a class="dropdown-item" href="research_engage.html">Research Engagements</a></li>
                    <li><a class="dropdown-item" href="research_engage.html">Student Engagements</a></li>
                    <li><a class="dropdown-item" href="research_engage.html">Community Engagements</a></li>
                 </ul>
                </li>

              </ul>


            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Services
              </a>
              <ul class="dropdown-menu desktop_menu_services_dropdown" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="stud_down.html">Transcript Request (For students)</a></li>
                <li><a class="dropdown-item" href="service_out_ce.html">Outreach Centres</a></li>
                <li><a class="dropdown-item" href="service_analy_ser.html">Analytical Services</a></li>
                <li><a class="dropdown-item" href="service_ex_faci.html">Research & Experimental Facilities</a></li>

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

        <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url('assets/frontend/images/logo.png'); ?>" alt="" class="d-block w-100 top_logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse flex-grow-1 text-right" id="navbarResponsive">


          <ul class="navbar-nav ms-auto first_nav_bar">

           <li class="nav-item">
              <a class="nav-link" href="http://173.231.230.98/~tgcss/vibudha/agri_css/sub_site_css/alumni.html">Alumni</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Downloads
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="staff_down.html" style="text-align: left;">Staff Downloads</a></li>
                <li><a class="dropdown-item" href="stud_down.html" style="text-align: left;">Students Downloads</a></li>
                 <li><a class="dropdown-item" href="fac_down.html" style="text-align: left;">Faculty Downloads</a></li>
                <!-- <li><a class="dropdown-item" href="#">Faculty Downloads &raquo;</a>
                   <ul class="submenu dropdown-menu">
                    <li><a class="dropdown-item" href="">e-Newsletter</a></li>
                    <li><a class="dropdown-item" href="">Faurs</a></li>
                    <li><a class="dropdown-item" href="">Hanthana Blossoms</a></li>
                 </ul>
                </li> -->
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="faq.html">FAQ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="engage_partner.html">Quick Links</a>
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
                    <li class="<?php echo activate_menu('about_us'); ?>"><a class="dropdown-item" href="<?php echo base_url("about-us"); ?>">Mission, Vision, Dean’s Message </a></li>
                    
                    <li><a class="dropdown-item" href="#">Faculty Statistics &raquo; </a>
                      <ul class="submenu dropdown-menu">
                        <li class="<?php echo activate_menu('Faculty_statistic_undergraduate'); ?>"><a class="dropdown-item" href="<?php echo base_url("faculty-statistic-undergraduate"); ?>">Undergraduates </a></li>
                        <li class="<?php echo activate_menu('Faculty_statistic_academic_staff'); ?>"><a class="dropdown-item" href="<?php echo base_url("faculty-statistic-academic-staff"); ?>">Academic Staff</a></li>
                    </ul>
                    </li>

                    <li class="<?php echo activate_menu('Dean_office'); ?>"><a class="dropdown-item" href="<?php echo base_url("dean-office"); ?>">Dean’s Office</a></li>
                    <li class="<?php echo activate_menu('Faculty_board'); ?>"><a class="dropdown-item" href="<?php echo base_url("faculty-board"); ?>">Faculty Board</a></li>
                    <li class="<?php echo activate_menu('History'); ?>"><a class="dropdown-item" href="<?php echo base_url("history"); ?>">History</a></li>
                    <li class="<?php echo activate_menu('Faculty_organization'); ?>"><a class="dropdown-item" href="<?php echo base_url("faculty-organization"); ?>">Faculty Organization</a></li>

                    <!-- <li><a class="dropdown-item" href="fac_broucher.html">Faculty Brochures</a></li>
                    <li><a class="dropdown-item" href="map.html">Map & direction </a></li> -->

                 </ul>
                </li>

                <li class="<?php echo activate_menu('Faculty_brochure'); ?>"><a class="dropdown-item" href="<?php echo base_url("faculty-brochure"); ?>">Brochure</a></li>
                <li><a class="dropdown-item" href="http://agri.pdn.ac.lk/MI/" target="_blank">Sub Campus, MI </a></li>

                <li><a class="dropdown-item" href="#"> Departments &raquo; </a>
                   <ul class="submenu dropdown-menu">
                    <li><a class="dropdown-item" href="http://agri.pdn.ac.lk/abo/" target="_blank">Agricultural Biology </a></li>
                    <li><a class="dropdown-item" href="http://agri.pdn.ac.lk/agebm/" target="_blank">Agricultural Economics & Business Management </a></li>
                    <li><a class="dropdown-item" href="http://agri.pdn.ac.lk/agen/" target="_blank">Agriculture Engineering </a></li>
                    <li><a class="dropdown-item" href="http://agri.pdn.ac.lk/aget/" target="_blank">Agriculture Extension</a></li>
                    <li><a class="dropdown-item" href="http://agri.pdn.ac.lk/ansc/" target="_blank">Animal Science </a></li>
                    <li><a class="dropdown-item" href="fhttp://agri.pdn.ac.lk/crsc/" target="_blank">Crop Science  </a></li>
                    <li><a class="dropdown-item" href="http://agri.pdn.ac.lk/fods/" target="_blank">Food Science & Technology </a></li>
                    <li><a class="dropdown-item" href="http://agri.pdn.ac.lk/sosc/" target="_blank">Soil Science  </a></li>
                 </ul>
                </li>

                <li><a class="dropdown-item" href="#"> Centers and Units &raquo;</a>
                   <ul class="submenu dropdown-menu">
                    <li><a class="dropdown-item" href="http://agri.pdn.ac.lk/abc/" target="_blank">Agribusiness Centre (AbC)  </a></li>
                    <li><a class="dropdown-item" href="http://agri.pdn.ac.lk/agbc/" target="_blank">Agricultural Biotechnology Centre </a></li>
                    <li><a class="dropdown-item" href="http://agri.pdn.ac.lk/centers_units/AEU/" target="_blank">Agriculture Education Unit (AEU)</a></li>
                    <li><a class="dropdown-item" href="http://agri.pdn.ac.lk/eltu/" target="_blank">English Language Teaching Unit (ELTU) </a></li>
                 </ul>
                </li>

                <li><a class="dropdown-item" href="#">Teaching/ Students Research Farms &raquo;</a>
                   <ul class="submenu dropdown-menu">
                    <li><a class="dropdown-item" href="http://agri.pdn.ac.lk/farms/dodangolla/index.php" target="_blank">University Experimental Station, Dodangolla </a></li>
                    <li><a class="dropdown-item" href="http://agri.pdn.ac.lk/livestock/" target="_blank">Livestock Farm, Udaperadeniya </a></li>
                    <li><a class="dropdown-item" href="http://agri.pdn.ac.lk/404" target="_blank">Meewathura Farm, Peradeniya </a></li>
                 </ul>
                </li>

                 <li><a class="dropdown-item" href="http://www.lib.pdn.ac.lk/branches/agri" target="_blank">Agriculture Library </a></li>

                  <!-- <li><a class="dropdown-item" href="#">Downloads &raquo;</a>
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
                <li class="<?php echo activate_menu('Undergraduate_programme'); ?>"><a class="dropdown-item" href="<?php echo base_url("undergraduate-programme"); ?>">Undergraduate Programs </a></li>
                <li class="<?php echo activate_menu('Postgraduate_programme'); ?>"><a class="dropdown-item" href="<?php echo base_url("postgraduate-programme"); ?>" target="_blank">Postgraduate Programme </a></li>
              </ul>
            </li>

             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Research
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="<?php echo base_url().'research/faculty-research-committee'; ?>">Faculty Research Committee </a></li>
                <li><a class="dropdown-item" href="<?php echo base_url().'research/ethical-clearance-committee'; ?>">Ethical Review Committee</a></li>
                <li><a class="dropdown-item" href="<?php echo base_url().'research/faculty-research'; ?>">Research Stories</a></li>
                <li><a class="dropdown-item" href="<?php echo base_url().'excellence-award'; ?>">Awards</a></li>

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
              <li><a class="dropdown-item" href="<?php echo base_url().'international'; ?>">Overview</a></li>
                <li><a class="dropdown-item" href="http://agri.pdn.ac.lk/centers_units/AEU/Sustainable%20Tropical%20Agricultural%20Systems%20of%20Sri%20Lanka.html" target="_blank">Study Abroad Programme for Foreign Universities </a></li>
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
                      <li><a class="dropdown-item" href="<?php echo base_url('/').$download->fPdf; ?>" target="_blank"><?php echo $download->vHeading; ?> </a></li>
                      <?php } ?>
                   </ul>
                  </li>
                </ul>

              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Engagement
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="engage_over.html">Overview</a></li>
                <li><a class="dropdown-item" href="engage_partner.html">Partnerships</a></li>

                <li><a class="dropdown-item" href="#">Engagements &raquo; </a>
                   <ul class="submenu dropdown-menu">
                    <li><a class="dropdown-item" href="research_engage.html">Research Engagements</a></li>
                    <li><a class="dropdown-item" href="research_engage.html">Student Engagements</a></li>
                    <li><a class="dropdown-item" href="research_engage.html">Community Engagements</a></li>
                 </ul>
                </li>

              </ul>

            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Services
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="stud_down.html">Transcript Request (For students)</a></li>
                <li><a class="dropdown-item" href="service_out_ce.html">Outreach Centres</a></li>
                <li><a class="dropdown-item" href="service_analy_ser.html">Analytical Services</a></li>
                <li><a class="dropdown-item" href="service_ex_faci.html">Research & Experimental Facilities</a></li>
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

    <header>
      <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <!-- <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div> -->
        <div class="carousel-inner">
          <?php
            $mainSliders = get_main_sliders();
            $count = 0;
            foreach($mainSliders as $slider) {

          ?>
          <div class="carousel-item <?php if($count == 0) { echo "active"; } ?>" style="background-image: url('<?php echo base_url("front_img/").$slider->fImage; ?>')">
            <div class="container carousel-caption">
              <div class="row">
                <div class="col-xxl-6 offset-xxl-6 col-xl-6 offset-xl-6 col-lg-6 offset-lg-6 col-md-6 offset-md-6 col-sm-12 carousel_caption_col angled-bottom-left">
                  <h5><?php echo $slider->vTitle; ?></h5>
                  <p><?php echo $slider->vCaption; ?></p>
                </div>
              </div>
            </div>
          </div>
          <?php $count++; } ?>
        </div>
        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button> -->
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
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
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
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!-- mobile slider section -->