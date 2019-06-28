<?php
$slider = get_field('slider');

?>
<div class = 'page-view homepage'>
	<div class = 'slider-container'>
		<div class = 'swiper-container'>
			<i class = 'fa fa-chevron-right next-slide' ></i>
			<i class = 'fa fa-chevron-left previous-slide'></i>
			<div class = 'swiper-wrapper'>
				<?php
					foreach($slider as $slide){
						$sliderImageID = $slide['slider_image'];
						$sliderImage = wp_get_attachment_image_src($sliderImageID,'full')[0];
						$sliderHeader = $slide['slider_header'];
						$sliderSubHeader = $slide['slider_sub_heading'];
						$sliderTime = $slide['slider_time'];
						$sliderLink = $slide['slider_link'];
						?>
							<div class = 'swiper-slide' style = "background-image:URL('<?php echo $sliderImage;?>');">
								<div class = 'slider-content'>
									<div class = 'slider-header'>
										<p><?php echo $sliderHeader;?></p>
									</div>
									<div class = 'slider-sub-heading'>
										<p><?php echo $sliderSubHeader;?></p>
									</div>
									<div class = 'slider-time'>
										<p><?php echo $sliderTime;?></p>
									</div>
									<div class = 'slider-link'>
										<a href = "<?php echo $sliderLink;?>" class = 'learn-more'>LEARN MORE</a>
									</div>
								</div>

							</div>
						<?php
					}
				?>
			</div>
		</div>
	</div>	
	<div class = 'under-slider'>
		<?php
			$underSliderPara = get_field('under_slider_pargraph_text');
			$underSliderHeader = get_field('under_slider_header_text');
		?>
		<div class = 'under-slider-para'>
			<p><?php echo $underSliderPara;?></p>
		</div>
		<div class = 'under-slider-header'>
			<h5><?php echo $underSliderHeader;?></h5>
		</div>
	</div>
	<div class = 'four-icons'>
		<?php 
			$icons = get_field('4_icons');
		?>
		<div class = 'icons-wrapper'>
			<?php
				foreach($icons as $icon){
					$iconImageID = $icon['icon'];
					$iconImage = wp_get_attachment_image_src($iconImageID,'full')[0];
					$iconHeader = $icon['header'];
					$iconText = $icon['text'];
					?>
					<div class = 'icon'>
						<div class = 'icon-image'>
							<img src = "<?php echo $iconImage;?>" alt = 'icon image'>
						</div>
						<div class = 'icon-header'>
							<p><?php echo $iconHeader;?></p>
						</div>
						<div class = 'icon-text'>
							<p><?php echo $iconText;?></p>
						</div>
					</div>
					<?php
				}
			?>
		</div>
	</div>
</div>
