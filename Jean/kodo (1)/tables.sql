-- DROP SCHEMA public CASCADE;
-- DELETE FROM Utilisateur;
/*
* Auditeur : 1
* Speaker : 2
* Speaker/Auditeur : 3
* Organisateur : 4
* Admin : 5
*/

CREATE TABLE Signalement (
	idUser int PRIMARY KEY,
	idPublication int ,
	commentaire varchar(80)
);


CREATE TABLE Groupe (
	idUser int PRIMARY KEY,
	idGroupe int
);

CREATE TABLE Historique (
	idUser int PRIMARY KEY,
	idConference int,
	idPublication int
);

CREATE TABLE Publication (
	idUser int PRIMARY KEY,
	idPublication int,
	info varchar(80),
	Jaime int
);

CREATE TABLE Inscription (
	idUser int PRIMARY KEY,
	idConference int
);

CREATE TABLE Souhait (
	idUser int PRIMARY KEY,
	idConference int
);

CREATE TABLE Conference (
	idUser int PRIMARY KEY,
	idConference int,
	horaireDebut TIMESTAMP, --AAAA-MM-JJ HH:MM:SS
	horaireFin TIMESTAMP, --AAAA-MM-JJ HH:MM:SS
	nomConf varchar(80),
	dateConf date,
	placeDispo int,
	theme varchar(100),
	information varchar(100) --Peut-être une image donc le type est modifier ?
	 --Contenir des pdf ?
);

CREATE TABLE Utilisateur(
	idUser varchar(100) PRIMARY KEY,
	nom varchar (100) NOT NULL,
	prenom varchar (100) NOT NULL,
	birthdate varchar(50) NOT NULL,
	password varchar (200) NOT NULL, --??????????pas sure pour le type
	adresseM varchar (50) NOT NULL,
	adresseP varchar (100) NOT NULL,
	statue int NOT NULL,
	etablissement varchar(100),
	abonnement varchar(100),
	--centreInteret varchar(100),
	idGroup int, --Si ne fait pas partie d'un groupe NUL sinon on a l'id du groupe auquel il appartient
	dateCreation TIMESTAMP
);

CREATE TABLE CentreInteret (
	idUser int PRIMARY KEY,
	nomCentreInteret varchar(100)
);


/*
CREATE TABLE Communauté (
	videeeeeeee
);
*/

CREATE TABLE Question(
	idUser int PRIMARY KEY, --Id du Speaker
	contenue varchar(100)
);
