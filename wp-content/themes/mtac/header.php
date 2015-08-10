<div class="header">
    <div class="uk-container uk-container-center">
        <div class="uk-grid">
            <div class="uk-width-1-6">
                <img src="<?php echo get_stylesheet_directory_uri() . '/includes/logo.png'; ?>">
            </div>
            <div class="uk-width-4-6">
                <?php

                if(is_home()) {
                    $menu = 'Main Home';
                } else {
                    $menu = 'Main Other';
                }

                $defaults = array(
                    'theme_location'  => '',
                    'menu'            => $menu,
                    'container'       => '',
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => '',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul>%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => ''
                );

                wp_nav_menu( $defaults );

                ?>


            </div>
            <div class="uk-width-1-6">
                <span class="number">410-944-1322</span>
            </div>
        </div>
    </div>
</div>