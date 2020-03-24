<?php
/**
 * The template for displaying all single posts
 *
 */

get_header(); ?>
	    <br>
	    <div class="col-md-12">

	    	<?php if( have_posts()):
	        	while( have_posts() ): the_post(); ?>
		       	<?php
		foreach((get_the_category()) as $category) { ?>
    	<h3><?php echo $category->cat_name . ' '; 
	} ?></h3>
					<a href="<?php the_permalink();?>">
						<h2><?php the_title(); ?></h2>
					</a>
		<?php  the_post_thumbnail(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
	     	<?php endif; ?>
<br>

<!-- END: APPOINRMENT SECTION -->

<?php

$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 3, 'post__not_in' => array($post->ID) ) );
if( $related ) foreach( $related as $post ) {
setup_postdata($post); ?>
 <ul> 
        <li>
        	<?php  the_post_thumbnail(); ?>
        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
            <?php the_content('Read the rest of this entry &raquo;'); ?>
        </li>
    </ul>   
<?php }
wp_reset_postdata(); ?>

<div class="clearfix"></div>
<?php get_footer(); ?>
