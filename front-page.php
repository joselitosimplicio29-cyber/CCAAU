<?php get_header(); ?>

<!-- HERO -->
<section class="hero">
  <div class="hero-grid">
    <div class="hero-esq">
      <div class="hero-tag">Desde 2004 em Umburanas · Bahia</div>
      <h1 class="hero-title">Juntos, cultivamos <span>arte</span>, cuidado e oportunidades.</h1>
      <p class="hero-desc">Promovemos educação, cultura e cidadania para crianças, adolescentes e famílias de Umburanas.</p>
      <div class="hero-btns">
        <a href="<?php echo home_url('/sobre'); ?>" class="btn-primario">👥 Conheça o CCAAU</a>
        <a href="<?php echo home_url('/doacao'); ?>" class="btn-secundario">❤️ Faça uma doação</a>
      </div>
    </div>
    <div class="hero-dir">
      <div class="hero-dots"><?php for($i=0;$i<25;$i++) echo '<i></i>'; ?></div>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero.jpg" alt="Crianças do CCAAU" class="hero-foto">
      <div class="hero-badge">
        <div class="hero-badge-icon">🏆</div>
        <div class="hero-badge-txt">
          <strong>+20 anos</strong>
          <span>transformando vidas</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CARDS IMPACTO -->
<div class="impacto-strip">
  <div class="impacto-inner">
    <div class="impacto-card">
      <div class="impacto-icon">👥</div>
      <div>
        <div class="impacto-val">+500</div>
        <div class="impacto-label">Pessoas atendidas</div>
      </div>
    </div>
    <div class="impacto-card">
      <div class="impacto-icon">📚</div>
      <div>
        <div class="impacto-val">+20</div>
        <div class="impacto-label">Atividades realizadas</div>
      </div>
    </div>
    <div class="impacto-card">
      <div class="impacto-icon">❤️</div>
      <div>
        <div class="impacto-val">+30</div>
        <div class="impacto-label">Parceiros envolvidos</div>
      </div>
    </div>
    <div class="impacto-card">
      <div class="impacto-icon">🏡</div>
      <div>
        <div class="impacto-val">Comunidade</div>
        <div class="impacto-label">Umburanas - Bahia</div>
      </div>
    </div>
  </div>
</div>

<!-- SOBRE -->
<section id="sobre" class="sobre">
  <div class="container">
    <div class="sobre-grid">
      <div>
        <div class="sobre-tag-wrap">
          <div class="sobre-tag">Quem somos</div>
        </div>
        <h2 class="sobre-titulo">Uma instituição feita <span>por pessoas</span>, para pessoas.</h2>
        <p class="sobre-texto">O CCAAU nasceu do desejo de transformar realidades por meio da educação, da cultura e da cidadania. Fundado em 2004 por missionárias irlandesas, hoje é referência de cuidado e oportunidade em Umburanas.</p>
        <div class="sobre-btns">
          <a href="<?php echo home_url('/sobre'); ?>" class="btn-primario">Conheça Nossa História →</a>
          <a href="<?php echo home_url('/projetos'); ?>" class="btn-secundario">📖 Conheça Nossos Projetos</a>
        </div>
      </div>
      <div class="sobre-img">
        <div class="sobre-detalhe-circ"></div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fachada.png" alt="Fachada CCAAU">
      </div>
    </div>
  </div>
</section>

<!-- PILARES -->
<section class="pilares">
  <div class="container">
    <div class="pilares-header">
      <h2 class="pilares-titulo">Nossos pilares de atuação</h2>
      <p class="pilares-desc">Trabalhamos em diferentes frentes para promover desenvolvimento, inclusão e transformação social.</p>
      <div class="pilares-linha"></div>
    </div>
    <div class="pilares-grid">
      <div class="pilar-card">
        <div class="pilar-icon-wrap">🎓</div>
        <div class="pilar-nome">Educação</div>
        <p class="pilar-desc">Incentivamos o aprendizado como ferramenta para transformar vidas.</p>
        <div class="pilar-linha"></div>
      </div>
      <div class="pilar-card">
        <div class="pilar-icon-wrap">🎭</div>
        <div class="pilar-nome">Cultura</div>
        <p class="pilar-desc">Valorizamos as expressões artísticas e as tradições da nossa comunidade.</p>
        <div class="pilar-linha"></div>
      </div>
      <div class="pilar-card">
        <div class="pilar-icon-wrap">🤝</div>
        <div class="pilar-nome">Cidadania</div>
        <p class="pilar-desc">Promovemos direitos, deveres e participação ativa de todos na comunidade.</p>
        <div class="pilar-linha"></div>
      </div>
      <div class="pilar-card">
        <div class="pilar-icon-wrap">🫱🏽‍🫲🏾</div>
        <div class="pilar-nome">Parcerias</div>
        <p class="pilar-desc">Juntos, somos mais fortes para gerar impacto positivo e duradouro.</p>
        <div class="pilar-linha"></div>
      </div>
    </div>
  </div>
