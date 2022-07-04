<!--=============================================-->
    <!--===================footer====================-->


    <!--footer section-->

    <div class="row margin_auto footer_row">

        <div class="container">

            <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12 footer_logo_col">
                <img src="<?php echo base_url("assets/frontend/images/logo_2.svg"); ?>" alt="" class="img-responsive footer_logo" data-aos="fade-up">
                <br>
                <!-- contact div -->
                <div class="footer_contact_div hidden-xs">
                    <p data-aos="fade-up">
                        <a href="tel:<?php echo $contact_us[0]->vTele; ?>"><?php echo $contact_us[0]->vTele; ?></a> |
                        <a href="mailto:<?php echo $contact_us[0]->vEmail; ?>"><?php echo $contact_us[0]->vEmail; ?></a>
                    </p>

                    <!-- ==== -->

                    <!-- socila media icon -->
                    <p class="hidden-xs footer_social_icon" data-aos="fade-up">
                        <a href="<?php echo $contact_us[0]->vFacebook; ?>" target="_blank" class="fa fa-facebook"></a>
                        <a href="<?php echo $contact_us[0]->vTwitter; ?>" class="fa fa-twitter"></a>
                        <a href="<?php echo $contact_us[0]->vInstagram; ?>" class="fa fa-instagram"></a>
                        <a href="<?php echo $contact_us[0]->vYoutube; ?>" class="fa fa-youtube"></a>
                    </p>
                    <!-- socila media icon -->
                </div>
                <br>
                <p class="hidden-xs" style="margin-bottom: 0px;"><small>© 2022 Kelani Cables PLC. All Rights Reserved. </small>
                </p>
                <p class="tg_link hidden-xs"><small>Solution by <a href="https://www.tekgeeks.net/" target="_blank" style="color: #999999;">TekGeeks </a></small></p>
                <!-- contact div -->
            </div>


            <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">

                <div class="row">

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 visible-xs">
                        <p style="color: #14f78d;">
                        <?php echo $contact_us[0]->vTitle; ?><br> <?php echo $contact_us[0]->vAddress1; ?><br> <?php echo $contact_us[0]->vAddress2; ?>
                            <br> <?php echo $contact_us[0]->vAddress3; ?>
                        </p>
                        <br>
                        <a href="tel:<?php echo $contact_us[0]->vTele; ?>">
                            <p style="color: #14f78d;"><?php echo $contact_us[0]->vTele; ?></p>
                        </a>
                        <a href="mailto:<?php echo $contact_us[0]->vEmail; ?>">
                            <p style="color: #14f78d;"><?php echo $contact_us[0]->vEmail; ?></p>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 link_col">
                        <h3>About Us</h3>
                        <a href="<?php echo base_url('company-overview') ?>">
                            <p>Company Overview</p>
                        </a>
                        <?php /*<a href="<?php echo base_url('board-of-directors') ?>">
                            <p>Board of Directors</p>
                        </a> */ ?>
                        <a href="<?php echo base_url('customer') ?>">
                            <p>Customers</p>
                        </a>
                        <a href="<?php echo base_url('technology') ?>">
                            <p>Technology</p>
                        </a>
                        <a href="<?php echo base_url('awards') ?>">
                            <p>Awards & Achievements</p>
                        </a>
                        <a href="<?php echo base_url('announcements/view') ?>">
                            <p>Announcements</p>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 link_col">
                        <h3>Financial Information</h3>
                        <a href="<?php echo base_url('annual-reports') ?>">
                            <p>Annual Reports</p>
                        </a>
                        <a href="<?php echo base_url('quarterly-reports') ?>">
                            <p>Quarterly Reports</p>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 hidden-xs">
                        <p style="color: #14f78d;">
                        <?php echo $contact_us[0]->vTitle; ?><br> <?php echo $contact_us[0]->vAddress1; ?><br> <?php echo $contact_us[0]->vAddress2; ?>
                            <br> <?php echo $contact_us[0]->vAddress3; ?>
                        </p>
                        <br>
                        <a href="tel:<?php echo $contact_us[0]->vTele; ?>">
                            <p style="color: #14f78d;"><?php echo $contact_us[0]->vTele; ?></p>
                        </a>
                        <a href="mailto:<?php echo $contact_us[0]->vEmail; ?>">
                            <p style="color: #14f78d;"><?php echo $contact_us[0]->vEmail; ?></p>
                        </a>
                    </div>

                    <div class="clearfix"></div>
                    <br>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 link_col">
                        <h3>Projects</h3>
                        <a href="<?php echo base_url('local-projects') ?>">
                            <p>Local Projects</p>
                        </a>
                        <a href="<?php echo base_url('international-projects') ?>">
                            <p>International Projects</p>
                        </a>

                        <div class="clearfix"></div>
                        <br>

                        <h3>Resources</h3>
                        <a href="<?php echo base_url('brochures') ?>">
                            <p>Brochures</p>
                        </a>
                        <!--<a href="<?php echo base_url('technical-information') ?>">-->
                        <!--    <p>Technical Information</p>-->
                        <!--</a>-->
                        <a href="<?php echo base_url('certificates') ?>">
                            <p>Certificates</p>
                        </a>
                        <a href="<?php echo base_url('video-gallery') ?>">
                            <p>Video Gallery</p>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 link_col">
                        <h3>Contact Us</h3>
                        <a href="<?php echo base_url('contact-details') ?>">
                            <p>Contact details</p>
                        </a>
                        <a href="<?php echo base_url('distributors') ?>">
                            <p>Distributor Listing</p>
                        </a>
                        <a href="<?php echo base_url('quick-sales-contacts') ?>">
                            <p>Quick Sales Contacts</p>
                        </a>
                        <a href="<?php echo base_url('technical-and-other') ?>">
                            <p>Technical and Other</p>
                        </a>
                        <a href="<?php echo base_url('sales-contacts') ?>">
                            <p>Sales Contacts</p>
                        </a>
                        <a href="<?php echo base_url('export-contacts') ?>">
                            <p>Export Contacts</p>
                        </a>

                        <div class="clearfix visible-xs"></div>
                        <br class="visible-xs">

                        <div class="visible-xs">
                            <h3>Other</h3>
                            <a href="<?php echo base_url('product-catalogue') ?>">
                                <p>Product catalogue</p>
                            </a>
                            <a href="<?php echo base_url('news/view') ?>">
                                <p>News & Updates </p>
                            </a>
                            <a href="<?php echo base_url('csr') ?>">
                                <p>CSR </p>
                            </a>
                            <a href="<?php echo base_url('quality-assuarance') ?>">
                                <p>Quality Assurance </p>
                            </a>
                            <a href="<?php echo base_url('research-development') ?>">
                                <p>Research & Development</p>
                            </a>
                            <a href="<?php echo base_url('careers') ?>">
                                <p>Careers</p>
                            </a>
                        </div>

                    </div>

                    <br class="visible-xs">

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 link_col hidden-xs">
                        <h3>Other</h3>
                        <a href="<?php echo base_url('product-catalogue') ?>">
                            <p>Product catalogue</p>
                        </a>
                        <a href="<?php echo base_url('news/view') ?>">
                            <p>News & Updates </p>
                        </a>
                        <a href="<?php echo base_url('csr') ?>">
                            <p>CSR </p>
                        </a>
                        <a href="<?php echo base_url('quality-assuarance') ?>">
                            <p>Quality Assurance </p>
                        </a>
                        <a href="<?php echo base_url('research-development') ?>">
                            <p>Research & Development</p>
                        </a>
                        
                        <a href="<?php echo base_url('careers') ?>">
                            <p>Careers</p>
                        </a>
                    </div>

                </div>

            </div>



            <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12 footer_logo_col visible-xs">
                <br>
                <!-- contact div -->
                <div class="footer_contact_div">
                    <p data-aos="fade-up">
                        <a href="tel:<?php echo $contact_us[0]->vTele; ?>"><?php echo $contact_us[0]->vTele; ?></a> |
                        <a href="mailto:<?php echo $contact_us[0]->vEmail; ?>"><?php echo $contact_us[0]->vEmail; ?></a>
                    </p>

                    <!-- ==== -->

                    <!-- socila media icon -->
                    <p class="footer_social_icon" data-aos="fade-up">
                        <a href="<?php echo $contact_us[0]->vFacebook; ?>" class="fa fa-facebook"></a>
                        <a href="<?php echo $contact_us[0]->vTwitter; ?>" class="fa fa-twitter"></a>
                        <a href="<?php echo $contact_us[0]->vInstagram; ?>" class="fa fa-instagram"></a>
                        <a href="<?php echo $contact_us[0]->vYoutube; ?>" class="fa fa-youtube"></a>
                    </p>
                    <!-- socila media icon -->
                </div>
                <br>
                <p style="margin-bottom: 0px;"><small>© 2022 Kelani Cables PLC. All Rights Reserved. </small></p>
                <p class="tg_link"><small>Solution by <a href="https://www.tekgeeks.net/" target="_blank" style="color: #999999;">TekGeeks </a></small></p>
                <!-- contact div -->
            </div>

        </div>

    </div>

    <!--footer section-->


    <!--=============================================-->
    <!--===================footer====================-->


    <!--=============================================-->
    <!--===================scroll top====================-->

    <div class="scroll-top-wrapper">
        <span class="scroll-top-inner">
      <i class="glyphicon glyphicon-arrow-up"></i>
    </span>
    </div>

    <!--=============================================-->
    <!--===================scroll top====================-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url("assets/frontend/js/jquery.min.js"); ?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url("assets/frontend/js/bootstrap.min.js"); ?>"></script>

    <!-- Script to Activate the Carousel -->
    <script>
        $('.carousel').carousel({
            interval: 5000 //changes the speed
        })
    </script>

    <!-- scroll top -->
    <script src="<?php echo base_url("assets/frontend/js/scroll-top.js"); ?>" src="js/scroll-top.js"></script>
    <!-- scroll top -->

    <!--loading effects-->
    <script src="<?php echo base_url("assets/frontend/js/aos.js"); ?>"></script>
    <script src="<?php echo base_url("assets/frontend/js/highlight.min.js"); ?>"></script>

    <script>
        AOS.init({
            easing: 'ease-out-back',
            duration: 1000
        });
    </script>

    <script>
        $('.hero__scroll').on('click', function(e) {
            $('html, body').animate({
                scrollTop: $(window).height()
            }, 1200);
        });
    </script>
    <!--loading effects-->

    <!--owl carousel-->
    <script src="<?php echo base_url("assets/frontend/owl/owl.carousel.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/frontend/owl/owl.js"); ?>"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js'></script>
    <!--owl carousel-->

    <!--jarallax js-->
    <script src="<?php echo base_url("assets/frontend/css/jarallax/jarallax_js.js"); ?>"></script>
    <!--jarallax js-->

    <!--jarallax-->
    <script type="text/javascript">
        /* init Jarallax */
        $('.jarallax').jarallax({
            speed: 0.5,
            imgWidth: 1366,
            imgHeight: 768
        })
    </script>
    <!--jarallax-->

    <!-- menu -->
    <script src="<?php echo base_url("assets/frontend/css/menu/gsap.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/frontend/css/menu/script.js"); ?>"></script>
    <!-- menu -->

    <!--  scroll down menu-->
    <script>
        (function($) {
            $(document).ready(function() {

                // hide .navbar first
                $(".navbar02").hide();

                // fade in .navbar
                $(function() {
                    $(window).scroll(function() {
                        // set distance user needs to scroll before we fadeIn navbar
                        if ($(this).scrollTop() > 100) {
                            $('.navbar02').fadeIn();
                        } else {
                            $('.navbar02').fadeOut();
                        }
                    });


                });

            });
        }(jQuery));
    </script>
    <!--  scroll down menu-->

    <!-- SEARCH -->

    <script>

    // function buttonUp() {
    //     var inputVal = $('.search_text').val();
    //     inputVal = $.trim(inputVal).length;
    //     if (inputVal !== 0) {
    //         $('.searchbox-icon').css('display', 'none');
    //     } else {
    //         $('.searchbox-input').val('');
    //         $('.searchbox-icon').css('display', 'block');
    //     }
    // }

    </script>