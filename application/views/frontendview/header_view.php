<?php
//echo "hi11"; echo "</br>";
//var_dump($this->cart->contents());
//      exit();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <?php
    if (activate_menu('Home') == 'active') {
        $meta = get_meta('Home');
    } else if (activate_menu('Company_overview') == 'active') {
        $meta = get_meta('Company_overview');
    } else if (activate_menu('board_of_directors') == 'active') {
        $meta = get_meta('board_of_directors');
    } else if (activate_menu('customer') == 'active') {
        $meta = get_meta('customer');
    } else if (activate_menu('technology') == 'active') {
        $meta = get_meta('technology');
    } else if (activate_menu('awards') == 'active') {
        $meta = get_meta('awards');
    } else if (activate_menu('annual_reports') == 'active') {
        $meta = get_meta('annual_reports');
    } else if (activate_menu('quarterly_reports') == 'active') {
        $meta = get_meta('quarterly_reports');
    } else if (activate_menu('product_categories') == 'active') {
        $meta = get_meta('product_categories');
    } else if (activate_menu('completed_projects') == 'active') {
        $meta = get_meta('completed_projects');
    } else if (activate_menu('ongoing_projects') == 'active') {
        $meta = get_meta('ongoing_projects');
    } else if (activate_menu('news') == 'active') {
        $meta = get_meta('news');
    } else if (activate_menu('csr') == 'active') {
        $meta = get_meta('csr');
    } else if (activate_menu('quality_assuarance') == 'active') {
        $meta = get_meta('quality_assuarance');
    } else if (activate_menu('research_development') == 'active') {
        $meta = get_meta('research_development');
    } else if (activate_menu('brochures') == 'active') {
        $meta = get_meta('brochures');
    } else if (activate_menu('technical_information') == 'active') {
        $meta = get_meta('technical_information');
    } else if (activate_menu('certificates') == 'active') {
        $meta = get_meta('certificates');
    } else if (activate_menu('factory_tours') == 'active') {
        $meta = get_meta('factory_tours');
    } else if (activate_menu('careers') == 'active') {
        $meta = get_meta('careers');
    } else if (activate_menu('contact_us') == 'active') {
        $meta = get_meta('contact_us');
    } else if (activate_menu('distributors') == 'active') {
        $meta = get_meta('distributors');
    } else if (activate_menu('cables') == 'active') {
        $meta = get_meta('cables');
    } else if (activate_menu('lighting') == 'active') {
        $meta = get_meta('lighting');
    } else if (activate_menu('switchgear') == 'active') {
        $meta = get_meta('switchgear');
    } else if (activate_menu('other_product') == 'active') {
        $meta = get_meta('other_product');
    } else if (activate_menu('quick_sales_contacts') == 'active') {
        $meta = get_meta('quick_sales_contacts');
    } else if (activate_menu('technical_and_other') == 'active') {
        $meta = get_meta('technical_and_other');
    } else if (activate_menu('sales_contacts') == 'active') {
        $meta = get_meta('sales_contacts');
    } else if (activate_menu('export_contacts') == 'active') {
        $meta = get_meta('export_contacts');
    } else {
        $meta = get_meta('home');
    }
    ?>


