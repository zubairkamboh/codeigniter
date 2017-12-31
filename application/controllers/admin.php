<?php

class Admin extends CI_Controller{



public function index(){


$this->load->view('admin/header/header');
$this->load->view('admin/css/css');
$this->load->view('admin/navbar/navbar');
$this->load->view('admin/content/content');
$this->load->view('admin/footer/footer');

}


public function category(){




     $this->load->view('admin/addcat');

}



public function updatecat(){

$post=$this->input->post();


$this->load->model('admincat');

if($this->admincat->addcat($post))
{

return redirect('admin/index');



}

     

}






}