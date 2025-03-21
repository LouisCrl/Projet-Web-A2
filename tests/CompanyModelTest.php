<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__.'/../src/Models/Model.php';
require_once __DIR__.'/../src/Models/CompanyModel.php';
use App\Models\CompanyModel;
use App\Models\Model;

class CompanyModelTest extends TestCase {
    private $CompModel;
    private $csvFile = __DIR__.'/../.csv/TestCOMPANIES.csv';
    private $backup;

    protected function setUp(): void {
        $this->CompModel = new CompanyModel('../../.csv/TestCOMPANIES');
        
        $this->backup = $this->csvFile.'.bak';
        if (!copy($this->csvFile, $this->backup)) {
            throw new Exception("Erreur lors de la sauvegarde du fichier.");
        }
    }

    protected function tearDown(): void {
        if (!copy($this->backup, $this->csvFile)) {
            throw new Exception("Erreur lors de la restauration du fichier.");
        }
    }

    public function testGetAllCompanies() {
        $this->assertEquals(5, count($this->CompModel->getAllCompanies()), 'Number of Companies not the expected one.');
    }

    public function testGetCompany() {
        $Comp = [
            'ID' => 5, 
            'NAME' => 'Marks, Malone and Schroeder',
            'DESCRIPTION' => 'Or that outside this act man moment.',
            'MAIL' => 'crawfordlisa@ramirez-wilson.com',
            'PHONE' => '0654531981'
        ];
        $this->assertEquals($Comp, $this->CompModel->getCompany(5), 'Doesn\'t return the right company.');
    }

    public function testChangeCompanyName(){
        $oldName = $this->CompModel->getCompany(2)['NAME'];
        $this->CompModel->changeCompanyName(2, 'CapGemini');
        $this->assertEquals('CapGemini', $this->CompModel->getCompany(2)['NAME'], 'Doesn\'t return the right name.');
        $this->assertNotEquals($oldName, $this->CompModel->getCompany(2)['NAME'], 'Company name should have changed.');
    }

    public function testChangeCompanyDescription(){
        $oldDescript = $this->CompModel->getCompany(2)['DESCRIPTION'];
        $this->CompModel->changeCompanyDescription(2, 'New Description');
        $this->assertEquals('New Description', $this->CompModel->getCompany(2)['DESCRIPTION'], 'Doesn\'t return the right description.');
        $this->assertNotEquals($oldDescript, $this->CompModel->getCompany(2)['DESCRIPTION'], 'Company description should have changed.');
    }

    public function testChangeCompanyMail(){
        $oldMail = $this->CompModel->getCompany(2)['MAIL'];
        $this->CompModel->changeCompanyMail(2, 'NewMail@test.com');
        $this->assertEquals('NewMail@test.com', $this->CompModel->getCompany(2)['MAIL'], 'Doesn\'t return the right mail.');
        $this->assertNotEquals($oldMail, $this->CompModel->getCompany(2)['MAIL'], 'Company mail should have changed.');
    }

    public function testChangeCompanyPhone(){
        $oldPhone = $this->CompModel->getCompany(2)['PHONE'];
        $this->CompModel->changeCompanyPhone(2, '0123456789');
        $this->assertEquals('0123456789', $this->CompModel->getCompany(2)['PHONE'], 'Doesn\'t return the right Phone.');
        $this->assertNotEquals($oldPhone, $this->CompModel->getCompany(2)['PHONE'], 'Company phone should have changed.');
    }

    public function testCreateCompany(){
        $this->CompModel->createCompany('Name');
        $this->assertEquals(6, count($this->CompModel->getAllCompanies()), 'Number of Companies not the expected one.');
        
        $Comp = [
            'ID' => 6,
            'NAME' => 'Name',
            'DESCRIPTION' => '',
            'MAIL' => '',
            'PHONE' => ''
        ];
        $this->assertEquals($Comp, $this->CompModel->getCompany(6), 'Doesn\'t return the right company.');
    }

    /*public function testDeleteCompany(){
        $this->CompModel->deleteCompany(5);
        $this->assertEquals(4, count($this->CompModel->getAllCompanies()), 'Number of Companies not the expected one.');
        
        $this->assertNull($this->CompModel->getCompany(5), 'The company hasn\'t been deleted.');
    }*/
}