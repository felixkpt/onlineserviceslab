<style>
    .catcard {
        min-height: 100%;
    }

    .catcard div:hover a {
        text-decoration: underline;
    }

    .catcard a {
        line-height: 0.5rem;
        color: var(--bg-grey-500);
        text-decoration: none;
        font-weight: 500;
    }

    .catcard .img-wrapper {
        overflow: hidden;
        padding: 35%;
        position: relative;
    }

    .catcard img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: fill;
        transition: transform 2s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }

    .catcard img:hover {
        transform: scale(1.04);
    }

    .catcard h2 {
        position: relative;
        border-top: 1px solid var(--bs-gray-500);
    }

    .catcard h2::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 50%;
        height: 3px;
        background: var(--bg-primary);
    }
</style>

<div class="row my-3">
    <div class="col-12">
        <hr>
        <div class="row row-cols-2">

            <?php
            $categories = array_slice(get_categories('parent=0'), 0, 6);
            foreach ($categories as $category) : ?>

                <div class="shadow-sm catcard">
                    <h2 class="pt-1 pb-2"><?php echo $category->cat_name; ?></h2>
                    <?php
                    // Define our WP Query Parameters
                    $args = array('post_type' => 'post', 'parent' => '0', 'category_name' => $category->slug, 'post_status' => 'publish',  'posts_per_page' => 5,);

                    $query = new WP_Query($args);
                    if ($query->have_posts()) :
                    ?>
                        <?php
                        $cts = 0;
                        // The Loop
                        while ($query->have_posts()) : $query->the_post();
                            $cts++;
                        ?>
                            <div>
                                <?php if ($cts == 1) : ?>
                                    <div>
                                        <div class="img-wrapper">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <?php the_post_thumbnail() ?>
                                            <?php endif; ?>
                                        </div>
                                        <div class="p-1">
                                            <div class="" style="font-size: 90%;">
                                                <?php the_date() ?>
                                            </div>
                                            <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                                        </div>
                                    </div>
                                <?php else : ?>
                                    <div>
                                        <div class="p-1">
                                            <div class="" style="font-size: 90%;">
                                                <?php the_date() ?>
                                            </div>
                                            <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endwhile;  ?>
                    <?php else :  ?>
                        no_po
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>