<?php
/**
 * Template Name: Home Page
 *
 * Template for displaying a scrolling homepage
 *
 * @package WordPress
 */

display_homepage_video();
get_header();

?>
    <!--intro section-->

    <div class="between-paper">
        <img alt="Fox Hole Films Logo" src="https://staging.foxholefilms.com.au/wp-content/themes/foxy/assets/images/Torn-Paper-Edge-02.png">
    </div>
    <!--about us section-->
    <div class="homepage-section">
        <div class="intro-about">
            <?php
            echo get_the_content(null, false, 22);
            ?>
            <br />
            <button>About Us</button>
        </div>
    </div>

    <div class="between-paper">
        <img alt="Fox Hole Films Logo" src="https://staging.foxholefilms.com.au/wp-content/themes/foxy/assets/images/Torn-Paper-Edge-02.png">
    </div>

    <!--Our work section-->
    <div class="homepage-section">
        <div class="intro-our-work">
            <?php
            echo get_the_content(null, false, 24);
            ?>
        </div>
    </div>
<?php

get_footer();