<?php
//CONSTANTES
define('DB_NAME_MYSQL', 'sg_software');
define('DB_HOST_MYSQL', 'localhost');
define('DB_USER_MYSQL', 'root');
define('DB_PASSWORD_MYSQL', '');

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password_hash VARCHAR(255) NOT NULL,
    temrs boolean NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);