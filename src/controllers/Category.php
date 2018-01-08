<?php
	namespace Controllers;
	
    class Category extends Controller {
	
		public function index(){
			$view = $this->getView('Category');
            $view->index();
		}
      	
        public function addform(){                    
            $view = $this->getView('Category');
			$view->addform();
        }
        public function add(){                        
            $model=$this->getModel('Category');
            $data = $model->add($_POST['name']);
            if(isset($data['error']))
                \Tools\Session::set('error', $data['error']);
            if(isset($data['message']))
                \Tools\Session::set('message', $data['message']);
            $this->redirect('Category/');
        }
        public function delete($id){                 
			if($id !== null)
			{
				//za operację na bazie danych odpowiedzialny jest model
				//tworzymy obiekt modelu i zlecamy usunięcie kategorii
				$model=$this->getModel('Category');
                if($model) {
				    $data = $model->delete($id);
                    //nie przekazano komunikatów o błędzie
                }
				//powiadamiamy odpowiedni widok, że nastąpiła aktualizacja bazy                
				$this->redirect('Category/');
			}
			else
				$this->redirect('Category/');	          
        }
        public function editform($id){
            if(isset($data['error'])){
                \Tools\Session::set('error', $data['error']);
                $this->redirect('Category/');
            }
            $view = $this->getView('Category');
			$view->editform($id);   
        }
        public function update(){
            $model=$this->getModel('Category');
            $data = $model->update($_POST['id'], $_POST['name']);
            if(isset($data['error']))
                \Tools\Session::set('error', $data['error']);
            if(isset($data['message']))
                \Tools\Session::set('message', $data['message']);
            $this->redirect('Category/');
        }
            
			
	}
