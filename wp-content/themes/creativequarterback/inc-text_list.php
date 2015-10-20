<section id="section__content--services">
		<article id="section__content--services--main" class="wrapper">
		<h5>Who We are & What We Do</h5>
		<h1>Where Right Brain Meets Left Brain</h1>
		<ul id="section__content--services--list" class="column-parent-six-items list-clear equal-height" data-group-by="4">
		<?php 
			foreach ($section['services_list'] as $item => $block) :
		?>
			<li class="column six-item animate fadeIn wow">
				<div class="image"><img src="<?=$block['service_image']?>"/></div><aside><h5 class="caps"><?=$block['service_title']?></h5></aside>
			</li>
		<?php
			endforeach;
		?>

		</ul>
		<a class="button bg-green" href="#">The Full Service Suite</a>

	</article>
</section>
