<header>
      <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php $pageBanner = get_innerpage_banner($this->uri->segment(1)); if($pageBanner !== false){ foreach($pageBanner as $banner){if($this->uri->segment(1) == $banner->vPageRoute){echo base_url().'front_img/'.$banner->fImage;}}}else{echo base_url().'/assets/frontend/images/slider01.jpg';}  ?> ) center top repeat;">
          
          <div class="container inner_page_top_heading">
            <div class="row ms-auto">
              <h1 class="heading" data-aos="fade-up">INTERNATIONALIZATION - OVERVIEW</h1>
              <nav aria-label="breadcrumb" data-aos="fade-down">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="#">International</a></li>
                <li class="breadcrumb-item active" aria-current="page"><b>Overview</b></li>
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

          <p>
            <?php echo $overview->tContent1; ?>
          </p>

          <div class="clearfix"></div>
          <br>

          <div class="row">
            
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
              <div class="shadow p-4 mb-5 bg-body rounded spec_box">
                <img src="<?php echo base_url().'/front_img/'.$overview->fCardIcon1;?>" alt="" class="d-block float-start">
                <h1 class="heading"><?php echo $overview->iCardCount1; ?></h1>
                 <div class="clearfix"></div>
                 <hr>
                <h1 class="sub_heading">
                <?php echo $overview->vCardTitle1; ?>
                </h1>
              </div>
            </div>

            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
               <div class="shadow p-4 mb-5 bg-body rounded spec_box">
                <img src="<?php echo base_url().'/front_img/'.$overview->fCardIcon2;?>" alt="" class="d-block float-start">
                <h1 class="heading"><?php echo $overview->iCardCount2; ?></h1>
                <div class="clearfix"></div>
                <hr>
                 <h1 class="sub_heading">
                 <?php echo $overview->vCardTitle2; ?>
                </h1>
              </div>
            </div>

            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
               <div class="shadow p-4 mb-5 bg-body rounded spec_box">
                <img src="<?php echo base_url().'/front_img/'.$overview->fCardIcon3;?>" alt="" class="d-block float-start">
                <h1 class="heading"><?php echo $overview->iCardCount3; ?></h1>
                <div class="clearfix"></div>
                <hr>
                 <h1 class="sub_heading">
                 <?php echo $overview->vCardTitle3; ?>
                </h1>
              </div>
            </div>

            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
               <div class="shadow p-4 mb-5 bg-body rounded spec_box">
                <img src="<?php echo base_url().'/front_img/'.$overview->fCardIcon4;?>" alt="" class="d-block float-start">
                <h1 class="heading"><?php echo $overview->iCardCount4; ?></h1>

                <div class="clearfix"></div>
                  <hr>
                 <h1 class="sub_heading">
                 <?php echo $overview->vCardTitle4; ?>
                </h1>
              </div>
            </div>

          </div>

          <div class="clearfix"></div>

          <p>
          <?php echo $overview->tContent2; ?>
          </p>

          <div class="clearfix"></div>

            <div class="row">
               <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6">
                  <div class="gray_text_div">

                    <img src="images/pdf.png" alt="" class="d-block float-start">

                    <blockquote class="blockquote" style="margin-bottom: 0px;">
                      <p class="sub_heading">MoUs / MoAs</p>
                    </blockquote>
                    <!-- arrow link -->
                      <a class='animated-arrow' href='<?php echo base_url().'front_img/'.$overview->fPdf;?>' target="_blank">
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

                <!-- ============== -->
             </div>

           <div class="clearfix"></div>
           <br>

           <!-- ================== -->
           <!-- ================== -->
           <!-- tab section -->

           <div class="row">
        
              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="padding-left: 0px !important;">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><p>Visiting Professors</p></button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><p>ToR For V: Professors</p></button>
                </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                   <h1 class="sub_heading mb-3">Honorary Visiting Professors/fellows – 2018/19</h1>

                   <div class="row">

                    <?php $i=0;
                    foreach($visiting_professors as $value){ ?>

                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 dean_div">
                      <img src="<?php echo base_url().'/front_img/'.$value->fImage;?>" alt="" class="d-block w-100 rounded-circle" data-aos="fade-down">
                      <div class="gray_text_div dean_des_div">

                       <blockquote class="blockquote">
                          <p class="sub_heading"><?php echo $value->vTitle; ?>. <?php echo $value->vName; ?></p>
                        </blockquote>
                        <figcaption class="blockquote-footer" >
                        <?php echo $value->vQualification; ?>
                        </figcaption>
                        <figcaption class="blockquote-footer" style="margin-bottom: 0px;">
                        <?php echo $value->vProposedBy; ?>
                        </figcaption>
                        
                      </div>
                    </div>

                   <?php $i++; 
                        if($i ==3){ echo '<div class="clearfix"></div>'; $i=0; }
                    } ?>

                  </div>
                   
                </div>

                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                   <h1 class="heading mb-1">Terms Of Reference For Honorary Visiting Professorship/felloship</h1>
                    <h1 class="sub_heading mb-3">Introduction</h1>

                    <p>
                      <?php echo $terms_of_reference->tIntro; ?>
                    </p>

                    <div class="clearfix"></div>
                    <br>

                    <h1 class="sub_heading mb-3">Conditions</h1>

                    <?php echo $terms_of_reference->tCondition; ?>

                    <div class="clearfix"></div>
                    <br>

                    <h1 class="sub_heading mb-3">Application Procedure</h1>

                    <?php echo $terms_of_reference->tAppProcedure; ?>

                </div>
              </div>

            </div>

           <!-- ================== -->
           <!-- ================== -->
           <!-- tab section -->


        </div>

      </div>

    </div>

  </div>

  <!-- mission section -->