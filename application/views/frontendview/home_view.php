 <!--main slider start-->

 <!-- Full Page Image Background Carousel Header -->

 <?php if($main_slider_video[0]->cEnable == "Y") { ?>
 <!--video slider-->
    <video muted loop autoplay class="hidden-xs">
        <source src="<?php echo base_url("front_img/").$main_slider_video[0]->fVideo; ?>" type="video/mp4">
      </video>
  <!--video slider-->

<?php } else { ?>
    <!-- Start WOWSlider.com BODY section -->
    <div id="wowslider-container1" class="hidden-xs">
        <div class="ws_images">
            <ul>
                <?php
                    foreach($main_slider as $slider) {
                ?>
                <li>
                    <img src="<?php echo base_url("front_img").'/'.$slider->fImage; ?>" alt="slider"
                        class="pull-right" title="" id="wows1_<?php echo $slider->id; ?>" />  
                        <!-- <?php echo $slider->id ?> -->
                </li>
                <?php } ?>
            </ul>
        </div>

        <div class="ws_script" style="position:absolute;left:-99%"></div>
        <div class="ws_shadow"></div>
    </div>
<?php } ?>
 <script type="text/javascript" src="<?php echo base_url("assets/frontend/slider/engine1/wowslider.js"); ?>"></script>
 <script type="text/javascript" src="<?php echo base_url("assets/frontend/slider/engine1/script.js"); ?>"></script>
 <!-- End WOWSlider.com BODY section -->
 </div>
 <!-- top slider section -->

 <!-- mobile main slider -->
 <div id="myCarousel" class="carousel slide visible-xs" data-ride="carousel">
     <!-- Indicators -->
     <!-- <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol> -->

     <!-- Wrapper for slides -->
     <div class="carousel-inner">
         <?php 
            $count = 0;
            foreach ($mobile_slider as $slider) { 
                if($count == 0) {
                    $active = "active";
                } else {
                    $active = "";
                }
        ?>
         <div class="item <?php echo $active; ?>">
             <img src="<?php echo base_url("front_img").'/'.$slider->fImage; ?>" alt=""
                 class="img-responsive center-block">
         </div>
         <?php $count++; } ?>
     </div>
 </div>
 <!-- mobile main slider -->


 <!-- slider top shape section -->
 <div class="home_blue_shape_section">
     <!-- logo -->
     <a href="<?php echo base_url('home'); ?>"><img src="<?php echo base_url("assets/frontend/images/logo.svg"); ?>" alt=""
             class="img-responsive top_logo"></a>
     <!-- logo -->

     <!-- contact div -->
     <div class="home_top_contact_div">
         <p>
             <a href="tel:<?php echo $contact_us[0]->vTele; ?>"><?php echo $contact_us[0]->vTele; ?></a> |
             <a href="mailto:<?php echo $contact_us[0]->vEmail; ?>"><?php echo $contact_us[0]->vEmail; ?></a>
         </p>

         <!-- ==== -->

         <!-- socila media icon -->
         <p class="home_top_social_icon">
             <a href="<?php echo $contact_us[0]->vFacebook; ?>" class="fa fa-facebook"></a>
             <a href="<?php echo $contact_us[0]->vTwitter; ?>" class="fa fa-twitter"></a>
             <a href="<?php echo $contact_us[0]->vInstagram; ?>" class="fa fa-instagram"></a>
             <a href="<?php echo $contact_us[0]->vYoutube; ?>" class="fa fa-youtube"></a>
         </p>
         <!-- socila media icon -->
     </div>
     <!-- contact div -->
 </div>
 <!-- slider top shape section -->

 <!-- ============ -->

 <!-- slider top green shape section -->
 <div class="home_green_shape_section hidden-xs"></div>
 <!-- slider top green shape section -->



 <!--=============================================-->
 <!--===================header====================-->

 <br>
 <!--=============================================-->
 <!--===================body====================-->


 <!-- body sec_one start-->
 <!-- about img -->
 <img src="<?php echo base_url("assets/frontend/images/about01.png"); ?>" alt="" class="img-responsive home_about_img"
     data-aos="fade-right">
 <!-- about img -->

 <input type="hidden" name="language" id="language" class="language" value="<?php echo $this->uri->segment(1); ?>">

 <div class="col-lg-offset-4 col-lg-7 col-md-12 col-sm-12 col-xs-12 home_about_text_col">
     <h1 id="titleEng" class="heading"><?php echo $home_details->vTitle; ?></h1>
     <h1 id="titleChinese" class="heading"><?php echo $home_details->vTitleChinese; ?></h1>
     <div id="desc_eng"><p><?php echo $home_details->tDescription; ?></p></div>
     <div id="desc_chinese"><p><?php echo $home_details->tDescriptionChinese; ?></p></div>

     <div class="clearfix"></div>

     <!-- read more btn -->
     <div id="btnReadEng" class="button"><a href="<?php echo base_url('company-overview'); ?>" class="link">Read More</a></div>
     <div id="btnReadChinese" class="button"><a href="<?php echo base_url('company-overview/chinese'); ?>" class="link">阅读更多</a></div>
     <!-- read more btn -->

     <div class="clearfix"></div>

     <!-- profile btn section -->
     <div class="profile_btn_div">
         <button id="btnViewEngs" class="btn btn-primary spec_btn" data-aos="fade-up">View Company Profile</button>
        <button id="btnViewChinese" class="btn btn-primary spec_btn" data-aos="fade-down">查看我们的公司简介</button>
     </div>
     <!-- profile btn section -->

 </div>

 <!-- product section -->
 <div class="row product_section margin_auto">

     <!-- <div class="jarallax" style="background-image: url(images/product_bg.jpg); position: relative; z-index: 2;"> -->

     <div class="container">

         <div class="col-lg-offset-2 col-lg-10 col-md-offset-1 col-md-10 col-sm-12 col-xs-12">

             <div class="row">

                 <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                     <h1 class="heading">OUR PRODUCT CATEGORIES</h1>
                     <p><?php echo $home_details->tProductCatDesc; ?></p>
                     <br>
                     <a href="<?php echo base_url("products/cables"); ?>">
                        <div class="product_div bg_product_div_1" data-aos="fade-right">
                            <div class="product_div_1" style="background-image:url('front_img/<?php echo $product_category->fImageCable; ?>');"></div>

                            <div class="product_div_text">
                                <p style="text-transform: upperase;">Electric Cables</p>
                                <!-- read more btn -->
                                <div class="button">
                                    <a href="<?php echo base_url('product_categories') ?>" class="link">All Product</a>
                                </div>
                                <!-- read more btn -->
                            </div>

                        </div>
                    </a>
                 </div>

                 <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                     <div class="row">

                         <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 no_padding">

                                <a href="<?php echo base_url("products/enameled_winding_wires"); ?>">
                                    <div class="product_div bg_product_div_2" data-aos="fade-up">
                                        <div class="product_div_2" style="background-image:url('front_img/<?php echo $product_category->fImageEnameledWire; ?>');"></div>

                                        <div class="product_div_text">
                                            <p style="text-transform: upperase;">Enameled Winding</p>
                                            <!-- read more btn -->
                                            <div class="button">
                                                <a href="<?php echo base_url('product_categories') ?>" class="link">All Product</a>
                                            </div>
                                            <!-- read more btn -->
                                        </div>
                                    </div>
                                </a>

                             <div class="clearfix"></div>

                             <a href="<?php echo base_url("products/lightings"); ?>">
                                    <div class="product_div bg_product_div_3" data-aos="fade-down">
                                         <div class="product_div_3" style="background-image:url('front_img/<?php echo $product_category->fImageLighting; ?>');"></div>
                                        <div class="product_div_text">
                                            <p style="text-transform: upperase;">Lighting</p>
                                            <!-- read more btn -->
                                            <div class="button">
                                                <a href="<?php echo base_url('product_categories') ?>" class="link">All Product</a>
                                            </div>
                                            <!-- read more btn -->
                                        </div>
                                    </div>
                                </a>
                             
                              <div class="clearfix"></div>

                             <a href="<?php echo base_url("products/switchgears"); ?>">
                                    <div class="product_div bg_product_div_3" data-aos="fade-down">
                                        <div class="product_div_3" style="background-image:url('front_img/<?php echo $product_category->fImageSwitchgear; ?>');"></div>

                                        <div class="product_div_text">
                                            <p style="text-transform: upperase;">Switchgear</p>
                                            <!-- read more btn -->
                                            <div class="button">
                                                <a href="<?php echo base_url('product_categories') ?>" class="link">All Product</a>
                                            </div>
                                            <!-- read more btn -->
                                        </div>
                                    </div>
                                </a>

                         </div>

                         <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                             <a href="<?php echo base_url("products/switches-sockets"); ?>">
                                    <div class="product_div product_devicec_div bg_product_div_4" data-aos="fade-down">
                                         <div class="product_div_4" style="background-image:url('front_img/<?php echo $product_category->fImageSwitchSocket; ?>');"></div>

                                        <div class="product_div_text">
                                            <p style="text-transform: upperase;">Switches and Sockets</p>
                                            <!-- read more btn -->
                                            <div class="button">
                                                <a href="<?php echo base_url('product_categories') ?>" class="link">All Product</a>
                                            </div>
                                            <!-- read more btn -->
                                        </div>

                                    </div>

                                </a>
                             
                             <!--==========================-->
                             
                              <a href="<?php echo base_url("products/fans"); ?>">
                                    <div class="product_div product_devicec_div bg_product_div_5" data-aos="fade-down" style="margin-top: 0px;">
                                         <div class="product_div_5" style="background-image:url('front_img/<?php echo $product_category->fImageFan; ?>');"></div>

                                        <div class="product_div_text">
                                            <p style="text-transform: upperase;">Fan</p>
                                            <!-- read more btn -->
                                            <div class="button">
                                                <a href="<?php echo base_url('product_categories') ?>" class="link">All Product</a>
                                            </div>
                                            <!-- read more btn -->
                                        </div>

                                    </div>

                                </a>

                            <!--==========================-->

                           <a href="<?php echo base_url("products/other-products"); ?>">
                                 <div class="product_div product_devicec_div bg_product_div_5" data-aos="fade-down" style="margin-top: 0px;">
                                     <div class="product_div_5" style="background-image:url('front_img/<?php echo $product_category->fImageOtherCat; ?>');"></div>

                                     <div class="product_div_text">
                                         <p style="text-transform: upperase;">Other Products</p>
                                         <!-- read more btn -->
                                         <div class="button">
                                             <a href="<?php echo base_url('product-catalogue') ?>" class="link">All Product</a>
                                         </div>
                                         <!-- read more btn -->
                                     </div>

                                 </div>

                             </a>
                         </div>

                     </div>
                 </div>

             </div>

         </div>

     </div>
 </div>
 <!-- product section -->

 <!-- featured product and award section -->
 <div class="row award_section margin_auto bg_row" style="background-image: url(assets/frontend/images/award_bg.jpg);">

