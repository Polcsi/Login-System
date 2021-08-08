<?php

require_once("database.php");

class Validate
{
    static function validateLogin($username, $password)
    {
        $database = new Database();
        $database->set();
        $data = $database->get();
        $query = "SELECT username FROM administrators WHERE username = ? AND password = SHA2(?, 256)";
        $ut = $data->prepare($query);
        $ut->bind_param("ss", $username, $password);
        $ut->execute();
        $ut->bind_result($name);
        $ut->fetch();
        if(isset($name))
        {
            $data->close();
            return true;
        } else {
            $data->close();
            return false;
        }
    }
}

?>