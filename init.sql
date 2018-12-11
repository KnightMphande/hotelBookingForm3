
CREATE DATABASE hotelbookingform;

use hotelbookingform;

 CREATE TABLE users (
 id INT AUTO_INCREMENT PRIMARY KEY, 
 name VARCHAR(300) NOT NULL, 
 surname VARCHAR(300) NOT NULL, 
 created_at TIMESTAMP default CURRENT_TIMESTAMP, 
 updated_at TIMESTAMP default CURRENT_TIMESTAMP
 );


INSERT INTO users (name, surname)
VALUES ('Knight', 'Mphande');