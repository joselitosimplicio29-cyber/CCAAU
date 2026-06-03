document.addEventListener('DOMContentLoaded', function() {
  var btn = document.getElementById('navBtn');
  var links = document.getElementById('navLinks');
  if (btn && links) {
    btn.addEventListener('click', function() {
      links.classList.toggle('aberto');
    });
  }
});

// Tabs de oficinas
document.addEventListener('DOMContentLoaded', function() {
  var btns = document.querySelectorAll('.ofic-btn');
  btns.forEach(function(btn) {
    btn.addEventListener('click', function() {
      btns.forEach(function(b){ b.classList.remove('ativo'); });
      document.querySelectorAll('.ofic-painel').forEach(function(p){ p.classList.remove('ativo'); });
      btn.classList.add('ativo');
      var painel = document.getElementById('tab-' + btn.dataset.tab);
      if (painel) painel.classList.add('ativo');
    });
  });
});