<div class="jarallax" style="background-image: url(assets/frontend/images/award_bg.jpg); position: relative; z-index: 2;">
    <br>
    <br>

    <div class="row margin_auto">

        <div class="row margin_auto">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align: center;">
                <h1 class="heading">featured products</h1>
                <p><?php echo $home_details->tFeaturedProDesc; ?></p>
            </div>
        </div>

        <div class="row margin_auto">
            <div class="carousel-wrap" data-aos="fade-up">
                <div class="owl-carousel owl-two owl-theme">
                    <?php foreach($featured_products as $product ) { ?>
                    <a href="<?php echo base_url('products/').$product->link; ?>">
                        <div class="item product_item">
                            <div class="product_img_div">
                                <?php if($product->fImage != "") { ?>
                                <img src="<?php echo base_url("front_img").'/'.$product->fImage; ?>" alt="" class="img-responsive center-block">
                                <?php } else { ?>
                                <img src="<?php echo base_url("assets/frontend/images/1200_800_no_image.png"); ?>" alt="" class="img-responsive center-block">
                                <?php } ?>
                            </div>
                            <p><?php echo $product->vTitle; ?></p>
                        </div>
                    </a>    
                    <?php } ?>                
                </div>
            </div>
        </div>

    </div>

    <div class="clearfix"></div>
    <br class="hidden-xs">
    <br class="hidden-xs">


    <!-- award item section -->
    <div class="row margin_auto hidden-sm hidden-xs">

        <div class="col-lg-offset-2 col-lg-10 col-md-offset-1 col-md-11 col-sm-12 col-xs-12 award_text_section">

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="position: relative; z-index: 9999;">
                <h1 class="heading" style="color: #283897;">ACHIEVEMENTS</h1>
                <p><?php echo $home_details->tAcheiveDesc; ?></p>
                <!-- read more btn -->
                <div class="button">
                    <a href="<?php echo base_url('awards'); ?>" class="link">Discover More</a>
                </div>
                <!-- read more btn -->
            </div>

        </div>

        <!-- award item section -->
        <div class="col-lg-offset-2 col-lg-10 col-md-offset-2 col-md-10 col-sm-12 col-xs-12 award_item_section">


            <div class="row">

                <div class="col-lg-offset-3 col-lg-8 col-md-offset-3 col-md-9 col-sm-12 col-xs-12">

                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 award_item_col award_item_col_1">
                        <a href="<?php echo base_url('awards'); ?>">
                            <div class="award_item" data-aos="fade-right">
                                <div class="product_img_div">
                                    <img src="<?php echo base_url("front_img").'/'.$awards[0]->fImageinner; ?>" alt="" class="img-responsive center-block">
                                </div>
                                <p><?php echo $awards[0]->vTitle;?></p>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 award_item_col award_item_col_2">
                        <a href="<?php echo base_url('awards'); ?>">
                            <div class="award_item" data-aos="fade-up">
                                <div class="product_img_div">
                                    <img src="<?php echo base_url("front_img").'/'.$awards[1]->fImageinner; ?>" alt="" class="img-responsive center-block">
                                </div>
                                <p><?php echo $awards[1]->vTitle;?></p>
                            </div>
                        </a>

                        <!-- ===== -->

                        <a href="<?php echo base_url('awards'); ?>">
                            <div class="award_item" data-aos="fade-down">
                                <div class="product_img_div">
                                    <img src="<?php echo base_url("front_img").'/'.$awards[2]->fImageinner; ?>" alt="" class="img-responsive center-block">
                                </div>
                                <p><?php echo $awards[2]->vTitle;?></p>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 award_item_col award_item_col_3">
                        <a href="<?php echo base_url('awards'); ?>">
                            <div class="award_item" data-aos="fade-up">
                                <div class="product_img_div">
                                    <img src="<?php echo base_url("front_img").'/'.$awards[3]->fImageinner; ?>" alt="" class="img-responsive center-block">
                                </div>
                                <p><?php echo $awards[3]->vTitle;?>
                                </p>
                            </div>
                        </a>

                        <!-- ===== -->

                        <a href="<?php echo base_url('awards'); ?>">
                            <div class="award_item" data-aos="fade-down">
                                <div class="product_img_div">
                                    <img src="<?php echo base_url("front_img").'/'.$awards[4]->fImageinner; ?>" alt="" class="img-responsive center-block">
                                </div>
                                <p><?php echo $awards[4]->vTitle;?></p>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 award_item_col award_item_col_4">
                        <a href="<?php echo base_url('awards'); ?>">
                            <div class="award_item" data-aos="fade-up">
                                <div class="product_img_div">
                                    <img src="<?php echo base_url("front_img").'/'.$awards[5]->fImageinner; ?>" alt="" class="img-responsive center-block">
                                </div>
                                <p><?php echo $awards[5]->vTitle;?></p>
                            </div>
                        </a>
                    </div>

                </div>

            </div>


        </div>
        <!-- award item section -->

    </div>
    <!-- award item section -->


    <br>
    <br>
    <br>

