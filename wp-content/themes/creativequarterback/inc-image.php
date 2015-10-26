<section id="section__image" class="full-height" style="background-image: url('<?=$section['image']?>'); background-position: center !important;" data-stellar-background-ratio="0.75">
	<aside class="wrapper section__image--panel background-cover full-height vertical-center-parent">
		<div class="section__image--content-wrap vertical-center animated fadeInDown">
				<?php if ($section['button_text'] !== '') : ?>
				<a class="button-white" href="<?=$section['button_link']?>"><?=$section['button_text']?></a>
			<?php endif; ?>
		</div>
	</aside>
</section>