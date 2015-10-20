<section id="section__content--imagecountdown" style="background-image: url(<?=$section['section_image']?>); background-size: cover; background-position: center !important; repeat: no-repeat;" data-stellar-background-ratio="0.75">
	<article id="section__content--imagecountdown--main">
		<a class="button-white" href="<?=$section['button_link']?>"><?=$section['button_text']?></a>

		<aside id="section__content--imagecountdown--countdown">
			<div class="wrapper">
				<h4 class="text-center"><?=$section['countdown_title']?></h4>
				<ul id="section__content--imagecountdown--countdown--list" class="column-parent-seven-items list-clear equal-height" data-group-by="7">
				<?php 
					foreach ($section['countdown_list'] as $item => $block) :
				?>
					<li class="column seven-item animate fadeIn wow">
						<h2 class="caps color-white"><?=$block['number']?></h2><h6><?=$block['description']?></h6>
					</li>
				<?php
					endforeach;
				?>

				</ul>
			</div>
		</aside>

	</article>
</section>