</div>


</div>
<!-- featured product and award section -->

    <!-- mobile award item section -->
    <div class="row margin_auto visible-sm visible-xs">

        <div class="col-md-12 col-sm-12 col-xs-12 award_text_section">

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="position: relative; z-index: 9999;">
                <h1 class="heading" style="color: #283897;">ACHIEVEMENTS</h1>
                <p><?php echo $home_details->tAcheiveDesc; ?></p>
                <!-- read more btn -->
                <div class="button">
                    <a class="link">Discover More</a>
                </div>
                <!-- read more btn -->
            </div>

            <div class="clearfix"></div>
            <br class="hidden-xs">
            <br class="hidden-xs">

            <!-- award item section -->
            <div class="col-md-12 col-sm-12 col-xs-12 award_item_section">

                <div class="row hidden-xs">

                    <div class="col-lg-offset-3 col-lg-8 col-md-offset-3 col-md-9 col-sm-12 col-xs-12">

                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 award_item_col award_item_col_1">
                            <a href="<?php echo base_url('awards'); ?>">
                                <div class="award_item" data-aos="fade-right">
                                    <div class="product_img_div">
                                        <img src="<?php echo base_url("front_img").'/'.$awards[0]->fImageinner; ?>" alt="" class="img-responsive center-block">
                                    </div>
                                    <p><?php echo $awards[0]->vTitle;?></p>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 award_item_col award_item_col_2">
                            <a href="<?php echo base_url('awards'); ?>">
                                <div class="award_item" data-aos="fade-up">
                                    <div class="product_img_div">
                                        <img src="<?php echo base_url("front_img").'/'.$awards[1]->fImageinner; ?>" alt="" class="img-responsive center-block">
                                    </div>
                                    <p><?php echo $awards[1]->vTitle;?></p>
                                </div>
                            </a>

                            <!-- ===== -->

                            <a href="<?php echo base_url('awards'); ?>">
                                <div class="award_item" data-aos="fade-down">
                                    <div class="product_img_div">
                                        <img src="<?php echo base_url("front_img").'/'.$awards[2]->fImageinner; ?>" alt="" class="img-responsive center-block">
                                    </div>
                                    <p><?php echo $awards[2]->vTitle;?></p>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 award_item_col award_item_col_3">
                            <a href="<?php echo base_url('awards'); ?>">
                                <div class="award_item" data-aos="fade-up">
                                    <div class="product_img_div">
                                        <img src="<?php echo base_url("front_img").'/'.$awards[3]->fImageinner; ?>" alt="" class="img-responsive center-block">
                                    </div>
                                    <p><?php echo $awards[3]->vTitle;?>
                                    </p>
                                </div>
                            </a>

                            <!-- ===== -->

                            <a href="<?php echo base_url('awards'); ?>">
                                <div class="award_item" data-aos="fade-down">
                                    <div class="product_img_div">
                                        <img src="<?php echo base_url("front_img").'/'.$awards[4]->fImageinner; ?>" alt="" class="img-responsive center-block">
                                    </div>
                                    <p><?php echo $awards[4]->vTitle;?></p>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 award_item_col award_item_col_4">
                            <a href="<?php echo base_url('awards'); ?>">
                                <div class="award_item" data-aos="fade-up">
                                    <div class="product_img_div">
                                        <img src="<?php echo base_url("front_img").'/'.$awards[5]->fImageinner; ?>" alt="" class="img-responsive center-block">
                                    </div>
                                    <p><?php echo $awards[5]->vTitle;?></p>
                                </div>
                            </a>
                        </div>

                    </div>

                </div>


                <!-- mobile award slider section -->
                <div class="row visible-xs">
                    <div class="carousel-wrap" data-aos="fade-up">
                        <div class="owl-carousel owl-two owl-theme">

                            <a href="<?php echo base_url('awards'); ?>">
                                <div class="item award_item">
                                    <div class="product_img_div">
                                        <img src="<?php echo base_url("front_img").'/'.$awards[0]->fImageinner; ?>" alt="" class="img-responsive center-block">
                                    </div>
                                    <p><?php echo $awards[0]->vTitle;?></p>
                                </div>
                            </a>

                            <a href="<?php echo base_url('awards'); ?>">
                                <div class="item award_item">
                                    <div class="product_img_div">
                                        <img src="<?php echo base_url("front_img").'/'.$awards[1]->fImageinner; ?>" alt="" class="img-responsive center-block">
                                    </div>
                                    <p><?php echo $awards[1]->vTitle;?></p>
                                </div>
                            </a>

                            <a href="<?php echo base_url('awards'); ?>">
                                <div class="item award_item">
                                    <div class="product_img_div">
                                        <img src="<?php echo base_url("front_img").'/'.$awards[3]->fImageinner; ?>" alt="" class="img-responsive center-block">
                                    </div>
                                    <p><?php echo $awards[2]->vTitle;?>
                                    </p>
                                </div>
                            </a>

                            <a href="<?php echo base_url('awards'); ?>">
                                <div class="item award_item">
                                    <div class="product_img_div">
                                        <img src="<?php echo base_url("front_img").'/'.$awards[4]->fImageinner; ?>" alt="" class="img-responsive center-block">
                                    </div>
                                    <p><?php echo $awards[3]->vTitle;?></p>
                                </div>
                            </a>

                            <a href="<?php echo base_url('awards'); ?>">
                                <div class="item award_item">
                                    <div class="product_img_div">
                                        <img src="<?php echo base_url("front_img").'/'.$awards[5]->fImageinner; ?>" alt="" class="img-responsive center-block">
                                    </div>
                                    <p><?php echo $awards[4]->vTitle;?></p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- mobile award slider section -->


            </div>
            <!-- award item section -->

        </div>

    </div>
    <!-- mobile award item section -->

    <div class="clearfix"></div>

    <!-- featured project section -->

    <div class="row margin_auto f_project_row">

        <div class="col-lg-offset-1 col-lg-11 col-md-12 col-sm-12 col-xs-12 f_project_slider_col">

            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 project_des_col white_bg_div">
                <h1 class="heading" style="color: #283897;" data-aos="fade-up">OUR featured projects</h1>
                <p style="color: #000000;" data-aos="fade-down"><?php echo $home_details->tFeaturedProjDesc; ?></p>
            </div>

            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 f_project_slider_col">


                <div class="row">
                    <div class="carousel-wrap" style="margin-top: 0px;">
                        <div class="owl-carousel owl-one owl-theme">
                            <?php foreach($projects as $project) { ?>
                            <a href="<?php if($project->cType == "O") { echo base_url('ongoing-projects/project-details/').$project->id; } else { echo base_url('completed-projects/project-details/').$project->id; } ?>">
                                <div class="project_des_div">
                                    <h1>
                                        <?php echo $project->vTitle; ?>
                                    </h1>
                                    <p>
                                    <?php echo substr($project->tDescription,0,90); ?>
                                    </p>
                                    <img src="<?php echo base_url("front_img").'/'.$project->fImage; ?>" alt="" class="img-responsive center-block">
                                </div>
                            </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- featured project section -->
    <div class="clearfix"></div>
    <br>
    <br>
    <br>
    <br>

    <!-- newx section -->

    <div class="container">

        <div class="row">

            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

                <div class="row margin_auto">

                    <div class="col-lg-6 col-md-6 col-sm-7 col-xs-12 visible-xs">
                        <h1 class="heading" style="margin-top: 0px;">NEWS & UPDATES</h1>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-7 col-xs-12 hidden-xs">
                        <h1 class="heading">NEWS & UPDATES</h1>
                        <br>
                        <br>
                        <div class="main_news_div white_bg_div" data-aos="fade-right">

                            <h1>
                               <?php echo $news[0]->vTitle; ?>
                            </h1>
                            <p style="color: #000000;">
                                <?php echo substr($news[0]->tDescription,0,150).'..'; ?>
                            </p>

                            <div class="clearfix"></div>

                            <!-- read more btn -->
                            <div class="button">
                                <a href="<?php echo base_url('news/').'news_detail/'.$news[0]->id; ?>" class="link" style="color: #000000;">Continue Reading</a>
                            </div>
                            <!-- read more btn -->

                        </div>
                    </div>

                    <!-- news slider section -->
                    <div class="col-lg-offset-5 col-lg-7 col-md-offset-5 col-md-7 col-sm-offset-6 col-sm-6 col-xs-12 main_news_slider_col">
                        <div id="myCarouselmaheen" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <?php
                                    $gallary_items = get_gallery_images($news[0]->id);
                                ?>
                            <ol class="carousel-indicators">
                                <?php 
                                    $count = 0;
                                    $mm=0;
                                    foreach($gallary_items as $gallary) { ?>
                                
                                
                                <li data-target="#myCarouselmaheen" data-slide-to="<?php echo $mm; ?>" class="<?php if($count==0) { echo 'active'; } ?>"></li>
                                <?php $count++; $mm++; } ?>
                                
                                
                            </ol>
                                
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <?php 
                                    $count = 0;
                                    foreach($gallary_items as $gallary) {
                                        if($count == 0) {
                                            $active = "active";
                                        } else {
                                            $active = "";
                                        }
                                ?>
                                <div class="item <?php echo $active; ?>">
                                    <img src="<?php echo base_url("front_img").'/'.$gallary->fImage; ?>" alt="" class="img-responsive center-block">
                                </div>
                                <?php $count++; } ?>
                            </div>
                        </div>
                    </div>
                    <!-- news slider section -->

                    <div class="col-lg-6 col-md-6 col-sm-7 col-xs-12 visible-xs">

                        <div class="main_news_div" data-aos="fade-right">

                            <h1>
                                <?php echo $news[0]->vTitle; ?>
                            </h1>
                            <p style="color: #000000;">
                                <?php echo substr($news[0]->tDescription,0,150); ?>
                            </p>

                            <div class="clearfix"></div>

                            <!-- read more btn -->
                            <div class="button">
                                <a href="<?php echo base_url('news/').'news_detail/'.$news[0]->id; ?>" class="link" style="color: #000000;">Continue Reading</a>
                            </div>
                            <!-- read more btn -->

                        </div>
                    </div>

                </div>

            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 home_sub_news_main_col">

                <?php foreach($latest_news as $news_latest) { ?>

                    <a href="<?php echo base_url('news/').'news_detail/'.$news_latest->id; ?>">
                        <div class="sub_news_col hover-underline-animation" data-aos="fade-up">
                            <h1>
                                <?php echo $news_latest->vTitle; ?>
                            </h1>
                            <p>
                            <?php echo substr($news_latest->tDescription,0,150).'..'; ?>
                            </p>
                            <img src="<?php echo base_url("assets/frontend/images/arrow.png"); ?>" alt="" class="img-responsive pull-right sub_news_arrow">
                        </div>
                    </a>

                <?php } ?>

                <!-- read more btn -->
                <div class="sub_news_col_btn">
                    <div class="button">
                        <a href="<?php echo base_url('news/view'); ?>" class="link">View All</a>
                    </div>
                </div>
                <!-- read more btn -->

            </div>

        </div>

    </div>

    <!-- newx section -->

    <div class="clearfix"></div>
    <br>
    <br>

    <div class="clearfix"></div>

    <!--=============================================-->
    <!--=============================================-->

    <!-- club section -->
    <div class="row club_section margin_auto">

        <div class="container">

            <div class="col-lg-offset-1 col-lg-11 col-md-offset-1 col-md-11 col-sm-12 col-xs-12">

                <div class="row">

                    <div class="col-lg-6 col-md-7 col-sm-9 col-xs-12 club_intro_div white_bg_div">
                        <h1 class="heading" style="color: #283897;" data-aos="fade-right">ELECTRICIAN CLUB</h1>
                        <!--<a href="http://eclub.kelanicables.com/" target="_blank" class="btn btn-primary spec_btn" data-aos="fade-up">Login</a>-->
                        <?php echo substr($electrician_club_content[0]->tDescription,0,140); ?>
  
                        <!-- read more btn -->

                        <a href="http://eclub.kelanicables.com/" class="link" style="color: #000000;" target="_blank"><button class="btn btn-primary spec_btn" data-aos="fade-up">LOGIN</button></a>
                        <a href="<?php echo base_url('electrician-club'); ?>" class="link" style="color: #000000;"><button class="btn btn-primary spec_btn" data-aos="fade-down">Discover More</button></a>
                        <!--<a href="<?php echo base_url('electrician-club'); ?>">-->
                        <!--    <div class="button" style="float: right;">-->
                        <!--        <a href="<?php echo base_url('electrician-club'); ?>" class="link" style="color: #000000;">Discover More</a>-->
                        <!--    </div>-->
                        <!--</a>-->
                        <!-- read more btn -->

                        <!-- club elec -->
                        <img src="<?php echo base_url("assets/frontend/images/club_elec.png"); ?>" alt="" class="img-responsive club_elec_img" data-aos="fade-down">
                        <!-- club elec -->
                    </div>

                </div>

            </div>

            <div class="clearfix"></div>
            <br>
            <br>

            <!-- banner section -->
            <div class="row">

                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <img src="<?php echo base_url("front_img").'/'.$research_development[0]->fImage4; ?>" alt="" class="img-responsive center-block" data-aos="fade-up">
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <img src="<?php echo base_url("front_img").'/'.$research_development[0]->fImage5; ?>"` alt="" class="img-responsive center-block" data-aos="fade-down">
                </div>

            </div>
            <!-- banner section -->

        </div>

    </div>
    <!-- club section -->

<!-- Messenger Chat plugin Code -->
    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function() {
        FB.init({
        xfbml : true,
        version : 'v10.0'
        });
        };
        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- Your Chat plugin code -->
    <div class="fb-customerchat"
    attribution="biz_inbox"
    page_id="121948475106">
    </div>

<!-- Messenger Chat plugin Code -->


        <!--=============================================-->
    <!--===================body====================-->

<script type="text/javascript">
    $(document).ready(function() {

        var language = $('#language').val();

        if(language == "chinese" ) {

            $('#titleChinese').show();
            $('#desc_chinese').show();
            $('#btnReadChinese').show();
            $('#btnViewEngs').show();

            $('#titleEng').hide();
            $('#desc_eng').hide();
            $('#btnReadEng').hide();
            $('#btnViewChinese').hide();

        } else {

            $('#titleEng').show();
            $('#desc_eng').show();
            $('#btnReadEng').show();
            $('#btnViewChinese').show();

            $('#titleChinese').hide();
            $('#desc_chinese').hide();
            $('#btnReadChinese').hide();
            $('#btnViewEngs').hide();
        }


        $('#btnViewChinese').on('click', function(){
                $('#titleEng').hide();
                $('#desc_eng').hide();
                $('#btnReadEng').hide();
                $('#btnViewChinese').hide();

                $('#titleChinese').slideDown( 800 ).delay( 100 ).fadeIn( 400 ).show();
                $('#desc_chinese').slideUp( 800 ).delay( 100 ).fadeIn( 400 ).show();
                $('#btnReadChinese').slideUp( 800 ).delay( 100 ).fadeIn( 400 ).show();
                $('#btnViewEngs').slideUp( 800 ).delay( 100 ).fadeIn( 400 ).show();
        });

        $('#btnViewEngs').on('click', function(){
            $('#titleChinese').hide();
            $('#desc_chinese').hide();
            $('#btnReadChinese').hide();
            $('#btnViewEngs').hide();

            $('#titleEng').slideDown( 800 ).delay( 100 ).fadeIn( 400 ).show();
            $('#desc_eng').slideUp( 800 ).delay( 100 ).fadeIn( 400 ).show();
            $('#btnReadEng').slideUp( 800 ).delay( 100 ).fadeIn( 400 ).show();
            $('#btnViewChinese').slideUp( 800 ).delay( 100 ).fadeIn( 400 ).show();


        });
    });
</script>
