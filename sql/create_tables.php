<?php

require_once('connection.php');

// sql to create tables

$tabel_team_climbers = "CREATE TABLE IF NOT EXISTS team_climbers (
                        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                        team_name VARCHAR(255) NULL) 
                        ENGINE=InnoDB CHARACTER SET utf8;";

$tabel_climber = "CREATE TABLE IF NOT EXISTS climber (
                        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                        firstname VARCHAR(255) NOT NULL,
                        address VARCHAR(255) NOT NULL,
                        team_id INT UNSIGNED,
                        FOREIGN KEY (team_id) REFERENCES team_climbers (id)) 
                        ENGINE=InnoDB CHARACTER SET utf8;";

$tabel_mountains = "CREATE TABLE IF NOT EXISTS mountain (
                        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                        name VARCHAR(255) NOT NULL,
                        high INT NOT NULL,
                        country VARCHAR(255) NOT NULL,
                        district VARCHAR(255) NOT NULL) 
                        ENGINE=InnoDB CHARACTER SET utf8;";

$tabel_climbing = "CREATE TABLE IF NOT EXISTS climbing (
                        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                        mountain_id INT UNSIGNED,
                        FOREIGN KEY (mountain_id) REFERENCES mountain (id),
                        team_id INT UNSIGNED,
                        FOREIGN KEY (team_id) REFERENCES team_climbers (id),
                        start_at DATE,
                        end_at DATE) 
                        ENGINE=InnoDB CHARACTER SET utf8;";

// Create all tables 

$conn->exec($tabel_climber);
$conn->exec($tabel_team_climbers);
$conn->exec($tabel_mountains);
$conn->exec($tabel_climbing);
