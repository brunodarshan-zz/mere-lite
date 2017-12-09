<?php
function mere_lite_scripts(){
    // Adicionando bootstrap.css
    wp_enqueue_style("bootstrap", get_template_directory_uri()."/vendor/bootstrap/dist/css/bootstrap.min.css");

    // Adicionando scripts
    wp_enqueue_script(
        $handle = "boostrap-js", 
        $src =  get_template_directory_uri()."/vendor/bootstrap/dist/js/bootstrap.min.js",
        $deeps = array(),
        $ver = false,
        $in_footer = true
    );
    wp_enqueue_script(
        $handle = "jquery", 
        $src = get_template_directory_uri()."/vendor/js/dist/jquery.min.js",
        $deeps = array(),
        $ver = false,
        $in_footer = true
    );
    
}
add_action("wp_enqueue_scripts", "mere_lite_scripts");