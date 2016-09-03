<!DOCTYPE HTML>
    <html>
    <head>
        <title>company name</title>
        <meta name="description" content="">
        <meta name="Keywords" content="">
        <link href="<?= base_url() ?>application/libraries/css/bootstrap.css" rel='stylesheet' type='text/css' />
        <script type='text/javascript' src="<?= base_url() ?>application/libraries/js/jquery-1.11.1.min.js"></script>
        <link href="<?= base_url() ?>application/libraries/css/style.css" rel='stylesheet' type='text/css' />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="application/x-javascript">
            addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
        </script>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href="<?= base_url() ?>application/libraries/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
        <script type="text/javascript" src="<?= base_url() ?>application/libraries/js/megamenu.js"></script>
        <script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
        <link rel="stylesheet" href="<?= base_url() ?>application/libraries/css/fwslider.css" media="all">
        <script src="<?= base_url() ?>application/libraries/js/jquery-ui.min.js"></script>
        <script src="<?= base_url() ?>application/libraries/js/fwslider.js"></script>
        <script src="<?= base_url() ?>application/libraries/js/menu_jquery.js"></script>

        <script type="text/javascript">


                function loggin()   {

                    var uname = $('email').val();
                    var pass = $('password').val();

                    $.ajax({
                        type: 'POST',
                        url: '<?= base_url()?>index.php/MainController/logauth',
                        data: { uname: uname, pword:pass

                        },
                        success: function(response) {
                          //  content.html(response);
                            window.location.reload();
                        }
                    });
                }

        </script>
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
                        <li><a href="#">Contact</a></li>|
                        <li class="login" >
                           <a href="<?= base_url() ?>index.php/MainController/login" ><span>Login</span></a>
<!--                                <div id="loginBox">-->
<!--                                    <form id="loginForm">-->
<!--                                        <fieldset id="body">-->
<!--                                            <fieldset>-->
<!--                                                <label for="email">Email Address</label>-->
<!--                                                <input type="text" name="email" id="email">-->
<!--                                            </fieldset>-->
<!--                                            <fieldset>-->
<!--                                                <label for="password">Password</label>-->
<!--                                                <input type="password" name="password" id="password">-->
<!--                                            </fieldset>-->
<!--                                            <input type="button" onclick="loggin()" id="login" value="Sign in">-->
<!--                                            <label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>-->
<!--                                        </fieldset>-->
<!--                                        <span><a href="#">Forgot your password?</a></span>-->
<!--                                    </form>-->
<!--                                </div>-->

                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
