<header>
    <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php $pageBanner = get_innerpage_banner($this->uri->segment(1)); if($pageBanner !== false){ foreach($pageBanner as $banner){if($this->uri->segment(1) == $banner->vPageRoute){echo base_url().'front_img/'.$banner->fImage;}}}else{echo base_url().'/assets/frontend/images/slider01.jpg';}  ?> ) center top no-repeat;">
            <div class="container inner_page_top_heading">
                <div class="row ms-auto">
                    <h1 class="heading" data-aos="fade-up">Faculty Organization</h1>
                    <nav aria-label="breadcrumb" data-aos="fade-down">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url('about-us'); ?>">About Us</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url('faculty-organization') ?>">Faculty Information</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><b>Faculty Organization</b></li>
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

                <img src="<?php echo base_url('front_img/').$faculty_org_data[0]->fMap; ?>" alt="" class="dd-block w-100">

                <div class="clearfix"></div>
                <br>

                <div class="gray_text_div dean_des_div">
                    <p class="mb-1"><b>Faculty Sub Committees</b></p>
                    <?php echo $faculty_org_data[0]->tSubComContent; ?>
                </div>

                <div class="gray_text_div dean_des_div">
                    <p class="mb-1"><b>Other Units / Service</b></p>
                    <?php echo $faculty_org_data[0]->tOtheruniContent; ?>
                </div>

            </div>

        </div>

    </div>

</div>

<!-- mission section -->



<div class="clearfix"></div>
<br>
<br>