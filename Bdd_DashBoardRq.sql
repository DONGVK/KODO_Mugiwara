---requête dashboard

/* on veut savoir pour tel conférence on a combien de participants*/
-- il faut savoir combien d'utilisateurs participent à la conférence

select count(idUser) from incription where idConference="idConference";

/* il reste combien de place disponible pour tel ou tel conférence*/
-- on compte les places disponible pour la conférence

select count(placeDispo) from conférence;

/* COmbien de followers?*/
/* il faut un attribut dans la table utilisateur appelés abonnés
où on pourra mettre tout les user qui suit l'utilisateur choisit */

-- pour ajouter un followers à l'utilisateur
--insert into utilisateur (abonnés) values ('IdUserNewAbonnes');

--afficher le nbr de followers
--select abonnés from utilisateur;

-- OPTIONNEL

/*faire apparaitre le budget*/
-- ajouter dans la base de donnée un attribut budget pour faire apparaitre le budget alloué de la conférence
--select budget from conférence;

/* conf payante faire apparaitre la somme obtenu */
-- ajouter dans la base de donnée un attribut prixplaceConf
--pour savoir combien d'argent ont été recolté depuis la mise en vente des places

--select sum(prix placeConf) from conférence;
