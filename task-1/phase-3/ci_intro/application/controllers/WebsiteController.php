
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
        $data['webnews'] = $this->Website_model->get_news();
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
        $data['image'] = $data['news_item']['image'];
        $data['title'] = $data['news_item']['title'];

        $this->load->view('website/view', $data);
 
        }


 function validate_credentials(){
    $query = $this->Website_model->validate();
    if($query){
        $data = array(
               'username' => $this->input->post('username'),
               'is_logged_in' => TRUE
            );
        $this->session->set_userdata($data);
       redirect('site/admin');
        
    }else{
         $this->load->helper('form');
         $this->load->library('form_validation');
         
         $this->form_validation->set_rules('password', 'Password', 'required');
         $this->load->view('website/login');
    }
 }

 public function signup()  //opening register page
{
     $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->view('website/signup');
}
public function create_mem(){

    $this->load->helper('form');
    $this->load->library('form_validation');
    
    
     $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
    $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
    $this->form_validation->set_rules('username', 'Username', 'trim|required|max_length[15]');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|max_length[30]');
    $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
    $this->form_validation->set_rules('password_confirm', 'Confirm Password', 'trim|required|matches[password]');

    if ($this->form_validation->run() === FALSE)
    {
        $this->load->view('website/signup');
    }
    else{

        if($query=$this->Website_model->create_member()){
            $data['account_created'] = 'Your account has been created<br>You may now Login!';
            $this->load->view('website/login',$data);
        }
        else{
            $this->load->view('website/signup');
        }
    }


}
function check_if_username_exists($requested_username){

    $available = $this->Website_model->check_if_username_exists($requested_username);
    if($available)
        return TRUE;
    else
        return FALSE;
}

function check_if_email_exists($requested_email){

    $available = $this->Website_model->check_if_username_exists($requested_email);
    if($available)
        return TRUE;
    else
        return FALSE;
}

public function login()   //opening login page
{
     $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->view('website/login');
}

}
?>
