<?php  
// esta database tiene proposito de estructura para adaptar en si a pagina ya q somos usuario y este tiene : email y pass.
// estructura q se puede seguir y entender esta en la carpeta php: esta login.. etc.
// proposito es adaptar code a lo q se utiliza con el fin de q esta estrcutra solo pida los cambios caundo se vaya a editar.
// se creara una database en phpmyadmin con esto para ejemplo y igual estara la tabla usuario original y principal de proyecto.


class Database {
    private $host = "localhost";
    private $db_name = "proyecto_db";
    private $username = "root";
    private $password = "";
    private $conn;

    public function getConnection() {
        if ($this->conn === null) {
            try {
                $this->conn = new PDO(
                    "mysql:host={$this->host};dbname={$this->db_name};charset=utf8",
                    $this->username,
                    $this->password
                );
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $exception) {
                die("Error de conexión: " . $exception->getMessage());
            }
        }
        return $this->conn;
    }

    // Agrega este método si en otras partes del código usas `Database::connect()`
    public static function connect() {
        $database = new self();
        return $database->getConnection();
    }
}

?>