</section>

<!-- ATIVIDADES -->
<section id="atividades" class="atividades">
  <div class="container">
    <div class="secao-tag">Nossas atividades</div>
    <h2 class="secao-titulo">Projetos simples, humanos e transformadores.</h2>
    <p class="secao-desc">Menos discurso, mais presença. Cada atividade existe para acolher, desenvolver e abrir oportunidades.</p>
    <div class="cards-grid">
      <div class="card">
        <div class="card-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/crianca1.png" alt="Educação Infantil"></div>
        <div class="card-body">
          <div class="card-tag">Educação</div>
          <div class="card-titulo">Educação Infantil</div>
          <div class="card-texto">Cuidado, aprendizagem e desenvolvimento integral para 18 crianças de 3 a 5 anos em período integral.</div>
          <div class="card-horario">⏰ Seg–Sex · 08h às 15h30</div>
        </div>
      </div>
      <div class="card">
        <div class="card-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/crianca2.png" alt="Reforço Escolar"></div>
        <div class="card-body">
          <div class="card-tag">Aprendizagem</div>
          <div class="card-titulo">Acompanhamento Pedagógico</div>
          <div class="card-texto">Reforço escolar para 54 crianças no contraturno — 30 na sede e 24 na comunidade de Barriguda da Brasília.</div>
          <div class="card-horario">⏰ Manhã 08h–10h30 · Tarde 13h–15h30</div>
        </div>
      </div>
      <div class="card">
        <div class="card-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/violao.png" alt="Atividades Culturais"></div>
        <div class="card-body">
          <div class="card-tag">Cultura</div>
          <div class="card-titulo">Atividades Socioeducativas</div>
          <div class="card-texto">Arte, cultura e convivência como caminhos para transformar histórias de 10 adolescentes e jovens.</div>
          <div class="card-horario">⏰ Tarde 13h às 15h30</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- DIVISOR ONDA -->
<div class="onda-divisor">
  <svg viewBox="0 0 1440 100" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" height="100">
    <path d="M0,40 C240,100 480,0 720,50 C960,100 1200,10 1440,55 L1440,100 L0,100 Z" fill="#FFFDF9"/>
    <path d="M0,40 C240,100 480,0 720,50 C960,100 1200,10 1440,55" fill="none" stroke="#EAA236" stroke-width="2" opacity="0.4"/>
  </svg>
</div>

<!-- IMPACTO -->
<section id="impacto" class="impacto">
  <div class="container">
    <div class="impacto-layout">
      <div class="impacto-esq">
        <div class="secao-tag">Impacto Social</div>
        <h2 class="impacto-titulo">Presença que faz a <span>diferença.</span></h2>
        <p class="impacto-desc">Cada número representa uma família alcançada e uma nova possibilidade de futuro.</p>
        <a href="<?php echo home_url('/parceiros'); ?>" class="btn-primario">Veja nosso impacto completo →</a>
      </div>
      <div class="numeros">
        <div class="numero">
          <div class="numero-icon">👥</div>
          <div class="numero-val">400+</div>
          <div class="numero-nome">Pessoas atendidas</div>
          <div class="numero-label">Crianças, adolescentes e famílias beneficiadas diretamente.</div>
        </div>
        <div class="numero">
          <div class="numero-icon">📅</div>
          <div class="numero-val">20+</div>
          <div class="numero-nome">Anos de atuação</div>
          <div class="numero-label">Uma trajetória construída com dedicação e compromisso.</div>
        </div>
        <div class="numero">
          <div class="numero-icon">❤️</div>
          <div class="numero-val">100%</div>
          <div class="numero-nome">Gratuito</div>
          <div class="numero-label">Todos os serviços e atividades são oferecidos gratuitamente.</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PARCEIROS -->
