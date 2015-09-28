<?php
function css_styles() {
	wp_enqueue_style( 'slicknav_css', get_template_directory_uri() . '/css/slicknav.min.css');
	wp_enqueue_style( 'font_awesome_css', get_template_directory_uri() . '/css/Font-Awesome/css/font-awesome.min.css');
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'nivo_main', get_template_directory_uri() . '/css/nivo-slider.css' );
    wp_enqueue_style( 'nivo_theme', get_template_directory_uri() . '/css/themes/default/default.css' );

}

add_action( 'wp_enqueue_scripts', 'css_styles' );


function js_styles() {
    wp_enqueue_script( 'modernizer_js', get_template_directory_uri() . '/js/modernizer.js', '', '', false );
	wp_enqueue_script( 'slicknav_js', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '', false );
	wp_enqueue_script( 'html5_shiv_js', get_template_directory_uri() . '/js/html5shiv.min.js', '', '', false );
	wp_enqueue_script( 'bottom_js', get_template_directory_uri() . '/js/bottom.js', array('jquery', 'slicknav_js'), '', true );
    wp_enqueue_script( 'nav_js', get_template_directory_uri() . '/js/nav.js', array('jquery'), '', true );
    wp_enqueue_script( 'slicknav_js', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '', false );
    wp_enqueue_script( 'nivo_slider', get_template_directory_uri() . '/js/jquery.nivo.slider.js', array('jquery'), '', true );



}

add_action( 'wp_enqueue_scripts', 'js_styles' );


function custom_theme_setup() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'custom_theme_setup' );


function custom_meta_box_markup($object)
{
    wp_nonce_field(basename(__FILE__), "meta-box-nonce");

    ?>
        <div>
            <p>Upload the image via Media > Add New.  Than copy the link into the box and click update</p>
            <input name="meta-box-text" type="text" value="<?php echo get_post_meta($object->ID, "meta-box-text", true); ?>">
        </div>
    <?php
}

function add_custom_meta_box()
{
    add_meta_box("demo-meta-box", "Mobile Rotating Image", "custom_meta_box_markup", "post", "normal", "high", null);
}

add_action("add_meta_boxes", "add_custom_meta_box");

