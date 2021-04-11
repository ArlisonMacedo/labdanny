<?php $this->layout('_theme', ['title' => '| Boas Vindas']) ?>

<div id='main'>
  <div class='content'>
    <form class='form' method="POST" action="<?= url('login') ?>">
      <div class='form-header'>
        <h2>Boas Vindas</h2>
        <h3>Insirar os dados de login</h3>
      </div>
      <div class='form-content'>
        <label for="" class='label'>Usuario</label>
        <input type="text" class='input' name="user" placeholder="user@user.com">
        <label for="" class='label'>Senha</label>
        <input type="password" class='input' name="passwd" placeholder="minimo 8 caracteres">
      </div>

      <button class='form-button'>
        Entrar
      </button>
    </form>
  </div>
</div>