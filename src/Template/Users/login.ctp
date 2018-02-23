<main role="main" class="probootstrap-main js-probootstrap-main">

    <h1>ログイン</h1>

    <?=$this->Form->create($user) ?>
    <fieldset>
        <?= $this->Form->control('username',['type'=>'text']) ?>
        <?= $this->Form->control('password',['type'=>'password']) ?>
    </fieldset>
    <?=$this->Form->submit('ログイン')?>
    <?=$this->Form->end()?>


</main>
