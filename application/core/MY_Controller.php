<?php defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

//private $var1;
//private $var2;
 
    public function __construct()
    {
        parent::__construct();
        //$this->authorization->gate();
    }

 
  
     protected function _post_return($key = NULL) {
        if ($key != NULL) {
            return $this->input->post($key, TRUE);
        } else {
            return $this->input->post();
        }
    }

    protected function _get_return($key = NULL) {
        if ($key != NULL) {
            return $this->input->get($key, TRUE);
        } else {
            return $this->input->get();
        }
    }

    protected function _get_post_return($key) {
        return $this->input->get_post($key, TRUE);
    }
 
}