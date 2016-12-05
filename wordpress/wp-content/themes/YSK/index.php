/*
Theme Name: Replace with your Theme's name.
Theme URI: Your Theme's URI
Description: A brief description.
Version: 1.0
Author: You
Author URI: Your website address.
*/

<?php get_header(); ?>

  <div class="row">

    <div class="col-sm-8 blog-main">

      <?php get_template_part( 'content', get_post_format() ); ?>

    </div> <!-- /.blog-main -->

    <?php get_sidebar(); ?>

  </div> <!-- /.row -->

<?php get_footer(); ?> 
