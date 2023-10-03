<?php
require_once __DIR__ . '/../librairies/DatabaseConnection.php';
require_once __DIR__ . '/../models/ClientModel.php';
class Exo1Controller
{
    public function home()
    {

        $clientsRepository = new ClientModel();
        $clientsRepository->connection = new DatabaseConnection();
        $clients = $clientsRepository->getAllClients();

        include __DIR__ . '/../views/pages/exo1.php';
    }
}
