<?php get_header();?>


<?php echo do_shortcode(['foobar']);?>


<?php

$new_post= new Wp_Query(array(
	'post_type'			=> 'pactice',
	  'advert_tag' => 'politics' ,
    'posts_per_page'	=>-1,

	));
 while($new_post->have_posts()):$new_post-> the_post();?>

<?php the_title();?>

<?php endwhile;?>

<?php get_footer();?>

