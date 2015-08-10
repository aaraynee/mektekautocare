<?php
/**
 * Template Name: Services Page
 */
?>

<html>
<head>
    <?php wp_head(); ?>
</head>
<body>

<?php get_header(); ?>

<div class="section">
    <div class="uk-container uk-container-center">
        <div class="uk-grid">
            <div class="uk-width-1-1">
                <h1 style="margin-bottom: 20px; text-align:center">Services</h1>
            </div>
            <?php
            $args = array( 'posts_per_page' => -1, 'post_type' => 'services');
            $myposts = get_posts( $args );
            foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                <div class="uk-width-1-4 service-box" style="background-position: bottom left;background-image: url(http://workingot.com/wp-content/uploads/2015/07/oil_service_large.png);">
                    <?php //the_post_thumbnail(); ?>
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_content(); ?></p>
                </div>
            <?php endforeach;
            wp_reset_postdata();?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
</body>
</html>
