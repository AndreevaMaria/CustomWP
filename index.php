<?php get_header(); ?>
<div class="row">
    <div class="col-sm-9">
        <?php 
        // цикл для перебора всех записей
        if(have_posts()) : while(have_posts()) : the_post();
        get_template_part('content', get_post_format());
        endwhile; endif;
        ?>
    </div>


<?php get_sidebar(); ?>

<?php get_footer(); ?>