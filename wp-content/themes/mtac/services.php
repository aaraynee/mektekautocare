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

<div class="section bg3">
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
            <div class="uk-width-1-1">
                <h1 style="margin-bottom: 20px; text-align:center">MekTek AutoCare Services</h1>
            </div>
            <div class="uk-width-1-1">
                <div class="uk-grid">
                    <?php
                    $args = array( 'posts_per_page' => -1, 'post_type' => 'services');
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

<div class="section bg2">
    <div class="uk-container uk-container-center">
        <div class="uk-grid">
            <div class="uk-width-1-1">
                <p>&nbsp;</p>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
</body>
</html>
