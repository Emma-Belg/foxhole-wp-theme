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
navbarScrollChange();

?>
    <!--intro section-->

    <div class="between-paper first-divide">
        <img width=100% alt="ripped paper"
             src="https://staging.foxholefilms.com.au/wp-content/themes/foxy/assets/images/textures/Torn-Paper-Edge-02-underfox.png">
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
                        <button class="button-bottom-margin">About Us</button>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!--featured work section-->
    <div class="halftone">
        <img width=100% alt="ripped paper"
             src="https://staging.foxholefilms.com.au/wp-content/themes/foxy/assets/images/textures/Distressed-Halftone-Texture-02-horizontal.png">
    </div>
    <div class="featured-section">
        <div class="flex-container">
            <div class="block">
                <div class="flex-container">
                    <h2>Featured</h2>
                    <br/><br/>
                </div>
            </div>
            <div class="flex-row flex-justify-center">
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
            <div class="flex-row flex-justify-center">
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
            <div class="vertical-space-20"></div>
            <div class="vertical-space-20"></div>
            <div class="flex-row flex-justify-center">
                <h2><?php
                    echo get_the_title(24);
                    ?>
                </h2><br/><div class="work-box">

                    <div class="float-right">
                        <?php
                        fadingCarouselCategories(getChildrenPostsFromCategory(getSpecificValueOfChildrenFromParentCategory(3, 'cat_ID')), 3);
                        ?>
                    </div>
                    <div class="work-content">
                        <?php
                        echo get_the_content(null, false, 24);
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!--<div class="block full-width">-->
        <!--    <div class="horizontal-gallery">-->
        <!--        <div class="flex">-->
        <!--            <div class="category-img">-->
        <!--                <a href="#">-->
        <!--                    <img width="300px" alt="featured-work1"-->
        <!--                         src="https://staging.foxholefilms.com.au/wp-content/themes/foxy/assets/images/work/FoxHoleFilmsProperty1.png">-->
        <!--                    <div class="category-title">-->
        <!--                        <h3>Property</h3>-->
        <!--                    </div>-->
        <!--                </a>-->
        <!--            </div>-->
        <!--            <div class="category-img">-->
        <!--                <a href="#">-->
        <!--                    <img width="300px" alt="featured-work1"-->
        <!--                         src="https://staging.foxholefilms.com.au/wp-content/themes/foxy/assets/images/work/FoxHoleFilmsProperty1.png">-->
        <!--                    <div class="category-title">-->
        <!--                        <h3>Corporate</h3>-->
        <!--                    </div>-->
        <!--                </a>-->
        <!--            </div>-->
        <!--            <div class="category-img">-->
        <!--                <a href="#">-->
        <!--                    <img width="300px" alt="featured-work1"-->
        <!--                         src="https://staging.foxholefilms.com.au/wp-content/themes/foxy/assets/images/work/FoxHoleFilmsProperty1.png">-->
        <!--                    <div class="category-title">-->
        <!--                        <h3>Commercial</h3>-->
        <!--                    </div>-->
        <!--                </a>-->
        <!--            </div>-->
        <!--            <div class="category-img">-->
        <!--                <a href="#">-->
        <!--                    <img width="300px" alt="featured-work1"-->
        <!--                         src="https://staging.foxholefilms.com.au/wp-content/themes/foxy/assets/images/work/FoxHoleFilmsProperty1.png">-->
        <!--                    <div class="category-title">-->
        <!--                        <h3>Film & Documentary</h3>-->
        <!--                    </div>-->
        <!--                </a>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--    <img width="100%" alt="featured-work1"-->
        <!--         src="https://staging.foxholefilms.com.au/wp-content/themes/foxy/assets/images/textures/Torn-Paper-Edge-16-double.png">-->
        <!--</div>-->
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
                                 src="https://staging.foxholefilms.com.au/wp-content/themes/foxy/assets/images/about-us/james+jackson-square.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="large-display">
            <div class="flex-container">
                <div class="flex-row flex-align-center flex-justify-center">
                    <div class="us-box">
                        <div class="start-img">
                            <img width="100%" alt="featured-work1"
                                 src="https://staging.foxholefilms.com.au/wp-content/themes/foxy/assets/images/about-us/james+jackson-square.jpg">
                        </div>
                    </div>
                    <div class="us-box">
                        <?php
                        echo get_the_content(null, false, 22);
                        ?>
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
            <div class="slider">
                <input type="radio" name="slider" title="slide1" checked="checked" class="slider__nav"/>
                <input type="radio" name="slider" title="slide2" class="slider__nav"/>
                <input type="radio" name="slider" title="slide3" class="slider__nav"/>
                <input type="radio" name="slider" title="slide4" class="slider__nav"/>
                <div class="slider__inner">
                    <div class="slider__contents">
                        <p class="slider__image">&#129409;</p>
                        <p class="testimonial-slider-brand"><b>Lion Brand</b></p>
                        <p class="slider__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate omnis possimus illo quos, corporis minima!</p>
                    </div>
                    <div class="slider__contents">
                        <p class="slider__image">&#9757;</p>
                        <p class="testimonial-slider-brand"><b>That's my point</b></p>
                        <p class="slider__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate omnis possimus illo quos, corporis minima!</p>
                    </div>
                    <div class="slider__contents">
                        <p class="slider__image">&#9996;</p>
                        <p class="testimonial-slider-brand"><b>Peace</b></p>
                        <p class="slider__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate omnis possimus illo quos, corporis minima!</p>
                    </div>
                    <div class="slider__contents">
                        <p class="slider__image">&#10022;</p>
                        <p class="testimonial-slider-brand"><b>Diamond</b></p>
                        <p class="slider__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate omnis possimus illo quos, corporis minima!</p>
                    </div>
                </div>
            </div>
            <p>Maybe some testimonials that flash through here</p>
            <p>Then some of the brands' logos</p>
        </div>
    </div>
<?php

get_footer();