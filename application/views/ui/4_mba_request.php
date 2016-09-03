<?php
if($this->session->userdata('logged_in')) {
    $this->load->view('ui/header_log');
    ?>

    <div class="container">
        <h2>DATA RQUEST</h2>
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
                        <div>
                            <label>
                                <input placeholder="Details of required" type="text" tabindex="2" required autofocus>
                            </label>
                        </div>



                        <div>
                            <input type="submit" value="submit" id="register-submit">
                        </div>





                        <!-- /Form -->
                    </div>

                </div>

                <div class="clearfix"></div>
            </div>

            <div class="registration">


            </div>

            <a href="#"><div class="reg_fb"><img src="<?= base_url() ?>application/libraries/images/facebook.png" alt=""><i>AGREEMENT</i><div class="clearfix"></div></div></a>
            <h3>Terms and conditions for the tech help usage</h3><br>
            1.	The supply of Requests for Data will be done by many of the website users based on data available with them. The time period for the response or supply cannot be guaranteed, because it depends on the users volunteering to help the others in the field.<br><br>
            2.	You cannot hold ourselves responsible for any inaccuracy of the Data supplied to you by the person helping you.<br><br>
            3.	You cannot hold ourselves or the person giving the Data responsible for any damages caused to the vehicle you are repairing, because we are supplying only the Data to carry out the work. It is your responsibility to do the repairs or service accurately and safely to restore the vehicle to its original condition.<br><br>

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