
<?php get_header(); ?>
<?php
/*
  * Template name: Home
  * */

?>






<?php /*>
<h1>Пагинация для Галерей</h1>
<section>
    <?php //global $query_string; query_posts($query_string.'&posts_per_page=3');

    if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
    elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
    else { $paged = 1; }


    $custom_query = new WP_Query(array('post_type'=>'gallery','posts_per_page'=>'3','paged'=>$paged));


   ?>
    <?php if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
        <!-- Item -->
        <div>
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
            <div class="portfolio-text">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p class="by">by <?php the_author(); ?></p>
                <div class="text">
                    <?php echo ale_trim_excerpt(15); ?>
                </div>
            </div>
        </div>
    <?php endwhile;  endif;  ?>
</section>

<div class="pagination"><?php ale_page_links_custom($custom_query); ?></div>
<?php */?>
<?php get_footer();

