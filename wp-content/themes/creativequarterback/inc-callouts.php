<section id="section__content--callouts">
		<article id="section__content--services--main" class="wrapper">
		<h2 class="fadeIn wow caps text-center"><?=$section['list_title']?></h2>
		<ul id="section__content--services--list" class="column-parent-four-items list-clear equal-height" data-group-by="4">
		<?php 
			foreach ($section['services_list'] as $item => $block) :
		?>
			<li class="column four-item animate fadeIn wow">
				<div class="image"><img src="<?php echo get_bloginfo('template_directory');?>/img/service-icon.png"/></div><aside><h5 class="caps"><?=$block['service_title']?></h5></aside>
			</li>
		<?php
			endforeach;
		?>

		</ul>

	</article>
</section>



