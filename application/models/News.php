<?php
Class News extends CI_Model
{


 function get_total_news()
 {
     return $this->db->count_all('news');
 }

 
function get_news_detail($news_id)
{
    $sql = "select * from news 
             where news_id=$news_id" ;
    $query = $this->db->query($sql);
    $result = $query->result_array();
    $query->free_result();
    return $result[0];
}

function create_news($data)
 {
    $this->db->insert('news',$data);
    return $this->db->insert_id();
 }

 function edit_news($id, $data)
 {
    $this->db->where('news_id', $id);
    $this->db->update('news',$data);
    return ($this->db->affected_rows() != 1) ? false : true;
 }

 function get_news()
 {
    $sql = "select * from news order by news_id desc" ;
     $query = $this->db->query($sql);
     $result = $query->result_array();
     $query->free_result();
     return $result;
 }

 function get_latest_five_news()
 {
    $sql = "select * from news order by news_id desc limit 5";
    $query = $this->db->query($sql);
    $result = $query->result_array();
    $query->free_result();
    return $result;
 }

 function deactivate_news($news_id)
 {
    $sql = "update news set is_active=0 where news_id=$news_id";
    $query = $this->db->query($sql);

 }

 function activate_news($news_id)
 {
    $sql = "update news set is_active=1 where news_id=$news_id";
    $query = $this->db->query($sql);

 }

}
?>