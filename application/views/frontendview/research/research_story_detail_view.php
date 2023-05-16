<header>
    <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php $pageBanner = get_innerpage_banner($this->uri->segment(1)); if($pageBanner !== false){ foreach($pageBanner as $banner){if($this->uri->segment(1) == $banner->vPageRoute){echo base_url().'front_img/'.$banner->fImage;}}}else{echo base_url().'/assets/frontend/images/slider01.jpg';}  ?> ) center top repeat;">
            <div class="container inner_page_top_heading">
                <div class="row ms-auto">
                    <h1 class="heading" data-aos="fade-up">Research Stories</h1>
                    <nav aria-label="breadcrumb" data-aos="fade-down">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('research-stories'); ?>">Research</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><b>Research Stories</b></li>
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

            <div class="row m-auto">

                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <img src="<?php echo base_url('front_img/').$research_story_detail[0]->fThumbnail; ?>" class="d-block w-100" alt="...">
                </div>

                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <?php 
                            $timestamp = strtotime($research_story_detail[0]->dRDate);
                            $date = date('d-M-Y', $timestamp);
                        ?>
                    <p style="margin-top: 0px; margin-bottom: 0px; color: #2c4f93;"><small><?php echo $date; ?></small></p>
                    <h1 class="sub_heading"><?php echo $research_story_detail[0]->vTitle; ?></h1>
                    
                    <p data-aos="fade-up">
              
                        <?php 
                          $str = $research_story_detail[0]->tContent;
                          $len = str_word_count($str);
                            
                          echo substr($research_story_detail[0]->tContent,0,930);
                      ?>
                    </p>
                </div>

                <div class="w-100 d-none d-md-block"></div>         <br>

                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <p data-aos="fade-up">
                        <?php
                            echo substr($research_story_detail[0]->tContent,930,2000);
                        ?>
                    </p>
                </div>


            </div>

        </div>

    </div>

</div>

<!-- news section -->

<div class="w-100 d-none d-md-block"></div>
<br>

<!-- sub news section -->
<div class="container">

    <div class="row">

        <h1 class="heading">Related News</h1>

        <div class="slider">
            <div class="owl-carousel">

                <?php foreach($research_stories as $story) { ?>

                <div class="slider-card">
                    <div class="news_div">

                        <div class="row">
                            <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                                <img src="<?php echo base_url('front_img/').$story->fThumbnail; ?>" class="d-block w-100" alt="...">
                            </div>

                            <div class="clearfix"></div>

                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <?php 
                                $timestamp = strtotime($story->dRDate);
                                $date = date('d-M-Y', $timestamp);
                             ?>
                                <p style="margin-top: 0px; margin-bottom: 0px; color: #2c4f93;">
                                    <small><?php echo $date; ?></small></p>
                                <h1 class="sub_heading"><?php echo $story->vTitle; ?></h1>
                                <p data-aos="fade-up">
                                    <?php echo substr($story->tContent, 0, 95).'...'; ?>
                                </p>
                                <!-- arrow link -->
                                <a class='animated-arrow' href=''>
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


        <!-- ============================== -->
        <div class="clearfix"></div>
        <!-- ============================== -->

    </div>

</div>
<!-- sub news section -->



<div class="w-100 d-none d-md-block"></div>