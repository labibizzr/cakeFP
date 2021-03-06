<?php
class M_menu extends CI_Model
{

  function __construct()
  {
    # code..
    // $table = 'users';
    $this->load->database();
  }

  public function getMenu($id=FALSE){

      if($id==FALSE){
        $query = $this->db->get('menu');
        return $query->result_array();
      }
      else {
        $query = $this->db->get_where('menu', array('menu_id' => $id));

        return $query->result_array();
      }
}


public function editMenu($data)
{
  $this->db->where('menu_id', $data['menu_id']);
  $this->db->update('menu', $data);
}

public function createMenu($data)
{
  $this->db->insert('menu', $data);
}

public function getLastId()
{
  return $this->db->insert_id()+1;
}

public function deleteMenu($menu_id)
{
  return $this->db->delete('menu', array('menu_id'=> $menu_id ));
}

}
