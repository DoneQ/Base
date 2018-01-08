<?php
namespace Controllers;

class User extends Controller {

    public function index(){
        $view = $this->getView('User');
        $view->index();
    }

    public function addform(){                    
        $view = $this->getView('User');
        $view->addform();
    }
    public function add(){                        
        $model=$this->getModel('User');
        $data = $model->add($_POST['idClient'], $_POST['idWorker'], $_POST['login'], $_POST['password']);


         if(isset($data['error']))
            \Tools\Session::set('error', $data['error']);
        if(isset($data['message']))
            \Tools\Session::set('message', $data['message']);
        $this->redirect('User/');
    }
    public function delete($id){              
        $model=$this->getModel('User'); 
        $data = $model->delete($id);

        /*****/if(isset($data['error'])){
            \Tools\Session::set('error', $data['error']);
        } else if(isset($data['message'])){
            \Tools\Session::set('message', $data['message']);
        }

        $this->redirect('User/');            
    }

    public function editform($id){
        if(isset($data['error'])){
            \Tools\Session::set('error', $data['error']);
            $this->redirect('User/');
        }
        $view = $this->getView('User');
        $view->editform($id);   
    }

    public function update(){
        $model=$this->getModel('User');
        $data = $model->update($_POST['id'], $_POST['idClient'], $_POST['idWorker'], $_POST['login'], $_POST['password']);

        /******/if(isset($data['error'])){
            \Tools\Session::set('error', $data['error']);
        } else if(isset($data['message'])){
            \Tools\Session::set('message', $data['message']);
        }

        $this->redirect('User/');
    }


}