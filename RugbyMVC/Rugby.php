<?php
// Rugby Controller

class Rugby extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('rugby_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        // This builds what little is on the index page
        $data['title'] = 'rugby archive';
        /*echo $data['title'];
        die;*/
        $this->load->view('rugby/index', $data);
        
    }


    public function view($tags = NULL)
    {

        // this constructs the view page technically. 
        // once data is received, The model sends it to Controller and it's handled here.
        // Data['pics'] is received from the Return statement on the model. Return $pics
        $data['pics'] = $this->rugby_model->get_rugby($tags);
        // if there is no data in the varaible Pics, this if statement shows them. 
        if (empty($data['pics']))
        {
                show_404();
        }

        $data['title'] = $tags;

       // finally the data is sent to the view page. 
        $this->load->view('rugby/view', $data);
     
    } // end of view method

    //public function create()
    //{
    //    $this->load->helper('form');
    //    $this->load->library('form_validation');

    //    $data['title'] = 'Create a rugby item';

    //    $this->form_validation->set_rules('title', 'Title', 'required');
    //    $this->form_validation->set_rules('text', 'Text', 'required');

    //    if ($this->form_validation->run() === FALSE)
    //    { //show form
    //        $this->load->view('templates/header', $data);
    //        $this->load->view('rugby/create', $data);
    //        $this->load->view('templates/footer', $data);

    //    }
    //    else
    //    { // say thanks for entering data
    //        $this->rugby_model->set_rugby();
    //        //$this->load->view('rugby/success');
    //        $this->load->view('templates/header', $data);
    //        $this->load->view('rugby/success', $data);
    //        $this->load->view('templates/footer', $data);
    //    }
    //} // End of create method


} // end of rugby controller