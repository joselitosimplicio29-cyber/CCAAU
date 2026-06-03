<?php
/**
 * Footer do tema CCAAU
 */
?>

<!-- BARRA LOGOS LEI ROUANET -->
<div style="width:100%;background:#fff;border-top:1px solid #f0ece4;padding:28px 5%;display:flex;align-items:center;justify-content:center;gap:40px;flex-wrap:wrap">
  <div style="text-align:center">
    <div style="font-size:10px;font-weight:700;letter-spacing:0.12em;text-transform:uppercase;color:#999;margin-bottom:12px">Patrocínio</div>
    <div style="display:flex;align-items:center;gap:32px;flex-wrap:wrap;justify-content:center">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rodape-logos.png" alt="Logos patrocínio" style="height:60px;width:auto;object-fit:contain" onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
      <div style="display:none;align-items:center;gap:32px;flex-wrap:wrap">
        <div style="font-family:'Montserrat',sans-serif;font-weight:800;font-size:15px;color:#005ca0;border:2px solid #005ca0;padding:8px 16px;border-radius:8px">Lei Rouanet</div>
        <div style="font-family:'Montserrat',sans-serif;font-weight:800;font-size:20px;color:#00a0d2">ENGIE</div>
      </div>
    </div>
  </div>
  <div style="width:1px;height:50px;background:#e5e7eb"></div>
  <div style="text-align:center">
    <div style="font-size:10px;font-weight:700;letter-spacing:0.12em;text-transform:uppercase;color:#999;margin-bottom:12px">Realização</div>
    <div style="display:flex;align-items:center;gap:24px;flex-wrap:wrap;justify-content:center">
      <div style="font-family:'Montserrat',sans-serif;font-weight:800;font-size:16px;color:#1E4D3B">CCAAU</div>
      <div style="font-family:'Montserrat',sans-serif;font-weight:700;font-size:12px;color:#333;text-align:center;line-height:1.3;text-transform:uppercase">Ministério<br>da Cultura</div>
      <div style="font-family:'Montserrat',sans-serif;font-weight:800;font-size:12px;color:#071d41;text-align:center;line-height:1.3;text-transform:uppercase">Governo<br>do Brasil</div>
    </div>
  </div>
</div>
<div style="background:#fff;padding:10px 5%;text-align:center;border-top:1px solid #f0ece4">
  <p style="font-size:11px;color:#aaa">"Ministério da Cultura e ENGIE apresentam" — Projeto realizado com recursos da Lei Federal de Incentivo à Cultura (Lei Rouanet).</p>
</div>

<!-- BARRA COPYRIGHT -->
<div class="footer-copy-bar">
  <span>© <?php echo date('Y'); ?> CCAAU — Umburanas, Bahia</span>
  <span>Desenvolvido por <a href="https://sertaolivre.com.br" target="_blank">TV Sertão Livre</a></span>
</div>

<?php wp_footer(); ?>
</body>
</html>
