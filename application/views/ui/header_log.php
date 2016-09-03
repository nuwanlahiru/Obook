<!DOCTYPE HTML>
<html>
<head>
    <title>company name</title>
    <link href="<?= base_url() ?>application/libraries/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary JavaScript plugins) -->
    <script type='text/javascript' src="<?= base_url() ?>application/libraries/js/jquery-1.11.1.min.js"></script>
    <!-- Custom Theme files -->
    <link href="<?= base_url() ?>application/libraries/css/style.css" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--webfont-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- start menu -->
    <link href="<?= base_url() ?>application/libraries/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="<?= base_url() ?>application/libraries/js/megamenu.js"></script>
    <script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
    <script src="<?= base_url() ?>application/libraries/js/menu_jquery.js"></script>
</head>
<body>
<!-- header_top -->
<div class="top_bg">
    <div class="container">
        <div class="header_top">
            <div class="top_left">
                <h2><a href="#">Total Existing Free</a>All company infornation's , Online Advertisment , Free Registation . </h2>
            </div>
            <div class="top_right">
                <ul>
                    <li><a href="#">Recently viewed</a></li>|
                    <li><a href="contact.html">Contact</a></li>|
                    <li class="login" >
                        <div><a href="<?= base_url() ?>index.php/MainController/logout"><span>sing out</span></a>

                        </div>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- header -->
<div class="header_bg">
    <div class="container">
        <div class="header">
            <div class="logo">
                <a href="index.html"><img src="<?= base_url() ?>application/libraries/images/logo.png" alt=""/> </a>
            </div>
            <!-- start header_right -->
            <div class="header_right">
                <div class="create_btn">
                    <a class="arrow"  href="<?= base_url() ?>index.php/MainController/logout">sing out <img src="<?= base_url() ?>application/libraries/images/right_arrow.png" alt=""/>  </a>
                </div>



                <div class="clearfix"></div>
            </div>
            <!-- start header menu -->
            <ul class="megamenu skyblue">
                <li><a class="color1" href="index.html">Home</a></li>
                <li class="grid"><a class="color2" href="#">Edit Information</a>
                    <div class="megapanel">
                        <div class="row">
                            <div class="col1">
                                <div class="h_nav">
                                    <h4><a>Member Informations</a></h4>

                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4><a>Change Password</a></h4>

                                </div>
                            </div>




                        </div>
                        <div class="row">
                            <div class="col2"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                        </div>
                    </div>
                </li>
                <li class="active grid"><a class="color4" href="#">Service </a>
                    <div class="megapanel">
                        <div class="row">
                            <div class="col1">
                                <div class="h_nav">
                                    <h4><a href="<?= base_url() ?>index.php/MainController/three_help_tech">Requests for Tech Help</a></h4>

                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4><a href="<?= base_url() ?>index.php/MainController/three_mba_request">Request for Data</a></h4>

                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4><a>Helpful Links</a></h4>

                                </div>
                            </div>

                        </div>

                    </div>
                </li>
                <li class="active grid"><a class="color4" href="#">Tech Help Forum</a>
                    <div class="megapanel">
                        <div class="row">
                            <div class="col1">
                                <div class="h_nav">
                                    <h4><a href="<?= base_url() ?>index.php/MainController/four_mba_tech">Requests for Forum Tech Help</a></h4>

                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4><a href="<?= base_url() ?>index.php/MainController/four_mba_request">Requests for Forum Tech Data</a> </h4>

                                </div>
                            </div>


                        </div>

                    </div>
                </li>
                <li><a class="color5" href="#">Advertisement</a>
                    <div class="megapanel">
                        <div class="row">
                            <div class="col1">
                                <div class="h_nav">
                                    <h4><a href="<?= base_url() ?>index.php/MainController/five_advertisment_sale">For Sale</a></h4>

                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4><a href="<?= base_url() ?>index.php/MainController/five_advertisment_buy">Want to Buy</a></h4>

                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4><a>Seek Employment</a></h4>

                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4><a>Vacancies</a></h4>

                                </div>
                            </div>


                        </div>

                    </div>
                </li>
                <li><a class="color5" href="#">Account</a>
                    <div class="megapanel">
                        <div class="row">
                            <div class="col1">
                                <div class="h_nav">
                                    <h4><a>Account Informations</a></h4>

                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4><a>Active Account</a></h4>

                                </div>
                            </div>



                        </div>

                    </div>
                </li>



            </ul>
        </div>
    </div>
</div>