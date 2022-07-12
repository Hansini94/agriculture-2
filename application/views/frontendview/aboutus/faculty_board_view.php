<header>
    <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php echo base_url("assets/frontend/"); ?>images/slider01.jpg) center top repeat;">
            <div class="container inner_page_top_heading">
                <div class="row ms-auto">
                    <h1 class="heading" data-aos="fade-up">Faculty Board</h1>
                    <nav aria-label="breadcrumb" data-aos="fade-down">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">About Us</a></li>
                            <li class="breadcrumb-item"><a href="#">Faculty Information</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><b>Faculty Board</b></li>
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

            <?php echo $faculty_board_data[0]->tDescription1; ?>
        
          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <?php echo $faculty_board_data[0]->tDescription2; ?>
          </div>

          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <h1 class="sub_heading">Composition Of The Faculty Board Of Agriculture Is As Follows:</h1>
            <?php echo $faculty_board_data[0]->tComposition; ?>
          </div>

        </div>

       </div>

       <div class="clearfix"></div>
      <br>

      <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">

        <div class="row ms-auto">
         <h1 class="heading mb-1"><?php echo $faculty_board_data[0]->vHeading; ?></h1>
       <h1 class="sub_heading mb-3">Names and Contact Details of Officers of the Dean’s Office are as follows:</h1>
               
               <!-- table-->
               <div class="table-responsive">
                  <?php echo $faculty_board_data[0]->tMeetingSchedule; ?>
                </div>
               <!-- table -->

             </div>

      </div>

      <div class="clearfix"></div>

      <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">

        <div class="row ms-auto">

        <?php foreach($meeting_schedule_data as $meeting_schedule) { ?>
          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                <div class="gray_text_div dean_des_div">

                <blockquote class="blockquote" style="margin-bottom: 0px;">
                    <p><?php echo $meeting_schedule->vTitle; ?></p>
                </blockquote>
                <!-- arrow link -->
                <a class='animated-arrow' href='<?php echo $meeting_schedule->vUrl; ?>'>
                <span class='the-arrow -left'>
                    <span class='shaft'></span>
                </span>
                <span class='main'>
                    <span class='text'>
                    Click here to view
                    </span>
                    <span class='the-arrow -right'>
                    <span class='shaft'></span>
                    </span>
                </span>
                </a>
                <!-- arrow link -->

                </div>
            </div>

            <?php } ?>

          <!-- ============== -->

        </div>

      </div>

    </div>

</div>

  <!-- mission section -->



<div class="clearfix"></div>
<br>
<br>