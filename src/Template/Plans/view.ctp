<!-- File: /app/View/Posts/index.ctp -->
<h1> <?=  h($plans[0]->plan->name); ?></h1>

<?= $this->Form->submit("LIKE"); ?>

<table>
    <tr>
        <th>Time</th>
        <th>Place</th>
        <th>Picture</th>
    </tr>
    <?php foreach ($plans as $plan): ?>
    <tr>
        <td><?= h($plan->start_time); ?></td>
        <td><?= h($plan->place); ?></td>
        <td><a href=<?=$plan->photo ?>> <img src=<?=$plan->photo ?> border="0"></a></td>
    </tr>
    <?php endforeach; ?>
</table>

<h2>コメント</h2>
<p><?= h($plans->plan->comment); ?></p>
