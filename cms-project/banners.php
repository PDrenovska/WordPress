<div class="squarebanner">
	<ul>
		<li>
		<?php 
			$ban1 = get_option('telerik_banner'); 
			$url1 = get_option('telerik_url'); 
			$lab1 = get_option('telerik_lab'); 
			$alt1 = get_option('telerik_alt');
		?>
		<a href="<?php echo ($url1); ?> " title="<?php echo ($lab1); ?>"><img class="scale-with-grid" src="<?php echo ($ban1); ?>" alt="<?php echo ($alt1); ?>" style="vertical-align:bottom;" /></a>
		</li>			
	</ul>
</div>