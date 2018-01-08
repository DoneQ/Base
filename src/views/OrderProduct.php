<?php
namespace Views;

class OrderProduct extends View {
  public function index(){
    $model = $this->getModel('OrderProduct');
    if($model){
      $data = $model->getAll();
      $this->set('orderproducts', $data['orderproducts']);
    }
    if(isset($data['error']))
      $this->set('error', $data['error']);
    $this->set('customScript', array('datatables.min', 'table.min'));
    $this->render('OrderProductGetAll');
  }
  public function addform(){
    $this->set('customScript', 'OrderProductFormCheck');
    $this->render('OrderProductAddForm');
  }
  public function editform($id){
    $model = $this->getModel('OrderProduct');
    if($model) {
      $data = $model->getOne($id);
      if(isset($data['orderproducts']))
        $this->set('orderproducts', $data['orderproducts']);
      if(isset($data['error']))
        $this->set('error', $data['error']);
      $this->set('customScript', 'OrderProductFormCheck');
      $this->render('OrderProductEditForm');
      return true;
    }
    return false;
  }        
}

