<?php

namespace Controllers;

Use Controllers;
use Models\Users;

class UsersController extends Users {

    public function controllerMessage(){
        $getModelMessage = $this->userModelMessage();
        echo  $getModelMessage . "Controller-> ";
    }

    /* === INSERT DATA INTO DATABASE === */
    public function createUser( $name , $age){
        $this->insertUser( $name , $age);
    }

    /* === INSERT DATA INTO DATABASE === */
    public function editUser( $id , $name, $age){
        $this->updateUser( $id , $name, $age);
    }
    
}


// if (isset( $_POST['addUser'])) {

//     $name = $_POST['name'];
//     $obj = new UsersController();
//     $obj->createUser($name);
// }
// else{
//     echo "false";
// }



