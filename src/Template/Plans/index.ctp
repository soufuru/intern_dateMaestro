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

    <div class="container-fluid d-md-none">
        <div class="row">
            <div class="col-md-12">
                <ul class="list-unstyled d-flex probootstrap-aside-social">
                    <li><a href="#" class="p-2"><span class="icon-twitter"></span></a></li>
                    <li><a href="#" class="p-2"><span class="icon-instagram"></span></a></li>
                    <li><a href="#" class="p-2"><span class="icon-dribbble"></span></a></li>
                </ul>
                <p>&copy; 2017 <a href="https://uicookies.com/" target="_blank">uiCookies:Aside</a>. <br> All Rights Reserved. Designed by <a href="https://uicookies.com/" target="_blank">uicookies.com</a></p>
            </div>
        </div>
    </div>
</main>