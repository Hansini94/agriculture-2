<header>
    <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php echo base_url("assets/frontend/"); ?>images/slider01.jpg) center top repeat;">
            <div class="container inner_page_top_heading">
                <div class="row ms-auto">
                    <h1 class="heading" data-aos="fade-up">Timetables</h1>
                    <nav aria-label="breadcrumb" data-aos="fade-down">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Current Undergraduates</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url('examination-timetables') ?>">Academic</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><b>Examination Timetables</b></li>
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
                        <?php 
                            $count = 0;
                            foreach($examination_timetables as $timetable) { 
                        ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne_<?php echo $timetable->id; ?>">
                                <button class="accordion-button <?php if($count!=0) { echo "collapsed"; } ?>" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne_<?php echo $timetable->id; ?>" aria-expanded="<?php if($count==0) { echo "true"; } else { echo "false"; } ?>" aria-controls="collapseOne">
                                    <?php echo $timetable->vTitle; ?>
                                </button>
                            </h2>
                            <div id="collapseOne_<?php echo $timetable->id; ?>" class="accordion-collapse collapse <?php if($count == 0){ echo "show"; } ?>" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                    <?php echo $timetable->tContent; ?>

                                    <div class="row">
                                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                            <div class="gray_text_div">

                                                <img src="images/pds.png" alt="" class="d-block float-start">

                                                <blockquote class="blockquote" style="margin-bottom: 0px;">
                                                    <p class="sub_heading">Examination Timetable</p>
                                                </blockquote>
                                                <!-- arrow link -->
                                                <a class='animated-arrow'
                                                    href='<?php echo base_url('front_img/').$timetable->fFile; ?>'
                                                    target="_blank">
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

                                    <?php echo $timetable->tContent2; ?>


                                </div>
                            </div>
                        </div>
                        <?php $count++; } ?>
                    </div>
                    <!-- tab section -->
                    <!-- ================== -->
                    <!-- ================== -->

                </div>

            </div>

        </div>

    </div>
</div>
    <!-- mission section -->



<div class="w-100 d-none d-md-block"></div>
<br><hr><br>