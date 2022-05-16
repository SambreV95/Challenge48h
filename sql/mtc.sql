drop database if exists mtc ;
create database mtc;
use mtc;

create table ouvrier (
	idouvrier int(3) not null auto_increment,
	nom varchar(50),
	prenom varchar(50),
	adresse varchar(50),
	tel varchar(20),
	email varchar(100),
	mdp varchar(255),
	salaire float,
	specialisation enum("Plombier", "Peintre", "Electricien", "Menuisier", "Plaquiste"),
	primary key(idouvrier)
);

insert into ouvrier values (null,"Durant", "Chris", "21 Avenue Limoges", "0101010101","durant@gmail.com","Douvrier", 1600, "Plombier"),
	(null,"Rousseau", "Pierre", "46 rue Albert", "0202020202","rousseau@gmail.com","Rouvrier", 1500, "Peintre");

create table chef (
	idchef int(3) not null auto_increment,
	nom varchar(50),
	prenom varchar(50),
	adresse varchar(50),
	tel varchar(20),
	email varchar(100),
	mdp varchar(255),
	salaire float,
	primary key(idchef)
);

insert into chef values (null,"Adam", "Phil", "13 rue Dessous des Berges", "0601010101","adam@gmail.com","Aouvrier", 2500),
	(null,"Lemaire", "Louise", "3 rue Paris", "0602020202","lemaire@gmail.com","Louvrier", 3000);

create table realisation (
	idrealisation int(3) not null auto_increment,
	nomreal varchar(50),
	surface varchar(50),
	budget float,
	localisation varchar(50),
	typedebien varchar(50),
	description text,
	idchef int(3) not null,
	primary key(idrealisation),
	foreign key(idchef) references chef(idchef)
);

insert into realisation values (null,"Villa X", "80m2", "420000","77852", "Maison Unifamiliale", "je sais pas", 1),
	(null, "Appart Y", "60m2", "450000","75014", "Appartement", "je sais pas", 2);

create table projet (
	idprojet int(3) not null auto_increment,
	nomproj varchar(100),
	type varchar(100),
	dateprojet date,
	descriptifproj text,
	primary key(idprojet)
);

insert into projet values (null,"Gare Chatelet", "Renovation", "2020-11-29", "Bonjour"),
	(null,"Maison Angelina Jolie", "Nouvelle Salle de bain", "2020-12-29", "On fait sa bien");

create table devis (
	iddevis int(3) not null auto_increment,
	nom varchar(50),
	prenom varchar(50),
	mail varchar(50),
	localisation varchar(50),
	fourchettebudget varchar(50),
	duree varchar(50),
	delais date,
	commentaire text,
	statut varchar(50),
	primary key(iddevis)
);

insert into devis values (null,"Roman", "Mélanie", "kilo.milo@hotmail.fr","Paris","100000-150000$","1 semaine", "2020-12-29", "j'ai besoin de refaire ma chambre et ma salle de bain", ""),
	 (null, "Cisse", "Djibril", "djibsonlebgdu13@gmail.com","Paris","200000-250000$","3 semaine", "2021-01-06", "j'ai besoin de refaire mon appart", "");

create table service (
		idservice int(3) not null auto_increment,
	 	corps varchar(50),
	 	descriptif text,
		primary key(idservice)
	 );

insert into service values (null, "Plomberie" , "Tuyaux, tubes, vannes, robinets, soupapes, pompes, ..."),
	(null, "Peinture", "Murs, Plafonds. Sur béton, plâtre, bois et métal"),
	(null, "Électricité", "Installation et mise en service à usage domestique, tertiaire et industriel selon les règles de sécurité. Peut câbler et raccorder des installations très basse tension (téléphonie, informatique, alarmes, ...)."),
	(null, "Plâterie", "Pose de plaques de plâtre ; Isolation de cloisons ; Doublage de cloisons ; Isolation phonique et thermique ;
		Aménagement de combles ; Pose de fenêtres de toit ; Pose de faux-plafonds ; Création de planchers ; Création de supports pour
		une nouvelle cuisine par exemple ; Installation d’une voûte ; Fabrication de mobilier de rangement (étagères, meubles)"),
	(null, "Menuiserie", "Volets, placards, portes, escaliers, cloisons, fenêtres, parquets, ..."),
	(null , "Travaux Murs et Sols", "Renovation du sol et des murs");

#les vues

create view les_realisations as (
	select r.idrealisation, r.nomreal, r.surface, r.budget , r.localisation , r.typedebien, r.description, c.nom, c.prenom
	from realisation r, chef c
	where r.idchef = c.idchef
);

create table user (
	iduser int(3) not null auto_increment,
	nom varchar(50),
	prenom varchar(50),
	email varchar(100),
	mdp varchar(255),
	droits enum ("admin", "user", "ouvrier"),
	primary key(iduser)
);

insert into user values (null, "Cisse", "Djibs", "cd@gmail.com", "123", "admin"),
	(null, "Bilel", "Hugo", "b@gmail.com", "456", "user"),
	(null, "Matthis", "Franc", "mf@gmail.com", "789", "ouvrier");
