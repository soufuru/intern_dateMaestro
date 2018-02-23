<main role="main" class="probootstrap-main js-probootstrap-main">

    <h1>ユーザー登録</h1>

    <?=$this->Form->create($user) ?>
    <fieldset>
        <?=$this->Form->input('username',['type' => 'text']) ?>
        <?=$this->Form->input('password',['type' => 'text']) ?>
    </fieldset>
    <?=$this->Form->submit('登録')?>
    <?=$this->Form->end()?>


</main>
