<?php
   /**
   * The front template file
   *
   */
 ?>
<?php get_header(); ?>
<!-- start Editor’s Pick section -->
<h1><?php the_field('home_title');?></h1>
<div class="col-sm-12 col-xs-12">
  <?php  $args = array(
      'posts_per_page' => 5 );                  
        $query = new WP_Query( $args );
           if( $query->have_posts()):
                while( $query->have_posts() ): $query->the_post(); ?> 
                  <div class ="col-sm-4 col-xs-12">
                     <a href="<?php the_permalink();?>"> <?php the_post_thumbnail(array(370, 280)); ?>
                     <?php
                foreach((get_the_category()) as $category) { 
                    echo $category->cat_name . ' '; 
                } 
                ?> | 
                  <?php $terms = get_the_terms( $post->ID , 'organization' );
                  foreach ( $terms as $term ) {
                  echo $term->name;
                  }
                  ?>  |  
                <?php the_time('y.m.d')?>
                      <h4><?php the_title(); ?></h4>
                    </a>
                  </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
<br>
<!-- End Editor’s Pick Section -->
<!-- Start Features Section  -->
<div class="col-md-12 feature">
	<?php $args = array( 'post_type' => 'feature', 'posts_per_page' => 1 );
		  $the_query = new WP_Query( $args ); 
		 	if ( $the_query->have_posts() ) :
		 		while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		 				<h1><?php echo get_post_type(); ?>s</h1><br>
		 			  <div class="col-md-4">
    		 				<?php the_title(); ?><br><br>
    		 				<button class="button">
    		 			    <a href="<?php the_permalink();?>">Read Feature </a>
    		 			  </button>
		 			  </div>
		 			  <div class="col-md-8">
		 				   <?php the_post_thumbnail(array(770, 385)); ?>
		 			  </div>
		 		<?php endwhile;?> 
		 	<?php endif; ?>
</div>	
<!-- End Features Section  -->
<!-- Start See Past Features Section -->
		<?php  $args = array(
        'posts_per_page' => 3 );                  
       	$wp_query = new WP_Query( $args );
           if( $wp_query->have_posts()):
              	while( $wp_query->have_posts() ): $wp_query->the_post(); ?> 
               		<div class ="col-sm-4 col-xs-12 home-blog">
               			 <a href="<?php the_permalink();?>"> <?php the_post_thumbnail(); ?>
               	 			<h4><?php the_title(); ?></h4>
               	 		</a>
               		</div>
               	<?php endwhile; ?>
           	<?php endif; ?>	
           	<?php wp_reset_query(); ?>
           	<div class="home-blog">
  				    <center>
                <?php $link_request = get_field('past_features');
            		if( $link_request ): ?>
         				   <a href="<?php echo $link_request['url']; ?>" class="button"><?php echo $link_request['title']; ?></a>
                <?php endif; ?>
              </center>	
			     </div>
  <!-- End See Past Features Section -->
  <!-- Start Latest Articles Section -->
       	<h1><?php the_field('latest_articles'); ?></h1>
       	<?php wp_reset_query(); ?>
       	<div class="col-sm-12 col-xs-12">
       	<?php  $args = array(
             	'posts_per_page' => 6 );                  
       	$wp_query = new WP_Query( $args );
           if( $wp_query->have_posts()):
              	while( $wp_query->have_posts() ): $wp_query->the_post(); ?> 
               		<div class ="col-sm-4 col-xs-12">
               			 <a href="<?php the_permalink();?>"> <?php the_post_thumbnail(array(370, 280)); ?>
               			 <?php
								foreach((get_the_category()) as $category) { 
								    echo $category->cat_name . ' '; 
								} 
								?> | 
									<?php $terms = get_the_terms( $post->ID , 'organization' );
									foreach ( $terms as $term ) {
									echo $term->name;
									}
									?>  |  
								<?php the_time('y.m.d')?>
               	 			<h4><?php the_title(); ?></h4>
               	 		</a>
               		</div>
               	<?php endwhile; ?>
           	<?php endif; ?>
        </div>
<!-- End Latest Articles Section -->
<div class="clearfix"></div>
<?php get_footer(); ?>
