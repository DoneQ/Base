<?php
namespace Controllers;

class Client extends Controller {

    public function index(){
        $view = $this->getView('Client');
        $view->index();
    }

    public function addform(){                    
        $view = $this->getView('Client');
        $view->addform();
    }
    public function add(){                        
        $model=$this->getModel('Client');
        $data = $model->add($_POST['name'], $_POST['sname'], $_POST['phone'], $_POST['mail']);

        if(isset($data['error']))
            \Tools\Session::set('error', $data['error']);
        if(isset($data['message']))
            \Tools\Session::set('message', $data['message']);
        $this->redirect('Client/');
    }
    public function delete($id){                 
        $model=$this->getModel('Client'); 
        $data = $model->delete($id);

        /*****/if(isset($data['error'])){
            \Tools\Session::set('error', $data['error']);
        } else if(isset($data['message'])){
            \Tools\Session::set('message', $data['message']);
        }

        $this->redirect('Client/');                    
    }
    public function editform($id){
        $model = $this->getModel('Client');
        $data = $model->getOne($id);
        if(isset($data['error'])){
            \Tools\Session::set('error', $data['error']);
            $this->redirect('?controller=Client&action=getAll');
        }
        $view = $this->getView('Client');
        $view->editform($id);    
    }
    public function update(){
        $model=$this->getModel('Client');
        $data = $model->update($_POST['id'], $_POST['name'], $_POST['sname'], $_POST['phone'], $_POST['mail']);
        if(isset($data['error']))
            \Tools\Session::set('error', $data['error']);
        if(isset($data['message']))
            \Tools\Session::set('message', $data['message']);
        $this->redirect('Client/');
    }


}
