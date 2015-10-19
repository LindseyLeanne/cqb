<?php get_header(); ?>




<article id="section__blog">
	<section id="section__blog--post" class="wrapper">
	<!-- <figure>
			<?php 
			if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				the_post_thumbnail();
			} 
			?>
		</figure> -->
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		 
		<!-- <article class="column-parent-halves" id="pagination">
		<div class="column"><?php previous_post_link('<i class="fa fa-angle--left"></i> %link') ?></div>
		<div class="column"><?php next_post_link('%link <i class="fa fa-angle-right"></i>') ?></div>
		</article> -->
		 
		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">


		
		 
		<div id="post" class="text-center">
		
				<h4 class="caps"><?php the_title(); ?></h4>
				<p>Written by <?php the_author_posts_link(); ?> on <?php the_time('l, F jS, Y'); ?> in <?php the_category(', ') ?></p> 

			<?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
			 
			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
			 
			
			 
		</div>
		</div>
		 
	<?php endwhile; else: ?>
		 
		<p>Sorry, no posts matched your criteria.</p>
		 
		<?php endif; ?>
		 
		</div>
	</section>
</article>


	

<?php get_footer(); ?>
