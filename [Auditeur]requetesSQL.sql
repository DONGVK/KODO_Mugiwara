-- AUDITEUR (dis bismileh et tout vas bien se passer)


--- S'inscrisre à une conf [Auditeur]
INSERT INTO Inscription VALUES 
						('SELECT idUser FROM Utilisateurs WHERE idUser =: idUser',
						'SELECT idConference FROM Conference WHERE idConference = :idConference')
						);
--- ou (php) 

public function sinscrire (){
      //utilisation de la fonction password_hash pour pouvoir stocker les mdp mais pas en clair
      $mdp_hash = password_hash ($POST ["motDePasse"], PASSWORD_DEFAULT);

      $req = $bdd -> prepare ("insert into Inscription (idUser, nom, prenom, motDePasse, adresseMail) VALUES (?, ?, ?, ?, ?)");
      $req -> execute (array (
        'mdp'=> $mdp_hash,
        'id'=> $idUser,
        'nom'=> $nom,
        'prenom'=> $prenom
        'adresseMail'=> $adresse,
      ) );
      }
    }


--- Se désinscrire d'une conf [Auditeur]
DELETE Inscription VALUES 
						('SELECT idUser FROM Utilisateurs WHERE idUser =: idUser',
						'SELECT idConference FROM Conference WHERE idConference = :idConference')
						);



--- Filtrer conf [Auditeur]
SELECT nomConf,theme FROM conference WHERE theme =: themechoisi OR nomConf =:motsCles OR
						SELECT Nom,Prenom,Pseudo FROM Utilisateurs WHERE Speaker == true AND Nom =: motEntre OR Prenom=: motEntre OR Pseudo =: motEntre);
						
						
--- Affichage des personnes suivi [Auditeur]
-- je sais pas comment faire pour les recuperer ? faut pas qu'on rajoute un attribut "personneSuivi" dans Utilisateur, si oui alors :
SELECT personneSuivi FROM Utilisateur WHERE id:= idUser; 

--- Affichage des évènements auxquels il a participé [Auditeur]
SELECT idConference, nomConf, dateConf FROM Conference WHERE id =: idUser; 


