<?php
namespace App\Models;
require_once 'src/Models/Model.php';

class OfferModel extends Model {
    public function __construct($connection = null) {
        if (is_null($connection)) {
            $this->connection = new FileDatabase('OFFERS', ['ID', 'TITLE', 'RELEASE_DATE', 'CITY', 'GRADE', 'BEGIN_DATE', 'DURATION', 'RENUMBER', 'DESCRIPTION', 'ID_COMPANY']);
        } else {
            $this->connection = $connection;
        }
    }

    public function getAllOffers() {
        return $this->connection->getAllRecords();
    }

    public function getOffer($id) {
        return $this->connection->getRecord($id);
    }

    public function createOffer($title, $release_date, $city, $grade, $begin_date, $duration, $renumber, $description, $id_company) {
        $record = [
            'TITLE' => $title,
            'RELEASE_DATE' => $release_date,
            'CITY' => $city,
            'GRADE' => $grade,
            'BEGIN_DATE' => $begin_date,
            'DURATION' => $duration,
            'RENUMBER' => $renumber,
            'DESCRIPTION' => $description,
            'ID_COMPANY' => $id_company
        ];

        return $this->connection->insertRecord($record);
    }

    public function updateOffer($id, $title, $release_date, $city, $grade, $begin_date, $duration, $renumber, $description, $id_company) {
        $record = [
            'TITLE' => $title,
            'RELEASE_DATE' => $release_date,
            'CITY' => $city,
            'GRADE' => $grade,
            'BEGIN_DATE' => $begin_date,
            'DURATION' => $duration,
            'RENUMBER' => $renumber,
            'DESCRIPTION' => $description,
            'ID_COMPANY' => $id_company
        ];

        return $this->connection->updateRecord($id, $record);
    }

    public function deleteOffer($id) {
        return $this->connection->deleteRecord($id);
    }
}
