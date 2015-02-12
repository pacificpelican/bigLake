<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Green Lake
 */

get_header(); ?>
<div class="frontpagesupercontainer" id="containerportplus">
<div class="row" id="frontpagecontent">

	<div id="secondary00" class="widget-area large-6 columns" role="complementary">
		<?php dynamic_sidebar( 'home-widget-0' ); ?>
	</div><!-- #secondary00 -->

	<div id="secondary0zero" class="widget-area large-6 columns" role="complementary">
		<?php dynamic_sidebar( 'home-widget-00' ); ?>
	</div><!-- #secondary00 -->


</div><!-- .row -->

<div class="row">

	<div id="secondary01" class="widget-area large-4 columns" role="complementary">
		<?php dynamic_sidebar( 'home-widget-1' ); ?>
	</div><!-- #secondary01 -->

	<div id="secondary02" class="widget-area large-4 columns" role="complementary">
		<?php dynamic_sidebar( 'home-widget-2' ); ?>
	</div><!-- #secondary02 -->

	<div id="secondary03" class="widget-area large-4 columns" role="complementary">
		<?php dynamic_sidebar( 'home-widget-3' ); ?>
	</div><!-- #secondary03 -->

</div><!-- .row -->


<div class="notrow">
	<div id="greenlakefooter" class="footera-area large-6 notcolumns">
<?php get_footer(); ?>
	</div><!-- #greenlakefooter -->
</div><!-- .row -->

</div><!-- #containerportplus -->
