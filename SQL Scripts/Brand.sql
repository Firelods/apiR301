create table Brand
(
    id          int auto_increment
        primary key,
    title       varchar(100)  not null,
    link        varchar(1000) not null,
    imageURL    varchar(1000) not null,
    description varchar(1000) null
);

INSERT INTO `512Database`.Brand (id, title, link, imageURL, description) VALUES (1, 'Canon', 'https://canon.com', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS7R3-bPQNY_VhiDf4FrChRQyiJDHVS2Q8SgA&usqp=CAU', 'Canon est une entreprise japonaise spécialisée dans la fabrication d''appareils électroniques, de jeux vidéo, de téléviseurs, de caméras, de smartphones, de lecteurs MP3, de lecteurs Blu-ray, de systèmes audio, de systèmes de cinéma maison, de consoles de jeux, de produits informatiques et de logiciels. Elle est également présente dans le domaine de la photographie numérique, de la téléphonie mobile, de la télévision, de la musique, des jeux vidéo, des ordinateurs, des produits de divertissement et des produits de consommation. Elle est également présente dans le domaine de la photographie numérique, de la téléphonie mobile, de la télévision, de la musique, des jeux vidéo, des ordinateurs, des produits de divertissement et des produits de consommation.');
INSERT INTO `512Database`.Brand (id, title, link, imageURL, description) VALUES (2, 'Nikon', 'https://www.nikon.fr/fr_FR/', 'https://cdn.nikoneurope.com/imported/images/web/EU/common/Nikon_Logo.png', 'Nikon Corporation est une entreprise japonaise spécialisée dans la fabrication d''appareils électroniques, de jeux vidéo, de téléviseurs, de caméras, de smartphones, de lecteurs MP3, de lecteurs Blu-ray, de systèmes audio, de systèmes de cinéma maison, de consoles de jeux, de produits informatiques et de logiciels. Elle est également présente dans le domaine de la photographie numérique, de la téléphonie mobile, de la télévision, de la musique, des jeux vidéo, des ordinateurs, des produits de divertissement et des produits de consommation. Elle est également présente dans le domaine de la photographie numérique, de la téléphonie mobile, de la télévision, de la musique, des jeux vidéo, des ordinateurs, des produits de divertissement et des produits de consommation.');
INSERT INTO `512Database`.Brand (id, title, link, imageURL, description) VALUES (3, 'Sony', 'https://www.sony.fr/', 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Sony_logo.svg/500px-Sony_logo.svg.png?20200728053324', 'Sony est une entreprise japonaise spécialisée dans la fabrication d''appareils électroniques, de jeux vidéo, de téléviseurs, de caméras, de smartphones, de lecteurs MP3, de lecteurs Blu-ray, de systèmes audio, de systèmes de cinéma maison, de consoles de jeux, de produits informatiques et de logiciels. Elle est également présente dans le domaine de la photographie numérique, de la téléphonie mobile, de la télévision, de la musique, des jeux vidéo, des ordinateurs, des produits de divertissement et des produits de consommation. Elle est également présente dans le domaine de la photographie numérique, de la téléphonie mobile, de la télévision, de la musique, des jeux vidéo, des ordinateurs, des produits de divertissement et des produits de consommation.');
INSERT INTO `512Database`.Brand (id, title, link, imageURL, description) VALUES (4, 'Panasonic', 'https://www.panasonic.com/fr/', 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Panasonic_logo.svg/langfr-250px-Panasonic_logo.svg.png', 'Panasonic Corporation est une entreprise japonaise spécialisée dans la fabrication d''appareils électroniques, de jeux vidéo, de téléviseurs, de caméras, de smartphones, de lecteurs MP3, de lecteurs Blu-ray, de systèmes audio, de systèmes de cinéma maison, de consoles de jeux, de produits informatiques et de logiciels. Elle est également présente dans le domaine de la photographie numérique, de la téléphonie mobile, de la télévision, de la musique, des jeux vidéo, des ordinateurs, des produits de divertissement et des produits de consommation.');
INSERT INTO `512Database`.Brand (id, title, link, imageURL, description) VALUES (5, 'Digital', '0', 'https://test.com', 'Lorem Ipsum');
INSERT INTO `512Database`.Brand (id, title, link, imageURL, description) VALUES (6, 'Digital', '0', 'https://test.png', 'Lorem Ipsum');
INSERT INTO `512Database`.Brand (id, title, link, imageURL, description) VALUES (7, '', '0', '', '');
INSERT INTO `512Database`.Brand (id, title, link, imageURL, description) VALUES (11, '', 'onon', '', '');
INSERT INTO `512Database`.Brand (id, title, link, imageURL, description) VALUES (12, '', 'onon', 'non', 'non');
