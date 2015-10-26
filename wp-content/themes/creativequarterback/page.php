<?php get_header();
 /* 
 * The default page template 
 */
?>


<section id="section__first" class="full-height internal">
	<aside class="section__first--slide background-cover full-height vertical-center-parent" style="background-image: url('<?php the_field('image'); ?>'); background-position: center !important;" data-stellar-background-ratio="0.75">
		<div class="section__first--slide-content-wrap vertical-center animated fadeInDown">
			<div class="section__first--slide-content">
				<h1><?php the_field('title'); ?> <span><?php the_field('title_emphasis'); ?></span></h1>
				<h4><?php the_field('subtitle'); ?></h4>
				<?php if ($section['button_text'] !== '') : ?>
				<a class="button green" href="<?php the_field('button_link'); ?>"><?php the_field('button_text'); ?></a>
			<?php endif; ?>
			</div>
		</div>
	</aside>
</section>


<?php
	$page_builder = get_field('page_builder');
	foreach ($page_builder as $key => $section) {
		include('inc-'.$section['acf_fc_layout'].'.php');
	}
?>
	
<?php get_footer(); ?>
