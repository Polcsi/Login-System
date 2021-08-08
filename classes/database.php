<?php

class Database
{
    private $mysqli;

    public function set()
    {
        $this->mysqli = new mysqli("localhost", "datamanager", "password", "loginsystem");
    }

    public function get()
    {
        return $this->mysqli;
    }
}

?>