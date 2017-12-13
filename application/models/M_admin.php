<?php
class M_admin extends CI_Model
{

  function __construct()
  {
    # code..
    // $table = 'users';
    $this->load->database();
  }

  function login_authen(){
    $usernameAdmin = $this->input->post('username');
    $passwordAdmin = $this->input->post('password');

    $this->db->select('*');
    $this->db->where('username',$usernameAdmin);
    $this->db->from('admin');
    $query = $this->db->get();

    if($query->num_rows() != 1)
    throw new UnexpectedValueException("Wrong user!");


    $row = $query->row_array();

    if (! password_verify($passwordAdmin,$row['password']))
    throw new UnexpectedValueException("Invalid password!");

    else
    $newdata = array(
      'admin_id' => $row['admin_id'],
      'logged_in_admin' => TRUE
    );
    $this->session->set_userdata($newdata);
    return true;
  }
}
