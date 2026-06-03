<?php
/**
 * Header do tema CCAAU
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- TOPBAR -->
<div class="topbar">
  <div class="topbar-left">
    <span class="topbar-item">📍 Umburanas - Bahia</span>
    <span class="topbar-item">✉️ centrocomunitario2004@gmail.com</span>
    <span class="topbar-item">📱 (74) 9919-6962</span>
  </div>
  <div class="topbar-right">
    <a href="https://instagram.com/centrocomunitariodeumburanas" target="_blank" title="Instagram">📷</a>
    <a href="https://facebook.com/CcaauUmburanas" target="_blank" title="Facebook">👤</a>
    <a href="https://wa.me/5574991962" target="_blank" title="WhatsApp">💬</a>
  </div>
</div>

<!-- NAV -->
<nav id="nav">
  <a href="<?php echo home_url('/'); ?>" class="nav-logo">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-transparente.png" alt="CCAAU" style="background:#1E4D3B;border-radius:50%;padding:2px;border:none !important">
    <div>
      <div class="nav-logo-name">CCAAU</div>
      <div class="nav-logo-sub">Centro Comunitário de Apoio e Articulação de Umburanas</div>
    </div>
  </a>
  <ul class="nav-links" id="navLinks">
    <li><a href="<?php echo home_url('/'); ?>" <?php if(is_front_page()) echo 'class="ativo"'; ?>>Início</a></li>
    <li><a href="<?php echo home_url('/sobre'); ?>" <?php if(is_page('sobre')) echo 'class="ativo"'; ?>>Sobre</a></li>
    <li><a href="<?php echo home_url('/projetos'); ?>" <?php if(is_page('projetos')) echo 'class="ativo"'; ?>>Projetos</a></li>
    <li><a href="<?php echo home_url('/parceiros'); ?>" <?php if(is_page('parceiros')) echo 'class="ativo"'; ?>>Parceiros</a></li>
    <li><a href="<?php echo home_url('/transparencia'); ?>" <?php if(is_page('transparencia')) echo 'class="ativo"'; ?>>Transparência</a></li>
    <li><a href="<?php echo home_url('/blog'); ?>" <?php if(is_home()||is_singular('post')) echo 'class="ativo"'; ?>>Blog</a></li>
    <li><a href="<?php echo home_url('/contato'); ?>" <?php if(is_page('contato')) echo 'class="ativo"'; ?>>Contato</a></li>
    <li><a href="<?php echo home_url('/doacao'); ?>" class="btn-doar">Faça uma Doação</a></li>
  </ul>
  <button class="nav-mobile" id="navBtn" aria-label="Menu">☰</button>
</nav>
