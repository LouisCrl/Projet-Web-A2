<?php
namespace App\Models;

class OfferModel extends Model {
    public function __construct($connection = null) {
        if (is_null($connection)) {
            $this->connection = new FileDatabase('offers', ['name', 'location', 'duration', 'studylevel', 'description', 'date', 'remuneration']);
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

    public function createOffer($name, $location, $duration, $studylevel, $description, $date, $remuneration) {
        $record = [
            'name' => $name,
            'location' => $location,
            'duration' => $duration,
            'studylevel' => $studylevel,
            'description' => $description,
            'date' => $date,
            'remuneration' => $remuneration
        ];

        return $this->connection->insertRecord($record);
    }

    public function updateOffer($id, $name, $location, $duration, $studylevel, $description, $date, $remuneration) {
        $record = [
            'name' => $name,
            'location' => $location,
            'duration' => $duration,
            'studylevel' => $studylevel,
            'description' => $description,
            'date' => $date,
            'remuneration' => $remuneration
        ];

        return $this->connection->updateRecord($id, $record);
    }

    public function deleteOffer($id) {
        return $this->connection->deleteRecord($id);
    }
}
