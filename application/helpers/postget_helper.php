<?php defined('BASEPATH') OR exit('No direct script access allowed');

     protected function _post_return($key = NULL) {
       		$CI =& get_instance();

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