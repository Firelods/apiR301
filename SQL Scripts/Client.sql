create table Client
(
    id           int auto_increment
        primary key,
    surname      varchar(50)   not null,
    firstName    varchar(50)   not null,
    email        varchar(50)   not null,
    passwordHash varchar(150)  not null,
    isAdmin      int default 0 not null
);

INSERT INTO `512Database`.Client (id, surname, firstName, email, passwordHash, isAdmin) VALUES (12, 'LEFÈVRE', 'Clément', 'lefevreclement83@gmail.com', '$2y$10$Sj.9Gt1bh94OB3yrn6HJaeov44Idg49fLhgl0moLQxpGtR8W2Iale', 1);
INSERT INTO `512Database`.Client (id, surname, firstName, email, passwordHash, isAdmin) VALUES (13, 'undefined', 'gfbd', 'bgf', '$2y$10$XvtXX8Kpwu8Kt9uBI6xfMesoa9LOM/1FUR6KHP/Boq1hu4f9z3Nb6', 0);
INSERT INTO `512Database`.Client (id, surname, firstName, email, passwordHash, isAdmin) VALUES (14, 'Ishkok', 'Alfred', 'alfredo@gmail.com', '$2y$10$FrMCV2Wk6.4NaS3Hj/Hb8en3ZNWzGzPe/t4gorA1qi3ZDTd4A2FQG', 0);
INSERT INTO `512Database`.Client (id, surname, firstName, email, passwordHash, isAdmin) VALUES (15, 'fadda', 'antoine', 'antoine.arcsti@gmail.com', '$2y$10$wvMn7X3uzrTm6rA0u9/B2uC8Ja6gROEpzl2hspIY.qtaFYKt3pcj2', 0);
INSERT INTO `512Database`.Client (id, surname, firstName, email, passwordHash, isAdmin) VALUES (16, 'fadda', 'antoine', 'oui@gmail.com', '$2y$10$MhRN7B3cVNyVadKAdxiAa.jlekdatWNLhEHcRcUqvUF/AQSvFJoLK', 0);
INSERT INTO `512Database`.Client (id, surname, firstName, email, passwordHash, isAdmin) VALUES (17, 'undefined', 'zizi', 'caca@gmail.com', '$2y$10$zP75OYVUwS1kT8fGuEJwteDs5JRTSyvMOmhDvs.h6lKL9Br9N/812', 0);
INSERT INTO `512Database`.Client (id, surname, firstName, email, passwordHash, isAdmin) VALUES (18, 'BEUX', 'Arnaud', 'arnaud.beux@etu.unice.fr', '$2y$10$tnwqNvb3ZjPsYn3KIaV6ROAJx4R4vuKjRTFbGvrO3escrQTcYBmLO', 0);
INSERT INTO `512Database`.Client (id, surname, firstName, email, passwordHash, isAdmin) VALUES (19, 'f', 'antoine', 'non@gmail.com', '$2y$10$iCAqOyfvG/2PI6E46UZX4uiyjvV87JBq.1uTgByZRX3bvXdsiKsDO', 1);
INSERT INTO `512Database`.Client (id, surname, firstName, email, passwordHash, isAdmin) VALUES (20, 'Mama', 'Joe', 'raph10@mail.com', '$2y$10$LVqVlBfQu8Oy68lFTWnRquPuFLg0ADBh4eZC58sJxKEYlZHN7UczW', 0);
INSERT INTO `512Database`.Client (id, surname, firstName, email, passwordHash, isAdmin) VALUES (21, 'z', 'z', 'z@z.com', '$2y$10$AKmMsWK71XEBd2krvOAtreWSxX863K69rhwpvCXo8TV1TEsFcsvpy', 0);
INSERT INTO `512Database`.Client (id, surname, firstName, email, passwordHash, isAdmin) VALUES (22, 'lkofezof', 'Clement', 'vemav27712@tohup.com', '$2y$10$QtxNuqRya6gbRL.yqo7ZH.q/1uUKc4L55ZFKNKqCAQvJ8BGGjoEA6', 0);
INSERT INTO `512Database`.Client (id, surname, firstName, email, passwordHash, isAdmin) VALUES (23, 'faererbuipfaguyiper', 'dahuibpgdiuhaz', 'payip59376@tingn.com', '$2y$10$pf5MpkTNx2gFO9CRtrYpjOHpkI4c2izufriEnK2yl8E6MQWryYghm', 0);
INSERT INTO `512Database`.Client (id, surname, firstName, email, passwordHash, isAdmin) VALUES (24, 'ferafreezrfezr', 'fbuzdaiuohfze', 'dehafe6134@themesw.com', '$2y$10$FeF1bs3dsM5ElgJiDYJGIOK1ePeK58RwMncpRqmJ3UBoVLbasf3ya', 0);
INSERT INTO `512Database`.Client (id, surname, firstName, email, passwordHash, isAdmin) VALUES (25, 'zer', 'ezrfa reg', 'titicil939@themesw.com', '$2y$10$9s7JTP.qE5rc8hxojtQJJ.H9xD7NGOKa4A1cXBGV3MsvqXRqiAyha', 0);
INSERT INTO `512Database`.Client (id, surname, firstName, email, passwordHash, isAdmin) VALUES (26, 'Sinnah', 'Paul', '', '$2y$10$eOvpt14EGTEBsznEfXaHreC.RoXcjUixz.9DnEYAQEi/BDUm/6Ko2', 0);
INSERT INTO `512Database`.Client (id, surname, firstName, email, passwordHash, isAdmin) VALUES (27, 'zvevevsd', 's', 'dtftufc', '$2y$10$fHxda13B.MI9WVZtBZhyOu5LbAoba8nAEgOlRzyU8eHKG4/t2t8DW', 0);
INSERT INTO `512Database`.Client (id, surname, firstName, email, passwordHash, isAdmin) VALUES (28, 'g', 'g', 'thbjyku', '$2y$10$rzHI8PHzG64sDk4HMlQTQuRL1yQ9h1TPhn1zSZAQbbvs1Tme03iM6', 0);
INSERT INTO `512Database`.Client (id, surname, firstName, email, passwordHash, isAdmin) VALUES (29, 'q', 'q', 'q', '$2y$10$oZbu/whhma0yLWeyAa1p5ONpG0I3oZHBD2XNBmjUsUtz0xBt7lo3i', 0);
