<?php 
/**
 * create DB   done
 * set Cradentioals
 * class=> PDP
 * // "dbtype:host;dbname"
 * (string $dsn, string|null $username = null, string|null $password = null, array|null $options = null)
 * 
 */
$dbType="mysql";
$dbName="iti_os_9m_2025";
$host="localhost";
$userName="root";
$userPassword="";
$connection=new PDO("$dbType:host=$host;dbname=$dbName",$userName,$userPassword);
session_start();
// var_dump($connection);

/**
 * insert data table users
 * 
 * sql==> 
 */

// *********************  insert Data  ****************
// $query="insert into users (name,email,password)values('ahmed','ahmed@gmail.com','123456')";

// var_dump($query);//===>string  ==> sqlQuery
// // $sqlQuery=$connection->prepare($query);  // sqlQuery
// // $sqlQuery->execute();

// $connection->query($query);  // prepare , execute


/*************************** Select Data from Data Base */
// $query="select * from users";  // string
// $sqlQuery=$connection->prepare($query);  // sqlQuery
// $sqlQuery->execute();
// $result=$sqlQuery->fetch();// one row
// $result=$sqlQuery->fetchAll(PDO::FETCH_ASSOC);  // all data==> associative array
// var_dump($result);

// $result= $connection->query($query)->fetchAll(PDO::FETCH_ASSOC);
// var_dump($result);
?>