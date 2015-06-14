<?php
//rss.php
class Rss extends CI_Controller {

        public function __construct()
        {//everything here is global to all methods in the controller
                parent::__construct();
                $this->load->model('rss_model');
                $this->config->set_item('banner-title','RSS Banner');

        }//end constructor
      
        
        public function index()
        {
                $data['stories'] = $this->rss_model->get_rss();
                $this->load->view('rss/index', $data);            

        }
        
        
}