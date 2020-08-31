<?php
function connectDB(){
  try{
    $database = new PDO('mysql:host=127.0.0.1;dbname=myminette', 'root'.'');
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "<h4 style='color: green;'>Connected to database</h4>";
    return $database;
  } catch(PDOException $e){
    echo "<h4 style='color: red;'>".$e->getMessage(). "</h4>";
  }
}
$pdo = connectDB();
function initMigration($pdo){
  try{
    $statement = $pdo->prepare(
      'CREATE TABLE IF NOT EXISTS membres (
        id int NOT NULL AUTO_INCREMENT primary key,
        first_name varchar(255) NOT NULL,
        last_name varchar(255) NOT NULL,
        age int NOT NULL
      );'
    );
    $statement->execute();
  }catch(PDOException $e){
    echo "<h4 style:'color: red;'>".$e->getMessage(). "</h4>";
  }
}
 ?>
