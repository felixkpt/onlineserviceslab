<?php
$title = 'Posts published '.single_month_title(' ', false);
$description = $title;
require_once 'header.php';
?>

<div id="ttr_header" class="row text-danger">
    <div class="ps-2">
        <h2><?= $title ?></h2>
        <?php
        // Display optional category description
        if ( category_description() ) : ?>
            <h5 class="text-success font-weight-bold"><?php echo category_description(); ?></h5>
        <?php endif; ?>
    </div>
</div>
<div id="ttr_main" class="row">
    <div id="ttr_content" class="col-12 col-lg-9 px-0 pe-lg-1">
        <div class="row justify-content-center row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xxl-4 g-1">
            <?php
            // Check if there are any posts to display
            if ( have_posts() ) : ?>
                <?php
                $counts = $wp_query->post_count;
// The Loop
                while ( have_posts() ) : the_post();
                    show_post_preview($counts);
                endwhile;

            else: no_posts(); endif; ?>

        </div>
    </div>
    <?php echo get_sidebar(); ?>
</div>

<?php echo get_footer(); ?>
