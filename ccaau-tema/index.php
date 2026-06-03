<?php get_header(); ?>

<section class="hero-interno">
  <div class="hero-interno-tag">Notícias e eventos</div>
  <h1 class="hero-interno-titulo">Blog do <span>CCAAU</span></h1>
  <p class="hero-interno-desc">Acompanhe as novidades, eventos, atividades e histórias de transformação do Centro Comunitário de Umburanas.</p>
  <div class="breadcrumb"><a href="<?php echo home_url('/'); ?>">Início</a> › <span>Blog</span></div>
</section>

<section style="padding:80px 0;background:var(--fundo)">
  <div class="container">
    <?php if (have_posts()) : ?>
    <div class="blog-grid">
      <?php while (have_posts()) : the_post(); ?>
      <div class="blog-card">
        <div class="blog-card-img">
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('medium_large', array('style'=>'width:100%;height:100%;object-fit:cover;display:block')); ?>
          <?php else : ?>
            📰
          <?php endif; ?>
        </div>
        <div class="blog-card-body">
          <div class="blog-card-cat"><?php the_category(', '); ?></div>
          <div class="blog-card-titulo"><?php the_title(); ?></div>
          <div class="blog-card-texto"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></div>
          <div style="display:flex;justify-content:space-between;align-items:center;margin-top:14px">
            <div class="blog-card-data"><?php echo get_the_date('F Y'); ?></div>
            <a href="<?php the_permalink(); ?>" class="blog-card-link">Ler mais →</a>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
    <div style="text-align:center;margin-top:48px">
      <?php the_posts_navigation(array('prev_text'=>'← Mais antigas','next_text'=>'Mais recentes →')); ?>
    </div>
    <?php else : ?>
    <p style="text-align:center;color:var(--cinza);font-size:16px">Nenhuma publicação encontrada.</p>
    <?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>
