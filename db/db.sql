DROP TABLE IF EXISTS persons;

CREATE TABLE persons (
    id SERIAL,
    lname varchar(255),
    fname varchar(255),
    address varchar(255),
    city varchar(255)
);

INSERT INTO persons (lname, fname, address, city)
VALUES ('Kehl', 'Craig', '8956 Taft Hill Dr.', 'Sandy');