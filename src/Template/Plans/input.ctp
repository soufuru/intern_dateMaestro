<h1>投稿</h1>

<?=$this->Form->create($plan) ?>
<?=$this->Form->input('name') ?>

<?php
    for ($i = 0; $i < 2; ++$i)
    {
        echo $this->Form->input("spots.$i.place");
        echo $this->Form->input("spots.$i.start_time");

    }
?>

<?=$this->Form->submit('投稿')?>
<?=$this->Form->end()?>