<?php
if($this->session->userdata('logged_in')) {
    $this->load->view('ui/header_log');
    ?>

    <div class="container">
        <h2>TECH HELP RQUEST</h2>
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
                                <input placeholder="Problem tech help required" type="text" tabindex="2" required autofocus>
                            </label>
                        </div>
                        <div>
                            <label>
                                <input placeholder="Testing or the work you have already done to repair the fault" type="text" tabindex="2" required autofocus>
                            </label>
                        </div>








                        <!-- /Form -->
                    </div>

                </div>

                <div class="clearfix"></div>
            </div>
            <a href="#"><div class="reg_fb"><img src="<?= base_url() ?>application/libraries/images/facebook.png" alt=""><i>THE PROBLEM OR FAULT IS OCCURING </i><div class="clearfix"></div></div></a>
            <div class="registration">

                <div class="registration_left">

                    <div class="registration_form">
                        <!-- Form -->

                        <div>
                            <table width="100%" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td width="6%"><input name="" type="checkbox" value=""></td>
                                    <td width="94%">In the morning with the first staring.</td>
                                </tr>
                                <tr>
                                    <td><input name="" type="checkbox" value=""></td>
                                    <td>During the cold start to warm up period</td>
                                </tr>
                                <tr>
                                    <td><input name="" type="checkbox" value=""></td>
                                    <td>Just After the warm up</td>
                                </tr>
                                <tr>
                                    <td><input name="" type="checkbox" value=""></td>
                                    <td>When ruining at normal temperature  </td>
                                </tr>
                                <tr>
                                    <td><input name="" type="checkbox" value=""></td>
                                    <td>Faulty is continuous</td>
                                </tr>
                                <tr>
                                    <td><input name="" type="checkbox" value=""></td>
                                    <td>Fault is intermittent</td>
                                </tr>
                                <tr>
                                    <td><input name="" type="checkbox" value=""></td>
                                    <td>Fault comes on after an action (Please explain in the remark Colum)</td>
                                </tr>
                                <tr>
                                    <td><input name="" type="checkbox" value=""></td>
                                    <td>Fault comes up on at normal running temperature</td>
                                </tr>
                                <tr>
                                    <td><input name="" type="checkbox" value=""></td>
                                    <td>Fault come up on accelerations</td>
                                </tr>
                                <tr>
                                    <td><input name="" type="checkbox" value=""></td>
                                    <td>Fault come up on Dec elations.</td>
                                </tr>
                                <tr>
                                    <td><input name="" type="checkbox" value=""></td>
                                    <td>Fault come up on Braking</td>
                                </tr>
                            </table>
                            <div>
                                <input type="submit" value="submit" id="register-submit">
                            </div>
                        </div>



                        <!-- /Form -->
                    </div>

                </div>
                <div class="registration_left">

                    <div class="registration_form">
                        <!-- Form -->

                        <div>
                            <label>
                                <input placeholder="Remarks" type="email" tabindex="3" required>
                            </label>
                        </div>



                        <!-- /Form -->
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <a href="#"><div class="reg_fb"><img src="<?= base_url() ?>application/libraries/images/facebook.png" alt=""><i>AGREEMENT</i><div class="clearfix"></div></div></a>
            <h3>Terms and conditions for the tech help usage</h3><br>
            1.	The service of Requests for Tech Help andRequest for Data will be done bymany of the website users based on their experience and their knowledge.The time period for the response or supply cannot be guaranteed, because it depends on the users volunteering to help the others in the field.<br><br>
            2.	You cannot hold ourselves responsible for any inaccuracy of the Tech Help supplied to you by the person helping you.<br><br>
            3.	You cannot hold ourselves or the person giving the tech help responsible for any damages caused to the vehicle you are repairing, because we are supplying only the procedure to carry out the work. It is your responsibility to do the repairs or service accurately and safelyto restore the vehicle to the original condition.<br><br>

            I/We do hereby confirm that I read the above terms and conditions of the website and agrees to the terms and conditions.
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