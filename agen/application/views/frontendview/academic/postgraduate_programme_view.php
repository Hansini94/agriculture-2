<header>
      <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php $pageBanner = get_innerpage_banner($this->uri->segment(1)); if($pageBanner !== false){ foreach($pageBanner as $banner){if($this->uri->segment(1) == $banner->vPageRoute){echo base_url().'front_img/'.$banner->fImage;}}}else{echo base_url().'/assets/frontend/images/slider01.jpg';}  ?>) center top repeat;">
          
          <div class="container inner_page_top_heading">
            <div class="row ms-auto">
              <h1 class="heading" data-aos="fade-up">Academic</h1>
              <nav aria-label="breadcrumb" data-aos="fade-down">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url("/"); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Academic</a></li>
                <li class="breadcrumb-item active" aria-current="page"><b>Postgraduate Programme</b></li>
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
        
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="padding-left: 0px !important;">
             <?php if(isset($post_graduate[0])){?>
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true" style="height:50px;width:270px;text-align:left;"><p style="width:250px;"><?php echo $post_graduate[0]->vProgramName; ?></p></button>
            </li>
            <?php }
            if(isset($post_graduate[1])){?>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false" style="height:50px;width:270px;text-align:left;"><p style="width:250px;"><?php echo $post_graduate[1]->vProgramName; ?></p></button>
            </li>
            <?php }
            // else{echo "No Data found"; }
            ?>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

              <br>
               
  
                <div class="row m-auto">
                  <?php if(isset($post_graduate[0])){?>
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <img src="<?php echo base_url('front_img/').$post_graduate[0]->fImage; ?>" class="d-block w-100" alt="...">
                  </div>

                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <h1 class="sub_heading"><?php echo $post_graduate[0]->vProgramName; ?></h1>
                    <p data-aos="fade-up">
                    <?php echo $post_graduate[0]->tProgramDescription; ?>
                    </p>

                    <!-- <p data-aos="fade-up">
                      Over the past three decades it has achieved substantial progress and has emerged as a “Centre of Excellence” in higher education in agricultural sciences in the country.
                    </p> -->

                      <div class="row">

                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                          <div class="gray_text_div">

                            <img src="images/www.png" alt="" class="d-block float-start">

                            <blockquote class="blockquote" style="margin-bottom: 0px;">
                              <p class="sub_heading">   PGIA website </p>
                            </blockquote>
                            <!-- arrow link -->
                              <a class='animated-arrow' href='<?php echo $post_graduate[0]->vUrl; ?>' target="_blank">
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
                  <?php }else{echo "No Data Found";}?>

                </div>


            </div>

            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

              <br>
    

                <div class="row m-auto">
                  <?php if(isset($post_graduate[1])){?>
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <img src="<?php echo base_url('front_img/').$post_graduate[1]->fImage; ?>" class="d-block w-100" alt="...">
                  </div>

                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <h1 class="sub_heading"><?php echo $post_graduate[1]->vProgramName; ?></h1>
                    <p data-aos="fade-up">
                    <?php echo $post_graduate[1]->tProgramDescription; ?>
                    </p>

                    <!-- <p data-aos="fade-up">
                      Over the past three decades it has achieved substantial progress and has emerged as a “Centre of Excellence” in higher education in agricultural sciences in the country.
                    </p> -->

                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                          <div class="gray_text_div">

                            <img src="images/www.png" alt="" class="d-block float-start">

                            <blockquote class="blockquote" style="margin-bottom: 0px;">
                              <p class="sub_heading">   PGIA website </p>
                            </blockquote>
                            <!-- arrow link -->
                              <a class='animated-arrow' href='<?php echo $post_graduate[1]->vUrl; ?>' target="_blank">
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
                  <?php }else{echo "No Data Found";}?>

                </div>


            </div>
          </div>

        </div>

       </div>

    </div>

  </div>
