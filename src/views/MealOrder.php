<?php
namespace Views;

class MealOrder extends View {
  public function index(){
    $model = $this->getModel('MealOrder');
    if($model){
      $data = $model->getAll();
      $this->set('mealorders', $data['mealorders']);
    }
    if(isset($data['error']))
      $this->set('error', $data['error']);
    $this->set('customScript', array('datatables.min', 'table.min'));
    $this->render('MealOrderGetAll');
  }
  public function addform(){
    $this->set('customScript', 'MealOrderFormCheck');
    $this->render('MealOrderAddForm');
  }
  public function editform($id){
    $model = $this->getModel('MealOrder');
    if($model) {
      $data = $model->getOne($id);
      if(isset($data['mealorders']))
        $this->set('mealorders', $data['mealorders']);
      if(isset($data['error']))
        $this->set('error', $data['error']);
      $this->set('customScript', 'MealOrderFormCheck');
      $this->render('MealOrderEditForm');
      return true;
    }
    return false;
  }        
}

