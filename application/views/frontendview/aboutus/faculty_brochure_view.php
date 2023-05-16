<header>
    <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php $pageBanner = get_innerpage_banner($this->uri->segment(1)); if($pageBanner !== false){ foreach($pageBanner as $banner){if($this->uri->segment(1) == $banner->vPageRoute){echo base_url().'front_img/'.$banner->fImage;}}}else{echo base_url().'/assets/frontend/images/slider01.jpg';}  ?> ) center top no-repeat;">
            <div class="container inner_page_top_heading">
                <div class="row ms-auto">
                    <h1 class="heading" data-aos="fade-up">Faculty Brochure</h1>
                    <nav aria-label="breadcrumb" data-aos="fade-down">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url('about-us'); ?>">About Us</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><b>Faculty Brochure</b></li>
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


<!-- mission section -->

<div class="container">

    <div class="row">

        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">

            <div class="row ms-auto">
                <h1 class="heading"><?php echo $faculty_brochure_data[0]->vTitle; ?></h1>
                <?php echo $faculty_brochure_data[0]->tContent; ?>

                <div class="clearfix"></div>

                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-5 col-12">

                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <?php 
                                $c=0;
                                foreach($brochure_top_images as $topImg) {
                                    if($c == 0) {
                                        $active = "active";
                                    } else {
                                        $active = "";
                                    }
                            ?>
                            <div class="carousel-item <?php echo $active; ?>" style="height: auto; min-height: inherit;">
                                <div class="bgimg_div">
                                    <img src="<?php echo base_url('front_img/').$topImg->fImage; ?>" alt="" class="dd-block w-100">
                                </div>
                            </div>
                            <?php $c++; } ?>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                </div>

                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7 col-sm-7 col-12">
                    <h1 class="sub_heading"><?php echo $faculty_brochure_data[0]->vResTitle; ?></h1>
                    <?php echo $faculty_brochure_data[0]->tResContent; ?>
                </div>

            </div>

        </div>

        <div class="clearfix"></div>
        <br>

        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">

            <div class="row ms-auto">
                <h1 class="sub_heading mb-3"><?php echo $faculty_brochure_data[0]->vFeatureTitle; ?></h1>
                <?php echo $faculty_brochure_data[0]->tFeatureContent; ?>
            </div>

        </div>

        <div class="clearfix"></div>
        <br>

        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">

            <div class="row ms-auto">
                <h1 class="sub_heading mb-3"><?php echo $faculty_brochure_data[0]->vProspectTitle; ?></h1>
                <?php echo $faculty_brochure_data[0]->tProspectContent; ?>
            </div>

        </div>

        <div class="clearfix"></div>
        <br>

        <div class="row ms-auto">

            <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7 col-sm-7 col-12">
                <h1 class="sub_heading"><?php echo $faculty_brochure_data[0]->vResearchTitle; ?></h1>
                <?php echo $faculty_brochure_data[0]->tReseachContent; ?>
            </div>


            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-5 col-12">
                <div id="carouselExampleIndicators02" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php 
                            $c=0;
                            foreach($brochure_bottom_images as $bottomImg) {
                                if($c == 0) {
                                    $active = "active";
                                } else {
                                    $active = "";
                                }
                            ?>
                        <div class="carousel-item <?php echo $active; ?>" style="height: auto; min-height: inherit;">
                            <div class="bgimg_div">
                                <img src="<?php echo base_url('front_img/').$bottomImg->fImage; ?>" alt="" class="d-block w-100">
                            </div>
                        </div>
                        <?php $c++; } ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators02"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators02"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- mission section -->



<div class="clearfix"></div>
<br>
<br>