<?php
require_once __DIR__ . '/../librairies/DatabaseConnection.php';
require_once __DIR__ . '/../models/ClientModel.php';
class Exo4Controller
{
    public function home()
    {

        $clientsRepository = new ClientModel();
        $clientsRepository->connection = new DatabaseConnection();
        $clients = $clientsRepository->getClientCard("Fidélité");

        include __DIR__ . '/../views/pages/exo4.php';
    }
}
