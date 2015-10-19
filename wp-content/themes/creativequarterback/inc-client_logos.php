<section id="section__client-carousel" class="info-section bg-white">
	<div class="info-section__content--short wow animated fadeIn">
		<ul id="client-carousel">
			<?php
				$options_client_list = get_field('options_client_list', 'option');
				foreach ($options_client_list as $item => $client) :
			?>
					<li><img src="<?=$client['cl_image']['sizes']['image-0-75']?>" title="<?=$client['cl_name']?>"></li>
			<?php
				endforeach;
			?>
		</ul>
	</div>
</section>