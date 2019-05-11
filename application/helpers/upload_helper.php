<?php 
 function upload_files($path,$title,$files)
{
    
  $ci =& get_instance();
                  $config['upload_path']          =  APPPATH.'../'.$path;
                 $config['allowed_types']        = 'gif|jpg|png';
                 $config['file_name']          =  date("d-m-Y")."-".url_title($title)."-".rand();
 
                $ci->load->library('upload',$config);
                $ci->upload->initialize($config);
                if ( ! $ci->upload->do_upload($files))
                {
                     $data  = array('error' => $ci->upload->display_errors());
                  }
                else
                {
                   $data = array('upload_data' => $ci->upload->data());
                  foreach($data as $val)
                  {
                    return $val["file_name"];
                  }
                  
                }
  }