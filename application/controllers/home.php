<?php

class Home extends CI_Controller{



public function index(){





$this->load->view('public/index');
$this->load->view('public/pcss/pcss');
$this->load->view('public/pnavbar');






$this->load->view('public/pcontent');
$this->load->view('public/pfooter');


}


public function signup(){


$this->load->view('public/signup');



}

public function signupano(){




$u=$this->input->post();
//$l=$this->input->post('lname');
//$e=$this->input->post('email');
//$p=$this->input->post('passw');

//echo "usename:$u and lname:$l and email:$e and passw:$p";

$this->load->model('ins');

if($this->ins->insertt($u)){


	//$this->load->library('session');
//if($this->session->userdata('user_id'))
return redirect('users');
//$this->load->view('public/dashboard');

}
else
{


	echo "not insertd";
}
}

public function login(){
	
//$l=$this->input->post('lname');
//$e=$this->input->post('email');
//$p=$this->input->post('passw');
$this->load->view('public/loginn');
}
public function loginano(){

$n=$this->input->post('name');
$p=$this->input->post('password');
 
 $this->load->model('ins');

 $login=$this->ins->login_valid($n,$p);
 if($login)

 {
$this->load->library('session');

$this->session->set_userdata('user_id',$login['id']);
return redirect('users');

 	echo "password match";
 }

 else{

 	echo "password not match";
 }
}
public function logout(){
	$this->load->library("session");
	$this->session->unset_userdata("user_id");
	return redirect("home/login");
}

}