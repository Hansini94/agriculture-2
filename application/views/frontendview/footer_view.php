<!-- logo slider  -->
<div class="container" data-aos="fade-down">
  <h1 class="heading">Quick Links</h1>
  <h1 class="sub_heading">Website links for our partner websites</h1>
  <div class="slider">
    <div class="owl-carousel">
      <?php foreach ($quick_links as $quick_link) { ?>
        <div class="slider-card">
          <div class="d-flex justify-content-center align-items-center mb-4">
            <img src="<?php echo base_url("front_img/") . $quick_link->fImg; ?>" class="img-fluid">
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>

<!-- logo slider -->


<!--=============================================-->
<!--===================body====================-->

<!--=============================================-->
<!--===================footer====================-->

<div class="container-fluid no_padding footer_row angled-top-right">

  <div class="container">

    <div class="row">

      <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 footer_logo_col">
        <a href="<?php echo base_url(); ?>">
          <img src="<?php echo base_url("assets/frontend/"); ?>images/logo.png" alt="" class="d-block w-100 footer_logo">
        </a>
        <p>
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
        </p>

        <p style="color: #999999;" class="d-none d-lg-block">
          <small>Copyright ©2022 Faculty of Agriculture - University of Peradeniya. <br>
            All Rights Reserved</small>
        </p>

      </div>

      <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12 col-sm-12">

        <div class="row">

          <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-4 col-4 footer_link_col">
            <a href="<?php echo base_url('/'); ?>">
              <p>Home </p>
            </a>
            <a href="<?php echo base_url('about-us'); ?>">
              <p>About us</p>
            </a>
            <a href="https://www.pdn.ac.lk/" target="_blank">
              <p>University</p>
            </a>
            <a href="<?php echo base_url('faculty-board'); ?>">
              <p>Faculty</p>
            </a>
            <a href="<?php echo base_url('undergraduate-programme'); ?>">
              <p>Academics </p>
            </a>
            <a href="<?php echo base_url('research/faculty-research-committee'); ?>">
              <p>Research</p>
            </a>
          </div>

          <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-4 col-4 footer_link_col">
            <a href="<?php echo base_url('international-overview'); ?>">
              <p>International</p>
            </a>
            <a href="<?php echo base_url('current-students'); ?>">
              <p>Students </p>
            </a>
            <a href="<?php echo base_url('quality/functions-of-foaqac'); ?>">
              <p>Quality </p>
            </a>
            <a href="<?php echo base_url('engagement-overview'); ?>">
              <p>Engagement</p>
            </a>
            <a href="<?php echo base_url('services/outreach-centers'); ?>">
              <p>Services</p>
            </a>
          </div>

          <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-4 col-4 footer_link_col">
            <a href="<?php echo base_url('alumni'); ?>">
              <p>Alumni</p>
            </a>
            <a href="<?php echo base_url('downloads-staff'); ?>">
              <p>Downloads </p>
            </a>
            <a href="">
              <p>Extranet </p>
            </a>
            <a href="<?php echo base_url('faq'); ?>">
              <p>FAQ</p>
            </a>
            <a href="<?php echo base_url('partnership'); ?>">
              <p>Quick Links</p>
            </a>
          </div>

          <?php
          $contact_details = get_contact_details();
          ?>

          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">

            <p>
              <i class="fa fa-phone" aria-hidden="true"></i> &nbsp;&nbsp;
              <a href="tel:<?php echo $contact_details->vTele; ?>"><?php echo $contact_details->vTele; ?></a>
              |
              <a href="tel:<?php echo $contact_details->vTele2; ?>"><?php echo $contact_details->vTele2; ?></a>
            </p>

            <p>
              <i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;&nbsp;<a href="mailto:<?php echo $contact_details->vWaEmail; ?>"><?php echo $contact_details->vWaEmail; ?></a>
            </p>

            <p>
              <i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;&nbsp;<a href="mailto:<?php echo $contact_details->vEmail; ?>"><?php echo $contact_details->vEmail; ?></a>
            </p>

            <p><i class="fa fa-fax" aria-hidden="true"></i> &nbsp;&nbsp;<a href="fax-local-phone:<?php echo $contact_details->vFax; ?>"><?php echo $contact_details->vFax; ?></a></p>

            <p class="social_icon">
              <?php if ($contact_details->vFacebook != '') { ?><a href="<?php echo $contact_details->vFacebook; ?>" target="_blank" class="fa fa-facebook animate__animated animate__fadeInLeft"></a><?php } ?>
              <?php if ($contact_details->vInstagram != '') { ?><a href="<?php echo $contact_details->vInstagram; ?>" target="_blank" class="fa fa-instagram animate__animated animate__fadeInLeft"></a><?php } ?>
              <?php if ($contact_details->vTwitter != '') { ?><a href="<?php echo $contact_details->vTwitter; ?>" target="_blank" class="fa fa-twitter animate__animated animate__fadeInLeft"></a><?php } ?>
              <?php if ($contact_details->vLinkedIn != '') { ?><a href="<?php echo $contact_details->vLinkedIn; ?>" target="_blank" class="fa fa-linkedin animate__animated animate__fadeInLeft"></a><?php } ?>
            </p>

          </div>

          <p style="color: #999999;" class="d-block d-md-block d-lg-none">
            <small>Copyright ©2022 Faculty of Agriculture - University of Peradeniya. <br>
              All Rights Reserved</small>
          </p>

        </div>

      </div>


    </div>

  </div>

</div>

<div class="container">

  <div class="row" style="padding-top: 5px; padding-bottom: 5px; font-size: 12px;">

    <div class="col sol_text">
      <small>Solution by <a href="https://www.tekgeeks.net/" target="_blank" style="color: #f68b2e;">TekGeeks</a></small>
    </div>

  </div>

</div>


<!--=============================================-->
<!--===================footer====================-->


<!--=============================================-->
<!--===================scroll top====================-->

<button class="scroll-top">
  <div class="arrow up"></div>
</button>

<!--=============================================-->
<!--===================scroll top====================-->



<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="<?php echo base_url("assets/frontend/"); ?>js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url("assets/frontend/"); ?>js/popper.min.js"></script>
<script src="<?php echo base_url("assets/frontend/"); ?>js/bootstrap.min.js"></script>

<!-- drop down menu -->
<script src="<?php echo base_url("assets/frontend/"); ?>js/scroll-top.js"></script>
<!-- drop down menu -->


<!-- scroll top -->
<script src="<?php echo base_url("assets/frontend/"); ?>js/drop_down_menu.js"></script>
<!-- scroll top -->


<!--loading effects-->
<script src="<?php echo base_url("assets/frontend/"); ?>js/aos.js"></script>

<script>
  AOS.init({
    easing: 'ease-out-back',
    duration: 1000
  });
</script>

<!--loading effects-->

<!-- owl carousel -->
<script src="<?php echo base_url("assets/frontend/"); ?>owl/owl.carousel.min.js"></script>
<script src="<?php echo base_url("assets/frontend/"); ?>owl/owl_js.js"></script>
<!-- owl carousel -->

<!-- count down -->

<script>
  var a = 0;

  $(window).scroll(function() {
    var oTop = $('#counter').offset().top - window.innerHeight;
    if (a == 0 && $(window).scrollTop() > oTop) {
      $('.counter-value').each(function() {
        var $this = $(this),
          countTo = $this.attr('data-count');
        $({
          countNum: $this.text()
        }).animate({
            countNum: countTo
          },
          {
            duration: 3000,
            easing: 'swing',
            step: function() {
              $this.text(Math.floor(this.countNum));
            },
            complete: function() {
              $this.text(this.countNum);

              //alert('finished');
            }
          });

      });
      a = 1;
    }
  });
</script>

<!-- count down -->


</body>

</html>