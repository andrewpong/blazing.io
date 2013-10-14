<?php
$screen = get_current_screen();

$help = <<<HTML
<h2 align="center" style="color:#0c4892">STRIKING ADMIN OVERVIEW</h2>
<p align="justify">Thank you for your purchase of Striking Premium Responsive Wordpress Theme. &nbsp;The development team behind Striking has been committed for over 3 years to providing wordpress users an enriched, flexible, multipurpose wordpress theme that incorporates functions designed to allow a DIY (&#34;Do It Yourself&#34;) user to format and display their content in interesting ways without requiring any knowledge of the dreaded wordpress &#34;hooks&#34; and &#34;filters&#34; or html, css, php and js.  &nbsp;At the same time, Striking incorporates the necessary tools allowing advanced users and designers who are comfortable with web code to incorporate custom html, css and js into their design: some examples of this are advanced variable functions like inline lightbox capability and assigning classes or id with accompanying custom css to certain shortcode generation.</p>
<p align="justify">To assist all users with their design imperatives, Striking provides 3 resources for configuring the look of a website:</p><ul>
<li><b>Administration Panels</b> - theme level custom settings</li>
<li><b>Metaboxes</b> - page & post level custom settings</li>
<li><b>Shortcodes</b> - content level custom settings</li></ul>
<p align="justify">Between these 3 methods are hundreds of optional settings that allow one to manipulate the appearence of the website down to the granular level.  &nbsp;Every setting has a preconfigured default, so one can take one's time to learn how each setting will benefit the customization of a site, without being hindered at the outset of the site implementation.</p>
<p align="justify">The help tabs to the left provide more detailed information on the 3 Striking resources as well as information on our help policies and some general Wordpress administration related information for those previously unfamiliar with Wordpress.</p>
HTML;

$screen->add_help_tab( array(
	'id'      => 'overview',
	'title'   => __( 'Striking Intro' ),
	'content' => $help,
) );

// Help tabs

$help  = '<p>' . __('<h2 align="center" style="color:#0c4892">THEME SUPPORT</h2>
<p align="justify">Support for Striking is divided into two categories:  Product Support and Custom Support. &nbsp;A free to register support site with a forum is maintained by the Striking Developer for interaction between the theme support staff, and users. &nbsp;Under consideration is a more formalized ticket system and other support devices.</p>
<h3><em>Product Support</em></h3>
<p align="justify">Product Support is free and refers to:<br />
<b>a)</b> <u>Keeping the theme bug free</u> and attending to any bugs that are reported by users.<br />
<b>b)</b> <u>Updating the theme from time to time</u> for changes that have occurred to the wordpress core, to browsers, and to scripts that are incorporated into the theme so that the theme continues to work in good order.<br />
<b>c)</b> <u>Answering general usage questions</u> from users about theme related matters such as where to find a setting or what is the purpose of a setting and its effect.</p>
<p align="justify">Questions on implementation of a feature may or may not fall into the product support category, and are determined on a case by case basis at the sole discretion of the support team. &nbsp;At official release Striking Responsive will include extremely detailed built in help fields for settings,and a video series which will illustrate all core functionality.</p> 
<p align="justify">Past experience via 10,000+ questions has taught the support team that most issues arise when a user is unfamiliar with basic wordpress conventions, has not read the help fields or documentation, or is attempting to customize via custom css/html/js/php or plugins without a good understanding of web code. &nbsp;The support team will usually attempt to point the way towards the wp codex for understanding, point the way to the correct help fields & documentation and expand upon the matter if relevant. &nbsp;Customization matters are dealt with in the Customer Support section below.</p>
<h3><em>Customer Support</em></h3>
<p align="justify"><u>Customer Support refers to anything that is not covered by Product Support.</u> &nbsp;In general, customer support includes the following: custom html/css implementation, website design, website transfer, SEO, requests that involve php or js modifications, anything to do with custom fields and custom post types, 3rd party plugin usage and integration, plugin debugging.  &nbsp;<u>All such requests are paid support.</u> &nbsp;We maintain a free to post open forum where uses can post such questions in order to seek help from each other, and have an extensive library of post forum questions that can assist with many such queries.</p>
<p align="justify">To clarify, the theme is provided &#34;as is&#34;, and any situation wherein one wants to modify the appearence, or a function behaviour, outside of the theme supplied settings range is &#34;customization&#34; and support is normally proferred on a paid basis only. &nbsp;Whether it be changing the size of a title for one specific instance, or loading a new font into the theme, or modifying the header to accept a different object, or difficulty with a plugin, all these and more are work outside of the Striking theme defaults and standing core, and are thus paid support.</p>
<p align="justify">The theme support forum has more detailed information on support topics and at any time a user is welcome to query via the forum tools a support team member on a matter and how it is covered in support policy. &nbsp;The support team has an excellent reputation for providing liberal support in the past, and does intend to continue this tradition but there have been frequent and flagrant abuses of the free support model and so it is trusted that the above guidelines assist all users in determining the nature of what is supported and the appropriate terms of that support.</p>
<p align="justify">Nothing in the policy above is intended to counteract the licensing of the Striking theme by Themeforest and when in doubt the Themeforest licensing shall apply. &nbsp;The Striking theme developer reserves the right to cancel the theme and support at any time without notice. &nbsp;Per Themeforest licensing, successful downloading of the theme package from the Themeforest website fulfills in full all obligations of Themeforest and the Striking developer in respect of the theme product and nothing contained herein this Theme Support policy is intended to imply any other obligation, in whole or in part, otherwise.</p>
') .'</p>';

