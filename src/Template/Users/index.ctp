<h1>Users</h1>
<?= $this->element('Bar/bar') ?>

<table>
    <tr>
        <th width="50">ID</th>
        <th width="300">User name</th>
        <th width="300">User image</th>
        <th width="500">Created</th>
    </tr>

    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user->id ?></td>
            <td><?= $this->Html->link($user->name, ['action' => 'view', $user->id]) ?></td>
            <td><?= $this->Html->image("http://www.p4japan.com/fb-iryou/img/hito01.png", [
                    "alt" => $user->name]) ?>
            </td>
            <td>
                <?= $user->created->format(DATE_RFC850) ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>