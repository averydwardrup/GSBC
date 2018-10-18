<?php
get_header();
$col= 'col-md-12';
if ( is_active_sidebar( 'sidebar' ) ) {
    $col = 'col-md-8';
}
?>
<div class="row">
    <div id="content" class="site-content <?php echo $col; ?>" role="main">
        <?php /* The loop */ ?>
        <?php if(have_posts()){ while ( have_posts() ) { the_post(); ?>
        <?php get_template_part( 'post-templates/content-image', get_post_format() ); ?>
        <?php zee_post_nav(); ?>
        <?php blog_comments(); ?>
        <?php } } ?>

        <div class="share">
            <h3>Share Article</h3>
            <span class='st_sharethis_large' displayText='ShareThis'></span>
            <span class='st_facebook_large' displayText='Facebook'></span>
            <span class='st_twitter_large' displayText='Tweet'></span>
            <span class='st_linkedin_large' displayText='LinkedIn'></span>
            <span class='st_pinterest_large' displayText='Pinterest'></span>
            <span class='st_email_large' displayText='Email'></span>
        </div>

    </div><!--/#content -->
    <?php get_sidebar(); ?>
</div>
<?php get_footer();