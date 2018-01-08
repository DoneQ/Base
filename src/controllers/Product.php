<?php
namespace Controllers;

class Product extends Controller {

    public function index(){
        $view = $this->getView('Product');
        $view->index();
    }

    public function addform(){                    
        $view = $this->getView('Product');
        $view->addform();
    }
    public function add(){                        
        $model=$this->getModel('Product');
        $data = $model->add($_POST['name'], $_POST['info'], $_POST['adds'], $_POST['price'], $_POST['idCategory']);

        if(isset($data['error']))
            \Tools\Session::set('error', $data['error']);
        if(isset($data['message']))
            \Tools\Session::set('message', $data['message']);
        $this->redirect('Product/');
    }
    public function delete($id){                 
        $model=$this->getModel('Product'); 
        $data = $model->delete($id);

        /*****/if(isset($data['error'])){
            \Tools\Session::set('error', $data['error']);
        } else if(isset($data['message'])){
            \Tools\Session::set('message', $data['message']);
        }

        $this->redirect('Product/');                    
    }
    public function editform($id){
        $model = $this->getModel('Product');
        $data = $model->getOne($id);
        if(isset($data['error'])){
            \Tools\Session::set('error', $data['error']);
            $this->redirect('?controller=Product&action=getAll');
        }
        $view = $this->getView('Product');
        $view->editform($data['products'][0]);   
    }
    public function update(){
        $model=$this->getModel('Product');
        $data = $model->update($_POST['id'], $_POST['name'], $_POST['info'], $_POST['adds'], $_POST['price'], $_POST['idCategory']);
        if(isset($data['error']))
            \Tools\Session::set('error', $data['error']);
        if(isset($data['message']))
            \Tools\Session::set('message', $data['message']);
        $this->redirect('Product/');
    }


}
