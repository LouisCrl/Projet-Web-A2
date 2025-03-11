<?php

$host = "localhost";
$dbname = "nom_de_votre_base";
$username = "votre_utilisateur";
$password = "votre_mot_de_passe";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie";
} catch(PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}

class Company {
    public $id;
    private $name;
    private $location;
    private $description;
    private $email;
    private $password;
    private $phone;
    private $resume;
    private $coverletter;

    public function __construct($name) {
    }

    public function __destruct() {
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getLocation() {
        return $this->location;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getResume() {
        return $this->resume;
    }

    public function getCoverletter() {
        return $this->coverletter;
    }

    public function setName($name) {
        $this->name = $name;
        $sql = "UPDATE Company SET name = :name WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id',$this->id);
        $stmt->bindParam(':name',$name);
        $stmt->execute();
    }

    public function setLocation($location) {
        $this->location = $location;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function setResume($resume) {
        $this->resume = $resume;
    }

    public function setCoverletter($coverletter) {
        $this->coverletter = $coverletter;
    }

    public function deleteCompany() {

    }

    public function getAverageRating() {

    }

    public function getNumberOfOffers() {

    }
}

?>