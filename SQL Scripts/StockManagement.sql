create table StockManagement
(
    id               int auto_increment
        primary key,
    idProduct        int not null,
    quantity         int not null,
    criticalQuantity int not null,
    constraint FK_StockManagement_idProduct
        foreign key (idProduct) references Product (id)
);

INSERT INTO `512Database`.StockManagement (id, idProduct, quantity, criticalQuantity) VALUES (1, 1, 10, 3);
INSERT INTO `512Database`.StockManagement (id, idProduct, quantity, criticalQuantity) VALUES (2, 2, 10, 3);
INSERT INTO `512Database`.StockManagement (id, idProduct, quantity, criticalQuantity) VALUES (3, 3, 10, 3);
INSERT INTO `512Database`.StockManagement (id, idProduct, quantity, criticalQuantity) VALUES (4, 4, 10, 3);
INSERT INTO `512Database`.StockManagement (id, idProduct, quantity, criticalQuantity) VALUES (5, 5, 10, 3);
INSERT INTO `512Database`.StockManagement (id, idProduct, quantity, criticalQuantity) VALUES (6, 6, 10, 3);
INSERT INTO `512Database`.StockManagement (id, idProduct, quantity, criticalQuantity) VALUES (7, 7, 10, 3);
INSERT INTO `512Database`.StockManagement (id, idProduct, quantity, criticalQuantity) VALUES (8, 8, 10, 3);
INSERT INTO `512Database`.StockManagement (id, idProduct, quantity, criticalQuantity) VALUES (10, 10, 10, 3);
INSERT INTO `512Database`.StockManagement (id, idProduct, quantity, criticalQuantity) VALUES (11, 11, 10, 3);
INSERT INTO `512Database`.StockManagement (id, idProduct, quantity, criticalQuantity) VALUES (12, 12, 2, 3);
INSERT INTO `512Database`.StockManagement (id, idProduct, quantity, criticalQuantity) VALUES (13, 13, 0, 3);
INSERT INTO `512Database`.StockManagement (id, idProduct, quantity, criticalQuantity) VALUES (14, 14, 10, 3);
INSERT INTO `512Database`.StockManagement (id, idProduct, quantity, criticalQuantity) VALUES (15, 15, 10, 3);
INSERT INTO `512Database`.StockManagement (id, idProduct, quantity, criticalQuantity) VALUES (16, 16, 10, 3);