<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php echo $meta[0]->vMeta_description; ?>" />
    <link rel="canonical" href="<?php echo $meta[0]->vOg_url; ?>" />
    <meta property="og:site_name" content="<?php echo $meta[0]->vTitle; ?> | <?php echo $meta[0]->vPage_name; ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?php echo $meta[0]->vOg_title; ?>" />
    <meta property="og:description" content="<?php echo $meta[0]->vOg_description; ?>" />
    <meta property="og:url" content="<?php echo $meta[0]->vOg_url; ?>" />
    <title><?php echo $meta[0]->vTitle; ?></title>

    <!--favicon-->
    <link rel="icon" href="<?php echo base_url("assets/frontend/images/favicon.png"); ?>" type="image/x-icon" />
    <!--favicon-->

    <!-- Bootstrap -->
    <link href="<?php echo base_url("assets/frontend/css/bootstrap.min.css"); ?>" rel="stylesheet">
    <!--bootstrap-->

    <!-- Custom CSS -->
    <link href="<?php echo base_url("assets/frontend/css/full-slider.css"); ?>" rel="stylesheet">
    <!-- Custom CSS -->

    <!-- main css-->
    <link href="<?php echo base_url("assets/frontend/css/kelani.css"); ?>" rel="stylesheet" type="text/css"
        media="screen">
    <!-- main css-->

    <!-- media query css-->
    <link href="<?php echo base_url("assets/frontend/css/mediaquery.css"); ?>" rel="stylesheet" type="text/css"
        media="screen">
    <!-- media query css-->

    <!-- full height slider CSS -->
    <link  href="<?php echo base_url("assets/frontend/slider/engine1/style.css"); ?>" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="<?php echo base_url("assets/frontend/slider/engine1/jquery.js"); ?>"></script>
    <!-- full height slider CSS -->

    <!--jarallax js & css-->
    <link href="<?php echo base_url("assets/frontend/css/jarallax/jarallax_css.css"); ?>" rel="stylesheet"
    type="text/css" media="screen">
    <!--jarallax js & css-->

    <!--loading effect-->
    <link href="<?php echo base_url("assets/frontend/css/loading_styles.css"); ?>" rel="stylesheet" type="text/css"
        media="screen" />
    <link href="<?php echo base_url("assets/frontend/css/aos.css"); ?>" rel="stylesheet" type="text/css"
        media="screen" />
    <!--loading effect-->

    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Add icon library -->

    <!--Date Picker-->
    <link href="<?php echo base_url("assets/frontend/css/datepicker/bootstrap-datepicker3.min.css"); ?>"
        rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url("assets/frontend/css/datepicker/bootstrap-datepicker3.standalone.min.css"); ?>"
        rel="stylesheet" type="text/css" />
    <!--Date Picker end-->

    <!--owl carousel-->
    <link rel='stylesheet' href='<?php echo base_url("assets/frontend/owl/owl.carousel.min.css"); ?>'>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/frontend/owl/owl.css"); ?>" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.css'>
    <!--owl carousel-->

    <!-- menu -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link href="<?php echo base_url('assets/frontend/css/menu/style.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/frontend/css/menu/menu_2.css'); ?>" rel="stylesheet" type="text/css" />
    <!-- menu -->

    <!-- search -->
    <link href="<?php echo base_url("assets/frontend/css/search.css"); ?>" rel="stylesheet" type="text/css" />
    <!-- search -->


    <link href="<?php echo base_url('assets/frontend/css/bootstrapValidator.min.css'); ?>" rel="stylesheet"
        type="text/css" media="screen">
    <!--scroll bar style-->

    <!--scroll bar style-->
    <style>
        /*================header angle div========================*/
        .share_marcket_tag{
            background-color: #14f78d;
            color: #000000;
            position: absolute;
            font-weight: 700;
            right: 0px;
            top: 86px;
            padding: 10px;
            margin-bottom: 0px;
            text-align: right;
            width: auto;
            z-index: 999;
            padding-left: 110px;
            /*border-bottom-left-radius: 3em;*/
            background:-moz-linear-gradient(-240deg, transparent 70px, #14f78d 71px);
            background:-o-linear-gradient(-240deg, transparent 70px, #14f78d 71px);
            background:-webkit-linear-gradient(-240deg, transparent 70px, #14f78d 71px);
            background:linear-gradient(-240deg, transparent 70px, #14f78d 71px);
        }
    </style>

</head>
<?php
## delete this
$active = 'home';
?>


<body>
    <?php 
         if (activate_menu('home') == 'active') { 
            $sharemarket = get_home_details();      
    ?>
            <!--share lable-->
            <p class="share_marcket_tag">SHARE MARKET (KCL) - Rs <?php echo $sharemarket[0]->vMarketShare; ?></p>
            <!--share lable-->
    <?php } ?>
    
    <a href="http://188.40.133.160/~kelaniit/Kelanicablestekgeeks/contact-details/#contact_section" target="_blank">
        <button id="btnViewEng" class="btn btn-primary spec_btn aos-init aos-animate side_quote_btn">Request a Quote</button>
    </a>

        <!-- mobile socila media icon -->
    <p class="mobile_home_top_social_icon visible-xs">
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-instagram"></a>
        <a href="#" class="fa fa-youtube"></a>
    </p>
    <!-- mobile socila media icon -->
    <?php if (activate_menu('home') == '11active') { ?>
    <!-- page loader -->
    <div id="preloader">
        <div id="status"><img src="<?php echo base_url("assets/frontend/images/main_logo.png"); ?>" alt=""
                style="margin-top: -170px;"></div>
    </div>
    <!-- page loader -->
    <?php } ?>

    <!-- header start -->

    <?php
    if (activate_menu('home') == 'active') {
        $class = "";
    } else {
        $class = "iner_nav_bar";
    }
    ?>

    <!-- Navigation -->
    <!-- Collect the nav links, forms, and other content for toggling -->
    <nav class="navbar navbar-default navbar-fixed-top <?php echo $class; ?>" style="position: absolute;">

        <div class="nav_bar_container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right manu_top_ul hidden-xs">
                    <li class="<?php echo activate_menu('quality_assuarance'); ?>"><a href="<?php echo base_url("quality-assuarance"); ?>">Quality Assurance</a></li>
                    <li class="<?php echo activate_menu('research_development'); ?>"><a href="<?php echo base_url("research-development"); ?>">Research and Developments</a></li>

                    <li class="dropdown <?php
                                                echo activate_menu('brochures');
                                             // echo activate_menu('technical_information');
                                                echo activate_menu('certificates');
                                                echo activate_menu('factory_tours');
                                                 ?>">
                        <a class="dropdown-toggle" data-toggle="dropdown" style="cursor: pointer;">Resources
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="<?php echo activate_menu('brochures'); ?>"><a href="<?php echo base_url("brochures"); ?>">Brochures</a></li>
                            <!-- <li class="<?php echo activate_menu('technical_information'); ?>"><a href="<?php echo base_url("technical_information"); ?>">Technical Information</a></li> -->
                            <li class="<?php echo activate_menu('certificates'); ?>"><a href="<?php echo base_url("certificates"); ?>">Certificates</a></li>
                            <li class="<?php echo activate_menu('factory_tours'); ?>"><a href="<?php echo base_url("video-gallery"); ?>">Video Gallery</a></li>
                        </ul>
                    </li>

                    <li class="<?php echo activate_menu('careers'); ?>"><a href="<?php echo base_url("careers"); ?>">Careers</a></li>

                    <li class="dropdown <?php
                                                echo activate_menu('contact_us');
                                                echo activate_menu('distributors');
                                                echo activate_menu('quick_sales_contacts');
                                                echo activate_menu('technical_and_other');
                                                echo activate_menu('sales_contacts');
                                                echo activate_menu('export_contacts');
                                                 ?>">
                        <a class="dropdown-toggle" data-toggle="dropdown" style="cursor: pointer;">Contact
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="<?php echo activate_menu('contact_us'); ?>"><a href="<?php echo base_url("contact-details");?>">Contact Details</a></li>
                            <li class="<?php echo activate_menu('distributors'); ?>"><a href="<?php echo base_url("distributors");?>">Distributor Listing with Map</a></li>
                            <li class="<?php echo activate_menu('quick_sales_contacts'); ?>"><a href="<?php echo base_url("quick-sales-contacts");?>">Quick Sales Contacts</a></li>
                            <li class="<?php echo activate_menu('technical_and_other'); ?>"><a href="<?php echo base_url("technical-and-other");?>">Technical and Other</a></li>
                            <li class="<?php echo activate_menu('sales_contacts'); ?>"><a href="<?php echo base_url("sales-contacts");?>">Sales Contact</a></li>
                            <li class="<?php echo activate_menu('export_contacts'); ?>"><a href="<?php echo base_url("export-contacts");?>">Export Contact</a></li>
                            <!-- <li><a href="announcements.html">General Inquiry</a></li> -->
                        </ul>
                    </li>

                    <li>
                        <form action="<?php echo base_url('search/search-result'); ?>" class="search-form" method="post">
                            <div class="form-group has-feedback" style="margin-bottom: 5px;">
                                <label for="search" class="sr-only">Search</label>
                                <input type="search" class="form-control search_text" name="search_text" id="search_text" placeholder="search">
                                <input type="submit" class="form-control" value=" ">
                                <span class="glyphicon glyphicon-search form-control-feedback">                                                                      
                                </span>                                
                            </div>
                        </form>
                    </li>
                </ul>

                <div class="clearfix"></div>

                <ul class="nav navbar-nav navbar-right manu_ul">
                    <li class="<?php echo activate_menu('home'); ?>"><a href="<?php echo base_url("home"); ?>">Home</a></li>
                    <li class="dropdown <?php
                                                echo activate_menu('company_overview');
                                                echo activate_menu('board_of_directors');
                                                echo activate_menu('customer');
                                                echo activate_menu('technology');
                                                echo activate_menu('awards');
                                                echo activate_menu('announcements');
                                                 ?>">
                        <a class="dropdown-toggle" data-toggle="dropdown" style="cursor: pointer;">About Us
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="<?php echo activate_menu('company_overview'); ?>"><a href="<?php echo base_url("company-overview"); ?>">Company Overview </a></li>
                            <!-- <li class="<?php echo activate_menu('board_of_directors'); ?>"><a href="<?php echo base_url("board-of-directors"); ?>">Board of Directors</a></li> -->
                            <li class="<?php echo activate_menu('customer'); ?>"><a href="<?php echo base_url("customer"); ?>">Customers</a></li>
                            <!-- <li><a href="#">Senior Management</a></li> -->
                            <li class="<?php echo activate_menu('technology'); ?>"><a href="<?php echo base_url("technology"); ?>">Technology</a></li>
                            <!-- <li><a href="#">History & Milestones</a></li> -->
                            <li class="<?php echo activate_menu('awards'); ?>"><a href="<?php echo base_url("awards"); ?>">Awards & Achievements</a></li>
                            <li class="<?php echo activate_menu('announcements'); ?>"><a href="<?php echo base_url("announcements/view"); ?>">Announcements</a></li>
                        </ul>
                    </li>

                    <li class="dropdown <?php
                                                echo activate_menu('annual_reports');
                                                echo activate_menu('quarterly_reports');
                                                 ?>">
                        <a class="dropdown-toggle" data-toggle="dropdown" style="cursor: pointer;">Financial
                            Information
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <!-- <li><a href="#">Company Information</a></li> -->
                            <li class="<?php echo activate_menu('annual_reports'); ?>"><a href="<?php echo base_url("annual-reports"); ?>">Annual Reports</a></li>
                            <li class="<?php echo activate_menu('quarterly_reports'); ?>"><a href="<?php echo base_url("quarterly-reports"); ?>">Quarterly Reports</a></li>
                        </ul>
                    </li>

                    <li class="<?php echo activate_menu('product_categories'); ?>"><a href="<?php echo base_url("product-catalogue"); ?>">Product catalogue</a></li>

                    <li class="dropdown <?php
                                                echo activate_menu('completed_projects');
                                                echo activate_menu('ongoing_projects');
                                               
                                                 ?>" >
                        <a class="dropdown-toggle" data-toggle="dropdown" style="cursor: pointer;">Projects
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="<?php echo activate_menu('ongoing_projects'); ?>"><a href="<?php echo base_url("local-projects"); ?>">Local Projects </a></li>
                            <li class="<?php echo activate_menu('completed_projects'); ?>"><a href="<?php echo base_url("international-projects"); ?>">International Projects </a></li>
                        </ul>
                    </li>

                    <li class="<?php echo activate_menu('news'); ?>"><a href="<?php echo base_url("news/view"); ?>">News & Updates</a></li>
                    <li class="<?php echo activate_menu('csr'); ?>"><a href="<?php echo base_url("csr"); ?>">CSR</a></li>
                </ul>

                <!-- mobile menu show -->
                <ul class="nav navbar-nav navbar-right manu_top_ul visible-xs">
                    <li class="<?php echo activate_menu('quality-assuarance'); ?>"><a href="<?php echo base_url("quality-assuarance"); ?>">Quality Assurance</a></li>
                    <li class="<?php echo activate_menu('research-development'); ?>"><a href="<?php echo base_url("research-development"); ?>">Research and Developments</a></li>

                    <li class="dropdown <?php
                                                echo activate_menu('brochures');
                                            // echo activate_menu('technical_information');
                                                echo activate_menu('certificates');
                                                echo activate_menu('factory_tours');
                                                 ?>">
                        <a class="dropdown-toggle" data-toggle="dropdown" style="cursor: pointer;">Resources
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="<?php echo activate_menu('brochures'); ?>"><a href="<?php echo base_url("brochures"); ?>">Brochures</a></li>
                            <!-- <li class="<?php echo activate_menu('technical_information'); ?>"><a href="<?php echo base_url('technical-information'); ?>">Technical Information</a></li> -->
                            <li class="<?php echo activate_menu('certificates'); ?>"><a href="<?php echo base_url('certificates'); ?>">Certificates</a></li>
                            <li class="<?php echo activate_menu('factory_tours'); ?>"><a href="<?php echo base_url('video-gallery') ?>">Video Gallery</a></li>
                        </ul>
                    </li>

                    <li class="<?php echo activate_menu('careers'); ?>"><a href="<?php echo base_url("careers"); ?>">Careers</a></li>

                    <li class="dropdown <?php
                                                echo activate_menu('contact_us');
                                                echo activate_menu('distributors');
                                                echo activate_menu('quick_sales_contacts');
                                                echo activate_menu('technical_and_other');
                                                echo activate_menu('sales_contacts');
                                                echo activate_menu('export_contacts');
                                                 ?>">
                        <a class="dropdown-toggle" data-toggle="dropdown" style="cursor: pointer;">Contact
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="<?php echo activate_menu('contact_us'); ?>"><a href="<?php echo activate_menu('contact-details') ?>">Contact details</a></li>
                            <li class="<?php echo activate_menu('brochures'); ?>"><a href="<?php echo activate_menu('distributors') ?>">Distributor listing with map</a></li>
                            <li class="<?php echo activate_menu('quick_sales_contacts'); ?>"><a href="<?php echo base_url("quick-sales-contacts");?>">Quick Sales Contacts</a></li>
                            <li class="<?php echo activate_menu('technical_and_other'); ?>"><a href="<?php echo base_url("technical-and-other");?>">Technical and Other</a></li>
                            <li class="<?php echo activate_menu('sales_contacts'); ?>"><a href="<?php echo base_url("sales-contacts");?>">Sales Contact</a></li>
                            <li class="<?php echo activate_menu('export_contacts'); ?>"><a href="<?php echo base_url("export-contacts");?>">Export Contact</a></li>
                            <!-- <li><a href="announcements.html">General Inquiry</a></li> -->
                        </ul>
                    </li>

                    <li>
                        <form action="" class="search-form">
                            <div class="form-group has-feedback" style="margin-bottom: 5px;">
                                <label for="search" class="sr-only">Search</label>
                                <input type="text" class="form-control" name="search" id="search"
                                    placeholder="search">
                                <span class="glyphicon glyphicon-search form-control-feedback"></span>
                            </div>
                        </form>
                    </li>
                </ul>
                <!-- mobile menu show -->
            </div>
        </div>
    </nav>

    <!-- scroll down nav bar -->
    <!-- partial:index.partial.html -->
    <div id="wrapper">

        <!-- logo -->
        <a href="<?php echo base_url("home"); ?>"><img src="<?php echo base_url("assets/frontend/images/logo_2.svg"); ?>" alt=""
                class="img-responsive scroll_down_logo navbar02"></a>
        <!-- logo -->

        <button class="scroll_down_menu_toggle navbar02" id="scroll_down_menu_toggle" type="button">
            <svg viewBox="0 0 100 100" width="60">
                <path class="line top"
                    d="m 30,33 h 40 c 0,0 9.044436,-0.654587 9.044436,-8.508902 0,-7.854315 -8.024349,-11.958003 -14.89975,-10.85914 -6.875401,1.098863 -13.637059,4.171617 -13.637059,16.368042 v 40" />
                <path class="line middle" d="m 30,50 h 40" />
                <path class="line bottom"
                    d="m 30,67 h 40 c 12.796276,0 15.357889,-11.717785 15.357889,-26.851538 0,-15.133752 -4.786586,-27.274118 -16.667516,-27.274118 -11.88093,0 -18.499247,6.994427 -18.435284,17.125656 l 0.252538,40" />
            </svg>
        </button>

        <div class="scroll_down_menu">
            <ul class="panel-group" id="accordion">
                <li><a data-text="1" href="<?php echo base_url("home"); ?>">Home</a></li>
                <li><a data-text="2" data-toggle="collapse" data-parent="#accordion" href="#collapse1">About Us </a></li>
                <div class="panel panel-default" style="background-color: inherit;border: none;">
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <li class="scroll_down_menu_sub_menu"><a href="<?php echo base_url("company-overview"); ?>">Company Overview </a></li>
                            <!-- <li class="scroll_down_menu_sub_menu"><a href="<?php echo base_url("board-of-directors"); ?>">Board of Directors</a></li> -->
                            <li class="scroll_down_menu_sub_menu"><a href="<?php echo base_url("customer"); ?>">Customers</a></li>
                            <!-- <li class="scroll_down_menu_sub_menu"><a href="#">Senior Management</a></li> -->
                            <li class="scroll_down_menu_sub_menu"><a href="<?php echo base_url("technology"); ?>">Technology</a></li>
                            <!-- <li class="scroll_down_menu_sub_menu"><a href="#">History & Milestones</a></li> -->
                            <li class="scroll_down_menu_sub_menu"><a href="<?php echo base_url("awards"); ?>">Awards & Achievements</a></li>
                            <li class="scroll_down_menu_sub_menu"><a href="<?php echo base_url("announcements/view"); ?>">Announcements</a>
                        </div>
                    </div>
                </div>


                <li><a data-text="3" data-toggle="collapse" data-parent="#accordion"
                        href="#collapse2">Financial Information</a>
                </li>
                <div class="panel panel-default" style="background-color: inherit;border: none;">
                    <div id="collapse2" class="panel-collapse collapse">
                        <!-- <li class="scroll_down_menu_sub_menu"><a href="#">Company Information</a></li> -->
                        <li class="scroll_down_menu_sub_menu"><a href="<?php echo base_url("annual-reports"); ?>">Annual
                                Reports</a></li>
                        <li class="scroll_down_menu_sub_menu"><a href="<?php echo base_url("quarterly-reports"); ?>">Quarterly
                                Reports</a></li>
                        </li>
                    </div>
                </div>

                <li><a data-text="4" href="<?php echo base_url("product-catalogue"); ?>">Product catalogue </a></li>
                <li><a data-text="5" data-toggle="collapse" data-parent="#accordion"
                        href="#collapse3">Projects </a></li>
                <div class="panel panel-default" style="background-color: inherit;border: none;">
                    <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">
                            <li class="scroll_down_menu_sub_menu"><a href="<?php echo base_url("local-projects"); ?>">Local Projects </a></li>
                            <li class="scroll_down_menu_sub_menu"><a href="<?php echo base_url("international-projects"); ?>">International Projects</a></li>
                        </div>
                    </div>
                </div>

                <li><a data-text="6" href="<?php echo base_url("news/view"); ?>">News & Updates </a></li>
                <li ><a data-text="7" href="<?php echo base_url("csr"); ?>">CSR</a></li>
                <li><a data-text="8" href="<?php echo base_url("quality-assuarance"); ?>">Quality Assurance</a></li>
                <li><a data-text="9" href="<?php echo base_url("research-development"); ?>">Research and Developments</a></li>

                <li><a data-text="10" data-toggle="collapse" data-parent="#accordion"
                        href="#collapse4">Resources </a></li>
                <div class="panel panel-default" style="background-color: inherit;border: none;">
                    <div id="collapse4" class="panel-collapse collapse">
                        <div class="panel-body">
                            <li class="scroll_down_menu_sub_menu"><a href="<?php echo base_url("brochures"); ?>">Brochures</a>
                            </li>
                            <li class="scroll_down_menu_sub_menu"><a href="<?php echo base_url("technical-information"); ?>">Technical
                                    Information</a></li>
                            <li class="scroll_down_menu_sub_menu"><a href="<?php echo base_url("video-gallery"); ?>">Video Gallery</a></li>
                        </div>
                    </div>
                </div>

                <li><a data-text="11" href="<?php echo base_url("careers"); ?>">Careers</a></li>

                <li><a data-text="12" data-toggle="collapse" data-parent="#accordion"
                        href="#collapse5">Contact Us </a></li>
                <div class="panel panel-default" style="background-color: inherit;border: none;">
                    <div id="collapse5" class="panel-collapse collapse">
                        <div class="panel-body">
                            <li class="scroll_down_menu_sub_menu"><a href="<?php echo base_url("contact-us"); ?>">Contact details</a>
                            </li>
                            <li class="scroll_down_menu_sub_menu"><a href="<?php echo base_url("distributors"); ?>">Distributor listing with map</a></li>
                            <li class="scroll_down_menu_sub_menu"><a href="<?php echo base_url("quick-sales-contacts");?>">Quick Sales Contacts</a></li>
                            <li class="scroll_down_menu_sub_menu"><a href="<?php echo base_url("technical-and-other");?>">Technical and Other</a></li>
                            <li class="scroll_down_menu_sub_menu"><a href="<?php echo base_url("sales-contacts");?>">Sales Contact</a></li>
                            <li class="scroll_down_menu_sub_menu"><a href="<?php echo base_url("export-contacts");?>">Export Contact</a></li>
                            <!-- <li class="scroll_down_menu_sub_menu"><a href="announcements.html">General Inquiry</a></li> -->
                        </div>
                    </div>
                </div>
            </ul>

        </div>
        <div id="bg-circle"></div>
    </div>
    <!-- partial -->
    <!-- scroll down nav bar end -->

    

    <!-- header end-->

    <!-- resrt password -->

