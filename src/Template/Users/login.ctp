<main role="main" class="probootstrap-main js-probootstrap-main">

    <h1>ログイン</h1>

    <?=$this->Form->create($user) ?>
    <?=$this->Form->input('name',['type' => 'text']) ?>
    <?=$this->Form->input('pass',['type' => 'text']) ?>
    <?=$this->Form->submit('ログイン')?>
    <?=$this->Form->end()?>


</main>