<section id="parceiros" class="parceiros">
  <div class="container">
    <div class="secao-tag">Rede de apoio</div>
    <h2 class="secao-titulo">Parceiros que caminham junto.</h2>
    <p class="secao-desc">O CCAAU cresce com apoio de pessoas, empresas e instituições que acreditam na transformação social.</p>
    <div class="parceiros-grid">
      <div class="parceiro-card">
        <div class="parceiro-nome">🍀 Misean Cara</div>
        <div class="parceiro-desc">Instituição irlandesa que financia salários da coordenação, professoras, monitores e auxiliares, além de contabilidade e assessoria.</div>
        <div class="parceiro-pais">🇮🇪 Irlanda</div>
      </div>
      <div class="parceiro-card">
        <div class="parceiro-nome">⛪ Congregação das Irmãzinhas da Assunção</div>
        <div class="parceiro-desc">Mentora do Projeto "Criança Feliz", auxilia na composição de relatórios e aconselha nas decisões estratégicas.</div>
        <div class="parceiro-pais">🌍 Internacional</div>
      </div>
      <div class="parceiro-card">
        <div class="parceiro-nome">💛 Associação Conexão Vida</div>
        <div class="parceiro-desc">21 crianças apadrinhadas pela organização italiana Aghata Smeralda. Recursos cobrem alimentação, material didático e remédios.</div>
        <div class="parceiro-pais">🇮🇹 Itália / Salvador-BA</div>
      </div>
      <div class="parceiro-card">
        <div class="parceiro-nome">⚡ ENGIE Brasil</div>
        <div class="parceiro-desc">Empresa eólica parceira em projetos de corte e costura, reforma do Fórum e doações de cestas básicas e equipamentos.</div>
        <div class="parceiro-pais">🇧🇷 Umburanas — BA</div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta">
  <div class="cta-bg" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/arraia.png')"></div>
  <div class="cta-overlay"></div>
  <div class="container cta-content">
    <div class="cta-inner">
      <div class="secao-tag">Faça parte</div>
      <h2 class="cta-titulo">Juntos plantamos sonhos, juntos construímos realidades.</h2>
      <p class="cta-desc">Seu apoio ajuda a manter viva uma rede de educação, cultura, cuidado e esperança em Umburanas.</p>
      <a href="<?php echo home_url('/doacao'); ?>" class="btn-primario">Quero Ajudar →</a>
    </div>
  </div>
</section>

<!-- DOAÇÃO -->
<section id="doacao" class="doacao">
  <div class="container">
    <div class="doacao-grid">
      <div>
        <div class="secao-tag">Apoie o CCAAU</div>
        <h2 class="secao-titulo">Ajude a transformar vidas</h2>
        <p class="secao-desc">Sua doação garante alimentação, educação e cuidado para crianças e adolescentes vulneráveis de Umburanas.</p>
        <ul class="doacao-lista">
          <li>Seja voluntário nas nossas atividades</li>
          <li>Seja parceiro institucional</li>
          <li>Doe alimentos, roupas ou materiais</li>
          <li>Contribua mensalmente</li>
        </ul>
      </div>
      <div class="doacao-card">
        <h3>Faça uma doação via PIX</h3>
        <div class="pix-box">
          <div class="pix-label">Chave PIX — CNPJ</div>
          <div class="pix-chave">06.213.271/0001-01</div>
          <div class="pix-fav">Favorecido: Centro Comunitário de Apoio e Articulação de Umburanas-BA</div>
        </div>
        <p style="font-size:13px;color:var(--cinza);line-height:1.6;margin-bottom:20px">Sua doação é 100% revertida para as crianças e adolescentes atendidos pelo CCAAU.</p>
        <a href="https://wa.me/5574991962" target="_blank" class="btn-wpp">💬 Falar pelo WhatsApp</a>
      </div>
    </div>
  </div>
</section>

