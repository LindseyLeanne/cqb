<section id="section__content--services">
		<article id="section__content--services--main" class="wrapper text-center">
		<h4><?=$section['section_subtitle']?></h4>
		<h1><?=$section['section_title']?></h1>
		<p><?=$section['section_content']?></p>
		<ul id="section__content--services--list" class="column-parent-six-items list-clear equal-height" data-group-by="6">
		<?php 
			foreach ($section['services_list'] as $item => $block) :
		?>
			<li class="column six-item animate fadeIn wow">
				<div class="image"><img src="<?=$block['service_icon']?>"/></div><aside><h5 class="caps"><?=$block['service_title']?></h5></aside>
			</li>
		<?php
			endforeach;
		?>

		</ul>
		<a class="button bg-green" href="<?=$section['button_link']?>"><?=$section['button_text']?></a>

	</article>
</section>
