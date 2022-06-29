<?php
global $wp_query;
$term_id = $wp_query->queried_object->term_id;
$title = $wp_query->queried_object->name;
$description = category_description();
require_once 'header.php';
?>
<div id="ttr_main" class="row">
    <div id="ttr_content" class="col-12 col-lg-9 p-md-0">
        <div class="ps-2">
            <h2><?= $title ?></h2>
            <?php
            // Display optional category description
            if ($description) : ?>
                <h5 class="text-success font-weight-bold"><?php echo $description; ?></h5>
            <?php endif; ?>
        </div>
        <?php

        $sub_categories = get_categories(array('parent' => $term_id, 'hide_empty' => false));

        if ($sub_categories) {

            $args = array(
                'posts_per_page'   => 5,
                'category__in' => [10],
                'orderby'          => 'name',
                'order'            => 'ASC',
                'post_type'        => 'post'
            );

            // parent posts
            $posts = get_posts($args);
            if ($posts) {
        ?>
                <div class="row justify-content-center row-cols-1 row-cols-sm-2 row-cols-md-3 g-1">
                    <?php
                    $counts = count($posts);
                    foreach ($posts as $post) {
                        setup_postdata($post);

                        show_post_preview($counts);
                    }
                    wp_reset_postdata();
                    ?>
                </div>
            <?php

            }

            foreach ($sub_categories as $sub_category) {
                $title = $sub_category->name;
                $description = $sub_category->description;
                $term_link = get_category_link($sub_category->term_id);
            ?>
                <div class="text-danger">
                    <h2><a href="<?= $term_link ?>"><?= $title ?></a></h2>
                    <?php
                    // Display optional category description
                    if ($description) : ?>
                        <h5 class="text-success font-weight-bold"><?php echo $description; ?></h5>
                    <?php endif; ?>
                </div>

                <?php
                $args = array(
                    'posts_per_page'   => 5,
                    'category'         => $sub_category->term_id,
                    'orderby'          => 'name',
                    'order'            => 'ASC',
                    'post_type'        => 'post'
                );

                $posts = get_posts($args);

                if ($posts) {
                ?>
                    <div class="row justify-content-center row-cols-1 row-cols-sm-2 row-cols-md-3 g-1">
                        <?php

                        $counts = count($posts);
                        foreach ($posts as $post) {
                            setup_postdata($post);

                            show_post_preview($counts);
                        }
                        wp_reset_postdata();
                        ?>
                    </div>
                <?php
                } else {
                    no_posts();
                }
            }
            // endforeach;

        } else {

            // Check if there are any posts to display
            if (have_posts()) {
                ?>
                <div class="row justify-content-center row-cols-1 row-cols-sm-2 row-cols-md-3 g-1">
                    <?php
                    // The Loop
                    $counts = $wp_query->post_count;

                    while (have_posts()) :
                        the_post();
                        show_post_preview($counts);
                    endwhile;
                    ?>
                </div>
        <?php


            } else {
                no_posts();
            }
        }
        ?>

    </div>
    <?php echo get_sidebar('right'); ?>
</div>

<?php
include 'sponsored.php';
?>
<?php
include 'more-articles.php';
?>
<?php echo get_footer(); ?>