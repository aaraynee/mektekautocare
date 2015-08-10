<html>
<head>
    <?php wp_head(); ?>
</head>
<body>

    <?php get_header(); ?>

    <div class="section-slider">
        <div class="uk-container uk-container-center">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <?php echo do_shortcode('[rev_slider main]'); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="section" id="about">
        <div class="uk-container uk-container-center">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <h1>About Us</h1>
                </div>
                <div class="uk-width-1-2">
                    <?php
                        $page = get_page_by_path( 'section-1' );
                        echo apply_filters('the_content', $page->post_content);
                    ?>
                </div>
                <div class="uk-width-1-2">
                    <img width="100%" src="http://placehold.it/350x150">
                </div>
            </div>
        </div>
    </div>

    <div class="section" id="services">
        <div class="uk-container uk-container-center">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <h1>Services</h1>
                </div>
                <div class="uk-width-1-4 service-overview">
                    <p>
                        You can Leave Worry Behind fast when you know exactly where you can get your vehicle serviced
                        — quickly, professionally and fixed right the first time by trained technicians you can trust.
                        The highly trained technicians at MekTek AutoCare do almost every common major and minor maintenance
                        or repair service. From oil and lubricant changes to wheel alignments, brake jobs, vehicle
                        inspections and much, much more.
                    </p>
                    <p><a class="service-button" href="/services">View All Services</a></p>
                </div>
                <?php
                $args = array( 'posts_per_page' => 3, 'post_type' => 'services');
                $myposts = get_posts( $args );
                foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                    <div class="uk-width-1-4 service-box" style="background-position: bottom left;background-image: url(http://workingot.com/wp-content/uploads/2015/07/oil_service_large.png);">
                        <a href="<?php the_permalink(); ?>">
                            <?php //the_post_thumbnail(); ?>
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_content(); ?></p>
                        </a>
                    </div>
                <?php endforeach;
                wp_reset_postdata();?>
            </div>
        </div>
    </div>

    <div class="section"  id="deals">
        <div class="uk-container uk-container-center">
            <div class="uk-grid">
                <div class="uk-width-1-1">
			        <h1>Coupons</h1>
		        </div>

                <?php
                $args = array( 'posts_per_page' => 3, 'post_type' => 'coupons');
                $myposts = get_posts( $args );
                foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                    <div class="uk-width-1-3">
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