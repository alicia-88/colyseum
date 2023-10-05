<?php
require_once __DIR__ . '/../librairies/DatabaseConnection.php';
require_once __DIR__ . '/../models/ClientModel.php';
class Exo3Controller
{
    public function home()
    {

        $clientsRepository = new ClientModel();
        $clientsRepository->connection = new DatabaseConnection();
        $clients = $clientsRepository->getClient(0, 20);

        include __DIR__ . '/../views/pages/exo3.php';
    }
}
