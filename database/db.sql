-- Drop the database if it exists
DROP DATABASE IF EXISTS artwise;

-- Create the database
CREATE DATABASE IF NOT EXISTS artwise;

-- Use the artwise database
USE artwise;

-- Create the 'user' table
CREATE TABLE `user` (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    address VARCHAR(200) NOT NULL,
    contact VARCHAR(15) NOT NULL,
    password VARCHAR(50),
    PRIMARY KEY (id),
    UNIQUE (email)
);

-- Create the 'shop' table
CREATE TABLE `shop` (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    shop VARCHAR(100) NOT NULL,
    email VARCHAR(50) NOT NULL,
    address VARCHAR(200) NOT NULL,
    contact VARCHAR(15) NOT NULL,
    password VARCHAR(50) NOT NULL,
    profile VARCHAR(50) NOT NULL,
    profession VARCHAR(20) NOT NULL,
    bank VARCHAR(50) NOT NULL,
    acc VARCHAR (50) NOT NULL,
    star varchar (10),
    status VARCHAR(20) NOT NULL,
    PRIMARY KEY (id),
    UNIQUE (email)
);

-- Create the 'admin' table
CREATE TABLE `admin` (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    address VARCHAR(200) NOT NULL,
    contact VARCHAR(15) NOT NULL,
    password VARCHAR(50) NOT NULL,
    CNIC VARCHAR(15),
    PRIMARY KEY (id),
    UNIQUE (email)
);

-- Create the 'product' table
CREATE TABLE `art` (
    id INT NOT NULL AUTO_INCREMENT,
    category VARCHAR(50) NOT NULL,
    title VARCHAR(50) NOT NULL,
    price INT NOT NULL,
    comment VARCHAR(500) NOT NULL,
    size VARCHAR(50) NOT NULL,
    medium VARCHAR(50) NOT NULL,
    img VARCHAR(200) NOT NULL,
    status VARCHAR(50) NOT NULL,
    PRIMARY KEY (id)
);

-- Create the 'sell' table
CREATE TABLE `sell` (
    id INT NOT NULL AUTO_INCREMENT,
    seller_id INT NOT NULL,
    product_id INT NOT NULL,
    PRIMARY KEY (id)
);

-- Create the 'purchase' table
CREATE TABLE `purchase` (
    id INT NOT NULL AUTO_INCREMENT,
    purchaser_id INT NOT NULL,
    seller_id INT NOT NULL,
    product_id INT NOT NULL,
    PRIMARY KEY (id)
);

-- Create the 'cart' table
CREATE TABLE `cart` (
    id INT NOT NULL AUTO_INCREMENT,
    user_id INT NOT NULL,
    product_id INT NOT NULL,
    PRIMARY KEY (id)
);

-- Create the 'message' table
CREATE TABLE `message` (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    subject VARCHAR(500),
    message VARCHAR(1500) NOT NULL,
    status VARCHAR(20) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE `message` (
    id INT NOT NULL AUTO_INCREMENT,
    text VARCHAR(5000) NOT NULL,
    PRIMARY KEY (id)
);
