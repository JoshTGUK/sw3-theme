<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article class="sw3-page">
        <div class="sw3-page__inner">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>
    </article>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
