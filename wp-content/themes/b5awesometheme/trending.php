<?php
include_once 'page-posts.php';

function trending()
{
?>
    <div class="col-12">
        <div class="cat-divider-wrapper">
        <h4 class="text-center my-4 cat-divider text-danger"><span>Trending now</span></h4>
        </div>
        <?php
        // Define our WP Query Parameters
        $the_query = new WP_Query('posts_per_page=5');

        page_posts($the_query, 'row-cols-1', 'height:100px;width:70%;margin:auto');

        wp_reset_postdata();
        ?>
    </div>
<?php
}
?>