---requête Commun

---Page Profil

/*le fil d'actualité pour tout le monde je pense( c'est pas écrit pour qui ). On va mettre des suggestion,
des publication, des conférences ect*/

select info from publication natural join centreInteret;-- on prend que les publications qui peuvent interesser l'utilisateur en fonction de ces centre d'interet
select NomConf,information from conférences natural join centreInteret;-- pareil que publication mais pour les conférences

 /*Historique des likes (publication et/ou conférences)*/

 select * from Historique where idUser =(select nom from utilisateur) and idConference = ( select information,NomConf from conférences)
 and idpublication = ( select information from publication);
-- select imbriqué pour pouvoir trouver grace au id les conf, publication que l'utilisateur a like

 /* affichage profil */

 select nom, prenom, etablissement from utilisateur;
-- on souhaite juste afficher les infos de l'utilisateur

 /*affichage centre d'interet
 on veut afficher si l'utilisateur a un compte payant,
 les centres d'interet que s'est abonnés on liké*/

select NomCentreInteret from centreInteret natural join utilisateur where idUser = ( select abonnement from utilisateur where abonnement = 'payant' and idgroupe = (select * from groupe) );

-- Gestion Profil
$mdp_hash = password_hash ($POST ["motDePasse"], PASSWORD_DEFAULT);
 /* changer de pseudo */
update utilisateur set pseudo = 'nouvpseudo' where idUser = 'utilisateursouhaiter' ;

/* changer de mot de passe */
update utilisateur set mot de passe = '$mdp_hash' where idUser= 'utilisateursouhaiter';

/* changer d'adresse mail */
update utilisateur set adresseMail = 'newAdMail' where idUser= 'utilisateursouhaiter';

/* changer ou ajouter une description */
insert into utilisateur (statue) values ('ajoutdescriptions');
update utilisateur set statue = 'nouvstatue' where idUser= 'utilisateursouhaiter';

/* creation compte */
insert into utilisateur values ('idUser','nom','abonnement','$mdp_hash', 'prenom', 'statue','GID','adresseMail','etablissement');

/* signalement*/
-- ou on selectionne le commentaire signaler
select * from signalement;
-- ou vue qu'on signale un commentaire on ajoute celui ci dans la bdd
insert into signalement values ('idUserSignaler', 'idpublicationsignaler','commentaire');
