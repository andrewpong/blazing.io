<?php
class Theme_Options_Page_Color extends Theme_Options_Page_With_Tabs {
	public $slug = 'color';

	function __construct(){
		$this->name = __('Color Settings','theme_admin');
		parent::__construct();
	}
	function tabs(){
		$options = array(
			array(
				"slug" => 'general',
				"name" => __("Body Elements",'theme_admin'),
				"options" => array(
					array(
						'name' => __("Page Shadowing Effects",'theme_admin'),
						"id" => "has_shadow",
						"desc" => __("<p>This setting enables one to remove the shadowing appearing in the various page elements such as the feature header, footer and sidebar containers. &nbsp;&nbsp;Use of this setting along with the <strong>Gradient</strong> setting below and the <strong>Sidebar Border Color</strong> setting found in the <em>Page Elements & Tags</em> Tab will allow one to have either a complex shadowed look in a site, or set it up for a &#34;Minimalist/Clean Design&#34; appearence wherein many elements appear to float on the page.</p>",'theme_admin'),	
						"default" => true,
						"type" => "toggle"
					),
					array(
						'name' => __("Page Gradient Effects",'theme_admin'),
						"id" => "has_gradient",
						"default" => true,
						"type" => "toggle"
					),
					array(
						"name" => __("1. Boxed layout Background Color",'theme_admin'),
						"desc" => sprintf(__('<p>If you have chosen to have a <a href="%1s" target="_blank">Boxed Layout Appearence</a> for your general site pages then you can use this color picker to select a color for the outer background. &nbsp;&nbsp;Please note this sets the color for the outer margin portion of the page, not for the background area behind the page content.</p><p><p><EM>HINT:</EM>&nbsp;&nbsp;A popular Striking option if using the boxed mode is to set an image background using the <a href="%2s" target="_blank">Boxed Layout Background</a> setting. &nbsp;&nbsp;However, if you choose to set an image for a background rather then a background color, then you should set the boxed layout background color to transparent -> the transparent setting is the little &#34;checkered&#34; box found in the upper right hand corner of the color picker. &nbsp;&nbsp;This disables the default background image loaded by Striking so that your background image will load in its place. ','theme_admin'),admin_url( 'admin.php?page=theme_general&tab=page'),admin_url( 'admin.php?page=theme_background&tab=box')),	
						"id" => "box_bg",
						"default" => "",
						"type" => "color"
					),
					array(
						"name" => __("2. Header Background Color",'theme_admin'),
						"desc" => "",
						"id" => "header_bg",
						"default" => "#fefefe",
						"type" => "color"
					),
					array(
						"name" => __("3. Feature Header Background Color",'theme_admin'),
						"desc" => "",
						"id" => "feature_bg",
						"default" => "#000000",
						"type" => "color"
					),
					array(
						"name" => __("4. Page Background Color",'theme_admin'),
						"desc" => "",
						"id" => "page_bg",
						"default" => "#fefefe",
						"type" => "color"
					),
					array(
						"name" => __("5. Footer Background Color",'theme_admin'),
						"desc" => "",
						"id" => "footer_bg",
						"default" => "#000000",
						"type" => "color"
					),
					array(
						"name" => __("6. Sub Footer Background Color",'theme_admin'),
						"desc" => "",
						"id" => "sub_footer_bg",
						"default" => "",
						"type" => "color"
					),
				),
			),
			array(
				"slug" => 'header',
				"name" => __("Header Elements",'theme_admin'),
				"options" => array(
					array(
						"name" => __("7. Logo Text Color",'theme_admin'),
						"desc" => "",
						"id" => "site_name",
						"default" => "#444444",
						"type" => "color"
					),
					array(
						"name" => __("8. Logo Description Text Color",'theme_admin'),
						"desc" => "",
						"id" => "site_description",
						"default" => "#444444",
						"type" => "color"
					),
					array(
						"name" => __("9. Top Level Menu Text Color",'theme_admin'),
						"desc" => __("<p>This setting enables one to choose a color for the text appearing in the top level navigation menu. &nbsp;&nbsp;The color chosen will apply to all top level navigation text other then the navigation text for the &#34;Current&#34; page (the page one is viewing), which is set separately via the &#34;Current&#34; Menu color setting found below.</p> ",'theme_admin'),	
						"id" => "menu_top",
						"default" => "#000000",
						"type" => "color"
					),
					array(
						"name" => __("10. Top Level Menu Current Text Color",'theme_admin'),
					"desc" => __("<p>Striking  allows one to select a separate color for the top level navigation text of the &#34;Current&#34; (active) page. &nbsp;&nbsp; Thus color chosen using this setting will apply only to the top level navigation text of the page one is actively viewing, and as one surfs to different pages in a site, the top level navigation text color will change accordingly. &nbsp;&nbsp;If a viewer surfs to a subpage, the appropriate top level navigation text will reflect the &#34;Current&#34; color chosen</p> ",'theme_admin'),	
						"id" => "menu_top_current",
						"default" => "#000000",
						"type" => "color"
					),
					array(
						"name" => __("11. Top Level Menu Sub Title Color - &#34;<span class='theme_new_feature'>NEW FEATURE</span>&#34;",'theme_admin'),
						"desc" => "",
						"id" => "menu_top_subtitle",
						"default" => "#000000",
						"type" => "color"
					),
					array(
						"name" => __("12. Top Level Menu Background Color",'theme_admin'),
						"desc" => "",
						"id" => "menu_top_background",
						"default" => "",
						"type" => "color"
					),
					array(
						"name" => __("13. Top Level Menu Hover Color",'theme_admin'),
						"desc" => "",
						"id" => "menu_top_active",
						"default" => "#000000",
						"type" => "color"
					),
					array(
						"name" => __("14. Top Level Menu Sub Title Hover Color - &#34;<span class='theme_new_feature'>NEW FEATURE</span>&#34;",'theme_admin'),
						"desc" => "",
						"id" => "menu_top_subtitle_active",
						"default" => "#000000",
						"type" => "color"
					),
					array(
						"name" => __("15. Top Level Menu Hover Background Color",'theme_admin'),
						"desc" => "",
						"id" => "menu_top_active_background",
						"default" => "",
						"type" => "color"
					),
					array(
						"name" => __("16. Top Level Menu Sub Title Current Color - &#34;<span class='theme_new_feature'>NEW FEATURE</span>&#34;",'theme_admin'),
						"desc" => "",
						"id" => "menu_top_subtitle_current",
						"default" => "#000000",
						"type" => "color"
					),
					array(
						"name" => __("17. Top Level Current Menu Background Color",'theme_admin'),
						"desc" => "",
						"id" => "menu_top_current_background",
						"default" => "",
						"type" => "color"
					),
					array(
						"name" => __("18. Sub Level Menu Color",'theme_admin'),
						"desc" => "",
						"id" => "menu_sub",
						"default" => "#000000",
						"type" => "color"
					),
					array(
						"name" => __("19. Sub Level Menu Background Color",'theme_admin'),
						"desc" => "",
						"id" => "menu_sub_background",
						"default" => "#f5f5f5",
						"type" => "color"
					),
					array(
						"name" => __("20. Sub Level Menu Hover Color",'theme_admin'),
						"desc" => "",
						"id" => "menu_sub_active",
						"default" => "#000000",
						"type" => "color"
					),
					array(
						"name" => __("21. Sub Level Menu Hover Background Color",'theme_admin'),
						"desc" => "",
						"id" => "menu_sub_hover_background",
						"default" => "#dddddd",
						"type" => "color"
					),
					array(
						"name" => __("22. Sub Level Current Menu Hover Color",'theme_admin'),
						"desc" => "",
						"id" => "menu_sub_current",
						"default" => "",
						"type" => "color"
					),
					array(
						"name" => __("23. Sub Level Current Menu Hover Background Color",'theme_admin'),
						"desc" => "",
						"id" => "menu_sub_current_background",
						"default" => "",
						"type" => "color"
					),
				),
			),
			array(
				"slug" => 'feature',
				"name" => __("Feature Header Elements",'theme_admin'),
				"options" => array(
					array(
						"name" => __("Feature Header Title Color",'theme_admin'),
						"desc" => "",
						"id" => "feature_header",
						"default" => "#ffffff",
						"type" => "color"
					),
					array(
						"name" => __("Feature Header Custom Text Color",'theme_admin'),
						"desc" => "",
						"id" => "feature_introduce",
						"default" => "#ffffff",
						"type" => "color"
					),
				),
			),
			array(
				"slug" => 'slideshow',
				"name" => __("Slideshow Elements",'theme_admin'),
				"options" => array(
					array(
						"name" => __("Nivo Slider Loading Background Color",'theme_admin'),
						"desc" => "",
						"id" => "nivo_loading_bg",
						"default" => "#ffffff",
						"type" => "color"
					),
					array(
						"name" => __("Nivo Slider Caption Text Color",'theme_admin'),
						"desc" => "",
						"id" => "nivo_caption_text",
						"default" => "#ffffff",
						"type" => "color"
					),
					array(
						"name" => __("Nivo Slider Caption Background Color",'theme_admin'),
						"desc" => "",
						"id" => "nivo_caption_bg",
						"default" => "rgba(0,0,0,0.8)",
						"type" => "color"
					), 
					array(
						"name" => __("KenBurner Slider Border Color",'theme_admin'),
						"desc" => "",
						"id" => "kenburner_bg",
						"default" => "rgba(50,50,50,0.8)",
						"type" => "color"
					),
					array(
						"name" => __("KenBurner Slider Desc Text Color",'theme_admin'),
						"desc" => "",
						"id" => "kenburner_desc_text",
						"default" => "#ffffff",
						"type" => "color"
					),
					array(
						"name" => __("KenBurner Slider Desc Background Color",'theme_admin'),
						"desc" => "",
						"id" => "kenburner_desc_bg",
						"default" => "rgba(0,0,0,0.3)",
						"type" => "color"
					), 
					array(
						"name" => __("KenBurner Slider Thumbnail Border Color",'theme_admin'),
						"desc" => "",
						"id" => "kenburner_thumbnail_bg",
						"default" => "rgba(50,50,50,0.8)",
						"type" => "color"
					),

					array(
						"name" => __("Accordion Slider Caption Text Color",'theme_admin'),
						"desc" => "",
						"id" => "unleash_caption_text",
						"default" => "#ffffff",
						"type" => "color"
					),
					array(
						"name" => __("Accordion Slider Desc Text Color",'theme_admin'),
						"desc" => "",
						"id" => "unleash_desc_text",
						"default" => "#ffffff",
						"type" => "color"
					),
					array(
						"name" => __("Accordion Slider Caption Background Color",'theme_admin'),
						"desc" => "",
						"id" => "unleash_caption_bg",
						"default" => "rgba(1,1,1,0.4)",
						"type" => "color"
					), 
					array(
						"name" => __("Roundabout Slider Caption Text Color",'theme_admin'),
						"desc" => "",
						"id" => "roundabout_title_text",
						"default" => "#ffffff",
						"type" => "color"
					),
					array(
						"name" => __("Roundabout Slider Desc Text Color",'theme_admin'),
						"desc" => "",
						"id" => "roundabout_desc_text",
						"default" => "#ffffff",
						"type" => "color"
					),
					array(
						"name" => __("Roundabout Slider Caption Background Color",'theme_admin'),
						"desc" => "",
						"id" => "roundabout_caption_bg",
						"default" => "rgba(1,1,1,0.4)",
						"type" => "color"
					), 
				),
			),
			array(
				"slug" => 'page',
				"name" => __("Page Elements & Tags",'theme_admin'),
				"options" => array(
					array(
						"name" => __("Page Text Color",'theme_admin'),
						"desc" => "",
						"id" => "page",
						"default" => "#333333",
						"type" => "color"
					),
					array(
						"name" => __("Page Header Color",'theme_admin'),
						"desc" => "",
						"id" => "page_header",
						"default" => "#333333",
						"type" => "color"
					),
					array(
						"name" => __("Page H1 Color",'theme_admin'),
						"desc" => "",
						"id" => "page_h1",
						"default" => "",
						"type" => "color"
					),
					array(
						"name" => __("Page H2 Color",'theme_admin'),
						"desc" => "",
						"id" => "page_h2",
						"default" => "",
						"type" => "color"
					),
					array(
						"name" => __("Page H3 Color",'theme_admin'),
						"desc" => "",
						"id" => "page_h3",
						"default" => "",
						"type" => "color"
					),
					array(
						"name" => __("Page H4 Color",'theme_admin'),
						"desc" => "",
						"id" => "page_h4",
						"default" => "",
						"type" => "color"
					),
					array(
						"name" => __("Page H5 Color",'theme_admin'),
						"desc" => "",
						"id" => "page_h5",
						"default" => "",
						"type" => "color"
					),
					array(
						"name" => __("Page H6 Color",'theme_admin'),
						"desc" => "",
						"id" => "page_h6",
						"default" => "",
						"type" => "color"
					),
					array(
						"name" => __("Page Link Color",'theme_admin'),
						"desc" => "",
						"id" => "page_link",
						"default" => "#666666",
						"type" => "color"
					),
					array(
						"name" => __("Page Link Hover Color",'theme_admin'),
						"desc" => "",
						"id" => "page_link_active",
						"default" => "#333333",
						"type" => "color"
					),
					array(
						"name" => __("Sidebar Border Color (only for use when Gradient setting is &#34;OFF&#34;)",'theme_admin'),
						"desc" => "",
						"id" => "sidebar_border",
						"default" => "#eee",
						"type" => "color"
					),
					array(
						"name" => __("Sidebar Widget Title",'theme_admin'),
						"desc" => "",
						"id" => "widget_title",
						"default" => "#333333",
						"type" => "color"
					),
					array(
						"name" => __("Sidebar Link Color",'theme_admin'),
						"desc" => "",
						"id" => "sidebar_link",
						"default" => "#666666",
						"type" => "color"
					),
					array(
						"name" => __("Sidebar Link Hover Color",'theme_admin'),
						"desc" => "",
						"id" => "sidebar_link_active",
						"default" => "#333333",
						"type" => "color"
					),
					array(
						"name" => __("Breadcrumbs Text Color",'theme_admin'),
						"desc" => "",
						"id" => "breadcrumbs",
						"default" => "#999999",
						"type" => "color"
					),
					array(
						"name" => __("Breadcrumbs Link Color",'theme_admin'),
						"desc" => "",
						"id" => "breadcrumbs_link",
						"default" => "#999999",
						"type" => "color"
					),
					array(
						"name" => __("Breadcrumbs Link Hover Color",'theme_admin'),
						"desc" => "",
						"id" => "breadcrumbs_active",
						"default" => "#999999",
						"type" => "color"
					),
					array(
						"name" => __("Divider Line Color",'theme_admin'),
						"desc" => "",
						"id" => "divider_line",
						"default" => "#eeeeee",
						"type" => "color"
					),
					array(
						"name" => __("Text Field Color",'theme_admin'),
						"desc" => "",
						"id" => "input_text",
						"default" => "#333333",
						"type" => "color"
					),
				),
			),
			array(
				"slug" => 'blog',
				"name" => __("Blog Specific Elements ",'theme_admin'),
				"options" => array(
					array(
						"name" => __("Blog Post Title Color",'theme_admin'),
						"desc" => "",
						"id" => "entry_title",
						"default" => "#333333",
						"type" => "color"
					),
					array(
						"name" => __("Blog Post Title Hover Color",'theme_admin'),
						"desc" => "",
						"id" => "entry_title_active",
						"default" => "#333333",
						"type" => "color"
					),
					array(
						"name" => __("Blog Meta Link Color",'theme_admin'),
						"desc" => "",
						"id" => "blog_meta_link",
						"default" => "#666666",
						"type" => "color"
					),
					array(
						"name" => __("Blog Meta Link Hover Color",'theme_admin'),
						"desc" => "",
						"id" => "blog_meta_link_active",
						"default" => "#333333",
						"type" => "color"
					),
					array(
						"name" => __("Blog Read More Button Background Color",'theme_admin'),
						"id" => "read_more_bg",
						"default" => "#333333",
						"type" => "color"
					),
					array(
						"name" => __("Blog Read More Button Text Color",'theme_admin'),
						"id" => "read_more_text",
						"default" => "#ffffff",
						"type" => "color"
					),
					array(
						"name" => __("Blog Read More Button Hover Background Color",'theme_admin'),
						"id" => "read_more_active_bg",
						"default" => "#333333",
						"type" => "color"
					),
					array(
						"name" => __("Blog Read More Button Hover Text Color",'theme_admin'),
						"id" => "read_more_active_text",
						"default" => "#ffffff",
						"type" => "color"
					),
					array(
						"name" => __("Blog Frame Background Color",'theme_admin'),
						"id" => "blog_frame_bg",
						"default" => '',
						"type" => "color"
					),
					array(
						"name" => __("Blog Frame Border Color",'theme_admin'),
						"id" => "blog_frame_border_color",
						"default" => '',
						"type" => "color"
					),
					array(
						"name" => __("Blog Divider Line Color",'theme_admin'),
						"id" => "blog_divider_color",
						"default" => '',
						"type" => "color"
					),
				),
			),
			array(
				"slug" => 'portfolio',
				"name" => __("Portfolio Specific Elements",'theme_admin'),
				"options" => array(
					array(
						"name" => __("Portfolio Sortable Header Background Color",'theme_admin'),
						"desc" => "",
						"id" => "portfolio_header_bg",
						"default" => "#eeeeee",
						"type" => "color"
					),
					array(
						"name" => __("Portfolio Sortable Header Text Color",'theme_admin'),
						"desc" => "",
						"id" => "portfolio_header_text",
						"default" => "#666666",
						"type" => "color"
					),
					array(
						"name" => __("Portfolio Sortable Header Hover Background Color",'theme_admin'),
						"desc" => "",
						"id" => "portfolio_header_active_bg",
						"default" => "#eeeeee",
						"type" => "color"
					),
					array(
						"name" => __("Portfolio Sortable Header Hover Text Color",'theme_admin'),
						"desc" => "",
						"id" => "portfolio_header_active_text",
						"default" => "#666666",
						"type" => "color"
					),
					array(
						"name" => __("Portfolio Title Text Color",'theme_admin'),
						"desc" => "",
						"id" => "portfolio_title",
						"default" => "#333333",
						"type" => "color"
					),
					array(
						"name" => __("Portfolio Read More Button Background Color",'theme_admin'),
						"id" => "portfolio_read_more_bg",
						"default" => "#333333",
						"type" => "color"
					),
					array(
						"name" => __("Portfolio Read More Button Text Color",'theme_admin'),
						"id" => "portfolio_read_more_text",
						"default" => "#ffffff",
						"type" => "color"
					),
					array(
						"name" => __("Portfolio Read More Button Hover Background Color",'theme_admin'),
						"id" => "portfolio_read_more_active_bg",
						"default" => "#333333",
						"type" => "color"
					),
					array(
						"name" => __("Portfolio Read More Button Hover Text Color",'theme_admin'),
						"id" => "portfolio_read_more_active_text",
						"default" => "#ffffff",
						"type" => "color"
					),
				),
			),
			array(
				"slug" => 'scrolltop',
				"name" => __("Scroll to Top Button",'theme_admin'),
				"options" => array(
					array(
						"name" => __("Scroll to Top Square Type Background Color",'theme_admin'),
						"desc" => "",
						"id" => "scroll_to_top_bg",
						"default" => "#555555",
						"type" => "color"
					),
					array(
						"name" => __("Scroll to Top Square Type Hover Color",'theme_admin'),
						"desc" => "",
						"id" => "scroll_to_top_hover",
						"default" => "#eeeeee",
						"type" => "color"
					),
				),
			),
			array(
				"slug" => 'tabs',
				"name" => __("Tab & Accordion Color Options",'theme_admin'),
				"options" => array(
					array(
						"name" => __("Tab Border Line Color",'theme_admin'),
						"desc" => "",
						"id" => "tab_border",
						"default" => "#dddddd",
						"type" => "color"
					),
					array(
						"name" => __("Tab Inner highlight Line Color",'theme_admin'),
						"desc" => "",
						"id" => "tab_inner",
						"default" => "transparent",
						"type" => "color"
					),
					array(
						"name" => __("Tab Title Bg Color",'theme_admin'),
						"desc" => "",
						"id" => "tab_bg",
						"default" => "#f5f5f5",
						"type" => "color"
					),
					array(
						"name" => __("Tab Title Text Color",'theme_admin'),
						"desc" => "",
						"id" => "tab_text",
						"default" => "#666666",
						"type" => "color"
					),
					array(
						"name" => __("Tab Current Bg Color",'theme_admin'),
						"desc" => "",
						"id" => "tab_current_bg",
						"default" => "#ffffff",
						"type" => "color"
					),
					array(
						"name" => __("Tab Current Text Color",'theme_admin'),
						"desc" => "",
						"id" => "tab_current_text",
						"default" => "#333333",
						"type" => "color"
					),
					array(
						"name" => __("Tab Content Bg Color",'theme_admin'),
						"desc" => "",
						"id" => "tab_content_bg",
						"default" => "#ffffff",
						"type" => "color"
					),
					array(
						"name" => __("Tab Content Text Color",'theme_admin'),
						"desc" => "",
						"id" => "tab_content_text",
						"default" => "#333333",
						"type" => "color"
					),
					array(
						"name" => __("MiniTab Border Line Color",'theme_admin'),
						"desc" => "",
						"id" => "minitab_border",
						"default" => "#dddddd",
						"type" => "color"
					),
					array(
						"name" => __("MiniTab Inner highlight Line Color",'theme_admin'),
						"desc" => "",
						"id" => "minitab_inner",
						"default" => "transparent",
						"type" => "color"
					),
					array(
						"name" => __("MiniTab Title Bg Color",'theme_admin'),
						"desc" => "",
						"id" => "minitab_bg",
						"default" => "#f5f5f5",
						"type" => "color"
					),
					array(
						"name" => __("MiniTab Title Text Color",'theme_admin'),
						"desc" => "",
						"id" => "minitab_text",
						"default" => "#666666",
						"type" => "color"
					),
					array(
						"name" => __("MiniTab Current Bg Color",'theme_admin'),
						"desc" => "",
						"id" => "minitab_current_bg",
						"default" => "#ffffff",
						"type" => "color"
					),
					array(
						"name" => __("MiniTab Current Text Color",'theme_admin'),
						"desc" => "",
						"id" => "minitab_current_text",
						"default" => "#333333",
						"type" => "color"
					),
					array(
						"name" => __("Accordion Border Line Color",'theme_admin'),
						"desc" => "",
						"id" => "accordion_border",
						"default" => "#dddddd",
						"type" => "color"
					),
					array(
						"name" => __("Accordion Inner highlight Line Color",'theme_admin'),
						"desc" => "",
						"id" => "accordion_inner",
						"default" => "#ffffff",
						"type" => "color"
					),
					array(
						"name" => __("Accordion Title Bg Color",'theme_admin'),
						"desc" => "",
						"id" => "accordion_bg",
						"default" => "#f5f5f5",
						"type" => "color"
					),
					array(
						"name" => __("Accordion Title Text Color",'theme_admin'),
						"desc" => "",
						"id" => "accordion_text",
						"default" => "#666666",
						"type" => "color"
					),
					array(
						"name" => __("Accordion Current Bg Color",'theme_admin'),
						"desc" => "",
						"id" => "accordion_current_bg",
						"default" => "#ffffff",
						"type" => "color"
					),
					array(
						"name" => __("Accordion Current Text Color",'theme_admin'),
						"desc" => "",
						"id" => "accordion_current_text",
						"default" => "#333333",
						"type" => "color"
					),
				),
			),
			array(
				"slug" => 'footer',
				"name" => __("Footer Elements",'theme_admin'),
				"options" => array(
					array(
						"name" => __("Footer Text Color",'theme_admin'),
						"desc" => "",
						"id" => "footer_text",
						"default" => "#ffffff",
						"type" => "color"
					),
					array(
						"name" => __("Footer Widget Title Color",'theme_admin'),
						"desc" => "",
						"id" => "footer_title",
						"default" => "#ffffff",
						"type" => "color"
					),
					array(
						"name" => __("Footer Link Color",'theme_admin'),
						"desc" => "",
						"id" => "footer_link",
						"default" => "#ffffff",
						"type" => "color"
					),
					array(
						"name" => __("Footer Link Hover Color",'theme_admin'),
						"desc" => "",
						"id" => "footer_link_active",
						"default" => "#ffffff",
						"type" => "color"
					),
					array(
						"name" => __("Copyright Text Color",'theme_admin'),
						"desc" => "",
						"id" => "copyright",
						"default" => "#ffffff",
						"type" => "color"
					),
					array(
						"name" => __("Footer Menu Text Color",'theme_admin'),
						"desc" => "",
						"id" => "footer_menu",
						"default" => "#ffffff",
						"type" => "color"
					),
					array(
						"name" => __("Footer Menu Hover Color",'theme_admin'),
						"desc" => "",
						"id" => "footer_menu_active",
						"default" => "#ffffff",
						"type" => "color"
					),
					array(
						"name" => __("Footer Text Field Color",'theme_admin'),
						"desc" => "",
						"id" => "footer_text_field_color",
						"default" => "#ffffff",
						"type" => "color"
					),
				),
			),
		);
		return $options;
	}
}
