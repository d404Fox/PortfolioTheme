
<?php get_header();  ?>

<h2>Index</h2>

<?php

while(have_posts()){
the_post(); ?>

<h2>
    <a href="<?php the_permalink() ?>"><?php  the_title(); ?></a>
</h2>

<?php the_post_thumbnail(); ?>
<?php /* the_content(); */?> 


<?php } ?>



<?php get_footer();  ?>