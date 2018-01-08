<?php
namespace Controllers;

class Worker extends Controller {

    public function index(){
        $view = $this->getView('Worker');
        $view->index();
    }

    public function addform(){                    
        $view = $this->getView('Worker');
        $view->addform();
    }
    public function add(){                        
        $model=$this->getModel('Worker');
        $data = $model->add($_POST['name'], $_POST['sname'], $_POST['phone'], $_POST['mail']);

        if(isset($data['error']))
            \Tools\Session::set('error', $data['error']);
        if(isset($data['message']))
            \Tools\Session::set('message', $data['message']);
        $this->redirect('Worker/');
    }
    public function delete($id){                 
        $model=$this->getModel('Worker'); 
        $data = $model->delete($id);

        /*****/if(isset($data['error'])){
            \Tools\Session::set('error', $data['error']);
        } else if(isset($data['message'])){
            \Tools\Session::set('message', $data['message']);
        }

        $this->redirect('Worker/');                    
    }
    public function editform($id){
        $model = $this->getModel('Worker');
        $data = $model->getOne($id);
        if(isset($data['error'])){
            \Tools\Session::set('error', $data['error']);
            $this->redirect('?controller=Worker&action=getAll');
        }
        $view = $this->getView('Worker');
        $view->editform($data['workers'][0]);   
    }
    public function update(){
        $model=$this->getModel('workers');
        $data = $model->update($_POST['id'], $_POST['name'], $_POST['sname'], $_POST['phone'], $_POST['mail']);
        if(isset($data['error']))
            \Tools\Session::set('error', $data['error']);
        if(isset($data['message']))
            \Tools\Session::set('message', $data['message']);
        $this->redirect('Worker/');
    }


}
