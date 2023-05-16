<header>
      <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php $pageBanner = get_innerpage_banner($this->uri->segment(1)); if($pageBanner !== false){ foreach($pageBanner as $banner){if($this->uri->segment(1) == $banner->vPageRoute){echo base_url().'front_img/'.$banner->fImage;}}}else{echo base_url().'/assets/frontend/images/slider01.jpg';}  ?>) center top repeat;">
          
          <div class="container inner_page_top_heading">
            <div class="row ms-auto">
              <h1 class="heading" data-aos="fade-up">Students</h1>
              <nav aria-label="breadcrumb" data-aos="fade-down">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url("/"); ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><b>Students</b></li>
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


  <!--=============================================-->
  <!--===================body====================-->

<div class="clearfix"></div>
      <br>

      <div class="container">
    
        <div class="row">

          <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">

            <div class="row ms-auto">

              <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-8 col-12">
                
                <!-- nav tabs btn section -->
                <div class="nav flex-column nav-pills me-3 side_nav_btn" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                  <a href="<?php echo base_url('Module-EAE'); ?>">
                    <button class="nav-link ">
                      Economic and Applied Entomology  
                    </button>
                  </a>

                  <a href="<?php echo base_url('Module-GIP'); ?>">
                    <button class="nav-link">
                      Genetic Improvement of Plants
                    </button>
                  </a>

                  <a href="<?php echo base_url('Module-MBB'); ?>">
                    <button class="nav-link">
                      Molecular Biology and Biotechnology
                    </button>
                  </a>

                  <a href="<?php echo base_url('Module-PPM'); ?>">
                    <button class="nav-link active">
                      Plant Pathology and Microbiology
                    </button>
                  </a>

                </div>
                <!-- nav tabs btn section -->

              </div>

                <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-8 col-sm-8 col-12">
                    <h1 class="heading mb-3">Plant Pathology and Microbiology</h1>

                    <div class="row">
                        <h1 class="sub_heading mb-3"><?php echo $students[0]->vSeries; ?></h1>
                        <?php    
                        if(isset($students)){    
                                $i=0;
                                foreach($students as $data )
                                {                                       
                        ?> 
                        <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6 col-sm-6 dean_div">
                            <img src="<?php echo base_url().'front_img/'.$data->fImage;?>" alt="" class="d-block w-100 rounded-circle" data-aos="fade-down">
                            <div class="gray_text_div dean_des_div" style="margin-bottom: 0px;">
                                <blockquote class="blockquote">
                                <p class="sub_heading"><?php echo $data->vName; ?></p>
                                </blockquote>
                                <figcaption class="blockquote-footer" style="margin-bottom: 0px;">
                                <?php echo $data->vNumber; ?>
                                </figcaption>                        
                            </div>
                        </div>
                        <?php 
                                    $i++; 
                                }
                            } 
                        ?>

                    </div>
                </div>

              <div class="clearfix"></div>
              <br>



            </div>

          </div>

        </div>

      </div>

     

      <div class="clearfix"></div>