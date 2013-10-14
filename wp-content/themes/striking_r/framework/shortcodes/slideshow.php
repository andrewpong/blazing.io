<?php
require_once (THEME_HELPERS . '/slideshowGenerator.php');

function theme_shortcode_slideshow($atts, $content = null){
	if(isset($atts['type'])){
		switch($atts['type']){
			case 'nivo':
				return theme_slideshow_nivo($atts, $content);
			case 'ken':
			case 'anything':
				return theme_slideshow_ken($atts, $content);
		}
	}
	return '';
}
add_shortcode('slideshow', 'theme_shortcode_slideshow');

function theme_slideshow_nivo($atts, $content=null){
	global $wp_filter;
	$the_content_filter_backup = $wp_filter['the_content'];

	extract(shortcode_atts(array(
		'align' => false,
		'number' => -1,
		'width' => '630',
		'height' => '300',
		'source' => '',
		'category' => '',
		'effects' => 'random',
		'slices' => '10',
		'boxcols' => '8',
		'boxrows' => '4',
		'autoplay'=>'true',
		'animspeed' => '500',
		'pausetime' => '3000',
		'directionnav' => 'true',
		'directionnavhide' => 'true',
		'controlnav' => 'true',
		'controlnavhide' => 'true',
		'randomstart'=>'false',
		'pauseonhover' => 'false',
		'stopatend'=>'false',
		'caption' => 'false',
		'captiontype' => 'title',
		'captionopacity' => '0.8'
	), $atts));
	
	if($autoplay === 'true'){
		$autoplay = true;
	}else{
		$autoplay = false;
	}
	if($directionnav==='true'){
		$directionNav = true;
	}else{
		$directionNav = false;
	}
	if($directionnavhide==='true'){
		$directionNavHide = true;
	}else{
		$directionNavHide = false;
	}
	if($controlnav==='true'){
		$controlNav = true;
	}else{
		$controlNav = false;
	}
	if($controlnavhide==='true'){
		$controlNavHide = true;
	}else{
		$controlNavHide = false;
	}
	if($randomstart==='true'){
		$randomStart = true;
	}else{
		$randomStart = false;
	}
	if($pauseonhover==='true'){
		$pauseonhover = true;
	}else{
		$pauseonhover = false;
	}
	if($caption==='true'){
		$caption = true;
	}else{
		$caption= false;
	}


	if($stopatend==='true'){
		$stopAtEnd = true;
	}else{
		$stopAtEnd= false;
	}
	
	/** fix **/
	if(!empty($category)){
		$source = '{s:'.$category.'}'; 
	}
	/** end fix **/
	$options = array(
		'marginTop'=>0,
		'marginBottom'=>0,
		'animSpeed'=>$animspeed,
		'pauseTime'=>$pausetime,
		'pauseOnHover'=>$pauseonhover,
		'autoplay'=>$autoplay,
		'slices'=>$slices,
		'boxCols'=>$boxcols,
		'boxRows'=>$boxrows,
		'effects'=>$effects,
		'width'=>$width,
		'height'=>$height,
		'caption'=>$caption,
		'directionNav' => $directionNav,
		'directionNavHide' => $directionNavHide,
		'controlNav' => $controlNav,
		'controlNavHide' => $controlNav,
		'stopAtEnd'=>$stopAtEnd,
		'randomStart'=>$randomStart,
		'captionType' => $captiontype,
		'captionOpacity'=>$captionopacity
	);
	$images = array();
	if(!empty($source)){
		$images = SlideshowGenerator::get_images($source,$number,'full');
	} 
	
	$content = trim($content);
	$content = !empty($content)?preg_split("/(\r?\n)/", $content):'';
	if(!empty($content) && is_array($content)){
		foreach($content as $image){
			$images[] = array(
				'source' =>array(
					'type'=>'src',
					'value'=>trim(strip_tags($image)),
				),
				'link'=>false,
				'target'=>'_blank',
			);
		}
	}
	$align = $align?' align'.$align:'';
	$navicss = '';
	if($width < 320){
		$navicss = ' mini-width';
	}

	$wp_filter['the_content'] = $the_content_filter_backup;

	return '<div class="slide-shortcode-wrap '.$align.$navicss.'" data-width="'.$width.'" style="width:'.$width.'px;">'.SlideshowGenerator::get_slideshow('nivo',$images,$options).'</div>';
}

function theme_slideshow_ken($atts, $content){
	global $wp_filter;
	$the_content_filter_backup = $wp_filter['the_content'];

	extract(shortcode_atts(array(
		'align' => false,
		'number' => -1,
		'width' => '630',
		'height' => '300',
		'source' => '',
		'category' => '',
		'navi' => 'true',
		'pauseonhover'=>'true',
		'caption' => 'true',
	), $atts));

	if($navi==='true'){
		$navi = 'bullet';
	}else{
		$navi = 'none';
	}
	if($pauseonhover === 'true'){
		$pauseonhover = 'on';
	}else{
		$pauseonhover = 'off';
	}
	if($caption === 'true'){
		$caption = 'true';
	}else{
		$caption = 'false';
	}
	/** fix **/
	if(!empty($category)){
		$source = '{s:'.$category.'}'; 
	}
	/** end fix **/
	$options = array(
		'marginTop' => 0 ,
		'marginBottom' => 0,
		'pauseOnMain' => $pauseonhover,
		'width' => $width,
		'height' => $height,
		'naviType' => $navi,
		'border'=>2,
	);  

	$images = array();
	if(!empty($source)){
		$images = SlideshowGenerator::get_images($source,$number,'full');
	} 
	$content = trim($content);
	$content = !empty($content)?preg_split("/(\r?\n)/", $content):'';
	if(!empty($content) && is_array($content)){
		foreach($content as $image){
			$images[] = array(
				'source' =>array(
					'type'=>'src',
					'value'=>trim(strip_tags($image)),
				),
				'link'=>false,
				'target'=>'_blank',
			);
		}
	}
	$align = $align?' align'.$align:'';

	$navicss = '';
	if($width < 320){
		$navicss = ' mini-width';
	}
	return '<div class="slide-shortcode-wrap '.$align.$navicss.'" style="width:'.$width.'px;">'.SlideshowGenerator::get_slideshow('ken',$images,$options).'</div>';

}

