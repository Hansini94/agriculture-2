<header>
    <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php $pageBanner = get_innerpage_banner($this->uri->segment(2)); if($pageBanner !== false){ foreach($pageBanner as $banner){if($this->uri->segment(2) == $banner->vPageRoute){echo base_url().'front_img/'.$banner->fImage;}}}else{echo base_url().'/assets/frontend/images/slider01.jpg';}  ?> ) center top repeat;">
            <div class="container inner_page_top_heading">
                <div class="row ms-auto">
                    <h1 class="heading" data-aos="fade-up">Faculty Proposal</h1>
                    <nav aria-label="breadcrumb" data-aos="fade-down">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url('quality/functions-of-foaqac') ?>">Quality</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url('quality/ahead-project') ?>">Ahead Projects </a></li>
                            <li class="breadcrumb-item active" aria-current="page"><b>Faculty Proposal</b></li>
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
                    <div class="nav flex-column nav-pills me-3 side_nav_btn" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">

                        <?php
                            $count = 0;
                            foreach($ahead_project_list as $ahead_project) {

                                $aheadHeading = preg_replace('/\s+/', '-', $ahead_project->vMHeading);

                        ?>

                            <a href="<?php echo base_url('quality/ahead-project/').$aheadHeading; ?>">
                                <button class="nav-link <?php if($count == 0) { echo "active"; } ?>">
                                    <?php echo $ahead_project->vMHeading; ?>
                                </button>
                            </a>

                        <?php $count++; } ?>

                    </div>
                    <!-- nav tabs btn section -->

                </div>

                <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-8 col-sm-8 col-12">
                    <h1 class="heading mb-3"><?php echo $ahead_project_list[0]->vHeading; ?></h1>

                    <?php echo $ahead_project_list[0]->tContent; ?>

                </div>

                <div class="clearfix"></div>

            </div>

        </div>

    </div>

</div>


<!--=============================================-->
<!--===================body====================-->



<div class="w-100 d-none d-md-block"></div>
<br>