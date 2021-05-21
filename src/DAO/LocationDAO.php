<?php

namespace App\src\DAO;

use App\src\models\Location;

class LocationDAO extends DAO
{
    //! PARTIE GESTION DES LOCATIONS DANS LA BDD
    public function buildLocation($row)
    {
        return new Location($row);
    }

    public function getAll()
    {
        try {
            $sql = 'SELECT * FROM locations ORDER BY id DESC';
            $result = $this->createQuery($sql)->fetchAll(\PDO::FETCH_ASSOC);

            foreach ($result as $row) {
                // $row['createdAt'] = new \DateTime($row['created_at']);
                $locations[] = $this->buildLocation($row);
            }

            return $locations;
        } catch (\PDOException $error) {
            echo $error->getMessage();
        }
    }
}
