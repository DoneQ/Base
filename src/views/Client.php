<?php
namespace Views;

class Client extends View {
  public function index(){
    $model = $this->getModel('Client');
    if($model){
      $data = $model->getAll();
      $this->set('clients', $data['clients']);
    }
    if(isset($data['error']))
      $this->set('error', $data['error']);
    $this->set('customScript', array('datatables.min', 'table.min'));
    $this->render('ClientGetAll');
  }
  public function addform(){
    $this->set('customScript', 'ClientFormCheck');
    $this->render('ClientAddForm');
  }
  public function editform($id){
    $model = $this->getModel('Client');
    if($model) {
      $data = $model->getOne($id);
      if(isset($data['clients']))
        $this->set('clients', $data['clients']);
      if(isset($data['error']))
        $this->set('error', $data['error']);
      $this->set('customScript', 'ClientFormCheck');
      $this->render('ClientEditForm');
      return true;
    }
    return false;
  }        
}

