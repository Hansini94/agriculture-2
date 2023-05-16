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
                    <img src="<?php echo base_url('front_img/').$research_story_main[0]->fThumbnail; ?>" class="d-block w-100" alt="...">
                </div>

                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <?php 
                        $timestamp = strtotime($research_story_main[0]->dRDate);
                        $date = date('d-M-Y', $timestamp);
                    ?>
                    <p style="margin-top: 0px; margin-bottom: 0px; color: #2c4f93;"><small><?php echo $date; ?></small></p>
                    <h1 class="sub_heading"><?php echo $research_story_main[0]->vTitle; ?></h1>
                    <p data-aos="fade-up">
                    <?php 
                        function trimtext($data, $limit) {
                            $arr = explode(" ", $data);
                            $new_arr = array_slice($arr, 0, $limit);
                            return implode(" ", $new_arr);
                        }
                        
                        // $test = 'This is a very very very long words here blablabla blablabla blablabla  test';
                        echo trimtext($research_story_main[0]->tContent, 140);
                    // echo $research_story_main[0]->tContent;    
                    ?>
                    </p>
                    <!-- arrow link -->
                    <a class='animated-arrow' href='<?php 
                                                            $storyTitle = str_replace(' ', '-', $research_story_main[0]->vTitle);
                                                            echo base_url('research-stories/story-detail/').$storyTitle; 
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

</div>

<!-- news section -->

<div class="w-100 d-none d-md-block"></div>
<br>

<!-- sub news section -->
<div class="container">

    <div class="row">

        <?php 
            $clearfix = 0;
            foreach($research_stories as $research_story) {
            $clearfix++;
        ?>

        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
            <div class="news_div">

                <div class="row">
                    <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                        <img src="<?php echo base_url('front_img/').$research_story->fThumbnail; ?>" class="d-block w-100" alt="...">
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <?php 
                            $timestamp = strtotime($research_story->dRDate);
                            $date = date('d-M-Y', $timestamp);
                        ?>
                        <p style="margin-top: 0px; margin-bottom: 0px; color: #2c4f93;"><small><?php echo $date; ?></small></p>
                        <h1 class="sub_heading"><?php echo $research_story->vTitle; ?></h1>
                            <?php echo substr($research_story->tContent, 0, 200).'...'; ?>

                            <br><br>
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

        <?php if($clearfix==3) { $clearfix=0; echo "<div class='clearfix'></div>"; } } ?>

    </div>

    <div class="row">

        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

            <!-- pagination -->
            <nav class="float-end">
                <ul class="pagination" style="padding-left: 0px !important;">
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
                </ul>
            </nav>
            <!-- pagination -->

        </div>

    </div>

</div>
<!-- sub news section -->



<div class="w-100 d-none d-md-block"></div>
<br>