<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()): the_post(); // Ouverture de "The Loop" de Wordpress ?>
    <main class="page">
        <h2 class="hero_section"><?= get_field('title') ?></h2>
        <p><?= get_field('content')?></p>
    </main>
<?php endwhile; endif; // Fermeture de "The Loop" de Wordpress ?>

<?php get_footer(); ?>