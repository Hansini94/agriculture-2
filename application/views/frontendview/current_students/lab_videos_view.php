<header>
      <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php echo base_url("assets/frontend/"); ?>images/slider01.jpg) center top repeat;">
          
          <div class="container inner_page_top_heading">
            <div class="row ms-auto">
              <h1 class="heading" data-aos="fade-up">Current students </h1>
              <nav aria-label="breadcrumb" data-aos="fade-down">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url("current_student"); ?>">Resources for Student</a></li>
                <li class="breadcrumb-item active" aria-current="page"><b>Faculty Level Scholarship</b></li>
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
    <br>

     <div class="container">
    
        <div class="row">

          <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">

            <div class="row ms-auto">

              <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-8 col-12">
                
                <!-- nav tabs btn section -->
                <div class="nav flex-column nav-pills me-3 side_nav_btn" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                <a href="<?php echo base_url(); ?>resources_for_student">
                    <button class="nav-link ">
                        Faculty Level Scholarship
                    </button>
                  </a>

                  <a href="http://agri.pdn.ac.lk/Pages/about/downloads/Student_guide_book.pdf" target="_blank">
                    <button class="nav-link">
                        Student Guide Book 
                    </button>
                  </a>

                  <a href="http://agri.pdn.ac.lk/Pages/about/downloads/research/Research_Project_Handbook_FA_UP_2019_20_Final.pdf" target="_blank">
                    <button class="nav-link">
                        Research Project Handbook FA UP 2019/20 Final
                    </button>
                  </a>

                  <a href="<?php echo base_url(); ?>resources_for_student/lab_videos">
                    <button class="nav-link active">
                        Video on Safe Laboratory Practices
                    </button>
                  </a>

                </div>
                <!-- nav tabs btn section -->

              </div>

              <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-8 col-sm-8 col-12">
                <h1 class="heading mb-3">Video on Safe Laboratory Practices</h1>

                <div class="row">
                <?php foreach($video as $vd){ ?>
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
                    <div class="ratio ratio-16x9">
                      <iframe src="<?php echo $vd->vUrl; ?>" title="YouTube video" allowfullscreen></iframe>
                    </div>
                  </div>

                  <?php 
                } ?>  

                </div>

                <div class="clearfix"></div>


              </div>

              <div class="clearfix"></div>



            </div>

          </div>

        </div>

      </div>


  <!--=============================================-->
  <!--===================body====================-->



     <div class="w-100 d-none d-md-block"></div>
    <br>
