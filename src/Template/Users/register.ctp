<main role="main" class="probootstrap-main js-probootstrap-main">

<h1>ユーザー登録</h1>

<?=$this->Form->create($user) ?>
<?=$this->Form->input('name',['type' => 'text']) ?>
<?=$this->Form->input('pass',['type' => 'text']) ?>
<?=$this->Form->submit('登録')?>
<?=$this->Form->end()?>


</main>