<!-- OFICINAS (tabs interativo) -->
<section id="oficinas" style="padding:80px 0;background:#fff">
  <div class="container">
    <div class="secao-tag">O que oferecemos</div>
    <h2 class="secao-titulo">Nossas oficinas e atividades</h2>
    <p class="secao-desc">Cada atividade é pensada para desenvolver potencial, fortalecer vínculos e abrir oportunidades.</p>
    <div class="oficinas-tabs">
      <div class="oficinas-nav">
        <button class="ofic-btn ativo" data-tab="educacao">🎓 Educação</button>
        <button class="ofic-btn" data-tab="cultura">🎭 Cultura</button>
        <button class="ofic-btn" data-tab="tecnologia">💻 Tecnologia</button>
        <button class="ofic-btn" data-tab="ferias">🎈 Férias</button>
      </div>
      <div class="ofic-painel ativo" id="tab-educacao">
        <div class="ofic-conteudo">
          <div class="ofic-foto"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/crianca1.png" alt="Educação Infantil"></div>
          <div class="ofic-texto">
            <div class="card-tag">Educação</div>
            <h3 class="ofic-titulo">Educação Infantil Integral</h3>
            <p>Atendemos 18 crianças de 3 a 5 anos na pré-escola da sede em período integral. Garantimos alimentação, cuidado e aprendizagem de qualidade.</p>
            <div class="ofic-horario">⏰ Seg–Sex · 08h às 15h30 · 18 crianças</div>
            <hr class="ofic-div">
            <h3 class="ofic-titulo">Reforço Escolar</h3>
            <p>54 crianças atendidas no contraturno — 30 na sede e 24 em Barriguda da Brasília — com aulas de reforço para fortalecer o aprendizado.</p>
            <div class="ofic-horario">⏰ Manhã 08h–10h30 · Tarde 13h–15h30</div>
          </div>
        </div>
      </div>
      <div class="ofic-painel" id="tab-cultura">
        <div class="ofic-conteudo">
          <div class="ofic-foto"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/violao.png" alt="Cultura"></div>
          <div class="ofic-texto">
            <div class="card-tag">Cultura</div>
            <h3 class="ofic-titulo">Aula de Violão</h3>
            <p>Atividade cultural que desenvolve habilidades musicais e expressão artística nas crianças e adolescentes da comunidade.</p>
            <div class="ofic-horario">📅 Conforme programação</div>
            <hr class="ofic-div">
            <h3 class="ofic-titulo">Atividades Socioeducativas</h3>
            <p>Oficinas de artesanato, vagonite, pinturas e reciclagem para 10 adolescentes. Arte e cultura como caminhos de transformação.</p>
            <div class="ofic-horario">⏰ Tarde 13h às 15h30</div>
          </div>
        </div>
      </div>
      <div class="ofic-painel" id="tab-tecnologia">
        <div class="ofic-conteudo">
          <div class="ofic-foto" style="background:var(--off-white);display:flex;align-items:center;justify-content:center;font-size:80px">💻</div>
          <div class="ofic-texto">
            <div class="card-tag">Tecnologia</div>
            <h3 class="ofic-titulo">Informática Básica</h3>
            <p>40 alunos de 8 a 18 anos aprendem informática básica para inclusão digital e desenvolvimento de habilidades para o futuro.</p>
            <div class="ofic-horario">⏰ Seg/Ter 08h30–10h30 e 13h30–15h30 · Qui 13h30–15h30</div>
          </div>
        </div>
      </div>
      <div class="ofic-painel" id="tab-ferias">
        <div class="ofic-conteudo">
          <div class="ofic-foto"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/baloes.png" alt="Colônia de Férias"></div>
          <div class="ofic-texto">
            <div class="card-tag">Férias</div>
            <h3 class="ofic-titulo">Colônia de Férias</h3>
            <p>400 crianças de 3 a 12 anos participam anualmente em Umburanas e comunidades. 40 voluntários garantem uma semana de alegria e aprendizado.</p>
            <div class="ofic-horario">📅 Janeiro e Fevereiro — anualmente</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- BIBLIOTECA E ARRAIÁ (cards destaque) -->
<section style="padding:60px 0 80px;background:var(--off-white)">
  <div class="container">
    <div class="secao-tag">Espaços e eventos especiais</div>
    <h2 class="secao-titulo">Muito mais no CCAAU</h2>
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:24px;margin-top:40px">
      <div style="border-radius:20px;overflow:hidden;position:relative;min-height:240px;cursor:pointer">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fachada.png" alt="Sede do CCAAU" style="width:100%;height:240px;object-fit:cover;display:block">
        <div style="position:absolute;inset:0;background:linear-gradient(to top,rgba(15,40,30,.85) 0%,transparent 60%)"></div>
        <div style="position:absolute;bottom:0;left:0;right:0;padding:24px">
          <div style="font-family:'Montserrat',sans-serif;font-weight:800;font-size:22px;color:#fff;margin-bottom:6px">Nossa Sede</div>
          <div style="font-size:13px;color:rgba(255,255,255,0.8);margin-bottom:14px">Rua da Brígida, 167 · Centro · Umburanas-BA</div>
          <a href="<?php echo home_url('/sobre'); ?>" style="display:inline-block;background:var(--laranja);color:#fff;padding:8px 20px;border-radius:8px;font-size:13px;font-weight:700;text-decoration:none">Saiba mais</a>
        </div>
      </div>
      <div style="border-radius:20px;overflow:hidden;position:relative;min-height:240px;cursor:pointer">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arraia.png" alt="Festa Junina" style="width:100%;height:240px;object-fit:cover;display:block">
        <div style="position:absolute;inset:0;background:linear-gradient(to top,rgba(15,40,30,.85) 0%,transparent 60%)"></div>
        <div style="position:absolute;bottom:0;left:0;right:0;padding:24px">
          <div style="font-family:'Montserrat',sans-serif;font-weight:800;font-size:22px;color:#fff;margin-bottom:6px">Eventos e Cultura</div>
          <div style="font-size:13px;color:rgba(255,255,255,0.8);margin-bottom:14px">Festa Junina, Colônia de Férias e muito mais</div>
          <a href="<?php echo home_url('/blog'); ?>" style="display:inline-block;background:var(--laranja);color:#fff;padding:8px 20px;border-radius:8px;font-size:13px;font-weight:700;text-decoration:none">Ver novidades</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CONTATO + MAPA + FORMULÁRIO -->
