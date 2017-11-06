# Projet-Php-IPSSI
Projet Php IPSSI Martin Supiot


Le projet se situe dans le dossier  	GONS SAIB Fatimah SITE PHP/paper-dashboard-free-v1.1.2/paper-dashboard-free-v1.1.2


Le projet a été fait avec les technologies suivantes : Bootstrap, Html, Css, Php, Mysql.

Le projet est contenu dans le dossier : paper-dashboard-free-v1.1.2
Et le script de la base de données se nomme : ipssitest.sql

Veillez donc bien à importer le script.

Les fonctionnalités sont les suivantes :

- Un formulaire de connexion avec la possibilité de se connecter
- Les logins et mots de passe sont stockés dans la base de données
- Lors de la connexion on vérifie que l'utilisateur existe et que son mot de passe est correct
- Si la connexion échoue on reste sur la page avec un message d'erreur
- Si la connexion est ok le login de l'utilisateur est stocké dans une variable de session grâce à laquelle je fais des requêtes pour récupérer le reste des informations de l'utilisateur en base de données
- Une page est dédiée à l'affichage de la liste des utilisateurs contenus dans la base de données
- Il y a un formulaire d'ajout d'utilisateur, qui se trouve être un bouton (+), un formulaire de modifications, et un bouton suppression, qui sont tous situés à côté de chaque utilisateur dans la liste et qui permettent de faire les actions directement en base de données
- Il exite également un lien de déconnexion quand la personne clique sur son prénom en haut à droite dans le header.

