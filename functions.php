<?php
//add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
//function my_theme_enqueue_styles() {
//    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
//        array( 'parenthandle' ),
//        wp_get_theme()->get('Version') // this only works if you have Version in the style header
//    );
//}
//
//function enqueue_parent_styles() {
//    wp_enqueue_style('parent', get_template_directory_uri() . '/style.css');
//}

//add_action( 'wp_enqueue_scripts', function() {
//    wp_enqueue_style( 'twentytwenty-style', get_template_directory_uri() . '/style.css' );
//});

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
function my_theme_enqueue_styles() {
    wp_enqueue_style('child-style', get_stylesheet_uri(),
        array('twenty-twenty-one-style'),
        wp_get_theme()->get('Version') // this only works if you have Version in the style header
    );
}

function display_homepage_video() {
    ?>
    <div class="video-background">
        <div class="video-foreground">
            <iframe src="https://www.youtube.com/embed/W0LHTWG-UmQ?controls=0&rel=0&autoplay=1&mute=1&loop=1&playlist=W0LHTWG-UmQ"
                    frameborder="0" allowfullscreen></iframe>
        </div>
    </div>

    <div id="vidtop-content">
        <div class="vid-info">
            <h1>FOX HOLE FILMS</h1>
            <h3>Always <i>your</i> story, always <i>outstanding</i></h3>
            <a href="#">Our Work</a>
            <p>INSERT ARROW TO SUGGEST TO SCROLL DOWN</p>
        </div>
    </div>
    <br/>
    <?php
}

function echoString($string) {
    echo $string;
}

function getSpecificValueOfChildrenFromParentCategory($parentCategoryID, $value): array {
    $args = array(
        'orderby' => 'name',
        'order' => 'ASC',
        'parent' => $parentCategoryID,
        'hide_empty' => false,
    );
    $categories = get_categories($args);
    $categoryValue = [];
    foreach ($categories as $category) {
        array_push($categoryValue, $category->$value);
    }
    return $categoryValue;
}

function getPostFromCategory($categoryID): array {
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category' => $categoryID,
        'numberposts' => 1,
    );
    $posts = get_posts($args);
    return $posts;
}

function getChildrenPostsFromCategory($arrayFromFunction): array
{
    $arrayOfChildrenPosts = [];
    foreach ($arrayFromFunction as $childPost) {
        array_push($arrayOfChildrenPosts, getPostFromCategory($childPost));
    }
    return $arrayOfChildrenPosts;
}

function fadingCarouselCategories($inputCategoryID, $parentID = null)
{
    $categories = get_categories($inputCategoryID);
    $parentName = get_category($parentID);
    ?>
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    <div class="slideshow-container">
    <?php
    foreach ($categories as $category) {
        if ($category->name !== "Uncategorized" && $category->name !== $parentName->name) {
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'category_name' => $category->name,
                'posts_per_page' => 1,
            );
            $arr_posts = new WP_Query($args);
            $current_url = home_url($_SERVER['REQUEST_URI']);
            if ($arr_posts->have_posts()) :
                $arr_posts->the_post();
                if (has_post_thumbnail()) :
                    echoString('
                   <div class="mySlides">
                      <img width="100%" height="auto" alt="' . $category->slug . '" 
                          src="' . get_the_post_thumbnail_url() . '">
                      <a href="' . $current_url . '/' . $category->slug . '">
                         <div class="text">' . $category->slug . '</div>
                      </a>
                   </div>');
                endif;
            endif;
        }
    }
    ?>
    </div>
    <script>
        let slideIndex = 1;
        let myTimer;
        let slideshowContainer;

        window.addEventListener("load", function () {
            showSlides(slideIndex);
            myTimer = setInterval(function () {
                plusSlides(1)
            }, 4000);
        })

        // NEXT AND PREVIOUS CONTROL
        function plusSlides(index) {
            clearInterval(myTimer);
            if (index < 0) {
                showSlides(slideIndex -= 1);
            } else {
                showSlides(slideIndex += 1);
            }

            if (index === -1) {
                myTimer = setInterval(function () {
                    plusSlides(index + 2)
                }, 4000);
            } else {
                myTimer = setInterval(function () {
                    plusSlides(index + 1)
                }, 4000);
            }
        }

        //Controls the current slide and resets interval if needed
        function currentSlide(index) {
            clearInterval(myTimer);
            myTimer = setInterval(function () {
                plusSlides(index + 1)
            }, 4000);
            showSlides(slideIndex = index);
        }

        function showSlides(index) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            if (index > slides.length) {
                slideIndex = 1
            }
            if (index < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].className = slides[i].className.replace(" fade", "");
            }
            slides[slideIndex - 1].style.display = "inline";
            slides[slideIndex-1].className += " fade";
        }
    </script>
    <?php
}