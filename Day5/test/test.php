<?php 
require("../connection.php");

if(isset($_POST['submit'])){
    $id = $_POST['id']; 

    $query = "select * from users where id =?"; // select * from users where id =?1or1=1
    $query = "select * from users where id =:id"; // select * from users where id =:id1or1=1
    $sqlQuery = $connection->prepare( $query);
    $sqlQuery->bindParam("id",$id);
    $sqlQuery->execute([$id]);
    // $sqlQuery->execute([... $sqlQuery ,$id]);
    $result = $sqlQuery->fetchAll(PDO::FETCH_ASSOC); // return all records
    var_dump($result);

}
/**
 * ;
 * value =value
 * 
 * =====================
 * bind params
 * ??
 */





?>