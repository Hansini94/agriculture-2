<header>
      <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php echo base_url("assets/frontend/"); ?>images/slider01.jpg) center top repeat;">
          
          <div class="container inner_page_top_heading">
            <div class="row ms-auto">
              <h1 class="heading" data-aos="fade-up">FACULTY RESEARCH COMMITTEE (FRC)</h1>
              <nav aria-label="breadcrumb" data-aos="fade-down">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Research</a></li>
                <!-- <li class="breadcrumb-item"><a href="#">Faculty Statistics</a></li> -->
                <li class="breadcrumb-item active" aria-current="page"><b>Faculty Research Committee (Frc)</b></li>
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


  <!-- mission section -->

  <div class="container">
    
    <div class="row">
      
       <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">

        <div class="row ms-auto">
          <h1 class="heading mb-4"><?php echo $commitee->vTitle; ?></h1>

            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 dean_div">
                <?php if(!empty($commitee->fChairmenImage)){
                    $profile_image = base_url("front_img/").$commitee->fChairmenImage;
                } else {
                    $profile_image = base_url("assets/frontend/images/user_no_img.jpg");
                }
                ?>
              <img src="<?php echo $profile_image; ?>" alt="" class="d-block w-100 rounded-circle" data-aos="fade-down">
              <div class="gray_text_div dean_des_div" style="margin-bottom: 0px;">

                <blockquote class="blockquote">
                  <p class="sub_heading"><?php echo $commitee->vChairmanName; ?></p>
                </blockquote>
                <figcaption class="blockquote-footer" style="margin-bottom: 0px;">
                  Chairman
                </figcaption>
                
              </div>
            </div>

            <!-- ============== -->

            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 dean_div">
            <?php if(!empty($commitee->fSecImage)){
                    $profile_image2 = base_url("front_img/").$commitee->fSecImage;
                } else {
                    $profile_image2 = base_url("assets/frontend/images/user_no_img.jpg");
                }
                ?>
              <img src="<?php echo $profile_image2; ?>" alt="" class="d-block w-100 rounded-circle" data-aos="fade-down">
              <div class="gray_text_div dean_des_div" style="margin-bottom: 0px;">

                <blockquote class="blockquote">
                  <p class="sub_heading"><?php echo $commitee->vSecName; ?></p>
                </blockquote>
                <figcaption class="blockquote-footer" style="margin-bottom: 0px;">
                  Secretary
                </figcaption>
              </div>
            </div>

            <!-- =========== -->

            <div class="clearfix"></div>

            <h1 class="sub_heading mb-4">Objective, Operating and Reporting Process</h1>

            <p>
            <?php echo $commitee->tProcess; ?>
            </p>

        </div>

        <div class="clearfix"></div>
        <br>

        <div class="row ms-auto">
          
          <h1 class="heading mb-4">Composition:</h1>
        <?php foreach($members as $value){ ?>
          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">

              <div class="gray_text_div">

               <blockquote class="blockquote">
                  <p class="sub_heading"><?php echo $value->vTitle; ?> <?php echo $value->vName; ?></p>
                </blockquote>
                <figcaption class="blockquote-footer" style="margin-bottom: 0px;">
                <?php echo $value->vDesignation; ?>
                </figcaption>
                
              </div>

          </div>
        <?php } ?>

        </div>

       </div>

    </div>

  </div>

  <!-- mission section -->