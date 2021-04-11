<?php $this->layout('_theme', ['title' => ' | Área de Trabalho']); ?>

<div id='dashboard-page'>
  <header>
    <a href="<?= url() ?>">
      <i class="fas fa-arrow-left"></i>
    </a>
    <p>Olá Profª <?= $_SESSION['ADMIN']; ?></p>
    <a href="<?= url('logout') ?>">
      <button>
        Sair
      </button>
    </a>
  </header>
  <div class='content-dash'>
    <a href="#">
    <div class='card-dash'>
      <img src="https://cdn.pixabay.com/photo/2016/08/26/15/54/checklist-1622517_960_720.png" alt="" width="100" height="100">
      <h2>Presenças e Faltas</h2>
    </div>
  </a>
  <a href="#">
    <div class='card-dash'>
      <img src="https://cdn.pixabay.com/photo/2013/07/13/14/06/pen-162124_960_720.png" alt="" width="100" height="100">
      <h2>Notas e Situação</h2>
    </div>
  </a>
  </div>
  
</div>