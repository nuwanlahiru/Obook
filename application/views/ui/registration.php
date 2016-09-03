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

    <div class="main">
        <a href="#"><div class="reg_fb"><img src="<?= base_url() ?>application/libraries/images/facebook.png" alt=""><i>BUSINESS CONTACT INFORMATION</i><div class="clearfix"></div></div></a>
        <!-- start registration -->
        <div class="registration">

            <div class="registration_left">


                <!-- [if IE]
                    < link rel='stylesheet' type='text/css' href='ie.css'/>
                 [endif] -->

                <!-- [if lt IE 7]>
                    < link rel='stylesheet' type='text/css' href='ie6.css'/>
                <! [endif] -->

                <div class="registration_form">
                    <!-- Form -->
<form action="<?=base_url() ?>index.php/MainController/saveregistration" method="post">
                    <div>
                        <label>
                            <input name="title" placeholder="Title:" type="text" >
                        </label>
                    </div>
                    <div>
                        <label>
                            <input name="company_name" placeholder="Company name:" type="text" >
                        </label>
                    </div>
                    <div>
                        <label>
                            <input name="phone" placeholder="Phone | Fax:" type="text" tabindex="2" >
                        </label>
                    </div>
                    <div>
                        <label>
                            <input name="email" placeholder="E-mail:" type="email"  >
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
                            <input name="address" placeholder="Registered company address City, State ZIP Code:" type="text" tabindex="2" required autofocus>
                        </label>
                    </div>
                    <div>
                        <label>
                            <input name="date" placeholder="Date business commenced:" type="date" tabindex="3" required>
                        </label>
                    </div>
                    <div>
                        <label>

                            <select name="dbc" placeholder="Date business commenced:"  tabindex="5" required>
                                <option>Sole proprietorship</option>
                                <option>Partnership</option>
                                <option>Limited Company</option>
                                <option>Public Company</option>
                                <option>Technical College</option>
                            </select>
                        </label>
                    </div>


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
                            <input name="unmae" placeholder="Name" type="text" tabindex="1" required autofocus>
                        </label>
                    </div>
                    <div>
                        <label>
                            <input name="uaddress" placeholder="Home Address" type="text" tabindex="2" required autofocus>
                        </label>
                    </div>
                    <div>
                        <label>
                            <input name="uphone" placeholder="Phone" type="text" tabindex="2" required autofocus>
                        </label>
                    </div>
                    <div>
                        <label>
                            <input name="usefax" placeholder="Fax" type="text" tabindex="3" required>
                        </label>
                    </div>
                    <div>
                        <label>
                            <input name="uemail" placeholder="E-mail" type="text" tabindex="2" required autofocus>
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
                            <input name="lyc" placeholder="How long are you in the company" type="text" tabindex="3" required>
                        </label>
                    </div>
                    <div>
                        <label>
                            <input name="designation" placeholder="Your Designation" type="text" tabindex="3" required>
                        </label>
                    </div>
                    <div>
                        <label>
                            <input name="yeq" placeholder="Your Educational qualification" type="text" tabindex="3" required>
                        </label>
                    </div>
                    <div>
                        <label>
                            <input name="ypq" placeholder="Your Professional qualifications" type="text" tabindex="3" required>
                        </label>
                    </div>
                    <div>
                        <label>
                            <input name="noyi" placeholder="Numbers of years in the Industry" type="text" tabindex="3" required>
                        </label>
                    </div>


                    <!-- /Form -->
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!--start-->
        <a href="#"><div class="reg_fb"><img src="<?= base_url() ?>application/libraries/images/facebook.png" alt=""><i>TRADE REFERENCES FROM THE INDUSTRY</i><div class="clearfix"></div></div></a>
        <div class="registration">

            <div class="registration_left">

                <div class="registration_form">
                    <!-- Form -->

                    <div>
                        <label>
                            <input name="companyname1" placeholder="Company name" type="text" tabindex="1" required autofocus>
                        </label>
                    </div>
                    <div>
                        <label>
                            <input name="address1" placeholder="Address" type="text" tabindex="2" required autofocus>
                        </label>
                    </div>
                    <div>
                        <label>
                            <input name="city1" placeholder="City, State ZIP Code" type="text" tabindex="2" required autofocus>
                        </label>
                    </div>
                    <div>
                        <label>
                            <input name="relation_1" placeholder="Relationship" type="text" tabindex="3" required>
                        </label>
                    </div>
                    <br><br>
                    <div>
                        <label>
                            <input name="companyname2" placeholder="Company Name" type="text" tabindex="2" required autofocus>
                        </label>
                    </div>
                    <div>
                        <label>
                            <input name="address2" placeholder="Address" type="text" tabindex="2" required autofocus>
                        </label>
                    </div>
                    <div>
                        <label>
                            <input name="city2" placeholder="City, State ZIP Code" type="text" tabindex="2" required autofocus>
                        </label>
                    </div>
                    <div>
                        <label>
                            <input name="relation2" placeholder="Relationship with the company" type="text" tabindex="2" required autofocus>
                        </label>
                    </div><br><br>
                    <div>
                        <label>
                            <input name="comapnyname3" placeholder="Company name" type="text" tabindex="2" required autofocus>
                        </label>
                    </div>
                    <div>
                        <label>
                            <input name="address3" placeholder="Address" type="text" tabindex="2" required autofocus>
                        </label>
                    </div>
                    <div>
                        <label>
                            <input name="city3" placeholder="City, State ZIP Code" type="text" tabindex="2" required autofocus>
                        </label>
                    </div>
                    <div>
                        <label>
                            <input name="relation3" placeholder="Relationship with the company" type="text" tabindex="2" required autofocus>
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
                            <input name="phone_r" placeholder="Phone" type="text" tabindex="3" required>
                        </label>
                    </div>
                    <div>
                        <label>
                            <input name="fax_r" placeholder="Fax" type="text" tabindex="3" required>
                        </label>
                    </div>
                    <div>
                        <label>
                            <input name="email_r" placeholder="E-mail" type="email" tabindex="3" required>
                        </label>
                    </div>
                    <div>
                        <label>
                            <input name="other_r" placeholder="Other" type="text" tabindex="3" required>
                        </label>
                    </div><br><br>
                    <div>
                        <label>
                            <input name="phone_r_1" placeholder="Phone" type="text" tabindex="3" required>
                        </label>
                    </div>
                    <div>
                        <label>
                            <input name="fax_r_1"  placeholder="Fax" type="text" tabindex="3" required>
                        </label>
                    </div>
                    <div>
                        <label>
                            <input name="email_r_1"  placeholder="E-mail" type="email" tabindex="3" required>
                        </label>
                    </div>
                    <div>
                        <label>
                            <input name="other_r_1" placeholder="Other" type="text" tabindex="3" required>
                        </label>
                    </div><br><br>
                    <div>
                        <label>
                            <input name="phone_r_2" placeholder="Phone" type="text" tabindex="3" required>
                        </label>
                    </div>
                    <div>
                        <label>
                            <input name="fax_r_2" placeholder="Fax" type="text" tabindex="3" required>
                        </label>
                    </div>
                    <div>
                        <label>
                            <input name="email_r_2"  placeholder="E-mail" type="email" tabindex="3" required>
                        </label>
                    </div>
                    <div>
                        <label>
                            <input name="other_r_2" placeholder="Other" type="text" tabindex="3" required>
                        </label>
                    </div>


                    <!-- /Form -->
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!--End-->
        <a href="#"><div class="reg_fb"><img src="<?= base_url() ?>application/libraries/images/facebook.png" alt=""><i>AGREEMENT</i><div class="clearfix"></div></div></a>
        1.	Your application will be acknowledged within 24 hours from the time of submission <br>
        2.	The Administrators of MACRO AUTO BOOK reserve the right to accept or reject your application without giving any reasons.<br>
        3.	By submitting this application, you authorize MACRO AUTO BOOK to make inquiries with regard to the business/trade references that you have supplied.<br>

        <!--start-->
        <a href="#"><div class="reg_fb"><img src="<?= base_url() ?>application/libraries/images/facebook.png" alt=""><i>DIGITAL SIGNATURES</i><div class="clearfix"></div></div></a>
        <div class="registration">

            <div class="registration_left">

                <div class="registration_form">
                    <!-- Form -->

                    <div>
                        <label>
                            <input name="signature" placeholder="Uplode Signature" type="text" tabindex="1" required autofocus>
                        </label>
                    </div>
                    <div>
                        <label>
                            <input name="nametitle" placeholder="Name and Title" type="text" tabindex="2" required autofocus>
                        </label>
                    </div>
                    <div>
                        <label>
                            <input name="date_reg" placeholder="Date" type="date" tabindex="2" required autofocus>
                        </label>
                    </div>
                    <div>

                    </div>




                    <!-- /Form -->
                </div>

            </div>
            <div class="registration_left">

                <div class="registration_form">
                    <!-- Form -->

                    <div>
                        <label>
                            <input name="signature1" placeholder="Signature" type="text" tabindex="3" required>
                        </label>
                    </div>
                    <div>
                        <label>
                            <input name="nametitle1" placeholder="Name and Title" type="text" tabindex="3" required>
                        </label>
                    </div>
                    <div>
                        <label>
                            <input name="date_reg1"  placeholder="Date" type="date" tabindex="3" required>
                        </label>
                    </div>

                    <input type="submit" value="create an account" id="register-submit">

                    <!-- /Form -->
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!--End-->
        </form>

        <!-- end registration -->
    </div>
</div>
