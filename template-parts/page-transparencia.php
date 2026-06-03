<?php
// Busca posts da categoria 'transparencia'
$posts_trans = new WP_Query(array(
  'category_name' => 'transparencia',
  'posts_per_page' => -1,
  'post_status' => 'publish',
  'orderby' => 'date',
  'order' => 'DESC',
));
?>

<section class="hero-interno">
  <div class="hero-interno-tag">Prestação de contas</div>
  <h1 class="hero-interno-titulo">Transparência e <span>responsabilidade</span>.</h1>
  <p class="hero-interno-desc">O CCAAU acredita na gestão transparente. Aqui você encontra documentos, relatórios e informações institucionais.</p>
  <div class="breadcrumb"><a href="<?php echo home_url('/'); ?>">Início</a> › <span>Transparência</span></div>
</section>

<section style="padding:80px 0;background:var(--fundo)">
  <div class="container">

    <?php if ($posts_trans->have_posts()) : ?>
    <!-- DOCUMENTOS PUBLICADOS PELO CLIENTE -->
    <div class="secao-tag">Documentos publicados</div>
    <h2 class="secao-titulo">Publicações de transparência</h2>
    <div class="trans-grid" style="margin-top:32px">
      <?php while ($posts_trans->have_posts()) : $posts_trans->the_post(); ?>
      <div class="trans-card">
        <div class="trans-icon">
          <?php
          // Ícone baseado em palavra-chave no título
          $titulo = strtolower(get_the_title());
          if (strpos($titulo,'estatuto') !== false) echo '📋';
          elseif (strpos($titulo,'financ') !== false) echo '💰';
          elseif (strpos($titulo,'ata') !== false) echo '📝';
          elseif (strpos($titulo,'relat') !== false) echo '📊';
          elseif (strpos($titulo,'equipe') !== false) echo '👥';
          elseif (strpos($titulo,'conselho') !== false || strpos($titulo,'cmdca') !== false || strpos($titulo,'fundeb') !== false) echo '🏛️';
          else echo '📄';
          ?>
        </div>
        <div>
          <div class="trans-titulo">
            <?php the_title(); ?>
            <span class="trans-badge">Publicado</span>
          </div>
          <div class="trans-desc"><?php echo wp_trim_words(get_the_excerpt(), 18); ?></div>
          <div class="trans-data"><?php echo get_the_date('d/m/Y'); ?></div>
          <?php if (has_post_thumbnail()) : ?>
            <a href="<?php the_permalink(); ?>" class="trans-btn">📥 Ver documento →</a>
          <?php else : ?>
            <a href="<?php the_permalink(); ?>" class="trans-btn">📖 Ler mais →</a>
          <?php endif; ?>
        </div>
      </div>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>
    <div style="margin-top:48px;border-top:2px solid #f0ece4;padding-top:48px"></div>
    <?php endif; ?>

    <!-- DOCUMENTOS FIXOS INSTITUCIONAIS -->
    <div class="secao-tag">Documentos institucionais</div>
    <h2 class="secao-titulo">Documentos e relatórios</h2>
    <div class="trans-ano">2024 / 2025</div>
    <div class="trans-grid">
      <div class="trans-card">
        <div class="trans-icon">📋</div>
        <div>
          <div class="trans-titulo">Estatuto Social <span class="trans-badge">Disponível</span></div>
          <div class="trans-desc">Documento que define a estrutura organizacional, objetivos e normas de funcionamento do CCAAU.</div>
          <div class="trans-data">Publicado em 2024</div>
          <a href="#" class="trans-btn">📥 Baixar documento →</a>
        </div>
      </div>
      <div class="trans-card">
        <div class="trans-icon">📝</div>
        <div>
          <div class="trans-titulo">Ata da Diretoria Atual <span class="trans-badge">Disponível</span></div>
          <div class="trans-desc">Registro das decisões e composição da atual diretoria do Centro Comunitário.</div>
          <div class="trans-data">Publicado em 2024</div>
          <a href="#" class="trans-btn">📥 Baixar documento →</a>
        </div>
      </div>
      <div class="trans-card">
        <div class="trans-icon">💰</div>
        <div>
          <div class="trans-titulo">Relatório Financeiro 2024</div>
          <div class="trans-desc">Demonstrativo das receitas e despesas do exercício 2024 com fontes de financiamento.</div>
          <div class="trans-data">A publicar — em preparação</div>
          <a href="<?php echo home_url('/contato'); ?>" class="trans-btn">📩 Solicitar informações →</a>
        </div>
      </div>
      <div class="trans-card">
        <div class="trans-icon">👥</div>
        <div>
          <div class="trans-titulo">Composição da Equipe <span class="trans-badge">Disponível</span></div>
          <div class="trans-desc">Lista completa de colaboradores, funções, carga horária e regime de trabalho.</div>
          <div class="trans-data">Atualizado em 2024</div>
          <a href="<?php echo home_url('/sobre'); ?>" class="trans-btn">Ver equipe →</a>
        </div>
      </div>
    </div>

    <div class="trans-ano">Conselhos municipais</div>
    <div class="trans-grid">
      <div class="trans-card">
        <div class="trans-icon">🏛️</div>
        <div>
          <div class="trans-titulo">CMDCA</div>
          <div class="trans-desc">O CCAAU participa ativamente do Conselho Municipal dos Direitos da Criança e do Adolescente de Umburanas.</div>
        </div>
      </div>
      <div class="trans-card">
        <div class="trans-icon">🎓</div>
        <div>
          <div class="trans-titulo">FUNDEB</div>
          <div class="trans-desc">Participação no Conselho do Fundo de Manutenção e Desenvolvimento da Educação Básica e da Valorização dos Profissionais de Educação.</div>
        </div>
      </div>
    </div>

    <!-- COMO PUBLICAR (instruções para o cliente) -->
    <div style="margin-top:56px;background:linear-gradient(135deg,var(--verde-escuro),var(--verde));border-radius:20px;padding:40px;display:grid;grid-template-columns:auto 1fr;gap:28px;align-items:center">
      <div style="font-size:48px">📬</div>
      <div>
        <div style="font-family:'Montserrat',sans-serif;font-weight:800;color:#fff;font-size:20px;margin-bottom:8px">Solicite informações</div>
        <p style="font-size:14px;color:rgba(255,255,255,0.8);line-height:1.7;margin-bottom:20px">Precisa de algum documento ou informação não listada aqui? Entre em contato com a coordenação do CCAAU.</p>
        <div style="display:flex;gap:12px;flex-wrap:wrap">
          <a href="mailto:centrocomunitario2004@gmail.com" class="btn-primario" style="font-size:13px;padding:10px 22px">✉️ Enviar e-mail</a>
          <a href="<?php echo home_url('/contato'); ?>" class="btn-secundario" style="font-size:13px;padding:10px 22px;color:#fff;border-color:rgba(255,255,255,0.4)">Ver contatos</a>
        </div>
      </div>
    </div>

  </div>
</section>
