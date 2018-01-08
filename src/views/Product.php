<?php
namespace Views;

class Product extends View {
  public function index(){
    $model = $this->getModel('Product');
    if($model){
      $data = $model->getAll();
      $this->set('products', $data['products']);
    }
    if(isset($data['error']))
      $this->set('error', $data['error']);
    $this->set('customScript', array('datatables.min', 'table.min'));
    $this->render('ProductGetAll');
  }
  public function addform(){
    $this->set('customScript', 'ProductFormCheck');
    $this->render('ProductAddForm');
  }
  public function editform($id){
    $model = $this->getModel('Product');
    if($model) {
      $data = $model->getOne($id);
      if(isset($data['products']))
        $this->set('products', $data['products']);
      if(isset($data['error']))
        $this->set('error', $data['error']);
      $this->set('customScript', 'ProductFormCheck');
      $this->render('ProductEditForm');
      return true;
    }
    return false;
  }        
}

