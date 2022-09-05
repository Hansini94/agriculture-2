<header>
    <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php echo base_url("assets/frontend/"); ?>images/slider01.jpg) center top repeat;">
            <div class="container inner_page_top_heading">
                <div class="row ms-auto">
                    <h1 class="heading" data-aos="fade-up">Maps & Directions</h1>
                    <nav aria-label="breadcrumb" data-aos="fade-down">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url('about-us'); ?>">About Us</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><b>Maps & Directions</b></li>
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

                <h1 class="heading">Faculty Map</h1>

                <img src="<?php echo base_url('front_img/').$faculty_direction_data->fFacultyMap; ?>" alt="" class="dd-block w-100">

                <div class="clearfix"></div>
                <br>

                <h1 class="heading">Administrative Building</h1>

                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <a href="<?php echo base_url('front_img/').$faculty_direction_data->fGrndFlrMap; ?>" data-toggle="lightbox" data-gallery="example-gallery" target="_blank">
                        <img src="<?php echo base_url('front_img/').$faculty_direction_data->fGrndFlrMap; ?>" class="img-fluid">
                    </a>
                </div>

                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <a href="<?php echo base_url('front_img/').$faculty_direction_data->fFstFlrMap; ?>" data-toggle="lightbox" data-gallery="example-gallery" target="_blank">
                        <img src="<?php echo base_url('front_img/').$faculty_direction_data->fFstFlrMap; ?>" class="img-fluid">
                    </a>
                </div>

                <div
                    class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-6 offset-md-3 col-sm-12">
                    <a href="<?php echo base_url('front_img/').$faculty_direction_data->fSecFlrMap; ?>" data-toggle="lightbox" data-gallery="example-gallery" target="_blank">
                        <img src="<?php echo base_url('front_img/').$faculty_direction_data->fSecFlrMap; ?>" class="img-fluid">
                    </a>
                </div>

            </div>

        </div>

    </div>

</div>

<!-- mission section -->



<div class="clearfix"></div>
<br>
<br>