<?php
namespace Models;
use \PDO;
class MealOrder extends Model {

  public function getAll(){
    if($this->pdo === null){
      $data['error'] = \Config\Database\DBErrorName::$connection;
      return $data;
    }
    $data = array();
    $data['$mealorders'] = array();
    try	{
      $stmt = $this->pdo->query('SELECT * FROM `'.\Config\Database\DBConfig::$tableMealOrder.'`');
      $mealorders = array();
      while ($row = $stmt -> fetch()){
        $mealorders[$row['id']] = $row['adress'];
      }
      $stmt->closeCursor();
      if($mealorders && !empty($mealorders)){
        $data['mealorders'] = $mealorders;
      }
    }
    catch(\PDOException $e)	{
      $data['error'] = \Config\Database\DBErrorName::$query;
    }	
    return $data;
  }  

  public function getAllForSelect(){
    $data = $this->getAll();
    $mealorders = array();            
    if(!isset($data['error'])){        
      foreach($data['mealorders'] as $mealorder){                  
        $mealorders[$mealorders[\Config\Database\DBConfig\MealOrder::$id]] = $mealorders[\Config\Database\DBConfig\MealOrder::$adress];
      }
    }
    return $mealorders;            
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
    $data['mealorders'] = array();
    try	{
      $stmt = $this->pdo->prepare('SELECT * FROM  `'.\Config\Database\DBConfig::$tableMealOrder.'` WHERE  `'.\Config\Database\DBConfig\MealOrder::$id.'`=:id');   
      $stmt->bindValue(':id', $id, PDO::PARAM_INT); 
      $result = $stmt->execute(); 
      $mealorders = $stmt->fetchAll();
      $stmt->closeCursor();
      if($mealorders && !empty($mealorders)){
        $data['mealorders'] = $mealorders[0];
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
 

  public function add($idClient, $idWorker, $contactPhone, $adress){
if($this->pdo === null){
      $data['error'] = \Config\Database\DBErrorName::$connection;
      return $data;
    } else if($idClient === null || $idWorker === null || $contactPhone === null || $adress === null){
      $data['error'] = \Config\Database\DBErrorName::$empty;
      return $data;
    }
    $data = array();
    try	{
      $stmt = $this->pdo->prepare('INSERT INTO `'.\Config\Database\DBConfig::$tableMealOrder.'` (`'.\Config\Database\DBConfig\MealOrder::$idClient.'`,`'.\Config\Database\DBConfig\MealOrder::$idWorker.'`,`'.\Config\Database\DBConfig\MealOrder::$contactPhone.'`,`'.\Config\Database\DBConfig\MealOrder::$adress.'`) VALUES (:idClient, :idWorker, :contactPhone, :adress)');                   

      $stmt->bindValue(':idClient', $idClient, PDO::PARAM_INT); 
      $stmt->bindValue(':idWorker', $idWorker, PDO::PARAM_INT);
      $stmt->bindValue(':contactPhone', $contactPhone, PDO::PARAM_STR); 
      $stmt->bindValue(':adress', $adress, PDO::PARAM_STR); 
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
      $stmt = $this->pdo->prepare('DELETE FROM  `'.\Config\Database\DBConfig::$tableMealOrder.'` WHERE  `'.\Config\Database\DBConfig\MealOrder::$id.'`=:id');   
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


  public function update($id, $idClient, $idWorker, $contactPhone, $adress){
    $data = array();
    /*****/if($this->pdo === null){
      $data['error'] = \Config\Database\DBErrorName::$connection;
      return $data;
    } else if($id === null || $idClient === null || $idWorker === null || $contactPhone === null || $adress === null){
      $data['error'] = \Config\Database\DBErrorName::$empty;
      return $data;
    }
    try	{
      $stmt = $this->pdo->prepare('UPDATE  `'.\Config\Database\DBConfig::$tableMealOrder.'` SET
                `'.\Config\Database\DBConfig\MealOrder::$idClient.'`=:idClient, `'.\Config\Database\DBConfig\MealOrder::$idWorker.'`=:idWorker, `'.\Config\Database\DBConfig\MealOrder::$contactPhone.'`=:contactPhone, `'.\Config\Database\DBConfig\MealOrder::$adress.'`=:adress WHERE `'
                                  .\Config\Database\DBConfig\MealOrder::$id.'`=:id');   
      $stmt->bindValue(':id', $id, PDO::PARAM_INT);
      $stmt->bindValue(':idClient', $idClient, PDO::PARAM_INT);
      $stmt->bindValue(':idWorker', $idWorker, PDO::PARAM_INT);
      $stmt->bindValue(':contactPhone', $contactPhone, PDO::PARAM_STR);
      $stmt->bindValue(':adress', $adress, PDO::PARAM_STR);

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