<?php
function story_image_caption_large($object)
{
    wp_nonce_field(basename(__FILE__), "caption-metabox");

    ?>
        <div>
            <p>Upload the image via Media > Add New.  Than copy the link into the box and click update</p>
            <input name="large-image-caption-" type="text" value="<?php echo get_post_meta($object->ID, "large-image-caption-", true); ?>">
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

    if(isset($_POST["large-image-caption-"]))
    {
        $meta_box_text_value = $_POST["large-image-caption-"];
    }   
    update_post_meta($post_id, "large-image-caption-", $meta_box_text_value);
}

add_action("save_post", "save_large_image_caption", 10, 3);


?>

?>