<?php
add_action('init', function(){
    add_theme_support('post-thumbnails');
});

function get_eyecatch_with_default()
{
    if(has_post_thumbnail()): 
           $img_id= get_post_thumbnail_id();
           $img_src=wp_get_attachment_image_src($img_id, 'large');
        else:
           $img_src=array(get_template_directory_uri().'/assets/img/post-bg.png'); 
              endif;
    return $img_src;
}?>