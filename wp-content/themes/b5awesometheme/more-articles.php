<div id="more-news" class="row">
    <div class="col-12">
        <hr class="pt-1">
        <h3>More Articles</h3>
    </div>
    <?php
    // Define our WP Query Parameters
    $query = new WP_Query([
        'posts_per_page' => 8, 'post_type' => 'post',
        'published' => 'published', 'orderby' => 'post_name',
        'order' => 'ASC',
    ]);
    // Check if there are any posts to display
    if ($query->have_posts()) :
    ?>
        <div class="col-12 col-md-9">
            <div class="float-sm-start col-md-6">
                <?php
                global $wp_query;
                $post_id = $wp_query->post->ID;
                $cts = 0;
                // The Loop
                while ($query->have_posts()) : $query->the_post();
                    if ($post->ID !== $post_id) {
                        $cts++;
                        if ($cts > 2) {
                            break;
                        }
                ?>
                        <h5><a class="link-primary" href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>
                        <p><?php echo wp_trim_words(the_excerpt_embed(), 20, '...'); ?></p>
                        <hr>

                <?php
                    }
                endwhile;
                ?>
            </div>
            <div class="float-sm-end col-12 col-md-6 ps-md-2">
                <?php
                $cts = 0;
                // The Loop
                while ($query->have_posts()) : $query->the_post();
                    if ($post->ID !== $post_id) {
                        $cts++;
                        if ($cts > 1) {
                            break;
                        }
                ?>
                        <figure>
                            <a class="link-primary" href="<?php the_permalink() ?>">
                                <div class="col-sm-9 col-md-12 mx-auto">
                                    <?php if (has_post_thumbnail()) {
                                        the_post_thumbnail();
                                    } else { ?>
                                        <img src="<?php bloginfo('template_directory'); ?>/images/default-featured-images.jpg" alt="<?php the_title(); ?>" />
                                    <?php } ?>
                                </div>
                                <figcaption class="fs-6 fst-italic text-center"><?php the_title(); ?></figcaption>
                            </a>
                        </figure>
                <?php
                    }
                endwhile;
                ?>
            </div>
        </div>
        <div class="col-12 col-md-3 right-sidebar">
            <div class="d-flex flex-md-wrap inner overflow-auto">
                <?php
                $cts = 0;
                // The Loop
                while ($query->have_posts()) : $query->the_post();
                    $cts++;
                    if ($post->ID !== $post_id) {
                        $cts++;
                        if ($cts > 3) {
                            break;
                        }
                ?>
                        <div class="col-6 col-md-12">
                            <h5><a class="link-primary" href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>
                            <hr>
                        </div>
                <?php
                    }
                endwhile;
                ?>

            </div>
        </div>
    <?php
        wp_reset_postdata();
    else : no_posts();
    endif;
    ?>
</div>