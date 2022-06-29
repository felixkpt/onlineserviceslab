<?php
$title = get_the_title();
$description = get_the_excerpt();
require_once 'header.php';
?>
<div id="ttr_main" class="row">
    <div id="ttr_content" class="col-12 col-lg-9 px-0 pe-lg-1">
        <h2><?= $title ?></h2>
        <p>
            <?php the_content() ?>
        </p>
    </div>
    <?php echo get_sidebar('right'); ?>
</div>

<?php echo get_footer(); ?>