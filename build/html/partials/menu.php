<div class = 'header' id = 'header'>
	<?php
		$logoID = get_field('logo','option');
		$logo =  wp_get_attachment_image_src($logoID,'thumbnail')[0];
	?>
	<div id = 'logo'>
		<img src = "<?php echo $logo;?>" alt = 'site logo'>
	</div>
	<div class = 'navigation'>
		<ul>
			<li class = 'parent-list-item'><a href = '#'>Activities</a></li>
			<li class = 'parent-list-item'><a href = '#'>Accomodations</a></li>
			<li class = 'parent-list-item'><a href = '#'>Vacations</a></li>
			<li class = 'parent-list-item'><a href = '#'>About</a></li>
			<li class = 'parent-list-item'><a href = '#'>Contact</a></li>
		</ul>
	</div>
</div>