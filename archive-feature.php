<?php get_header(); ?>	

<center>
	<h1><?php post_type_archive_title();?></h1>
</center>
<?php 
 	$query = new WP_Query( array( 'post_type' => 'feature' ) );
   		if($query->have_posts()): 
 			 while($query->have_posts() ): $query->the_post(); ?>
		   		<div class ="col-sm-4 col-xs-12" >
					<?php  the_post_thumbnail(array(350, 400)); ?>
						<div class="col-sm-12 date">
			    			<?php the_time('y.m.d')?>
						</div>	
					<div class="col-sm-12">
			        	<a href="<?php the_permalink(); ?>"><h4><?php
							foreach((get_the_category()) as $category) { ?>
					    	<?php echo $category->cat_name . ' '; 
							} ?><?php the_title(); ?></h4>
				    	</a>
					</div>
				</div>
			<?php endwhile; 
  		 endif;
wp_reset_postdata(); ?>

<div class="load-more" id="feature">

</div>
<div class="clearfix"></div>
<?php get_footer();?>