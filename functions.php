<?php
// CCAAU Theme Functions

function ccaau_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form','comment-form','comment-list','gallery','caption'));
    add_theme_support('custom-logo');
    register_nav_menus(array(
        'primary' => 'Menu Principal',
    ));
}
add_action('after_setup_theme', 'ccaau_setup');

function ccaau_scripts() {
    wp_enqueue_style('ccaau-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700&display=swap', array(), null);
    wp_enqueue_style('ccaau-style', get_stylesheet_uri(), array(), '1.0.0');
    wp_enqueue_script('ccaau-nav', get_template_directory_uri() . '/assets/js/nav.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'ccaau_scripts');

// Página atual ativa no menu
function ccaau_menu_classes($classes, $item) {
    if (in_array('current-menu-item', $classes) || in_array('current_page_item', $classes)) {
        $classes[] = 'ativo';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'ccaau_menu_classes', 10, 2);

// Slug do template de página
function ccaau_body_classes($classes) {
    if (is_page()) {
        $classes[] = 'pagina-' . get_post_field('post_name', get_the_ID());
    }
    return $classes;
}
add_filter('body_class', 'ccaau_body_classes');

// Força os templates do tema nas páginas principais, mesmo se a página tiver template do Elementor selecionado.
function ccaau_forcar_templates_do_tema($template) {
    if (is_page('sobre')) {
        $sobre_template = get_template_directory() . '/page-sobre.php';
        if (file_exists($sobre_template)) {
            return $sobre_template;
        }
    }

    if (is_page('projetos')) {
        $projetos_template = get_template_directory() . '/page-projetos.php';
        if (file_exists($projetos_template)) {
            return $projetos_template;
        }
    }

    return $template;
}
add_filter('template_include', 'ccaau_forcar_templates_do_tema', 99);

// Excluir categoria 'transparencia' do blog principal
function ccaau_excluir_transparencia_do_blog($query) {
    if ($query->is_home() && $query->is_main_query()) {
        $cat = get_category_by_slug('transparencia');
        if ($cat) {
            $query->set('cat', '-' . $cat->term_id);
        }
    }
}
add_action('pre_get_posts', 'ccaau_excluir_transparencia_do_blog');
