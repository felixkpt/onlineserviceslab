<footer id="ttr_footer" class="overflow-hidden my-2">
    <div class="col-12 overflow-hidden px-2">
        <h4 class="text-decoration-none section-headline">
            <span class="section-headline-text"><?php echo bloginfo('description') ?></span>
        </h4>
    </div>
    <div class="row row-cols-2 row-cols-md-4 px-2">
        <div>
            <h5>Site Info</h5>
            <ul class="list-unstyled">
                <li><a class="link-default" href="<?= site_url() ?>/about-us">About us</a></li>
                <li><a class="link-default" href="<?= site_url() ?>/contact-us">Contact us</a></li>
                <li><a class="link-default" href="<?= site_url() ?>/privacy-policy">Privacy policy</a></li>
                <li><a class="link-default" href="<?= site_url() ?>/terms-and-conditions">Terms & Conditions</a></li>
            </ul>
        </div>
        <div>
            <h5>Recent Posts</h5>
            <ul class="list-unstyled">
                <?php
                // Define our WP Query Parameters
                $the_query = new WP_Query('posts_per_page=5');

                // Start our WP Query
                while ($the_query->have_posts()) : $the_query->the_post();
                    // Display the Post Title with Hyperlink
                ?>
                    <li>
                        <a class="link-default" href="<?php the_permalink() ?>">
                            <div class="overflow-hidden" style="text-overflow:ellipsis">
                                <span class="text-nowrap">
                                    <?php echo wp_trim_words(get_the_title(), 20, '...'); ?>
                                </span>
                            </div>
                        </a>
                    </li>
                <?php
                // Repeat the process and reset once it hits the limit
                endwhile;
                wp_reset_postdata();
                ?>
            </ul>
        </div>

        <div>
            <h5>Top Categories</h5>
            <ul class="list-unstyled">
                <?php
                $categories = array_slice(get_categories(), 0, 4);
                foreach ($categories as $category) : ?>
                    <li><a class="link-default" href="<?php echo get_category_link($category->term_id) ?>"><?php echo $category->name ?></a></li>
                <?php
                endforeach;
                ?>
            </ul>
        </div>

        <div>
            <div class="d-flex flex-column h-100 justify-content-between">
                <h5>Get in touch with us</h5>
                <div class="d-inline pb-3">
                    <?php
                    include 'social-media-links.php'
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright py-4">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="d-inline my-3 my-md-0">
                    <p class="mb-0">© <?php echo date('Y') ?> <?php echo bloginfo('title') ?>. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer>