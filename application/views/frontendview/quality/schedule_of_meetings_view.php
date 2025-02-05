<header>
      <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php $pageBanner = get_innerpage_banner($this->uri->segment(2)); if($pageBanner !== false){ foreach($pageBanner as $banner){if($this->uri->segment(2) == $banner->vPageRoute){echo base_url().'front_img/'.$banner->fImage;}}}else{echo base_url().'/assets/frontend/images/slider01.jpg';}  ?> ) center top repeat;">
          
          <div class="container inner_page_top_heading">
            <div class="row ms-auto">
              <h1 class="heading" data-aos="fade-up">Schedule of Meetings </h1>
              <nav aria-label="breadcrumb" data-aos="fade-down">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Quality</a></li>
                <li class="breadcrumb-item"><a href="#">Faculty of Agriculture Quality Assurance Cell (FoAQAC) </a></li>
                <li class="breadcrumb-item active" aria-current="page"><b>Schedule of Meetings</b></li>
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

                <a href="<?php echo base_url(); ?>quality/functions-of-foaqac">
                    <button class="nav-link">
                      Functions of FoAQAC
                    </button>
                  </a>

                  <a href="<?php echo base_url(); ?>quality/foaqac">
                    <button class="nav-link">
                      Members of FQ Assurance Cell
                    </button>
                  </a>

                  <a href="<?php echo base_url(); ?>quality/schedule-of-meetings">
                    <button class="nav-link active">
                      Schedule of Meetings 
                    </button>
                  </a>

                </div>
                <!-- nav tabs btn section -->

              </div>

              <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-8 col-sm-8 col-12">
                <h1 class="heading mb-1">FQAC - Schedule of Meetings</h1>
                <h1 class="sub_heading mb-3"><?php echo $schedule_of_meetings->vTitle ?></h1>

                <p>
                <?php echo $schedule_of_meetings->tDescription ?>
                </p>

                <?php echo $schedule_of_meetings->tContent; ?>

              </div>

              <div class="clearfix"></div>

            </div>

          </div>

        </div>

      </div>