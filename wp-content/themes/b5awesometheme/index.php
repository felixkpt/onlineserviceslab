<?php
$title = get_bloginfo('name');
$description = get_bloginfo('description');
require_once 'header.php';
?>

<div class="row">
    <div class="col-12 col-lg-9 p-md-0 mt-3">
        <?php
        // Define our WP Query Parameters
        $query = new WP_Query('posts_per_page=8&post_type=post&published=published');
        // Check if there are any posts to display
        if ($query->have_posts()) :
        ?>

            <div class="row">
                <div class="col-12">
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
                    <div class="float-sm-end col-12 col-md-6 ps-md-2">
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
                        <div class="float-lg-start col-md-6">
                            <h4><a class="link-primary" href="#!"><?php the_title(); ?></a></h4>
                            <p><?php echo wp_trim_words(the_excerpt_embed(), 20, '...'); ?></p>
                        </div>
                    <?php
                    endwhile;
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <hr>
                    <div class="row">
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
                                $class = "border-end";
                            }
                        ?>
                            <div class="col <?php echo $class ?>">
                                <h4><a class="link-primary" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
                            </div>
                        <?php
                        endwhile;
                        ?>
                    </div>
                </div>
            </div>
        <?php
            wp_reset_postdata();
        else : no_posts();
        endif;
        ?>
        <?php
        include 'home-cats.php';
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
