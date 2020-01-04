--Commande pour supprimer les tables : drope TABLE ...  

CREATE TABLE Signalement (
	idUser int PRIMARY KEY,
	idPublication int ,
	commentaire varchar (80)
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
	horaireDebut int --??????????type pas sure; 
	horaireFin int --???????? 
	nomConf varchar (80),
	dateConf date,
	placeDispo int,
	theme varchar(),
	information varchar(), --Peut-être une image donc le type est modifier ?
	article --Contenir des pdf ?
);

CREATE TABLE Utilisateur(
	idUser int PRIMARY KEY, 
	nom varchar (50),
	prenom varchar (50),
	motDePasse varchar (10) --??????????pas sure pour le type
	adresseMail varchar (50), 
	/*auditeur boolean, 
	speaker boolean, 
	organisateur boolean, */
	statue int, 
	etablissement varchar(),
	abonnement varchar(),
	--centreInteret varchar(),
	idGroupe integer --Si ne fait pas partie d'un groupe NUL sinon on a l'id du groupe auquel il appartient

)

CREATE TABLE CentreInteret (
	idUser int PRIMARY KEY, 
	nomCentreInteret varchar()
)


CREATE TABLE Communauté (
	videeeeeeee
)

CREATE TABLE Question(
	idUser int PRIMARY KEY, --Id du Speaker
	contenue varchar()
)