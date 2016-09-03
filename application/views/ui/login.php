<div class="header_bg">
    <div class="container">
        <div class="header">
            <div class="logo">
                <a href="index.html"><img src="<?= base_url() ?>application/libraries/images/logo.png" alt=""/> </a>
            </div>
            <!-- start header_right -->
            <div class="header_right">
                <div class="create_btn">
                    <a class="arrow"  href="registration.html">create account <img src="<?= base_url() ?>application/libraries/images/right_arrow.png" alt=""/>  </a>
                </div>
                <ul class="icon1 sub-icon1 profile_img">
                    <li><a class="active-icon c2" href="#"> </a>
                        <ul class="sub-icon1 list">
                            <li><h3>Advertisment empty</h3><a href=""></a></li>
                            <li><p>Comming Soon, <a href="">Comming Soon</a> Comming Soon</p></li>
                        </ul>
                    </li>
                </ul>
                <ul class="icon1 sub-icon1 profile_img">
                    <li><a class="active-icon c1" href="#"> </a>
                        <ul class="sub-icon1 list">
                            <li><h3>Product empty</h3><a href=""></a></li>
                            <li><p>Comming Soon, <a href="">Comming Soon</a>Comming Soon</p></li>
                        </ul>
                    </li>
                </ul>
                <div class="search">
                    <form>
                        <input type="text" value="" placeholder="search...">
                        <input type="submit" value="">
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- start header menu -->
            <ul class="megamenu skyblue">
                <li><a class="color1" href="index.html">Home</a></li>
                <li class="grid"><a class="color2" href="#">About MAB</a>
                    <div class="megapanel">
                        <div class="row">
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Welcome Massage</h4>

                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Benefit of the site</h4>

                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>How the WS operates</h4>

                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Personals Involved</h4>

                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Target Users</h4>

                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>popular</h4>

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
                                    <h4>Requests for Tech Help</h4>

                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Request for Data</h4>

                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Helpful Links</h4>

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
                                    <h4>Tools</h4>

                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Equipment</h4>

                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Spare Parts</h4>

                                </div>
                            </div>



                        </div>

                    </div>
                </li>




            </ul>
        </div>
    </div>
</div>
<!-- content -->
<div class="container">
    <h2>YOU ARE WELCOME TO OUR WEB SITE!!</h2>Please input the User Name and Password sent by us to your mobile phone to use our website and answer to the details given below
    <div class="main">

        <a href="#"><div class="reg_fb"><img src="<?= base_url() ?>application/libraries/images/facebook.png" alt=""><i>LOG IN</i><div class="clearfix"></div></div></a>
        <!-- start registration -->
        <div class="registration">

            <div class="registration_left">


                <!-- [if IE]
                    < link rel='stylesheet' type='text/css' href='ie.css'/>
                 [endif] -->

                <!-- [if lt IE 7]>
                    < link rel='stylesheet' type='text/css' href='ie6.css'/>
                <! [endif] -->

                <div class="registration_form" >
                    <!-- Form -->
                    <form action="<?=base_url() ?>index.php/MainController/logauth" method="post">
                    <div>
                        <label>
                            <input placeholder="User Name" type="text" name="username"  >
                        </label>
                    </div>
                    <div>
                        <label>
                            <input placeholder="Password" type="password" name="password" >
                        </label>
                    </div>
                        <input type="submit" value="Login" >
                    </form>

                    <!-- /Form -->
                </div>

            </div>

            <div class="clearfix"></div>
        </div>
        <a href="#"><div class="reg_fb"><img src="<?= base_url() ?>application/libraries/images/facebook.png" alt=""><i>USERS CONTACT INFORMATION</i><div class="clearfix"></div></div></a>
        <div class="registration">

            <div class="registration_left">

                <div class="registration_form">
                    <!-- Form -->

                    <div>
                        <label>

                            <select name="" placeholder="Date business commenced:"  tabindex="5" required>
                                <option>Requests for Tech Help</option>
                                <option>Request for Data</option>
                                <option>Helpful Links</option>
                                <option>Requests for Forum Tech Help</option>
                                <option>Requests for Forum Tech Data</option>
                                <option>Forum Advertisementfor Sale</option>
                                <option>Forum Advertisementfor want to Buy</option>
                                <option>Forum Advertisementto seek Employment</option>
                                <option>Forum Advertisementfor Vacancies</option>

                            </select>
                        </label>
                    </div>



                    <!-- /Form -->
                </div>

            </div>
            <div class="registration_left">

                <div class="registration_form">
                    <!-- Form -->

                    <div>
                        <label>
                            <input placeholder="Remarks" type="email" tabindex="3" >
                        </label>
                    </div>
                    <div>
                    <button id="register-submit">Send</button>
                    </div>


                    <!-- /Form -->
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <a href="#"><div class="reg_fb"><img src="<?= base_url() ?>application/libraries/images/facebook.png" alt=""><i>AGREEMENT</i><div class="clearfix"></div></div></a>
        <h3>Terms and conditions for the users of the website</h3><br>
        1.	The Administrators of MACRO AUTO BOOK FIRST TIME LOGIN reserve the right to disable your login or to restrict the activities by monitoring, if we find any of your activities and any harmful environment created to  MACRO AUTO BOOK FIRST TIME LOGIN or it�s users,<br><br>
        2.	If you are a paid subscriber, you will be paid the balance remain for the period if such termination of your login is done.<br><br>
        3.	The service of Requests for Tech Help and Request for Data will be done by panel of experts in the field, but there may be instances it will take more time than stipulated to give you the support due to circumstances beyond our control.<br><br>
        4.	We are giving you the Tech Help and Data supply as accurately as possible, but the accuracy depends on the correctness of the information about the vehicle given by you. You cannot hold ourselves responsible for any inaccuracy of the Tech Help and Data supplied to you.<br><br>
        5.	You cannot hold ourselves responsible for any damages caused to the vehicle you are repairing, because we are supplying only the procedure and data to carry out the work. It is your responsibility to do the repairs or service accurately and original condition.<br><br>
        I / We do hereby confirm that I read the above terms and conditions of the website and agrees to the terms and conditions
        <br>




        <!-- end registration -->
    </div>
</div>
