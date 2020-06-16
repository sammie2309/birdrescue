<?php /* Template Name: Newsletter */?>

<?php get_header();?>

<?php
$args = array('post_type' => "newsletters", 'order' => "ASC");
$loop = new WP_Query($args);
?>

<?php while ($loop->have_posts()): $loop->the_post();?>

<h3><a href="<?php the_permalink();?>"><?=the_title();?></a></h3>

<?=the_excerpt();?>

<hr />

<?php endwhile;?>

<?php wp_reset_postdata();?>

<?php get_footer();?>