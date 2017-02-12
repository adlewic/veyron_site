<?php 
	get_header(); 
	if(have_posts()):
		while(have_posts()):
			the_post();
			$posttype = get_post_type($post->post_ID);
	?>
			<h1 title="<?php echo esc_html($posttype); ?>">
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</h1>
<?php
		endwhile;
	endif;		
?>

<?php get_footer(); ?>