<section id="contato" style="padding:80px 0;background:#fff">
  <div class="container">
    <div class="secao-tag">Fale conosco</div>
    <h2 class="secao-titulo">Entre em contato</h2>
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:60px;margin-top:48px;align-items:start">
      <!-- Coluna esquerda: infos + mapa -->
      <div>
        <div class="contato-lista" style="margin-bottom:32px">
          <div class="contato-item">
            <div class="contato-icone">📍</div>
            <div>
              <div class="contato-label">Endereço</div>
              <div class="contato-valor">Rua da Brígida, nº 167, Centro<br>Umburanas — BA · CEP 44.798-000</div>
            </div>
          </div>
          <div class="contato-item">
            <div class="contato-icone">📞</div>
            <div>
              <div class="contato-label">Telefone / WhatsApp</div>
              <div class="contato-valor"><a href="tel:+557499196962">(74) 9919-6962</a> · Cleber: <a href="tel:+5574988115711">(74) 98811-5711</a></div>
            </div>
          </div>
          <div class="contato-item">
            <div class="contato-icone">✉️</div>
            <div>
              <div class="contato-label">E-mail</div>
              <div class="contato-valor"><a href="mailto:centrocomunitario2004@gmail.com">centrocomunitario2004@gmail.com</a></div>
            </div>
          </div>
          <div class="contato-item">
            <div class="contato-icone">🕐</div>
            <div>
              <div class="contato-label">Horário</div>
              <div class="contato-valor">Seg–Sex · 08h às 15h30 (pedagógico)<br>Seg–Sex · 08h às 17h (coordenação)</div>
            </div>
          </div>
        </div>
        <!-- MAPA GOOGLE EMBED -->
        <div style="border-radius:16px;overflow:hidden;border:1px solid #f0ece4">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3891.0!2d-41.3697!3d-10.7237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sRua+da+Br%C3%ADgida%2C+167%2C+Umburanas%2C+BA!5e0!3m2!1spt-BR!2sbr!4v1700000000000"
            width="100%" height="280" style="border:0;display:block" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
        <div class="redes" style="margin-top:20px">
          <a href="https://facebook.com/CcaauUmburanas" target="_blank" class="rede-btn">📘 Facebook</a>
          <a href="https://instagram.com/centrocomunitariodeumburanas" target="_blank" class="rede-btn">📸 Instagram</a>
          <a href="https://wa.me/5574991962" target="_blank" class="rede-btn">💬 WhatsApp</a>
        </div>
      </div>
      <!-- Coluna direita: formulário -->
      <div style="background:var(--off-white);border-radius:20px;padding:40px;border:1px solid #f0ece4">
        <h3 style="font-family:'Montserrat',sans-serif;font-size:22px;font-weight:700;color:var(--verde);margin-bottom:8px">Envie uma mensagem</h3>
        <p style="font-size:14px;color:var(--cinza);margin-bottom:28px">Responderemos em até 1 dia útil.</p>
        <?php if (function_exists('wpforms_display')) : ?>
          <?php wpforms_display(1); ?>
        <?php else : ?>
        <form action="mailto:centrocomunitario2004@gmail.com" method="post" enctype="text/plain" style="display:flex;flex-direction:column;gap:16px">
          <div>
            <label style="font-size:12px;font-weight:700;color:var(--verde);text-transform:uppercase;letter-spacing:0.08em;display:block;margin-bottom:6px">Nome completo</label>
            <input type="text" name="nome" required placeholder="Seu nome" style="width:100%;padding:12px 16px;border:1.5px solid #e5e7eb;border-radius:10px;font-size:14px;font-family:'Inter',sans-serif;outline:none;background:#fff">
          </div>
          <div>
            <label style="font-size:12px;font-weight:700;color:var(--verde);text-transform:uppercase;letter-spacing:0.08em;display:block;margin-bottom:6px">E-mail</label>
            <input type="email" name="email" required placeholder="seuemail@exemplo.com" style="width:100%;padding:12px 16px;border:1.5px solid #e5e7eb;border-radius:10px;font-size:14px;font-family:'Inter',sans-serif;outline:none;background:#fff">
          </div>
          <div>
            <label style="font-size:12px;font-weight:700;color:var(--verde);text-transform:uppercase;letter-spacing:0.08em;display:block;margin-bottom:6px">Assunto</label>
            <input type="text" name="assunto" placeholder="Como podemos ajudar?" style="width:100%;padding:12px 16px;border:1.5px solid #e5e7eb;border-radius:10px;font-size:14px;font-family:'Inter',sans-serif;outline:none;background:#fff">
          </div>
          <div>
            <label style="font-size:12px;font-weight:700;color:var(--verde);text-transform:uppercase;letter-spacing:0.08em;display:block;margin-bottom:6px">Mensagem</label>
            <textarea name="mensagem" rows="5" placeholder="Escreva sua mensagem aqui..." style="width:100%;padding:12px 16px;border:1.5px solid #e5e7eb;border-radius:10px;font-size:14px;font-family:'Inter',sans-serif;outline:none;resize:vertical;background:#fff"></textarea>
          </div>
          <button type="submit" class="btn-primario" style="justify-content:center;border:none;cursor:pointer;font-family:'Inter',sans-serif">📨 Enviar mensagem</button>
        </form>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<!-- BARRA DE PATROCÍNIO -->
