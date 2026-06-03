<?php $tmpl_dir = get_template_directory_uri(); ?>

<section class="obra-page">
  <section class="obra-hero">
    <div class="obra-hero-copy">
      <div class="obra-pill">Projeto em construção</div>
      <h1>Construindo um novo espaço para <span>transformar</span> mais vidas</h1>
      <p>Estamos construindo um novo espaço para ampliar nossas atividades e acolher ainda mais crianças, adolescentes e famílias de Umburanas.</p>
      <a href="#andamento" class="obra-hero-btn">Acompanhe o andamento da obra</a>
    </div>
    <div class="obra-hero-photo">
      <img src="<?php echo esc_url($tmpl_dir . '/assets/images/obra-ccau-01.png'); ?>" alt="Obra do novo espaço do CCAAU">
    </div>
  </section>

  <section class="obra-main">
    <div class="obra-content">
      <div class="obra-kicker">Sobre o projeto</div>
      <h2>Um futuro com mais possibilidades</h2>
      <p>O novo espaço do CCAAU foi idealizado para oferecer mais estrutura, conforto e qualidade no atendimento às nossas crianças e adolescentes. Com ele, poderemos ampliar oficinas, criar novas salas de aula, espaços de convivência, biblioteca, laboratório de informática e áreas de apoio.</p>
      <p>Cada etapa dessa construção representa um passo a mais para um futuro com mais oportunidades, educação, cultura e cidadania para a nossa comunidade.</p>

      <div id="andamento" class="obra-progress">
        <div class="obra-kicker">Andamento da obra</div>
        <div class="obra-steps">
          <div class="obra-step obra-step-done">
            <span>1</span>
            <strong>Terraplanagem</strong>
            <small>Concluída</small>
          </div>
          <div class="obra-step obra-step-active">
            <span>2</span>
            <strong>Fundação</strong>
            <small>Em andamento</small>
          </div>
          <div class="obra-step">
            <span>3</span>
            <strong>Estrutura</strong>
            <small>Aguardando</small>
          </div>
          <div class="obra-step">
            <span>4</span>
            <strong>Alvenaria</strong>
            <small>Aguardando</small>
          </div>
          <div class="obra-step">
            <span>5</span>
            <strong>Cobertura</strong>
            <small>Aguardando</small>
          </div>
          <div class="obra-step">
            <span>6</span>
            <strong>Acabamentos</strong>
            <small>Aguardando</small>
          </div>
        </div>
        <div class="obra-progress-bar"><span style="width:25%"></span></div>
        <strong class="obra-progress-label">25% concluído</strong>
      </div>

      <div class="obra-gallery-section">
        <div class="obra-kicker">Acompanhe a obra</div>
        <div class="obra-gallery">
          <article>
            <img src="<?php echo esc_url($tmpl_dir . '/assets/images/obra-ccau-01.png'); ?>" alt="Terraplanagem e início da obra">
            <strong>Terraplanagem e início da obra</strong>
            <span>Março/2024</span>
          </article>
          <article>
            <img src="<?php echo esc_url($tmpl_dir . '/assets/images/obra-ccau-01.png'); ?>" alt="Fundação em andamento">
            <strong>Fundação em andamento</strong>
            <span>Maio/2024</span>
          </article>
          <article>
            <img src="<?php echo esc_url($tmpl_dir . '/assets/images/obra-ccau-01.png'); ?>" alt="Estrutura em construção">
            <strong>Estrutura em construção</strong>
            <span>Maio/2024</span>
          </article>
        </div>
      </div>
    </div>

    <aside class="obra-sidebar">
      <div class="obra-info">
        <span>01</span>
        <div><strong>Início da obra</strong><p>Março de 2024</p></div>
      </div>
      <div class="obra-info">
        <span>02</span>
        <div><strong>Previsão de conclusão</strong><p>Dezembro de 2025</p></div>
      </div>
      <div class="obra-info">
        <span>03</span>
        <div><strong>Beneficiários diretos</strong><p>Mais de 150 crianças, adolescentes e jovens da comunidade.</p></div>
      </div>
      <div class="obra-info">
        <span>04</span>
        <div><strong>Nosso objetivo</strong><p>Ampliar e qualificar as atividades educativas, culturais e sociais do CCAAU.</p></div>
      </div>
      <div class="obra-info">
        <span>05</span>
        <div><strong>Como apoiar</strong><p>Doe, seja parceiro ou divulgue. Toda ajuda faz a diferença!</p></div>
      </div>
    </aside>
  </section>

  <section class="obra-bottom">
    <article class="obra-note">
      <div class="obra-note-icon">+</div>
      <h3>Cada tijolo é um passo para transformar vidas.</h3>
      <p>Acompanhe, compartilhe e faça parte dessa construção.</p>
    </article>
  </section>

  <section class="obra-cta">
    <div class="obra-cta-icon">♡</div>
    <div>
      <h2>Vamos construir juntos</h2>
      <p>Este projeto só é possível com a ajuda de pessoas e organizações que acreditam no poder da educação e da transformação social.</p>
    </div>
    <div class="obra-cta-actions">
      <a href="<?php echo home_url('/doacao'); ?>" class="obra-btn-donate">Fazer uma Doação</a>
      <a href="<?php echo home_url('/parceiros'); ?>" class="obra-btn-outline">Seja Parceiro</a>
      <a href="<?php echo home_url('/contato'); ?>" class="obra-btn-outline">Seja Voluntário</a>
    </div>
  </section>
</section>
