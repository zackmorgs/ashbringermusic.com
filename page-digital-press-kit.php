<?php get_header(); ?>
<header class="hero">
    <div class="hero-content">
        <h2>Digital Press Kit</h2>
    </div>
</header>
<main class="main-content">
    <div class="content text-center">
        <?php
        if (have_posts()):
            while (have_posts()):
                the_post();
                the_content(); // This is the important line!
            endwhile;
        endif;
        ?>
    </div>
</main>
<?php get_footer(); ?>