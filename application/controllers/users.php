<?php

class Users extends CI_Controller{



public function index(){





$this->load->view('users/header');
$this->load->view('users/css');
$this->load->view('users/navbar');
$this->load->view('users/content');
$this->load->view('users/footer');

}

public function usersignupp(){





$this->load->view('users/usersignup');

}


public function usersignuppano(){


$t=$this->input->post();


$this->load->model('orders');


if($this->orders->ordd($t))
{

//echo "data insert";

	$this->load->library('session');
$this->session->set_flashdata('success','your order confirmed succussfully and deliver in 4 working days');
return redirect('home');






}

else
{

echo "not insert";

}



}











}