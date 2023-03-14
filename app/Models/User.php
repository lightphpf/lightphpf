<?php

namespace App\Models;

use App\Core\Database;

class User
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    /**
     * @return array
     */
    public function getUsers(): array
    {
        $this->db->query("SELECT * FROM users");
        $result = $this->db->resultSet();
        return $result;
    }
}
