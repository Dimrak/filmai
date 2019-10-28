<?php

namespace App\Model;

use Core\Database;

class Film
{
    private $id;
    private $title;
    private $active;
    private $room;
    private $age;
    private $hour;
    private $db;


    public function setHour($hour)
    {
        $this->hour = $hour;
    }

    public function __construct()
    {
        $this->db = new Database();
    }

    public function create()
    {
        $columns = 'title, active, room, age, hour';
        $values = "'$this->title', $this->active, $this->room, $this->age, $this->hour";
        $this->db->insert('films', $columns, $values);
        $this->db->execute();
    }

    public static function getFilms()
    {
        $db = new Database();
        $db->select()->from('films');
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

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getActive()
    {
        return $this->active;
    }

    public function setActive($active)
    {
        $this->active = $active;
    }

    public function getRoom()
    {
        return $this->room;
    }

    public function setRoom($room)
    {
        $this->room = $room;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getHour()
    {
        return $this->hour;
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