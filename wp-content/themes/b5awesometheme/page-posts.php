<?php
function page_posts($query = null, $classlist = 'row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 row-cols-xxl-4', $height = 'height:200px')
{
    global $wp_query;

    if (!$query) {
        $query = $wp_query;
    }

?>
    <div id="ttr_content" class="col-12 px-0 pe-lg-1">
        <div class="d-flex flex-nowrap flex-md-wrap overflow-auto justify-content-md-center <?php echo $classlist ?>">
            <?php
            // Check if there are any posts to display
            if ($query->have_posts()) : ?>
            <?php
                $counts = $query->post_count;
                // The Loop
                while ($query->have_posts()) : $query->the_post();
                    show_post_preview($counts, $height);
                endwhile;

            else : no_posts();
            endif; ?>

        </div>
        <style>
            .img {
                bottom: 0;
                height: 100%;
                left: 0;
                -o-object-fit: cover;
                object-fit: cover;
                position: absolute;
                right: 0;
                top: 0;
                width: 100%;
                margin: auto;
                max-width: 400px;
            }

            @media screen and (max-width: 300px) {
                .img {
                    max-width: 80vw;
                }
            }

            @media screen and (max-width: 570px) {
                .img {
                    max-width: 70vw;
                }
            }

            .card-default {
                box-shadow: 3px 3px 5px -1px #adb5bd;
                transition: transform .2s ease-in-out;
            }

            .card-default:hover,
            .card-default:active {
                box-shadow: 5px 5px 5px -1px #adb5bd;
                transform: scale(1.02);
            }
        </style>
        <script>
            Array.from(document.querySelectorAll('.card-default')).forEach((node) => {
                node.addEventListener('mouseenter', (e) => {
                    e.preventDefault()
                    let target = node.querySelector('a.article-link div')
                    target.classList.add('text-success')
                })
                node.addEventListener('mouseleave', (e) => {
                    e.preventDefault()
                    let target = node.querySelector('a.article-link div')
                    target.classList.remove('text-success')
                })

            })
        </script>
    </div>
<?php
}

?>