<?php
namespace Controllers;

class ProductHalfproduct extends Controller {

    public function index(){
        $view = $this->getView('ProductHalfproduct');
        $view->index();
    }

    public function addform(){                    
        $view = $this->getView('ProductHalfproduct');
        $view->addform();
    }
    public function add(){                        
        $model=$this->getModel('ProductHalfproduct');
        $data = $model->add($_POST['idProduct'], $_POST['idHalfproduct'], $_POST['gramCount']);

        if(isset($data['error']))
            \Tools\Session::set('error', $data['error']);
        if(isset($data['message']))
            \Tools\Session::set('message', $data['message']);
        $this->redirect('ProductHalfproduct/');
    }
    public function delete($id){                 
        $model=$this->getModel('ProductHalfproduct'); 
        $data = $model->delete($id);

        /*****/if(isset($data['error'])){
            \Tools\Session::set('error', $data['error']);
        } else if(isset($data['message'])){
            \Tools\Session::set('message', $data['message']);
        }

        $this->redirect('ProductHalfproduct/');                    
    }
    public function editform($id){
        $model = $this->getModel('ProductHalfproduct');
        $data = $model->getOne($id);
        if(isset($data['error'])){
            \Tools\Session::set('error', $data['error']);
            $this->redirect('?controller=ProductHalfproduct&action=getAll');
        }
        $view = $this->getView('ProductHalfproduct');
        $view->editform($data['productshalfproducts'][0]);   
    }
    public function update(){
        $model=$this->getModel('ProductHalfproduct');
        $data = $model->update($_POST['idProduct'], $_POST['idHalfproduct'], $_POST['gramCount']);
        if(isset($data['error']))
            \Tools\Session::set('error', $data['error']);
        if(isset($data['message']))
            \Tools\Session::set('message', $data['message']);
        $this->redirect('ProductHalfproduct/');
    }


}
