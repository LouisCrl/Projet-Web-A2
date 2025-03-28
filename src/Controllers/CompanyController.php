<?php
namespace App\Controllers;

use App\Models\CompanyModel;

class CompanyController extends Controller{

    public function __construct($templateEngine){
        $this->model = new CompanyModel();
        $this->templateEngine = $templateEngine;
    }

    public function updateCompany(){
        $id = $_POST['ID']
        $name = $_POST['NAME'];
        $descript = $_POST['DESCRIPTION'];
        $mail = $_POST['MAIL'];
        $phone = $_POST['PHONE'];

        $this->model->changeCompanyName($id, $name);
        $this->model->changeCompanyDescription($id, $descript);
        $this->model->changeCompanyMail($id, $mail);
        $this->model->changeCompanyPhone($id, $phone);
        header('Location: /');
        exit;
    }

    public function addCompany(){
        $name = $_POST['NAME'];
        $descript = $_POST['DESCRIPTION'];
        $mail = $_POST['MAIL'];
        $phone = $_POST['PHONE'];

        $this->model->createCompany($name);
        $id = count(getAllCompanies())+1;
        $this->model->changeCompanyDescription($id, $descript);
        $this->model->changeCompanyMail($id, $mail);
        $this->model->changeCompanyPhone($id, $phone);
        header('Location: /');
        exit;
    }

    public function deleteCompany(){
        $id = $_POST['ID'];
        $this->model->deleteCampany($id);
        header('Location: /');
        exit;
    }
}