<?php
/**
 * The template for displaying all single posts
 *
 */

get_header(); ?>
	    <br>
	    <div class="col-md-12">
	<div class="col-md-6">
	    	<?php if( have_posts()):
	        	while( have_posts() ): the_post(); ?>
		       
					<a href="<?php the_permalink();?>">
						<h2><?php the_title(); ?></h2>
					</a>
					<?php the_content(); ?>
				<?php endwhile; ?>
	     	<?php endif; ?>
<br>
   </div>
<!-- END: APPOINRMENT SECTION -->
<div class="col-md-6">
<?php get_sidebar(); ?>
</div>
</div>
<div class="clearfix"></div>
xdzrsgbxfgcvbvc
<?php get_footer(); ?>
