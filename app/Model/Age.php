<?php


namespace App\Model;
use Core\Database;

class Age
{
    private $range;
    private $slug;
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public static function getAges()
    {
        $db = new Database();
        $db->select()->from('ages');
        return $db->getAll();
    }

    public function getRange()
    {
        return $this->range;
    }

    public function setRange($range)
    {
        $this->range = $range;
    }

    public function getSlug()
    {
        return $this->slug;
    }

    public function setSlug($slug)
    {
        $this->slug = $slug;
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