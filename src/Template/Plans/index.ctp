<!-- File: src/Template/Plans/index.ctp -->
<main role="main" class="probootstrap-main js-probootstrap-main">
    <div class="card-columns">
        <?php foreach($plans as $plan): ?>
            <div class="card">
                <a href="<?= $this->Url->build(['action' => 'view', $plan->id] )?>">
                    <img class="card-img-top probootstrap-animate" src="<?= $plan->photo ?>" alt="Card image cap">
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</main>