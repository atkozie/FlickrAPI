<?php
class Rugby_model extends CI_Model {

    public function __construct()
    {
        //$this->load->database();
    } //end of constructor

    public function get_rugby($tags)
    {
        // When they click a link the $tags from the URL are passed. 
        // this function then calls the API and the controller. 
        // API Key
        $api_key = '###';

        $perPage = 25;
        $url = 'https://api.flickr.com/services/rest/?method=flickr.photos.search';
        $url.= '&api_key=' . $api_key;
        $url.= '&tags=' . $tags;
        $url.= '&per_page=' . $perPage;
        $url.= '&format=json';
        $url.= '&nojsoncallback=1';
 
        $response = json_decode(file_get_contents($url));
        $pics = $response->photos->photo;
        
        // this return sends the response as a variable to the controller. 
        return $pics;

    } // end of get news



}   // end of model