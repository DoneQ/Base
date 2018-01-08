<?php
namespace Models;
use \PDO;
class Product extends Model {

    public function getAll(){
        if($this->pdo === null){
            $data['error'] = \Config\Database\DBErrorName::$connection;
            return $data;
        }
        $data = array();
        try	{
            $products = array();
            $stmt = $this->pdo->query('SELECT * FROM `'.\Config\Database\DBConfig::$tableProduct.'`');
            while($row = $stmt -> fetch())
            {
                $products[$row['id']] = $row['name'];
            }
            $stmt->closeCursor();
            if($products && !empty($products))
                $data['products'] = $products;
        }
        catch(\PDOException $e)	{
            $data['error'] = \Config\Database\DBErrorName::$query;
        }	
        return $data;
    }        
    public function getAllForSelect(){
        $data = $this->getAll();
        $products = array();            
        if(!isset($data['error']))                
            foreach($data['products'] as $product)                   
                $products[$product[\Config\Database\DBConfig\Product::$id]] = $product[\Config\Database\DBConfig\Product::$name];
        return $products;            
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
        $data['products'] = array();
        try	{
            $stmt = $this->pdo->prepare('SELECT * FROM  `'.\Config\Database\DBConfig::$tableProduct.'` WHERE  `'.\Config\Database\DBConfig\Product::$id.'`=:id');   
            $stmt->bindValue(':id', $id, PDO::PARAM_INT); 
            $result = $stmt->execute(); 
            $products = $stmt->fetchAll();
            $stmt->closeCursor();
            if($products && !empty($products)){
                $data['products'] = $products[0];
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

    public function add($name, $info, $adds, $price, $idCategory){
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
            $stmt = $this->pdo->prepare('INSERT INTO `'.\Config\Database\DBConfig::$tableProduct.'` (`'.\Config\Database\DBConfig\Product::$name.'`, `'.\Config\Database\DBConfig\Product::$info.'`, `'.\Config\Database\DBConfig\Product::$adds.'`, `'.\Config\Database\DBConfig\Product::$price.'`, `'.\Config\Database\DBConfig\Product::$idCategory.'`) VALUES (:name, :info, :adds, :price, :idCategory)');                   

            $stmt->bindValue(':name', $name, PDO::PARAM_STR); 
            $stmt->bindValue(':info', $info, PDO::PARAM_STR); 
            $stmt->bindValue(':adds', $adds, PDO::PARAM_STR); 
            $stmt->bindValue(':price', $price, PDO::PARAM_STR); 
            $stmt->bindValue(':idCategory', $idCategory, PDO::PARAM_INT); 
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
            $stmt = $this->pdo->prepare('DELETE FROM  `'.\Config\Database\DBConfig::$tableProduct.'` WHERE  `'.\Config\Database\DBConfig\Product::$id.'`=:id');   
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

    public function update($id, $name, $info, $adds, $price, $idCategory){
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
            $stmt = $this->pdo->prepare('UPDATE  `'.\Config\Database\DBConfig::$tableProduct.'` SET
                `'.\Config\Database\DBConfig\Product::$name.'`=:name, `'.\Config\Database\DBConfig\Product::$info.'`=:info, `'.\Config\Database\DBConfig\Product::$adds.'`=:adds, `'.\Config\Database\DBConfig\Product::$price.'`=:price, `'.\Config\Database\DBConfig\Product::$idCategory.'`=:idCategory WHERE `'
                                        .\Config\Database\DBConfig\Product::$id.'`=:id');   
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->bindValue(':name', $name, PDO::PARAM_STR);
            $stmt->bindValue(':info', $info, PDO::PARAM_STR);
            $stmt->bindValue(':adds', $adds, PDO::PARAM_STR);
            $stmt->bindValue(':price', $price, PDO::PARAM_STR);
            $stmt->bindValue(':idCategory', $idCategory, PDO::PARAM_INT);

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
