<header>
      <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php echo base_url("assets/frontend/"); ?>images/slider01.jpg) center top repeat;">
          
          <div class="container inner_page_top_heading">
            <div class="row ms-auto">
              <h1 class="heading" data-aos="fade-up">ALUMNI</h1>
              <nav aria-label="breadcrumb" data-aos="fade-down">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url("engagement"); ?>">Alumni</a></li>
                <li class="breadcrumb-item active" aria-current="page"><b>Alumni Newsletters</b></li>
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


  <!-- newsletters section -->

  <div class="container">
    
    <div class="row">
      
       <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">

        <div class="row m-auto">
        
          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <img src="<?php echo base_url().'/front_img/'.$latest->fThumbnail;?>" class="d-block w-100" alt="...">
          </div>

          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <p style="margin-top: 0px; margin-bottom: 0px; color: #2c4f93;"><small><?php echo $latest->dRDate; ?></small></p>
            <h1 class="sub_heading"><?php echo $latest->vTitle; ?></h1>
            <p data-aos="fade-up">
            <?php 
                          // if(strlen($latest->tContent) > 900){
                          //     echo substr($latest->tContent,0,900) . " ...";
                          // }
                          // else{
                          //     echo $latest->tContent;
                          // }
                          function trimtext($data, $limit) {
                            $arr = explode(" ", $data);
                            $new_arr = array_slice($arr, 0, $limit);
                            return implode(" ", $new_arr);
                        }
                        
                        // $test = 'This is a very very very long words here blablabla blablabla blablabla  test';
                        echo trimtext($latest->tContent, 140);
                        
                      ?>
            </p>

            <!-- <p data-aos="fade-up">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it tto make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </p> -->

            <!-- arrow link -->
                <a class='animated-arrow' href='<?php 
                                                  $heading = $latest->vTitle;
                                                  $name = str_replace(' ', '_', $heading);
                                                  echo base_url('alumni_newsletters/newsletters_detail/'.$name) ?>'>
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

  </div>

  <!-- newsletters section -->

      <div class="w-100 d-none d-md-block"></div>
    <br>

    <!-- sub newsletters section -->
    <div class="container">
      
      <div class="row">
        <?php $i=0; foreach($all as $all_data){ ?>
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
          <div class="news_div">
            
            <div class="row">
                <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                  <img src="<?php echo base_url().'/front_img/'.$all_data->fThumbnail;?>" class="d-block w-100" alt="...">
                </div>

                <div class="clearfix"></div>

                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <p style="margin-top: 0px; margin-bottom: 0px; color: #2c4f93;"><small><?php echo $all_data->dRDate; ?></small></p>
                    <h1 class="sub_heading"><?php echo $all_data->vTitle; ?></h1>
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
                    <a class='animated-arrow' href='<?php 
                                                      $heading = $latest->vTitle;
                                                      $name = str_replace(' ', '_', $heading);
                                                      echo base_url('alumni_newsletters/newsletters_detail/'.$name) ?>'>
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
                $i++; 
                if($i ==3){ echo '<div class="clearfix"></div>'; $i=0; }
                } ?>  

         

    

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
      

    </div>
    <!-- sub newsletters section -->