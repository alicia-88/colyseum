<?php
require_once __DIR__ . '/../librairies/DatabaseConnection.php';
require_once __DIR__ . '/../models/ClientModel.php';
class Exo5Controller
{
    public function home()
    {

        $clientsRepository = new ClientModel();
        $clientsRepository->connection = new DatabaseConnection();
        $clients = $clientsRepository->getClientStart("m");

        include __DIR__ . '/../views/pages/exo5.php';
    }
}
