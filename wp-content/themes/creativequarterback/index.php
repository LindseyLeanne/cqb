<?php get_header(); ?>




<section id="section__first" class="full-height">
		
					<aside class="section__first--slide background-cover full-height vertical-center-parent" style="background-image: url("<?php the_field('image'); ?>");" data-stellar-background-ratio="0.75">
						<div class="section__first--slide-content-wrap vertical-center animated fadeInDown">
							<div class="section__first--slide-content">								
								<h1><?php the_field('title'); ?></h1>
								<h5><?php the_field('subtitle'); ?></h5>
								
							</div>
						</div>
					</aside>
					<?php endwhile; ?>
				</article>
</section>

<!-- 
<?php
	$page_builder = get_field('page_builder');
	foreach ($page_builder as $key => $section) {
		include('inc-'.$section['acf_fc_layout'].'.php');
	}
?> -->
	

<?php get_footer(); ?>
