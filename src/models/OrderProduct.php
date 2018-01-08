<?php
namespace Models;
use \PDO;
class OrderProduct extends Model {

  public function getAll(){
    if($this->pdo === null){
      $data['error'] = \Config\Database\DBErrorName::$connection;
      return $data;
    }
    $data = array();
    try	{
      $orderproducts = array();
      $stmt = $this->pdo->query('SELECT * FROM `'.\Config\Database\DBConfig::$tableOrderProduct.'`');
      while($row = $stmt -> fetch())
      {
        $orderproducts[$row['id']] = $row['idMealOrder'];
      }
      $stmt->closeCursor();
      if($orderproducts && !empty($orderproducts))
        $data['orderproducts'] = $orderproducts;
    }
    catch(\PDOException $e)	{
      $data['error'] = \Config\Database\DBErrorName::$query;
    }	
    return $data;
  }        
  public function getAllForSelect(){
    $data = $this->getAll();
    $orderproducts = array();            
    if(!isset($data['error']))                
      foreach($data['orderproducts'] as $orderproduct)                   
        $orderproducts[$orderproduct[\Config\Database\DBConfig\OrderProduct::$id]] = $orderproduct[\Config\Database\DBConfig\OrderProduct::$idMealOrder];
    return $orderproducts;            
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
    $data['orderproducts'] = array();
    try	{
      $stmt = $this->pdo->prepare('SELECT * FROM  `'.\Config\Database\DBConfig::$tableOrderProduct.'` WHERE  `'.\Config\Database\DBConfig\OrderProduct::$id.'`=:id');   
      $stmt->bindValue(':id', $id, PDO::PARAM_INT); 
      $result = $stmt->execute(); 
      $orderproducts = $stmt->fetchAll();
      $stmt->closeCursor();
      if($orderproducts && !empty($orderproducts)){
        $data['orderproducts'] = $orderproducts[0];
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

  public function add($idUser, $idMealOrder, $idProduct){
    if($this->pdo === null){
      $data['error'] = \Config\Database\DBErrorName::$connection;
      return $data;
    }
    if($idUser === null || $idMealOrder === null || $idProduct === null){
      $data['error'] = \Config\Database\DBErrorName::$empty;
      return $data;
    }              
    $data = array();
    try	{
      $stmt = $this->pdo->prepare('INSERT INTO `'.\Config\Database\DBConfig::$tableOrderProduct.'` (`'.\Config\Database\DBConfig\OrderProduct::$idUser.'`,`'.\Config\Database\DBConfig\OrderProduct::$idMealOrder.'`,`'.\Config\Database\DBConfig\OrderProduct::$idProduct.'`) VALUES (:idUser,:idMealProduct,:idProduct)');                   

      $stmt->bindValue(':idUser', $idUser, PDO::PARAM_INT);
      $stmt->bindValue(':idMealOrder', $idMealOrder, PDO::PARAM_INT);
      $stmt->bindValue(':idProduct', $idProduct, PDO::PARAM_INT);
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
      $stmt = $this->pdo->prepare('DELETE FROM  `'.\Config\Database\DBConfig::$tableOrderProduct.'` WHERE  `'.\Config\Database\DBConfig\OrderProduct::$id.'`=:id');   
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

  public function update($id, $idUser,$idMealOrder,$idProduct){
    $data = array();
    if($this->pdo === null){
      $data['error'] = \Config\Database\DBErrorName::$connection;
      return $data;
    }
    if($id === null || $idUser === null || $idMealOrder === null || $idProduct === null){
      $data['error'] = \Config\Database\DBErrorName::$empty;
      return $data;
    }
    try	{
      $stmt = $this->pdo->prepare('UPDATE  `'.\Config\Database\DBConfig::$tableOrderProduct.'` SET
                `'.\Config\Database\DBConfig\OrderProduct::$idUser.'`=:idUser,`'.\Config\Database\DBConfig\OrderProduct::$idMealOrder.'`=:idMealOrder, `'.\Config\Database\DBConfig\OrderProduct::$idProduct.'`=:idProduct WHERE `'
                                  .\Config\Database\DBConfig\OrderProduct::$id.'`=:id');   
      $stmt->bindValue(':id', $id, PDO::PARAM_INT);
      $stmt->bindValue(':idUser', $idUser, PDO::PARAM_INT);
      $stmt->bindValue(':idMealOrder', $idMealOrder, PDO::PARAM_INT);
      $stmt->bindValue(':idProduct', $idProduct, PDO::PARAM_INT);

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
