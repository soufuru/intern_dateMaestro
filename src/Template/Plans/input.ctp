<h1>投稿</h1>

<?=$this->Form->create($plan) ?>
<?=$this->Form->input('name') ?>

<?php for ($i = 0; $i < 2; ++$i): ?>
    <?= $this->Form->input("spots.$i.place"); ?>
    <?= $this->Form->input("spots.$i.start_time"); ?>
<?php endfor; ?>
<?= $this->Form->input('comment') ?>

<?=$this->Form->submit('投稿')?>
<?=$this->Form->end()?>