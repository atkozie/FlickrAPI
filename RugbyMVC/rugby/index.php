<?php
// this goes application/views/rugby/index.php
$this->load->view($this->config->item('theme') . 'header')
?>
<h2><?php echo $title; ?></h2>


        <h3> Rugby Teams </h3>
        <div class="main">
            <ul>
                <li>
                    <a href="<?php echo site_url('rugby/All Blacks'); ?>">All Blacks</a> <!-- Sends loaded link to CI URL, Gets picked up by the Model -->
                </li>
                <li>
                    <a href="<?php echo site_url('rugby/spring boks'); ?>">Spring Boks</a>
                </li>
                <li>
                    <a href="<?php echo site_url('rugby/Australian Rugby'); ?>">Wallabies</a>
                </li>
            </ul>
        </div>
     

<?
$this->load->view($this->config->item('theme') . 'footer')
?>


