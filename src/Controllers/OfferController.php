<?php
namespace App\Controllers;

use App\Models\OfferModel;

class OfferController extends Controller {
    
    public function __construct($templateEngine) {
        $this->model = new OfferModel();
        $this->templateEngine = $templateEngine;
    }

    public function addOffer() {
        if (!isset($_POST["name"]) || !isset($_POST["location"]) || !isset($_POST["duration"]) ||
            !isset($_POST["studylevel"]) || !isset($_POST["description"]) || !isset($_POST["date"]) || 
            !isset($_POST["remuneration"])) {
            header('Location: /');
            exit();
        }

        $name = $_POST["name"];
        $location = $_POST["location"];
        $duration = $_POST["duration"];
        $studylevel = $_POST["studylevel"];
        $description = $_POST["description"];
        $date = $_POST["date"];
        $remuneration = $_POST["remuneration"];

        $this->model->createOffer($name, $location, $duration, $studylevel, $description, $date, $remuneration);
        header('Location: /');
        exit();
    }

    public function updateOffer() {
        if (!isset($_POST["id"]) || !isset($_POST["name"]) || !isset($_POST["location"]) || 
            !isset($_POST["duration"]) || !isset($_POST["studylevel"]) || !isset($_POST["description"]) || 
            !isset($_POST["date"]) || !isset($_POST["remuneration"])) {
            header('Location: /');
            exit();
        }

        $id = $_POST["id"];
        $name = $_POST["name"];
        $location = $_POST["location"];
        $duration = $_POST["duration"];
        $studylevel = $_POST["studylevel"];
        $description = $_POST["description"];
        $date = $_POST["date"];
        $remuneration = $_POST["remuneration"];

        $this->model->updateOffer($id, $name, $location, $duration, $studylevel, $description, $date, $remuneration);
        header('Location: /');
        exit();
    }

    public function deleteOffer($id) {
        $this->model->deleteOffer($id);
        header('Location: /');
        exit();
    }
}
