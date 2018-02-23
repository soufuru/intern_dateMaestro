<main role="main" class="probootstrap-main js-probootstrap-main">
    <h1> <?=  h($user->name); ?></h1>

    <table>
        <tr>
            <th>Plans</th>
            <th>Created</th>

        </tr>
        <?php foreach ($user->plans as $plan): ?>
            <tr>
                <td><?= $this->Html->link($plan->name, ['controller' => 'plans', 'action' => 'view', $plan->id]) ?></td>
                <td><?= h($plan->created); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</main>