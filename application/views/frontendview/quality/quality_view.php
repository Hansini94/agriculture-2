<header>
      <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php $pageBanner = get_innerpage_banner($this->uri->segment(2)); if($pageBanner !== false){ foreach($pageBanner as $banner){if($this->uri->segment(2) == $banner->vPageRoute){echo base_url().'front_img/'.$banner->fImage;}}}else{echo base_url().'/assets/frontend/images/slider01.jpg';}  ?> ) center top repeat;">
          
          <div class="container inner_page_top_heading">
            <div class="row ms-auto">
              <h1 class="heading" data-aos="fade-up">Faculty Sub Committees </h1>
              <nav aria-label="breadcrumb" data-aos="fade-down">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Quality</a></li>
                <li class="breadcrumb-item"><a href="#">Faculty Sub Committees</a></li>
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

     <div class="container">
    
        <div class="row">

          <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">

            <div class="row ms-auto">

              <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-8 col-12">
                
                <!-- nav tabs btn section -->
                <div class="nav flex-column nav-pills me-3 side_nav_btn" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                  <a href="<?php echo base_url('quality/frc'); ?>">
                    <button class="nav-link">
                      Faculty Research Committee 
                    </button>
                  </a>

                  <a href="<?php echo base_url('quality/cdc'); ?>">
                    <button class="nav-link">
                      Curriculum Development Committee 
                    </button>
                  </a>

                  <a href="<?php echo base_url('quality/ltc'); ?>">
                    <button class="nav-link">
                      Language Training Committee 
                    </button>
                  </a>

                  <a href="<?php echo base_url('quality/lc'); ?>">
                    <button class="nav-link">
                      Library Committee  
                    </button>
                  </a>

                  <a href="<?php echo base_url('quality/pprc'); ?>">
                    <button class="nav-link">
                      Publications & Public Relations Committee 
                    </button>
                  </a>

                  <a href="<?php echo base_url('quality/elcumc'); ?>">
                    <button class="nav-link">
                      E-Learning & Computer Unit Management Committee 
                    </button>
                  </a>

                  <a href="<?php echo base_url('quality/ttc'); ?>">
                    <button class="nav-link">
                      Time Table Committee 
                    </button>
                  </a>

                  <a href="<?php echo base_url('quality/tmu'); ?>">
                    <button class="nav-link">
                      Teaching Methods Unit 
                    </button>
                  </a>

                  <a href="<?php echo base_url('quality/sawc'); ?>">
                    <button class="nav-link">
                      Student Advisory & Welfare Committee  
                    </button>
                  </a>
                  
                  <?php 
                                    if(isset($other)){
                                        $i=0;
                                        foreach($other as $module )
                                        {
                                    
                                ?>
                                <a href="<?php 
                                    $heading = $module->vTitle; 
                                    $name = str_replace(' ', '-', $heading); 
                                    $name = preg_replace('/[^A-Za-z0-9\-]/', '', $name);
                                    $module_id = base64_encode($module->id);
                                    // $module_id = $module->id;
                                    echo base_url('quality/other/'. $module_id . '/' .$name);
                                // echo base_url('Units/units-detail/'.$module->id) 
                                // var_dump($detail);exit();
                                    $uri = $this->uri->segment(4); 
                                ?>">
                                    <button class="nav-link <?php if($uri === $name){echo 'active';}else{echo '';}?>">
                                        <?php echo $module->vTitle; ?>
                                    </button>
                                </a>  
                                <?php 
                                        $i++; 
                                        }
                                    } 
                                ?>         

                </div>
                <!-- nav tabs btn section -->

              </div>
                <?php 
                            if(isset($committee))
                            {
                             
                            ?>
              <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-8 col-sm-8 col-12">
                <h1 class="heading mb-3"><?php echo $committee->vTitle; ?></h1>

                <div class="row">
                  
                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6 col-sm-6 dean_div">
                      <?php 
                    //   var_dump($committee->fImgChairman);exit();
                        // if($commitee->fImgChairman != NULL){
                            // $profile_image = base_url().'/front_img/'.$commitee->fImgChairman;
                        // } else {
                        //     $profile_image = base_url("assets/frontend/images/user_no_img.jpg");
                        // }
                        ?>
                        <img src="<?php if(isset($committee->fImgChairman)){echo base_url().'/front_img/'.$committee->fImgChairman;} else{echo base_url().'/assets/frontend/images/user_no_img.jpg';} ?>" alt="" class="d-block w-100 rounded-circle" data-aos="fade-down">
                      <div class="gray_text_div dean_des_div" style="margin-bottom: 0px;">
    
                        <blockquote class="blockquote">
                          <p class="sub_heading"><?php echo $committee->vChairman; ?></p>
                        </blockquote>
                        <figcaption class="blockquote-footer" style="margin-bottom: 0px;">
                          Chairman <?php  echo $commitee->fImgChairman; ?>
                        </figcaption>
                        
                      </div>
                    </div>

                    <!-- ============== -->
    
                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6 col-sm-6 dean_div">
                        <?php 
                        // if(!empty($commitee->fImgSecretary)){
                        //     $profile_image2 = base_url("front_img/").$commitee->fImgSecretary;
                        //     } else {
                        //         $profile_image2 = base_url("assets/frontend/images/user_no_img.jpg");
                        //     }
                            ?>
                        <img src="<?php if(isset($committee->fImgSecretary)){echo base_url().'/front_img/'.$committee->fImgSecretary;} else{echo base_url().'/assets/frontend/images/user_no_img.jpg';} ?>" alt="" class="d-block w-100 rounded-circle" data-aos="fade-down">
                          <div class="gray_text_div dean_des_div" style="margin-bottom: 0px;">
        
                            <blockquote class="blockquote">
                              <p class="sub_heading"><?php echo $committee->vSecretary; ?></p>
                            </blockquote>
                            <figcaption class="blockquote-footer" style="margin-bottom: 0px;">
                              Secretary
                            </figcaption>
                          </div>
                    </div>
    
                    <!-- =========== -->

                </div>

                <h1 class="sub_heading mb-3"><?php echo $committee->vSubtitle; ?></h1>

                <p>
                <?php echo $committee->tDescription; ?>
                </p>

                <div class="clearfix"></div>
                <br>

              </div>
              <div class="clearfix"></div>
              <br>
              <?php 
                            }
                            else if(isset($other[0]->tOverview)){
                                
                             ?>

              <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-8 col-sm-8 col-12">
                <h1 class="heading mb-3"><?php echo $other[0]->vTitle; ?></h1>

                <div class="row">
                  
                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6 col-sm-6 dean_div">
                      <?php
                    //   if(!empty($other[0]->fImgChairman)){
                    //     $profile_image = base_url("front_img/").$other[0]->fImgChairman;
                    //     } else {
                    //         $profile_image = base_url("assets/frontend/images/user_no_img.jpg");
                    //     }
                        ?>
                        <img src="<?php if(isset($committee->fImgChairman)){echo base_url().'/front_img/'.$committee->fImgChairman;} else{echo base_url().'/assets/frontend/images/user_no_img.jpg';} ?>" alt="" class="d-block w-100 rounded-circle" data-aos="fade-down">
                      <div class="gray_text_div dean_des_div" style="margin-bottom: 0px;">
    
                        <blockquote class="blockquote">
                          <p class="sub_heading"><?php echo $other[0]->vChairman; ?></p>
                        </blockquote>
                        <figcaption class="blockquote-footer" style="margin-bottom: 0px;">
                          Chairman
                        </figcaption>
                        
                      </div>
                    </div>

                    <!-- ============== -->
    
                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6 col-sm-6 dean_div">
                        <?php
                        // if(!empty($other[0]->fImgSecretary)){
                        //     $profile_image2 = base_url("front_img/").$other[0]->fImgSecretary;
                        //     } else {
                        //         $profile_image2 = base_url("assets/frontend/images/user_no_img.jpg");
                        //     }
                            ?>
                        <img src="<?php if(isset($committee->fImgSecretary)){echo base_url().'/front_img/'.$committee->fImgSecretary;} else{echo base_url().'/assets/frontend/images/user_no_img.jpg';} ?>" alt="" class="d-block w-100 rounded-circle" data-aos="fade-down">
                          <div class="gray_text_div dean_des_div" style="margin-bottom: 0px;">
        
                            <blockquote class="blockquote">
                              <p class="sub_heading"><?php echo $other[0]->vSecretary; ?></p>
                            </blockquote>
                            <figcaption class="blockquote-footer" style="margin-bottom: 0px;">
                              Secretary
                            </figcaption>
                          </div>
                    </div>
    
                    <!-- =========== -->

                </div>

                <h1 class="sub_heading mb-3"><?php echo $other[0]->vSubtitle; ?></h1>

                <p>
                <?php echo $other[0]->tDescription; ?>
                </p>

                <div class="clearfix"></div>
                <br>

              </div>
              <div class="clearfix"></div>
              <br>

                <?php }
                            else{
                                echo "No data found";
                            }?>

            </div>

          </div>

        </div>

      </div>


  <!--=============================================-->
  <!--===================body====================-->