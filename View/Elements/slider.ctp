<?php 
	$dim = 'overflow:hidden; ';

	if (!empty($width)) {
		$unit = !preg_match('/(%|in|cm|mm|em|ex|pt|pc|px)$/i', $width) ? 'px' : '';
		$dim .=  "width: {$width}{$unit}; ";
	}
	
	if (!empty($height)) {
		$unit = !preg_match('/(%|in|cm|mm|em|ex|pt|pc|px)$/i', $height) ? 'px' : '';
		$dim .=  "height: {$height}{$unit}; ";
	}

	if (!empty($styles)) {
		$dim .= "{$styles}";
	}
?>
<div class="slider-wrapper theme-<?php echo $theme; ?>" style="<?php echo $dim; ?>">
	<div id="nivo-slider-<?php echo $id; ?>">
		<?php echo $images; ?>
	</div>
</div>

<script type="text/javascript">
    $(window).load(function() {
        $("#nivo-slider-<?php echo $id; ?>").nivoSlider({

			<?php
				$opts = array();

				foreach ($nivoOptions as $key => $value) {
					if (is_string($value)) {
						$value = "'{$value}'";
					} elseif (is_bool($value)) {
						$value = $value ? 'true' : 'false';
					}

					$opts[] = "{$key}: {$value}";
				}

				echo implode(",\n", $opts);
			?>

		});
    });
</script>