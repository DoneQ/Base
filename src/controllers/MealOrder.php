<?php
namespace Controllers;

class MealOrder extends Controller {

    public function index(){
        $view = $this->getView('MealOrder');
        $view->index();
    }

    public function addform(){                    
        $view = $this->getView('MealOrder');
        $view->addform();
    }
    public function add(){                        
        $model=$this->getModel('MealOrder');
        $data = $model->add($_POST['idClient'], $_POST['idWorker'], $_POST['contactPhone'], $_POST['adress']);

        if(isset($data['error']))
            \Tools\Session::set('error', $data['error']);
        if(isset($data['message']))
            \Tools\Session::set('message', $data['message']);
        $this->redirect('MealOrder/');
    }
    public function delete($id){                 
        $model=$this->getModel('MealOrder'); 
        $data = $model->delete($id);

        /*****/if(isset($data['error'])){
            \Tools\Session::set('error', $data['error']);
        } else if(isset($data['message'])){
            \Tools\Session::set('message', $data['message']);
        }

        $this->redirect('MealOrder/');                    
    }
    public function editform($id){
        $model = $this->getModel('MealOrder');
        $data = $model->getOne($id);
        if(isset($data['error'])){
            \Tools\Session::set('error', $data['error']);
            $this->redirect('?controller=MealOrder&action=getAll');
        }
        $view = $this->getView('MealOrder');
        $view->editform($data['mealorders'][0]);   
    }
    public function update(){
        $model=$this->getModel('MealOrder');
        $data = $model->update($_POST['id'], $_POST['idClient'], $_POST['idWorker'], $_POST['contactPhone'], $_POST['adress']);
        if(isset($data['error']))
            \Tools\Session::set('error', $data['error']);
        if(isset($data['message']))
            \Tools\Session::set('message', $data['message']);
        $this->redirect('MealOrder/');
    }


}
