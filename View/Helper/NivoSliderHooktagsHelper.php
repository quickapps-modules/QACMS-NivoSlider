<?php
class NivoSliderHooktagsHelper extends AppHelper {
	private $__count = 0;
	private $__captions = '';

	public function nivo($attr, $content = null, $code = '') {
		$out = '';
		$defaults = array(
			'theme' => 'default',
			'width' => '',
			'height' => '',
			'effect' => 'random',
			'slices' => 15,
			'boxCols' => 8,
			'boxRows' => 4,
			'animSpeed' => 500,
			'pauseTime' => 3000,
			'startSlide' => 0,
			'directionNav' => true,
			'controlNav' => true,
			'controlNavThumbs' => false,
			'pauseOnHover' => true,
			'manualAdvance' => false,
			'prevText' => 'Prev',
			'nextText' => 'Next',
			'randomStart' => false
		);
		$attr = array_merge($defaults, (array)$attr);

		$options['id'] = uniqid();
		$options['theme'] = $attr['theme'];
		$options['width'] = $attr['width'];
		$options['height'] = $attr['height'];
		$options['images'] = "<!-- images -->\n" . $this->hooktags($content) . "\n<!-- /images -->";
		$options['captions'] = $this->__captions;

		unset($attr['theme'], $attr['width'], $attr['height']);

		$options['nivoOptions'] = $attr;

		if (!$this->__count) {
			$out .= $this->_View->Html->script('/nivo_slider/js/nivo-slider/jquery.nivo.slider.pack.js') . "\n";
			$out .= $this->_View->Html->css('/nivo_slider/css/nivo-slider/nivo-slider.css') . "\n";
			$out .= $this->_View->Html->css("/nivo_slider/css/nivo-slider/themes/{$options['theme']}/{$options['theme']}.css") . "\n";
		}		

		$out .= $this->_View->element('NivoSlider.slider', $options);
		$this->__count++;
		$this->__captions = '';

		return $out;
	}

	// [image]http://www.example.com/image.jpg[/image]
	public function image($attr, $content = null, $code = '') {
		$out = '';
		$caption = '';
		$defaults = array(
			'link' => '',
			'caption' => ''
		);
		$attr = array_merge($defaults, (array)$attr);

		if (!empty($attr['link'])) {
			$image_options['url'] = $attr['link'];
		}

		if (!empty($attr['caption'])) {
			$the_caption = $attr['caption'];
			$attr['caption'] = uniqid();
		}

		$image_options['title'] = $attr['caption'];
		$out .= $this->Html->image(trim($content), $image_options);

		if (isset($the_caption)) {
			$caption .= '<div id="' . $attr['caption'] . '">' . $the_caption . '</div>';
		}

		$this->__captions .= $caption . "\n";

		return $out;
	}
}