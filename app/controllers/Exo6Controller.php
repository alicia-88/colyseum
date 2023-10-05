<?php
require_once __DIR__ . '/../librairies/DatabaseConnection.php';
require_once __DIR__ . '/../models/ShowModel.php';
class Exo6Controller
{
    public function home()
    {

        $showsRepository = new ShowModel();
        $showsRepository->connection = new DatabaseConnection();
        $shows = $showsRepository->getAllShows();

        include __DIR__ . '/../views/pages/exo6.php';
    }
}
