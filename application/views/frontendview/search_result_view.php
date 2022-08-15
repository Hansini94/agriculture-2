<header>
    <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php echo base_url("assets/frontend/"); ?>images/slider01.jpg) center top repeat;">
            <div class="container inner_page_top_heading">
                <div class="row ms-auto">
                    <h1 class="heading" data-aos="fade-up">Search Result</h1>
                    <nav aria-label="breadcrumb" data-aos="fade-down">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><b>Search Result</b></li>
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

            <?php 

                if(!empty($search_result)) {
                    
                    foreach($search_result as $result) {     
            ?>

            <div class="row m-auto mb-3">

                <a href="<?php echo $result->link; ?>"><h1 class="sub_heading"><?php echo $result->Heading; ?> </h1></a>
                <p><?php  if($result->tContent != ""){ echo mb_substr(strip_tags($result->tContent), 0, 500, 'utf-8'); } ?></p>

            </div>
            <?php } } else {  ?>
                    
                <div class="row m-auto mb-3">
                    <p>No results found.</p>
                </div>
                <?php } ?>

        </div>


        <div class="row">

            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                <!-- pagination -->
                <nav class="float-end">
                    <?php echo $links; ?>
                    <!-- <ul class="pagination" style="padding-left: 0px !important;">
                        <li class="page-item disabled">
                            <span class="page-link">Previous</span>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item" aria-current="page">
                            <span class="page-link">2</span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul> -->
                </nav>
                <!-- pagination -->

            </div>

        </div>

    </div>

</div>

<!-- mission section -->



<div class="w-100 d-none d-md-block"></div>
<br>