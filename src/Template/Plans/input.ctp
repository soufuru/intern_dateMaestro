
<h1>投稿</h1>

<?=$this->Form->create('HogeHoge', ['url' => ['action' => 'piyo_piyo'], 'type' => 'get'])?>
<?=$this->Form->input('name', ['label' => 'デート名']);?>

<?= $this->Form->input('time', ['label' => '時間']) ?>
<?= $this->Form->input('place', ['label' => '場所']) ?>
<?=$this->Form->input('comment', [
        'label' => 'コメント',
        'rows' => 3,
]) ?>
<?=$this->Form->submit('送信')?>
<?=$this->Form->end()?>