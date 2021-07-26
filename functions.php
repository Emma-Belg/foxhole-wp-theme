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

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( 'twenty-twenty-one-style' ),
        wp_get_theme()->get('Version') // this only works if you have Version in the style header
    );
}

function display_homepage_video() {
    ?>
    <div class="video-background">
        <div class="video-foreground">
            <iframe src="https://www.youtube.com/embed/W0LHTWG-UmQ?controls=0&rel=0&autoplay=0&mute=1&loop=1&playlist=W0LHTWG-UmQ" frameborder="0" allowfullscreen></iframe>
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