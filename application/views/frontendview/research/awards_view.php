<header>
    <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php echo base_url("assets/frontend/"); ?>images/slider01.jpg) center top repeat;">
            <div class="container inner_page_top_heading">
                <div class="row ms-auto">
                    <h1 class="heading" data-aos="fade-up">Annual Research Excellence Awards – 2018 -Faculty of Agriculture</h1>
                    <nav aria-label="breadcrumb" data-aos="fade-down">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url('awards') ?>">Research</a></li>
                            <!-- <li class="breadcrumb-item"><a href="#">Faculty Statistics</a></li> -->
                            <li class="breadcrumb-item active" aria-current="page"><b>Awards - 2018</b></li>
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

                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-8 col-12">

                    <!-- nav tabs btn section -->
                    <div class="nav flex-column nav-pills me-3 side_nav_btn" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">

                        <a href="<?php echo base_url('excellence-award') ?>">
                            <button class="nav-link">
                                CVCD Excellence Award
                            </button>
                        </a>

                        <a href="<?php echo base_url('president-award'); ?>">
                            <button class="nav-link">
                                Presidents’ Award
                            </button>
                        </a>

                        <a href="<?php echo base_url('awards'); ?>">
                            <button class="nav-link active">
                                Awards - 2018
                            </button>
                        </a>

                    </div>
                    <!-- nav tabs btn section -->

                </div>

                <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-8 col-sm-8 col-12">

                    <h1 class="heading"><?php echo $awards_data[0]->vTitle; ?></h1>
                    <?php echo $awards_data[0]->tContent; ?>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- mission section -->



<div class="w-100 d-none d-md-block"></div>
<br>
<br>