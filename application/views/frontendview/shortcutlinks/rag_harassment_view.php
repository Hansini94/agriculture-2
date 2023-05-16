<header>
    <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php $pageBanner = get_innerpage_banner($this->uri->segment(1)); if($pageBanner !== false){ foreach($pageBanner as $banner){if($this->uri->segment(1) == $banner->vPageRoute){echo base_url().'front_img/'.$banner->fImage;}}}else{echo base_url().'/assets/frontend/images/slider01.jpg';}  ?> ) center top repeat;">
            <div class="container inner_page_top_heading">
                <div class="row ms-auto">
                    <h1 class="heading" data-aos="fade-up">Rag & Harassment Complain Portal</h1>
                    <nav aria-label="breadcrumb" data-aos="fade-down">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><b>Rag & Harassment Complain Portal</b></li>
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

            <div class="row m-auto">

                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-4">
                    <?php echo $rag_harassment_data[0]->tContentRight; ?>

                    <br>
                    <div class="gray_text_div">

                        <img src="<?php echo base_url('assets/frontend/images/rag_black.png'); ?>" alt="" class="d-block float-start" style="margin-bottom: 20px;">

                        <blockquote class="blockquote" style="margin-bottom: 0px;">
                            <p class="sub_heading"> UGC Rag & Harassment Complain Portal</p>
                        </blockquote>
                        <!-- arrow link -->
                        <a class='animated-arrow' href='https://eugc.ac.lk/complaint-portal/' target="_blank">
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

                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-4">
                    <?php echo $rag_harassment_data[0]->tContentLeft; ?>


                    <br>
                    <div class="gray_text_div">

                        <img src="<?php echo base_url('assets/frontend/images/rag_black.png'); ?>" alt="" class="d-block float-start" style="margin-bottom: 20px;">

                        <blockquote class="blockquote" style="margin-bottom: 0px;">
                            <p class="sub_heading"> Faculty of Agriculture Rag & Harassment Complain Portal</p>
                        </blockquote>
                        <!-- arrow link -->
                        <a class='animated-arrow' href='<?php echo base_url('rag-complaint') ?>' target="_blank">
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

            </div>

        </div>

    </div>

</div>

<!-- mission section -->



<div class="w-100 d-none d-md-block"></div>