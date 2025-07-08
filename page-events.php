<?php get_header(); ?>
<header class="hero">
    <div class="hero-content">
        <h2>Events</h2>
    </div>
</header>

<main class="main-content">
    <section id="event_services">
        <div class="content">
            <a href="" class="btn">
                Facebook Events
            </a>
            <br>
            <br>
            <a href="https://www.songkick.com/artists/8551684-ashbringer" class="btn target=" _blank">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/songkick-logo.svg" alt="Songkick"
                    class="icon invert" />
            </a>
            <br>
            <br>
            <a href="https://www.bandsintown.com/a/2002896-ashbringer" class="btn" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bandsintown-logo.png" alt="Bandsintown"
                    class="icon" />
            </a>
        </div>
    </section>
    <section id="event_content">
        <div class="content">
        <?php
        if (have_posts()):
            while (have_posts()):
                the_post();
                the_content(); // This is the important line!
            endwhile;
        endif;
        ?>
    </div>
    </section>
</main>
<?php get_footer(); ?>