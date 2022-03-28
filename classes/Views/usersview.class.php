<?php

namespace Views;

use Models\Users;
Use Views;


class UsersView extends Users{
    // public function viewMessage() {
    //     $getModelMessage = $this->userModelMessage();
    //     echo  $getModelMessage . "Views-> ";
    // }

    /* === SHOW A SINGLE DATA FROM THE DATABASE === */
    public function showSingleUser( $name ){
        $results = $this->getUser( $name );
        echo $results[0]['id'] . " : " . $results[0]['name']. " : " . $results[0]['age'];
    }

    /* === SHOW ALL DATA FROM THE DATABASE === */
    public function showAllUsers(){
        $datas = $this->getAllUsers();
        include 'usersTableView.php';
    }
}
