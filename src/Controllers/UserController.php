<?php
namespace App\Controllers;

use App\Models\UserModel;

class UserController extends Controller{

    public function __construct($templateEngine) {
        $this->model = new TaskModel();
        $this->templateEngine = $templateEngine;
    }

    public function addUser(){
        if(!isset($_POST["mail"]) || !isset($_POST["password"])){
            header('Location: /');
            exit();
        }
        $mail=$_POST["mail"];
        $password=$_POST["password"];
        $this->model->addUser($mail,$password);
        header('Location: /');
        exit();
    }

    public function updateUser($id,$lastname, $firstname, $mail, $password, $phone, $cv, $letter, $status){
        $id=$_POST["id"];
        $lastname=$_POST["lastname"];
        $firstname=$_POST["firstname"];
        $mail=$_POST["mail"];
        $password=$_POST["password"];
        $phone=$_POST["phone"];
        $cv=$_POST["cv"];
        $letter=$_POST["letter"];
        $status=$_POST["status"];
        $this->model->updateUser($id, $lastname, $firstname, $mail, $password, $phone, $cv, $letter, $status);
        header('Location: /');
        exit();
    }

    public function deleteUser($id){
        //TODO
    }
}