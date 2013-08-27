<?php
class Theme_Metabox_Portfolio extends Theme_Metabox_With_Tabs {
	public $slug = 'portfolio';
	public function config(){
		return array(
			'title' => sprintf(__('%s Portfolio Post Setup & Options','theme_admin'),THEME_NAME),
			'post_types' => array('portfolio'),
			'callback' => '',
			'context' => 'normal',
			'priority' => 'high',
		);
	}
	public function __construct(){
		parent::__construct();
		foreach($this->config['post_types'] as $post_type){
			if (theme_is_post_type($post_type)){
				add_action('admin_init', array(&$this, '_enqueue_assets'));
			}
		}

		/* gallery start */
		//gallery insert image ajax action callback
		add_action('wp_ajax_theme-gallery-get-image', array(&$this,'_gallery_get_image_callback'));
	
		//gallery hook
		if (isset($_GET['gallery_image_upload']) || isset($_POST['gallery_image_upload'])) {
			include_once (THEME_ADMIN_FUNCTIONS . '/gallery-media-upload.php');
		}
		if (isset($_GET['gallery_edit_image'])) {
			wp_enqueue_script('theme-gallery-edit-image', THEME_ADMIN_ASSETS_URI . '/js/gallery-edit-image.js');
			
			wp_enqueue_style('theme-gallery-edit-image', THEME_ADMIN_ASSETS_URI . '/css/gallery-edit-image.css');
		}
		/* gallery end */
	}

	public function _enqueue_assets(){
		wp_enqueue_script('theme-metabox-portfolio', THEME_ADMIN_ASSETS_URI . '/js/metabox_portfolio.js', array('jquery'));
	
		/* gallery start */
		wp_deregister_script('autosave');
		wp_enqueue_script('theme-metabox-portfolio-gallery', THEME_ADMIN_ASSETS_URI . '/js/gallery.js', array('jquery-ui-sortable'));
		wp_enqueue_style('theme-metabox-portfolio-gallery', THEME_ADMIN_ASSETS_URI . '/css/gallery.css');
		
		add_thickbox();
		/* gallery end */
	}

	
	public function _gallery_get_image_callback() {
		$html = $this->_gallery_create_image_item($_POST['id']);
		if (! empty($html)) {
			echo $html;
		} else {
			die(0);
		}
		die();
	}

	// gallery metaboax function
	public function _gallery_create_image_item($attachment_id) {
		$image = & get_post($attachment_id);
		if ($image) {
			$meta = wp_get_attachment_metadata($attachment_id);
			$date = mysql2date(get_option('date_format'), $image->post_date);
			$size = $meta['width'] . ' x ' . $meta['height'] . 'pixel';
			
			include (THEME_ADMIN_AJAX . '/gallery-image-item.php');
		}
	}

	function _option_portfolio_type_gallery_function($value, $default) {
		global $post;
?>
	<li class="theme-option">
		<div id="gallery_actions">
<?php
		global $wp_version;
		if(version_compare($wp_version, "3.5", '<')){
			echo '<a title="Add Media" class="thickbox" id="add_media" href="media-upload.php?post_id='.$post->ID.'&gallery_image_upload=1&type=image&TB_iframe=1&width=640&height=644" style="border:none;text-decoration:none;">
				<input type="button" class="button-primary" value="Add Image" id="add-image" name="add">
			</a>';
		} else {
			echo '<a href="#" class="button theme-add-gallery-button" data-uploader_title="Add Images to gallery" data-uploader_button_text="Add Images" title="Add Image">Add Images</a>';
		}
?>	
		</div>

		<div id="gallery_table_wrapper">
			<table class="widefat gallery_table" cellspacing="0">
				<thead>
					<tr>
						<th width="10" scope="row">&nbsp;</th>
						<th width="70" scope="row">Thumbnail</th>
						<th width="150" scope="row">Title</th>
						<th scope="row">Description</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td colspan="4">
							<div>
								<ul id="images_sortable">
		<?php 
			$image_ids_str = get_post_meta($post->ID, '_image_ids', true);
			if(!empty($image_ids_str)){
				$image_ids = explode(',',str_replace('image-','',$image_ids_str));
				foreach($image_ids as $image_id){
					$this->_gallery_create_image_item($image_id);
				}
			}
		?>
								</ul>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
			<input type="hidden" id="gallery_image_ids" name="_image_ids" value="<?php echo get_post_meta($post->ID, '_image_ids', true);?>">
		</div>
	</li>
<?php
	}

