<header>
      <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php echo base_url("assets/frontend/"); ?>images/slider01.jpg) center top repeat;">
          
          <div class="container inner_page_top_heading">
            <div class="row ms-auto">
              <h1 class="heading" data-aos="fade-up">ALUMNI</h1>
              <nav aria-label="breadcrumb" data-aos="fade-down">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url('alumni'); ?>">Alumni</a></li>
                <li class="breadcrumb-item active" aria-current="page"><b>Alumni Events</b></li>
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


  <!-- events section -->

  <div class="container">
    
    <div class="row">
      
       <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">

        <div class="row m-auto">
        
          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <img src="<?php echo base_url().'/front_img/'.$detail->fThumbnail;?>" class="d-block w-100" alt="...">
          </div>

          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <p style="margin-top: 0px; margin-bottom: 0px; color: #2c4f93;"><small><?php echo $detail->dRDate; ?></small></p>
            <h1 class="sub_heading"><?php echo $detail->vTitle; ?></h1>
            <p data-aos="fade-up">
              
              <?php 
                          $str = $detail->tContent;; 
    
                          // Using str_word_count() function to
                          // count number of words in a string
                          $len = str_word_count($str);
                            
                          // Printing the result
                          // echo $len; 

                          // if(strlen($all_data->tContent) > 155){
                            echo substr($detail->tContent,0,885);
                          // }
                          // else{
                          //     echo $all_data->tContent;
                          // }

                        // function substr_at_word_boundary($string, $chars = 100)
                        // {
                        //     preg_match('/^.{0,' . $chars. '}(?:.*?)\b/iu', $string, $matches);
                        //     $new_string = $matches[0];
                        //     return ($new_string === $string) ? $string : $new_string;
                        // }

                        // $string = substr_at_word_boundary($detail->tContent, 150)
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
             echo substr($detail->tContent,885,2000);
             ?>
            </p>

            <!-- <p data-aos="fade-up">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it tto make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </p> -->
          </div>

        </div>

       </div>

    </div>

  </div>

  <!-- events section -->

      <div class="w-100 d-none d-md-block"></div>
    <br>

    <!-- sub events section -->
    <div class="container">
      
      <div class="row">

        <h1 class="heading">Related Events</h1>

        <div class="slider">
          <div class="owl-carousel">
          <?php foreach($all as $all_data){ ?>
              <div class="slider-card">
                 <div class="news_div">
            
                  <div class="row">
                      <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                        <img src="<?php echo base_url().'/front_img/'.$all_data->fThumbnail;?>" class="d-block w-100" alt="...">
                      </div>

                      <div class="clearfix"></div>

                      <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <p style="margin-top: 0px; margin-bottom: 0px; color: #2c4f93;"><small><?php echo $all_data->dRDate; ?></small></p>
                        <a href='<?php  $heading = $all_data->vTitle; $name = str_replace(' ', '_', $heading); echo base_url('alumni_events/events_detail/'.$name) ?>'>
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
                                                    echo base_url('alumni_events/events_detail/'.$name) ?>'>
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
                } ?>  

          </div>
      </div>
        

        <!-- ============================== -->
        <div class="clearfix"></div>
        <!-- ============================== -->

      </div>

    </div>
    <!-- sub events section -->