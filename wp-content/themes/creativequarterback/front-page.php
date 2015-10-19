<?php get_header(); ?>


<!-- <section id="section__hero" class="background-cover" style="background-image: url('<?php echo get_bloginfo('template_directory');?>/img/hero-homepage.jpg'); background-repeat: no-repeat;">
	<ul id="section__hero--main" class="wrapper text-center full-height">
		<li class="section__hero--slide full-height vertical-center-parent">
			<div class="section__hero--slide-content-wrap vertical-center">
				<div class="section__hero--slide-content">	
					<h5>Hire the</h5>							
					<h1 class="text-left">Now Generation of Marketing</h1>
					<a class="button" href="<?php the_field('button_link'); ?>"><?php the_field('button_text'); ?></a>
				</div>
			</div>
		</li>
	</ul>
</section> -->


<section id="section__first" class="full-height">
		
					<aside class="section__first--slide background-cover full-height vertical-center-parent" style="background-image: url(<?php echo $image['url']; ?>);" data-stellar-background-ratio="0.75">
						<div class="section__first--slide-content-wrap vertical-center animated fadeInDown">
							<div class="section__first--slide-content">								
								<h1><?php the_field('title'); ?></h1>
								<h5><?php the_field('subtitle'); ?></h5>
									<a class="button caps bg-blue white" style="cursor: pointer;" href="<?php echo $url; ?>"><?php echo $btext; ?></a>
							</div>
						</div>
					</aside>
					<?php endwhile; ?>
				</article>
</section>


<?php
	$page_builder = get_field('page_builder');
	foreach ($page_builder as $key => $section) {
		include('inc-'.$section['acf_fc_layout'].'.php');
	}
?>
	

<?php get_footer(); ?>
