CREATE DATABASE db_mai_anh;

USE db_mai_anh;

CREATE TABLE COURSES (
    id INT AUTO_INCREMENT PRIMARY KEY,
    course_name VARCHAR(255) NOT NULL,
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
