## Lilmod V1.2.1 du 03/11/2017 ##

### Evolutions ###
* Identifications des bots dans la répartition des plateformes (Ticket #80) ;


### Corrections ###
* Erreur d'affichage de la page audiences : calcul du total des plateformes erronée (Ticket #79) ;
* Correction de l'affichage des news (Ticket #82) ;
* Mise à jour des collections Dico, DicoListe, de la page jouer.liste, ajaxJeuListe et liste.js, ajout de la methode toGo() sur l'évenement "charger une partie" (Ticket #83) ;
* Les statistiques des tableaux navigateur et plateforme est incorrects. Il faut supprimer le filtre (Tichet #84) ;

## Lilmod V1.2.0 du 01/11/2017 ##

### Evolutions ###
* Indiquer les jeux disponibles dans le portail des jeux non disponibles (Ticket #32);
* Mise en place d'une animation pendant le chargement de la page (Ticket #33);
* Déploiement du jeu du pendu ;
* Migration Zurb foundation 6.4.1 (Ticket #36) ;
* Refonte totale des feuilles de styles (Ticket #37) ;
* Refonte de la page Association (Ticket #38) ;
* Refonte de la page CGU (Ticket #39) ;
* Refonte de la page Mentions légales (Ticket #40) ;
* Refonte de la page Cookie (Ticket #41) ;
* Refonte de la page soutien (Ticket #42) ;
* Remplacer les htmlentities par des caractères UTF8 pour les informations enregistrées en base de données (Ticket #43) ;
* Refonte du formulaire d'adhèsion à l'Association (Ticket #44) ;
* Refonte de la page nouveautés (Ticket #48) ;
* Refonte de la page boîte à outils (Ticket #52) ;
* Refonte de la page d'aides en ligne (Ticket #49) ;
* Refonte de la page de téléchragement (Ticket #50) ;
* Mise à jour de la police LilMod ( remplacement du symbole - boîte à outils et import du symbole rechercher) (Ticket #53) ;
* Ajout de la fonction : affichage de la liste des 100 derniers documents (Ticket #53) ;
* Refonte des pages erreur 404 et 500 (Ticket #54) ;
* Refonte de la page petit-mot (Ticket #55) ;
* Mise à jour du module de pagination : utilisation d'ajax pour le rafraichissement de la page (Ticket #56) ;
* Mise à jour de la page petit-mot (Ticket #57);
* Migration du MPD dela BD (Ticket #58) ;
* Mise à jour de la version du FW Zurb Foundation 6.4.1 vers 6.4.2 (Ticket #59) ;
* Ajout d'un "raccourci" pour accéder directement à une section de la page en cliquant sur le dernier lien du Breadcrumbs (Ticket #60) ;
* Refonte de la page Omer (Ticket #62) ;
* Refonte de la page Hamitsvot (Ticket #63) ;
* Mise en place d'un système permettant de choisir un avatar lors de l'inscripton (Ticket #64) ;
* Mise à jour de la page Salle d'entrainement suite à la mise à jour de ZF 6.4.2 (Ticket #65) ;
* Refonte des pages Liste du portail de jeu sur à la mise à jur de ZF 6..4.2 (Ticket #66);
* Migration Debian 8.6 vers 9.1 (Ticket #67) ;
* Migration php 5.6.9 vers la version 7.0 (Ticket #68) ;
* Ajout d'un lien pour faire un don à l'Association (Ticket #69) ;
* Ajout d'un client Google Api pour l'affichage des statistiques (Ticket #71) ;
* Ajout d'un lien paypal, pour nous donner un 1€ ou plus (Ticket #72) ;
* Ajout d'une page de mesure des audiences de fréquentation (Ticket #73);

### Corrections ###
* RangeError: Invalid array length sur l'utilisation du filtre d'affichage du chronos - version 1.1.2 (Ticket #20);
* Downloadable font: maxp: bad max_zones: 0 (font-family: "pscoreboard" style:normal weight:normal stretch:normal src index:1) (Ticket #34)
  source: /fonts/Scoreboard/scoreboard.woff2 (Ticket #35); 
* Erreur de chargement du formulaire de contact suite au passage à SF 3.3 (Ticket #46) ;
* Erreur d'accès au service mobile (Ticket #45) ;
* Erreur de chargement du formulaire d'adhesion suite au passage à SF 3.3 (Ticket #47) ;
* Erreur d'afficahge de la paracha du jour de Kippour (1.1.2) (Ticket #70) ;
* Erreur d'affichage de la paracha du jour de soucoth (1.1.2) (Ticket #72) ;
* Erreur 500 lors d'un click sur le lien PDF du menu principal (Ticket #74) ;
* Erreur Call to a member function format() on null suite à la migration Debian 9 / Php7.  Problème sur la fonction localisableDate. Version icu-57.1 impossible à passer en version 59.1. (Ticket #75)
* Image http://lilmod-lelamed.fr/bundles/portail/images/Logo/Lilmod-144x144.png does not match the declared size (114x114) (Ticket #76= ;
* favicon.ico is missing some icons of recommended sizes (16x16, 48x48) (Ticket #77) ;
* The Web App Manifest is absent (Ticket #78)


## Lilmod V1.1.1 du 14/06/2017 ##

### Evolutions ###
* Ajout des tutoriels : comment vider son cache Internet (Ticket #29) ;

### Corrections ###

 * Le tableau de suivi des évolutions du tuto raccourci n'est pas à jour. (Ticket #22) ;
 * You have requested a non-existent service "Omer". Did you mean this: "omer"? (Ticket #24) ;
 * Quand on clique sur le file d’Ariane, le mot ici: apparaît plusieurs fois. (Ticket #28) ;
 * Il n'est pas possible de sélectionner un jeu en mode mobile. (Ticket #27) ;
 * Le téchargement du livre de Ruth n'est pas possible. (Ticket #30) ;
 * A l'ouverture du fichier, un mot de passe est demandé (Ticket #31) ;

## Lilmod V1.1.0 du 04/06/2017 ##

### Evolutions ###
* Affichage de la legende du fieldset incorrect sur Android. Passage de la légende 
  dessus de la fieldset (Ticket #7) ;
* ajout d'une fenêtre modale sur le bouton fermer de la navbar, 
  ajout de l'effet hoover sur les boutons, 
  retour sur la home page si l'utilisateur est connecté 
  sinon la fenêtre retourne sur la page courrante sans rien faire(Ticket #10) ;
* Révision de la page partenaires, ajout de Torah Haim Vechalom (Ticket #18) ;
* Ajout du jeu - mots-mêlés (Ticket #11)
* Ajout du tutoriel : ajouer un raccouci sur le bureau ;
* Remplacement du titre du jeu : recherche par Mots mêlés ;
* Migration Symfony 3.3.0 ;
* Ajout de la librairie sunCalc pour ajouter plus de d'horaire pour le lever et le coucher (Ticket #18);
* Création d'une page d'administraton ;
* Ajout des fichiers audio pour les animaux et pour les couleurs ; 
* Intégration de l'API VoiceRSS ;
* Intégration compléte du Bundle FosUSER (Ticket #9) ;

### Corrections ###
* Problème pour afficher le formulaire d'inscription (Ticket #8) :
    * mise à jour du framework Symfony ;
    * modification de la class RegistrationForm.php, config.yml, routes.yms et services.yml ;
      = correction de la décalarion du service et des type ;
    * suppression de la notion de date de naissance (document/user.php + registration.html.twig) ;
* Ajout d'un saut de ligne entre les images dans la page soutien.twig.html (Ticket #16) ;
* Correction sur la page jouer.liste.html.twig sur "id =difficile1" mal orthographié ;
* Modifcation de la page jouer-liste-html.twig au niveau du chronos (small) pour permettre l'activation du Chronos (Ticket #3) ;
* Correction d'une faute d'orthographe dans la page jouer-index.twig.html (dans la note) (Ticket #13);
* Le système de notation ne fonctionne pas (error : Cookie is not defined) (Ticket #17) ;
* Nettoyage du code dans les metas de type OG (http://www.yakaferci.com/open-graph/) ;
* Correction du processus de selection du type et du choix du jeu (Ticket #21) ;

### anomalie ###"
* RangeError: invalid array lenght (Ticket #20) ;

## Lilmod V1.0.2 du 17/01/2017 ##

### Corrections ###
* Corection du formatage du guide de la salle d'entraînement à partir de la section 
zonne de jeu (Ticket #5) ;
* Suppression d'un blanc à la fin du nom de l'image (telechargement, bibliotheque, les-petits-mots,...) (Ticket #6) ;

## Lilmod V1.0.1 du 15/01/2017 ##
### Evolutions ###
* Mise en place d'un gestionnaire de source et de gestion des anomalies ;
* Réorganisation des versions : majeure.minueure.correction ;

### Corrections ###
* noramlisation de la fonction closable, et de l'utilisation de la classe close-x 
dans les box et les fenêtre modale (Ticket #1) ;
* remplacement de l'appel d'un fonction dépréciée dans l'extension Twig StarBarExtension.php
(Ticket #2) ;

## Lilmod V1.0 du 12/01/2017 ##

### Evolutions ###
* Migration Symfony 2.8.1 vers 3.1 ;
* Migration Mongodb 3.2.0 vers 3.4.1 (utilisation de WideTiger) ;
* Migration ZF 6.2.1 vers 6.3.0 ;
* Refonte de la section apprendre :
  * sont présents uniquement les cours ;
* Ouverture de la section Bibliothèque :
  * Ajout du libre de Job ;
* Optimisation de la page de style (refonte de la barre de menu, NavBar) ;
* Remplacement des onglets par un menu dans la section Guemara ;
* Refonte de l'en-tête de la page d'étude quotidienne :
    * Déplacement des informations sur la paracha ;
    * Mise en place d'une boîte dépliable pour les réfoua ;
* Ouverture de la section téléchargement ;
    * mise en place du moteur de recherche par tag et par expression ;
    * mise à jour du nombre de téléchargement ;
* Ouverture de la section petits-mots :
    * affichage des 3 derniers messages ;
    * ajout du système de notation par étoile ;
    * ajout du système de pagination (utilisation du bundle paginator);
* ouverture de la section jeu : 
    * création d'une base données dédiés ;
    * Mode entrainement et jeu ;
    * Choix du jeu :
        * Quizz, Relier, Recherche, Jeopardy et Reversi...
    * Choix du theme :
        * Parasha ;
        * Vocabulaires ;
    * Choix de l'epreuve :
        * Beshalak, animaux,...
* Utilisation de la librairie ElevationZomm pour l'affichage des WordMap ;
* mise à jour de la font lilmod (ajout de l'image "chronos", "score", "FR", "EN") ;


### Corrections ###
* modification de la fonction identification du type de locale de l'utilisateur ;
* ajustement de la ligne de copyleft pour les smartphone (ajout de deux espaces * "&nbsp") ;
* ajout de la balise <address> pour les adresses dans les pages CGU et informations légales ;
* correction de la vue reset_content (migration form_encType) ;
* Correction de la vue petit-mots-index.html (affichage des tags et des thèmes,...);



## Lilmod V0.20.0 du 05/12/2016 ##

### Evolutions ###
* Ajout de la section stat pour l’étude quotidienne de la torah ;
* mise à jour de la page d'aide de la section de la torah:

## Lilmod V15.8 du 01/12/2016 ##

### Corrections ###
* meilleure prise en charge des données de références (prise en compte des tags HTML sur la version et la référence) ;
* ajout d'une valeur null pour le champ contrôle ;

## Lilmod V15.7 du 02/10/2016 ##

### Corrections ###
* correction de la classe paracha, erreur sur l'appel de la fonction getTorahSectionName pour la paracha Tchouva ;

## Lilmod V15.6 du 29/08/2016 ##

### Corrections ###
* Corrections des indexes des paracha du sefer Devarim ;

## Lilmod V15.5 du 18/08/2016 ##

### Corrections ###
* ajout de l'argument FR pour la récupération de la section et de la paracha pour l'affichage du commentaire de la semaine) ;

## Lilmod V15.4 du 16/08/2016 ##

### Corrections ###
* Correction du test de la présence d'une annonce (ajout d'un Else) ;

Lilmod v0.15.3 du 07/08/2016 ##

### Evolutions ###
* amélioration de l'affichage des pages (reworking des css) ;

## Lilmod v0.15.2 du 05/08/2016 ##

### Evolutions ###
* amélioration de la gestion des annonces ;

Corrections:
* mise à jour de la ponctuation et de la typographie pour les mitsvot : -298; 184; 247; -293; -297 ;

## Lilmod v0.15.1 du 31/07/2016 ##

### Evolutions ###
* Mise à jour de ckeditor en version 4.5.10 ;
* Affichage d'une nouvelle icône sur la page d'accueil pour signaler la présence d'un commentaire ;


## Corrections ##
* Affichage des mitsvot sur la page détails ;

## Lilmod v0.15 du 29/07/2016 ##
### Evolutions ###
* mise à jour de la page d'accueil de la section étude ;
* ouverture de la section « aides-moi » et « mes devoirs » ;
* mise à jour de la stratégie de référencement ;
* création d'un service pour le calcul du jour du omer ;
* intégration du livre de Devarim ;

### Corrections ###
* suppression du formatage de la date dans la section licence de la boîte à outil Omer ;

## Lilmod v0.14.4 du 27/07/2016 ##

### Evolutions ###
* Mise à jour des fichiers sitemap ;
* ajout de la classe césure pour l'affichage des textes du Sefer Hamitzvot ;
* ouverture de la boite à outil « Aidez-moi » ;
* mise à jour de la page d'accueil de la section étude ;

### Corrections ###
* Sefer Hamitzvot : corrections mise en page des mitsvot -250, -247, -265, -266, 194, -269, 204;
* Sefer Hamitzvot : correction sur la présentation du badge de la mistva. Ajout du paramètre valeur absolue ;


## Lilmod v0.14.3 du 21/07/2016 ##

### Corrections ###
* corrections des fautes d'orthographes sur la pages association et informations ;
* corrections de l'affichage des mitzvot dans la boite du Sefer Hamitzvot de la page d'accueil ;

## Lilmod v0.14.2 du 16/07/2016 ##

### Evolutions ### 
* ajout d'une nouvelle boite pour les annonces importantes ;

## Lilmod v0.14.1 du 15/07/2016 ##

### Evolutions ### :
* Ajustement de la taille des titres des modules de la page « Boîte à outils » ;

Lilmod v0.14 du 14/07/2016 ##

### Evolutions ###
* Sefer Hamitsvot ;
    * Sur la page d'accueil : les commandements du jour, l'aide en ligne et un renvoie vers le détail ;
    * Sur la page d'étude : les commandements complets du jour, l'aide en ligne, le type de licence ;
* Section Refoua-Atslara-Briout,...
* Modification du nom des classes CSS et JS (ajout de l'extension min) ;
* Harmonisation du cartouche dans les boîtes ;
* Ouverture de la section Boîte à outils ;
    * Page d'accueil : présentation des outils sous la forme d'un mur qui bouge et accès à la rubrique ;
* Ajout de deux nouveaux caractères à la police Lilmod (Boîte à outils et Statistiques) --> version 0.12 ;

### Corrections ###
* Ajustement du caractère Rashi (aleph) dans la police Lilmod (v0.12) ;

## Lilmod v0.13.2 du 03/07/2016 ##

### Corrections ###
* Ajout de la section Torah-4 pour la parasha de Kora ;

## Lilmod v0.13.1 du 15/06/2016 ##

### Corrections ###
* Correction de la page de soutien ;

## Lilmod v0.13 du 14/06/2016 ##

### Evolutions ### 
* Ajout du livre Bamidbar (hébreu, traduction, Targoum) ;
* Ajout des commentaires de Rashi avec la traduction (partiel) ;
* Refonte de la page d'étude quotidienne de la paracha ;
* Ajout d'un lien pour afficher de l'information sur la section Omer ;
* Affichage de la boîte refoua chelema en dessous du message d'accueil ;
* Ajout de la date de déploiement de l'application dans les informations de licence ;
* Refactoring de la page de soutien ;
* Mise à jour Zurb Foundation 6.2.3 ;

### Corrections ###
* Ajustement de la ligne du jour du omer pour la version mobile ;
* Correction de l'affichage pour la ligne « Nuit Astronomique » ;
* Correction de l'index dans la base torah-4l-(verset-fr) ;
* Correction du nom de l'image cahier pour la résolution 320x120 ;
 
## Lilmod v0.12.4 du 08/05/2016 ##
### Evolutions ### 
* Ajout des relecteurs et vérificateurs dans la boîte Info ;
* Ajout du décompte (hébreu et translité) pour le rite HarZal et Sefard ;

### Corrections ###
* ajout de la dernière ligne manquante de Anna Becoar dans la section Omer ;
* Correction du titre de la boîte d'information pour l'étude quotidienne de la thora ;

## Lilmod v0.12.3 du 06/05/2016 ##

### Evolutions ### :
* modification de la police de caractère Lilmod : ajout du symbole Lune, demi-lune ;
* réécriture de l'algorithme de calcul du jour du Omer ;
  * Prise en compte du coucher de soleil, de la nuit civile, de la nuit nautique et astronomique ;
  * Affichage du symbole soleil, demi-lune et lune en fonction du type de nuit (civil, nautique, astronomique);
  * pris en compte de la nuit nautique pour déterminer le début de la nuit (12° sous l'horizon) ;
* refactoring complet de la page d'accueil du portail : core, aide, box,..
* Mise en place progressive de la boîte à outils et de l'aide en ligne sur toutes les pages ;

### Corrections ###
* Erreur d'affichage des rachi-tevot dans la première phrase de la lecture du Omer ;


## Lilmod v0.12.2 du 26/04/2016 ##

### Evolutions ###
* Mise à jour des fichiers siteMap ;
* Mise à jour de la police Lilmod : ajout du symbole :  ? » ;

### Corrections ###
* Remplacement de l'icône Aleph avec la lettre aleph en écriture rashi ;


## Lilmod v0.12.1 du 25/04/2016 ##

### Evolutions ###

### Corrections ###
* Décalage dans la version phonétique du A-Yom ;
* la paracha 92 n'existe pas on fait pointer vers la 28 ;

## Lilmod v0.12 du 23/04/2016 ##

### Evolutions ###
* mise à jour Zurb Foundation 6.2.1 ;
* Suppression de l'Api BrowserHappy ;
* Ajout d'un lien vers la page d'accueil sur le logo Lilmod & Lelamed de la navbar ;
* Ajout d’une boite sur la page du portail pour le décompte de l'Omer, avec gestion de l'heure pour le passage du crépuscule vers la nuit ;
* Ajout d'un bouton pour accéder au détail du décompte ;
* Mise en place d'une page Erreur 500 ;
* refactoring de la page d'accueil ;

### Corrections ###
* Quand la parasha de Pessah tombe pendant la Paracha de Metsora alors le numéro retourné est 89 = "", 
  La parasha 89 n'existe pas...on la fait pointer sur la Parasha ;

## Lilmod v0.11.3 du 01/04/2016 ##
### Corrections ###
* Erreur d'affichage de l'étude quotidienne pour la section 6-7 et 9 (correction dans la base pour la paracha chemini, pb d'index),

## Lilmod v0.11.2 du 01/04/2016 ##
### Corrections ###
* amélioration de la lisibilité de la page de guemara ;

## Lilmod v0.11.1 du 17/03/2016 ##

### Evolutions ###
* Ajout d'un lien soutien ;
* Ajout de la traduction des quatre lignes ;
* Ajout d'une section Etude quotidienne - avec l'étude de la paracha - torah + traduction + targouum ;
* Ajout des champs : date_enregistrer, date_valider et a_payer au document adhésion ;

### Corrections ###
* correction du message-flash dans le formulaire adhésion ;
* fautes d'orthographes, corrections de l'adresse dans la page information (merci Avner) ;

### Anomalies ###
* Gestion de la locale à revoir. Aujourd'hui bloqué sur FR ;

## Lilmod v0.11 du 05/03/2016 ##

### Evolutions ###
* Modification de la couleur des boutons non accessible : passage de bleu a gris ;
* Ajout d'un bouton Aleph-Beth et Ethique ;
* Refactoring de la page Apprendre : affiche un message quand une activité n'est pas disponible ;

### Corrections ###
* corrections fautes d'orthographes ;

### Anomalies ###
* Gestion de la locale à revoir. Aujourd'hui bloqué sur FR ;

## Lilmod V0.10 du 18/02/2016 ##

### Evolutions ###
* Refactoring de la page A-propos en Association (cohérence)
* ajout du formulaire contact pour nous écrire : depuis le « footer » (suppression de la fonction mail-me) et depuis la page « Association » ;
* ajout de la traduction en français du Sefer bereshit-4l
* ajout d'un formulaire de demande d'adhésion accessible depuis la page « Association »
* ajout d'un cartouche dans la page « apprendre.talmud » pour indiquer les nouvelles pages traduites
* ajout d'une page non visible « qui nous attaques »
* ajout d'une collection StatIP et StatMenace pour enregistrer les tentatives d'intrusion de la messagerie
* mise à jour Zurb Foundation 6.1.2
* mise à jour Symfony 2.8.2

### Corrections ###
* mise à jour des fichiers de traduction
* préparation migration Symfony 3.0
* traduction sur le formulaire inscription (champs : facultatif, année, mois et jour)
* remplacement de la commande <form> dans les formulaires par la commande d'appel Twig

### Anomalies ###
* Gestion de la locale à revoir. Aujourd'hui bloqué sur FR

## Lilmod v0.9.2 du 12/01/2016 ##
### Evolutions ###
* Suppression de la fonction t+/* : inutile sur un mobile car possibilité de zoom
* Ajout des flèches de direction pour l'ascenseur
* mise à jour de la police Lilmod en version 0.8 (nettoyage et ajout de nouveaux pictogrammes)
### Corrections ###
* Base de données : correction talmud * betsa ligne 15 * guemarra
* Ajustement de la taille des messages dans la callout de la page information. Prise en compte des media small
* Alignement de la numérotation avec l'affichage des psoukim
* Suppression du caractère « : » dans le cartouche information de la page « apprendre - talmud » 

## Lilmod v0.9.1 du 12/01/2016 ##
### Evolutions ###
* Ajout de la fonction Magellan dans les pages du footer 

## Lilmod v0.9 du 10/12/2015 ##
### Evolutions ###
* Page d'accueil :
  * ajout des nouvelles sur le site (3 derniers messages) ;
  * ajout de la date du jour et de la date Hébraïque, indique le jour de Hanouka ;
  * ajout des quatre premières lignes de la Paracha de la semaine pour le jour dit ;
* Page Apprendre : Talmud 
 * Ajout du nombre de page et du pourcentage de traduction pour chaque traité de Talmud ;
 * Mise en forme de la page de Guemara en fonction du type de média (petit ou médium/grand) ;
 * Ajout de la page information ;
 * Ajout de la page contact ;

## Lilmod V0.8 du 23/11/2015 ##
### Evolutions ###
* Migration Zurb Foundation 6 ;
* choix de la police de caractère : rashi/vilna – Ezra ;

## Lilmod V0.7 du 12/11/2015 ##
### Evolutions ###
* Refonte du design responsive, prise en compte des mobiles (iphone 4,5,6 et tablette) ;
* réécriture de la page d'accueil : suppression de la fonction Aa et de fonction impression (pdf). Suppression des logos « responsive » et « e-accessible » ;
* réécriture du footer : réorganisation de la page et compatibilité responsive design ;
* Modification de la page « j'apprends » : ajout d'un fil d’Ariane, encadrement des menus, suppression du bouton de localisation ;
* localisation de la page « j'apprends » ;
* Ajout de la mention « Association à but non lucratif - loi 1901 »
* Modification du MCD pour la collection Menu (ajout des objets HE, EN et FR pour l'objet Ordre) ;

## Lilmod V0.6 du 22/09/2015 ##
### Evolutions ###
* Refonte de la page J'Apprends (uniformisation des menus) ;
* Refonte du modèle de données pour la collection Talmud et Michna ;
* Ajout de la collection Tanakh ;
* Ajout des informations statistiques sur la page d'accueil -  j'apprends (ordre, traité, disponibilité dans la langue,...) ;
* Ajout de la page d'accueil - Je joue (vide) ;
* Modification de la logique de connexion, suppression de la fenêtre modale ;
* Installation du plugin FOSuser et création de la collection User dans MongoDB ;
* Adaptation des formulaires de connexion, d'inscription, de déconnexion et de reset du mot de passe ;
* Localisation (FR, HE, EN) pour les pages : Accueil, connexion, confirmation de la connexion, et inscription ;


## Lilmod v0.5 du 26/08/2015 ##
### Evolutions ###
* Refonte du footer de bas de page ;
* Création d'une police pour les icones (google+, facebook, mel,...) ;
* Affichage des informations concernant le menu de la bibliothèque sur le click du bouton ;
* Affichage des bulles d'informations sur un survol de la souris pour les thèmes ;
* Mise à jour de l'ergonomie de la page de présentation des livres d'étude ;
### Corrections ###
* Problème d'affichage du multilingue, modification de la propriété OnClick et suppression de la balise id dans la construction de la page à afficher. FR et IL sont les balises de références ;
* La langue par défaut et le français ;
## Anomalies ##
* Problème de cohérence entre le sélecteur de langue et l'affichage ;

## Lilmod v0.4 du 20/08/2015 ##
### Evolutions ###
* Changement dynamique sur toutes les pages des contenus multilangues ;
* Ajout des données pour le menu « Apprendre » ;
* Meilleure gestion des sessions ;

## Lilmod v0.3 du 19/08/2015 ##
### Evolutions ###
* Ajout d'un switch pour sélectionner le type de langue (FR/IL) ;
* Gestion de la réponse POST sur le choix de la langue pour l'affichage des textes dans la langue sélectionnée ;

## Lilmod v0.2 du 14/08/2015 ##
### Evolutions ### 
* Ajout sur la page d'accueil des boutons Apprendre, jouer et tableaux des scores ;
* Création des Template de la page Apprendre ;
* Ajout d'une page index pour le module Apprendre (choix du thème d'étude) et d'un Template pour chaque thème ;
* Mise à jour du routage ;
* Ajout de la fonctionnalité : imprimez en PDF ;
* Création de la collection Menu, Michna et Guemarra ;
* Installation de MongoDb ODM, création des entity pour la collection Menu ;
* Mise à jour des polices de caractères ;

### Corrections ###
* Adaptation des pages pour être responsive ;
* Modifications du navbar : augmentation de la taille des textes (fixé dans le CSS) ;

## Lilmod V0.1 du 06/08/2015 ##
### Evolutions ###
* Création des layout globaux : footer, head et navbar ;
* Création des Template de la page d'accueil ;
* Création des pages Cookies, conditions générales d'utilisation et mentions légales ;
* Création d'un fichier de paramétrage pour stocker le numéro de version, affichage dans le footer de chaque page ;
* Nettoyage du code et des CSS ;