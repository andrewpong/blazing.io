<?php
class Theme_Slideshow_Unleash {
	public $add_script = false ;

	public function __construct(){
		add_action('wp_footer', array($this, 'header'));
	}
	public function header() {
		if($this->add_script){
			wp_enqueue_script('unleash-init');
			wp_enqueue_style('unleash-css');
		}
	}

	public function render($images,$options) {
		if(empty($images))
			return '';

		$this->add_script = true;

		$marginTop = 'padding-top:'.$options['marginTop'].'px;';
		$marginBottom = 'padding-bottom:'.$options['marginBottom'].'px;';

		$imagew = (int)$options['imagew'];
		$imageh = (int)$options['imageh'];

		$options['capStyle'] = preg_replace("/[\s]{2,}/","",$options['capStyle']);
		$caption_style = !empty($options['capStyle']) ? 'style="'.$options['capStyle'].'"' : '';
		$caption_css = $options['captionCss'];
		unset($options['capStyle']);
		unset($options['captionCss']);

		$caption = $options['caption'];

		// $title_size = !empty($options['titleSize']) ? 'font-size:'.$options['titleSize'].'px;' : '';
		// $title_color = !empty($options['titleColor']) ? 'color:'.$options['titleColor'].';' : '';

		// unset($options['titleColor']);
		// unset($options['titleSize']);

		$options = htmlspecialchars(json_encode($options));

		$output = <<<HTML
<div class="unleash-slider-wrap" style="{$marginTop}{$marginBottom}">
<div class="unleash-slider-list" data-options='{$options}'>
HTML;
		/*$images = slideshow_generator('get_images',$category,$number,'full');*/

		$i = 1;
		foreach($images as $image) {

			$output .= '<div class="unleash-slider-item item-'.$i.'">';
			$image_src = theme_get_image_src($image['source'], array($imagew,$imageh));
			$output .= '<img src="'.$image_src.'"/>';
			$title = $caption?$image['title']:'';
			$desc = $caption?$image['desc']:'';
			if(!$caption ||(empty($title) && empty($desc))){
				$display_caption = ' unleash-caption-hidden';
			}else{
				$display_caption = '';
			}
			$output .= '<div class="unleash-slider-detail '.$caption_css.$display_caption.'" '.$caption_style.'>';

			if($image['link'] != false){
				$output .= '<h3 class="unleash-slider-caption"><a href="'.$image['link'].'" target="'.$image['target'].'">'.$title.'</a></h3>';
			}else{
				$output .= '<h3 class="unleash-slider-caption">'.$title.'</h3>';
			}

			$output .= empty($desc) ? '' : ('<div class="unleash-slider-desc">'.do_shortcode($desc).'</div>');

			//end unleash slider caption
			$output .= '</div>';
			//end unleash slider item
			$output .= '</div>';
			$i++;
			
		}
		$output .= <<<HTML
</div>
</div>
HTML;
		return $output;
	}
}
