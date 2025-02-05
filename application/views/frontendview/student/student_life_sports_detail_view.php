<header>
      <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php $pageBanner = get_innerpage_banner($this->uri->segment(1)); if($pageBanner !== false){ foreach($pageBanner as $banner){if($this->uri->segment(1) == $banner->vPageRoute){echo base_url().'front_img/'.$banner->fImage;}}}else{echo base_url().'/assets/frontend/images/slider01.jpg';}  ?> ) center top repeat;">
          
          <div class="container inner_page_top_heading">
            <div class="row ms-auto">
              <h1 class="heading" data-aos="fade-up">Sports</h1>
              <nav aria-label="breadcrumb" data-aos="fade-down">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><b>Student Sports</b></li>
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


  <!-- news section -->

  <div class="container">
    
    <div class="row">
      
       <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
        <?php
          if(isset($data)){ 
        ?>
        <div class="row m-auto">
        
          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <img src="<?php echo base_url().'/front_img/'.$data->fThumbnail;?>" class="d-block w-100" alt="...">
          </div>

          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
          <?php 
                      $timestamp = strtotime($data->dRDate);
                      $date = date('d-M-Y', $timestamp);
                ?>
            <p style="margin-top: 0px; margin-bottom: 0px; color: #2c4f93;"><small><?php echo $date; ?></small></p>
            <h1 class="sub_heading"><?php echo $data->vTitle; ?></h1>
            <p data-aos="fade-up">
              
              <?php 
                          $str = $data->tContent;
                          $len = str_word_count($str);
                            
                          echo substr($data->tContent,0,885);
                      ?>
            </p>

            <!-- <p data-aos="fade-up">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it tto make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </p> -->
          </div>

            <div class="w-100 d-none d-md-block"></div>
          <br>

           <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <p data-aos="fade-up">
             <?php
             echo substr($data->tContent,885,2000);
             ?>
            </p>

            <!-- <p data-aos="fade-up">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it tto make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </p> -->
          </div>

        </div>
        <?php
          }
        ?>                
       </div>

    </div>

  </div>

  <!-- news section -->

      <div class="w-100 d-none d-md-block"></div>
    <br>

    <!-- sub news section -->
    <div class="container">
      
      <div class="row">

        <h1 class="heading">Related Sports</h1>

        <div class="slider">
          <div class="owl-carousel">
          <?php if(isset($sports)){ foreach($sports as $all_data){ ?>
              <div class="slider-card">
                 <div class="news_div">
            
                  <div class="row">
                      <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                        <img src="<?php echo base_url().'/front_img/'.$all_data->fThumbnail;?>" class="d-block w-100" alt="...">
                      </div>

                      <div class="clearfix"></div>

                      <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                      <?php 
                      $timestamp = strtotime($all_data->dRDate);
                      $date = date('d-M-Y', $timestamp);
                ?>
                        <p style="margin-top: 0px; margin-bottom: 0px; color: #2c4f93;"><small><?php echo $date; ?></small></p>
                        <a href='<?php  
                                    $heading = $all_data->vTitle; 
                                    $name = str_replace(' ', '_', $heading); 
                                    echo base_url('student-life-sports/student-life-sports-detail/'.$all_data->id.'/'.$name) ?>'>
                        <h1 class="sub_heading">
                          <?php echo $all_data->vTitle; ?>
                        </h1>
                      </a>
                         <p data-aos="fade-up">
                         <?php 
                            if(strlen($all_data->tContent) > 100){
                                echo substr($all_data->tContent,0,100) . " ...";
                            }
                            else{
                                echo $all_data->tContent;
                            }
                          ?>
                          </p>
                          <!-- arrow link -->
                          <a class='animated-arrow' href='<?php $heading = $all_data->vTitle;
                                                    $name = str_replace(' ', '_', $heading);
                                                    echo base_url('student-life-sports/student-life-sports-detail/'.$all_data->id.'/'.$name)  ?>'>
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
    <!-- sub news section -->