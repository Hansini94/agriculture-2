<header>
      <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php $pageBanner = get_innerpage_banner($this->uri->segment(1)); if($pageBanner !== false){ foreach($pageBanner as $banner){if($this->uri->segment(1) == $banner->vPageRoute){echo base_url().'front_img/'.$banner->fImage;}}}else{echo base_url().'/assets/frontend/images/slider01.jpg';}  ?>) center top repeat;">
          
          <div class="container inner_page_top_heading">
            <div class="row ms-auto">
              <h1 class="heading" data-aos="fade-up">Our Experts</h1>
              <nav aria-label="breadcrumb" data-aos="fade-down">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url("/"); ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><b>Foreign</b></li>
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

    <div class="w-100 d-datae d-md-block"></div>
    <br>


  <!--=============================================-->
  <!--===================body====================-->

<div class="clearfix"></div>
      <br>

      <div class="container">
    
        <div class="row">

          <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">

            <div class="row m-auto">

              <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <h1 class="heading mb-3">Foreign</h1>

                <div class="row">
                    <?php 
                        if(isset($all)){
                            $i=0;
                            foreach($all as $data )
                            {
                                    
                    ?>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 dean_div">
                        <img src="<?php echo base_url('front_img/').$data->fImage; ?>" alt="" class="d-block w-100 rounded-circle" data-aos="fade-down">
                        <div class="gray_text_div dean_des_div" style="margin-bottom: 0px;">
                            <blockquote class="blockquote">
                                <p class="sub_heading"><?php echo $data->vName; ?></p>
                            </blockquote>
                            <figcaption class="blockquote-footer" style="margin-bottom: 0px;">
                                <?php echo $data->vRegNumber; ?>
                            </figcaption>                    
                        </div>
                    </div>

                    <!-- ============== -->
                    <?php 
                                $i++; 
                            }
                        } 
                    ?>

                </div>

                </div>

                </div>

              </div>

                    <div class="row">
        
                      <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        
                          <!-- pagination -->
                          <nav class="float-end">
                          <?php echo $links; ?>
                            <!-- <ul class="pagination" style="padding-left: 0px !important;">
                              <li class="page-item disabled">
                                <span class="page-link">Previous</span>
                              </li>
                              <li class="page-item active"><a class="page-link" href="#">1</a></li>
                              <li class="page-item" aria-current="page">
                                <span class="page-link">2</span>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                              </li>
                            </ul> -->
                          </nav>
                          <!-- pagination -->

                      </div>

                    </div>

              <div class="clearfix"></div>
              <br>



            </div>

          </div>

        </div>

      </div>

     

      <div class="clearfix"></div>