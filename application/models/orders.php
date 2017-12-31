<?php


class Orders extends CI_Model{



public function ordd($array){

$this->load->database();

return $this->db->insert('cusorders',$array);


}








}