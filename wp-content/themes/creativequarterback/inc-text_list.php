<section id="section__content--list">
		<h4><?=$section['section_subtitle']?></h4>
		<h1><?=$section['section_title']?></h1>
		<article id="section__content--list--main" class="wrapper text-center column-parent-two-items">
		<aside class="column">
		<p><?=$section['section_content']?></p>
		</aside>
		<aside class="column">
		<ul id="section__content--list--list" class="list-clear equal-height">
		<?php 
			foreach ($section['list'] as $item => $block) :
		?>
			<li class="column animate fadeIn wow">
				<?=$section['item']?>
			</li>
		<?php
			endforeach;
		?>

		</ul>
		</aside>

		<?php if ($section['button_text'] !== '') : ?>
		<a class="button bg-green" href="<?=$section['button_link']?>"><?=$section['button_text']?></a>
		<?php endif; ?>

	</article>
</section>
