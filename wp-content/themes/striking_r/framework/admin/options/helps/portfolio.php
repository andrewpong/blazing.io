<?php
$screen = get_current_screen();

$help = <<<HTML
<h2 align="center" style="color:#0c4892">STRIKING PORTFOLIO PANEL</h2>
<p align="justify">This Portfolio Panel is &#34;central command&#34; for portfolio functionality in the website.  &nbsp;The Portfolio Panel provides a &#34;set and forget&#34; type functionality for various portfolio settings. &nbsp;However, many of these settings have an overide in either the The Portfolio Post Setup & Options Metabox (found in the portfolio post admin panel) or the portfolio shortcode, thus allowing for case by case individualization as circumstances warrant. &nbsp;The panel settings are for such matters as determining what appears in a portfolio list, the height of the thumbnail image, the default lightbox sizes for different media types when a thumbnail is clicked upon and the default behavior of various elements for the single post page.</p>
<p align="justify">There are 9 resource tabs for control of the the various portfolio related functions on a site wide basis. &nbsp;It is helpful to quickly review them in order to assist with understanding all the functionality available in portfolio building. &nbsp;But all have default settings so that work can commence creating portfolios without worrying about having to set each feature, and come back and customize later as required. &nbspSome resource tabs will have a <b>&#34;Help Information&#34;</b> link which opens a help dialogue of information on the functions within the resource tab, and most settings possess a help field when explanation of the setting is warranted.</p>

HTML;

$screen->add_help_tab( array(
	'id'      => 'portfolioipanel',
	'title'   => __( 'Striking Portfolio Panel' ),
	'content' => $help,
) );

// Help tabs

