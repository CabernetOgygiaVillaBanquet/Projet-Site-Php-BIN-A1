# Projet-Site-Php-BIN-A1

Consignes
Nombre de personnes par groupe: 4
Règles de constitution des groupes: Libre

Objectifs
Sujet du projet: Création d'un site Web en PHP
Type de rendu: Sources du projet au format zip
Date de rendu de projet: 14/01/2023 23H42 (Tout retard sera refusé)

Le code doit être rendu dans une archive ZIP. (malus si autre format) Pensez à mettre le dump SQL de votre base dans l'archive


Chaque étudiant du groupe doit avoir travaillé sur le projet, sinon 0.

Soumettre le projet sur DV Learning.

Evaluations
En l'absence de travail d'un étudiant, l'étudiant se verra attribuer la note de 0.

Si une triche est détectée, la note du groupe sera de 0.

Barème:

- 12pts: Fonctionnel (nombre de tables respecté, mise en place de sécurité, mise en place de validation de champs de formulaire, ...)
- 3pts: UI
- 5pts: Architecture logiciel (hiérarchie des fichiers, découpage des éléments en commun)
- malus: mauvais format d'archive, code mort (en commentaire), indentation illisible, ...

Cahier des charges

- Créer un site web en PHP, type de site libre.

Critères:

- Avoir au moins 4 tables en plus de la table User (hors table de relation Many-to-Many)
- Mettre en place l'authentification utilisateur
- Mettre en place la gestion des droits (rôle ou par utilisateur)
  - exemple: un utilisateur ne peut voir que ses commandes, un admin peut voir toutes les commandes
  - exemple: créer des accès à une liste de tâches à plusieurs utilisateurs, seul ceux-ci peuvent les modifier
- Utilisation la BDD via PDO
Avoir au moins les pages suivantes
- Login
- Register
- Profil
- Une landing page (index.php accessible sans être connecté)
... toutes autres pages liées au sujet choisi
  
Si vous avez des questions, envoyer un mail à karl@kmarques.dev en mettant le tag [ESILV][PHP] dans le sujet
