CREATE DATABASE sports_registration;
USE sports_registration;

CREATE TABLE admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    college VARCHAR(100) NOT NULL,
    age INT NOT NULL,
    contact VARCHAR(15) NOT NULL,
    email VARCHAR(100) NOT NULL,
    sport VARCHAR(50) NOT NULL,
    category ENUM('Boy', 'Girl') NOT NULL,
    payment_screenshot VARCHAR(255) NOT NULL,
    id_card VARCHAR(255) NOT NULL,
    status ENUM('Pending', 'Verified', 'Rejected') DEFAULT 'Pending'
);