$help  = '<p>' . __('<h2 align="center" style="color:#0c4892">INTRODUCTION</H2>
<p align="justify">A portfolio item is a custom post type created especially for the Striking theme. &nbsp;Its purpose is to allow for creation of varied types of media content that can be displayed in condensed form via a list, and each list item may by choice lead to a full post webpage containing additional content.  &nbsp;The full post can contain expanded descriptive content fully customized as desired. &nbsp;So a portfolio &#34;Item&#34; is simply a post, and like a blog post, it can have short form display (lists, widgets) and long form display with as much content as needed.</p>
<h3>Difference between a Portfolio List and a WP Gallery</h3>
<p align="justify">There is often confusion between a portfolio post and a wp gallery. &nbsp;In fact as noted a portfolio post is a post type in wordpress, whereas a gallery is a display of images and is not a post type at all.  &nbsp;But one can display a portfolio list simply consisting of a group of images, identical on first appearence to a wp gallery and as a result this often confuses people upon the differences between them. &nbsp;So here is some of the key differences: <ol>
<li>A portfolio list can (in Striking) be used to display many types of media including images, audio tracks, different types of videos, pdfs, and more, whereas a wp gallery can display only images;</li>
<li>One can have many different portfolio lists in the body content of a page or post and have them be restricted by lightbox grouping whereas if one inserts multiple wp galleries in a page, they will group automatically into one lightbox if one has selected &#34;Link to Media File&#34; in the wp gallery creation options.</li>
<li>Portfolio lists allow for display be categories and can be filtered and ordered by a very wide range of parameters to display only certain portfolio categories or individual items whereas a wp gallery has no filtering other then the ability to select specific images from the media library.</li>
<li>Each item in a portfolio list can have a caption, a title, a read more button, and excerpt content just like each post in a blog list, whereas a WP Gallery can have only images with captions. &nbsp;Furthermore, the thumbnail image, and read more button for the same item can have different linking actions, none of which is possible with the wp gallery. </li>
<li>The thumbnail image appearing in a portfolio list can perform many functions such as opening a lightbox that displays many types of media, or be a direct link to a page, post or outside url.  &nbsp;An image in a wp gallery can only be static (ie a non-active image just sitting in the page content), open to a bigger version of itself in a lightbox, or open to the image attachment page.</li>
</ol>
<p align="justify">Due to the above characteristics the key positive to portfolios is that they are a huge leap in flexibility for display of mixed media content. &nbsp;The negative of portfolios is that creation is slightly more time consuming, thus making larger portfolio lists requires the creation of many portfolio items, whereas a simple image gallery can be quickly created by grabbing some images from the media library. &nbsp;Creating portfolios requires a greater time investment with the tradeof being much greater utilty and flexibility for display of the content.</p>
<h3 align="center">Portfolio Types and General Information</H3>
 <p align="justify">There are <u>8 different Portfolio Types</u> available in Striking designed to fulfill every conceivable portfolio display requirement.  &nbsp;The <b>Set the Portfolio Type of this Post</b> setting in the <b>Portfolio Post Metabox</b> has a detailed help field discussing the 8 types and the use for each.  &nbsp;After selecting a type in the setting dropdown field its corresponding admin tab (left of that setting dialogue) will become active and this is where the specific settings for that portfolio type can be adjusted.</p>
<p align="justify"><u>Please note it is necessary to set a featured image, and give the portfolio item a title</u> for all Portfolio Types. &nbsp;The Portfolio Type choice determines the action of the featured image thumbnail when selected by a site viewer - it will either open a lightbox with content or transport the website viewer somewhere else in the site, or even to an external url.</p>
<p align="justify">A portfolio list inserted in any page or post content in the site can range in size from just one item in the list to as many as desired. &nbsp;All the settings for creating a list/display of portfolio items in any webpage are found in the portfolio shortcode, and portfolio behaviours that one desires to standardize sitewide for lists or the post page are set in the panel below</p>
<p align="justify">Unless otherwise stated all portfolio list thumbnail images open into a lightbox. &nbsp;In some instances one can set a custom lightbox size in a Portfolio Type tab that will override the defaults found in the <b>Lightbox Dimension Tab</b> below wherein are set the theme defaults for the various portfolio lightbox types.</p>  
<p align="justify">Finally, the portfolio items grouped into a portfolio category are entirely determined by choice -> a portfolio category may be used to group same type items or it can have a mixed group of portfolio types - there are no restrictions of any sort as to what portfolio items are placed into any portfolio category created by you.  &nbsp;Portfolio Categories are like shelves in a bookcase, what is put in them and how they are organized is all according to choice and convenience. &nbsp;Then one uses the Portfolio Shortcode to display the portfolio items, grouped by category(s), or selected individually, as part of the content.</p>').'</p>';

$screen->add_help_tab( array(
	'id'      => 'allaboutportfolio',
	'title'   => __( 'Portfolios Explained' ),
	'content' => $help,
) );


$help  = '<p>' . __('<h2 align="center" style="color:#0c4892">PORTFOLIO ITEM DISPLAY</H2>
<p align="justify">In order to display a portfolio one has to create portfolio items, and then display them using the portfolio shortcode:</p>
<h3>Portfolio Item Creation</h3>
<p align="justify">Creating a portfolio item is very straightforward:
<ol>
<li>Go to Portfolio items-> Add New in the WP admin menu.</li>
<li>Give the Item a title.</li>
<li>Categorize the Item using the <b>Portfolio Categories</b> metabox settings found to the right of the editor.</li>
<li><p>Set a Featured Image using the metabox for this purpose again found to the right of the content editor.  This image will show as the thumbnail image in the portfolio items list. &nbsp;It is important at this stage to have reviewed the <b>Height of Thumbnail Tab</b> below for the thumbnail image size as it varies depending on the number of columns one and whether a full width or sidebar page template.  &nbsp;The featured image loaded should be the same size or larger, and in the same size ratio so that it does not get cropped by the image resizing script.</p>
<p>An example: The featured image size for a one column portfolio in a sidebar page is 600px wide and the theme default height is 350px (which can be adjusted), this is an aspect ratio of 1.71:1. &nbsp;So the featured image should be at least this size or larger, and maintain the same aspect ratio. &nbsp;A featured image of 1200 x 700 would be fine as the aspect ratio is still 1.71:1, and would resize downwards by wordpress to the thumbnail size correctly, but an image of 1200 x 900 would crop (the aspect ratio is 1.33:1) and in the thumbnail a portion of the height would be shaved off distorting the image. &nbsp;If the image was smaller then 600 x 350, it would be magnified by the wp image resizing script and appear fuzzy as a result. &nbsp;The worst option is an image that is both too small and an incorrect aspect ratio as it will both distort in resizing and be cropped!</p></li>
<li>Use the settings in the <b>Portfolio Post Setup & Options Metabox</b> to determine the type of portfolio item, and configure via the appropriate settings. &nbsp;All the settings have very detailed help fields to guide to the appropriate choice(s)(most media can be displayed more then one way and is according to design choice).</li>
<li>Add detail of the portfolio to the content editor. &nbsp;Portfolio posts also have an Excerpt module for creating description content that will only appear in the portfolio list. &nbsp;Choose either or both and fill with content as appropriate. &nbsp;If the Excerpt Metabox is not visible in the <b>Add New Portfolio Item</b> panel, then click on the <b>Screen Options</b> Tab in the upper right hand corner of the url window which will drop down a panel where there are visibility controls for various metaboxes.</li>
<li>Once done, click on the <b>Publish</b> button and the portfolio item has been created.</li>
</ol>
<p align="justify">The process is very straightforward as long as one remembers to size the featured images correctly and after performing a few times, portfolio items typically take less then a minute to create.</p>
') .'</p>';

$screen->add_help_tab( array(
	'id'      => 'portfoliocreation',
	'title'   => __( 'Creating Portfolios' ),
	'content' => $help,
) );



$help  = '<p>' . __('<h2 align="center" style="color:#0c4892">SHOWING THE PORTFOLIOS</h2>
<p align="justify">After creating some portfolio items one uses the portfolio shortcode to embed them in the content of any page or post:
<ol>
<li>Open a page or post to edit (or create a new one)</li>
<li>Go to the shortcode button in the content editor and click on the porfolio shortcode - it will open a dialogue box with the settings for use to configure a portfolio list.  After configuring the settings the shortcode dialogue has a preview button at the bottom which will show how the portfolio will appear in the page. &nbsp;Make any adjustments and then click the <b>Insert</b> button and the portfolio shortcode string will be inserted into the content editor.</li>
<li>Publish the page and all done!</li>
</ol></p>
<h3>The Shortcode String</h3>
<p align="justify">At first, the shortcode string will appear fairly incomprehensible, but experience has shown that users soon start to recognize the shortcode elements, and even just generate them from memory as time progresses. &nbsp;Following are some sample shortcode strings:</p>
<p> - Show a portfolio items list without page navigation:	<code>[portfolio nopaging="true"]</code><br />
This would result in every portfolio item created showing in the one webpage, probably not a desired outcome unless there are only a few.</p>
<p> - Show the portfolio items list sorted with specific categories: <code>
[portfolio cat="document,image" sortable="true"]</code><br />
This would result in a portfolio display having two tabs, each tab being one of the categories and displaying in that tab all the portfolio items assigned to that category.</p>
<p> - Following is a more typical portfolio string one will generate, as it has more of the shortcode settings in effect:<br /> <code>[portfolio column="5" height="275" effect="zoom" max="15" sortable="true" ajax="true" cat="document,image, video,audio" current="image" orderby="author" order="DESC" titleLinkable="true" titleLinkTarget="_blank" desc_length="75" advanceDesc="true" more="true" moreButton="true" lightboxTitle="imagecaption"] </code><br /><br />
Here is what is going on in this string:<ul>
<li><code>portfolio column="5"</code> This is a 5 column portfolio  -> <i>Column</i> setting</li>
<li><code>height="275"</code> with a custom image height of 275px -> <i>Thumbnail Height</i> setting</li>
<li><code>effect="zoom"</code> and an image hover effect of Zoom -> <i>Thumbnail Image Effect</i> setting</li>
<li><code>max="15"</code> which will only show max 15 portfolio items after which it paginates -> <i>Pagination Amount</i> setting</li>
<li><code>sortable="true"</code> the categories will be tabbed -> <i>Enable Sortable Tabbing</i> setting</li>
<li><code>ajax="true"</code> transitions when one clicks on a category tab will be via ajax -> <i>Ajax Sorting Effect</i> setting</li>
<li><code>cat="document,image, video,audio"</code> the categories selected for display are the document, image, video and audio categories -> <i>Category(s)</i> setting</li>
<li><code>current="image"</code> the category that will display when one first lands on the page is the image category thumbnails -> <i>Current Tab</i> setting</li>
<li><code>orderby="author"</code> the actual portfolio items appearing in each category will be ordered by the author who created them -> <i>Portfolio Items Sorting Parameter</i> setting</li>
<li><code>order="DESC"</code> the author alphabetical sorting order will be descending alphabetical form -> <i>Ascending or Descending Order</i> setting</li>
<li><code>titleLinkable="true"</code> the portfolio item title appearing below the thumbnail image will be an active link to the single post webpage -> <i>Title Linkable</i> setting</li>
<li><code>titleLinkTarget="_blank"</code> the portfolio post will open in a new tab -> <i>Title Link Target</i> setting</li>
<li><code>desc_length="75"</code> this indicates that the portfolio excerpt will show a maximum of 75 characters -> <i>Description Length</i> setting</li>
<li><code>advanceDesc="true"</code> shortcodes used in the excerpt field will show correctly in the portfolio list item descriptions -> <i>Enable Shortcode Support in Description Text</i> setting</li>
<li><code>more="true"</code> this short string means that the Read More Text will show -> <i>Display Read More Text</i> setting</li>
<li><code>moreButton="true"</code> this indicates that the Read More Text will be shown within a button -> <i>Display Read More as Button</i> setting</li>
<li><code>lightboxTitle="imagecaption"</code> when a lightbox is opened for any portfolio item in the display the caption of the lightbox will be from the caption field of the media, versus the other options of the media title, or the media description, or nothing at all -> <i>Lightbox Caption Options</i> setting</li>
</ul></p>
<p align="justify"><b>HINT -</b>&nbsp;&nbsp;If one had generated a portfolio string and decides to change an option, it is not necessary to generate a whole new string again. &nbsp;Instead, generate a new portfolio string consisting of just the option needed, and then cut and paste it into the existing string (and don&#180;t forget to delete what is left of the unneeded new portfolio shortcode). &nbsp;This is the quick cheat method to rapid changes to a portfolio shortcode when working to refine the look to exactly what is needed.</p>
<p align="justify"><b>ANOTHER HINT -</b>&nbsp;&nbsp;There are many options to customize the appearence of the portfolio list -> the <b>Color</b> and <b>Font</b> Panels both have settings applicable to portfolio display: there are 9 color settings and 2 font size settings specific to portfolio lists.</p>
') .'</p>';

$screen->add_help_tab( array(
	'id'      => 'portfolioshow',
	'title'   => __( 'Displaying Portfolios in the Website' ),
	'content' => $help,
) );


$help  = '<p>' . __('<h2 align="center" style="color:#0c4892">STRIKING ADMIN OVERVIEW</h2>
<p align="justify">Thank you for your purchase of Striking Premium Responsive Wordpress Theme. &nbsp;The development team behind Striking has been committed for over 3 years to providing wordpress users an enriched, flexible, multipurpose wordpress theme that incorporates functions designed to allow a DIY (&#34;Do It Yourself&#34;) user to format and display their content in interesting ways without requiring any knowledge of the dreaded wordpress &#34;hooks&#34; and &#34;filters&#34; or html, css, php and js.  &nbsp;At the same time, Striking incorporates the necessary tools allowing advanced users and designers who are comfortable with web code to incorporate custom html, css and js into their design: some examples of this are advanced variable functions like inline lightbox capability and assigning classes or id with accompanying custom css to certain shortcode generation.</p>
<p align="justify">To assist all users with their design imperatives, Striking provides 3 resources for configuring the look of a website:</p><ul>
<li><b>Administration Panels</b> - theme level custom settings</li>
<li><b>Metaboxes</b> - page & post level custom settings</li>
<li><b>Shortcodes</b> - content level custom settings</li></ul>
</p>
<p align="justify">Between these 3 resources are hundreds of optional settings that allow one to manipulate the appearence of the website down to the granular level.  Every setting has a preconfigured default, so one can take one&#180;s time to learn how each setting will benefit the customization of a site, without being hindered at the outset of the site implementation.</p>
<p align="justify">The &#34;Help&#34; dropdown at the top of the Striking General Panel has detailed information on the 3 Striking resources and some general Wordpress administration related information for those previously unfamiliar with Wordpress.</p>
') .'</p>';

$screen->add_help_tab( array(
	'id'      => 'overview2',
	'title'   => __( 'Striking Admin' ),
	'content' => $help,
) );

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

unset( $help );

$screen->set_help_sidebar(
	'<p style="margin-top:30px;"><strong>' . __( 'For more information:' ) . '</strong></p>' .
	'<p>' . __( '<a href="http://kaptinlin.com/support" target="_blank">Striking Support Forum</a>' ) . '</p>' .
	'<p>' . __( '<a href="http://www.strikingsupport.com/video-tutorials" target="_blank">Striking Video Tutorials</a>' ) . '</p>' .
	'<p>' . __( '<a href="http://codex.wordpress.org/Dashboard_Screen" target="_blank">Documentation on WP Dashboard</a>' ) . '</p>' .
	'<p>' . __( '<a href="http://wordpress.org/support/" target="_blank">Wordpress.org Support Forums</a>' ) . '</p>'
);