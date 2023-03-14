<?php

namespace App\Models;

use App\Core\Database;

class User
{
    private $db;

    public function __construct(array $conf)
    {
        $this->db = new Database($conf);
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
