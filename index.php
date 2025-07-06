<?php get_header(); ?>
<header id="hero_main" class="hero">
    <div class="hero-content">
        <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/svg/ashbringer_main_logo.svg" />
        <br />
        <a href="/listen" class="btn btn-primary">
            Listen
        </a>
    </div>
</header>
<section id="main_social">
    <div class="content text-center">
        <h3>Social</h3>
        <ul class="btn-group">
            <li>
                <a href="https://www.facebook.com/ashbringermusic" class="btn btn-social" target="_blank" >
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/icon-fb.svg" alt="Facebook"
                        class="icon" />
                </a>
            </li>
            <li>
                <a href="https://www.youtube.com/channel/UC4EEayTmS-nXuxfkE4gyy5g" class="btn btn-social" target="_blank" >
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/icon-youtube.svg" alt="YouTube"
                        class="icon" />
                </a>
            </li>            
            <li>
                <a href="https://www.instagram.com/ashbringermusic/" class="btn btn-social" target="_blank" >
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/icon-instagram.svg" alt="Instagram"
                        class="icon" />
                </a>
            </li>
        </ul>
    </div>
</section>
<?php get_footer(); ?>