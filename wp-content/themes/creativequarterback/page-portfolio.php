<?php
/*
Template Name: The Portfolio
*/
get_header(); ?>
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

<?php get_footer(); ?>
