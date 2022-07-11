<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>.: AGRI :.</title>
        <?php $userbackendsession = $this->session->userdata('userbackendsession');
        if ($userbackendsession == '') {
            $data = array();
            $data['error'] = '';
            $this->load->view('adminpanel/login_form', $data);
			exit();
        } ?>
        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" rel="stylesheet">
        <link href="<?php echo base_url("assets/fonts/css/font-awesome.min.css"); ?>" rel="stylesheet">
        <link href="<?php echo base_url("assets/css/animate.min.css"); ?>" rel="stylesheet">
        <!-- Custom styling plus plugins -->
        <!--<link rel="icon" type="image/png" href="<?php echo base_url("assets/images/favicon2.ico"); ?>"> -->
        <link rel="icon" type="image/png" href="<?php echo base_url("front_img/favi.png"); ?>">
        <link href="<?php echo base_url("assets/css/custom.css"); ?>" rel="stylesheet">
        <link href="<?php echo base_url("assets/css/icheck/flat/green.css"); ?>" rel="stylesheet">
        <link href="<?php echo base_url("assets/css/datatables/tools/css/dataTables.tableTools.css"); ?>" rel="stylesheet">
        <link href="<?php echo base_url("assets/css/calendar/fullcalendar.css"); ?>" rel="stylesheet">
        <link href="<?php echo base_url("assets/css/calendar/fullcalendar.print.css"); ?>" rel="stylesheet" media="print">


        <!-- colorpicker -->
        <link href="<?php echo base_url("assets/css/colorpicker/bootstrap-colorpicker.min.css"); ?>" rel="stylesheet">
        <script src="<?php echo base_url("assets/js/jquery.min.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/js/moment.min2.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/js/datepicker/daterangepicker.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/js/clockpicker/clockpicker.min.js"); ?>"></script>
        <script src="<?php echo base_url("assets/js/moment.min.js"); ?>"></script>
        <script src="<?php echo base_url("assets/js/calendar/fullcalendar.min.js"); ?>"></script>
        <script src="<?php echo base_url("assets/js/validator/validator.js"); ?>"></script>




        <?php /* ?><link href="<?php echo base_url("assets/timepicker/css/bootstrap-datetimepicker.min.css"); ?>" rel="stylesheet">
          <script src="<?php echo base_url("assets/timepicker/js/bootstrap-datetimepicker.min.js"); ?>"></script><?php */ ?>


        <!--[if lt IE 9]>
            <script src="../assets/js/ie8-responsive-file-warning.js"></script>
            <![endif]-->
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
            
            <style>
                .btn-dark {background-image: linear-gradient(to right, #00c183 0%, #006185  51%, #00c183  100%)}
                .btn-dark {
                    font-size: 12px;
                    padding: 15px 25px;
                    text-align: center;
                    text-transform: uppercase;
                    transition: 0.5s;
                    background-size: 200% auto;
                    color: white;            
                    border-radius: 5px;
                    /*display: block;*/
                }
                
                .btn-dark:hover {
                    background-position: right center; /* change the direction of the change here */
                    color: #fff;
                    text-decoration: none;
                }
                
                .btn-primary {background-image: linear-gradient(to right, #00c183 0%, #006185  51%, #00c183  100%)}
                .btn-primary {
                    font-size: 12px;
                    padding: 15px 25px;
                    text-align: center;
                    text-transform: uppercase;
                    transition: 0.5s;
                    background-size: 200% auto;
                    color: white;            
                    border-radius: 5px;
                    /*display: block;*/
                }
                
                .btn-primary:hover {
                    background-position: right center; /* change the direction of the change here */
                    color: #fff;
                    text-decoration: none;
                }
                
                .btn-default {background-image: linear-gradient(to right, #eabbbd 0%, #ff959a  51%, #fe363f  100%)}
                .btn-default {
                    font-size: 12px;
                    padding: 15px 25px;
                    text-align: center;
                    text-transform: uppercase;
                    transition: 0.5s;
                    background-size: 200% auto;
                    color: white;            
                    border-radius: 5px;
                    /*display: block;*/
                }
                
                .btn-default:hover {
                    background-position: right center; /* change the direction of the change here */
                    color: #fff;
                    text-decoration: none;
                }
                .switch {
                position: relative;
                display: inline-block;
                width: 47px;
                height: 22px;
                }

                .switch input { 
                opacity: 0;
                width: 0;
                height: 0;
                }

                .slider {
                position: absolute;
                cursor: pointer;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: #ccc;
                -webkit-transition: .4s;
                transition: .4s;
                }

                .slider:before {
                position: absolute;
                content: "";
                height: 15px;
                width: 15px;
                left: 4px;
                bottom: 4px;
                background-color: white;
                -webkit-transition: .4s;
                transition: .4s;
                }

                input:checked + .slider {
                background-image: linear-gradient(to right, #00c183 0%, #006185  51%, #00c183  100%);
                }

                input:focus + .slider {
                box-shadow: 0 0 1px;
                }

                input:checked + .slider:before {
                -webkit-transform: translateX(26px);
                -ms-transform: translateX(26px);
                transform: translateX(26px);
                }

                /* Rounded sliders */
                .slider.round {
                border-radius: 34px;
                }

                .slider.round:before {
                border-radius: 50%;
                }
            </style>
            
    </head>
    <script type="text/javascript">
        function MM_jumpMenu(targ, selObj, restore) { //v3.0
            eval(targ + ".location='" + selObj.options[selObj.selectedIndex].value + "'");
            if (restore)
                selObj.selectedIndex = 0;
        }
    </script>
    <?php
    $iUserType = $this->session->userdata('iUserTypebackendsession');
    $uType = $this->session->userdata('uTypebackendsession');
    if ($iUserType == '' || $uType != 'colomboBACKUSER') {
        $data = array();
        $data['error'] = '';
        $this->load->view('adminpanel/login_form', $data);
        exit();
    }
    $uUserID = $this->session->userdata('userbackendsession');
    ?>
    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <!-- <div class="navbar nav_title" style="border: 0; height:auto; padding-bottom:10px;">
                             <a href="#" class="site_title"><img src="<?php echo base_url("assets/images/logo.png"); ?>" alt=""/></a>
                         </div>
                         <div class="clearfix"></div>-->
                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <!--<h3>General</h3>-->
                                <ul class="nav side-menu">
                                    <?php echo $this->dynamic_menu->build_menu($this->session->userdata('iUserTypebackendsession')); ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- top navigation -->
                <div class="top_nav">
                    <div class="nav_menu" style="height:50px;">
                        <nav class="" role="navigation">
                            <div class="nav toggle">
                                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                            </div>
                            <div class="col-md-8" style="text-align:center;"><a href="http://tekgeeks.net/"><img src="<?php echo base_url("assets/images/tg-logo2.png"); ?>" alt=""/ style="position: relative; top: -10px;"></a></div>
                            <ul class="nav navbar-nav navbar-right" >
                                <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <!--<img src="<?php echo base_url("assets/images/img.jpg"); ?>" alt="">--> 
                                        <?php echo $this->session->userdata('vUserNamebackendsession'); ?>
                                        &nbsp;<span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                        <li><a href="<?php echo base_url() . "adminpanel/master/profile/update_profile/$uUserID" ?>">  Profile</a>
                                        </li>
                                        <li><a href="<?php echo base_url() . "adminpanel/login/logout" ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /top navigation -->