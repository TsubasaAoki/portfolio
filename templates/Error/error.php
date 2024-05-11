<?php
/**
 * @var \App\View\AppView $this
 * @var string $message
 */
$this->assign('title', 'Error');
?>
<?= $this->Html->css('error') ?>
<div class="row">
  <div class="column-responsive column-100 ">
    <div class="container">
      <p><?= $message ?></p>
    </div>
  </div>
</div>
