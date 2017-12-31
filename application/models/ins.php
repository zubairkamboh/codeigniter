<?php


class Ins extends CI_Model{



public function insertt($array){

$this->load->database();

return $this->db->insert('ecomm',$array);


}



public function login_Valid($username , $passw){

$this->load->database();
$t=$this->db->query("select * from ecomm where name='$username' and password='$passw'");

if($t->num_rows()){
return $t->row()->id;
//return true;

}
else{

	return false;
}

}




}