<?php
class M_customer extends CI_Model
{

  function __construct()
  {
    # code..
    // $table = 'users';
    $this->load->database();
  }
  public function deleteCustomer($customer_id)
  {
    return $this->db->delete('customer', array('customer_id'=> $customer_id ));
  }
  public function getCustomer($id=FALSE){

      if($id==FALSE){
        $query = $this->db->get('customer');
        return $query->result_array();
      }
      else {
        $query = $this->db->get_where('customer', array('customer_id' => $id));

        return $query->result_array();
      }
  }

  function createCustomer(){
    $data = array(
  'name' => $this->input->post('nama'),
  'email' => $this->input->post('email'),
  'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
);
$this->db->insert('customer', $data);
  }
  function login_authen(){
    $email = $this->input->post('emailUser');
    $password = $this->input->post('passwordUser');

    $this->db->select('*');
    $this->db->where('email',$email);
    $this->db->from('customer');
    $query = $this->db->get();

    if($query->num_rows() != 1)
    throw new UnexpectedValueException("Wrong user!");


    $row = $query->row_array();

    if (! password_verify($password,$row['password']))
    throw new UnexpectedValueException("Invalid password!");

    else
    $newdata = array(
      'customer_id' => $row['customer_id'],
      'nama' => $row['name'],
      'email' => $row['email'],
      'logged_in' => TRUE
    );
    $this->session->set_userdata($newdata);
    return true;
  }
}
