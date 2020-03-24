<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
get_header(); ?>
<div class="col-md-12">
	<center><h1>Category</h1></center>
	<?php
		foreach((get_the_category()) as $category) { ?>
    	<center><h3><?php echo $category->cat_name . ' '; 
	} ?></h3></center>

	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>   
	 <div class ="col-sm-4 col-xs-12">
		<?php  the_post_thumbnail(); ?>
		<div class="col-sm-12 date">
	    	<?php the_time('y.m.d')?>
		</div>	
		<div class="col-sm-12">
        	<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4>
	    	</a>
		</div>
	</div>
		<?php endwhile; ?>
	<?php endif; ?>
	<hr>

</div>
<div class="clearfix"></div>

<?php get_footer();?>
