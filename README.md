# Thème : WP_Châssis
> Mon thème de développement pour Wordpress.

			                		  ** release early, release often **

**Ce framework me sert de base la plus simple possible pour la 
création de site HTML5 propre.**

===

## Genèse:

Pour mes projets web, j'ai fait le choix de coder intégralement 
mon propre framework, uniquement pour mettre les mains dans le 
cambouis, et donc apprendre davantage.

Il existe des frameworks qui sont techniquement plus avancé avec
une grosse communauté derrière. Mais ce n'est pas mon but. 

Les commentaires et textes seront en français, car la plupart des autres framework sont en anglais. 
Autant créer un projet francophone.

Je le tiens à jour régulièrement pour pouvoir profiter des 
dernières techniques en design et développement web.

En fait, je me retrouve exactement dans la description faite sur le site du [codex de Wordpress](http://codex.wordpress.org/Theme_Development):

> Why should you build your own WordPress Theme? That's the real question.

> - It's an opportunity to learn more about CSS, HTML, and PHP.
> - It's an opportunity to put your expertise with CSS, HTML, and PHP to work.
> - It's creative.
> - It's fun (most of the time).
> - If you release it to the public, you can feel good that you shared and gave something back to the WordPress Community (okay, bragging rights)

---

Designed by Florent Parcevaux

[http://fl0rent.github.io/wp_chassis/](http://fl0rent.github.io/wp_chassis/)

License:  
License URI: http://

### Remerciements:

Tous les développeurs OpenSource qui m'ont fournit l'inspiration 
pour le code.


### Submit Bugs & or Fixes:

[https://github.com/fl0rent/wp_chassis/issues](https://github.com/fl0rent/wp_chassis/issues)


----------------------------------------------------------------------------------------------------

## COMMENT FAIRE

Tous ce qui concerne les nouveautés et mises à jour se trouve dans 
le fichier: documentation/**log.txt**

Le fichier **function.php** est le plus neutre possible; pour 
l'améliorer à sa sauce il suffira d'y ajouter des raccourcis.

Pour bien s'en servir, il faut partir avec WP_Châssis comme base, puis créer un thème enfant. 
Il est vraiment conçu pour démarrer un projet, et non pas comme un thème utilisable directement.

Largeur de base du site = 960px


## STRUCTURE DU CHÂSSIS	

1. body
2. page
3. header
4. nav
5. corps
6. section
7. article
8. aside
9. footer


## ARBORESCENCE DES FICHIERS DU CHÂSSIS	

#### les dossiers:

- **documentation**
- **feeds** (rss/atom)
- **images**
- **polices**
- **scripts** (javascript)
- **style** (CSS)
	- **style.css** - aspect du site
	- **reset.css** - remise à zéro du css pour les navigateurs
- **translation**

#### les fichiers:

- **404.php** - page d'erreur
- **archive.php** - page d'archive
- **comments.php** - commentaires et formulaires de commentaire
- **footer.php** - pied de page du blog
- **functions.php** - option du thème
- **header.php** - informations de l'entête du blog
- **index.php** - contenu du blog
- **page.php** - page seule
- **README.md** - toutes les infos utiles du thème
- **screenshots.png** - 300x240px
- **search.php** - résultat d'une recherche
- **sidebar.php** - colonne latéral du blog
- **single.php** - contenu de l'article


- home.php - page d'accueil spécifique
- tag.php - page de tags
- category.php - afficher une catégorie seule
- [nom de la page].php - page précise
- author.php - données liés à un auteur
- date.php - articles par date précise
- image.php - type de médias
- video.php - type de médias
- audio.php - type de médias
- application.php - type de médias







