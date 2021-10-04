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
        <img width=100% alt="ripped paper"
             src="https://staging.foxholefilms.com.au/wp-content/themes/foxy/assets/images/textures/Torn-Paper-Edge-03-overdark.png">
    </div>
    <div class="homepage-section">
        <div class="intro-about">
            <?php
            echo get_the_content(null, false, 22);
            ?>
            <br/>
            <div class="flex-container">
                <div class="right-float-button">
                    <a href="/about">
                        <button>About Us</button>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!--featured work section-->
    <div class="featured-section">
        <div class="flex-container">
            <div class="block">
                <div class="flex-container">
                    <h2>Featured</h2>
                    <br/><br/>
                </div>
            </div>
            <div class="flex-row">
                <div class="featured-box">
                    <div class="featured-img">
                        <img width="300px" alt="featured-work1"
                             src="https://staging.foxholefilms.com.au/wp-content/themes/foxy/assets/images/work/FoxHoleFilmsProperty1.png">
                    </div>
                    <div class="featured-content">
                        <h3>Title</h3>
                        <p>A short description of the work goes here.</p>
                        <a href="#">see more</a>
                    </div>
                </div>
                <div class="featured-box">
                    <div class="featured-img">
                        <img width="300px" alt="featured-work1"
                             src="https://staging.foxholefilms.com.au/wp-content/themes/foxy/assets/images/work/FoxHoleFilmsProperty1.png">
                    </div>
                    <div class="featured-content">
                        <h3>Title</h3>
                        <p>A short description of the work goes here.</p>
                        <a href="#">see more</a>
                    </div>
                </div>
            </div>
            <div class="flex-row">
                <div class="featured-box">
                    <div class="featured-img">
                        <img width="300px" alt="featured-work1"
                             src="https://staging.foxholefilms.com.au/wp-content/themes/foxy/assets/images/work/FoxHoleFilmsProperty1.png">
                    </div>
                    <div class="featured-content">
                        <h3>Title</h3>
                        <p>A short description of the work goes here.</p>
                        <a href="#">see more</a>
                    </div>
                </div>
                <div class="featured-box">
                    <div class="featured-img">
                        <img width="300px" alt="featured-work1"
                             src="https://staging.foxholefilms.com.au/wp-content/themes/foxy/assets/images/work/FoxHoleFilmsProperty1.png">
                    </div>
                    <div class="featured-content">
                        <h3>Title</h3>
                        <p>A short description of the work goes here.</p>
                        <a href="#">see more</a>
                    </div>
                </div>
            </div>
            <div class="block">
                <div class="flex-container">
                    <div class="right-float-button">
                        <a href="/work">
                            <button>See Work</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--our work section-->
    <div class="work-section">
        <div class="flex-container">
            <div class="flex-row">
                <div class="work-box">
                    <div class="work-img">
                        <img width="100%" alt="featured-work1"
                             src="https://staging.foxholefilms.com.au/wp-content/themes/foxy/assets/images/work/FoxHoleFilmsProperty1.png">
                        <div class="featured-content">
                            <h3>Title</h3>
                            <p>A short description of the work goes here.</p>
                            <a href="#">see more</a>
                        </div>
                    </div>
                    <?php
                    echo get_the_content(null, false, 24);
                    ?>
                </div>
            </div>
        </div>
        <div class="block">
            <img width="100%" alt="featured-work1"
                 src="https://staging.foxholefilms.com.au/wp-content/themes/foxy/assets/images/textures/Torn-Paper-Edge-16-double.png">
        </div>
    </div>

    <!--about us section--> <!--intro section-->
    <div class="us-section">
        <div class="mobile-display">
            <div class="flex-container">
                <div class="block">
                    <div class="us-mobile">
                        <?php
                        echo get_the_content(null, false, 22);
                        ?>
                    </div>
                </div>

                <div class="space-between-row">
                    <div class="us-mobile half">
                        <div class="mobile-img">
                            <img width="100%" alt="featured-work1"
                                 src="https://staging.foxholefilms.com.au/wp-content/themes/foxy/assets/images/work/FoxHoleFilmsProperty1.png">
                        </div>
                        <div class="featured-content">
                            <p>A short description of the work goes here.</p>
                            <a href="#">see more</a>
                        </div>
                    </div>
                    <div class="us-mobile half">
                        <div class="mobile-img">
                            <img width="100%" alt="featured-work1"
                                 src="https://staging.foxholefilms.com.au/wp-content/themes/foxy/assets/images/work/FoxHoleFilmsProperty1.png">
                        </div>
                        <div class="featured-content">
                            <p>A short description of the work goes here.</p>
                            <a href="#">see more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="large-display">
            <div class="flex-container">
                <div class="space-between-row">
                    <div class="us-box">
                        <div class="start-img">
                            <img width="100%" alt="featured-work1"
                                 src="https://staging.foxholefilms.com.au/wp-content/themes/foxy/assets/images/work/FoxHoleFilmsProperty1.png">
                        </div>
                        <div class="featured-content">
                            <p>A short description of the work goes here.</p>
                            <a href="#">see more</a>
                        </div>
                    </div>
                    <div class="us-box">
                        <?php
                        echo get_the_content(null, false, 22);
                        ?>
                    </div>
                    <div class="us-box">
                        <div class="end-img">
                            <img width="100%" alt="featured-work1"
                                 src="https://staging.foxholefilms.com.au/wp-content/themes/foxy/assets/images/work/FoxHoleFilmsProperty1.png">
                        </div>
                        <div class="featured-content">
                            <p>A short description of the work goes here.</p>
                            <a href="#">see more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="between-paper second-divide">
        <img width=100% alt="ripped paper"
             src="https://staging.foxholefilms.com.au/wp-content/themes/foxy/assets/images/textures/Torn-Paper-Edge-11-underdark.png">
    </div>

    <!--Brands we've worked with section-->
    <div class="testimonial-section">
        <div class="intro-our-work">
            <h3>Brands we've worked with</h3>
            <p>Maybe some testimonials that flash through here</p>
            <p>Then some of the brands' logos</p>
        </div>
    </div>
<?php

get_footer();