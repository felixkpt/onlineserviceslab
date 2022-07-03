
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" aria-label="Main Menu">
    <div class="container-fluid p-0">
        <a class="navbar-brand mx-1 mx-md-2" href="<?php echo site_url() ?>">
            <img class="h-100 w-100" src="<?php echo site_url() . '/logo.png' ?>" alt="<?php echo bloginfo('title') ?>">
        </a>
        <button class="navbar-toggler justify-content-end me-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMainMenu" aria-controls="navbarMainMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse mt-1 mt-md-0" id="navbarMainMenu">
            <?PHP
            wp_nav_menu(
                array(
                    'theme_location' => 'header-menu',
                    'container_class' => 'primary-menu ms-auto'
                )
            );
            ?>
        </div>
    </div>
</nav>
<script>
    const deviceWidth = (val) => val || document.querySelector('body').offsetWidth
    window.addEventListener("resize", e => {
        deviceWidth(document.querySelector('body').offsetWidth)
    });

    const dropdowns = document.querySelectorAll('.primary-menu>ul>li.menu-item-has-children')
    dropdowns.forEach(node => {
        node.addEventListener('mouseenter', () => {
            if (node.querySelector('ul')) {
                positionDrodown(node)
            }
        })

    })

    navHoverToggle()

    function navHoverToggle() {
        dropdowns.forEach(node => {
            // click open menu on smaller device
            node.addEventListener('click', () => theToggler(node))
        })
    }

    function theToggler(node, close = null) {
        if (node.querySelector('ul')) {
            if (!close) {
                if (deviceWidth() < 768) {
                    // console.log('Togglin..')
                    node.querySelector('ul').classList.toggle('sub-menu-show')
                }
            } else {
                node.querySelector('ul').classList.remove('sub-menu-show')
            }
        }
    }

    function positionDrodown(node) {
        const left = node.offsetLeft
        const right = deviceWidth() - left
        const dropdown = node.querySelector('ul')
        const dropdownWidth = dropdown.clientWidth
        if (dropdownWidth > right && left > right) {
            dropdown.style.left = 'auto'
            dropdown.style.right = '0'
        }
    }

    // Remove all opened sub-menu on click outside
    document.querySelector('body').addEventListener('click', (e) => {
        const isSelf = e.target.closest('.primary-menu')
        if (!isSelf) {
            dropdowns.forEach(node => {
                theToggler(node, true)
            })
        }
    })
</script>