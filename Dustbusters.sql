DROP TABLE IF EXISTS db_orderitems;
DROP TABLE IF EXISTS db_order;
DROP TABLE IF EXISTS db_product;
DROP TABLE IF EXISTS db_customer;


CREATE TABLE db_customer (
    email VARCHAR(255) PRIMARY KEY, 
    fname VARCHAR(100), 
    sname VARCHAR(100), 
    postcode VARCHAR(7), 
    pass VARCHAR(41)
);

CREATE TABLE db_product (
    pid INT AUTO_INCREMENT PRIMARY KEY , 
    name VARCHAR(100), 
    description TEXT,
    imagepath VARCHAR(100),
    price DECIMAL(10, 2)
);

CREATE TABLE db_order (
    oid INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255),
    FOREIGN KEY (email) REFERENCES db_customer(email)
);

   CREATE TABLE db_orderitems (
    oid INT,
    pid INT,
    qty INT,
    PRIMARY KEY (oid, pid),
    FOREIGN KEY (oid) REFERENCES db_order(oid),
    FOREIGN KEY (pid) REFERENCES db_product(pid)
);

INSERT INTO db_product VALUES
    (NULL, "Dyson DC25:", "Dyson DC25 yellow upright vacuum cleaner with innovative ball design allows you to turn and clean those hard to        reach places.", "img/vacuum1.png", 100.00),
    (NULL, "Vax Air Cordless:", "The Vax Air Cordless combines power and manoverbility whilst utilising innovative battery technology.",          "img/vacuum2.png", 200.00),
    (NULL, "Vax Life Cordless:", "The Vax Life combines great battery life with wind tunnel technology giving you a great clean.",             "img/vacuum3.png", 300.00),
    (NULL, "Dyson DC28C:", "The Dyson DC28C multi floor cylinder vacuum cleaner will give your home a deep clean with it's Radial Root            Cyclone Technology thats helps pickup even more dirt.", "img/vacuum4.png", 350.00),
    (NULL, "Henry Hoover:", "Henry hoover is back with an all new 9 litre bag. This is the ideal vacuum cleaner for anyone who wants back        to basics cleaning with a beloved household brand", "img/vacuum5.png", 400.00);