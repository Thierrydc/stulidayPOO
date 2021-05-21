<?php

namespace App\src\controller;

use App\src\DAO\LocationDAO;

class FrontController
{
    private $locationDAO;

    public function __construct()
    {
        $this->locationDAO = new LocationDAO();
    }

    public function home()
    {
        $locations = $this->locationDAO->getAll();

        require '../templates/locations.php';
    }
}
