<?php $i = 0;
while ($i < 1) {
    $i++; ?>
    <div class="col p-2">

        <div class="card h-100 card-default">
            <div class="card border-0 mx-auto overflow-hidden h-100 pt-2">
                <a class="text-decoration-none overflow-hidden h-100" href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>">
                    <div class="col-sm-9 col-12 mx-auto">
                        <img class="rounded-sm" src="<?php echo $image_url ?>" alt="">
                    </div>
                </a>
            </div>
            <div class="col-12 px-2">
                <a class="d-block link-primary" href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>">
                    <h5>
                        <?php echo wp_trim_words(get_the_title(), 20, '...'); ?>
                    </h5>
                </a>
                <div>
                    <small class="text-muted fst-italic"><?php the_time('F jS, Y') ?></small>
                </div>
                <div>
                    <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                </div>
            </div>
        </div>

    </div>

<?php } ?>