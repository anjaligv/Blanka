<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
<div class="section-main">
    <?php
    $post = get_post($post->ID);
    $title = $post->post_name;
        //$title = get_the_title( $post->ID);
//echo $title;
        get_template_part('template-part/page/page' , $title);
    ?>
</div>
<?php get_footer(); ?>
