<?php
namespace Models;
use \PDO;
class User extends Model {



    function debug_to_console($data) {
        if(is_array($data) || is_object($data))
        {
            echo("<script>console.log('PHP: ".json_encode($data)."');</script>");
        } else {
            echo("<script>console.log('PHP: ".$data."');</script>");
        }
    }
    public function getAll(){
        if($this->pdo === null){
            $data['error'] = \Config\Database\DBErrorName::$connection;
            return $data;
        }
        $data = array();
        $data['$users'] = array();
        try	{
            $stmt = $this->pdo->query('SELECT * FROM `'.\Config\Database\DBConfig::$tableUser.'`');
            $users = array();
            while ($row = $stmt -> fetch()){
                $users[$row['id']] = $row['login'];
            }
            $stmt->closeCursor();
            if($users && !empty($users)){
                $data['users'] = $users;
            }
        }
        catch(\PDOException $e)	{
            $data['error'] = \Config\Database\DBErrorName::$query;
        }	
        return $data;
    }  

    public function getAllForSelect(){
        $data = $this->getAll();
        $users = array();            
        if(!isset($data['error'])){        
            foreach($data['users'] as $user){                  
                $users[$users[\Config\Database\DBConfig\User::$id]] = $users[\Config\Database\DBConfig\User::$name];
            }
        }
        return $users;            
    }
    public function getOne($id){
        /*****/if($this->pdo === null){
            $data['error'] = \Config\Database\DBErrorName::$connection;
            return $data;
        } else if($id === null){
            $data['error'] = \Config\Database\DBErrorName::$nomatch;
            return $data;
        }          
        $data = array();
        $data['users'] = array();
        try	{
            $stmt = $this->pdo->prepare('SELECT * FROM  `'.\Config\Database\DBConfig::$tableUser.'` WHERE  `'.\Config\Database\DBConfig\User::$id.'`=:id');   
            $stmt->bindValue(':id', $id, PDO::PARAM_INT); 
            $result = $stmt->execute(); 
            $users = $stmt->fetchAll();
            $stmt->closeCursor();
            if($users && !empty($users)){
                $data['users'] = $users[0];
            } else {
                $data['error'] = \Config\Database\DBErrorName::$nomatch;
            }
        }
        catch(\PDOException $e)	{
            var_dump($e);
            $data['error'] = \Config\Database\DBErrorName::$query;
        }	
        return $data;
    }        


    public function add($idClient, $idWorker, $login, $password){
        if($this->pdo === null){
            $data['error'] = \Config\Database\DBErrorName::$connection;
            return $data;
        } else if($idClient === null || $idWorker === null || $login === null || $password === null){
            $data['error'] = \Config\Database\DBErrorName::$empty;
            return $data;
        }
        $data = array();
        try	{
            $stmt = $this->pdo->prepare('INSERT INTO `'.\Config\Database\DBConfig::$tableUser.'` (`'.\Config\Database\DBConfig\User::$idClient.'`,`'.\Config\Database\DBConfig\User::$idWorker.'`,`'.\Config\Database\DBConfig\User::$login.'`,`'.\Config\Database\DBConfig\User::$password.'`) VALUES (:idClient, :idWorker, :login, :password)');                   

            $stmt->bindValue(':idClient', $idClient, PDO::PARAM_INT); 
            $stmt->bindValue(':idWorker', $idWorker, PDO::PARAM_INT);
            $stmt->bindValue(':login', $login, PDO::PARAM_STR); 
            $stmt->bindValue(':password', $password, PDO::PARAM_STR); 
            $result = $stmt->execute(); 
            if(!$result){
                $data['error'] = \Config\Database\DBErrorName::$noadd;
            } else{
                $data['message'] = \Config\Database\DBMessageName::$addok;
            }
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
            $stmt = $this->pdo->prepare('DELETE FROM  `'.\Config\Database\DBConfig::$tableUser.'` WHERE  `'.\Config\Database\DBConfig\User::$id.'`=:id');   
            $stmt->bindValue(':id', $id, PDO::PARAM_INT); 
            $result = $stmt->execute(); 
            if(!$result){
                $data['error'] = \Config\Database\DBErrorName::$nomatch;
            } else {
                $data['message'] = \Config\Database\DBMessageName::$deleteok;
            }
            $stmt->closeCursor();                 
        }
        catch(\PDOException $e)	{
            $data['error'] = \Config\Database\DBErrorName::$query;
        }
        return $data;
    }  


    public function update($id, $idClient, $idWorker, $login, $password){
        $data = array();
        /*****/if($this->pdo === null){
            $data['error'] = \Config\Database\DBErrorName::$connection;
            return $data;
        } else if($id === null || $idClient === null || $idWorker === null || $login === null || $password === null){
            $data['error'] = \Config\Database\DBErrorName::$empty;
            return $data;
        }
        try	{
            $stmt = $this->pdo->prepare('UPDATE  `'.\Config\Database\DBConfig::$tableUser.'` SET
                `'.\Config\Database\DBConfig\User::$idClient.'`=:idClient, `'.\Config\Database\DBConfig\User::$idWorker.'`=:idWorker, `'.\Config\Database\DBConfig\User::$login.'`=:login, `'.\Config\Database\DBConfig\User::$password.'`=:password WHERE `'
                                        .\Config\Database\DBConfig\User::$id.'`=:id');   
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->bindValue(':idClient', $idClient, PDO::PARAM_INT);
            $stmt->bindValue(':idWorker', $idWorker, PDO::PARAM_INT);
            $stmt->bindValue(':login', $login, PDO::PARAM_STR);
            $stmt->bindValue(':password', $password, PDO::PARAM_STR);

            $result = $stmt->execute(); 
            $rows = $stmt->rowCount();
            if(!$result){
                $data['error'] = \Config\Database\DBErrorName::$nomatch;
            }
            else {
                $data['message'] = \Config\Database\DBMessageName::$updateok;
            }
            $stmt->closeCursor();                 
        }
        catch(\PDOException $e)	{
            $data['error'] = \Config\Database\DBErrorName::$query;
        }
        return $data;
    }         
}