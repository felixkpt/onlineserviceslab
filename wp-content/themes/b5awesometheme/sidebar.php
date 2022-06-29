<?php 
include_once 'trending.php';
?>
<div id="ttr_sidebar" class="col-12 col-lg-3 px-0 ps-lg-1">
    <div>
        <h3 class="bg-danger text-white fw-bold px-1 mb-0">find us on facebook</h3>
        <div class="fb-page" data-href="https://web.facebook.com/Onlineserviceslab-105898808829468" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://web.facebook.com/Onlineserviceslab-105898808829468" class="fb-xfbml-parse-ignore"><a href="https://web.facebook.com/Onlineserviceslab-105898808829468">Onlineserviceslab</a></blockquote></div>
    </div>
    <h3 class="bg-danger text-white fw-bold px-1 mb-0"><?= _e('Categories') ?></h3>
    <ul class="list-unstyled mt-0">
        <?php $categories = get_categories(); foreach($categories as $category): ?>
            <li class="cat-item"><a href="<?php echo get_category_link($category->term_id) ?>"><?php echo $category->name ?></a></li>
        <?php endforeach; ?>
    </ul>
    <h3 class="bg-danger text-white fw-bold px-1 mb-0"><?= _e('Archives') ?></h3>
    <ul class="list-unstyled mt-0"><?= wp_get_archives() ?></ul>
    <div class="trending px-2"><?php echo trending() ?></div>
</div>