<?php
namespace Controllers;

class OrderProduct extends Controller {

    public function index(){
        $view = $this->getView('OrderProduct');
        $view->index();
    }

    public function addform(){                    
        $view = $this->getView('OrderProduct');
        $view->addform();
    }
    public function add(){                        
        $model=$this->getModel('OrderProduct');
        $data = $model->add($_POST['idUser'], $_POST['idMealOrder'], $_POST['idProduct']);

        if(isset($data['error']))
            \Tools\Session::set('error', $data['error']);
        if(isset($data['message']))
            \Tools\Session::set('message', $data['message']);
        $this->redirect('OrderProduct/');
    }
    public function delete($id){                 
        $model=$this->getModel('OrderProduct'); 
        $data = $model->delete($id);

        /*****/if(isset($data['error'])){
            \Tools\Session::set('error', $data['error']);
        } else if(isset($data['message'])){
            \Tools\Session::set('message', $data['message']);
        }

        $this->redirect('OrderProduct/');                    
    }
    public function editform($id){
        $model = $this->getModel('OrderProduct');
        $data = $model->getOne($id);
        if(isset($data['error'])){
            \Tools\Session::set('error', $data['error']);
            $this->redirect('?controller=OrderProduct&action=getAll');
        }
        $view = $this->getView('OrderProduct');
        $view->editform($data['orderproducts'][0]);   
    }
    public function update(){
        $model=$this->getModel('OrderProduct');
        $data = $model->update($_POST['id'], $_POST['idUser'], $_POST['idMealOrder'], $_POST['idProduct']);
        if(isset($data['error']))
            \Tools\Session::set('error', $data['error']);
        if(isset($data['message']))
            \Tools\Session::set('message', $data['message']);
        $this->redirect('OrderProduct/');
    }


}
