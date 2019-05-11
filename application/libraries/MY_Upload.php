<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Upload extends CI_Upload {
 
  public function __construct()
  {
      parent::__construct();
  }
  
  public function upload_files($path, $title, $files)
{
    $config = array(
        'upload_path'   => $path,
        'allowed_types' => 'jpg|gif|png',
        'overwrite'     => 1,
    );

    $this->load->library('upload', $config);

    $images = array();

    foreach ($files['name'] as $key => $image) {
        $_FILES['images[]']['name']= $files['name'][$key];
        $_FILES['images[]']['type']= $files['type'][$key];
        $_FILES['images[]']['tmp_name']= $files['tmp_name'][$key];
        $_FILES['images[]']['error']= $files['error'][$key];
        $_FILES['images[]']['size']= $files['size'][$key];

        $fileName = $title .'_'. $image;

        $images[] = $fileName;

        $config['file_name'] = $fileName;

        $this->upload->initialize($config);

        if ($this->upload->do_upload('images[]')) {
            $this->upload->data();
        } else {
            return false;
        }
    }
    return true;
}
 
}