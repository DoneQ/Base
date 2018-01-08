<?php
namespace Controllers;

class Halfproduct extends Controller {

    public function index(){
        $view = $this->getView('Halfproduct');
        $view->index();
    }

    public function addform(){                    
        $view = $this->getView('Halfproduct');
        $view->addform();
    }
    public function add(){                        
        $model=$this->getModel('Halfproduct');
        $data = $model->add($_POST['name']);

        if(isset($data['error']))
            \Tools\Session::set('error', $data['error']);
        if(isset($data['message']))
            \Tools\Session::set('message', $data['message']);
        $this->redirect('Halfproduct/');
    }
    public function delete($id){                 
        $model=$this->getModel('Halfproduct'); 
        $data = $model->delete($id);

        /*****/if(isset($data['error'])){
            \Tools\Session::set('error', $data['error']);
        } else if(isset($data['message'])){
            \Tools\Session::set('message', $data['message']);
        }

        $this->redirect('Halfproduct/');                    
    }
    public function editform($id){
        $model = $this->getModel('Halfproduct');
        $data = $model->getOne($id);
        if(isset($data['error'])){
            \Tools\Session::set('error', $data['error']);
            $this->redirect('?controller=Halfproduct&action=getAll');
        }
        $view = $this->getView('Halfproduct');
        $view->editform($id);    
    }
    public function update(){
        $model=$this->getModel('Halfproduct');
        $data = $model->update($_POST['id'], $_POST['name']);
        if(isset($data['error']))
            \Tools\Session::set('error', $data['error']);
        if(isset($data['message']))
            \Tools\Session::set('message', $data['message']);
        $this->redirect('Halfproduct/');
    }


}
