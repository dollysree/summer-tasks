
<?php
class Website_model extends CI_Model {

public function __construct()
{
        $this->load->database();
}

public function get_news($slug = FALSE) //to get news from database
{
        if ($slug === FALSE)
        {
                $query = $this->db->get('webnews');
                return $query->result_array();
        }

        $query = $this->db->get_where('webnews', array('slug' => $slug));
        return $query->row_array();
}

public function validate() //checking whether user exists in database
{
   
  $this->db->where('username',$this->input->post('username'));
  $this->db->where('password',md5($this->input->post('password')));
  $query= $this->db->get('users');
  $count = $query->num_rows();
  if($count == 1)
    return TRUE;
}

function create_member()  //inserting the info of user who registers
{
      $username = $this->input->post('username');

    $data = array(
        'first_name' => $this->input->post('first_name'),
        'last_name' => $this->input->post('last_name'),
        'email' => $this->input->post('email'),
        'username' =>$this->input->post('username'),
         'password' =>md5($this->input->post('password'))
    );
    $insert = $this->db->insert('users',$data);
    return $insert;

}
function check_if_username_exists($username) //checking whether user exists in database
{

    $this->db->where('username',$username);
    $result = $this->db->get('users');
    $count = $result->num_rows();
    if($count > 0)
        return FALSE;
    else
        return TRUE;
}

function check_if_email_exists($username) //checking whether email exists in database
{

    $this->db->where('email',$email);
    $result = $this->db->get('users');
    $count = $result->num_rows();
    if($count > 0)
        return FALSE;
    else
        return TRUE;
}

public function set_news($image_data = array()) //insering info into database
{
    $this->load->helper('url');

    $slug = url_title($this->input->post('title'), 'dash', TRUE);

    $data = array(
        'title' => $this->input->post('title'),
        'slug' => $slug,
        'text' => $this->input->post('text'),
        'image' =>$image_data['file_name'],
        'author' =>$this->input->post('author')
    );

     $this->db->insert('webnews', $data);
     return $this->db->insert_id();

}
public function edit_news($image_data = array())  //editing the news
{
    $this->load->helper('url');

    $slug = url_title($this->input->post('title'), 'dash', TRUE);

    $data = array(
        'title' => $this->input->post('title'),
        'slug' => $slug,
        'text' => $this->input->post('text'),
        'image' =>$image_data['file_name'],
        'author' =>$this->input->post('author')
        );
        
           
     $this->db->where('slug', $slug);
    return $this->db->update('webnews', $data );
}
}
?>
