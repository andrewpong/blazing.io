<?php
class Theme_Slideshow_Nivo {
	public $add_script = false ;


	public function __construct(){
		add_action('wp_footer', array($this, 'header'));
	}
	
	public function header() {
		if($this->add_script){
			wp_enqueue_script('nivo-init');
			wp_enqueue_style('nivo-css');
		}
	}
	public function render($images,$options) {
		if(empty($images))
			return '';

		$this->add_script = true;

		$marginTop = 'margin-top:'.$options['marginTop'].'px;';
		$marginBottom = 'margin-bottom:'.$options['marginBottom'].'px;';
		if(!isset($options['width'])){
			$options['width'] = 960;
		}
		$imageW = (int)$options['width'];
		$imageH = (int)$options['height'];

		$sliderW = 'width:'.$imageW.'px;';
		$sliderH = 'height:'.$imageH.'px;';
		/*$images = slideshow_generator('get_images',$category,$number,'full');*/
		$slide_id = md5(serialize($images));
		$caption = $options['caption'];
		$captionOpacity = $options['captionOpacity'];
		$classname = array();
		$captionType = $options['captionType'];
		if($options['directionNavHide']){
			$classname[] = 'direct-hide';
		}
		if($options['controlNavHide']){
			$classname[] = 'control-hide';
		}

		$classname = implode(" ",$classname);
		$options = htmlspecialchars(json_encode($options));

		
		$output = <<<HTML
<div class="nivo-container {$classname}" style="{$marginTop}{$marginBottom}{$sliderW}">
<div id="nivo{$slide_id}" class="nivoSlider" data-options='{$options}'>
HTML;
		$i = 1;
		foreach($images as $image) {
			$image_src = theme_get_image_src($image['source'], array($imageW,$imageH));
			$desc = '';
			if($caption) {
				switch ($captionType) {
					case 'title':
						if(isset($image['title'])){
							$desc = $image['title'];
						}
						break;
					case 'excerpt':
					case 'title_excerpt':
						$desc = "#".$slide_id.$i;
						break;
				}
			}
			if($image['link'] != false){
				$output .= '<a href="'.$image['link'].'" target="'.$image['target'].'"><img src="'.$image_src.'" title="'.$desc.'"/></a>';
			}else{
				$output .= '<img src="'.$image_src.'" title="'.$desc.'"/>';
			}
			$i++;
		}

		$output .= <<<HTML
</div>	
HTML;
		if($caption) {
			$i = 1;
			foreach($images as $image) {
				if($captionType == 'excerpt'){
					$output .= '<div id="'.$slide_id.$i.'" class="nivo-html-caption">';
					$output .= '<div class="nivo-desc">';
					$output .= do_shortcode($image['desc']);
					$output .= '</div>';
					$output .= '</div>';
				}else if($captionType == 'title_excerpt'){
					$output .= '<div id="'.$slide_id.$i.'" class="nivo-html-caption">';
					$output .= '<div class="nivo-title-desc">';
					if(!empty($image['title'])){
						$output .= '<h3 class="nivo-title">'.$image['title'].'</h3>';
					}
					if(!empty($image['desc'])){
						$output .= '<div class="nivo-desc">';
						$output .= do_shortcode($image['desc']);
						$output .= '</div>';
					}
					$output .= '</div>';
					$output .= '</div>';
				}
				$i++;
			}
		}
		
		$output .= <<<HTML
</div>
<style>
#nivo{$slide_id} .nivo-caption {
	opacity: {$captionOpacity};
}
</style>
HTML;
		return $output;
	}
}