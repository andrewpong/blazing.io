<?php
$screen = get_current_screen();

$help = <<<HTML
<h2 align="center" style="color:#0c4892">STRIKING FOOTER PANEL</h2>
<p align="justify">Content TBD</p>
<p align="justify">This panel has 2 resource tabs for control of the the footer layout, and subfooter functions. The Subfooter tab contains the settings for the sub-footer widget area. &nbspEach resource tab has a <b>&#34;Help Information&#34;</b> link which you can click on to open/close a dropdown field containing detailed information on the functions of the resource tab, and most settings possess a help field where explanation of the setting is warranted.</p>

HTML;

$screen->add_help_tab( array(
	'id'      => 'footerpanel',
	'title'   => __( 'Striking Footer Panel' ),
	'content' => $help,
) );

// Help tabs

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