/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de cr�ation :  20/04/2020 11:29:40                      */
/*==============================================================*/


drop table if exists Admin;

drop table if exists Moto;

drop table if exists Vente;

/*==============================================================*/
/* Table : Admin                                                */
/*==============================================================*/
create table Admin
(
   nom                  varchar(255),
   prenom               varchar(255),
   email                varchar(255),
   mot_de_pass          varchar(255),
   Id                   int not null,
   primary key (Id)
);

/*==============================================================*/
/* Table : Moto                                                 */
/*==============================================================*/
create table Moto
(
   marque               varchar(255),
   modele               varchar(255),
   cylindre             varchar(255),
   numero_de_serie      varchar(255) not null,
   prix                 varchar(255),
   couleur              varchar(255),
   disponibilite        varchar(255),
   primary key (numero_de_serie)
);

/*==============================================================*/
/* Table : Vente                                                */
/*==============================================================*/
create table Vente
(
   numero_de_serie      varchar(255) not null,
   Id                   int not null,
   nom                  varchar(255),
   prenom               varchar(255),
   somme                varchar(255),
   telephone            varchar(255),
<<<<<<< HEAD
   primary key (numero_de_serie, Id)
=======
   primary key (Id)
>>>>>>> master
);

alter table Vente add constraint FK_Generalisation_1 foreign key (numero_de_serie)
      references Moto (numero_de_serie) on delete restrict on update restrict;

