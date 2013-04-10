<?php
/*
Template Name: SansCommentaires
*/
?>
<?php get_header(); ?>

<div id="page">	
	<div id="corps">								
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
	
	
		<?php endwhile; else :
			//404 Que fait-on ?
			contenu_introuvable();
			?>
	
		<?php endif; ?>
	</div>	
			
<?php get_footer(); ?>
