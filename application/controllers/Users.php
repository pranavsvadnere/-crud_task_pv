<?php

class Users extends CI_controller
{

public function index()
{
  $this->load->model('User_model');
  $users=$this->User_model->all();
  $data=array();
  $data['users']=$users;
  $this->load->view('list',$data);

}


public function create()
{
  $this->load->model('User_model');
  $this->form_validation->set_rules('name','Name','required');
  $this->form_validation->set_rules('address','Address','required');
  $this->form_validation->set_rules('mobile','Mobile','required');

  if ($this->form_validation->run()==false) {
    // load create view..
    $this->load->view('create');
  }

  else {
    // Save data to database..
    $formArray=array();
    $formArray['name']=$this->input->post('name');
    $formArray['address']=$this->input->post('address');
    $formArray['mobile']=$this->input->post('mobile');
    $this->User_model->create($formArray);
    $this->session->set_flashdata('success','Record Added..!!');
    redirect(base_url().'index.php/users/index');
  }

}

public function edit($userId)
{
$this->load->model('User_model');
$user=$this->User_model->getUser($userId);
$data=array();
$data['user']=$user;
$this->form_validation->set_rules('name','Name','required');
$this->form_validation->set_rules('address','Address','required');
$this->form_validation->set_rules('mobile','mobile','required');
if ($this->form_validation->run()==false) {
  $this->load->view('edit',$data);
}

else {
  //Update Record..
  $formArray=array();
  $formArray['name']=$this->input->post('name');
  $formArray['address']=$this->input->post('address');
  $formArray['mobile']=$this->input->post('mobile');
  $this->User_model->updateuser($userId,$formArray);
  $this->session->set_flashdata('success','Record Updated');
  redirect(base_url().'index.php/users/index');
}
}

public function delete($userId)
{
  $this->load->model('User_model');
  $user=$this->User_model->getUser($userId);
  if (empty($user)) {
    $this->session->set_flashdata('failure','Not Record Found..');
    redirect(base_url().'index.php/users/index');
  }
  $this->User_model->deleteuser($userId);
  $this->session->set_flashdata('success','Record Deleted success');
  redirect(base_url().'index.php/users/index');


}


} //Class Closed..

 ?>
