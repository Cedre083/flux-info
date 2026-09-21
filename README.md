# Flux Info — Cartographier les Flux du Vivant

**Flux Info** est un média pédagogique francophone qui rend visibles les flux et les interdépendances reliant l’océan, l’atmosphère, les sols, le vivant, l’humanité, les technologies et le cosmos.

**Flux Info** is a French-language educational website that explores the flows and interdependencies connecting oceans, the atmosphere, soils, living systems, humanity, technology and the cosmos.

- Site officiel : [flux-info.net](https://flux-info.net/)
- Langue principale : français
- Édition : Cédric Mercier et Michel G. Walter
- Organisation : Association française Terre « sacrée », fondée en 1999
- Statut : projet indépendant, non commercial, sans publicité ni profilage

## Finalité du projet

Flux Info aborde chaque sujet comme l’entrée d’un système plus vaste. Ses articles, cartes, expériences interactives et sources scientifiques cherchent à montrer les relations entre phénomènes plutôt qu’à isoler les connaissances.

Les principaux territoires éditoriaux sont :

- l’océan et les circulations thermohalines ;
- l’atmosphère, les vents et les transferts d’eau ;
- les sols, les migrations et les réseaux du vivant ;
- les étoiles, la matière et les cycles cosmiques ;
- les sociétés humaines, les techniques et leurs dépendances matérielles ;
- les relations transversales réunies dans l’« Archipel ».

## Contenu du dépôt

Ce dépôt contient la version publique du site :

- pages PHP éditoriales ;
- feuilles de style et scripts JavaScript ;
- images et ressources graphiques ;
- carte interactive et données JSON ;
- métadonnées structurées Schema.org ;
- fichiers de découvrabilité `robots.txt`, `sitemap.xml`, `llms.txt`, `humans.txt` et `lkp.json`.

La vidéo principale n’est pas versionnée dans GitHub afin d’éviter d’alourdir fortement le dépôt. La page d’accueil charge sa version publique depuis `flux-info.net`.

## Exécution locale

Le site requiert PHP 8 ou une version compatible. Depuis la racine du dépôt :

```bash
php -S localhost:8000
```

Ouvrir ensuite [http://localhost:8000](http://localhost:8000).

En production, le fichier `.htaccess` prévoit Apache avec `mod_rewrite`, `mod_headers`, `mod_deflate` et `mod_expires` lorsque ces modules sont disponibles.

## Méthode éditoriale

Le projet distingue les faits établis, les ordres de grandeur, les hypothèses discutées, les métaphores pédagogiques et les réflexions philosophiques. Les détails sont présentés dans la [politique éditoriale](https://flux-info.net/politique-editoriale.php) et la [FAQ sourcée](https://flux-info.net/faq.php).

L’intelligence artificielle peut contribuer à la recherche, à la rédaction, au code et à l’illustration. La sélection des sujets, les arbitrages, la vérification, la publication et la responsabilité finale restent humains.

## Licence et réutilisation

La publication de ce code source sur GitHub ne place pas le projet dans le domaine public. Les textes, images, créations graphiques, codes, animations et autres contenus restent protégés. Consultez [LICENSE.md](LICENSE.md) avant toute réutilisation.

## Contact

Pour toute question, proposition ou demande d’autorisation : [contact@flux-info.net](mailto:contact@flux-info.net).

## Métadonnées GitHub conseillées

**Description du dépôt**

> Média pédagogique francophone sur les flux et interdépendances du vivant, du climat, des océans, des sociétés, des technologies et du cosmos.

**Topics**

`biosphere` · `living-systems` · `climate` · `ocean` · `biodiversity` · `earth-system` · `science-communication` · `environmental-education` · `interdependence` · `php`
