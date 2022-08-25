<header>
    <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php echo base_url("assets/frontend/"); ?>images/slider01.jpg) center top repeat;">
            <div class="container inner_page_top_heading">
                <div class="row ms-auto">
                    <h1 class="heading" data-aos="fade-up">HISTORY</h1>
                    <nav aria-label="breadcrumb" data-aos="fade-down">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url('about-us'); ?>">About Us</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url('history'); ?>">Faculty Information</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><b>History</b></li>
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

            <div style="padding-left: 15px;">

                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 wrap_img">
                    <div class="bgimg_div">
                        <img src="<?php echo base_url('front_img/').$history_data[0]->fImage; ?>" alt="" class="d-block w-100">
                    </div>
                </div>

                <h1 class="heading"><?php echo $history_data[0]->vTitle; ?></h1>
                <?php echo $history_data[0]->tContent; ?>

            </div>

        </div>

        <div class="clearfix"></div>
        <br>

        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">

            <div class="row ms-auto">
                <h1 class="heading mb-3">Former Deans</h1>


                <div class="row">

                    <?php foreach($former_deans_data as $former_dean) { ?>

                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 dean_div">
                        <img src="<?php echo base_url('front_img/').$former_dean->fImage; ?>" alt="" class="d-block w-100 rounded-circle" data-aos="fade-down">
                        <div class="gray_text_div dean_des_div">

                            <blockquote class="blockquote">
                                <p class="sub_heading"><?php echo $former_dean->vTitle.' '.$former_dean->vName; ?></p>
                            </blockquote>
                            <figcaption class="blockquote-footer" style="margin-bottom: 0px;">
                                <?php 
                                    // var_dump($former_dean->vTerm1);exit();
                                    if($former_dean->vTerm2 != "") { 
                                        echo '('.$former_dean->vTerm1.')' .' & '. '('.$former_dean->vTerm2.')';
                                    } else {
                                        echo '('.$former_dean->vTerm1.')';
                                    }
                                ?>
                            </figcaption>
                        </div>
                    </div>

                    <?php } ?>

                    <!-- =========== -->

                </div>

            </div>

        </div>

    </div>

</div>

<!-- mission section -->



<div class="clearfix"></div>
<br>