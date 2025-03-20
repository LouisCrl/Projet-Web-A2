<?php
namespace App\Models;
require_once 'src/Models/Model.php';


class UserModel extends Model{
    public function __construct($connection = null) {
        if(is_null($connection)) {
            $this->connection = new FileDatabase('USERS', ['LASTNAME', 'FIRSTNAME','PASSWORD','MAIL','ID_ROLE']);
        } else {
            $this->connection = $connection;
        }
    }

    public function getAllUsers() {
        return $this->connection->getAllRecords();
    }

    public function getUser($id) {
        return $this->connection->getRecord($id);
    }

    public function addUser($mail,$password) {
        $record = [
            'lastname' => '',
            'firstname' => '',
            'mail' => $mail,
            'password' => $password,
            'phone' => '',
            'cv' => '',
            'letter' => '',
            'status' => ''
        ];

        return $this->connection->insertRecord($record);
    }

    public function updateUser($id,$lastname,$firstname,$password,$mail,$status) {
        $record = [
            'lastname' => $lastname,
            'firstname' => $firstname,
            'password' => $password,
            'mail' => $mail,
            'status' => $status
        ];

        return $this->connection->updateRecord($id,$record);
    }

    public function deleteUser($id){
        //TODO
    }
}