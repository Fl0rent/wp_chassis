<?php get_header(); ?>

<!-- debut div contenu -->
<section id="page-blanche">											

<div id="corps">											
<?php fil_ariane();?>

	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">				
			<h1><?php the_title(); ?></h1>
			<!--<div class="postmetadata">
			Auteur : <?php the_author(); ?>.<br />
			Mots clés : <?php the_tags(', '); ?>.<br />
			Publié dans <?php the_category(', ') ?>.<br />
			Date de publication : <?php the_time( get_option( 'date_format' ) )?>.
			</div>-->
						
			<?php if (has_post_thumbnail()) { // si une image à la une existe dans l'article, on l'affiche
  				echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>';
			}
			?>
			
			<?php query_posts('p=6'); ?>

			<div class="entry">

				<?php
				//On affiche quoi pour le corps du contenu ?
				the_content();
				//the_content("...lire la suite de " . get_the_title('', '', false));
				wp_link_pages('before=<div class="pagination">&after=</div>');
				//the_excerpt();
				?>
				
			</div>
			<div class="signature_article">											<!--À MODIFIER!!-->
			Auteur : <?php the_author(); ?>.<br />
			Mots clés : <?php the_tags(', '); ?>.<br />
			Publié dans <?php the_category(', ') ?>.<br />
			Date de publication : <?php the_time( get_option( 'date_format' ) )?>.
			</div>
		</div>
		
	<?php
	//On affiche quelle pagination ?
	articlepage_prec_suiv();
	//multi_pages_navi();
	?>

		<div id="comment-area">
			<?php comments_template(); ?>
		</div>

	<?php endwhile; else :
		//404 Que fait-on ?
		contenu_introuvable();
		?>

	<?php endif; ?>
</div><!-- fin div corps -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
