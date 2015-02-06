<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of connection
 *
 * @author hermanvancauwelaert
 */
class connection {

    static function connect() {
        $a=config::getConfig();
        $servername = "localhost";
        $username = $a['db']['username'];
        $password = $a['db']['password'];

// Create connection
        $conn = new mysqli($servername, $username, $password);

// Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";
        return $conn;
    }

}
