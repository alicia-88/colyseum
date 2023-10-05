<?php
require_once __DIR__ . '/../librairies/DatabaseConnection.php';
require_once __DIR__ . '/../models/ClientModel.php';
class Exo7Controller
{
    public function home()
    {

        $clientsRepository = new ClientModel();
        $clientsRepository->connection = new DatabaseConnection();
        $clients = $clientsRepository->getClients();

        include __DIR__ . '/../views/pages/exo7.php';
    }
}