function save_custom_meta_box($post_id, $post, $update)
{
    if (!isset($_POST["meta-box-nonce"]) || !wp_verify_nonce($_POST["meta-box-nonce"], basename(__FILE__)))
        return $post_id;

    if(!current_user_can("edit_post", $post_id))
        return $post_id;

    if(defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
        return $post_id;

    $slug = "post";
    if($slug != $post->post_type)
        return $post_id;

    $meta_box_text_value = "";

    if(isset($_POST["meta-box-text"]))
    {
        $meta_box_text_value = $_POST["meta-box-text"];
    }
    update_post_meta($post_id, "meta-box-text", $meta_box_text_value);
}

add_action("save_post", "save_custom_meta_box", 10, 3);

function story_image_large($object)
{
    wp_nonce_field(basename(__FILE__), "large-metabox-nonce");

    ?>
        <div>
            <p>Upload the image via Media > Add New.  Than copy the link into the box and click update</p>
            <input name="large-meta-box-text" type="text" value="<?php echo get_post_meta($object->ID, "large-meta-box-text", true); ?>">
        </div>
    <?php
}

function large_image_metabox()
{
    add_meta_box("large-image-meta", "Front Rotating Image", "story_image_large", "post", "normal", "core", null);
}

add_action("add_meta_boxes", "large_image_metabox");

function save_large_image_meta_box($post_id, $post, $update)
{
    if (!isset($_POST["large-metabox-nonce"]) || !wp_verify_nonce($_POST["large-metabox-nonce"], basename(__FILE__)))
        return $post_id;

    if(!current_user_can("edit_post", $post_id))
        return $post_id;

    if(defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
        return $post_id;

    $slug = "post";
    if($slug != $post->post_type)
        return $post_id;

    $meta_box_text_value = "";

    if(isset($_POST["large-meta-box-text"]))
    {
        $meta_box_text_value = $_POST["large-meta-box-text"];
    }
    update_post_meta($post_id, "large-meta-box-text", $meta_box_text_value);
}

add_action("save_post", "save_large_image_meta_box", 10, 3);


function story_image_caption_large($object)
{
    wp_nonce_field(basename(__FILE__), "caption-metabox");

    ?>
        <div>
            <p>Enter the caption for the main image.</p>
            <input name="large-image-caption" type="text" value="<?php echo get_post_meta($object->ID, "large-image-caption", true); ?>">
        </div>
    <?php
}

function large_image_caption()
{
    add_meta_box("large-caption-meta", "Story Large Image Caption", "story_image_caption_large", "post", "normal", "core", null);
}

add_action("add_meta_boxes", "large_image_caption");



function save_large_image_caption($post_id, $post, $update)
{
    if (!isset($_POST["caption-metabox"]) || !wp_verify_nonce($_POST["caption-metabox"], basename(__FILE__)))
        return $post_id;

    if(!current_user_can("edit_post", $post_id))
        return $post_id;

    if(defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
        return $post_id;

    $slug = "post";
    if($slug != $post->post_type)
        return $post_id;

    $meta_box_text_value = "";

    if(isset($_POST["large-image-caption"]))
    {
        $meta_box_text_value = $_POST["large-image-caption"];
    }
    update_post_meta($post_id, "large-image-caption", $meta_box_text_value);
}

add_action("save_post", "save_large_image_caption", 10, 3);

function html5_insert_image($html, $id, $caption, $title, $align, $url) {
  $html5 = "<figure id='post-$id media-$id' class='align-$align'>";
  $html5 .= "<img src='$url' alt='$title' />";
  if ($caption) {
    $html5 .= "<figcaption>$caption</figcaption>";
  }
  $html5 .= "</figure>";
  return $html5;
}
add_filter( 'image_send_to_editor', 'html5_insert_image', 10, 9 );


function truncate_excerpt(){
	$excerpt = get_the_content();
        $excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
        $excerpt = strip_shortcodes($excerpt);
        $excerpt = strip_tags($excerpt);
        $excerpt = substr($excerpt, 0, 30);
        $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
        $excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
        $excerpt = $excerpt.' ...';
return $excerpt;
}

function get_the_popular_excerpt(){
    $excerpt = get_the_content();
    $excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, 200);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
    $excerpt = $excerpt.' ...';
return $excerpt;
}

function truncate_search_excerpt(){
	$excerpt = get_the_content();
    $excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, 120);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
    $excerpt = $excerpt.' ';
return $excerpt;
}


function select_first_story($object)
{
    wp_nonce_field("select_first_save_meta", "select_first_save_meta");

    ?>
        <div>
            <p>Please select the first story to appear with this post.</p>
            <select name="first-select-dropdown">
                <?php
                    $args = array(
                        'numberposts' => 15,
                        'category_name' => 'POETRY, NON-FICTION, FILM, AUDIO'
                    );
                    $posts = get_posts($args);
                    ?> <option value="">Please select story</option> <?php

                    foreach($posts as $post)
                    {
                    ?>
                    <option value="<?php echo esc_attr( $post->ID ); ?>" <?php if ( get_post_meta(get_the_ID(), 'first-story-save', true) == $post->ID ) echo 'selected'; ?>><?php echo $post->post_title; ?></option>
                    <?php
                    }
                ?>
            </select>
        </div>
    <?php
}

function select_first_story_meta_box()
{
    add_meta_box("first-story-save", "First Story Selection", "select_first_story", "post", "normal", "core", null);
}

add_action("add_meta_boxes", "select_first_story_meta_box");

function save_first_story($post_id, $post, $update)
{
    if (!isset($_POST["select_first_save_meta"]) || !wp_verify_nonce($_POST["select_first_save_meta"], "select_first_save_meta")) {
        return $post_id;
    }

    if(!current_user_can("edit_post", $post_id))
        return $post_id;

    if(defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
        return $post_id;

    update_post_meta($post_id, "first-story-save", absint($_POST['first-select-dropdown']));
}

add_action("save_post", "save_first_story", 10, 3);

function select_second_story($object)
{
    wp_nonce_field("select_second_story", "select_second_story");

    ?>
        <div>
            <p>Please select the second story to appear with this post.</p>
            <select name="second-select-dropdown">
                <?php
                    $args = array(
                        'numberposts' => 15,
                        'category_name' => 'POETRY, NON-FICTION, FILM, AUDIO'
                    );
                    $posts = get_posts($args);

                    ?> <option value="">Please select story</option> <?php
                    foreach($posts as $post)
                    {
                    ?>
                    <option value="<?php echo esc_attr( $post->ID ); ?>" <?php if ( get_post_meta(get_the_ID(), 'second-story-save', true) == $post->ID ) echo 'selected'; ?>><?php echo $post->post_title; ?></option>
                    <?php
                    }
                ?>

            </select>
        </div>
    <?php
}

function select_second_story_meta_box()
{
    add_meta_box("second-story-save", "Second Story Selection", "select_second_story", "post", "normal", "core", null);
}

add_action("add_meta_boxes", "select_second_story_meta_box");

function save_second_story($post_id, $post, $update)
{
    if (!isset($_POST["select_second_story"]) || !wp_verify_nonce($_POST["select_second_story"], "select_second_story")) {
        return $post_id;
    }

    if(!current_user_can("edit_post", $post_id))
        return $post_id;

    if(defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
        return $post_id;

    update_post_meta($post_id, "second-story-save", absint($_POST['second-select-dropdown']));
}

add_action("save_post", "save_second_story", 10, 3);







function select_first_ecommerce_item($object)
{
    wp_nonce_field("select_first_ecommerce_item", "select_first_ecommerce_item");

    ?>
        <div>
            <p>Please select the first ecommerce item to appear with this post.</p>
            <select name="first-ecommerce-item">
                <?php
                    $args = array(
                        'numberposts' => 15,
                        'category_name' => 'STORE'
                    );
                    $posts = get_posts($args);

                    ?> <option value="">Please select story</option> <?php
                    foreach($posts as $post)
                    {
                    ?>
                    <option value="<?php echo esc_attr( $post->ID ); ?>" <?php if ( get_post_meta(get_the_ID(), 'first-ecommerce-item-save', true) == $post->ID ) echo 'selected'; ?>><?php echo $post->post_title; ?></option>
                    <?php
                    }
                ?>

            </select>
        </div>
    <?php
}

function first_ecommerce_meta_box()
{
    add_meta_box("first-ecommerce-item-save", "First Ecommerce Item", "select_first_ecommerce_item", "post", "normal", "core", null);
}

add_action("add_meta_boxes", "first_ecommerce_meta_box");

function save_first_ecommerce_item($post_id, $post, $update)
{
    if (!isset($_POST["select_first_ecommerce_item"]) || !wp_verify_nonce($_POST["select_first_ecommerce_item"], "select_first_ecommerce_item")) {
        return $post_id;
    }

    if(!current_user_can("edit_post", $post_id))
        return $post_id;

    if(defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
        return $post_id;

    update_post_meta($post_id, "first-ecommerce-item-save", absint($_POST['first-ecommerce-item']));
}

add_action("save_post", "save_first_ecommerce_item", 10, 3);


function select_second_ecommerce_item($object)
{
    wp_nonce_field("select_second_ecommerce_item", "select_second_ecommerce_item");

    ?>
        <div>
            <p>Please select the second ecommerce item</p>
            <select name="second-ecommerce-item">
                <?php
                    $args = array(
                        'numberposts' => 15,
                        'category_name' => 'STORE'
                    );
                    $posts = get_posts($args);
                ?> <option value="">Please select item</option> <?php
                    foreach($posts as $post)
                    {
                    ?>
                    <option value="<?php echo esc_attr( $post->ID ); ?>" <?php if ( get_post_meta(get_the_ID(), 'second-ecommerce-item-save', true) == $post->ID ) echo 'selected'; ?>><?php echo $post->post_title; ?></option>
                    <?php
                    }
                ?>

            </select>
        </div>
    <?php
}

function second_ecommerce_meta_box()
{
    add_meta_box("second-ecommerce-item-save", "Second Ecommerce Item", "select_second_ecommerce_item", "post", "normal", "core", null);
}

add_action("add_meta_boxes", "second_ecommerce_meta_box");

function save_second_ecommerce_item($post_id, $post, $update)
{
    if (!isset($_POST["select_second_ecommerce_item"]) || !wp_verify_nonce($_POST["select_second_ecommerce_item"], "select_second_ecommerce_item")) {
        return $post_id;
    }

    if(!current_user_can("edit_post", $post_id))
        return $post_id;

    if(defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
        return $post_id;

    update_post_meta($post_id, "second-ecommerce-item-save", absint($_POST['second-ecommerce-item']));
}

add_action("save_post", "save_second_ecommerce_item", 10, 3);


function check_small_image($post) {
        $small_image = get_post_meta( $post->ID, 'small-image-meta', true );

        if ($small_image) {
            ?><img src="<?php echo get_post_meta( $post->ID, 'small-image-meta', true );?>"><?php
        }
        else {
           echo wp_get_attachment_image( 231 );
        }

}

function check_large_caption($post) {
        $large_caption = get_post_meta( $post->ID, 'large-image-caption', true );
        if ( $large_caption ) {
          ?>
            <figcaption>
                <?php echo get_post_meta( $post->ID, 'large-image-caption', true ); ?>
            </figcaption> <?php
        }
        else {
            ?> <figcaption class="no-bottom-border"></figcaption> <?php
        }
}



function large_image_set($post){
        ?><aside>
            <figure>
                <?php the_post_thumbnail(); ?>
                <?php check_large_caption($post) ?>
            </figure>
            </aside><?php
}






function foo_search_filter($query) {
    // You need to check to make sure you are not viewing admin
    if(!is_admin()) {
        // Check to make sure we are modifying the MAIN query only
        if($query->is_main_query() && is_archive() || is_home() || is_search() ) {
            // NOW check to make sure we are searching
            if($query->is_search || $query->is_home) {
               $query->set('post_type', 'post');
               $query->set('cat', '-1307,-1');
            }
        }
    }

    // Return the $query object, even if nothing was changed
    return $query;
}
add_action('pre_get_posts', 'foo_search_filter');


function wpb_mce_buttons_2($buttons) {
    array_unshift($buttons, 'styleselect');
    return $buttons;
}
add_filter('mce_buttons_2', 'wpb_mce_buttons_2');

function my_mce_before_init_insert_formats( $init_array ) {

// Define the style_formats array

    $style_formats = array(
        // Each array child is a format with it's own settings
        array(
            'title' => 'Quote to the right',
            'block' => 'span',
            'classes' => 'float-right quote-text',
            'wrapper' => true,

        ),
        array(
            'title' => 'Full quote text',
            'selector' => 'p',
            'classes' => 'quote quote-text',
            // 'wrapper' => true,
        ),
        array(
            'title' => 'Red Button',
            'selector' => 'p',
            'classes' => 'red-button',
            // 'wrapper' => true,
        ),

        array(
            'title' => '3 Dot Spacer',
            'selector' => 'p',
            'classes' => 'spacer',
            // 'wrapper' => true,
        ),

        array(
            'title' => 'Advertisement Float Right',
            'selector' => 'p',
            'classes' => 'ad float-right',
            // 'wrapper' => true,
        ),

        array(
            'title' => 'Full Image',
            'selector' => 'p',
            'classes' => 'full-image',
            // 'wrapper' => true,
        ),
    );
    // Insert the array, JSON ENCODED, into 'style_formats'
    $init_array['style_formats'] = json_encode( $style_formats );

    return $init_array;

}
// Attach callback to 'tiny_mce_before_init'
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );