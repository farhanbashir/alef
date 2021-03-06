<?php
Class Authenticate extends CI_Model
{

 function get_total_keys()
 {
     return $this->db->count_all('authenticate');
 }

 function create_key($data)
 {
    $this->db->insert('authenticate',$data);
    return $this->db->insert_id();
 }

 function edit_key($id, $data)
 {
    $this->db->where('id', $id);
    $this->db->update('authenticate',$data);
    return ($this->db->affected_rows() != 1) ? false : true;
 }

 function get_key_detail($id)
 {
        $sql = "select * from authenticate 
            where id=$id" ;
    $query = $this->db->query($sql);
    $result = $query->result_array();
    $query->free_result();
    return $result[0];
 }

 function key_exists($key,$phone)
 {
   $this -> db -> select('id');
   $this -> db -> from('authenticate');
   $this -> db -> where('key', $key);
   $this -> db -> where('phone', $phone);
   $this -> db -> limit(1);

   $query = $this -> db -> get();

   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }

 function get_key_by_phone($phone)
 {
    $sql = "select * from authenticate 
             where phone='$phone'" ;
    $query = $this->db->query($sql);
    $result = $query->result_array();
    $query->free_result();
    return (count($result) > 0) ? $result[0] : array();
 }

 function get_latest_five_keys()
 {
    $sql = "select * from authenticate order by id desc limit 5";
    $query = $this->db->query($sql);
    $result = $query->result_array();
    $query->free_result();
    return $result;
 }

 function get_keys($page)
 {
    $start =  $page;
    $limit = $this->config->item('pagination_limit');

     $sql = "select * from authenticate limit $start,$limit" ;
     $query = $this->db->query($sql);
     $result = $query->result_array();
     $query->free_result();
     return $result;
 }

 function deactivate_key($id)
 {
    $sql = "update authenticate set is_active=0 where id=$id";
    $query = $this->db->query($sql);

 }

 function activate_key($id)
 {
    $sql = "update authenticate set is_active=1 where id=$id";
    $query = $this->db->query($sql);

 }

}
?>