<?php

if($this->session->userdata('logged_in')) {
    $this->load->view('ui/header_log');
    ?>

    <div class="container">

        <div class="main">

            <a href="#">
                <div class="reg_fb"><img src="<?= base_url() ?>application/libraries/images/facebook.png" alt=""><i>Company
                        Name</i>
                    <div class="clearfix"></div>
                </div>
            </a>
            <!-- start registration -->
            <div class="registration">
                <div align="center"><img src="<?= base_url() ?>application/libraries/images/Welcome.png"></div>
                <div class="registration_left">

                    <div class="registration_form"></div>

                </div>

                <div class="clearfix"></div>
            </div>


            <br>
        </div>
    </div>
    <?php
    $this->load->view('ui/footer_log');
}else{
    echo 'Please Login to the System';
}

?>