<?php
/**
 * Footer do tema CCAAU
 */
?>

<!-- BARRA DE MARCAS -->
<div class="footer-marcas-bar" style="width:100%;background:#fff;border-top:1px solid #f0ece4;padding:24px 5%;text-align:center">
  <img
    src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/barra-de-marcas.jpg'); ?>"
    alt="Lei Rouanet, ENGIE, CCAAU, Ministério da Cultura e Governo do Brasil"
    style="display:block;width:min(100%,900px);height:auto;margin:0 auto"
  >
</div>

<!-- BARRA COPYRIGHT -->
<div class="footer-copy-bar">
  <span>© <?php echo date('Y'); ?> CCAAU — Umburanas, Bahia</span>
  <span>Desenvolvido por <a href="https://sertaolivre.com.br" target="_blank">TV Sertão Livre</a></span>
</div>

<?php wp_footer(); ?>
</body>
</html>
