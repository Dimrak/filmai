<?php
namespace App\Model;

use Core\Database;

class Room
{
    private $name;
    private $people;
    private $db;


    public function __construct()
    {
        $this->db = new Database();
    }

    public static function getRooms()
    {
        $db = new Database();
        $db->select()->from('rooms');
        return $db->getAll();
    }

    public function getDb()
    {
        return $this->db;
    }

    public function setDb($db)
    {
        $this->db = $db;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getPeople()
    {
        return $this->people;
    }

    public function setPeople($people)
    {
        $this->people = $people;
    }



}