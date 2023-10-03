<?php
require_once __DIR__ . '/../config/dbconfig.php';
class DatabaseConnection
{
    public ?PDO $database = null;
    public function getConnection(): PDO
    {
        if ($this->database === null) {
            try {
                $this->database = new PDO(ATTR, USER, PASS, OPTS);
            } catch (PDOException $e) {
                var_dump($e);
                throw new PDOException($e->getMessage(), (int)$e->getCode());
            }
        }
        return $this->database;
    }
}
