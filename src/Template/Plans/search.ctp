<main role="main" class="probootstrap-main js-probootstrap-main">
    <h1>Search</h1>
    <p>Find your ideal date.</p>
    <?= $this->Form->create() ?>
    <fieldset>
        <?php
        echo $this->Form->input('find', [
                'label' => ['text' => 'phrase'
                ],
        'required' => 'required'
        ]);
        echo $this->Form->button('search');
        ?>
    </fieldset>
    <?= $this->Form->end() ?>

        <table>
            <tbody>
            <?php foreach ($plans as $plan): ?>
            <tr>
                <td><?= $this->Html->link($plan)?></td>
                <?php endforeach; ?>
            </tr>
            </tbody>
        </table>
</main>