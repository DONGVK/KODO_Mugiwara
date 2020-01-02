/* ---------------------- [Partie SPEAKER] ---------------------------------*/

/*
 * Il faut que dans le code PhP : que le mdp soit chiffré
 * L'ID user sera généré automatique dans la fonction PhP
 * Vérifier que toutes les informations sont
*/

/*
  * INSERT INTO Utilisateur VALUES ( );
  * 0      0                0             0
    ^      ^                ^             ^
  Admin   Etablissement    Speaker     Auditeur
    * Ici speaker donc : 0010
    * Si il est speaker et auditeur : 0011

  * Simplifier ? 0              0           0
                 ^              ^           ^
            Etablissement     Speaker    Auditeur
    * Ici speaker donc : 010
    * Si il est speaker et auditeur : 011
    * Si admin : 111
    
   * Simple ? 
    * 1,2,3,4 
*/
INSERT INTO Utilisateur VALUES ('idUser', 'Nom', 'Prenom', 'Adresse@Mail' , 'MdpChiffre' , '0010' , 'idGroupe');
 /*
 * Si le speaker ajoute un nouveau thème
 * INSERT INTO Theme VALUES ( 'nouvTheme' );
  */
INSERT INTO Theme VALUES ('UnNouveauTheme');

/*
  * Si le speaker appartient à un établissement
  * Dans le fonction PhP, si il y a un nouveaux établissement il va créer une nouvelle table pour l'établissement et ses données.
  * INSERT INTO nomEtablissement VALUES ( );
*/

 INSERT INTO nomEtablissement VALUES ('idUser');

 /* Changement d'établissement */
 DELETE FROM nomEtablissement WHERE idUser = idUser;
 UPDATE nomEtablissement SET nom_colonne_1 = 'nouvelle valeur' WHERE condition;
 INSERT INTO nomEtablissement VALUES ('idUser');

 /* Création de groupe */
INSERT INTO Groupe (IdUser, IdGroupe) VALUES(user,group);
INSERT INTO Utilisateur (GID) VALUES (group);

/* Changement de nom */
UPDATE Utilisateur SET nom = 'nouveau nom' WHERE idUser = 'idUser';
