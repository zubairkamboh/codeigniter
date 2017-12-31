<?php


class Admincat extends CI_Model{



public function addcat($array){

$this->load->database();

return $this->db->insert('categories',$array);


}


public function selectcat(){

$this->load->database();

$t= $this->db->query('select * from categories');


return $t->result_array();


}











}