<?php

function twentytwentyone_styles(){
    wp_enqueue_style('parent', get_template_directory_url().'/style.css');
}
add_action('wp_enqueue_scripts','twentytwentyone_styles');