-- AUDITEUR (dis bismileh et tout vas bien se passer)


--- S'inscrisre à une conf [Auditeur]
INSERT INTO Inscription VALUES 
						('SELECT idUser FROM Utilisateurs WHERE idUser =: idUser',
						'SELECT idConference FROM Conference WHERE idConference = :idConference')
						);



--- Se désinscrire d'une conf [Auditeur]
DELETE Inscription VALUES 
						('SELECT idUser FROM Utilisateurs WHERE idUser =: idUser',
						'SELECT idConference FROM Conference WHERE idConference = :idConference')
						);



--- Filtrer conf [Auditeur]
SELECT nomConf,theme FROM conference WHERE theme =: themechoisi OR nomConf =:motsCles OR
						SELECT Nom,Prenom,Pseudo FROM Utilisateurs WHERE Speaker == true AND Nom =: motEntre OR Prenom=: motEntre OR Pseudo =: motEntre);