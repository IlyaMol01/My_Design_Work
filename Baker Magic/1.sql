CREATE TABLE goods (
    id INT PRIMARY KEY,
    name TEXT,
    weight TEXT,
    price INT,
    img TEXT,
    id_catalog INT
);

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    login TEXT,
    password TEXT,
    email TEXT,
    name TEXT,
    surname TEXT,
    number TEXT,
    city TEXT,
);

CREATE TABLE cart (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_users INT NOT NULL,
    id_goods INT NOT NULL,
    quantity INT NOT NULL,
    FOREIGN KEY (id_users) REFERENCES users(id)
);

CREATE TABLE forms (
    id INT AUTO_INCREMENT PRIMARY KEY,
    number TEXT,
    name TEXT,
    email TEXT,
    message TEXT
);