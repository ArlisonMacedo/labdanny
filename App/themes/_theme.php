<!DOCTYPE html>
<html lang="pt=br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= url('App/Styles/_root.css') ?>">
  <link rel="stylesheet" href="<?= url('App/Styles/home.css') ?>">
  <link rel="stylesheet" href="<?= url('App/Styles/dashboard.css') ?>">
  <link rel="stylesheet" href="<?= url('App/Styles/presenseAbsences.css') ?>">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
  <title>Lab Danny <?= $this->e($title);?></title>
</head>

<body>
  <?=$this->section('content')?>
</body>

</html>