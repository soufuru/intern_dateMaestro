<h1>Users</h1>
<?= $this->Html->link('Home', ['action' => 'index']) ?><br>
<?= $this->Html->link('おすすめ', ['action' => 'view', rand(1, 5)]) ?><br>
<?= $this->Html->link('My Account', ['action' => 'index']) ?><br>

<table>
    <tr>
        <th width="50">ID</th>
        <th width="300">User name</th>
        <th width="500">Created</th>
    </tr>

    <!-- ここから、$plans のクエリーオブジェクトをループして、投稿記事の情報を表示 -->

    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $plan->id ?></td>
            <td><?= $this->Html->image("https://uicookies.com/demo/theme/aside/images/img_4.jpg", [
                    "alt" => $plan->name,
                    'url' => ['action' => 'view', $plan->id]]) ?>
            </td>
            <td><?= $this->Html->link($plan->user->name, ['action' => 'user', $plan->user->id]) ?>
            <td>
                <?= $plan->created->format(DATE_RFC850) ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>