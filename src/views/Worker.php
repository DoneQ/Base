<?php
namespace Views;

class Worker extends View {
  public function index(){
    $model = $this->getModel('Worker');
    if($model){
      $data = $model->getAll();
      $this->set('workers', $data['workers']);
    }
    if(isset($data['error']))
      $this->set('error', $data['error']);
    $this->set('customScript', array('datatables.min', 'table.min'));
    $this->render('WorkerGetAll');
  }
  public function addform(){
    $this->set('customScript', 'WorkerFormCheck');
    $this->render('WorkerAddForm');
  }
  public function editform($id){
    $model = $this->getModel('Worker');
    if($model) {
      $data = $model->getOne($id);
      if(isset($data['workers']))
        $this->set('workers', $data['workers']);
      if(isset($data['error']))
        $this->set('error', $data['error']);
      $this->set('customScript', 'WorkerFormCheck');
      $this->render('WorkerEditForm');
      return true;
    }
    return false;
  }        
}

