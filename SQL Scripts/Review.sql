create table Review
(
    id                int auto_increment
        primary key,
    title             varchar(100)   not null,
    descriptionReview varchar(1000)  not null,
    mark              decimal(10, 2) not null,
    idProduct         int            not null,
    idClient          int            not null,
    constraint FK_Review_ClientID
        foreign key (idClient) references Client (id),
    constraint FK_Review_productID
        foreign key (idProduct) references Product (id)
);

