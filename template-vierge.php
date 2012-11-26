<?php
/*
Template Name: Vierge
*/
?>
<?php get_header(); ?>

<section id="page-blanche">
	<?php fil_ariane();?>

	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">
			<h1><?php the_title(); ?></h1>
			<div class="entry">
				<?php
				//On affiche quoi pour le corps du contenu ?
				the_content();
				//the_content("...lire la suite de " . get_the_title('', '', false));
				//the_excerpt();
				?>
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
			
<?php get_footer(); ?>
