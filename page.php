<?php get_header(); ?>

	<?php while(have_posts()) : the_post(); ?>
	
	<div class="post clearfix" id="post-<?php the_ID(); ?>">		
		<!-- <h2 class="title"><?php the_title(); ?></h2> -->
		<div class="entry">
			<?php the_content(); ?>
		</div>
			
	</div> <!-- .post -->
	
	<?php endwhile; ?>

<?php get_footer(); ?>