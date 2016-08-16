<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>-->
<?php
class WebsiteController extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('Website_model');
                $this->load->helper('url_helper');
        }

       public function index()
{
        $data['news'] = $this->Website_model->get_news();
        $data['title'] = 'News Website';

        $this->load->view('website/navbar', $data);
      
}

        public function view($slug = NULL)
        {
                $data['news_item'] = $this->Website_model->get_news($slug);
				
			/*	if (empty($data['news_item']))
        {
                show_404();
        }*/

        $data['title'] = $data['news_item']['title'];

        $this->load->view('website/view', $data);
 
        }
		public function addarticle()
{
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = 'Create a news item';

    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('text', 'Text', 'required');

    if ($this->form_validation->run() === false)
    {
        $this->load->view('website/addarticle');
  

    }
    else
    {
        $this->Website_model->set_news();
        $this->load->view('website/success');
    }
}

public function login()
{ $this->load->view('website/login');}

/*	public function login()
{
    $this->load->helper('form');
    $this->load->library('form_validation');



    $this->form_validation->set_rules('username', 'username', 'required');
    $this->form_validation->set_rules('password', 'password', 'required');

    if ($this->form_validation->run() === FALSE)
    {
        $this->load->view('website/login');
  

    }
    else
    {
        $this->load->view('website/admin');
    }
}*/

	public function admin()
{
	  $this->load->view('website/admin');
}
public function editart()
{
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = 'Edit a news item';

    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('text', 'Text', 'required');
    

    if ($this->form_validation->run() === FALSE)
    {
        $this->load->view('website/editart');
  

    }
    else
    {
        $this->Website_model->edit_news();
        $this->load->view('website/success1');
    }
}
}
?>
</body>
</html>