<?php $tmpl_dir = get_template_directory_uri(); ?>
<section class="hero-interno">
  <div class="hero-interno-tag">Nossas atividades</div>
  <h1 class="hero-interno-titulo">Projetos <span>simples</span>, humanos e transformadores.</h1>
  <p class="hero-interno-desc">Menos discurso, mais presença. Cada atividade existe para acolher, desenvolver e abrir oportunidades.</p>
  <div class="breadcrumb"><a href="<?php echo home_url('/'); ?>">Início</a> › <span>Projetos</span></div>
</section>

<section style="padding:80px 0;background:var(--fundo)">
  <div class="container">
    <div class="secao-tag">Atividades regulares</div>
    <h2 class="secao-titulo">O que fazemos todo dia</h2>
    <div class="cards-grid" style="margin-top:32px">
      <div class="card">
        <div class="card-img"><img src="<?php echo $tmpl_dir; ?>/assets/images/crianca1.png" alt="Educação Infantil"></div>
        <div class="card-body">
          <div class="card-tag">Educação</div>
          <div class="card-titulo">Educação Infantil Integral</div>
          <div class="card-texto">Atendemos 18 crianças de 3 a 5 anos na pré-escola da sede em período integral. Garantimos alimentação, cuidado e aprendizagem de qualidade.</div>
          <div class="card-horario">⏰ Seg–Sex · 08h às 15h30 · 18 crianças</div>
        </div>
      </div>
      <div class="card">
        <div class="card-img"><img src="<?php echo $tmpl_dir; ?>/assets/images/crianca2.png" alt="Reforço Escolar"></div>
        <div class="card-body">
          <div class="card-tag">Aprendizagem</div>
          <div class="card-titulo">Reforço Escolar</div>
          <div class="card-texto">54 crianças atendidas no contraturno — 30 na sede e 24 em Barriguda da Brasília — com aulas de reforço para fortalecer o aprendizado.</div>
          <div class="card-horario">⏰ Manhã 08h–10h30 · Tarde 13h–15h30</div>
        </div>
      </div>
      <div class="card">
        <div class="card-img"><img src="<?php echo $tmpl_dir; ?>/assets/images/baloes.png" alt="Socioeducativo"></div>
        <div class="card-body">
          <div class="card-tag">Socioeducativo</div>
          <div class="card-titulo">Atividades Socioeducativas</div>
          <div class="card-texto">Oficinas de artesanato, vagonite, pinturas e reciclagem para 10 adolescentes. Arte e cultura como caminhos de transformação.</div>
          <div class="card-horario">⏰ Tarde 13h às 15h30 · 10 adolescentes</div>
        </div>
      </div>
      <div class="card">
        <div class="card-img" style="background:var(--fundo);display:flex;align-items:center;justify-content:center;font-size:48px">💻</div>
        <div class="card-body">
          <div class="card-tag">Tecnologia</div>
          <div class="card-titulo">Informática Básica</div>
          <div class="card-texto">40 alunos de 8 a 18 anos aprendem informática básica para inclusão digital e desenvolvimento de habilidades para o futuro.</div>
          <div class="card-horario">⏰ Seg/Ter 08h30–10h30 e 13h30–15h30 · Qui 13h30–15h30</div>
        </div>
      </div>
      <div class="card">
        <div class="card-img"><img src="<?php echo $tmpl_dir; ?>/assets/images/violao.png" alt="Violão"></div>
        <div class="card-body">
          <div class="card-tag">Cultura</div>
          <div class="card-titulo">Aula de Violão</div>
          <div class="card-texto">Atividade cultural que desenvolve habilidades musicais e expressão artística nas crianças e adolescentes da comunidade.</div>
          <div class="card-horario">📅 Conforme programação</div>
        </div>
      </div>
      <div class="card">
        <div class="card-img"><img src="<?php echo $tmpl_dir; ?>/assets/images/arraia.png" alt="Colônia de Férias"></div>
        <div class="card-body">
          <div class="card-tag">Férias</div>
          <div class="card-titulo">Colônia de Férias</div>
          <div class="card-texto">400 crianças de 3 a 12 anos participam anualmente em Umburanas e comunidades. 40 voluntários garantem uma semana de alegria e aprendizado.</div>
          <div class="card-horario">📅 Janeiro e Fevereiro — anualmente</div>
        </div>
      </div>
    </div>

    <div style="margin-top:60px">
      <div class="secao-tag">Projetos concluídos</div>
      <h2 class="secao-titulo">Nossa trajetória de impacto</h2>
      <div style="display:grid;grid-template-columns:repeat(2,1fr);gap:16px;margin-top:32px">
        <div style="background:#fff;border-radius:16px;padding:24px;border:1px solid #f0ece4">
          <div class="projeto-status status-concluido">Concluído</div>
          <div style="font-family:'Montserrat',sans-serif;font-weight:700;color:var(--verde);font-size:16px;margin-bottom:8px">Curso de Corte e Costura</div>
          <div style="font-size:13px;color:var(--cinza)">Viabilizado pela ENGIE Brasil. Capacitação profissional para mulheres da comunidade.</div>
        </div>
        <div style="background:#fff;border-radius:16px;padding:24px;border:1px solid #f0ece4">
          <div class="projeto-status status-concluido">Concluído</div>
          <div style="font-family:'Montserrat',sans-serif;font-weight:700;color:var(--verde);font-size:16px;margin-bottom:8px">Horta Orgânica Mandalla</div>
          <div style="font-size:13px;color:var(--cinza)">Viabilizado pela ENGIE. Projeto de sustentabilidade em Barriguda da Brasília.</div>
        </div>
        <div style="background:#fff;border-radius:16px;padding:24px;border:1px solid #f0ece4">
          <div class="projeto-status status-concluido">Concluído</div>
          <div style="font-family:'Montserrat',sans-serif;font-weight:700;color:var(--verde);font-size:16px;margin-bottom:8px">Reforma do Fórum da Cidadania</div>
          <div style="font-size:13px;color:var(--cinza)">Projeto Ventos de Cultura — 1ª etapa. Viabilizado pela ENGIE Brasil.</div>
        </div>
        <div style="background:#fff;border-radius:16px;padding:24px;border:1px solid #f0ece4">
          <div class="projeto-status status-concluido">Concluído</div>
          <div style="font-family:'Montserrat',sans-serif;font-weight:700;color:var(--verde);font-size:16px;margin-bottom:8px">Capoeira e Pintura em Tela</div>
          <div style="font-size:13px;color:var(--cinza)">Viabilizado pelas Irmãzinhas de Assunção e Conexão Vida. Cultura e arte para crianças.</div>
        </div>
      </div>
    </div>
  </div>
</section>
