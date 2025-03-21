<?php
namespace App\Model;

require_once 'FileDatabase.php';
require_once 'Database.php';
use App\Model\FileDatabase;

class CompanyModel extends Model{

    public function __construct($db){
        if (is_null($db)){
            $this->connection = new FileDatabase('../../.csv/TestCOMPANIES', ['Name', 'Description', 'Mail', 'Phone']);
        }else{
            $this->connection = new FileDatabase($db, ['Name', 'Description', 'Mail', 'Phone']);
        }
    }

    public function getAllCompanies() {
        return $this->connection->getAllRecords();
    }

    public function getCompany($id) {
        return $this->connection->getRecord($id);
    }

    public function changeCompanyName($id, $name){
        $comp = $this->getCompany($id);
        $comp['NAME'] = $name;
        $this->connection->updateRecord($id, $comp);
    }

    public function changeCompanyDescription($id, $descript){
        $comp = $this->getCompany($id);
        $comp['DESCRIPTION'] = $descript;
        $this->connection->updateRecord($id, $comp);
    }

    public function changeCompanyMail($id, $mail){
        $comp = $this->getCompany($id);
        $comp['MAIL'] = $mail;
        $this->connection->updateRecord($id, $comp);
    }

    public function changeCompanyPhone($id, $phone){
        $comp = $this->getCompany($id);
        $comp['PHONE'] = $phone;
        $this->connection->updateRecord($id, $comp);
    }

    public function addTask($task) {
        // Create a new record with the task and the status 'todo' (by default)
        $record = ['task' => $task, 'status' => self::TODO_STATUS];

        // TODO: Call the insertRecord method of the connection property and return the result
        $result = $this->connection->insertRecord($record);

        return $result;
    }
    public function createCompany($name){
        $comp = [
            'NAME' => $task,
            'DESCRIPTION' => '',
            'MAIL' => '',
            'PHONE' => '',
        ];
        return $this->connection->insertRecord($comp);
    }

    public function deleteCompany($id){
    }
}