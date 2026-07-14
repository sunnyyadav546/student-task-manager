-- Student Task Manager Database
-- sunnyraj870931@gmain.com

CREATE DATABASE IF NOT EXISTS student_task_db;

USE student_task_db;

CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    due_date DATE NOT NULL,
    status ENUM('Pending','Completed') DEFAULT 'Pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);