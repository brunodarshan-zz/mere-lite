<?php
function mere_lite_scripts(){
    // Adicionando bootstrap.css
    wp_enqueue_style("bootstrap", get_template_directory_uri()."/vendor/bootstrap/dist/css/bootstrap.min.css");

    // Adicionando scripts
    wp_enqueue_script("boostrap-js", get_template_directory_uri()."/vendor/bootstrap/dist/js/bootstrap.min.js");
    wp_enqueue_script("jquery", get_template_directory_uri()."/vendor/js/dist/jquery.min.js");
    
}
add_action("wp_enqueue_scripts", "mere_lite_scripts");