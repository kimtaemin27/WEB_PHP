CREATE TABLE members (
    num INT NOT NULL auto_increment,
    id CHAR(20) NOT NULL,
    pass CHAR(20) NOT NULL,
    name CHAR(20) NOT NULL,
    email CHAR(80),
    regist_day CHAR(20),
    level INT,
    point INT,
    PRIMARY KEY(num)
);