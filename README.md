# Définitions des déploiements

Ce dépôt permet la définition des déploiements réalisés par le groupe Harmonia.

Vous pouvez utiliser ce projet en tant qu'inspiration, ou déployer votre propre infrastructure tel que la notre.
Vous êtes cependant, en charge de la distribution des charges et des moyens à mettre à disposition.

Ce README.md n'est PAS une documentation destiné à tous. Vous devez déjà comprendre les outils que vous utiliserez, et être en capacité de pouvoir les utiliser.

Vous aurez besoin de [Docker](https://www.docker.com/).

> [!NOTE]
> Vous pouvez utiliser [Rancher Desktop](https://rancherdesktop.io/) (Source ouverte) en remplacement de Docker Desktop (Source fermée).

## Eleutheria

Eleutheria est le wiki hébergé par le groupe Harmonia. Il est disponible à <https://wiki.t4t.one/>.

### Lancer une instance locale

Rendez vous dans le dossier `Eleutheria`.

Copiez et collez `.env.template` vers `.env`, et éditez les valeurs à votre guise.

Vous pouvez maintenant exécutez la commande `docker compose up --build`.

Une fois le conteneur `app` lancé, rendez vous sur `http://localhost:55555` (Vous pouvez définir la variable d'environnement `ELEUTHERIA_PORT` sur un port de votre choix pour en changer le port d'écoute du conteneur).

1. Suivez les étapes pour paramétrer votre Wiki.
2. Lorsque vous êtes demandé d'entrez les informations de connexion à la base de données, rentrez :
    - Hôte : `db`
    - Nom de la base de donnée : `eleutheria`
    - Préfixe des tables : *À votre guise*
    - Nom de l'utilisateur : `app`
    - Mot de passe de l'utilisateur : *Valeur de `MYSQL_PASSWORD`*
3. **Sélectionnez "I'm bored already, just install the wiki." / "J'en ai assez, installer simplement le wiki."** (On parle bien pour tester ici, et non en production)
4. Continuez, laissez la base de données être mise à jour, puis obtenez votre fichier `LocalSettings.php`. Déposez le dans le dossier `Eleutheria`.
5. Dans votre `LocalSettings.php`, retirez toutes les lignes mentionnant les extensions et skins/thèmes, et remplacez les par la ligne suivantes :

```php
require_once '/var/www/html/LocalSettings/Skins.php';
require_once '/var/www/html/LocalSettings/Extensions.php';
```

Voir les autres snippets pour le `LocalSettings.php` dans le dossier `LocalSettings`. Ils sont installés dans le dossier `/var/www/html/LocalSettings` dans le conteneur.
