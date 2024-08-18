<?phpfunction brrlot_brasiloterapia_scripts() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'brrlot_brasiloterapia_scripts');
?>