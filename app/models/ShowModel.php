<?php
require_once __DIR__ . '/../librairies/DatabaseConnection.php';

class Show
{
    public $title;
    public $performer;
    public $date;
    public $showTypesId;
    public $firstGenresId;
    public $secondGenreId;
    public $duration;
    public $startTime;
    public $id;
    public function __construct()
    {
        $this->date = new DateTime($this->date);
    }
}
class ShowModel
{
    public DatabaseConnection $connection;

    public function getAllShows(): array
    {
        $query = "SELECT * FROM `shows` ORDER BY `title`;";
        $statement = $this->connection->getConnection()->prepare($query);
        $statement->execute();
        $shows = $statement->fetchAll(\PDO::FETCH_CLASS, Show::class);
        return $shows;
    }
}
