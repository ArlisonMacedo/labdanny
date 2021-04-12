<?php $this->layout('_theme', ['title' => '| Presenças e faltas']); ?>

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
    <a href="#">Nova Frequência</a>
  </div>
  <div class="PA-content">
    <h1>Faltas e Presenças do Mês</h1>
    <!-- <div class='PA-data'>
      <div class='PA-data-header'>
        <p>Nome</p>
        <p>Mês/Ano</p>
        <p>Dia do Mês</p>
      </div>
      <div class='PA-data-person'>
        <p></p>
        <p></p>
        <p>x</p>
      </div>
    </div> -->

    <table id="costumers">
      <tr>
        <th>Aluno</th>
        <th>Mes/Ano</th>
        <th>Dia do Mês/Presença</th>
      </tr>
      <tr>
        <td>Arlison Macedo Pereira</td>
        <td>02-2021</td>
        <td id="day-pres">
          <div>01/X</div>
          <div>02/X</div>
          <div>03/X</div>
          <div>04/F</div>
          <div>05/F</div>
          <div>06/X</div>
          <div>07/X</div>
          <div>08/X</div>
        </td>
      </tr>
      <tr>
        <td>Arlison Macedo Pereira</td>
        <td>02-2021</td>
        <td id="day-pres">
          <div>01/X</div>
          <div>02/X</div>
          <div>03/X</div>
          <div>04/F</div>
          <div>05/F</div>
          <div>06/X</div>
          <div>07/X</div>
          <div>08/X</div>
        </td>
      </tr>
      <tr>
        <td>Arlison Macedo Pereira</td>
        <td>02-2021</td>
        <td id="day-pres">01/x</td>
      </tr>
      <tr>
        <td>Arlison Macedo Pereira</td>
        <td>02-2021</td>
        <td id="day-pres">01/x</td>
      </tr>
      <tr>
        <td>Arlison Macedo Pereira</td>
        <td>02-2021</td>
        <td id="day-pres">01/x</td>
      </tr>
      <tr>
        <td>Arlison Macedo Pereira</td>
        <td>02-2021</td>
        <td id="day-pres">01/x</td>
      </tr>
      <tr>
        <td>Arlison Macedo Pereira</td>
        <td>02-2021</td>
        <td id="day-pres">01/x</td>
      </tr>
      <tr>
        <td>Arlison Macedo Pereira</td>
        <td>02-2021</td>
        <td id="day-pres">01/x</td>
      </tr>
      <tr>
        <td>Arlison Macedo Pereira</td>
        <td>02-2021</td>
        <td id="day-pres">01/x</td>
      </tr>
      <tr>
        <td>Arlison Macedo Pereira</td>
        <td>02-2021</td>
        <td id="day-pres">01/x</td>
      </tr>
      <tr>
        <td>Arlison Macedo Pereira</td>
        <td>02-2021</td>
        <td id="day-pres">01/x</td>
      </tr>
      <tr>
        <td>Arlison Macedo Pereira</td>
        <td>02-2021</td>
        <td id="day-pres">01/x</td>
      </tr>
      <tr>
        <td>Arlison Macedo Pereira</td>
        <td>02-2021</td>
        <td id="day-pres">01/x</td>
      </tr>
      <tr>
        <td>Arlison Macedo Pereira</td>
        <td>02-2021</td>
        <td id="day-pres">01/x</td>
      </tr>
      <tr>
        <td>Arlison Macedo Pereira</td>
        <td>02-2021</td>
        <td id="day-pres">01/x</td>
      </tr>
      <tr>
        <td>Arlison Macedo Pereira</td>
        <td>02-2021</td>
        <td id="day-pres">01/x</td>
      </tr>
      <tr>
        <td>Arlison Macedo Pereira</td>
        <td>02-2021</td>
        <td id="day-pres">01/x</td>
      </tr>
      <tr>
        <td>Arlison Macedo Pereira</td>
        <td>02-2021</td>
        <td id="day-pres">01/x</td>
      </tr>
      <tr>
        <td>Arlison Macedo Pereira</td>
        <td>02-2021</td>
        <td id="day-pres">01/x</td>
      </tr>
    </table>
  </div>
</div>

<script>
  function showSideBar() {
    document.getElementById('PA-sidebar').style.width = '250px'
    // document.getElementById('PA-main').style.marginLeft = '250px'
  }

  function closeSideBar() {
    document.getElementById('PA-sidebar').style.width = '0'
    document.getElementById('PA-main').style.marginLeft = '0'
  }
</script>