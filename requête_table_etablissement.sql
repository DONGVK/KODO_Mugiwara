/* Création de la table établissement */
CREATE TABLE Etablissement ( idEta VARCHAR(100) NOT NULL, responsable VARCHAR(100), lieu VARCHAR(100), membre VARCHAR(100) );

/* Insertion nouveaux établissement il faut vérifier dans une fonction que le lieu est différent */
INSERT INTO Etablissement VALUES ( idEta , responsable, lieu, membre);

/* 
  *Insertion d'un nouveaux membre il faut vérifier que le membre n'est pas mis 2 fois
  *Il ne faut pas oublier que dans la fonction les noms figurer anciennement soit stocké quelque part pour ensuite le remettre
*/
UPDATE Etablissement SET membre = 'nouvelle valeur' WHERE idEta = idEta;

