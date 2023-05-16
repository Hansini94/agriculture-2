<header>
    <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php $pageBanner = get_innerpage_banner($this->uri->segment(1)); if($pageBanner !== false){ foreach($pageBanner as $banner){if($this->uri->segment(1) == $banner->vPageRoute){echo base_url().'front_img/'.$banner->fImage;}}}else{echo base_url().'/assets/frontend/images/slider01.jpg';}  ?> ) center top repeat;">
            <div class="container inner_page_top_heading">
                <div class="row ms-auto">
                    <h1 class="heading" data-aos="fade-up">COVID - 19 Pandemic Information</h1>
                    <nav aria-label="breadcrumb" data-aos="fade-down">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><b>COVID - 19 Pandemic
                                    Information</b></li>
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

                <!-- ================== -->
                <!-- ================== -->
                <!-- tab section -->
                <div class="">

                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    CORONA Prevention Handbook
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                    <div class="row">
                                        <?php foreach($prevention_information as $info) { ?>
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                            <div class="gray_text_div">

                                                <img src="<?php echo base_url('assets/frontend/images/covid.png') ?>" alt="" class="d-block float-start"
                                                    style="margin-bottom: 20px;">

                                                <blockquote class="blockquote" style="margin-bottom: 0px;">
                                                    <p class="sub_heading"><?php echo $info->vTitle; ?></p>
                                                </blockquote>
                                                <!-- arrow link -->
                                                <a class='animated-arrow'
                                                    href='<?php echo base_url().'/front_img/'.$info->fFile; ?>'
                                                    target="_blank">
                                                    <span class='the-arrow -left'>
                                                        <span class='shaft'></span>
                                                    </span>
                                                    <span class='main'>
                                                        <span class='text'>
                                                            Click here
                                                        </span>
                                                        <span class='the-arrow -right'>
                                                            <span class='shaft'></span>
                                                        </span>
                                                    </span>
                                                </a>
                                                <!-- arrow link -->
                                            </div>
                                        </div>
                                        <?php } ?>

                                        <!-- =========== -->

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Prevent COVID-19 Poster
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                    <div class="row">

                                        <?php foreach($prevent_post_data as $info) { ?>

                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                            <div class="gray_text_div">

                                                <img src="<?php echo base_url('assets/frontend/images/covid.png') ?>" alt="" class="d-block float-start"
                                                    style="margin-bottom: 20px;">

                                                <blockquote class="blockquote" style="margin-bottom: 0px;">
                                                    <p class="sub_heading"><?php echo $info->vTitle; ?></p>
                                                </blockquote>
                                                <!-- arrow link -->
                                                <a class='animated-arrow'
                                                    href='<?php echo base_url().'/front_img/'.$info->fFile; ?>'
                                                    target="_blank">
                                                    <span class='the-arrow -left'>
                                                        <span class='shaft'></span>
                                                    </span>
                                                    <span class='main'>
                                                        <span class='text'>
                                                            Click here
                                                        </span>
                                                        <span class='the-arrow -right'>
                                                            <span class='shaft'></span>
                                                        </span>
                                                    </span>
                                                </a>
                                                <!-- arrow link -->
                                            </div>
                                        </div>

                                        <!-- =========== -->
                                        <?php } ?>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Prevent COVID-19 Leaflet
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                    <div class="row">
                                        <?php foreach($leaflet_data as $info) { ?>
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                            <div class="gray_text_div">

                                                <img src="<?php echo base_url('assets/frontend/images/covid.png') ?>" alt="" class="d-block float-start"
                                                    style="margin-bottom: 20px;">

                                                <blockquote class="blockquote" style="margin-bottom: 0px;">
                                                    <p class="sub_heading"><?php echo $info->vTitle; ?></p>
                                                </blockquote>
                                                <!-- arrow link -->
                                                <a class='animated-arrow'
                                                    href='<?php echo base_url().'/front_img/'.$info->fFile; ?>'
                                                    target="_blank">
                                                    <span class='the-arrow -left'>
                                                        <span class='shaft'></span>
                                                    </span>
                                                    <span class='main'>
                                                        <span class='text'>
                                                            Click here
                                                        </span>
                                                        <span class='the-arrow -right'>
                                                            <span class='shaft'></span>
                                                        </span>
                                                    </span>
                                                </a>
                                                <!-- arrow link -->
                                            </div>
                                        </div>

                                        <!-- =========== -->

                                        <?php } ?>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- tab section -->
                <!-- ================== -->
                <!-- ================== -->

                <?php foreach($pandemic_other_data as $info) { ?>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="gray_text_div">

                        <img src="<?php echo base_url('assets/frontend/images/covid.png') ?>" alt="" class="d-block float-start" style="margin-bottom: 20px;">

                        <blockquote class="blockquote" style="margin-bottom: 0px;">
                            <p class="sub_heading"><?php echo $info->vTitle; ?></p>
                        </blockquote>
                        <!-- arrow link -->
                        <a class='animated-arrow'
                            href='<?php echo base_url().'/front_img/'.$info->fFile; ?>'
                            target="_blank">
                            <span class='the-arrow -left'>
                                <span class='shaft'></span>
                            </span>
                            <span class='main'>
                                <span class='text'>
                                    Click here
                                </span>
                                <span class='the-arrow -right'>
                                    <span class='shaft'></span>
                                </span>
                            </span>
                        </a>
                        <!-- arrow link -->
                    </div>
                </div>

                <!-- =========== -->
                <?php } ?>

            </div>

        </div>

    </div>

</div>

<!-- mission section -->



<div class="w-100 d-none d-md-block"></div>
<br>