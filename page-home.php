<?php get_header(); ?>
<header id="hero_main" class="hero">
    <div class="hero-content">
        <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/svg/ashbringer_main_logo.svg" />
        <br />
        <h3>Minneapolis based </h3>
        <h2>False Black Metal</h2>
        <br />
        <ul class="btn-group">
            <li>
                <a href="/listen" class="btn btn-primary">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/icon-play.svg" alt="Play"
                        class="icon" />
                </a>
            </li>
        </ul>
    </div>
</header>
<section id="main_social">
    <div class="content text-center">
        <!-- <h3>Social</h3> -->
        <ul class="btn-group">
            <li>
                <a href="https://www.facebook.com/ashbringermusic" class="btn btn-social" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/icon-fb.svg" alt="Facebook"
                        class="icon" />
                </a>
            </li>

            <li>
                <a href="https://www.instagram.com/ashbringermusic/" class="btn btn-social" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/icon-instagram.svg" alt="Instagram"
                        class="icon" />
                </a>
            </li>
            <li>
                <a href="https://ashbringermusic.bandcamp.com" target="_blank" class="btn btn-social">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bandcamp_b&w.png" alt="Bandcamp"
                        class="icon" />
                </a>
            </li>
        </ul>
        <a href="https://www.youtube.com/@ashbringermusic" class="btn btn-social" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/icon-youtube.svg" alt="YouTube"
                class="icon" />
        </a>
    </div>
</section>
<section id="content_press">
    <div class="content">
        <h4 class="text-center">Press</h4>
        <div class="overflow-container">
            <ul id="press_list">
                <li>
                    <a href="https://metalinjection.net/?s=ashbringer">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/metal_injection-logo.png"
                            alt="As seen on Metal Injection" class="icon" />
                    </a>
                </li>
                <li>
                    <a href="https://www.metalsucks.net/?s=ashbringer">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/logo-metal_sucks.svg"
                            alt="As seen on MetalSucks" class="icon" />
                    </a>
                </li>
                <li>
                    <a href="https://www.metalunderground.com/bands/details.cfm?bandid=25229&tab=news">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/metalundergroundcom_logo.gif"
                            alt="As seen on Metal Underground" class="icon" />
                    </a>
                </li>
                <li>
                    <a href="https://www.invisibleoranges.com/?s=ashbringer">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/invisible-oranges-logo.png"
                            alt="As seen on Metal Underground" class="icon" />
                    </a>
                </li>
                <li>
                    <a href="https://www.angrymetalguy.com/?s=ashbringer">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/angry-metal-guy-logo.webp"
                            alt="As seen on Metal Underground" class="icon" />
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>
<section id="featured_release">
    <div class="content">
        <h4 class="text-center">Featured Release</h4>
        <a href="https://ashbringermusic.bandcamp.com/album/vacant-2025-remaster" class="release">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/vacant_2025_remaster.jpg" />
        </a>
        <h5 class="text-center">Vacant (2025 Remaster)</h5>
        <p class="text-center">Released on April 8, 2025</p>
    </div>
</section>
<section id="featured_merch">
    <div class="content">
        <h4 class="text-center">Featured Merch</h4>
        <img class="merch" src="<?php echo get_template_directory_uri(); ?>/assets/img/merch_rain.jpg"
            alt="Featured Merch">
        <br />
        <a href="https://ashbringermusic.bandcamp.com/merch/rain-4-sided-long-sleeve" class="btn">
            Buy Now
        </a>
    </div>
</section>
<!-- https://www.youtube.com/@ashbringermusic -->
<?php get_footer(); ?>