<?php

$categories = array_slice(get_categories(), 0, 4);
foreach ($categories as $category) : ?>

    <div class="row my-3">

        <div class="col-12">
            <div class="cat-divider-wrapper">
                <h4 class="text-end my-4 cat-divider text-dark"><span><a class="text-dark" href="<?php echo get_category_link($category->term_id) ?>"><?php echo $category->name ?> <i class="fas fa-chevron-circle-right"></i></a></span></h4>
            </div>
        </div>
        <?php
        // Define our WP Query Parameters
        $args = array('post_type' => 'post', 'category_name' => $category->slug, 'post_status' => 'publish',  'posts_per_page' => 5,);

        $query = new WP_Query($args);
        if ($query->have_posts()) :
        ?>
            <div class="col-12 col-md-9">
                <div class="float-sm-start col-md-6">
                    <?php
                    $cts = 0;
                    // The Loop
                    while ($query->have_posts()) : $query->the_post();
                        $cts++;
                        if ($cts > 1) {
                            break;
                        }
                    ?>
                        <h4><a class="link-primary" href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
                        <p><?php echo wp_trim_words(the_excerpt_embed(), 20, '...'); ?></p>
                        <hr>
                    <?php
                    endwhile;
                    ?>
                </div>
                <div class="float-sm-end col-md-6 ps-md-2">
                    <?php
                    $cts = 0;
                    // The Loop
                    while ($query->have_posts()) : $query->the_post();
                        $cts++;
                        if ($cts > 1) {
                            break;
                        }
                    ?>
                        <figure>
                            <a class="link-primary" href="<?php the_permalink() ?>">
                                <div class="image-wrapper-lg">
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
                    endwhile;
                    ?>
                </div>
                <?php
                $cts = 0;
                // The Loop
                while ($query->have_posts()) : $query->the_post();
                    $cts++;
                    if ($cts > 1) {
                        break;
                    }
                ?>
                    <div class="float-sm-start col-md-6 ps-md-2">
                        <h4><a class="link-primary" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
                    </div>
                <?php
                endwhile;
                ?>
            </div>
            <div class="col-12 col-md-3 right-sidebar">
                <div class="row inner">
                <?php
                    $counts = $query->post_count;
                    $cts = 0;
                    // The Loop
                    while ($query->have_posts()) : $query->the_post();
                        $cts++;
                        if ($cts > 2) {
                            break;
                        }
                        $class = "";
                        if ($cts !== 2) {
                            $class = "";
                        }
                    ?>
                        <div class="col-12 <?php echo $class ?>">
                            <h5><a class="link-primary" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5>
                        </div>
                    <?php
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
<?php endforeach; ?>