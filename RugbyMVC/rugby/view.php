<?php
// application/views/rugby/view.php
$this->load->view($this->config->item('theme') . 'header');

echo ' <div class="list-group"> ' ;

foreach($pics as $pic){

  
    $size = 'm';
    $photo_url = '
    http://farm'. $pic->farm . '.staticflickr.com/' . $pic->server . '/' . $pic->id . '_' . $pic->secret . '_' . $size . '.jpg';

    echo "<img class='list-group-item' title='" . $pic->title . "' src='" . $photo_url . "' />";

    echo $pic->title;
    

 
}

echo "</div>";


$this->load->view($this->config->item('theme') . 'footer');


