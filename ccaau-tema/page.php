<?php
/**
 * Template genérico de página — detecta slug e carrega o template específico
 */
get_header();

$slug = get_post_field('post_name', get_the_ID());
$template = get_template_directory() . '/template-parts/page-' . $slug . '.php';

if (file_exists($template)) {
    include $template;
} else {
    // Fallback: conteúdo padrão do WordPress
    ?>
    <section class="hero-interno">
      <div class="hero-interno-tag">Página</div>
      <h1 class="hero-interno-titulo"><?php the_title(); ?></h1>
      <div class="breadcrumb"><a href="<?php echo home_url('/'); ?>">Início</a> › <span><?php the_title(); ?></span></div>
    </section>
    <section style="padding:80px 0;background:var(--fundo)">
      <div class="container">
        <?php the_content(); ?>
      </div>
    </section>
    <?php
}

get_footer();
