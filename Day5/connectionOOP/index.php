<?php


class DB
{
    protected $dbType, $dbName, $host, $connection, $userName, $userPassword;
    function __construct($dbType, $dbName, $host, $userName, $userPassword)
    {
        $this->dbType = $dbType;
        $this->dbName = $dbName;
        $this->host = $host;
        $this->userName = $userName;
        $this->userPassword = $userPassword;
        $this->connection = new PDO("$this->dbType:host=$this->host;dbname=$this->dbName", $this->userName, $this->userPassword);
    }


    function index($table)  // select all data from table users
    {
        $query = "select * from $table";  // string  ==> sql
        $sqlQuery = $this->connection->prepare($query);
        $sqlQuery->execute();
        $result = $sqlQuery->fetchAll(PDO::FETCH_ASSOC);
        if ($result) {
            return $result;
        } else {
            echo "Data Empty";
        }
    }

    function show($table, $id)
    {
       try {
        $query = "select * from $table where id=$id";
        $sqlQuery = $this->connection->prepare($query);
        $sqlQuery->execute();
        return $sqlQuery->fetch(PDO::FETCH_ASSOC);
       } catch (Error $e) {
        //throw $th;
        // return $e;
        return null;
       }
    }
    function delete($table, $id)
    {
       try {
        $query = "delete from $table where id=$id";
        $sqlQuery = $this->connection->prepare($query);
        $sqlQuery->execute();
        return $sqlQuery->fetch(PDO::FETCH_ASSOC);
       } catch (Error $e) {
        //throw $th;
        // return $e;
        return null;
       }
    }
}


$database = new DB(dbType: "mysql", dbName: "iti_os_9m_2025", userName: "root", userPassword: "", host: "localhost");
// var_dump($database);
// $database->index("users");
