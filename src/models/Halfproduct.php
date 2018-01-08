<?php
	namespace Models;
	use \PDO;
	class Halfproduct extends Model {

		public function getAll(){
            if($this->pdo === null){
                $data['error'] = \Config\Database\DBErrorName::$connection;
                return $data;
            }
            $data = array();
            try	{
                $halfproducts = array();
                $stmt = $this->pdo->query('SELECT * FROM `'.\Config\Database\DBConfig::$tableHalfproduct.'`');
                while($row = $stmt -> fetch())
                    {
                        $halfproducts[$row['id']] = $row['name'];
                    }
                $stmt->closeCursor();
                if($halfproducts && !empty($halfproducts))
                    $data['halfproducts'] = $halfproducts;
            }
            catch(\PDOException $e)	{
                $data['error'] = \Config\Database\DBErrorName::$query;
            }	
            return $data;
		}        
        public function getAllForSelect(){
            $data = $this->getAll();
			$halfproducts = array();            
            if(!isset($data['error']))                
            foreach($data['halfproducts'] as $halfproduct)                   
                $halfproducts[$halfproduct[\Config\Database\DBConfig\Halfproduct::$id]] = $halfproduct[\Config\Database\DBConfig\Halfproduct::$name];
            return $halfproducts;            
        }
		public function getOne($id){
            if($this->pdo === null){
                $data['error'] = \Config\Database\DBErrorName::$connection;
                return $data;
            }
            if($id === null){
                $data['error'] = \Config\Database\DBErrorName::$nomatch;
                return $data;
            }          
            $data = array();
            $data['halfproducts'] = array();
            try	{
                $stmt = $this->pdo->prepare('SELECT * FROM  `'.\Config\Database\DBConfig::$tableHalfproduct.'` WHERE  `'.\Config\Database\DBConfig\Halfproduct::$id.'`=:id');   
                $stmt->bindValue(':id', $id, PDO::PARAM_INT); 
                $result = $stmt->execute(); 
                $halfproducts = array();
                while($row = $stmt -> fetch())
                {
                        $halfproducts[$row['id']] = $row['name'];
                }
                $stmt->closeCursor();
                if($halfproducts && !empty($halfproducts))
                    $data['halfproducts'] = $halfproducts;
                else
                    $data['error'] = \Config\Database\DBErrorName::$nomatch;
            }
            catch(\PDOException $e)	{
                var_dump($e);
                $data['error'] = \Config\Database\DBErrorName::$query;
            }	
            return $data;
		}        

		public function add($name){
            if($this->pdo === null){
                $data['error'] = \Config\Database\DBErrorName::$connection;
                return $data;
            }
            if($name === null){
                $data['error'] = \Config\Database\DBErrorName::$empty;
                return $data;
            }              
            $data = array();
            try	{
                $stmt = $this->pdo->prepare('INSERT INTO `'.\Config\Database\DBConfig::$tableHalfproduct.'` (`'.\Config\Database\DBConfig\Halfproduct::$name.'`) VALUES (:name)');                   

                $stmt->bindValue(':name', $name, PDO::PARAM_STR); 
                $result = $stmt->execute(); 
                if(!$result)
                    $data['error'] = \Config\Database\DBErrorName::$noadd;
                else
                    $data['message'] = \Config\Database\DBMessageName::$addok;
                $stmt->closeCursor();                 
            }
            catch(\PDOException $e)	{
                $data['error'] = \Config\Database\DBErrorName::$query;
            }	
            return $data;
		}     
		public function delete($id){
            $data = array();
            if($this->pdo === null){
                $data['error'] = \Config\Database\DBErrorName::$connection;
                return $data;
            }
            if($id === null){
                $data['error'] = \Config\Database\DBErrorName::$nomatch;
                return $data;
            }
            try	{
                $stmt = $this->pdo->prepare('DELETE FROM  `'.\Config\Database\DBConfig::$tableHalfproduct.'` WHERE  `'.\Config\Database\DBConfig\Halfproduct::$id.'`=:id');   
                $stmt->bindValue(':id', $id, PDO::PARAM_INT); 
                $result = $stmt->execute(); 
                if(!$result)
                    $data['error'] = \Config\Database\DBErrorName::$nomatch;
                else
                    $data['message'] = \Config\Database\DBMessageName::$deleteok;
                $stmt->closeCursor();                 
            }
            catch(\PDOException $e)	{
                $data['error'] = \Config\Database\DBErrorName::$query;
            }
            return $data;
		}  
        
		public function update($id, $name){
            $data = array();
            if($this->pdo === null){
                $data['error'] = \Config\Database\DBErrorName::$connection;
                return $data;
            }
            if($id === null || $name === null){
                $data['error'] = \Config\Database\DBErrorName::$empty;
                return $data;
            }
            try	{
                $stmt = $this->pdo->prepare('UPDATE  `'.\Config\Database\DBConfig::$tableHalfproduct.'` SET
                `'.\Config\Database\DBConfig\Halfproduct::$name.'`=:name WHERE `'
                .\Config\Database\DBConfig\Halfproduct::$id.'`=:id');   
                $stmt->bindValue(':id', $id, PDO::PARAM_INT);
                $stmt->bindValue(':name', $name, PDO::PARAM_STR);
                
                $result = $stmt->execute(); 
                $rows = $stmt->rowCount();
                if(!$result)
                    $data['error'] = \Config\Database\DBErrorName::$nomatch;
                else
                    $data['message'] = \Config\Database\DBMessageName::$updateok;
                $stmt->closeCursor();                 
            }
            catch(\PDOException $e)	{
                $data['error'] = \Config\Database\DBErrorName::$query;
            }
            return $data;
		}         
	}
