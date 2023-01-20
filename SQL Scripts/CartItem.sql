create table CartItem
(
    id        int auto_increment
        primary key,
    idCart    int not null,
    idProduct int not null,
    quantity  int not null,
    constraint FK_CartItem_Cart
        foreign key (idCart) references Cart (id),
    constraint FK_CartItem_Product
        foreign key (idProduct) references Product (id)
);

INSERT INTO `512Database`.CartItem (id, idCart, idProduct, quantity) VALUES (13, 3, 10, 1);
INSERT INTO `512Database`.CartItem (id, idCart, idProduct, quantity) VALUES (16, 1, 1, 1);
INSERT INTO `512Database`.CartItem (id, idCart, idProduct, quantity) VALUES (17, 1, 5, 2);
INSERT INTO `512Database`.CartItem (id, idCart, idProduct, quantity) VALUES (19, 4, 1, 1);
INSERT INTO `512Database`.CartItem (id, idCart, idProduct, quantity) VALUES (20, 5, 3, 1);
INSERT INTO `512Database`.CartItem (id, idCart, idProduct, quantity) VALUES (21, 6, 1, 1);
INSERT INTO `512Database`.CartItem (id, idCart, idProduct, quantity) VALUES (23, 7, 4, 2);
INSERT INTO `512Database`.CartItem (id, idCart, idProduct, quantity) VALUES (27, 2, 2, 3);
INSERT INTO `512Database`.CartItem (id, idCart, idProduct, quantity) VALUES (28, 9, 1, 1);
INSERT INTO `512Database`.CartItem (id, idCart, idProduct, quantity) VALUES (30, 8, 6, 1);
INSERT INTO `512Database`.CartItem (id, idCart, idProduct, quantity) VALUES (31, 11, 14, 600000);
INSERT INTO `512Database`.CartItem (id, idCart, idProduct, quantity) VALUES (32, 12, 3, 3);
INSERT INTO `512Database`.CartItem (id, idCart, idProduct, quantity) VALUES (33, 12, 2, 1);
INSERT INTO `512Database`.CartItem (id, idCart, idProduct, quantity) VALUES (34, 8, 3, 2);
INSERT INTO `512Database`.CartItem (id, idCart, idProduct, quantity) VALUES (35, 2, 4, 1);
INSERT INTO `512Database`.CartItem (id, idCart, idProduct, quantity) VALUES (36, 13, 2, 1);
INSERT INTO `512Database`.CartItem (id, idCart, idProduct, quantity) VALUES (37, 14, 4, 3);
INSERT INTO `512Database`.CartItem (id, idCart, idProduct, quantity) VALUES (38, 10, 3, 3);
INSERT INTO `512Database`.CartItem (id, idCart, idProduct, quantity) VALUES (39, 15, 1, 2);
INSERT INTO `512Database`.CartItem (id, idCart, idProduct, quantity) VALUES (40, 16, 3, 1);
INSERT INTO `512Database`.CartItem (id, idCart, idProduct, quantity) VALUES (41, 17, 3, 1);
INSERT INTO `512Database`.CartItem (id, idCart, idProduct, quantity) VALUES (42, 18, 2, 1);
INSERT INTO `512Database`.CartItem (id, idCart, idProduct, quantity) VALUES (43, 19, 1, 1);
INSERT INTO `512Database`.CartItem (id, idCart, idProduct, quantity) VALUES (44, 20, 3, 1);
INSERT INTO `512Database`.CartItem (id, idCart, idProduct, quantity) VALUES (45, 21, 1, 1);
INSERT INTO `512Database`.CartItem (id, idCart, idProduct, quantity) VALUES (46, 22, 2, 1);
INSERT INTO `512Database`.CartItem (id, idCart, idProduct, quantity) VALUES (50, 24, 13, 1);
INSERT INTO `512Database`.CartItem (id, idCart, idProduct, quantity) VALUES (52, 23, 2, 1);
