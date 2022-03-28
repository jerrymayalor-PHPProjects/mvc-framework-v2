<?php

namespace Models;

use Database\Dbh as DatabaseConnect;
use Models;
use PDO;

class Users extends DatabaseConnect {

    public $name;
    public $age;

    // public function __construct( String $valName, int $valAge )
    // {
    //     $this->name = $valName;
    //     $this->age = $valAge;
    // }

    public function userModelMessage(){
       $getDbMessage = $this->databaseMessage(); 
       echo $getDbMessage . "Model-> ";
    }

    /* === GET ALL DATA FROM THE DATABASE === */
    public function getAllUsers(){
        $sql = "SELECT * FROM `users` ORDER BY id DESC";
        $result = $this->connect()->query( $sql );
        if ($result->rowCount() > 0){
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $row;
            }
            return $data;
        }
        else{
            return $data = 0;
        }
        
    }

    /* === GET A SINGLE DATA FROM THE DATABASE === */
    public function getUser( $name ){
        $sql = "SELECT * FROM users WHERE name = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute( [$name] );

        $result = $stmt->fetchAll();
        return $result;
    }

    /* === INSERT DATA INTO DATABASE === */
    public function insertUser( $name, $age ){
        $sql = "INSERT INTO users( name , age ) VALUES ( ? , ? ) ";
        $stmt = $this->connect()->prepare( $sql );
        $stmt->execute( [$name, $age] );
        header("location: ../");
        $this->connect()->close;
    }

    /* === UPDATE DATA FROM DATABASE === */
    public function updateUser( $id , $name ){
        $sql = "UPDATE `users` SET `name` = ? WHERE `users`.`id` = ? ";
        $stmt = $this->connect()->prepare( $sql );
        // $stmt->execute( [$id], [$name] );
    }

    
}


