<?php
namespace App\Model;

use Core\Database;


class Hour
{
    private $id;
    private $hour;
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public static function getHours()
    {
        $db = new Database();
        $db->select()->from('hours');
        return $db->getAll();
    }

    /**
     * Getters and setters
     */
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getHour()
    {
        return $this->hour;
    }

    public function setHour($hour)
    {
        $this->hour = $hour;
    }

    public function getDb()
    {
        return $this->db;
    }

    public function setDb($db)
    {
        $this->db = $db;
    }

}