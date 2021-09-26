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


    <div class="between-paper first-divide">
        <img width=100% alt="ripped paper" src="https://staging.foxholefilms.com.au/wp-content/themes/foxy/assets/images/textures/Torn-Paper-Edge-03-overdark.png">
    </div>

    <!--about us section-->
    <div class="homepage-section">
        <div class="intro-about">
            <?php
            echo get_the_content(null, false, 22);
            ?>
            <br />
            <div class="flex-container">
                <div class="right-float-button">
                    <a href="/about"><button>About Us</button></a>
                </div>
            </div>
        </div>
    </div>

    <div class="between-paper second-divide">
        <img width=100% alt="ripped paper" src="https://staging.foxholefilms.com.au/wp-content/themes/foxy/assets/images/textures/Torn-Paper-Edge-11-underdark.png">
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