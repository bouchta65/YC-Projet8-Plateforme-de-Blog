# Blog Platform Project

## Description
Cette plateforme de blog permet la création, la gestion, et la visualisation d'articles. Les utilisateurs peuvent interagir avec le contenu via des likes, des commentaires, et des fonctionnalités avancées de gestion de rôles, de tages, et d'archivage.

---

## Fonctionnalités Principales

### Gestion des Articles
- Création, modification et suppression d'articles.
- Ajout d'images optionnelles pour enrichir le contenu.
- Attribution de catégories aux articles pour une meilleure organisation.
- Archivage d'articles : les utilisateurs enregistrés peuvent archiver des articles pour les conserver.

### Système de Likes
- Tous les utilisateurs peuvent ajouter un like à un article pour montrer leur appréciation.

### Système de Commentaires
- Les visiteurs peuvent commenter les articles avec leur nom et email.
- Les utilisateurs enregistrés peuvent gérer leurs commentaires (modifier/supprimer).

### Gestion des Utilisateurs
- Gestion des rôles (utilisateur, admin).
- Modération des articles et commentaires pour assurer la qualité du contenu.
- Tableau de bord avec statistiques clés (nombre d'articles, utilisateurs, etc.).
- Système de liste noire : les administrateurs peuvent bloquer un utilisateur pour restreindre son accès.

### Gestion des tages
- Création, modification et suppression de tages (administrateurs).
- Filtrage des articles par tage pour les visiteurs.

### Sécurité Intégrée
- Sessions sécurisées avec cookies HTTP-only et sécurisés.
- Protection contre les XSS avec des techniques d’assainissement comme `htmlspecialchars()`.
- Prévention des injections SQL avec des requêtes préparées.
- Protection CSRF avec des tokens pour les formulaires sensibles.

---

## Diagrammes
- **ERD (Diagramme Entité-Relation)** : Voir le fichier `src/db//ERD.png`.
- **Diagramme UML (Cas d'utilisation)** : Voir le fichier `src/db/User_Case.png`.
