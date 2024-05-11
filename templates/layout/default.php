<?php
use Cake\Core\Configure;

$css = ['normalize.min', 'milligram.min', 'cake', 'jBox.all.min', 'layout'];
?>
<!DOCTYPE html>
<html>
<head>
  <?= $this->Html->charset() ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    <?= $this->fetch('title') ?>
  </title>
  <?= $this->Html->meta('icon') ?>

  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

  <?= $this->Html->css($css) ?>
  <?= $this->Html->script(['jquery.min', 'jBox.all.min']) ?>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">

  <?= $this->fetch('meta') ?>
  <?= $this->fetch('css') ?>
  <?= $this->fetch('script') ?>
</head>
<body>
  <header>
  </header>
  <main class="main">
    <div class="container">
      <?= $this->Flash->render() ?>
      <?= $this->fetch('content') ?>
    </div>
  </main>
  <footer>
  </footer>
</body>
</html>
