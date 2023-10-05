<?php
require_once __DIR__ . '/../librairies/DatabaseConnection.php';
require_once __DIR__ . '/../models/ShowTypeModel.php';
class Exo2Controller
{
    public function home()
    {
        $showTypesRepository = new ShowTypeModel();
        $showTypesRepository->connection = new DatabaseConnection();
        $showTypes = $showTypesRepository->getAllShowTypes();
        include __DIR__ . '/../views/pages/exo2.php';
    }
}
