--- ORGANISATEUR 


/* Pour le statue : 
	Admin : 1000
	Organisateur : 0100
	Speaker : 0010
	Auditeur : 0001

	Admin + Speaker = 1010
*/



--Affichage des établissements auxquels l'organisateur est lié sur son profil
SELECT * FROM Utilisateur where statue=:s;
:s = 0100


--- Si on ajoute table etablissement
SELECT etablissement FROM Utilisateur where idUser=:id and statue=:s;
:s = 0100

/*	
	Pour l'organisateur, l'avatar par defaut sera la photo d'une univ.
	Aussi un avatar attribué pour speaker et auditeur 
	(pas nous je crois, pas compris faire quoi comme requete)
*/

--Fil d'actualité avec toute les conférences de cet établissement, ou fil d'actualité qui rescence tout les évènements des établissements
SELECT NomConf FROM conférences where etablissement =:e
:e = SELECT etablissement FROM Utilisateur where idUser=:id and statue=:s;
:s = 0100


--Voir les speakers affiliés à l'établissement partage de leurs conférences
SELECT NomConf,Nom FROM Utilisateur where etablissement=:e and statue=:s;
:s = 0010


---Mise en avant des speakers représentants l'établissement
SELECT Nom FROM Utilisateur where statue=:s and etablisement=:e
:s = 0010

--Poster des messages sur la page de l'établissement
INSERT INTO Publication (info) VALUES (:i)
:i= $_POST['info'] (Quand appuie sur le bouton ajouter commentaire)

--Peuvent créer un groupe pour animer des débats suite à une conf
-- Requête faites par le groupe Application normalement
INSERT INTO Groupe (IdUser, IdGroupe) VALUES(:u,:g) 'ajout dans table Groupe'
INSERT INTO Utilisateur (GID) VALUES (:g)'ajout dans table Utilisateur (MAJ)'
:u = $_SESSION['idUser']
:g = $_POST['IdGroupe'] (quand on appuie sur créer, nvx numéro automatiquement)

--[Requete lié au DASHBOARD voir plus tard]

-- Pour créer un évenement 
INSERT INTO Conference (IdUser, IdConference, nomConf, date, horaireDebut,
				horaireFin) VALUES (:u, :c, :n, :d, :hd, :hf);
:u = $_SESSION['idUser']
:c = $_POST['idConference'] (automatique) 
:n, :d, :hd, :hf = $_POST['nomConf'], $_POST['date'], $_POST['hDebut'], $_POST['hFin']

-- Ajouter des thèmes 
INSERT INTO Conference (theme) VALUES (:t)
:t = $_POST['theme']


--sauvegarder et continuer lors de la création de l'évenement
Utilisation de $_SESSION -> partie que php