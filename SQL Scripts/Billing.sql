create table Billing
(
    id          int auto_increment
        primary key,
    idCart      int  not null,
    idClient    int  not null,
    amountHT    int  not null,
    amountTTC   int  not null,
    billingDate date not null,
    constraint Billing_ibfk_1
        foreign key (idClient) references Client (id),
    constraint Billing_ibfk_2
        foreign key (idCart) references Cart (id),
    constraint FK_Billing_idCart
        foreign key (idCart) references Cart (id),
    constraint FK_Billing_idClient
        foreign key (idClient) references Client (id)
);

INSERT INTO `512Database`.Billing (id, idCart, idClient, amountHT, amountTTC, billingDate) VALUES (1, 1, 12, 24100, 24100, '2023-01-05');
INSERT INTO `512Database`.Billing (id, idCart, idClient, amountHT, amountTTC, billingDate) VALUES (2, 1, 12, 24200, 24200, '2023-01-05');
INSERT INTO `512Database`.Billing (id, idCart, idClient, amountHT, amountTTC, billingDate) VALUES (3, 4, 12, 100, 100, '2023-01-05');
INSERT INTO `512Database`.Billing (id, idCart, idClient, amountHT, amountTTC, billingDate) VALUES (4, 5, 12, 100, 100, '2023-01-06');
INSERT INTO `512Database`.Billing (id, idCart, idClient, amountHT, amountTTC, billingDate) VALUES (5, 6, 12, 100, 100, '2023-01-06');
INSERT INTO `512Database`.Billing (id, idCart, idClient, amountHT, amountTTC, billingDate) VALUES (6, 14, 26, 300, 300, '2023-01-19');
INSERT INTO `512Database`.Billing (id, idCart, idClient, amountHT, amountTTC, billingDate) VALUES (7, 8, 12, 10200, 10200, '2023-01-19');
INSERT INTO `512Database`.Billing (id, idCart, idClient, amountHT, amountTTC, billingDate) VALUES (8, 16, 12, 100, 100, '2023-01-19');
INSERT INTO `512Database`.Billing (id, idCart, idClient, amountHT, amountTTC, billingDate) VALUES (9, 17, 12, 100, 100, '2023-01-19');
INSERT INTO `512Database`.Billing (id, idCart, idClient, amountHT, amountTTC, billingDate) VALUES (10, 18, 12, 100, 100, '2023-01-19');
INSERT INTO `512Database`.Billing (id, idCart, idClient, amountHT, amountTTC, billingDate) VALUES (11, 19, 12, 100, 100, '2023-01-19');
INSERT INTO `512Database`.Billing (id, idCart, idClient, amountHT, amountTTC, billingDate) VALUES (12, 20, 12, 100, 100, '2023-01-19');
INSERT INTO `512Database`.Billing (id, idCart, idClient, amountHT, amountTTC, billingDate) VALUES (13, 21, 12, 100, 100, '2023-01-19');
INSERT INTO `512Database`.Billing (id, idCart, idClient, amountHT, amountTTC, billingDate) VALUES (14, 10, 19, 300, 300, '2023-01-19');
INSERT INTO `512Database`.Billing (id, idCart, idClient, amountHT, amountTTC, billingDate) VALUES (15, 22, 12, 100, 100, '2023-01-19');
