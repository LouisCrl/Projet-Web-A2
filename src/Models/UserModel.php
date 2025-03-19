<?php
namespace App\Models;

class UserModel extends Model{
    public function __construct($connection = null) {
        if(is_null($connection)) {
            $this->connection = new FileDatabase('users', ['lastname', 'firstname','mail','password','phone','cv','letter','status']);
        } else {
            $this->connection = $connection;
        }
    }

    public function getAllUsers() {
        return $this->connection->getAllRecords();
    }

    public function getUser($id) {
        return $this->connection.getRecord($id);
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

    public function updateUser($id,$lastname,$firstname,$mail,$password,$phone,$cv,$letter,$status) {
        $record = [
            'lastname' => $lastname,
            'firstname' => $firstname,
            'mail' => $mail,
            'password' => $password,
            'phone' => $phone,
            'cv' => $cv,
            'letter' => $letter,
            'status' => $status
        ];

        return $this->connection->updateRecord($id,$record);
    }

    public function deleteUser($id){
        //TODO
    }
}