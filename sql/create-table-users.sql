CREATE TABLE users (
    usersId int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    usersUsername varchar(128) NOT NULL,
    usersEmail varchar(128) NOT NULL,
    usersPassword varchar(128) NOT NULL,
    usersRealname varchar(128) NOT NULL
);

