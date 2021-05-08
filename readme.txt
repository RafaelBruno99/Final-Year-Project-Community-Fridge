This application was developed locally using XAMPP application to simulate the server and the database.

To use this application it will be required the use of XAMPP.
Download the code from GitHub at this web address:
 - https://github.com/RafaelBruno99/Final-Year-Project-Community-Fridge

 Steps:
  Download the zip file.
  Access the XAMPP file location.
  Extrat the zip file to the folder name HTDOCS.
  Start XAMPP and select Apache and SQL.

  Before using the application, you are required to prepare the database environment.
  Search localhost on your prefered web browser.
  Select PhpMyAdmin.
  Select SQL and copy and past the following queries. To run the queries press "Go".

  CREATE DATABASE project_database;

CREATE TABLE orders
    (
    id int NOT NULL AUTO_INCREMENT,
    first_name varchar(255) NOT NULL,
    last_name varchar(255) NOT NULL,
    phonenumber varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    packages varchar(255) NOT NULL,
    observation varchar(1000) NOT NULL,
    PRIMARY KEY (id));

CREATE TABLE stock
    (
    id int NOT NULL AUTO_INCREMENT,
    pname varchar(255) NOT NULL,
    quantity varchar(255) NOT NULL,
    image varchar(255) NOT NULL,
    packages varchar(255) NOT NULL,
    PRIMARY KEY (id));

CREATE TABLE users
    (
    userID int NOT NULL AUTO_INCREMENT,
    FirstName varchar(255) NOT NULL,
    LastName varchar(255) NOT NULL,
    Email varchar(255) NOT NULL,
    PasswordHash varchar(255) NOT NULL,
    userType varchar(255) NOT NULL,
    PRIMARY KEY (userID));

NOTE:
    Before adding new products to the stock table, add the image to the Images folder. Make sure the image is saved
    as a .JPG file. 

Author: Rafael Bruno.

Final Year Project for course Web and Computing Development at Bucks New University.


