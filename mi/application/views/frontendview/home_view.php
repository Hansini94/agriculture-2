<div class="container top_box_con">
      <div class="row">

        <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-12 col-sm-12">
          
          <div class="row">
            
           
            <div class="w-100 d-none d-md-block"></div>
            <br>
            <br>

            <!-- uni about section -->
            <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12 hidden_item">
              <img src="<?php echo base_url('front_img/').$home_details->fFacultyImage; ?>" alt="" class="d-block w-100 align-self-center">
            </div>
            <div class="clearfix"></div><br>
            <div class="row hidden_item">
              <h1 class="heading"><?php echo $home_details->vFacultyTitle; ?></h1>

              <p data-aos="fade-up">
              <?php echo $home_details->tFacultyContent; ?>
              </p>
                <!-- 
              <p data-aos="fade-up">
                The program provides knowledge and extensive hands-on training on Agricultural Biology related laboratory and field work. The students are provided with the opportunity to familiarize themselves with acclaimed research undertaken in relevant disciplines, with access to modern equipment and facilities, both at undergraduate and postgraduate level.
              </p>

              <p data-aos="fade-up">
                The Department offers four modules for the advanced program of Agricultural Technology & Management degree, covering key areas of Agricultural Biology. Through the advanced modules the students will be groomed for their prospective postgraduate studies and future professions.
              </p> -->

              <!-- <h1 class="sub_heading">Advanced modules offered:</h1>
              <ul class="custome_ul">
                <li>Economic and Applied Entomology</li>
                <li>Genetic Improvement of Plants</li>
                <li>Molecular Biology and Biotechnology</li>
                <li>Plant Pathology and Microbiology</li>
              </ul> -->
            </div>
            <!-- uni about section -->

          </div>

        </div>

        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-12 col-sm-12 top_box">
          <div class="top_box_div skew_top_box_div_4">
            
            <div id="container" class="rag_har_div angled-top-right" style="position: relative; z-index: 99999; background-color: #84121f;">
              
              <div class="row ms-auto">
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-2 col-sm-3 col-3">
                      <img src="<?php echo base_url('front_img/').$home_details->fRagIcon; ?>" alt="" class="d-block w-100">
                    </div>

                    <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9 text_col">
                      <h1 style="text-transform: capitalize; font-size: 17px;">
                      <?php echo $home_details->vRagTitle; ?>
                      </h1>
                    </div>

                     <p style="margin-top: 10px;"><small><?php echo $home_details->tRagContent; ?></small></p>

                     <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                      <a href="<?php echo $home_details->vRagLink; ?>">
                        <button class="btn btn-outline-secondary ms-n5 orange_btn" type="button" style="margin-top: 10px; margin-bottom: 15px;" data-aos="fade-down">
                            &nbsp;Click Here&nbsp;
                        </button>
                      </a>
                     </div>
                      
                  </div>

            </div>

          </div>

           <!-- links -->
          <div class="top_box_div">
            <div id="container" class="home_link_div" style="position: relative; z-index: 99999; background-color: #e3e3e3; margin-top: -30px; height: auto;">
              
              <a href="<?php echo $home_details->vOther2Link1; ?>" target="_blank">
                <div class="quick_links_div">
                  <p class="quick_links" data-aos="fade-up"><?php echo $home_details->vOther2Title1; ?></p>
                  <img src="<?php echo base_url("assets/frontend/"); ?>images/right_arrow.svg" alt="" class="d-block float-md-end quick_links_arrow" width="20px;">
                </div>
              </a>

              <a href="<?php echo $home_details->vOther2Link2; ?>" target="_blank">
                <div class="quick_links_div">
                  <p class="quick_links" data-aos="fade-up"><?php echo $home_details->vOther2Title2; ?></p>
                  <img src="<?php echo base_url("assets/frontend/"); ?>images/right_arrow.svg" alt="" class="d-block float-md-end quick_links_arrow" width="20px;">
                </div>
                
              </a>

              <a href="<?php echo $home_details->vOther2Link3; ?>" target="_blank">
                <div class="quick_links_div">
                  <p class="quick_links" data-aos="fade-up"><?php echo $home_details->vOther2Title3; ?></p>
                  <img src="<?php echo base_url("assets/frontend/"); ?>images/right_arrow.svg" alt="" class="d-block float-md-end quick_links_arrow" width="20px;">
                </div>
              </a>

              <a href="<?php echo $home_details->vOther2Link4; ?>" target="_blank">
                <div class="quick_links_div">
                  <p class="quick_links" data-aos="fade-up"><?php echo $home_details->vOther2Title4; ?></p>
                  <img src="<?php echo base_url("assets/frontend/"); ?>images/right_arrow.svg" alt="" class="d-block float-md-end quick_links_arrow" width="20px;">
                </div>
              </a>

            </div>
          </div>
          <!-- links -->

          <!-- covid update -->
          <div class="top_box_div">
            <div id="container" style="position: relative; z-index: 99999; background-color: #faced6; margin-top: 5px; height: auto;">
              
              <a href="<?php echo $home_details->vOtherLink; ?>">
                <div class="row">
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                    <img src="<?php echo base_url('front_img/').$home_details->fOtherIcon; ?>" alt="" class="d-block w-100 float-md-end" style="width: 70px !important;">
                  </div>

                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6" style="border-left: 1px solid #999999; padding-top: 15px;">
                    <h1 style="text-transform: capitalize; font-size: 17px; color: #f82525;">
                    <?php echo $home_details->vOtherTitle; ?>
                    </h1>
                  </div>
                </div>
              </a>

            </div>
          </div>
          <!-- covid update -->


        </div>

        <div class="w-100 d-none d-md-block"></div>

      </div>
    </div>

    <br>

    <!-- news section -->
    <div class="container-fluid" style="background-color: #efd2d1;">
      <br>
      <br>
      <div class="container">

        <!-- mobile show -->
        <div class="row d-lg-none d-xl-none d-xxl-none" style="margin-bottom: 30px;">
            <!-- uni about section -->
            <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
              <img src="<?php echo base_url('front_img/').$home_details->fFacultyImage; ?>" alt="" class="d-block w-100 align-self-center">
            </div>
            <div class="clearfix"></div><br>
            <div class="row">
              <h1 class="heading"><?php echo $home_details->vFacultyTitle; ?></h1>

              <p data-aos="fade-up">
              <?php echo $home_details->tFacultyContent; ?>
              </p>

              <!-- <p data-aos="fade-up">
                The program provides knowledge and extensive hands-on training on Agricultural Biology related laboratory and field work. The students are provided with the opportunity to familiarize themselves with acclaimed research undertaken in relevant disciplines, with access to modern equipment and facilities, both at undergraduate and postgraduate level.
              </p>

              <p data-aos="fade-up">
                The Department offers four modules for the advanced program of Agricultural Technology & Management degree, covering key areas of Agricultural Biology. Through the advanced modules the students will be groomed for their prospective postgraduate studies and future professions.
              </p> -->

              <!-- <h1 class="sub_heading">Advanced modules offered:</h1>
              <ul class="custome_ul">
                <li>Economic and Applied Entomology</li>
                <li>Genetic Improvement of Plants</li>
                <li>Molecular Biology and Biotechnology</li>
                <li>Plant Pathology and Microbiology</li>
              </ul> -->
            </div>
            <!-- uni about section -->
        </div>
        <!-- mobile show -->
        
        <div class="row"> 

          <h1 class="heading mb-3">News & Updates</h1>

          <!-- news carousel -->
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
            <?php 
            $count=0;
            foreach($slider_news as $news) { 
          ?>
          <div class="carousel-item <?php if($count==0) { echo "active"; } ?>" style="height: auto;">

            <div class="row">
              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <img src="<?php echo base_url("front_img/").$news->fThumbnail; ?>" class="d-block w-100" alt="...">
              </div>

              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <?php 
                      $timestamp = strtotime($news->dNewsdate);
                      $date = date('d-M-Y', $timestamp);
                ?>
                <p style="margin-top: 0px; margin-bottom: 0px; color: #2c4f93;"><small><?php echo $date; ?></small></p>
                <h1 class="sub_heading"><?php echo $news->vName; ?></h1>
                <?php echo $news->tContent; ?>

                <!-- arrow link -->
                <a class='animated-arrow' href='<?php 
                                                    $heading = $news->vName; 
                                                    $name = str_replace(' ', '-', $heading); 
                                                    $name = preg_replace('/[^A-Za-z0-9\-]/', '', $name);
                                                    echo base_url('news/news-detail/'. $news->id . '/' .$name)
                                                ?>'>
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
          <?php $count++; } ?>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <!-- news carousel -->

        </div>

      </div>
      <br>
    </div>
    <!-- news section -->

    <div class="w-100 d-none d-md-block"></div>
    <br>

    <!-- sub news section -->
    <div class="container">
      
      <div class="row">
        
      <?php
      // $mm = 0;
      // $ss=0;
      // foreach($featured_news as $news) {
      //   $mm++;

      if(!empty($featured_news)) {
    ?>

    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-12">
      <div class="news_div">

        <div class="row">
          <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
            <?php 
                      $timestamp = strtotime($featured_news[0]->dNewsdate);
                      $date = date('d-M-Y', $timestamp);
                ?>
            <img src="<?php echo base_url('front_img/').$featured_news[0]->fThumbnail; ?>" class="d-block w-100" alt="...">
          </div>

          <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
            <p style="margin-top: 0px; margin-bottom: 0px; color: #2c4f93;"><small><?php echo $date; ?></small></p>
            <a href='<?php  $heading = $featured_news[0]->vName; 
                            $name = str_replace(' ', '-', $heading); 
                            $name = preg_replace('/[^A-Za-z0-9\-]/', '', $name);
                            echo base_url('news/news-detail/'. $featured_news[0]->id . '/' .$name) ?>'>
                <h1 class="sub_heading"><?php echo $featured_news[0]->vName; ?></h1>
            </a>
            <!-- arrow link -->
            <a class='animated-arrow' href='<?php 
                                                    $heading = $featured_news[0]->vName; 
                                                    $name = str_replace(' ', '-', $heading); 
                                                    $name = preg_replace('/[^A-Za-z0-9\-]/', '', $name);
                                                    echo base_url('news/news-detail/'. $featured_news[0]->id . '/' .$name)
                                                ?>'>
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

    <?php if(!empty($featured_news[1])) { ?>
      
    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-4 col-12">
                 <?php 
                      $timestamp = strtotime($featured_news[1]->dNewsdate);
                      $date = date('d-M-Y', $timestamp);
                ?>
      <div class="news_div">
        <p style="margin-top: 0px; margin-bottom: 0px; color: #2c4f93;"><small><?php echo $date; ?></small></p>
        <a href='<?php  $heading = $featured_news[1]->vName; 
                                                    $name = str_replace(' ', '-', $heading); 
                                                    $name = preg_replace('/[^A-Za-z0-9\-]/', '', $name);
                                                    echo base_url('news/news-detail/'. $featured_news[1]->id . '/' .$name) ?>'>
         <h1 class="sub_heading" style="min-height: 31px;"><?php echo $featured_news[1]->vName; ?></h1>
        </a>
          <?php echo substr($featured_news[1]->tContent, 0, 200).'..'; ?>

        <a class='animated-arrow' href='<?php 
                                                    $heading = $featured_news[1]->vName; 
                                                    $name = str_replace(' ', '-', $heading); 
                                                    $name = preg_replace('/[^A-Za-z0-9\-]/', '', $name);
                                                    echo base_url('news/news-detail/'. $featured_news[1]->id . '/' .$name)
                                                ?>'>
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

      </div>
    </div>

    <?php } if(!empty($featured_news[2])) { ?>

    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-12">
      <div class="news_div">

        <div class="row">
          <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
            <?php 
                      $timestamp = strtotime($featured_news[2]->dNewsdate);
                      $date = date('d-M-Y', $timestamp);
                ?>
            <img src="<?php echo base_url('front_img/').$featured_news[2]->fThumbnail; ?>" class="d-block w-100" alt="...">
          </div>

          <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
            <p style="margin-top: 0px; margin-bottom: 0px; color: #2c4f93;"><small><?php echo $date; ?></small></p>
            <a href='<?php $heading = $featured_news[2]->vName; 
                                                    $name = str_replace(' ', '-', $heading); 
                                                    $name = preg_replace('/[^A-Za-z0-9\-]/', '', $name);
                                                    echo base_url('news/news-detail/'. $featured_news[2]->id . '/' .$name) ?>'>
            <h1 class="sub_heading"><?php echo $featured_news[2]->vName; ?></h1>
            </a>
            <!-- arrow link -->
            <a class='animated-arrow' href='<?php 
                                                    $heading = $featured_news[2]->vName; 
                                                    $name = str_replace(' ', '-', $heading); 
                                                    $name = preg_replace('/[^A-Za-z0-9\-]/', '', $name);
                                                    echo base_url('news/news-detail/'. $featured_news[2]->id . '/' .$name)
                                                ?>'>
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

    <!-- ============================== -->
    <div class="clearfix"></div>
    <!-- ============================== -->

    <?php } if(!empty($featured_news[3])) { ?>

    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-12">
      <div class="news_div">

        <div class="row">
          <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
            <?php 
                      $timestamp = strtotime($featured_news[3]->dNewsdate);
                      $date = date('d-M-Y', $timestamp);
                ?>
            <img src="<?php echo base_url('front_img/').$featured_news[3]->fThumbnail; ?>" class="d-block w-100" alt="...">
          </div>

          <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
            <p style="margin-top: 0px; margin-bottom: 0px; color: #2c4f93;"><small><?php echo $date; ?></small></p>
            <a href='<?php $heading = $featured_news[3]->vName; 
                                                    $name = str_replace(' ', '-', $heading); 
                                                    $name = preg_replace('/[^A-Za-z0-9\-]/', '', $name);
                                                    echo base_url('news/news-detail/'. $featured_news[3]->id . '/' .$name) ?>'>
            <h1 class="sub_heading"><?php echo $featured_news[3]->vName; ?></h1>
            </a>
            <!-- arrow link -->
            <a class='animated-arrow' href='<?php 
                                                    $heading = $featured_news[3]->vName; 
                                                    $name = str_replace(' ', '-', $heading); 
                                                    $name = preg_replace('/[^A-Za-z0-9\-]/', '', $name);
                                                    echo base_url('news/news-detail/'. $featured_news[3]->id . '/' .$name)
                                                ?>'>
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

    <?php } if(!empty($featured_news[4])) { ?>
      
    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-4 col-12">
                 <?php 
                      $timestamp = strtotime($featured_news[4]->dNewsdate);
                      $date = date('d-M-Y', $timestamp);
                ?>
      <div class="news_div">
        <p style="margin-top: 0px; margin-bottom: 0px; color: #2c4f93;"><small><?php echo $date; ?></small></p>
        <a href='<?php $heading = $featured_news[4]->vName; 
                                                    $name = str_replace(' ', '-', $heading); 
                                                    $name = preg_replace('/[^A-Za-z0-9\-]/', '', $name);
                                                    echo base_url('news/news-detail/'. $featured_news[4]->id . '/' .$name) ?>'>
        <h1 class="sub_heading" style="min-height: 31px;"><?php echo $featured_news[4]->vName; ?></h1>
        </a>
        <?php echo substr($featured_news[4]->tContent, 0, 200).'..'; ?>

        <a class='animated-arrow' href='<?php 
                                                    $heading = $featured_news[4]->vName; 
                                                    $name = str_replace(' ', '-', $heading); 
                                                    $name = preg_replace('/[^A-Za-z0-9\-]/', '', $name);
                                                    echo base_url('news/news-detail/'. $featured_news[4]->id . '/' .$name)
                                                ?>'>
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

      </div>
    </div>

    <?php } if(!empty($featured_news[5])) { ?>

    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-12">
      <div class="news_div">

        <div class="row">
          <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
            <?php 
                      $timestamp = strtotime($featured_news[5]->dNewsdate);
                      $date = date('d-M-Y', $timestamp);
                ?>
            <img src="<?php echo base_url('front_img/').$featured_news[5]->fThumbnail; ?>" class="d-block w-100" alt="...">
          </div>

          <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
            <p style="margin-top: 0px; margin-bottom: 0px; color: #2c4f93;"><small><?php echo $date; ?></small></p>
            <a href='<?php $heading = $featured_news[5]->vName; 
                                                    $name = str_replace(' ', '-', $heading); 
                                                    $name = preg_replace('/[^A-Za-z0-9\-]/', '', $name);
                                                    echo base_url('news/news-detail/'. $featured_news[5]->id . '/' .$name) ?>'>
            <h1 class="sub_heading"><?php echo $featured_news[5]->vName; ?></h1>
            </a>
            <!-- arrow link -->
            <a class='animated-arrow' href='<?php 
                                                    $heading = $featured_news[5]->vName; 
                                                    $name = str_replace(' ', '-', $heading); 
                                                    $name = preg_replace('/[^A-Za-z0-9\-]/', '', $name);
                                                    echo base_url('news/news-detail/'. $featured_news[5]->id . '/' .$name)
                                                ?>'>
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

    <?php } ?>


  </div>

</div>
<!-- sub news section -->

<?php } ?>

        <div class="w-100 d-none d-md-block"></div>
    <br>


    <!-- shortcut links -->
    <div class="container-fluid">
      
      <div class="row">
        
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 p-1">
          <div class="short_link_div short_link_div_full_height" style="background-image: url(<?php echo base_url('front_img/').$home_details->fOtherImage1; ?>);">
            <h1 class="heading"><?php echo $home_details->vOtherTitle1; ?> </h1>
            <p data-aos="fade-up">
            <?php echo $home_details->tOtherContent1; ?>
            </p>
            <!-- arrow link -->
              <a class='animated-arrow' href='<?php echo $home_details->vOtherLink1; ?>'>
              <span class='the-arrow -left'>
                <span class='shaft'></span>
              </span>
              <span class='main'>
                <span class='text'>
                  Explore More
                </span>
                <span class='the-arrow -right'>
                  <span class='shaft'></span>
                </span>
              </span>
            </a>
            <!-- arrow link -->
          </div>
        </div>

        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 p-1">
          <div class="short_link_div short_link_div_middle_height mb-2" style="background-image: url(<?php echo base_url('front_img/').$home_details->fOtherImage2; ?>) !important; background-position:center top;"></div>

           <div class="short_link_div short_link_div_middle_height" style="background-color: #c4df9b;">
            <h1 class="heading"><?php echo $home_details->vOtherTitle2; ?></h1>
            <p data-aos="fade-up">
            <?php echo $home_details->tOtherContent2; ?>
            </p>
            <!-- arrow link -->
              <a class='animated-arrow' href='<?php echo $home_details->vOtherLink2; ?>'>
              <span class='the-arrow -left'>
                <span class='shaft'></span>
              </span>
              <span class='main'>
                <span class='text'>
                  Explore More
                </span>
                <span class='the-arrow -right'>
                  <span class='shaft'></span>
                </span>
              </span>
            </a>
            <!-- arrow link -->
          </div>
        </div>

        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 p-1">

           <div class="short_link_div short_link_div_middle_height" style="background-color: #d5b79f;">
            <h1 class="heading"><?php echo $home_details->vOtherTitle3; ?></h1>
            <p data-aos="fade-up">
            <?php echo $home_details->tOtherContent3; ?>
            </p>
            <!-- arrow link -->
              <a class='animated-arrow' href='<?php echo $home_details->vOtherLink3; ?>'>
              <span class='the-arrow -left'>
                <span class='shaft'></span>
              </span>
              <span class='main'>
                <span class='text'>
                  Explore More
                </span>
                <span class='the-arrow -right'>
                  <span class='shaft'></span>
                </span>
              </span>
            </a>
            <!-- arrow link -->
          </div>

           <div class="short_link_div short_link_div_middle_height mt-2" style="background-image: url(<?php echo base_url('front_img/').$home_details->fOtherImage3; ?>) !important; background-position:center top;"></div>

        </div>


      </div>

    </div>
    <!-- shortcut links -->