-- Active: 1660628081125@@127.0.0.1@3306@Student_Information_System
CREATE Table Users(
        User_ID INT AUTO_INCREMENT PRIMARY KEY,
        Username VARCHAR(20) NOT NULL,
        Password VARCHAR(30) NOT NULL,
        E_Mail VARCHAR(30) NOT NULL
    );
