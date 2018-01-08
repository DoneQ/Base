<?php
namespace Models;
use \PDO;
class Worker extends Model {

  public function getAll(){
    if($this->pdo === null){
      $data['error'] = \Config\Database\DBErrorName::$connection;
      return $data;
    }
    $data = array();
    try	{
      $workers = array();
      $stmt = $this->pdo->query('SELECT * FROM `'.\Config\Database\DBConfig::$tableWorker.'`');
      while($row = $stmt -> fetch())
      {
        $workers[$row['id']] = $row['name'];
      }
      $stmt->closeCursor();
      if($workers && !empty($workers))
        $data['workers'] = $workers;
    }
    catch(\PDOException $e)	{
      $data['error'] = \Config\Database\DBErrorName::$query;
    }	
    return $data;
  }        
  public function getAllForSelect(){
    $data = $this->getAll();
    $workers = array();            
    if(!isset($data['error']))                
      foreach($data['workers'] as $worker)                   
        $workers[$worker[\Config\Database\DBConfig\Worker::$id]] = $worker[\Config\Database\DBConfig\Worker::$name];
    return $workers;            
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
    $data['workers'] = array();
    try	{
      $stmt = $this->pdo->prepare('SELECT * FROM  `'.\Config\Database\DBConfig::$tableWorker.'` WHERE  `'.\Config\Database\DBConfig\Worker::$id.'`=:id');   
      $stmt->bindValue(':id', $id, PDO::PARAM_INT); 
      $result = $stmt->execute(); 
      $workers = $stmt->fetchAll();
      $stmt->closeCursor();
      if($workers && !empty($workers)){
        $data['workers'] = $workers[0];
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

  public function add($name, $sname, $phone, $mail){
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
      $stmt = $this->pdo->prepare('INSERT INTO `'.\Config\Database\DBConfig::$tableWorker.'` (`'.\Config\Database\DBConfig\Worker::$name.'`, `'.\Config\Database\DBConfig\Worker::$sname.'`, `'.\Config\Database\DBConfig\Worker::$phone.'`,`'.\Config\Database\DBConfig\Worker::$mail.'`) VALUES (:name, :sname, :phone, :mail)');                   

      $stmt->bindValue(':name', $name, PDO::PARAM_STR); 
      $stmt->bindValue(':sname', $sname, PDO::PARAM_STR); 
      $stmt->bindValue(':phone', $phone, PDO::PARAM_STR); 
      $stmt->bindValue(':mail', $mail, PDO::PARAM_STR); 
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
      $stmt = $this->pdo->prepare('DELETE FROM  `'.\Config\Database\DBConfig::$tableWorker.'` WHERE  `'.\Config\Database\DBConfig\Worker::$id.'`=:id');   
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

  public function update($id, $name, $sname, $phone, $mail){
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
      $stmt = $this->pdo->prepare('UPDATE  `'.\Config\Database\DBConfig::$tableWorker.'` SET
                `'.\Config\Database\DBConfig\Worker::$name.'`=:name, `'.\Config\Database\DBConfig\Worker::$sname.'`=:sname, `'.\Config\Database\DBConfig\Worker::$phone.'`=:phone, `'.\Config\Database\DBConfig\Worker::$mail.'`=:mail WHERE `'
                                  .\Config\Database\DBConfig\Worker::$id.'`=:id');   
      $stmt->bindValue(':id', $id, PDO::PARAM_INT);
      $stmt->bindValue(':name', $name, PDO::PARAM_STR);
      $stmt->bindValue(':sname', $sname, PDO::PARAM_STR);
      $stmt->bindValue(':phone', $phone, PDO::PARAM_STR);
      $stmt->bindValue(':mail', $mail, PDO::PARAM_STR);

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
