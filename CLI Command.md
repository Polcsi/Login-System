cd /xampp/mysql/bin

mysql -u root -p

CREATE DATABASE loginsystem;


use loginsystem;

CREATE USER 'datamanager'@'localhost' IDENTIFIED BY 'password';


GRANT SELECT, UPDATE, INSERT, DELETE ON loginsystem.* TO 'datamanager'@'localhost';

CREATE TABLE administrators (
    -> username VARCHAR(255) primary key,
    -> password VARCHAR(255));

INSERT INTO administrators VALUES ('polcsi', SHA2('password',256));
