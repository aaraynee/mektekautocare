<html>
<head>
    <?php wp_head(); ?>
</head>
<body>
    <?php get_header(); ?>
    <div class="uk-container uk-container-center">
        <div class="uk-grid">
            <div class="uk-width-1-1">...</div>
        </div>
    </div>

    <div class="section grey">
        <div class="uk-container uk-container-center">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <h3 style="text-align:center">About MekTek AutoCare</h3>
                </div>
                <div class="uk-width-1-2">
                    <?php
                    $page = get_page_by_path( 'section-1' );
                    echo apply_filters('the_content', $page->post_content);
                    ?>
                </div>
                <div class="uk-width-1-2">
                    <?php
                        $page = get_page_by_path( 'section-1' );
                        echo apply_filters('the_content', $page->post_content);
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="section bg1">
        <div class="uk-container uk-container-center">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <p>&nbsp;</p>
                </div>
            </div>
        </div>
    </div>

    <div class="section grey">
        <div class="uk-container uk-container-center">
            <div class="uk-grid">
                <div class="uk-width-1-4">
                    <h1>Services</h1>
                    <a class="service-button" href="">View All Services</a>
                </div>
                <div class="uk-width-3-4">
                    <div class="uk-grid">
                        <?php
                        $args = array( 'posts_per_page' => 6, 'post_type' => 'services');
                        $myposts = get_posts( $args );
                        foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                            <div class="uk-width-1-3">
                                <div class="service-box">
                                    <?php the_post_thumbnail(); ?>
                                    <h4><?php the_title(); ?></h4>
                                    <p><?php the_content(); ?></p>
                                </div>
                            </div>
                        <?php endforeach;
                        wp_reset_postdata();?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section bg1">
        <div class="uk-container uk-container-center">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <p>&nbsp;</p>
                </div>
            </div>
        </div>
    </div>

    <div class="section yellow">
        <div class="uk-container uk-container-center">
            <div class="uk-grid">
                <div class="uk-width-1-4">
                    <h1>Coupons</h1>
                </div>

                <?php
                $args = array( 'posts_per_page' => 3, 'post_type' => 'coupons');
                $myposts = get_posts( $args );
                foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                    <div class="uk-width-1-4">
                        <?php the_post_thumbnail(); ?>
                    </div>
                <?php endforeach;
                wp_reset_postdata();?>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>
</body>
</html>