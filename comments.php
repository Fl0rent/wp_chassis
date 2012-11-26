<?php // Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Merci de ne pas charger cette page directement. Merci !');
	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) { ?>
			<p class="nocomments">Page protégée par mot de passe. Saisissez le mot de passe pour visualiser le contenu.</p>
			<?php return;
		}
	}
	/* This variable is for alternating comment background */
	$oddcomment = 'class="alt" ';
?>
<!-- Start editing here. -->

<?php if ($comments) : ?>
	<p><?php comments_number('Pas de commentaire', '1 commentaire', '% commentaires' );?> pour <?php the_title(); ?></p>

	<ul class="commentlist">
	<?php foreach ($comments as $comment) : ?>
		<li <?php echo $oddcomment; ?>id="comment-<?php comment_ID() ?>">
			<?php echo get_avatar( $comment, 32 ); ?>
			<?php comment_author_link() ?>
			<?php if ($comment->comment_approved == '0') : echo "<em>Commentaire en attente de modération.</em>"; endif; ?>
			<?php comment_date('j F Y') ?>
			<?php comment_time() ?>
			<?php edit_comment_link('Modifier le commentaire','&nbsp;&nbsp;',''); ?>
			<?php comment_text() ?>
		</li>
		<?php $oddcomment = ( empty( $oddcomment ) ) ? 'class="alt" ' : ''; ?>
	<?php endforeach; ?>
	</ul>

	<?php else : // this is displayed if there are no comments so far ?>
		<?php if ('open' == $post->comment_status) : ?>
		<?php else : ?>
		<p class="nocomments">Commentaires fermés.</p>
	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>
<p>Laisser une réponse</p>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
	<p>Vous devez être <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">connecté</a> pour poster un commentaire.</p>
<?php else : ?>
	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

	<?php if ( $user_ID ) : ?>
		<p>Connecté en tant que <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Se déconnecter de ce compte">Se déconnecter.</a></p>
	<?php else : ?>
		<p class="clearfix"><label for="author">Nom <?php if ($req) echo "(obligatoire)"; ?></label> <input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" /></p>
		<p class="clearfix"><label for="email">Email (ne sera jamais partagée<?php if ($req) echo ", obligatoire"; ?>)</label> <input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" /></p>
		<p class="clearfix"><label for="url">Site web</label> <input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" /></p>
	<?php endif; ?>

	<p><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea></p>
	<p class="clearfix"><input name="submit" type="submit" id="submit" tabindex="5" value="Envoyer le commentaire" /></p>
	<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />

	<?php do_action('comment_form', $post->ID); ?>
	</form>

<?php endif; endif; ?>
