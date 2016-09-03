<?php
if($this->session->userdata('logged_in')) {
    $this->load->view('ui/header_log');
    ?>

    <div class="container">
        <h2>ADD FOR SALE</h2>
        <div class="main">

            <a href="#"><div class="reg_fb"><img src="<?= base_url() ?>application/libraries/images/facebook.png" alt=""><i>DETAILS</i><div class="clearfix"></div></div></a>
            <!-- start registration -->
            <div class="registration">

                <div class="registration_left">


                    <!-- [if IE]
                        < link rel='stylesheet' type='text/css' href='ie.css'/>
                     [endif] -->

                    <!-- [if lt IE 7]>
                        < link rel='stylesheet' type='text/css' href='ie6.css'/>
                    <! [endif] -->
                    <script>
                        (function() {

                            // Create input element for testing
                            var inputs = document.createElement('input');

                            // Create the supports object
                            var supports = {};

                            supports.autofocus   = 'autofocus' in inputs;
                            supports.required    = 'required' in inputs;
                            supports.placeholder = 'placeholder' in inputs;

                            // Fallback for autofocus attribute
                            if(!supports.autofocus) {

                            }

                            // Fallback for required attribute
                            if(!supports.required) {

                            }

                            // Fallback for placeholder attribute
                            if(!supports.placeholder) {

                            }

                            // Change text inside send button on submit
                            var send = document.getElementById('register-submit');
                            if(send) {
                                send.onclick = function () {
                                    this.innerHTML = '...Sending';
                                }
                            }

                        })();
                    </script>
                    <div class="registration_form">
                        <!-- Form -->

                        <div>
                            <label>
                                <input placeholder="Make of the vehicle" type="text" tabindex="1" required autofocus>
                            </label>
                        </div>
                        <div>
                            <label>
                                <input placeholder="Model of the vehicle" type="text" tabindex="2" required autofocus>
                            </label>
                        </div>
                        <div>
                            <label>
                                <input placeholder="Vin number of the vehicle" type="text" tabindex="2" required autofocus>
                            </label>
                        </div>
                        <div>
                            <label>
                                <input placeholder="Year of Manufacture of the vehicle" type="text" tabindex="2" required autofocus>
                            </label>
                        </div>










                        <!-- /Form -->
                    </div>

                </div>

                <div class="clearfix"></div>
            </div>



            <a href="#"><div class="reg_fb"><img src="<?= base_url() ?>application/libraries/images/facebook.png" alt=""><i>Items available for Sale</i><div class="clearfix"></div></div></a>
            <table width="100%" cellspacing="0" cellpadding="0">
                <tr>
                    <td><strong>PART NUMBER</strong></td>
                    <td><strong>DESCRIPTIONS</strong></td>
                    <td><strong>Qty</strong></td>
                    <td><strong>Price Rs</strong></td>
                </tr>
                <tr>
                    <td bgcolor="#F9F9F9"></td>
                    <td bgcolor="#F9F9F9">&nbsp;</td>
                    <td bgcolor="#F9F9F9">&nbsp;</td>
                    <td bgcolor="#F9F9F9">&nbsp;</td>
                </tr>
                <tr>
                    <td></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td bgcolor="#F9F9F9"></td>
                    <td bgcolor="#F9F9F9">&nbsp;</td>
                    <td bgcolor="#F9F9F9">&nbsp;</td>
                    <td bgcolor="#F9F9F9">&nbsp;</td>
                </tr>
            </table>
            <div class="registration_form">
                <div>
                    <label>
                        <input placeholder="Photo of the Items showing the most wanted details in fitting the item " type="text" tabindex="2" required autofocus>
                    </label>
                </div>
                <div>
                    <label>
                        <input placeholder="If you have an Art Work for the advertisement, please up load the file by clicking the button and selecting the file. " type="text" tabindex="2" required autofocus>
                    </label>
                </div>
                <div>
                    <input type="submit" value="submit" id="register-submit">
                </div>	</div>
            <br>

            <a href="#"><div class="reg_fb"><img src="<?= base_url() ?>application/libraries/images/facebook.png" alt=""><i>AGREEMENT</i><div class="clearfix"></div></div></a>
            <h3>Terms and conditions for the tech help usage</h3><br>
            1.	The service of Requests for Advertisement will be done within 24 hours from the time of submission, but there may be instances it will take more time than stipulated time period to give you this services due to circumstances beyond our control.<br><br>
            2.	We cannot guarantee or hold responsible for the sale of your items through this advertisement<br><br>
            3.	he accuracy of the Advertisement depends on the correctness of the information given by you. You cannot hold ourselves responsible for any inaccuracy of Advertisement.<br><br>
            4.	You cannot hold ourselves responsible for any damages caused to you due to this advertisement<br><br>

            I / We do hereby confirm that I read the above terms and conditions of the website and agrees to the terms and conditions
            <br>


            <!-- end registration -->
        </div>
    </div>


    <?php
    $this->load->view('ui/footer_log');
}else{
    echo 'Please Login to the System';
}

?>