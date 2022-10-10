# ecole_la_reussite

## Mode d'utilisation pour les membres

Pour chaque membre:

    - il faut créer un dossier sur votre machine (nommée projet_gestion_ecole) 
    - ensuite ouvrez ce dossier avec vscode, et ouvrez le terminal de vscode
    - tapez la commande

 ```
git clone --branch dev https://github.com/mouhamed1296/ecole_la_reussite.git .
```

Lorsque une **tache** est assigné à un membre le membre doit créer une branche suivant la nomenclature suivante: **numéroTache_nomTache** et développez sur cette tache.
Aprés avoir fini de développé la tache le membre se doit de faire un push en tapant la commande:

```
git push -u origin nom_branche
```

**NB:** Avant chaque push vous devez vous placer dans la branche dev et exécuter la commande:

```
git pull
```
Ensuite vous vous placé au niveau de la branche correspondant à votre tache et vous éxecuter la commande:

```
git merge dev
```

Et maintenant vous pouvez exécuter la commande de push citer plus haut.

Aprés cela le membre doit se connecter sur son compte github et créer un pull request de sa branche vers la branche dev et le Lead du projet fera un code review avant de faire le merge.

### Description du projet et ses fonctionnalités

C'est une application des gestion d'une école mixte primaire et secondaire permettant de digitaliser la gestion administrative en ce qui concerne :

    Inscription des élèves
    Inscription des employés
    Liste des employés et élèves
    gestion de la comptabilité
    Gestion des salles de classe
    Gestion des modules(pour les collèges)
    Gestion des évaluations
    Gestion de passages en classe supérieur
    Gestion des résultats

L'application va permettre à l'école:

## L'administrateur peut

    Ajouter un élève, un employé
    Modifier un élève, un employé
    Rechercher un élève, un employé
    Archiver un élève, un employé
    Ajouter une secrétaire
    Rechercher une secrétaire
    Lister les comptes
    Lister les employés

Gérer la traçabilité:

    les présences
    les absences
    les passages de niveau
    redoublement
    Les paiements élèves
    les paiement employés

Le comptable peut:

    Ajouter paiement
    Lister des paiements
    Reste des paiements

un employé peut :

    Voir son compte
    Modifier login et mot de passe
    Performer les actions liées à son poste
