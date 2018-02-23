<main role="main" class="probootstrap-main js-probootstrap-main">
    <?= $this->Html->css('test.css', ['block' => true]); ?>
    <h1> <?=  h($plan->name); ?></h1>

    <div class="sample3Area" id="makeImg">
        <input type="checkbox" id="sample3check" checked="" name="like[]">
        <label for="sample3check">
            <span></span>
        </label>
    </div>

    <table>
        <tr>
            <th></th>
            <th>Picture</th>
        </tr>
        <?php foreach ($plan->spots as $spot): ?>
        <tr>
            <td><?= h($spot->start_time); ?></td>
        </tr>
        <tr>
            <td><?= h($spot->place); ?></td>
            <td>
                <a href="<?=$spot->photo ?>"> <img src=<?=$spot->photo ?> border="0"></a>
            </td>
        </tr>
        <tr><td>↓</td></tr>
        <?php endforeach; ?>

    </table>

    <h2>コメント</h2>
    <p><?= h($plan->comment); ?></p>
</main>
