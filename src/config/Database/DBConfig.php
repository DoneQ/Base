<?php
  namespace Config\Database;

  class DBConfig  {
    // data base name
    public static $databaseName = 'testbase';
    // seccurity data
    public static $hostname = 'localhost';
    public static $databaseType = 'mysql';
    public static $port = '3306';
    public static $user = 'root';
    public static $password = '';
    // tables (...)
    // web accounts
    public static $tableUser = 'User';
    // clients and workers info
    public static $tableClient = 'Client';
    public static $tableWorker = 'Worker';
    public static $tableProduct = 'Product';
    // services
    public static $tableHalfproduct = 'Halfproduct';
    public static $tableProductHalfproduct = 'ProductHalfproduct';
    // public static $tableLocation = 'location';
    public static $tableCategory = 'Category';
    // (...)
    public static $tableMealOrder = 'Mealorder';
      public static $tableOrderProduct = 'OrderProduct';
    


               
        
	}
