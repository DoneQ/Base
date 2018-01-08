<?php
namespace Views;

class Halfproduct extends View {
  public function index(){
    $model = $this->getModel('Halfproduct');
    if($model){
      $data = $model->getAll();
      $this->set('halfproducts', $data['halfproducts']);
    }
    if(isset($data['error']))
      $this->set('error', $data['error']);
    $this->set('customScript', array('datatables.min', 'table.min'));
    $this->render('HalfproductGetAll');
  }
  public function addform(){
    $this->set('customScript', 'HalfproductFormCheck');
    $this->render('HalfproductAddForm');
  }
  public function editform($id){
    $model = $this->getModel('Halfproduct');
    if($model) {
      $data = $model->getOne($id);
      if(isset($data['halfproducts']))
        $this->set('halfproducts', $data['halfproducts']);
      if(isset($data['error']))
        $this->set('error', $data['error']);
      $this->set('customScript', 'HalfproductFormCheck');
      $this->render('HalfproductEditForm');
      return true;
    }
    return false;
  }        
}

