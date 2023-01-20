create table Cart
(
    id       int auto_increment
        primary key,
    idClient int                  not null,
    active   tinyint(1) default 1 null,
    constraint FK_Cart_Client
        foreign key (idClient) references Client (id)
);

INSERT INTO `512Database`.Cart (id, idClient, active) VALUES (1, 12, 0);
INSERT INTO `512Database`.Cart (id, idClient, active) VALUES (2, 14, 1);
INSERT INTO `512Database`.Cart (id, idClient, active) VALUES (3, 15, 1);
INSERT INTO `512Database`.Cart (id, idClient, active) VALUES (4, 12, 0);
INSERT INTO `512Database`.Cart (id, idClient, active) VALUES (5, 12, 0);
INSERT INTO `512Database`.Cart (id, idClient, active) VALUES (6, 12, 0);
INSERT INTO `512Database`.Cart (id, idClient, active) VALUES (7, 16, 1);
INSERT INTO `512Database`.Cart (id, idClient, active) VALUES (8, 12, 0);
INSERT INTO `512Database`.Cart (id, idClient, active) VALUES (9, 18, 1);
INSERT INTO `512Database`.Cart (id, idClient, active) VALUES (10, 19, 0);
INSERT INTO `512Database`.Cart (id, idClient, active) VALUES (11, 20, 1);
INSERT INTO `512Database`.Cart (id, idClient, active) VALUES (12, 21, 1);
INSERT INTO `512Database`.Cart (id, idClient, active) VALUES (13, 25, 1);
INSERT INTO `512Database`.Cart (id, idClient, active) VALUES (14, 26, 0);
INSERT INTO `512Database`.Cart (id, idClient, active) VALUES (15, 26, 1);
INSERT INTO `512Database`.Cart (id, idClient, active) VALUES (16, 12, 0);
INSERT INTO `512Database`.Cart (id, idClient, active) VALUES (17, 12, 0);
INSERT INTO `512Database`.Cart (id, idClient, active) VALUES (18, 12, 0);
INSERT INTO `512Database`.Cart (id, idClient, active) VALUES (19, 12, 0);
INSERT INTO `512Database`.Cart (id, idClient, active) VALUES (20, 12, 0);
INSERT INTO `512Database`.Cart (id, idClient, active) VALUES (21, 12, 0);
INSERT INTO `512Database`.Cart (id, idClient, active) VALUES (22, 12, 0);
INSERT INTO `512Database`.Cart (id, idClient, active) VALUES (23, 19, 1);
INSERT INTO `512Database`.Cart (id, idClient, active) VALUES (24, 12, 1);
