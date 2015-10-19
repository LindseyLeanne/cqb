<?php get_header();
 /* 
 * The default page template 
 */
?>


<section id="section__first--internal" class="full-height">
				<ul id="section__first--main" class="text-center full-height">
					<li class="section__first--slide background-cover full-height vertical-center-parent" style="background-image: url(<?php the_field('image'); ?>);" data-stellar-background-ratio="0.75">
						<div class="section__first--slide-content-wrap vertical-center animated fadeInDown">
							<div class="section__first--slide-content">
								<h5><?php the_field('keyword'); ?></h5>
								
								<h1><?php the_field('title'); ?></h1>
									<a class="button bg-brown caps" href="<?php the_field('button_url'); ?>"><?php the_field('button_text'); ?></a>
							</div>
						</div>
					</li>
				</ul>
</section>

<?php
	$page_builder = get_field('page_builder');
	foreach ($page_builder as $key => $section) {
		include('inc-'.$section['acf_fc_layout'].'.php');
	}
?>
	
<?php get_footer(); ?>
