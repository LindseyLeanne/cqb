<section id="section__content--text">
		<article id="section__content--services--main" class="wrapper text-center">
		<h4><?=$section['section_subtitle']?></h4>
		<h1><?=$section['section_title']?></h1>
		<p><?=$section['section_content']?></p>
		<?php if ($section['button_text'] !== '') : ?>
			<a class="button bg-green" href="<?=$section['button_link']?>"><?=$section['button_text']?></a>
		<?php endif; ?>

	</article>
</section>
