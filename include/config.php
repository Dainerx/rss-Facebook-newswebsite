<?php

class config
{
    function getConnection()
    {
        $servername="localhost";
        $dbname="pfe";
        $username="root";
        $password="root";
        $conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
        if ($conn)
        {
            echo "";
        }

        return $conn;
    }
}
