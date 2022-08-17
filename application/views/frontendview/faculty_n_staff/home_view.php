<header>
    <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php echo base_url("assets/frontend/"); ?>images/slider03.jpg) center top repeat;">
            <div class="container inner_page_top_heading">
                <div class="row ms-auto">
                    <h1 class="heading" data-aos="fade-up">Faculty and Staff </h1>
                    <nav aria-label="breadcrumb" data-aos="fade-down">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><b>Faculty and Staff</b></li>
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


<!--=============================================-->
<!--===================body====================-->

<!-- welcome section -->
<div class="container-fluid no_padding footer_row angled-top-right mb-4 mt-1" style="background-color: #c8cfe9;">
    <div class="container">    
        <div class="row">      
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="row m-auto">        
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <img src="<?php echo base_url().'/front_img/'.$home->fImg; ?>" class="d-block w-100 mb-4" alt="...">
                    </div>

                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <h1 class="heading"><?php echo $home->vTitle; ?></h1>
                        <p data-aos="fade-up">
                            <?php echo $home->tContent; ?>
                        </p>

                        <!-- <p data-aos="fade-up">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                        </p> -->            
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>
<!-- welcome section -->


<!-- mission section -->

<div class="container">    
    <div class="row">      
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="row m-auto">
                <h1 class="heading">Links</h1>
                <h1 class="sub_heading">Website links for future students informations</h1>
                <div class="clearfix"></div>
                <br>        
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="gray_text_div">
                        <img src="<?php echo base_url("assets/frontend/"); ?>images/f_student.png" alt="" class="d-block float-start">

                        <blockquote class="blockquote" style="margin-bottom: 0px;">
                            <p class="sub_heading"> Emeritus professors</p>
                        </blockquote>
                        <!-- arrow link -->
                        <a class='animated-arrow' href='<?php echo base_url(); ?>emeritus-professors' target="_blank">
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
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="gray_text_div">
                        <img src="<?php echo base_url("assets/frontend/"); ?>images/f_student.png" alt="" class="d-block float-start">

                        <blockquote class="blockquote" style="margin-bottom: 0px;">
                            <p class="sub_heading"> Code of Conduct  </p>
                        </blockquote>
                        <!-- arrow link -->
                        <a class='animated-arrow' href='<?php echo base_url(); ?>conduct-staff' target="_blank">
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

                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="gray_text_div">
                        <img src="<?php echo base_url("assets/frontend/"); ?>images/f_student.png" alt="" class="d-block float-start">

                        <blockquote class="blockquote" style="margin-bottom: 0px;">
                            <p class="sub_heading"> Guidelines for Professional Conduct </p>
                        </blockquote>
                        <!-- arrow link -->
                        <a class='animated-arrow' href='<?php echo base_url(); ?>conduct-guidelines' target="_blank">
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

                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="gray_text_div">
                        <img src="<?php echo base_url("assets/frontend/"); ?>images/f_student.png" alt="" class="d-block float-start">

                        <blockquote class="blockquote" style="margin-bottom: 0px;">
                            <p class="sub_heading"> Conflict of Interest Declaration Form </p>
                        </blockquote>
                        <!-- arrow link -->
                        <a class='animated-arrow' href='<?php echo base_url().'/front_img/'.$form->fFile; ?>' target="_blank">
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

                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="gray_text_div">
                        <img src="<?php echo base_url("assets/frontend/"); ?>images/f_student.png" alt="" class="d-block float-start">

                        <blockquote class="blockquote" style="margin-bottom: 0px;">
                            <p class="sub_heading"> Downloads </p>
                        </blockquote>
                        <!-- arrow link -->
                        <a class='animated-arrow' href='<?php echo base_url(); ?>downloads_staff' target="_blank">
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
            </div>
        </div>
    </div>

    <div class="clearfix"></div>
    <hr>
    <br>

    <div class="row m-auto">        
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
            <h1 class="heading mb-3">Academic Staff</h1>        
            <div id="container" class="home_link_div" style="position: relative; z-index: 99999; background-color: #b8e0d2; margin-top: 0px; height: auto;">
                <?php foreach($link as $lins){ ?>
                    <a href="<?php echo $lins->vUrl; ?>">
                        <div class="quick_links_div">
                            <p class="quick_links" data-aos="fade-up"><?php echo $lins->vName; ?></p>
                            <img src="<?php echo base_url("assets/frontend/"); ?>images/right_arrow.svg" alt="" class="d-block float-md-end quick_links_arrow" width="20px;">
                        </div>
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>

</div>

  <!-- mission section -->

<div class="w-100 d-none d-md-block"></div>
    <br>
    <br>