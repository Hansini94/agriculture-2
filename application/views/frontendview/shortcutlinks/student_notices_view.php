<header>
    <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php $pageBanner = get_innerpage_banner($this->uri->segment(1)); if($pageBanner !== false){ foreach($pageBanner as $banner){if($this->uri->segment(1) == $banner->vPageRoute){echo base_url().'front_img/'.$banner->fImage;}}}else{echo base_url().'/assets/frontend/images/slider01.jpg';}  ?> ) center top repeat;">
            <div class="container inner_page_top_heading">
                <div class="row ms-auto">
                    <h1 class="heading" data-aos="fade-up">Notices</h1>
                    <nav aria-label="breadcrumb" data-aos="fade-down">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url('student-notices') ?>">Current Undergraduates</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><b>Notices</b></li>
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

                <h1 class="heading mb-3">Student Notices</h1>

                <!-- ================== -->
                <!-- ================== -->
                <!-- tab section -->
                <div class="">

                    <div class="accordion" id="accordionExample">
                        <?php 
                            $count = 0;
                            foreach($student_notices as $student_notice) { 
                        ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne_<?php echo $student_notice->id; ?>">
                                <button class="accordion-button <?php if($count!=0) { echo "collapsed"; } ?>" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne_<?php echo $student_notice->id; ?>" aria-expanded="<?php if($count==0) { echo "true"; } else { echo "false"; } ?>" aria-controls="collapseOne">
                                    <?php echo $student_notice->vTitle; ?>
                                </button>
                            </h2>
                            <div id="collapseOne_<?php echo $student_notice->id; ?>" class="accordion-collapse collapse <?php if($count == 0){ echo "show"; } ?>" aria-labelledby="headingOne_<?php echo $student_notice->id; ?>"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                    <?php echo $student_notice->tContent; ?>

                                </div>
                            </div>
                        </div>  
                        <?php $count++; } ?>                     
                    </div>

                </div>
                <!-- tab section -->
                <!-- ================== -->
                <!-- ================== -->

            </div>

        </div>

    </div>

</div>

<!-- mission section -->



<div class="w-100 d-none d-md-block"></div>
<br>