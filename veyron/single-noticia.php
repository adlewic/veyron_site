<?php 
	get_header();
	if(have_posts()):
		while(have_posts()):
			the_post();
			$seotitle = $post->post_name;
	?>	
			<h1 title="<?php echo esc_html($seotitle); ?>">
				<?php the_title(); ?>
			</h1>
<?php
		endwhile;
	endif;
	?>

<?php get_footer(); ?>