	public function tabs(){
		return array(
			array(
				"name" => __("Portfolio Post Setup",'theme_admin'),
				"options" => array(
					array(
						"name" => __("Display Featured Image on Post Page",'theme_admin'),
						"desc" => __("<p align='justify'>This setting allows you to choose whether to display the Featured Image in in the actual single post. &nbsp;This setting will override the global setting for the same option found in the Portfolio Panel. &nbsp;An example of use-> one may not want the thumbnail image of a video or audio portfolio type to show on the single post page where one has embedded the actual audio or video.</p>",'theme_admin'),
						"id" => "_featured_image",
						"default" => '',
						"type" => "tritoggle",
					),
					array(
						"name" => __("Set the Portfolio Type of this Post",'theme_admin'),
						"desc" => __("<p align='justify'>There are <u>7 different Portfolio Types</u> available in the theme to fulfill every conceivable portfolio display requirement.  &nbsp;One selects the Portfolio Type desired below, which enables that Type&#8216;s admin tab (left of this dialogue) where the specific settings appropriate to that Portfolio Type are found.</p>
<p>Please note one sets a featured image, and gives the portfolio post a title for all Portfolio Types. &nbsp;But the choice of Portfolio Type determine the action of the thumbnail appearing in any portfolio list created in the site.</p>
<p>Also be aware that a portfolio list inserted in any page or post content in the site can have as few or as many items in it as one desires. &nbsp;A portfolio list can consist of just one item, or a hundred, and all the settings for creating a list/display of portfolio items are found in the portfolio shortcode. </p>
<p>Unless otherwise stated below, all portfolio list thumbnail images open into a lightbox. &nbsp;In some instances one sets the lightbox size in a Portfolio Type admin tab. &nbsp;If there is no individual setting, then the lightbox size will be per the settings found in the Advanced Panel->Lightbox Tab. &nbsp;However, below is a setting <em>Restrict Image Lightbox Dimension</em> which provides an override of the themewide settings for an Image Type portfolio item.</p>  
<p>Finally, the items grouped into a portfolio category are entirely determined by you ->a portfolio category may be used to group same type items (ex, oil paintings, nature videos, 3 inch screws) or it can have a mixed group of portfolio types - there are no restrictions of any sort as to what is in a portfolio category.  &nbsp;Portfolio Categories are like shelves in a store, what is put in them is according to how one desires to organize and display.</p>
<p><strong>PORTFOLIO TYPES:</strong><ul>
<li><strong>IMAGE</strong> - The Image portfolio type is dual purpose. &nbsp;One sets it if just  desiring a thumbnail image to open up into a larger size in a lightbox ->the lightbox opening is automatic. &nbsp;The Image type also allows for one to substitute one image for another so that one image shows as the thumbnail in a portfolio list, and another image will show up in the lightbox. &nbsp;The image substitution setting is found within the Image admin tab.</li>
<li><strong>VIDEO</strong> - The theme supports Youtube, Vimeo, and self-hosted mp4 video. &nbsp;The settings for the url link, and lightbox size are found in the Video tab. &nbsp;One loads a featured image to serve as the thumbnail image in the portfolio list, and when a viewer clicks on the image, it opens a lightbox containing the video per the settings in the Video tab. &nbsp;If an mp4 video, it is  recommended you load the video by ftp into a subfolder in your site, and make a note of the file path for the url field in the video admin settings.</li>
<li><strong>AUDIO</strong> - The Audio type allows for one to embed an .mp3 in a pop up lightbox. &nbsp; One still sets a featured image to acts the portfolio list thumbnail for the audio file, and when the thumbnail is clicked, the audio item shows up in a lightbox. &nbsp;The settings for the audio link, autoplay and loop are found in the Audio Tab. &nbsp;It is recommended that one load the mp3 by ftp into a subfolder in your site, and make a note of the file path for the url field in the audio admin settings.</li>
<li><strong>LIGHTBOX</strong> - The Lightbox type is for a wide variety of purposes such as using an iframe or embed code to display a pdf, to use an iframe to display within the frame another url, or for displaying any other content one wants to have show up in an iframe or lightbox. &nbsp;The Iframe url field, lightbox content and width and height fields are found in the Lightbox tab.</li>
<li><strong>LINK</strong> - The Link portfolio type is where one wants to have the portfolio list thumbnail image link to something other then the single portfolio post. &nbsp;So if one sets the Portfolio type to Link, then in the Link settings, one can select linking directly to any site page, category, blog or custom post, or to any other url (internal or external). &nbsp;Like all other portfolio types, you set a featured image so that a thumbnail appears in the list, which when clicked by a site visitor, takes them to the link set in the Link admin tab. &nbsp;Given the purpose of the Link portfolio type (image links to somewhere else in the site typically), there is no lightbox.</li>
<li><strong>PORTFOLIO GALLERY</strong> - this is where one can have gallery of grouped images, which will show up both in the lightbox when the featured image in the list is clicked upon for enlargement, and on the single post page as a gallery displayed in the page body by using the gallery shortcode (which automatically detects the portfolio gallery images). &nbsp;The Portfolio Gallery tab contains the functions for loading the gallery images.</li>
<li><strong>DOCUMENT</strong> - There is no admin tab for a Document type portfolio item as it is a portfolio type whereby when a viewer clicks on the thumbnail in a portfolio list, it transports the viewer directly to the single portfolio post rather then opening up an enlarged version of the thumbnail image in a lightbox.  
<br /><br />The only &#8220;setting&#8221; typically applicable to a Document portfolio type (other then the content one creates in the post body) is the actual loading of a featured image to act as the portfolio list thumbnail. <br /><br />A Document type is similar in function to the Read More button, but by way of the image and is often used when one is not showing the Read More Button in a portfolio list. <br /><br />In summary, a Document portfolio type allows one to have any content one desires in the portfolio post body, and use the Document setting to bring the site viewer directly to the post page when they click on the thumbnail image.</li></ul>
----------------------------
<p>Sometimes there is confusion between the Link and Document portfolio types. &nbsp;The Link type is used to bring the site viewer to another destination within a site or externally when they click on thumbnail image, whereas the Document type is used to bring the viewer to the single portfolio post page.</p>",'theme_admin'),
						"id" => "_type",
						"default" => 'image',
						"options" => array(
							"image" => __('Image','theme_admin'),
							"video" => __('Video','theme_admin'),
							"audio" => __('Audio', 'theme_admin'),
							"lightbox" => __('Lightbox','theme_admin'),
							"link" => __('Link','theme_admin'),
							"gallery" => __('Gallery','theme_admin'),
							"doc" => __('Document','theme_admin'),
						),
						"type" => "select",
					),
					array(
						"name" => __("Breadcrumbs Parent Page",'theme_admin'),
						"desc" => __("<p>If set will enable portfolio items breadcrumbs. The page you choose here will be the parent page of portfolio items on the breadcrumbs.</p>",'theme_admin'),
						"id" => "_breadcrumbs_page",
						"page" => 0,
						"default" => 0,
						"chosen" => "true", 
						"prompt" => __("Default",'theme_admin'),
						"type" => "select",
					),
					array(
						"name" => __("Thumbnail Icon",'theme_admin'),
						"desc" => __("<p>This will override portfolio default icon set in the Portfolio Panel/General Tab - Effect setting.</p>",'theme_admin'),
						"id" => "_icon",
						"default" => 'default',
						"options" => array(
							"default" => __('Default','theme_admin'),
							"zoom" => __('Image','theme_admin'),
							"play" => __('Video','theme_admin'),
							"doc" => __('Document','theme_admin'),
							"link" => __('Link','theme_admin'),
						),
						"type" => "select",
					),
					array(
						"name" => __("Enable Read More",'theme_admin'),
						"desc" => __("<p>If this is on, the Read More button will show. &nbsp;However, the portfolio list shortcode now contains a full array of options related to the Read More button and this setting is mostly left untouched.</p>",'theme_admin'),
						"id" => "_more",
						"default" => "",
						"type" => "tritoggle"
					),
					array(
						"name" => __("Link for Read More",'theme_admin'),
						"id" => "_more_link",
						"default" => "",
						"shows" => array('page','cat','post','manually'),
						"type" => "superlink"
					),
					array(
						"name" => __("Link Target for Read More",'theme_admin'),
						"id" => "_more_link_target",
						"default" => '_self',
						"options" => array(
							"_blank" => __('Load in a new window','theme_admin'),
							"_self" => __('Load in the same frame as it was clicked','theme_admin'),
							"_parent" => __('Load in the parent frameset','theme_admin'),
							"_top" => __('Load in the full body of the window','theme_admin'),
						),
						"type" => "select",
					),
					array(
						"name" => __("Restrict image Lightbox Dimension",'theme_admin'),
						"desc" => __("<p>If you enable this option, the lightbox dimension will be restricted to fit the browser screen size.</p>",'theme_admin'),
						"id" => "_image_lightbox_fittoview",
						"default" => "",
						"type" => "tritoggle"
					),
				),
			),
			array(
				"name" => __("Portfolio Type: Image",'theme_admin'),
				'id' => 'portfolio_type_image',
				"options" => array(
					array(
						"name" => __("Substitute Image for Lightbox (optional)",'theme_admin'),
						"desc" => __("<p>This setting allows one to substitute an alternate image for appearence in the lightbox in place of the featured image of the portfolio post. &nbsp;If not assigned, the featured image will appear in the lightbox.</p>",'theme_admin'),
						"id" => "_image",
						"button" => "Insert Image",
						"default" => '',
						"type" => "upload",
					),
				),
			),
			array(
				"name" => __("Portfolio Type: Video",'theme_admin'),
				'id' => 'portfolio_type_video',
				"options" => array(
					array(
						"name" => __("Video Link for Lightbox",'theme_admin'),
						"desc" => __("<p>Paste the full url of the YouTub, Vimeo or mp4 starting with http://. &nbsp;The mp4 ability is designed for self-hosted video only. &nbsp;Thus one has to have loadedthe mp4 into a root subfolder and noted the url path for this field.</p>",'theme_admin'),
						"size" => 30,
						"id" => "_video",
						"default" => '',
						"class" => 'full',
						"type" => "text",
					),
					array(
						"name" => __("Video Width",'theme_admin'),
						"desc" => __("<p>If you specify a width below, this will override the global configuration per the Advanced Panel/Lightbox settings.</p>",'theme_admin'),
						"id" => "_video_width",
						"default" => "",
						"min" => 0,
						"max" => 960,
						"step" => "1",
						"unit" => 'px',
						"type" => "range",
					),
					array(
						"name" => __("Video Height",'theme_admin'),
						"desc" => __("<p>If you specify a height below, this will override the global configuration per the Advanced Panel/Lightbox settings.</p>",'theme_admin'),
						"id" => "_video_height",
						"default" => "",
						"min" => 0,
						"max" => 960,
						"step" => "1",
						"unit" => 'px',
						"type" => "range",
					),
					array(
						"name" => __("Autoplay",'theme_admin'),
						"id" => "_video_autoplay",
						"desc" => __("<p>Select this if you want the video to start playing as soon as the portfolio item is clicked.</p>",'theme_admin'),
						"default" => 'default',
						"type" => "tritoggle"
					),
				),
			),
			array(
				"name" => __("Portfolio Type: Audio",'theme_admin'),
				'id' => 'portfolio_type_audio',
				"options" => array(
					array(
						"name" => __("Audio Link for Lightbox",'theme_admin'),
						"desc" => __("<p>Paste the full url of the mp3 file into the field below starting with http://. &nbsp;It is recommended that one load the mp3 by ftp into a subfolder in the site, and carefully note the file path for this url field.</p>",'theme_admin'),
						"size" => 30,
						"id" => "_audio",
						"default" => '',
						"class" => 'full',
						"type" => "text",
					),
					array(
						"name" => __("Autoplay",'theme_admin'),
						"id" => "_audio_autoplay",
						"desc" => __("<p>Select this if you want the audio to start playing as soon as the portfolio item is clicked.</p>",'theme_admin'),
						"default" => 'default',
						"type" => "tritoggle"
					),
					array(
						"name" => __("Loop",'theme_admin'),
						"id" => "_audio_loop",
						"desc" => __("<p>Select this if you want the audio to loop when it ends.</p> ",'theme_admin'),
						"default" => 'default',
						"type" => "tritoggle"
					),
				),
			),
			array(
				"name" => __("Portfolio Type: Lightbox",'theme_admin'),
				'id' => 'portfolio_type_lightbox',
				"options" => array(
					array(
						"name" => __("Lightbox iframe href",'theme_admin'),
						"desc" => __("<p>Place the full url of the website into the field, and when a user clicks on the portfolio thumbnail, a lightbox will open with the website contained within the lightbox frame. &nbsp;Another common use is to have the url of a pdf one has loaded into a site folder.  &nbsp;Note the pdf will not display in an iframe, but as a full page with all the adobe pdf settings if its url is put into the href field. &nbsp;If one wants the pdf to open in a lightbox, then use the Lightbox content setting below together with an embed code.</p>",'theme_admin'),
						"id" => '_lightbox_href',
						"size" => 30,
						"default" => '',
						"class" => 'full',
						"type" => "text",
					),
					array(
						"name" => __("Lightbox Content",'theme_admin'),
						"desc" => __("<p>The content placed into the field below will display in the lightbox when the the portfolio list thumbnail is selected.  &nbsp;You can use html and shortcode in this field and style the lightbox as you would any page or post content. &nbsp;A common usage of the lightbox field is for displaying a pdf via embed, and an example code to do such is as follows: <br /><br />&#60;embed src=&#34;http://yourdomain.com/name.pdf&#34; width=&#34;860&#34; height=&#34;1100&#34; &#62;</code><br /><br />With a pdf, one is usually best to specify the height and width within the embed code and not use the same settings below.</p>",'theme_admin'),
						"id" => "_lightbox_content",
						"default" => '',
						"type" => "textarea",
					),
					array(
						"name" => __("Lightbox Width",'theme_admin'),
						"desc" => __("<p>If you specify a number below, this will override the global configuration.</p>",'theme_admin'),
						"id" => "_lightbox_width",
						"default" => "",
						"min" => 0,
						"max" => 960,
						"step" => "1",
						"unit" => 'px',
						"type" => "range",
					),
					array(
						"name" => __("Lightbox Height",'theme_admin'),
						"desc" => __("<p>If you specify a number below, this will override the global configuration.</p>",'theme_admin'),
						"id" => "_lightbox_height",
						"default" => "",
						"min" => 0,
						"max" => 960,
						"step" => "1",
						"unit" => 'px',
						"type" => "range",
					),
				),
			),
			array(
				"name" => __("Portfolio Type: Link",'theme_admin'),
				'id' => 'portfolio_type_link',
				"options" => array(
					array(
						"name" => __("Link for Portfolio item",'theme_admin'),
						"desc" => __("<p>Select whether you wish to link to a page, post, category, or link manually -> where one manually designates the url to be linked.  &nbsp;Upon making a selection another field will appear allowing one to choose the specific page, post or category in a dropdown list.  &nbsp;If manually is selected, a field will appear in which to enter the full url (including http://) for linking.</p>",'theme_admin'),
						"id" => "_link",
						"default" => "",
						"shows" => array('page','post','cat','manually'),
						"type" => "superlink"	
					),
					array(
						"name" => __("Link Target",'theme_admin'),
						"id" => "_link_target",
						"default" => '_self',
						"options" => array(
							"_blank" => __('Load in a new window','theme_admin'),
							"_self" => __('Load in the same frame as it was clicked','theme_admin'),
							"_parent" => __('Load in the parent frameset','theme_admin'),
							"_top" => __('Load in the full body of the window','theme_admin'),
						),
						"type" => "select",
					),
				),
			),
			array(
				"name" => __("Portfolio Type: Gallery",'theme_admin'),
				'id' => 'portfolio_type_gallery',
				"options" => array(
					array(
						"id" => "_image_ids",
						"layout" => false,
						"default" => '',
						"function" => "_option_portfolio_type_gallery_function",
						"type" => "custom",
					),
				),
			),	
		);
	}
}