$screen->add_help_tab( array(
	'id'      => 'theme-support',
	'title'   => __( 'Theme Support' ),
	'content' => $help,
) );


$help  = '<p>' . __('<h2 align="center" style="color:#0c4892">STRIKING ADMINISTRATION PANELS</h2>
<p align="justify">Striking has 13 administration panels (also called screens but we will use <em>panel</em> throughout this theme) which contain between them hundreds of settings and functions organized into tab groupings of related items. &nbsp;Access to the panels is twofold -> via an addition to the WP navigation menu below the Settings nav group under &#34;Striking&#34;, and optionally, as another navigation item in the WP Admin toolbar found at the top of any administration panel. &nbsp;The Striking Advanced Panel ->General Tab has a setting for enabling/disabling the Striking panel links in the admin toolbar.<br /><br />The settings and functions in the Striking panels are typically used to set a behaviour to a characteristic, such as a color, typeface, fontsize, background, or a facet of a content item such as a post featured image position. <b><span style="color:#0c4892">Typically, the settings in the Striking Panels can be viewed as the means for exercising control of the website appearence at a macro level</span></b>.</p>
<br /><div class="strikinghelptable">
<table align="center" border="0" cellpadding="0"> <thead> <tr> <th scope="col" width="100"><strong>Panel</strong></th> <th scope="col" width="500">Purpose</th></thead>
<tr class="odd"> <td >General</td> <td>3 Tabs for control of Header variables including Header Widget Area, Navigation, Favicons, and 3 Tabs: Page Design, Google Analytics & Custom CSS/JS for various theme wide settings.</td></tr>
<tr class="even"> <td>Background</td> <td>Set Backgrounds for Header, Feature Header, Box Mode, Page & Footer</td></tr>
<tr class="odd"> <td>Color</td> <td>10 Color Tabs (Header, Page, Footer....) & 110+ settings for theme color elements</td></tr>
<tr class="even"> <td>Font</td> <td>5 Tabs: General Font Settings (incl Font Awesome activation), Font Size settings. Cufon, @font-face & Google controls</td></tr>
<tr class="odd"> <td>Slider Show</td> <td>General Slideshow Settings + Tabs for Nivo, Ken Burner, Accordion & Roundabout Slider controls</td></tr>
<tr class="even"> <td>Sidebar**</td> <td>3 Tabs for creating & assigning Custom Sidebars to Pages, Posts & Archives</td></tr>
<tr class="odd"> <td>Image</td> <td>For creating and setting default image dimensions used by certain media shortcodes.</td></tr>
<tr class="even"> <td>Media</td> <td>Tabs w/theme settings for each video type (6 supported incl HTML5) and audio</td></tr>
<tr class="odd"> <td>Homepage</td> <td>Settings for designating a site homepage & and using optional quickstart homepage editor</td></tr>
<tr class="even"> <td>Blog</td> <td>8 Tabs for controlling all aspects of Blog appearence and behaviour</td></tr>
<tr class="odd"> <td>Portfolio</td> <td>9 Tabs for controlling all aspects of Portfolio appearence and behaviour</td></tr>
<tr class="even"> <td>Footer</td> <td>Footer options & layouts (16), and Subfooter, Copyright and Sub-Footer Widget Area settings</td></tr>
<tr class="odd"> <td>Advanced**</td> <td>12 Tabs: &nbsp;General (mainly Striking core options), Twitter, Responsive Options, Lightbox Options, Search, MetaBox Display, JS & CSS Optimizers, Save-Import-Export Theme Options, WooCommerce, Archive Titles, Grayscale and Theme Update settings and controls.</td></tr>
</table></div><br />
** The number of tabs in these panels will increase if certain plugins such as Nextgen, and many ecommerce plugins (Woo, WP-Ecommerce, etc) are in use as they generate their own post or archive types. &nbsp;Striking will pick these up as long as a plugin follows WP conventions, providing one the ability to control custom sidebars, search and archive feature header title/text content for the plugin generated content.
') .'</p>';

$screen->add_help_tab( array(
	'id'      => 'striking-panels',
	'title'   => __( 'Striking Panels' ),
	'content' => $help,
) );

$help  = '<p>' . __('<h2 align="center" style="color:#0c4892">STRIKING METABOXES</h2>
<p align="justify">In the edit panel work area when editing a page or a post, one will see new theme related boxes (called metaboxes) added by the theme code, usually placed below the main content editor. &nbsp;An example metabox is the <b>Blog Single Options</b> metabox appearing below the content editor when adding or editing a blog post. &nbsp;Some metaboxes such as the <b>Page General Options</b> metabox appear in almost all work area panels, and others are specific to a type of post being edited.</p>
<p align="justify">The purpose of the metaboxes is to provide settings for applying a behaviour of a charateristic or function specifically to that page or post.  Typically the array of settings will fall into the following purposes:</p><ul>
<li>Some settings will be designed to provide the ability to negate, or oppose a theme setting for the same function/characteristic in a Striking Panel. &nbsp;For example, the Striking Blog Panel contains a setting for setting the conditions of display of the post featured image in the feature header content area. &nbsp;However, the Blog Single Options metabox has a setting which allows for showing the opposite condition of the theme setting.</li>
<li>There are settings will allow for customizing the appearence of that specific page or post, such as assigning a custom sidebar, selecting the type of feature header to be used on the page, loading a special background for that page/post only, setting different background colors, creating custom css only for that page, and many other page specific controls.</li>

<p align="justify">The number of settings in a metabox will vary, ranging for just 1 setting with a selector in the Image Hover Effects Metabox appearing in the Woocommerce Edit Product panel to the 29 settings in 3 tabs appearing in the Page General Options Metabox. <b><span style="color:#0c4892">Thus Striking Metaboxes are intended to provide resources for exercising granular control of website appearence at the page/post level.</span></b></p>
<p align="justify">The table below contains a list of the metaboxes and where they are found. &nbsp;Sometimes the metabox will not display on theme activation, or you may not have a need for it. &nbsp;The appearence of metaboxes, both WP default and Striking, is activated & deactivated by checkboxes in the Screen Options Tab in the upper right handcorner of the administration panel. &nbsp;There is also a setting in the Striking Advanced Panel/Metabox Tab for presets for the Page General Options Metabox.</p>
<div class="strikinghelptable">
<table align="center" border="0" cellpadding="0"> <thead> <tr> <th scope="col" width="100"><strong>Metabox</strong></th> <th scope="col" width="500">Location</th></tr></thead>
<tr class="odd"> <td >Page General Options</td> <td>All Panels for Posts, Pages, Media (attachment), Portfolio Items, Slider Items, Core (Shop,Cart, etc) & Product Pages (Ecommerce Plugins)</td></tr>
<tr class="even"> <td>Blog Single Options</td> <td>Add & Edit Blog Post Panels</td></tr>
<tr class="odd"> <td>Portfolio Post Setup & Options</td> <td>Add & Edit Portfolio Post Panels</td></tr>
<tr class="even"> <td>Slideshow Item Options</td> <td>Add & Edit Slide Panels</td></tr>
<tr class="odd"> <td>Ken Burner Slider Options</td> <td>Add & Edit Slide Panels</td></tr>
<tr class="even"> <td>Image Hover Effect Options</td> <td>WooCommerce Single Product Add & Edit Panels</td></tr>
</table></div>') .'</p>';

$screen->add_help_tab( array(
	'id'      => 'striking-boxes',
	'title'   => __( 'Striking Metaboxes' ),
	'content' => $help,
) );
$help  = '<p>' . __('<h2 align="center" style="color:#0c4892">STRIKING SHORTCODES</h2>
<p align="justify">Different themes have different approaches for enabling assistance in content delivery in a page or post. &nbsp;The wordpress default themes provides only the content editor with a few buttons (an integrated script called "tinymce" provides the buttons and their associated functions) for applying some very basic html to content.  &nbsp;The WP core developers advocate that most other functionality should be obtained by plugins, or editing the core files using the supplied cdoe editor, to customize the look. &nbsp;This approach does not work for the average user for a variety of reasons the list of which is to far to long to go into here.</p>
<p align="justify">Wordpress eventually got the message that this approach was very cumbersome and in WP 2.5 created a shortcode api for plugin developers -> a set of functions within the WP core which developers could hook into and would allow them to create macro codes for use in post content, the goal being to allow an end user to be able to post a short string into the post editor which results in an action or display of some preformatted content. &nbsp;To the &#34;horror&#34; of the WP core team, premium theme developers have come along and used this api along with theme custom code to generate shortcodes for your use without the burden of a plugin (Wordpress does this as well - hence the wp gallery function, but just because they did it did not mean anyone else was supposed to....).</p>
<p align="justify">The Striking Premium Wordpress Theme provides the user with a very significant array of shortcodes for generating varied, unique formatted content into a page or post. &nbsp;<b><span style="color:#0c4892">Access to the Striking shortcodes is via a button appearing in the tinymce button group at the top of the content editor</span></b> -> in the visual mode look for the last button in the first row, with a stylized capital &#34;S&#34; in the button frame, and in the text editor look for the &#34;Shortcodes&#34; button, again last button in the first row.</p>
<p align="justify">Clicking on the shortcode button will open up a list of sub-items, representing shortcode groups such as layouts, columns, typography, etc, and each group leader has in turn more another level of items, representing the actual shortcodes. &nbsp;Selecting one of the shortcodes will cause a dialogue box to open in the url window, containing settings that have selectors or input fields for customizing the shortcode function. &nbsp;The bottom of the dialogue box allows one to cancel the dialogue, preview the result (in the dialogue box) if so desired, and save the shortcode. &nbsp;Saving the shortcode results in a shortcode string being placed into the content editor, and it will appear similar to the following:</p>
<code>[portfolio column="3" max="10" sortable="true" ajax="true" titleLinkable="true" desc_length="50" advanceDesc="true" more="true" lightboxTitle="image" group="true" effect="hover"]</code><br />
<p align="justify">This example is a portfolio shortcode and its code is a set of instructions indicating the formatting and content to be shown in the page at the place the portfolio shortcode is inserted. &nbsp;While at the outset these code strings will be unfamiliar we can advise from user feedback over the years that in fact it takes only a short time for the average person to quickly start to understand the intent of the code, so much so that some users eventually get used to typing in the shortcode strings skipping the shortcode button altogether!! &nbsp;User feedback has been so overwhelmingly in favour of shortcodes (and panels as well as new settings for the metaboxes) given how they simplify matters for non-coders that the number of shortcodes in Striking has grown by at least 40% since theme inception due to the building in of requests from users.</p>
<p align="justify">So whereas Panels provide pan-website level controls, and metaboxes page/post level control, <b><span style="color:#0c4892">Shortcodes are designed to give fine grain formatting control at the content level.</span></b> The following table lists the shortcode groups and their attending shortcodes:</p>
<br /><div class="strikinghelptable">
<table align="center" border="0" cellpadding="0"> <thead> <tr> <th scope="col" width="100"><strong>Shortcode Group</strong></th> <th scope="col" width="500">Shortcodes</th></tr></thead>
<tr class="odd"> <td >Columns</td> <td>22 selectable Column Sizes</td></tr>
<tr class="even"> <td>Layouts</td> <td>19 Layouts of preset column groupings</td></tr>
<tr class="odd"> <td>Dividers</td> <td>6 Divider shortcodes: Simple divider line with top, Divider line, divider line w/padding, Divider Padding, Advanced Divider Line, Clear Both</td></tr>
<tr class="even"> <td>Typography</td> <td>15 shortcodes: Responsive Text, Drop Cap, Blockquote, Pre & Code, Styled List, Icon Font, Icon Text, Icon Link, Highlight, Button, Styled Boxes (Message, Framed, Note) & Tables</td></tr>
<tr class="odd"> <td>Advanced</td> <td>7 shortcodes: Iframe, Google Maps, Lightbox, Google Charts, Tabs, Accordions, Toggles</td></tr>
<tr class="even"> <td>Slideshow</td> <td>2 shortcodes: Nivo and Ken Burner slideshows</td></tr>
<tr class="odd"> <td>Widget</td> <td>12 shortcodes: Search, Contact Form, Twitter, Flickr, Contact Info, Popular Posts, Recent Posts, Portfolio List, Links, Archives, Categories, Recent Comments.</td></tr>
<tr class="even"> <td>Media</td> <td>10 Shortcodes in 3 subgroups: Images, Video and Audio</td></tr>
<tr class="odd"> <td>Blog</td> <td>1 shortcode (with many settings)</td></tr>
<tr class="even"> <td>Portfolio</td> <td>1 shortcode (with many settings)</td></tr>
<tr class="odd"> <td>Sitemap</td> <td>5 shortcodes for different sitemap options:  All, Pages, Categories, Posts, and Portfolio sitemaps.</td></tr>
</table></div><br />
') .'</p>';


$screen->add_help_tab( array(
	'id'      => 'striking-shortcodes',
	'title'   => __( 'Striking Shortcodes' ),
	'content' => $help,
) );

$help  = '<p style="margin-top:30px;">' . __('The left-hand navigation menu provides links to all of the WordPress administration screens, with submenu items displayed on hover. You can minimize this menu to a narrow icon strip by clicking on the Collapse Menu arrow at the bottom.') . '</p>';
$help .= '<p>' . __('Links in the Toolbar at the top of the screen connect your dashboard and the front end of your site, and provide access to your profile and helpful WordPress information.') . '</p>';

$screen->add_help_tab( array(
	'id'      => 'help-navigation',
	'title'   => __('Wordpress Navigation'),
	'content' => $help,
) );

$help  = '<p style="margin-top:30px;">' . __('You can use the following controls to arrange your Dashboard screen to suit your workflow. This is true on most other administration screens as well.') . '</p>';
$help .= '<p>' . __('<strong>Screen Options</strong> - Use the Screen Options tab to choose which Dashboard boxes to show, and how many columns to display.') . '</p>';
$help .= '<p>' . __('<strong>Drag and Drop</strong> - To rearrange the boxes, drag and drop by clicking on the title bar of the selected box and releasing when you see a gray dotted-line rectangle appear in the location you want to place the box.') . '</p>';
$help .= '<p>' . __('<strong>Box Controls</strong> - Click the title bar of the box to expand or collapse it. In addition, some boxes have configurable content, and will show a &#8220;Configure&#8221; link in the title bar if you hover over it.') . '</p>';

$screen->add_help_tab( array(
	'id'      => 'help-layout',
	'title'   => __('Wordpress Layout'),
	'content' => $help,
) );

$help  = '<p style="margin-top:30px;">' . __('The boxes on your Dashboard screen are:') . '</p>';
if ( current_user_can( 'edit_posts' ) )
	$help .= '<p>' . __('<strong>Right Now</strong> - Displays a summary of the content on your site and identifies which theme and version of WordPress you are using.') . '</p>';
if ( current_user_can( 'moderate_comments' ) )
	$help .= '<p>' . __('<strong>Recent Comments</strong> - Shows the most recent comments on your posts (configurable, up to 30) and allows you to moderate them.') . '</p>';
if ( current_user_can( 'publish_posts' ) )
	$help .= '<p>' . __('<strong>Incoming Links</strong> - Shows links to your site found by Google Blog Search.') . '</p>';
if ( current_user_can( get_post_type_object( 'post' )->cap->create_posts ) ) {
	$help .= '<p>' . __('<strong>QuickPress</strong> - Allows you to create a new post and either publish it or save it as a draft.') . '</p>';
	$help .= '<p>' . __('<strong>Recent Drafts</strong> - Displays links to the 5 most recent draft posts you&#8217;ve started.') . '</p>';
}
$help .= '<p>' . __('<strong>WordPress Blog</strong> - Latest news from the official WordPress project.') . '</p>';
$help .= '<p>' . __('<strong>Other WordPress News</strong> - Shows the <a href="http://planet.wordpress.org" target="_blank">WordPress Planet</a> feed. You can configure it to show a different feed of your choosing.') . '</p>';
if ( ! is_multisite() && current_user_can( 'install_plugins' ) )
	$help .= '<p>' . __('<strong>Plugins</strong> - Features the most popular, newest, and recently updated plugins from the WordPress.org Plugin Directory.') . '</p>';
if ( current_user_can( 'edit_theme_options' ) )
	$help .= '<p>' . __('<strong>Welcome</strong> - Shows links for some of the most common tasks when setting up a new site.') . '</p>';

$screen->add_help_tab( array(
	'id'      => 'help-content',
	'title'   => __('Wordpress Content'),
	'content' => $help,
) );

unset( $help );

$screen->set_help_sidebar(
	'<p style="margin-top:30px;"><strong>' . __( 'For more information:' ) . '</strong></p>' .
	'<p>' . __( '<a href="http://codex.wordpress.org/Dashboard_Screen" target="_blank">Documentation on Dashboard</a>' ) . '</p>' .
	'<p>' . __( '<a href="http://wordpress.org/support/" target="_blank">Support Forums</a>' ) . '</p>'
);