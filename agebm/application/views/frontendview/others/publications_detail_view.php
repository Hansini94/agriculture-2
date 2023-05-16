<header>
      <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php $pageBanner = get_innerpage_banner($this->uri->segment(1)); if($pageBanner !== false){ foreach($pageBanner as $banner){if($this->uri->segment(1) == $banner->vPageRoute){echo base_url().'front_img/'.$banner->fImage;}}}else{echo base_url().'/assets/frontend/images/slider01.jpg';}  ?>) center top repeat;">
          
          <div class="container inner_page_top_heading">
            <div class="row ms-auto">
              <h1 class="heading" data-aos="fade-up">Others</h1>
              <nav aria-label="breadcrumb" data-aos="fade-down">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url("/"); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url("Publications"); ?>">Featured Publications</a></li>
                <li class="breadcrumb-item active" aria-current="page"><b>Details </b></li>
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

    <!-- publications section -->

  <div class="container">
    
    <div class="row">
      
       <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
       <?php
          if(isset($detail)){ 
        ?>
        <div class="row m-auto">
        
          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <img src="<?php echo base_url().'front_img/'.$detail->fThumbnail;?>" class="d-block w-100" alt="...">
          </div>

          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
          <h1 class="sub_heading"><?php echo $detail->tTitle; ?></h1>
            <p data-aos="fade-up">
              
              <?php 
                          $str = $detail->tDescription;
                          $len = str_word_count($str);
                            
                          echo substr($detail->tDescription,0,885);
                      ?>
            </p>
          </div>

            <div class="w-100 d-none d-md-block"></div>
          <br>

            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <p data-aos="fade-up">            
                    <?php echo substr($detail->tDescription,885,2000);  ?>
              </p>
            </div>

        </div>
        <?php
          }
        ?> 

       </div>

    </div>

  </div>

  <!-- publications section -->

      <div class="w-100 d-none d-md-block"></div>
    <br>

    <!-- sub publications section -->
    <div class="container">
      
      <div class="row">

        <h1 class="heading">Recent Publications</h1>

        <div class="slider">
          <div class="owl-carousel">

          <?php if(isset($all)){ foreach($all as $all_data){ ?>
              <div class="slider-card">
                 <div class="news_div">
            
                  <div class="row">
                      <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                        <img src="<?php echo base_url().'front_img/'.$all_data->fThumbnail;?>" class="d-block w-100" alt="...">
                      </div>

                      <div class="clearfix"></div>

                      <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                     <a href='<?php  
                                    $heading = $all_data->tTitle;
                                    $name = str_replace(' ', '-', $heading); 
                                    $name = preg_replace('/[^A-Za-z0-9\-]/', '', $name);
                                    echo base_url('publications/publications-detail/'. $all_data->id . '/' .$name); ?>'>
                        <h1 class="sub_heading">
                          <?php echo $all_data->tTitle; ?>
                        </h1>
                      </a>
                          <!-- arrow link -->
                          <a class='animated-arrow' href='<?php $heading = $all_data->tTitle;
                                    $name = str_replace(' ', '-', $heading); 
                                    $name = preg_replace('/[^A-Za-z0-9\-]/', '', $name);
                                    echo base_url('publications/publications-detail/'. $all_data->id . '/' .$name);  ?>'>
                          <span class='the-arrow -left'>
                            <span class='shaft'></span>
                          </span>
                          <span class='main'>
                            <span class='text'>
                              Read More
                            </span>
                            <span class='the-arrow -right'>
                              <span class='shaft'></span>
                            </span>
                          </span>
                        </a>
                        <!-- arrow link -->
                      </div>
                  </div>

                </div>
              </div>
              <?php 
                // $i++; 
                // if($i ==3){ echo '<div class="clearfix"></div>'; $i=0; }
                } }?>

             

          </div>
      </div>
        

        <!-- ============================== -->
        <div class="clearfix"></div>
        <!-- ============================== -->

      </div>

    </div>
    <!-- sub publications section -->

     

      <div class="clearfix"></div>