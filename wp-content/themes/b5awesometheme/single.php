<?php
$title = get_the_title();
$description = get_the_excerpt();
require_once 'header.php';

?>
<div class="row">
    <div class="col-12 col-lg-9 p-md-0">
        <div class="row">
            <div class="col-12">
                <h2><?php the_title(); ?></h2>
            </div>
            <div class="col-12">
                <div class="float-sm-start col-md-6">
                    <h6 class="font-weight-bold fst-italic">Posted on <?php echo the_time('F jS, Y') ?></h6>
                    <p>
                        <?php the_excerpt_embed() ?>
                    </p>
                    <hr>
                </div>
                <div class="float-sm-end col-12 col-md-6 ps-md-2">
                    <figure>
                        <div class="col-sm-9 col-md-12 mx-auto">
                            <?php
                            $image_url = get_bloginfo('template_directory') . '/images/default-featured-images.jpg';
                            if (has_post_thumbnail()) {
                                $id = get_post_thumbnail_id($post->ID);
                                $orig = wp_get_attachment_image_src($id);
                                $image_url = $orig[0];
                            }
                            ?>
                            <img class="attachment-post-thumbnail size-post-thumbnail wp-post-image" src="<?php echo $image_url ?>" alt="<?php the_title(); ?>" />
                        </div>
                    </figure>
                </div>
            </div>
            <div class="col-12">
                <p>
                    <?php the_content(); ?>
                </p>
            </div>

        </div>
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