<section style="padding:48px 0;background:var(--fundo);border-top:1px solid #f0ece4">
  <div class="container">
    <div style="display:flex;flex-direction:column;align-items:center;gap:24px">
      <div style="display:flex;gap:48px;align-items:center;flex-wrap:wrap;justify-content:center">
        <div style="text-align:center">
          <div style="font-size:10px;font-weight:700;letter-spacing:0.14em;text-transform:uppercase;color:var(--cinza);margin-bottom:16px">Patrocínio</div>
          <div style="display:flex;gap:32px;align-items:center;flex-wrap:wrap;justify-content:center">
            <div style="display:flex;flex-direction:column;align-items:center;gap:6px">
              <div style="font-family:'Montserrat',sans-serif;font-weight:800;font-size:14px;color:#005ca0;border:2px solid #005ca0;padding:8px 16px;border-radius:8px;letter-spacing:0.04em">Lei Rouanet</div>
              <div style="font-size:10px;color:var(--cinza)">PRONAC 24.6131</div>
            </div>
            <div style="display:flex;flex-direction:column;align-items:center;gap:6px">
              <div style="font-family:'Montserrat',sans-serif;font-weight:800;font-size:18px;color:#00a0d2;letter-spacing:0.04em">ENGIE</div>
              <div style="font-size:10px;color:var(--cinza)">Brasil</div>
            </div>
          </div>
        </div>
        <div style="width:1px;height:60px;background:#e5e7eb"></div>
        <div style="text-align:center">
          <div style="font-size:10px;font-weight:700;letter-spacing:0.14em;text-transform:uppercase;color:var(--cinza);margin-bottom:16px">Realização</div>
          <div style="display:flex;gap:32px;align-items:center;flex-wrap:wrap;justify-content:center">
            <div style="font-family:'Montserrat',sans-serif;font-weight:800;font-size:16px;color:var(--verde)">CCAAU</div>
            <div style="font-family:'Montserrat',sans-serif;font-weight:700;font-size:13px;color:#444;text-align:center;line-height:1.3">Ministério<br>da Cultura</div>
            <div style="font-family:'Montserrat',sans-serif;font-weight:800;font-size:13px;color:#071d41;text-align:center;line-height:1.3">Governo<br>do Brasil</div>
          </div>
        </div>
      </div>
      <div style="font-size:11px;color:var(--cinza);text-align:center;max-width:500px;line-height:1.6">
        "Ministério da Cultura e ENGIE apresentam" — Projeto realizado com recursos da Lei Federal de Incentivo à Cultura (Lei Rouanet).
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
