<?php
require_once __DIR__ . '/../models/PublicationModel.php';
require_once __DIR__ . '/../config/database.php';

class PublicationController {
    private $publicationCrud;

    public function __construct() {
        $database = new Database();
        $pdo = $database->getConnection();
        $this->publicationCrud = new PublicationCrud($pdo);
    }

    public function createPublication($titulo, $descripcion, $imagen_url) { // ✅ Se agregó imagen_url
        return $this->publicationCrud->insertPublication($titulo, $descripcion, $imagen_url);
    }

    public function listPublications() {
        return $this->publicationCrud->getAllPublications();
    }
}
?>
