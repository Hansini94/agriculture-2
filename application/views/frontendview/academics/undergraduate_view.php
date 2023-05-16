<header>
    <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php $pageBanner = get_innerpage_banner($this->uri->segment(1)); if($pageBanner !== false){ foreach($pageBanner as $banner){if($this->uri->segment(1) == $banner->vPageRoute){echo base_url().'front_img/'.$banner->fImage;}}}else{echo base_url().'/assets/frontend/images/slider01.jpg';}  ?> ) center top no-repeat;">
            <div class="container inner_page_top_heading">
                <div class="row ms-auto">
                    <h1 class="heading" data-aos="fade-up">Undergraduate Programmes</h1>
                    <nav aria-label="breadcrumb" data-aos="fade-down">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url('undergraduate-programme'); ?>">Academic</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url('undergraduate-programme'); ?>">Academic Programmes </a></li>
                            <li class="breadcrumb-item active" aria-current="page"><b>Undergraduate Programmes</b></li>
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

                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="padding-left: 0px !important;">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">
                            <p>BSc Agtech & Mgt</p>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="false">
                            <p>Bsc ASF</p>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-fst" type="button" role="tab" aria-controls="pills-fst"
                            aria-selected="false">
                            <p>Bsc FST</p>
                        </button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab">

                        <h1 class="heading mb-3"><?php echo $undergraduate_agtech_data[0]->vHeading; ?></h1>

                        <div class="row">

                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <img src="<?php echo base_url('front_img/').$undergraduate_agtech_data[0]->fFigure1; ?>" alt="" class="d-block w-100" data-aos="fade-down">
                                <p><?php echo $undergraduate_agtech_data[0]->vTitleFigure1; ?></p>
                            </div>

                            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12">
                                <p><?php echo $undergraduate_agtech_data[0]->tContent1; ?></p>
                            </div>

                        </div>

                        <?php echo $undergraduate_agtech_data[0]->tContent2; ?>

                        <div class="clearfix"></div>
                        <br>

                        <div class="row">

                            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-12">
                                <img src="<?php echo base_url('front_img/').$undergraduate_agtech_data[0]->fFigure2; ?>" alt="" class="d-block w-100" data-aos="fade-down">
                                <p><?php echo $undergraduate_agtech_data[0]->vTitleFigure2; ?></p>
                            </div>

                            <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7 col-sm-12">
                                <?php echo $undergraduate_agtech_data[0]->tContent3; ?>

                            </div>

                        </div>

                        <div class="clearfix"></div>
                        <br>

                        <?php echo $undergraduate_agtech_data[0]->tCoreProStructure; ?>

                        <div class="clearfix"></div>
                        <br>

                        <?php echo $undergraduate_agtech_data[0]->tCoreProSequence; ?>

                        <div class="clearfix"></div>
                        <br>

                        <?php echo $undergraduate_agtech_data[0]->tAdvProStructure; ?>
                        <!-- table -->

                        <div class="clearfix"></div>
                        <br>

                        <?php echo $undergraduate_agtech_data[0]->tAdvProModule; ?>
                        <!-- table -->

                        <div class="clearfix"></div>
                        <br>

                        <div class="row">
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                <div class="gray_text_div">

                                    <blockquote class="blockquote" style="margin-bottom: 0px;">
                                        <p>Document</p>
                                    </blockquote>
                                    <!-- arrow link -->
                                    <a class='animated-arrow' href='<?php echo base_url('front_img/').$undergraduate_agtech_data[0]->fPdf; ?>' target="_blank">
                                        <span class='the-arrow -left'>
                                            <span class='shaft'></span>
                                        </span>
                                        <span class='main'>
                                            <span class='text'>
                                                Click here to Download
                                            </span>
                                            <span class='the-arrow -right'>
                                                <span class='shaft'></span>
                                            </span>
                                        </span>
                                    </a>
                                    <!-- arrow link -->

                                </div>
                            </div>

                            <!-- ============== -->
                        </div>

                        <div class="clearfix"></div>
                        <br>
                        <br>

                        <?php echo $undergraduate_agtech_data[0]->tCalendarDate; ?>

                        <div class="clearfix"></div>
                        <br>


                        <!-- ================== -->
                        <!-- ================== -->
                        <!-- tab section -->
                        <div class="">

                            <div class="accordion" id="accordionExample">
                                <?php 
                                $count = 0;
                                foreach($agtech_programme_details as $programme_detail) { ?>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne_<?php echo $programme_detail->id; ?>">
                                            <button class="accordion-button <?php if($count != 0) { echo "collapsed"; } ?>" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne_<?php echo $programme_detail->id; ?>" aria-expanded="<?php if($count == 0) { echo "true"; } else { echo "false"; } ?>"
                                                aria-controls="collapseOne_<?php echo $programme_detail->id; ?>">
                                                <?php echo $programme_detail->vHeading; ?>
                                            </button>
                                        </h2>
                                        <div id="collapseOne_<?php echo $programme_detail->id; ?>" class="accordion-collapse collapse <?php if($count == 0){ echo "show"; } ?>"
                                            aria-labelledby="headingOne_<?php echo $programme_detail->id; ?>" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <?php echo $programme_detail->tContent; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php $count++; } ?>
                            </div>

                        </div>
                        <!-- tab section -->
                        <!-- ================== -->
                        <!-- ================== -->

                        <div class="clearfix"></div>
                        <br>

                        <!-- Scholarships section -->

                        <div class="row">

                            <h1 class="heading">Scholarships & Medals at Convocation </h1>

                            <br><br>

                            <?php foreach($scholarship_agtech_details as $scholarship_detail) { ?>
                            
                                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">

                                    <div class="row m-auto">

                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                            <img src="<?php echo base_url('front_img/').$scholarship_detail->fImage; ?>" class="d-block w-100 mb-4" alt="...">
                                        </div>

                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                            <h1 class="sub_heading mb-3"><?php echo $scholarship_detail->vHeading; ?></h1>
                                            <?php echo $scholarship_detail->tContent; ?>

                                        </div>

                                    </div>
                                    <br>

                                </div>

                            <?php } ?>

                        </div>

                        <!-- Scholarships section -->


                    </div>

                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                        <h1 class="heading mb-3"><?php echo $undergraduate_asf_data[0]->vHeading; ?></h1>

                        <?php echo $undergraduate_asf_data[0]->tIntroduction; ?>

                        <div class="clearfix"></div>
                        <br>

                        <?php echo $undergraduate_asf_data[0]->tContent1; ?>

                        <div class="clearfix"></div>
                        <br>


                        <?php echo $undergraduate_asf_data[0]->tContent2; ?>


                        <div class="clearfix"></div>
                        <br>

                        <?php echo $undergraduate_asf_data[0]->tContent3; ?>

                        <div class="row">
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                <div class="gray_text_div">

                                    <blockquote class="blockquote" style="margin-bottom: 0px;">
                                        <p>Document</p>
                                    </blockquote>
                                    <!-- arrow link -->
                                    <a class='animated-arrow' href='<?php echo base_url('front_img/').$undergraduate_asf_data[0]->fPdf; ?>' target="_blank">
                                        <span class='the-arrow -left'>
                                            <span class='shaft'></span>
                                        </span>
                                        <span class='main'>
                                            <span class='text'>
                                                Click here to Download
                                            </span>
                                            <span class='the-arrow -right'>
                                                <span class='shaft'></span>
                                            </span>
                                        </span>
                                    </a>
                                    <!-- arrow link -->

                                </div>
                            </div>

                            <!-- ============== -->
                        </div>

                        <div class="clearfix"></div>
                        <br>
                        <br>

                        <?php echo $undergraduate_asf_data[0]->tCalendarDate; ?>
                        <div class="clearfix"></div>
                        <br>


                        <!-- ================== -->
                        <!-- ================== -->
                        <!-- tab section -->
                        <div class="">

                            <div class="accordion" id="accordionExample">
                                <?php 
                                $countAsf = 0;
                                foreach($asf_programme_details as $programme_detail) { ?>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne_<?php echo $programme_detail->id; ?>">
                                            <button class="accordion-button <?php if($countAsf != 0) { echo "collapsed"; } ?>" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne_<?php echo $programme_detail->id; ?>" aria-expanded="<?php if($countAsf == 0) { echo "true"; } else { echo "false"; } ?>"
                                                aria-controls="collapseOne_<?php echo $programme_detail->id; ?>">
                                                <?php echo $programme_detail->vHeading; ?>
                                            </button>
                                        </h2>
                                        <div id="collapseOne_<?php echo $programme_detail->id; ?>" class="accordion-collapse collapse <?php if($countAsf == 0){ echo "show"; } ?>"
                                            aria-labelledby="headingOne_<?php echo $programme_detail->id; ?>" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <?php echo $programme_detail->tContent; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php $countAsf++; } ?>
                            </div>

                        </div>
                        <!-- tab section -->
                        <!-- ================== -->
                        <!-- ================== -->

                        <!-- Scholarships section -->

                        <div class="row">

                            <h1 class="heading">Scholarships & Medals at Convocation </h1>

                            <br><br>

                            <?php foreach($scholarship_asf_details as $scholarship_detail) { ?>

                                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">

                                    <div class="row m-auto">

                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                            <img src="<?php echo base_url('front_img/').$scholarship_detail->fImage; ?>" class="d-block w-100 mb-4" alt="...">
                                        </div>

                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                            <h1 class="sub_heading mb-3"><?php echo $scholarship_detail->vHeading; ?></h1>
                                            <?php echo $scholarship_detail->tContent; ?>

                                        </div>

                                    </div>
                                    <br>

                                </div>

                            <?php } ?>

                        </div>

                        <!-- Scholarships section -->

                    </div>

                    <div class="tab-pane fade" id="pills-fst" role="tabpanel" aria-labelledby="pills-fst-tab">

                        <h1 class="heading mb-3"><?php echo $undergraduate_fst_data[0]->vHeading; ?></h1>

                        <?php echo $undergraduate_fst_data[0]->tIntroduction; ?>

                        <div class="clearfix"></div>
                        <br>

                        <?php echo $undergraduate_fst_data[0]->tContent1; ?>

                        <div class="row">
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                <div class="gray_text_div">

                                    <blockquote class="blockquote" style="margin-bottom: 0px;">
                                        <p>Document</p>
                                    </blockquote>
                                    <!-- arrow link -->
                                    <a class='animated-arrow' href='<?php echo base_url('front_img/').$undergraduate_fst_data[0]->fPdf; ?>' target="_blank">
                                        <span class='the-arrow -left'>
                                            <span class='shaft'></span>
                                        </span>
                                        <span class='main'>
                                            <span class='text'>
                                                Click here to Download
                                            </span>
                                            <span class='the-arrow -right'>
                                                <span class='shaft'></span>
                                            </span>
                                        </span>
                                    </a>
                                    <!-- arrow link -->

                                </div>
                            </div>

                            <!-- ============== -->
                        </div>

                        <div class="clearfix"></div>
                        <br>
                        <br>

                        <?php echo $undergraduate_fst_data[0]->tCalendarDate; ?>

                        <div class="clearfix"></div>
                        <br>


                        <!-- ================== -->
                        <!-- ================== -->
                        <!-- tab section -->
                        <div class="">

                            <div class="accordion" id="accordionExample">
                                <?php 
                                $countFst = 0;
                                foreach($fst_programme_details as $programme_detail) { ?>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne_<?php echo $programme_detail->id; ?>">
                                            <button class="accordion-button <?php if($countFst != 0) { echo "collapsed"; } ?>" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne_<?php echo $programme_detail->id; ?>" aria-expanded="<?php if($countFst == 0) { echo "true"; } else { echo "false"; } ?>"
                                                aria-controls="collapseOne_<?php echo $programme_detail->id; ?>">
                                                <?php echo $programme_detail->vHeading; ?>
                                            </button>
                                        </h2>
                                        <div id="collapseOne_<?php echo $programme_detail->id; ?>" class="accordion-collapse collapse <?php if($countFst == 0){ echo "show"; } ?>"
                                            aria-labelledby="headingOne_<?php echo $programme_detail->id; ?>" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <?php echo $programme_detail->tContent; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php $countFst++; } ?>
                            </div>

                        </div>
                        <!-- tab section -->
                        <!-- ================== -->
                        <!-- ================== -->

                        <div class="clearfix"></div>
                        <br>



                        <!-- Scholarships section -->

                        <div class="row">

                            <h1 class="heading">Scholarships & Medals at Convocation </h1>

                            <br><br>

                            <?php foreach($scholarship_fst_details as $scholarship_detail) { ?>

                                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">

                                    <div class="row m-auto">

                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                            <img src="<?php echo base_url('front_img/').$scholarship_detail->fImage; ?>" class="d-block w-100 mb-4" alt="...">
                                        </div>

                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                            <h1 class="sub_heading mb-3"><?php echo $scholarship_detail->vHeading; ?></h1>
                                            <?php echo $scholarship_detail->tContent; ?>

                                        </div>

                                    </div>
                                    <br>

                                </div>

                            <?php } ?>

                        </div>

                        <!-- Scholarships section -->

                    </div>
                </div>

            </div>

        </div>

    </div>

</div>

<!-- mission section -->



<div class="w-100 d-none d-md-block"></div>
<br>
<br>