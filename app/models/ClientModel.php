<?php
require_once __DIR__ . '/../librairies/DatabaseConnection.php';

class Client
{
    public string $lastname;
    public string $firstname;
    public int $card;
    public ?int $cardNumber;
    public int $id;
}
class ClientModel
{
    public DatabaseConnection $connection;

    public function getAllClients(): array
    {
        $query = "SELECT * FROM `colyseum`.`clients`;";
        $statement = $this->connection->getConnection()->query($query);
        $clients = [];
        while (($row = $statement->fetch())) {
            $client = new Client();
            $client->lastname = $row['lastName'];
            $client->firstname = $row['firstName'];
            $client->card = $row['card'];
            $client->cardNumber = $row['cardNumber'];
            $client->id = $row['id'];

            $clients[] = $client;
        }
        return $clients;
    }
}
