<?php
class M_orderDetails extends CI_Model
{

  function __construct()
  {
    # code..
    // $table = 'users';
    $this->load->database();
  }

  public function getOrderDetails($id=FALSE){



        $result = $this->db->get_where('order_details', array('order_id' => $id))->result_array();
        $i = 0;
        foreach($result as $item){
          $data[$i] = $this->db->get_where('menu', array('menu_id' => $item['menu_id']))->row_array();
          $data[$i]['qty'] = $item['quantity'];
          $i++;
        }
        return $data;

}

public function createOrderDetails($orderId){

  foreach ($this->cart->contents() as $item) {
    $data = array(
      'order_id' => $orderId,
      'menu_id' => $item['id'],
      'quantity' => $item['qty']
    );
    $this->db->insert('order_details', $data);
  }


}
}
