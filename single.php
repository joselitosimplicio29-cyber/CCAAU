<?php get_header(); ?>

<section class="hero-interno">
  <div class="hero-interno-tag"><?php the_category(', '); ?></div>
  <h1 class="hero-interno-titulo"><?php the_title(); ?></h1>
  <p class="hero-interno-desc"><?php echo get_the_date('d \d\e F \d\e Y'); ?></p>
  <div class="breadcrumb">
    <a href="<?php echo home_url('/'); ?>">Início</a> ›
    <a href="<?php echo home_url('/blog'); ?>">Blog</a> ›
    <span><?php the_title(); ?></span>
  </div>
</section>

<section style="padding:80px 0;background:var(--fundo)">
  <div class="container">
    <div style="max-width:800px;margin:0 auto">
      <?php if (has_post_thumbnail()) : ?>
      <div style="border-radius:20px;overflow:hidden;margin-bottom:40px;box-shadow:0 20px 60px rgba(0,0,0,0.12)">
        <?php the_post_thumbnail('large', array('style'=>'width:100%;height:auto;display:block')); ?>
      </div>
      <?php endif; ?>
      <div style="font-size:16px;color:var(--texto-suave);line-height:1.85">
        <?php if (have_posts()) : while (have_posts()) : the_post(); the_content(); endwhile; endif; ?>
      </div>
      <div style="margin-top:48px;padding-top:32px;border-top:1px solid #f0ece4">
        <a href="<?php echo home_url('/blog'); ?>" class="btn-secundario">← Voltar ao Blog</a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
