<!-- File: src/Template/Plans/index.ctp -->
<main role="main" class="probootstrap-main js-probootstrap-main">
    <div class="card-columns">
        <?php foreach($plans as $plan): ?>
                <div class="card">
                    <?= $this->Html->image($plan->getFirstSpotImagePath(), ['class' => "card-img-top probootstrap-animate", 'url' => ['controller' => 'Plans', 'action' => 'view', $plan->id]] )?>
                </div>
        <?php endforeach; ?>
    </div>
</main>