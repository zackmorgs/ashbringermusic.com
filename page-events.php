<?php get_header(); ?>
<header class="hero">
    <div class="hero-content">
        <h2>Events</h2>
    </div>
</header>
<main class="main-content">
    <?php
    if (have_posts()):
        while (have_posts()):
            the_post();
            the_content(); // This is the important line!
        endwhile;
    endif;
    ?>
</main>
<?php get_footer(); ?>