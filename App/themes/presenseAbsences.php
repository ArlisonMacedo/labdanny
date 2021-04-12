<?php $this->layout('_theme', ['title' => '| Presenças e faltas'])  ?>;

<div id="PA-main">
  <header class="PA-header">
    <a href="<?= url('dashboard') ?>">
      <i class="fas fa-arrow-left"></i>
    </a>
    <p>Lab Profª Danny</p>
    <a href="<?= url('logout') ?>">
      <button>
        Sair
      </button>
    </a>
  </header>
  <div class="PA-tools" onclick="showSideBar()">
    <i class="fas fa-plus"></i>
  </div>
  <div id="PA-sidebar" class='sidebar'>
    <a href="javascript:void(0)" class='closeSideBar' onclick="closeSideBar()">x</a>
    <a href="#">Novo Aluno <i class="fas fa-plus"></i></a>
    <a href="#">Frequência</a>
  </div>
</div>

<script>
  function showSideBar() {
    document.getElementById('PA-sidebar').style.width = '250px'
    // document.getElementById('PA-main').style.marginLeft = '250px'
  }
  function closeSideBar() {
    document.getElementById('PA-sidebar').style.width =  '0'
    document.getElementById('PA-main').style.marginLeft = '0'
  }
</script>