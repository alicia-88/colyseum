<?php
require_once __DIR__ . '/../librairies/DatabaseConnection.php';

class Client
{
    public string $lastName;
    public string $firstName;
    public $card;
    public $cardNumber;
    public int $id;
}
class ClientModel
{
    public DatabaseConnection $connection;

    public function getAllClients(): array
    {
        $query = "SELECT * FROM `colyseum`.`clients`;";
        $statement = $this->connection->getConnection()->query($query);
        $clients = $statement->fetchAll(PDO::FETCH_CLASS, "Client");
        return $clients;
    }
    public function getClient(int $offset, int $limit): array
    {
        $offset = $offset;
        $limit = $limit;
        $query =  "SELECT * FROM `clients` LIMIT :limit;";
        $statement = $this->connection->getConnection()->prepare($query);
        $statement->bindParam(':limit', $limit);
        $statement->execute();
        $clients = $statement->fetchAll(PDO::FETCH_CLASS, "Client");
        return $clients;
    }
    public function getClientCard(string $type): array
    {
        $type = $type;
        $query =  "SELECT clients.* 
        FROM clients JOIN cards 
        ON clients.cardNumber = cards.cardNumber 
        JOIN cardtypes 
        ON cards.cardTypesId = cardtypes.id 
        WHERE cardtypes.type = :type;";
        $statement = $this->connection->getConnection()->prepare($query);
        $statement->bindParam(':type', $type);
        $statement->execute();
        $clients = $statement->fetchAll(PDO::FETCH_CLASS, "Client");

        return $clients;
    }
    public function getClientStart(string $start): array
    {
        $start = $start;
        $query =  "SELECT lastname, firstname
        FROM clients
        WHERE lastname LIKE CONCAT(:start, '%')
        ORDER BY lastname;";
        $statement = $this->connection->getConnection()->prepare($query);
        $statement->bindParam(':start', $start);
        $statement->execute();
        $clients = $statement->fetchAll(PDO::FETCH_CLASS, "Client");

        return $clients;
    }
    public function getClients(): array
    {
        $query = "SELECT 
        c.lastName, 
        c.firstName, 
        c.birthDate, 
        CASE 
            WHEN c.card IS NOT NULL && ca.cardTypesId = 1 THEN 'oui'
            ELSE 'non'
        END AS 'card',
        CASE
            WHEN c.card IS NOT NULL && ca.cardTypesId = 1  THEN c.cardNumber
            ELSE ''
        END AS 'cardNumber'
    FROM 
        clients c
    LEFT JOIN 
        cards ca ON c.cardNumber = ca.cardNumber;";
        $statement = $this->connection->getConnection()->prepare($query);
        $statement->execute();
        $clients = $statement->fetchAll(PDO::FETCH_CLASS, "Client");
        return $clients;
    }
}
