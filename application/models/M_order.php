<?php
class M_order extends CI_Model
{

  function __construct()
  {
    # code..
    // $table = 'users';
    $this->load->database();
  }

  public function getOrder($id=FALSE){

      if($id==FALSE){
        $query = $this->db->get('customer_orders');
        return $query->result_array();
      }
      else {
        $query = $this->db->get_where('customer_orders', array('order_id' => $id));

        return $query->result_array();
      }
}

public function getOrderbyCustomerId($customer_id){

  $query = $this->db->get_where('customer_orders', array('customer_id' => $customer_id));
  return $query->result_array();
}

public function createOrder(){
  $data = array(
    'customer_id' => $_SESSION['customer_id'],
    'date_order_placed' => date("y-m-d"),
    'zip' => $_SESSION['zip'],
    'kota' => $_SESSION['kota'],
    'kecamatan' => $_SESSION['kecamatan'],
    'jalan' => $_SESSION['jalan'],
    'telephone' => $_SESSION['phone'],
    'status' => 'standby',
    'total' => $this->cart->total()+10000
  );
     $this->db->insert('customer_orders', $data);
     return $this->db->insert_id();
}


public function editorder($data)
{
  $this->db->where('order_id', $data['order_id']);
  $this->db->update('order', $data);
}

}
