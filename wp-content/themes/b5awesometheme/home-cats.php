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
        <div class="row row-cols-1 row-cols-md-2">

            <?php
            $categories = array_slice(get_categories('parent=0'), 0, 1);
            foreach ($categories as $category) : ?>

                <div class="col shadow-sm catcard">
                    <h2 class="pt-1 pb-2"><?php echo $category->cat_name; ?></h2>
                    <?php 
                    $
                    ?>
                    <div>
                        <div class="img-wrapper">
                            <img src="http://localhost/onlineserviceslab/wp-content/uploads/2022/06/FSJDFSU3EJWQDN.jpg" alt="">
                        </div>
                        <div class="p-1">
                            <div class="" style="font-size: 90%;">
                                21:56, 02-Jul-2022
                            </div>
                            <a href="">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis atque
                                dolor, maxime
                                quos
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="p-1">
                            <div class="" style="font-size: 90%;">
                                21:56, 02-Jul-2022
                            </div>
                            <a href="">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis atque
                                dolor, maxime
                                quos
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="p-1">
                            <div class="" style="font-size: 90%;">
                                21:56, 02-Jul-2022
                            </div>
                            <a href="">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis atque
                                dolor, maxime
                                quos
                            </a>
                        </div>
                    </div>
                </div>
        </div>
    <?php endforeach; ?>
    </div>
</div>