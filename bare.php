<?php
/*
Template Name: Bare
*/
?>


<?php get_header(); ?>

	<div id="contentfull">
	
	<?php if (have_posts()) : ?>
		
		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
				<h2><?php the_title(); ?></h2>
				
				<div class="entry">
					<?php the_content('<span class="readmore">'.__('Read the rest of this entry &raquo;',TEMPLATE_DOMAIN).'</span>'); ?>
				</div>
			</div>
			
		<?php endwhile; ?>
	
	<?php else : ?>

		<h2><?php _e('Not Found',TEMPLATE_DOMAIN); ?></h2>
		<p><?php _e('Sorry, but you are looking for something that isn\'t here.',TEMPLATE_DOMAIN); ?></p>

	<?php endif; ?>
		
	</div>
		
</div>

<?php get_footer(); ?>