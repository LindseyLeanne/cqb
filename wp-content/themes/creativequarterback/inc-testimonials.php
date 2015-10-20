<section <?=(($section['section_id']) ? 'id="' . $section['section_id'] . '"' : '')?> class="testimonials-container">
	<div class="testimonial-slideshow max-width-wrap wow animated fadeIn wrapper">
		<?php
			foreach($section['testimonial'] as $key => $testimonial) :
				$testimonial_hasimage = (!empty($testimonial['testimonial_image'])) ? true : false;
		?>
				<article class="float-parent testimonial-slide vertical-align-parent <?=(($testimonial_hasimage) ? 'testimonial--has-image' : 'testimonial');?>">
					<div class="testimonial__content">
						<?=(($testimonial_hasimage) ? '<img class="testimonial__image" src="' . $testimonial['testimonial_image']['sizes']['image-120-120'] . '" title="' . $testimonial['testimonial_organization'] . '">' : '');?>
						<div class="testimonial__quote__p"><?=do_shortcode($testimonial['testimonial_quote'])?></div>
						<h5><?=$testimonial['testimonial_name']?>, <?=$testimonial['testimonial_org']?></h5>
					</div>
				</article>
		<?php
			endforeach;
		?>
	</div>
</section>