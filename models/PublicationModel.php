<?php
require_once __DIR__ . '/../config/database.php';

class PublicationCrud {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function insertPublication($titulo, $descripcion, $imagen_url) { // ✅ Se agregó imagen_url
        $stmt = $this->pdo->prepare("INSERT INTO publicaciones (titulo, descripcion, imagen) VALUES (?, ?, ?)");
        return $stmt->execute([$titulo, $descripcion, $imagen_url]);
    }

    public function getAllPublications() {
        $stmt = $this->pdo->query("SELECT * FROM publicaciones ORDER BY fecha DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
