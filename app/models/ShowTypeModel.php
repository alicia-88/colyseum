<?php
require_once __DIR__ . '/../librairies/DatabaseConnection.php';

class ShowType
{
    public string $type;
    public int $id;
}
class ShowTypeModel
{
    public DatabaseConnection $connection;

    public function getAllShowTypes(): array
    {
        $query = "SELECT * FROM `colyseum`.`showtypes`;";
        $statement = $this->connection->getConnection()->query($query);
        $showTypes = [];
        while (($row = $statement->fetch())) {
            $showType = new ShowType();
            $showType->type = $row['type'];
            $showType->id = $row['id'];

            $showTypes[] = $showType;
        }
        return $showTypes;
    }
}
