<div class="col-12 col-lg-3 pt-2 pt-lg-0 r-sidebar">
    <div class="row ms-lg-1 inner">
        <div class="col-12">
            <h3>Trending</h3>
        </div>
        <?php
        // Define our WP Query Parameters
        $query = new WP_Query([
            'posts_per_page' => 8, 'post_type' => 'post',
            'published' => 'published', 'orderby' => 'post_date',
            'order' => 'DESC',
        ]);
        // Check if there are any posts to display
        if ($query->have_posts()) :
        ?>
            <div class="col-12">
                <?php
                global $wp_query;
                $post_id = $wp_query->post->ID;
                $cts = 0;
                // The Loop
                while ($query->have_posts()) : $query->the_post();
                    if ($post->ID !== $post_id) {
                        $cts++;
                        if ($cts > 1) {
                            break;
                        }
                ?>
                        <a class="link-secondary" href="<?php the_permalink() ?>">
                            <div class="col-sm-9 col-md-12 mx-auto">
                                <?php if (has_post_thumbnail()) {
                                    the_post_thumbnail();
                                } else { ?>
                                    <img class="attachment-post-thumbnail size-post-thumbnail wp-post-image" src="<?php bloginfo('template_directory'); ?>/images/default-featured-images.jpg" alt="<?php the_title(); ?>" />
                                <?php } ?>
                            </div>
                            <h4><?php the_title(); ?></h4>
                            <p><?php echo wp_trim_words(the_excerpt_embed(), 20, '...'); ?></p>
                        </a>
                        <hr>
                <?php
                    }
                endwhile;
                ?>
            </div>
            <div class="col-12">
                <div class="row">
                    <?php
                    $cts = 0;
                    // The Loop
                    while ($query->have_posts()) : $query->the_post();
                        if ($post->ID !== $post_id) {
                            $cts++;
                            if ($cts > 2) {
                                break;
                            }
                    ?>
                            <div class="col-6">
                                <a class="link-secondary" href="<?php the_permalink() ?>">
                                    <div class="col-sm-8 col-md-12 mx-auto" style="width:100px;height: 100px;overflow:hidden">
                                        <?php if (has_post_thumbnail()) {
                                            ?>
                                            <img width="100" height="100" src="<?php echo the_post_thumbnail_url() ?>" alt="">
                                            <?php 
                                        } else { ?>
                                            <img width="100" height="100" src="<?php bloginfo('template_directory'); ?>/images/default-featured-images.jpg" alt="<?php the_title(); ?>" />
                                        <?php } ?>
                                    </div>
                                    <h6><?php the_title(); ?></h6>
                                </a>
                            </div>
                    <?php
                        }
                    endwhile;
                    ?>
                    <div class="col-12">
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <?php
                    $cts = 0;
                    // The Loop
                    while ($query->have_posts()) : $query->the_post();
                        $cts++;
                        if ($cts > 4) {
                            break;
                        }
                    ?>
                        <div class="col-12">
                            <a class="d-block link-secondary overflow-hidden" style="text-overflow:ellipsis" href="<?php the_permalink() ?>">
                                <h6 class="text-transform-upper"><?php echo wp_trim_words(get_the_title(), 20, '...'); ?></h6>
                                <span class="text-nowrap">
                                    <?php echo wp_trim_words(the_excerpt_embed(), 20, '...'); ?>
                                </span>
                            </a>
                            <hr>
                        </div>
                    <?php
                    // Repeat the process and reset once it hits the limit
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>

        <?php
        else : no_posts();
        endif;
        ?>
    </div>
</div>