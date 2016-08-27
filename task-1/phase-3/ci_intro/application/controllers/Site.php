<?php
class Site extends CI_Controller {

	 public function __construct()
        {
                parent::__construct();
                $this->load->model('Website_model');
                $this->load->helper('url_helper');
                $this->is_logged_in();
        }
        function is_logged_in(){
            $this->session->userdata('is_logged_in');

            if(!isset($is_logged_in) || is_logged_in != TRUE){

            }
        }

    public function admin(){

    	$data['first_name'] = $this->input->post('first_name');

    	$this->load->view('website/admin',$data);
    }

    public function addarticle()
{
    $this->load->helper(array('form','file','url'));
    $this->load->library('form_validation');
   
    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('text', 'Text', 'required');
    $this->form_validation->set_rules('author', 'Author', 'required');
    
     $config['upload_path']='./resourses/uploads/';
    $config['allowed_types'] ='jpg|jpeg|gif|png';
    $config['max_size'] = '1024*5';
    $config['overwright'] = TRUE;
    $config['remove_spaces'] = TRUE;
   
    $this->load->library('upload',$config);
    $this->upload->do_upload('image');
    $this->upload->initialize($config);

    if(!$this->upload->do_upload('image') && $this->form_validation->run() === FALSE)
     {
       $error['error'] = $this->upload->display_errors();
        $this->load->view('website/addarticle',$error);
    }else 
       { 
       	  $this->Website_model->set_news($this->upload->data());

	      $data['upload_data'] = $this->upload->data();
	       
	      $this->load->view('website/success', $data);
       }
    

}

    public function editart($slug = NULL)
{
    $this->load->helper('form');
    $this->load->library('form_validation');
    
     $data['news_item'] = $this->Website_model->get_news($slug);
    $data['title'] = $data['news_item']['title'];

    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('text', 'Text', 'required');
    
    $config['upload_path']='./resourses/uploads/';
    $config['allowed_types'] ='jpg|jpeg|gif|png';
    $config['max_size'] = '1024*5';
    $config['overwright'] = TRUE;
    $config['remove_spaces'] = TRUE;
   
    $this->load->library('upload',$config);
    $this->upload->do_upload('image');

    if ($this->form_validation->run() === FALSE)
    {
        $this->load->view('website/editart',$data);
  

    }
    else
    {
        $this->Website_model->edit_news($this->upload->data());
        $this->load->view('website/success1',$data);
    }
}

public function edit(){
	 $data['webnews'] = $this->Website_model->get_news();
	 $this->load->view('website/edit',$data);
}
}
