<?php
/**
 * Template Name: Custom Template
 */
?>

<ul class="bxslider">
	<li><img src="http://localhost/wordpress-themes/wp-content/uploads/2011/07/michelle_049.jpg"></li>
	<li><img src="http://localhost/wordpress-themes/wp-content/uploads/2011/07/100_5540.jpg"></li>
	<li><img src="http://localhost/wordpress-themes/wp-content/uploads/2011/07/dsc04563.jpg"></li>
</ul>

<div class="od_1">123</div>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
