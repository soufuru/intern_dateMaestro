<!-- File: /app/View/Posts/index.ctp -->
<h1> <?=  h($plan->name); ?></h1>

<?= $this->Form->submit("LIKE"); ?>

<table>
    <tr>
        <th>Time</th>
        <th>Place</th>
        <th>Picture</th>
    </tr>
    <?php foreach ($plan->spots as $spot): ?>
    <tr>
        <td><?= h($spot->start_time); ?></td>
        <td><?= h($spot->place); ?></td>
        <td><a href="<?=$spot->photo ?>"> <img src=<?=$spot->photo ?> border="0"></a></td>
    </tr>
    <?php endforeach; ?>
</table>

<h2>コメント</h2>
<p><?= h($plan->comment); ?></p>
