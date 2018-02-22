<?=    $this->Html->link('Home', ['controller' => 'Plans', 'action' => 'index']) ?><br>
<?=    $this->Html->link('おすすめ', ['controller' => 'Plans', 'action' => 'view', rand(1, 5)]) ?><br>
<?=    $this->Html->link('My Account', ['controller' => 'Users', 'action' => 'view', 1]) ?><br>
