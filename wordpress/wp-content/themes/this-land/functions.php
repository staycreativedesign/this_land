<?php

function css_styles() {
	wp_enqueue_style( 'slicknav_css', get_template_directory_uri() . '/css/slicknav.min.css');
	wp_enqueue_style( 'font_awesome_css', get_template_directory_uri() . '/css/Font-Awesome/css/font-awesome.min.css');
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'css_styles' );


function js_styles() {
	wp_enqueue_script( 'modernizer_js', get_template_directory_uri() . '/js/modernizer.js', '', '', false );

	wp_enqueue_script( 'slicknav_js', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '', false );

	wp_enqueue_script( 'html5_shiv_js', get_template_directory_uri() . '/js/html5shiv.min.js', '', '', false );

	wp_enqueue_script( 'bottom_js', get_template_directory_uri() . '/js/bottom.js', array('jquery', 'slicknav_js'), '', true );


}

add_action( 'wp_enqueue_scripts', 'js_styles' );

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
    add_meta_box("demo-meta-box", "Small Sub Category Image Link", "custom_meta_box_markup", "post", "normal", "core", null);
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
    add_meta_box("large-image-meta", "Large Story Image Link", "story_image_large", "post", "normal", "core", null);
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
            <p>Upload the image via Media > Add New.  Than copy the link into the box and click update</p>
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

function SearchFilter($query) {
if ($query->is_search) {
$query->set('post_type', 'post');
}
return $query;
}

add_filter('pre_get_posts','SearchFilter');

function SearchAuthor($authors) {
$args = array(
    'orderby' => 'author',
    'order' => 'ASC'
);

if ($authors->is_search) {
$author->set( $args );
}
return $authors;
}

add_filter('pre_get_posts','SearchFilter');

function truncate_excerpt(){
	$excerpt = get_the_content();
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$the_str = substr($excerpt, 0, 30);
return $the_str;
}

function truncate_search_excerpt(){
	$excerpt = get_the_content();
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$the_str = substr($excerpt, 0, 100);
return $the_str;
}
?>
