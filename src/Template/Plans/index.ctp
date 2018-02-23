<!-- File: src/Template/Plans/index.ctp -->
<main role="main" class="probootstrap-main js-probootstrap-main">
    <div class="card-columns">
        <?php foreach($plans as $plan): ?>
            <?php foreach ($plan->spots as $spot): ?>
                <div class="card">
                    <?= $this->Html->image($spot->photo, ['class' => "card-img-top probootstrap-animate", 'url' => ['controller' => 'Plans', 'action' => 'view', $plan->id]] )?>
                </div>
            <?php break ?>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </div>
</main>