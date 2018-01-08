<!doctype html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <title>Instalacja</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        require 'vendor/autoload.php';

        use Config\Database\DBConfig as DB;
        use Config\Database\DBConnection as DBConnection;

        DBConnection::setDBConnection(DB::$user,DB::$password, 
                                      DB::$hostname, DB::$databaseType, DB::$port);	
        try {
            $pdo =  DBConnection::getHandle();
        }catch(\PDOException $e){
            echo \Config\Database\DBErrorName::$connection;
            exit(1);
        }    
        $query = 'DROP TABLE IF EXISTS `'.DB::$tableOrderProduct.'`';
        try { 
            $pdo->exec($query);
        }
        catch(PDOException $e) {
            echo \Config\Database\DBErrorName::$delete_table.DB::$tableOrderProduct;
        }
        $query = 'DROP TABLE IF EXISTS `'.DB::$tableMealOrder.'`';
        try { 
            $pdo->exec($query);
        }
        catch(PDOException $e) {
            echo \Config\Database\DBErrorName::$delete_table.DB::$tableMealOrder;
        }
        $query = 'DROP TABLE IF EXISTS `'.DB::$tableUser.'`';
        try { 
            $pdo->exec($query);
        }
        catch(PDOException $e) {
            echo \Config\Database\DBErrorName::$delete_table.DB::$tableUser;
        }
        $query = 'DROP TABLE IF EXISTS `'.DB::$tableWorker.'`';
        try { 
            $pdo->exec($query);
        }
        catch(PDOException $e) {
            echo \Config\Database\DBErrorName::$delete_table.DB::$tableWorker;
        }
        $query = 'DROP TABLE IF EXISTS `'.DB::$tableClient.'`';
        try { 
            $pdo->exec($query);
        }
        catch(PDOException $e) {
            echo \Config\Database\DBErrorName::$delete_table.DB::$tableClient;
        }
        $query = 'DROP TABLE IF EXISTS `'.DB::$tableProductHalfproduct.'`';
        try { 
            $pdo->exec($query);
        }
        catch(PDOException $e) {
            echo \Config\Database\DBErrorName::$delete_table.DB::$tableProductHalfproduct;
        }
        $query = 'DROP TABLE IF EXISTS `'.DB::$tableProduct.'`';
        try { 
            $pdo->exec($query);
        }
        catch(PDOException $e) {
            echo \Config\Database\DBErrorName::$delete_table.DB::$tableProduct;
        }
        $query = 'DROP TABLE IF EXISTS `'.DB::$tableHalfproduct.'`';
        try { 
            $pdo->exec($query);
        }
        catch(PDOException $e) {
            echo \Config\Database\DBErrorName::$delete_table.DB::$tableHalfProduct;
        }
        $query = 'DROP TABLE IF EXISTS `'.DB::$tableCategory.'`';
        try { 
            $pdo->exec($query);
        }
        catch(PDOException $e) {
            echo \Config\Database\DBErrorName::$delete_table.DB::$tableCategory;
        }

        $query = 'CREATE TABLE IF NOT EXISTS `'.DB::$tableCategory.'` (
      `'.DB\Category::$id.'` INT AUTO_INCREMENT, 
      `'.DB\Category::$name.'` VARCHAR(30) NOT NULL,
        PRIMARY KEY ('.DB\Category::$id.')) ENGINE=InnoDB;';
        try
        {
            $pdo->exec($query);
        }
        catch(PDOException $e)
        {
            echo \Config\Database\DBErrorName::$create_table.DB::$tableCategory;
        }

        $query = 'CREATE TABLE IF NOT EXISTS `'.DB::$tableProduct.'` (
      `'.DB\Product::$id.'` INT AUTO_INCREMENT, 
      `'.DB\Product::$name.'` VARCHAR(30) NOT NULL,
      `'.DB\Product::$info.'` VARCHAR(30) NOT NULL,
      `'.DB\Product::$adds.'` VARCHAR(30) NOT NULL,
      `'.DB\Product::$price.'` INT NOT NULL,
      `'.DB\Product::$idCategory.'` INT NOT NULL,
        PRIMARY KEY ('.DB\Product::$id.'),
        FOREIGN KEY ('.DB\Product::$idCategory.') REFERENCES '.DB::$tableCategory.'('.DB\Category::$id.') ON DELETE CASCADE
        ) ENGINE=InnoDB;';
        try
        {
            $pdo->exec($query);
        }
        catch(PDOException $e)
        {
            echo \Config\Database\DBErrorName::$create_table.DB::$tableProduct;
        }

        $query = 'CREATE TABLE IF NOT EXISTS `'.DB::$tableHalfproduct.'` (
      `'.DB\Halfproduct::$id.'` INT AUTO_INCREMENT, 
      `'.DB\Halfproduct::$name.'` VARCHAR(30) NOT NULL,
        PRIMARY KEY ('.DB\Halfproduct::$id.'))
        ENGINE=InnoDB;';
        try
        {
            $pdo->exec($query);
        }
        catch(PDOException $e)
        {
            echo \Config\Database\DBErrorName::$create_table.DB::$tableHalfproduct;
        }

        $query = 'CREATE TABLE IF NOT EXISTS `'.DB::$tableProductHalfproduct.'` (
      `'.DB\ProductHalfproduct::$idProduct.'` INT NOT NULL, 
      `'.DB\ProductHalfproduct::$idHalfproduct.'` INT NOT NULL,
      `'.DB\ProductHalfproduct::$gramCount.'` INT NOT NULL,
        FOREIGN KEY ('.DB\ProductHalfproduct::$idProduct.') REFERENCES '.DB::$tableProduct.'('.DB\Product::$id.') ON DELETE CASCADE,
        FOREIGN KEY ('.DB\ProductHalfproduct::$idHalfproduct.') REFERENCES '.DB::$tableHalfproduct.'('.DB\Halfproduct::$id.') ON DELETE CASCADE)
        ENGINE=InnoDB;';
        try
        {
            $pdo->exec($query);
        }
        catch(PDOException $e)
        {
            echo \Config\Database\DBErrorName::$create_table.DB::$tableProductHalfproduct;
        }


        $query = 'CREATE TABLE IF NOT EXISTS `'.DB::$tableClient.'` (
      `'.DB\Client::$id.'` INT AUTO_INCREMENT, 
      `'.DB\Client::$name.'` VARCHAR(30) NOT NULL,
      `'.DB\Client::$sname.'` VARCHAR(30) NOT NULL,
      `'.DB\Client::$phone.'` VARCHAR(30) NOT NULL,
      `'.DB\Client::$mail.'` VARCHAR(30) NOT NULL,
        PRIMARY KEY ('.DB\Client::$id.'))
        ENGINE=InnoDB;';
        try
        {
            $pdo->exec($query);
        }
        catch(PDOException $e)
        {
            echo \Config\Database\DBErrorName::$create_table.DB::$tableClient;
        }

        $query = 'CREATE TABLE IF NOT EXISTS `'.DB::$tableWorker.'` (
      `'.DB\Worker::$id.'` INT AUTO_INCREMENT, 
      `'.DB\Worker::$name.'` VARCHAR(30) NOT NULL,
      `'.DB\Worker::$sname.'` VARCHAR(30) NOT NULL,
      `'.DB\Worker::$phone.'` VARCHAR(30) NOT NULL,
      `'.DB\Worker::$mail.'` VARCHAR(30) NOT NULL,
        PRIMARY KEY ('.DB\Worker::$id.'))
        ENGINE=InnoDB;';
        try
        {
            $pdo->exec($query);
        }
        catch(PDOException $e)
        {
            echo \Config\Database\DBErrorName::$create_table.DB::$tableWorker;
        }

        $query = 'CREATE TABLE IF NOT EXISTS `'.DB::$tableUser.'` (
      `'.DB\User::$id.'` INT AUTO_INCREMENT, 
      `'.DB\User::$idClient.'` INT NULL,
      `'.DB\User::$idWorker.'` INT NULL,
      `'.DB\User::$login.'` VARCHAR(30) NOT NULL,
      `'.DB\User::$password.'` VARCHAR(30) NOT NULL,
        PRIMARY KEY ('.DB\User::$id.'),
        FOREIGN KEY ('.DB\User::$idClient.') REFERENCES '.DB::$tableClient.'('.DB\Client::$id.') ON DELETE CASCADE,
        FOREIGN KEY ('.DB\User::$idWorker.') REFERENCES '.DB::$tableWorker.'('.DB\Worker::$id.') ON DELETE CASCADE)
        ENGINE=InnoDB;';
        try
        {
            $pdo->exec($query);
        }
        catch(PDOException $e)
        {
            echo \Config\Database\DBErrorName::$create_table.DB::$tableUser;
        }

        $query = 'CREATE TABLE IF NOT EXISTS `'.DB::$tableMealOrder.'` (
      `'.DB\MealOrder::$id.'` INT AUTO_INCREMENT, 
      `'.DB\MealOrder::$idClient.'` INT NULL,
      `'.DB\MealOrder::$idWorker.'` INT NULL,
      `'.DB\MealOrder::$contactPhone.'` VARCHAR(30) NOT NULL,
      `'.DB\MealOrder::$adress.'` VARCHAR(30) NOT NULL,
        PRIMARY KEY ('.DB\MealOrder::$id.'),
        FOREIGN KEY ('.DB\MealOrder::$idClient.') REFERENCES '.DB::$tableClient.'('.DB\Client::$id.') ON DELETE CASCADE,
        FOREIGN KEY ('.DB\MealOrder::$idWorker.') REFERENCES '.DB::$tableWorker.'('.DB\Worker::$id.') ON DELETE CASCADE)
        ENGINE=InnoDB;';
        try
        {
            $pdo->exec($query);
        }
        catch(PDOException $e)
        {
          
            echo \Config\Database\DBErrorName::$create_table.DB::$tableMealOrder;
        }

        $query = 'CREATE TABLE IF NOT EXISTS `'.DB::$tableOrderProduct.'` (
      `'.DB\OrderProduct::$id.'` INT AUTO_INCREMENT, 
      `'.DB\OrderProduct::$idUser.'` INT NULL,
      `'.DB\OrderProduct::$idMealOrder.'` INT NULL,
      `'.DB\OrderProduct::$idProduct.'` INT NULL,
        PRIMARY KEY ('.DB\OrderProduct::$id.'),
        FOREIGN KEY ('.DB\OrderProduct::$idUser.') REFERENCES '.DB::$tableUser.'('.DB\User::$id.') ON DELETE CASCADE,
        FOREIGN KEY ('.DB\OrderProduct::$idProduct.') REFERENCES '.DB::$tableProduct.'('.DB\Product::$id.') ON DELETE CASCADE,
        FOREIGN KEY ('.DB\OrderProduct::$idMealOrder.') REFERENCES '.DB::$tableMealOrder.'('.DB\MealOrder::$id.') ON DELETE CASCADE)
        ENGINE=InnoDB;';
        try
        {
            $pdo->exec($query);
        }
        catch(PDOException $e)
        {
            echo \Config\Database\DBErrorName::$create_table.DB::$tableOrderProduct;
        }

        $orderProductsArray = array();           // 4th Grade
        $usersArray = array();                 // 3rd Grade
        $clientsArray = array();             // 2nd Grade
        $workersArray = array();             // 2nd Grade
        $mealOrdersArray = array();            // 3rd Grade
        $productHalfproductsArray = array();   // 3rd Grade
        $productsArray = array();            // 2nd Grade
        $categoriesArray = array ();           // 1st Grade
        $halfproductsArray = array();        // 2nd Grade

        // 1st
        $categoriesArray[] = array(
            'name' => 'Zupy');

        // 2nd
        $halfproductsArray[] = array(
            'name' => 'Frytki');
        $productsArray[] = array(
            'name' => 'Shorma',
            'info' => 'none',
            'adds' => 'none',
            'price' => '14',
            'idCategory' => '1');
        $workersArray[] = array(
            'name' => 'Jakis',
            'sname' => 'Pracownik',
            'phone' => '556556666',
            'mail' => 'jakismail@gmail.com');
        $clientsArray[] = array(
            'name' => 'Jakis',
            'sname' => 'Klient',
            'phone' => '666556556',
            'mail' => 'jakismail2@gmail.com');

        // 3rd
        $productHalfproductsArray[] = array(
            'idProduct' => '1',
            'idHalfproduct' => '1',
            'gramCount' => '120');
        $mealOrdersArray[] = array(
            'idClient' => NULL,
            'idWorker' => NULL,
            'contactPhone' => 'vfed',
            'adress' => 'Warszowka 50C');
        $usersArray[] = array(
            'idClient' => '1',
            'idWorker' => NULL,
            'login' => 'jan228',
            'password' => 'haslo1');

        // 4th
        $orderProductsArray[] = array(
            'idUser' => '1',
            'idMealOrder' => '1',
            'idProduct' => '1',
            'phone' => '666556556');

        //Categories
        try
        {
            $stmt = $pdo -> prepare('INSERT INTO `'.DB::$tableCategory.'` (`'.DB\Category::$name.'`) VALUES(:name)');	
            foreach($categoriesArray as $categoriesArray)
            {
                //strval($float), nie ma typu PDO::PARAM_FLOAT
                $stmt -> bindValue(':name', $categoriesArray['name'], PDO::PARAM_STR);
                $stmt -> execute(); 
            }
        }
        catch(PDOException $e)
        {
            echo \Config\Database\DBErrorName::$noadd;
        }


        //Products
        try
        {
            $stmt = $pdo -> prepare('INSERT INTO `'.DB::$tableProduct.'` (`'.DB\Product::$name.'`,`'.DB\Product::$info.'`,`'.DB\Product::$adds.'`,`'.DB\Product::$price.'`,`'.DB\Product::$idCategory.'`) VALUES(:name,:info,:adds,:price,:idCategory)');	
            foreach($productsArray as $productsArray)
            {
                //strval($float), nie ma typu PDO::PARAM_FLOAT
                $stmt -> bindValue(':name', $productsArray['name'], PDO::PARAM_STR);
                $stmt -> bindValue(':info', $productsArray['info'], PDO::PARAM_STR);
                $stmt -> bindValue(':adds', $productsArray['adds'], PDO::PARAM_STR);
                $stmt -> bindValue(':price', $productsArray['price'], PDO::PARAM_STR);
                $stmt -> bindValue(':idCategory', $productsArray['idCategory'], PDO::PARAM_INT);
                $stmt -> execute(); 
            }
        }
        catch(PDOException $e)
        {
            echo \Config\Database\DBErrorName::$noadd;
        }

        //Halfproduct
        try
        {
            $stmt = $pdo -> prepare('INSERT INTO `'.DB::$tableHalfproduct.'` (`'.DB\Halfproduct::$name.'`) VALUES(:name)');	
            foreach($halfproductsArray as $halfproductsArray)
            {
                //strval($float), nie ma typu PDO::PARAM_FLOAT
                $stmt -> bindValue(':name', $halfproductsArray['name'], PDO::PARAM_STR);
                $stmt -> execute(); 
            }
        }
        catch(PDOException $e)
        {
            echo \Config\Database\DBErrorName::$noadd;
        }


        //Client
        try
        {
            $stmt = $pdo -> prepare('INSERT INTO `'.DB::$tableClient.'` (`'.DB\Client::$name.'`,`'.DB\Client::$sname.'`,`'.DB\Client::$phone.'`,`'.DB\Client::$mail.'`) VALUES(:name,:sname,:phone,:mail)');	
            foreach($clientsArray as $clientsArray)
            {
                //strval($float), nie ma typu PDO::PARAM_FLOAT
                $stmt -> bindValue(':name', $clientsArray['name'], PDO::PARAM_STR);
                $stmt -> bindValue(':sname', $clientsArray['sname'], PDO::PARAM_STR);
                $stmt -> bindValue(':phone', $clientsArray['phone'], PDO::PARAM_STR);
                $stmt -> bindValue(':mail', $clientsArray['mail'], PDO::PARAM_STR);
                $stmt -> execute(); 
            }
        }
        catch(PDOException $e)
        {
            echo \Config\Database\DBErrorName::$noadd;
        }

        //Worker
        try
        {
            $stmt = $pdo -> prepare('INSERT INTO `'.DB::$tableWorker.'` (`'.DB\Worker::$name.'`,`'.DB\Worker::$sname.'`,`'.DB\Worker::$phone.'`,`'.DB\Worker::$mail.'`) VALUES(:name,:sname,:phone,:mail)');	
            foreach($workersArray as $workersArray)
            {
                //strval($float), nie ma typu PDO::PARAM_FLOAT
                $stmt -> bindValue(':name', $workersArray['name'], PDO::PARAM_STR);
                $stmt -> bindValue(':sname', $workersArray['sname'], PDO::PARAM_STR);
                $stmt -> bindValue(':phone', $workersArray['phone'], PDO::PARAM_STR);
                $stmt -> bindValue(':mail', $workersArray['mail'], PDO::PARAM_STR);
                $stmt -> execute(); 
            }
        }
        catch(PDOException $e)
        {
            echo \Config\Database\DBErrorName::$noadd;
        }

        //ProductHalfproduct
        try
        {
            $stmt = $pdo -> prepare('INSERT INTO `'.DB::$tableProductHalfproduct.'` (`'.DB\ProductHalfproduct::$idProduct.'`,`'.DB\ProductHalfproduct::$idHalfproduct.'`,`'.DB\ProductHalfproduct::$gramCount.'`) VALUES(:idProduct,:idHalfproduct,:gramCount)');	
            foreach($productHalfproductsArray as $productHalfproductsArray)
            {
                //strval($float), nie ma typu PDO::PARAM_FLOAT
                $stmt -> bindValue(':idProduct', $productHalfproductsArray['idProduct'], PDO::PARAM_INT);
                $stmt -> bindValue(':idHalfproduct', $productHalfproductsArray['idHalfproduct'], PDO::PARAM_INT);
                $stmt -> bindValue(':gramCount', $productHalfproductsArray['gramCount'], PDO::PARAM_STR);
                $stmt -> execute(); 
            }
        }
        catch(PDOException $e)
        {
            echo \Config\Database\DBErrorName::$noadd;
        }

        //User
        try
        {
            $stmt = $pdo -> prepare('INSERT INTO `'.DB::$tableUser.'` (`'.DB\User::$idClient.'`,`'.DB\User::$idWorker.'`,`'.DB\User::$login.'`,`'.DB\User::$password.'`) VALUES(:idClient,:idWorker,:login,:password)');	
            foreach($usersArray as $usersArray)
            {
                //strval($float), nie ma typu PDO::PARAM_FLOAT
                $stmt -> bindValue(':idClient', $usersArray['idClient'], PDO::PARAM_INT);
                $stmt -> bindValue(':idWorker', $usersArray['idWorker'], PDO::PARAM_INT);
                $stmt -> bindValue(':login', $usersArray['login'], PDO::PARAM_STR);
                $stmt -> bindValue(':password', $usersArray['password'], PDO::PARAM_STR);
                $stmt -> execute(); 
            }
        }
        catch(PDOException $e)
        {
          echo $e;
            echo \Config\Database\DBErrorName::$noadd;
        }

        //MealOrder
        try
        {
            $stmt = $pdo -> prepare('INSERT INTO `'.DB::$tableMealOrder.'` (`'.DB\MealOrder::$idClient.'`,`'.DB\MealOrder::$idWorker.'`,`'.DB\MealOrder::$contactPhone.'`,`'.DB\MealOrder::$adress.'`) VALUES(:idClient,:idWorker,:contactPhone,:adress)');	
            foreach($mealOrdersArray as $mealOrdersArray)
            {
                //strval($float), nie ma typu PDO::PARAM_FLOAT
                $stmt -> bindValue(':idClient', $mealOrdersArray['idClient'], PDO::PARAM_INT);
                $stmt -> bindValue(':idWorker', $mealOrdersArray['idWorker'], PDO::PARAM_INT);
                $stmt -> bindValue(':contactPhone', $mealOrdersArray['contactPhone'], PDO::PARAM_STR);
                $stmt -> bindValue(':adress', $mealOrdersArray['adress'], PDO::PARAM_STR);
                $stmt -> execute(); 
            }
        }
        catch(PDOException $e)
        {
          echo $e;
            echo \Config\Database\DBErrorName::$noadd;
        }

        //OrderProduct
        try
        {
            $stmt = $pdo -> prepare('INSERT INTO `'.DB::$tableOrderProduct.'` (`'.DB\OrderProduct::$idUser.'`,`'.DB\OrderProduct::$idMealOrder.'`,`'.DB\OrderProduct::$idProduct.'`) VALUES(:idUser,:idMealOrder,:idProduct)');	
            foreach($orderProductsArray as $orderProductsArray)
            {
                //strval($float), nie ma typu PDO::PARAM_FLOAT
                $stmt -> bindValue(':idUser', $orderProductsArray['idUser'], PDO::PARAM_INT);
                $stmt -> bindValue(':idMealOrder', $orderProductsArray['idMealOrder'], PDO::PARAM_INT);
                $stmt -> bindValue(':idProduct', $orderProductsArray['idProduct'], PDO::PARAM_INT);
                $stmt -> execute(); 
            }
        }
        catch(PDOException $e)
        {
          echo $e;
            echo \Config\Database\DBErrorName::$noadd;
        }
        echo "<b>Instalacja aplikacji zakończona!</b>"
        ?>
    </body>
</html>