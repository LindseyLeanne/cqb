<section id="section__content--textarea">
		<article id="section__content--textarea--main" class="wrapper">
		<ul id="section__content--text--list">
		<?php 
			foreach ($section['text_list'] as $item => $block) :
		?>
			<li class="animate fadeIn wow">
				<aside><h3><?=$block['text_title']?></h3><?=$block['text']?></aside>
			</li>
		<?php
			endforeach;
		?>

		</ul>

	</article>
</section>
