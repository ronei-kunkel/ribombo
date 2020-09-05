<?php
/**
 * @package Ribombo
 * @since Ribombo 1.0
 */

get_header();
?>


<div class="container">
<h1>Eventos</h1>
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <?php
                    $my_args = array(
                        'post_type' => 'post',
                        'posts_per_page' => '10',
                        'category_name' => 'eventos',
                        'tag' => 'eventos'
                    );
                    $my_query = new WP_Query ($my_args);

                    if( $my_query->have_posts()):while( $my_query->have_posts()): $my_query->the_post(); ?>
                                
                        <div class="col-md-6">
                            <div class="card mb-3">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-thumbnail', array('class' => 'card-img-top img-fluid')); ?></a>
                                <div class="card-body">
                                    <h5 class="card-title"><?php the_title(); ?></h5>
                                    <a href="<?php the_permalink(); ?>"><button class="btn btn-outline-info">Veja o post</button></a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                        <div class="pagination col-md-5 mb-4">
                            <?php previous_posts_link('< Mais recentes'); ?> <?php next_posts_link('Mais antigos >'); ?>
                        </div>
                    <?php endif;wp_reset_query(); ?> 
            </div>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>
