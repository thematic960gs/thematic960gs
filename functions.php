<?php

//
//  Custom Child Theme Functions
//

// I've included a "commented out" sample function below that'll add a home link to your menu
// More ideas can be found on "A Guide To Customizing The Thematic Theme Framework" 
// http://themeshaper.com/thematic-for-wordpress/guide-customizing-thematic-theme-framework/

// Adds a home link to your menu
// http://codex.wordpress.org/Template_Tags/wp_page_menu
//function childtheme_menu_args($args) {
//    $args = array(
//        'show_home' => 'Home',
//        'sort_column' => 'menu_order',
//        'menu_class' => 'menu',
//        'echo' => true
//    );
//	return $args;
//}
//add_filter('wp_page_menu_args','childtheme_menu_args');

// Unleash the power of Thematic's dynamic classes
// 
// define('THEMATIC_COMPATIBLE_BODY_CLASS', true);
// define('THEMATIC_COMPATIBLE_POST_CLASS', true);

// Unleash the power of Thematic's comment form
//
// define('THEMATIC_COMPATIBLE_COMMENT_FORM', true);

// Unleash the power of Thematic's feed link functions
//
// define('THEMATIC_COMPATIBLE_FEEDLINKS', true);

// add YUI tags and classes 

function childtheme_aboveheader(){ 
	echo '<div id="childtheme-page-wrapper"> <div id="childtheme-header-wrapper" class="container_12"> <div class="grid_12">'; 
	} 
add_action('thematic_aboveheader','childtheme_aboveheader'); 

function childtheme_belowheader(){ 
	echo '</div><!-- .grid_12 --> </div><!-- #childtheme-header-wrapper .container_12 -->';
	echo '<div id="childtheme-content-wrapper" class="container_full"> <div class="container_12">';                                 
	} 
add_action('thematic_belowheader','childtheme_belowheader'); 

function childtheme_abovecontent(){ 
	echo ' <div class="grid_8 alpha">'; 
	} 
add_action('thematic_abovecontent','childtheme_abovecontent'); 

function childtheme_belowcontent(){ 
	echo '</div><!-- .grid_12 -->'; 
	} 
add_action('thematic_belowcontent','childtheme_belowcontent'); 

function childtheme_abovemainasides(){ 
	echo '<div id=aside-wrapper" class="grid_4 omega"> <div id="aside1">'; 
	} 
add_action('thematic_abovemainasides','childtheme_abovemainasides',12); 

function childtheme_betweenmainasides(){ 
	echo '</div><!-- #aside1 --> <div id="aside2">'; 
	} 
add_action('thematic_betweenmainasides','childtheme_betweenmainasides',13); 

function childtheme_belowmainasides_9(){ 
	echo '</div><!-- #aside2 -->'; 
	} 
add_action('thematic_belowmainasides','childtheme_belowmainasides_9',9); 

function childtheme_belowmainasides(){ 
	echo ' </div> <!-- #aside-wrapper -->'; 
	} 
add_action('thematic_belowmainasides','childtheme_belowmainasides'); 

function childtheme_abovefooter(){ 
	echo '</div><!-- .container_12 --></div><!-- #content-wrapper --> <div class="clear"> </div> <div id="footer-wrapper" class="container_full"> <div id="ft" class="container_12">'; 
	} 
add_action('thematic_abovefooter','childtheme_abovefooter'); 

function childtheme_belowfooter(){ 
	echo '</div><!-- ft  --> </div><!-- footer-wrapper --></div><!-- childtheme-page-wrapper -->'; 
	} 
add_action('thematic_belowfooter','childtheme_belowfooter'); 

function childtheme_footer_abovesubsidiary() {
	echo '<div id="subsidiary-wrapper">';
}
add_action('thematic_footer' , 'childtheme_footer_abovesubsidiary', 5);

function childtheme_footer_abovesiteinfo() {
	echo '<div id="siteinfo-wrapper"><div id="siteinfo">';
}
add_action('thematic_footer', 'childtheme_footer_abovesiteinfo', 20);

function childtheme_footer_belowsiteinfo() {
	echo '</div><!-- #siteinfo -->';
	echo '</div><!-- #siteinfo-wrapper -->';
}
add_action('thematic_footer', 'childtheme_footer_belowsiteinfo', 40);

function childtheme_footer_belowsubsidiary() {
	echo '</div> <!-- #subsidiary-wrapper -->';
}
add_action('thematic_footer' , 'childtheme_footer_belowsubsidiary', 15);

function childtheme_before_first_sub(){ 
	echo ' <div class="container_12"> <div class="grid_4 alpha">'; 
	} 
add_action('thematic_before_first_sub','childtheme_before_first_sub'); 

function childtheme_between_firstsecond_sub(){ 
	echo '</div><div class="grid_4">'; 
	} 
add_action('thematic_between_firstsecond_sub','childtheme_between_firstsecond_sub'); 

function childtheme_between_secondthird_sub(){ 
	echo '</div><div class="grid_4">'; 
	} 
add_action('thematic_between_secondthird_sub','childtheme_between_secondthird_sub'); 

function childtheme_after_third_sub(){ 
	echo '</div>'; 
	} 
add_action('thematic_after_third_sub','childtheme_after_third_sub'); 

?>