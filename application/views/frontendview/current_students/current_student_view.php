<header>
      <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php echo base_url("assets/frontend/"); ?>images/slider03.jpg) center top repeat;">
          
          <div class="container inner_page_top_heading">
            <div class="row ms-auto">
              <h1 class="heading" data-aos="fade-up">Current Students </h1>
              <nav aria-label="breadcrumb" data-aos="fade-down">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><b>Current Students </b></li>
              </ol>
            </nav>
            </div>
          </div>

        </div>
      </div>
    </header>

    <!-- header section -->

    <!--=============================================-->
  <!--===================header====================-->

    <div class="w-100 d-none d-md-block"></div>


  <!--=============================================-->
  <!--===================body====================-->

  <!-- welcome section -->
  <div class="container-fluid no_padding footer_row angled-top-right mb-4 mt-1" style="background-color: #c8cfe9;">

    <div class="container">
    
      <div class="row">
      
       <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">

        <div class="row m-auto">
        
          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <img src="<?php echo base_url().'/front_img/'.$content->fImg; ?>" class="d-block w-100 mb-4" alt="...">
          </div>

          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <h1 class="heading"><?php echo $content->vTitle; ?></h1>
            <p data-aos="fade-up">
                <?php echo $content->tContent; ?>
            </p>

            <!-- <p data-aos="fade-up">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
            </p> -->

            
          </div>

        </div>
        <br>

       </div>

    </div>

    </div>

  </div>
  <!-- welcome section -->


  <!-- mission section -->

  <div class="container">
    
    <div class="row">
      
       <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">

        <div class="row m-auto">

        <h1 class="heading">Links</h1>
        <h1 class="sub_heading">Website links for Current students informations</h1>
        <div class="clearfix"></div>
        <br>
        
          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
            <div class="gray_text_div">

              <img src="<?php echo base_url("assets/frontend/"); ?>images/f_student.png" alt="" class="d-block float-start">

              <blockquote class="blockquote" style="margin-bottom: 0px;">
                <p class="sub_heading"> Student Information System (SIS) </p>
              </blockquote>
              <!-- arrow link -->
                <a class='animated-arrow' href='http://agri.pdn.ac.lk/ext_student/index.php/Login' target="_blank">
                <span class='the-arrow -left'>
                  <span class='shaft'></span>
                </span>
                <span class='main'>
                  <span class='text'>
                   Click here
                  </span>
                  <span class='the-arrow -right'>
                    <span class='shaft'></span>
                  </span>
                </span>
              </a>
              <!-- arrow link -->
            </div>
          </div>

          <!-- =========== -->

          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
            <div class="gray_text_div">

              <img src="<?php echo base_url("assets/frontend/"); ?>images/f_student.png" alt="" class="d-block float-start">

              <blockquote class="blockquote" style="margin-bottom: 0px;">
                <p class="sub_heading"> Prospectus  </p>
              </blockquote>
              <!-- arrow link -->
                <a class='animated-arrow' href='<?php 
                                          if($prospectus->fPdfFile != '') {
                                            echo base_url('front_img/').$prospectus->fPdfFile;
                                          } 
                                          ?>' target="_blank">
                <span class='the-arrow -left'>
                  <span class='shaft'></span>
                </span>
                <span class='main'>
                  <span class='text'>
                   Click here
                  </span>
                  <span class='the-arrow -right'>
                    <span class='shaft'></span>
                  </span>
                </span>
              </a>
              <!-- arrow link -->
            </div>
          </div>

          <!-- =========== -->

          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
            <div class="gray_text_div">

              <img src="<?php echo base_url("assets/frontend/"); ?>images/f_student.png" alt="" class="d-block float-start">

              <blockquote class="blockquote" style="margin-bottom: 0px;">
                <p class="sub_heading"> AGRI e-Hub </p>
              </blockquote>
              <!-- arrow link -->
                <a class='animated-arrow' href='http://ehub.agri.pdn.ac.lk/login/index.php' target="_blank">
                <span class='the-arrow -left'>
                  <span class='shaft'></span>
                </span>
                <span class='main'>
                  <span class='text'>
                   Click here
                  </span>
                  <span class='the-arrow -right'>
                    <span class='shaft'></span>
                  </span>
                </span>
              </a>
              <!-- arrow link -->
            </div>
          </div>

          <!-- =========== -->          

          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
            <div class="gray_text_div">

              <img src="<?php echo base_url("assets/frontend/"); ?>images/f_student.png" alt="" class="d-block float-start">

              <blockquote class="blockquote" style="margin-bottom: 0px;">
                <p class="sub_heading"> Downloads </p>
              </blockquote>
              <!-- arrow link -->
                <a class='animated-arrow' href='<?php echo base_url('downloads-students') ?>' target="_blank">
                <span class='the-arrow -left'>
                  <span class='shaft'></span>
                </span>
                <span class='main'>
                  <span class='text'>
                   Click here
                  </span>
                  <span class='the-arrow -right'>
                    <span class='shaft'></span>
                  </span>
                </span>
              </a>
              <!-- arrow link -->
            </div>
          </div>

          <!-- =========== -->

          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
            <div class="gray_text_div">

              <img src="<?php echo base_url("assets/frontend/"); ?>images/f_student.png" alt="" class="d-block float-start">

              <blockquote class="blockquote" style="margin-bottom: 0px;">
                <p class="sub_heading"> FAQ </p>
              </blockquote>
              <!-- arrow link -->
                <a class='animated-arrow' href='<?php echo base_url('Faq') ?>' target="_blank">
                <span class='the-arrow -left'>
                  <span class='shaft'></span>
                </span>
                <span class='main'>
                  <span class='text'>
                   Click here
                  </span>
                  <span class='the-arrow -right'>
                    <span class='shaft'></span>
                  </span>
                </span>
              </a>
              <!-- arrow link -->
            </div>
          </div>
          <!-- =========== -->


        </div>

       </div>

    </div>

    <div class="clearfix"></div>
    <hr>
    <br>

    <div class="row m-auto">
      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">

        <h1 class="heading mb-3">GPA Calculator</h1>

          <div id="container" class="home_link_div" style="position: relative; z-index: 99999; background-color: #b8e0d2; margin-top: 0px; height: auto;">
            
            <a href="<?php echo base_url('Bsc-Agtech'); ?>">
              <div class="quick_links_div">
                <p class="quick_links" data-aos="fade-up">BSc Agtech & Mgt GPA Calculator</p>
                <img src="<?php echo base_url("assets/frontend/"); ?>images/right_arrow.svg" alt="" class="d-block float-md-end quick_links_arrow" width="20px;">
              </div>
            </a>

            <a href="<?php echo base_url('Bsc-asf'); ?>">
              <div class="quick_links_div">
                <p class="quick_links" data-aos="fade-up">BSc ASF GPA Calculator</p>
                <img src="<?php echo base_url("assets/frontend/"); ?>images/right_arrow.svg" alt="" class="d-block float-md-end quick_links_arrow" width="20px;">
              </div>
            </a>

            <a href="<?php echo base_url('Bsc-fst'); ?>">
              <div class="quick_links_div">
                <p class="quick_links" data-aos="fade-up">BSc FST GPA Calculator</p>
                <img src="<?php echo base_url("assets/frontend/"); ?>images/right_arrow.svg" alt="" class="d-block float-md-end quick_links_arrow" width="20px;">
              </div>
            </a>

          </div>

      </div>
        
      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">

        <h1 class="heading mb-3">Academic</h1>
        
        <div id="container" class="home_link_div" style="position: relative; z-index: 99999; background-color: #b8e0d2; margin-top: 0px; height: auto;">
              
          <a href="<?php echo base_url('academic-calendar') ?>">
                    <div class="quick_links_div">
                        <p class="quick_links" data-aos="fade-up">Academic Calendar</p>
                        <img src="images/right_arrow.svg" alt="" class="d-block float-md-end quick_links_arrow"
                            width="20px;">
                    </div>
                </a>

                <a href="<?php echo base_url('Examination_timetables'); ?>">
                    <div class="quick_links_div">
                        <p class="quick_links" data-aos="fade-up">Examination Timetables</p>
                        <img src="images/right_arrow.svg" alt="" class="d-block float-md-end quick_links_arrow"
                            width="20px;">
                    </div>

                </a>

                <a href="<?php echo base_url('class-timetables'); ?>">
                    <div class="quick_links_div">
                        <p class="quick_links" data-aos="fade-up">Class Timetables</p>
                        <img src="images/right_arrow.svg" alt="" class="d-block float-md-end quick_links_arrow"
                            width="20px;">
                    </div>
                </a>

                <a href="<?php echo base_url('deans-list'); ?>">
                    <div class="quick_links_div">
                        <p class="quick_links" data-aos="fade-up">Dean’s List </p>
                        <img src="images/right_arrow.svg" alt="" class="d-block float-md-end quick_links_arrow"
                            width="20px;">
                    </div>
                </a>

                <!-- <a href="<?php echo base_url('awards'); ?>">
                    <div class="quick_links_div">
                        <p class="quick_links" data-aos="fade-up">Faculty Awards </p>
                        <img src="images/right_arrow.svg" alt="" class="d-block float-md-end quick_links_arrow"
                            width="20px;">
                    </div>
                </a> -->
              
              

            </div>

      </div>

      <!-- =========== -->

      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">

        <h1 class="heading mb-3">Resources for Student</h1>
        
        <div id="container" class="home_link_div" style="position: relative; z-index: 99999; background-color: #b8e0d2; margin-top: 0px; height: auto;">
              
              <a href="<?php echo base_url('faculty-level-scholarship'); ?>">
                <div class="quick_links_div">
                  <p class="quick_links" data-aos="fade-up">Faculty Level Scholarship</p>
                  <img src="<?php echo base_url("assets/frontend/"); ?>images/right_arrow.svg" alt="" class="d-block float-md-end quick_links_arrow" width="20px;">
                </div>
              </a>

              <a href="http://agri.pdn.ac.lk/Pages/about/downloads/Student_guide_book.pdf" target="_blank">
                <div class="quick_links_div">
                  <p class="quick_links" data-aos="fade-up">Student Guide Book</p>
                  <img src="<?php echo base_url("assets/frontend/"); ?>images/right_arrow.svg" alt="" class="d-block float-md-end quick_links_arrow" width="20px;">
                </div>
                
              </a>

              <a href="http://agri.pdn.ac.lk/Pages/about/downloads/research/Research_Project_Handbook_FA_UP_2019_20_Final.pdf" target="_blank">
                <div class="quick_links_div">
                  <p class="quick_links" data-aos="fade-up">Research Project Handbook </p>
                  <img src="<?php echo base_url("assets/frontend/"); ?>images/right_arrow.svg" alt="" class="d-block float-md-end quick_links_arrow" width="20px;">
                </div>
              </a>

              <a href="<?php echo base_url('video-lab-practice'); ?>">
                <div class="quick_links_div">
                  <p class="quick_links" data-aos="fade-up">Video on Safe Laboratory Practices</p>
                  <img src="<?php echo base_url("assets/frontend/"); ?>images/right_arrow.svg" alt="" class="d-block float-md-end quick_links_arrow" width="20px;">
                </div>
              </a>

            </div>

      </div>

      <!-- =========== -->

      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">

        <h1 class="heading mb-3">Advisory, Career Guidence and Councelling</h1>
        
        <div id="container" class="home_link_div" style="position: relative; z-index: 99999; background-color: #b8e0d2; margin-top: 0px; height: auto;">
              <?php if(!empty($advisory)) { $i=0; foreach($advisory as $ads){ ?>
              <a href="<?php echo $ads->vUrl;  ?>" target="_blank">
                <div class="quick_links_div">
                  <p class="quick_links" data-aos="fade-up"><?php echo $ads->vTitle ?></p>
                  <img src="<?php echo base_url("assets/frontend/"); ?>images/right_arrow.svg" alt="" class="d-block float-md-end quick_links_arrow" width="20px;">
                </div>
              </a>
            <?php $i++; } }?>
              <!-- <a href="http://agri.pdn.ac.lk/Pages/about/downloads/std_counseling/CounsellingEnglishVersion.pdf" target="_blank">
                <div class="quick_links_div">
                  <p class="quick_links" data-aos="fade-up">Counselling Booklet – English</p>
                  <img src="<?php echo base_url("assets/frontend/"); ?>images/right_arrow.svg" alt="" class="d-block float-md-end quick_links_arrow" width="20px;">
                </div>
              </a>

              <a href="https://www.pdn.ac.lk/cgu/" target="_blank">
                <div class="quick_links_div">
                  <p class="quick_links" data-aos="fade-up">CGU </p>
                  <img src="<?php echo base_url("assets/frontend/"); ?>images/right_arrow.svg" alt="" class="d-block float-md-end quick_links_arrow" width="20px;">
                </div>
              </a>

              <a href="http://www.roadtoadulthood.lk/" target="_blank">
                <div class="quick_links_div">
                  <p class="quick_links" data-aos="fade-up">Adulthood  </p>
                  <img src="<?php echo base_url("assets/frontend/"); ?>images/right_arrow.svg" alt="" class="d-block float-md-end quick_links_arrow" width="20px;">
                </div>
              </a>

              <a href="http://agri.pdn.ac.lk/student_Counsellors" target="_blank">
                <div class="quick_links_div">
                  <p class="quick_links" data-aos="fade-up">Senior Student Counsellors</p>
                  <img src="<?php echo base_url("assets/frontend/"); ?>images/right_arrow.svg" alt="" class="d-block float-md-end quick_links_arrow" width="20px;">
                </div>
              </a>

              <a href="http://agri.pdn.ac.lk/Pages/about/downloads/students/SGVB.pdf" target="_blank">
                <div class="quick_links_div">
                  <p class="quick_links" data-aos="fade-up">SGBV</p>
                  <img src="<?php echo base_url("assets/frontend/"); ?>images/right_arrow.svg" alt="" class="d-block float-md-end quick_links_arrow" width="20px;">
                </div>
              </a> -->

            </div>

      </div>

      <!-- =========== -->
      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">

        <h1 class="heading mb-3">Provision for Re-correction of Grades</h1>
        
        <div id="container" class="home_link_div" style="position: relative; z-index: 99999; background-color: #b8e0d2; margin-top: 0px; height: auto;">
              <?php if(!empty($provision)) { $i=0; foreach($provision as $prov){ ?>
              <a href="<?php echo $prov->vUrl;  ?>" target="_blank">
                <div class="quick_links_div">
                  <p class="quick_links" data-aos="fade-up"><?php echo $prov->vTitle;  ?></p>
                  <img src="<?php echo base_url("assets/frontend/"); ?>images/right_arrow.svg" alt="" class="d-block float-md-end quick_links_arrow" width="20px;">
                </div>
              </a>
              <?php $i++; } }?>
              <!-- <a href="http://agri.pdn.ac.lk/Pages/about/downloads/students/Verification_of_Exam_Marks_Application_Form.pdf" target="_blank">
                <div class="quick_links_div">
                  <p class="quick_links" data-aos="fade-up">Application Form</p>
                  <img src="<?php echo base_url("assets/frontend/"); ?>images/right_arrow.svg" alt="" class="d-block float-md-end quick_links_arrow" width="20px;">
                </div>
                
              </a> -->


            </div>

      </div>

    </div>

  </div>

  <!-- mission section -->

  <div class="w-100 d-none d-md-block"></div>
    <br>
    <br>