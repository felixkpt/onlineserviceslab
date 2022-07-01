<?php $i = 0;

while ($i < 1) {
    $i++; ?>
    <div class="col p-2">
        <div class="h-100 shadow p-2">
            <a href="<?php the_permalink() ?>" class="image-wrapper">
                <img src="<?php echo $image_url ?>" title="Link to <?php the_title_attribute(); ?>" alt="<?php the_title() ?>">
            </a>
            <div class="col-12 px-2">
                <a class="d-block link-primary" href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>">
                    <h5>
                        <?php echo wp_trim_words(get_the_title(), 20, '...'); ?>
                    </h5>
                </a>
                <div>
                    <h6 class="font-weight-bold fst-italic text-muted">Posted on <?php echo the_time('F jS, Y') ?></h6>
                </div>
                <div>
                    <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>