<aside class="probootstrap-aside js-probootstrap-aside">
    <a href="#" class="probootstrap-close-menu js-probootstrap-close-menu d-md-none"><span class="oi oi-arrow-left"></span> Close</a>
    <div class="probootstrap-site-logo probootstrap-animate" data-animate-effect="fadeInLeft">
        <a href="" class="mb-2 d-block probootstrap-logo">Date Maestro</a>
        <p class="mb-0">Looking for fancy dates? If so, you came to the right place.</p>
    </div>
    <div class="probootstrap-overflow">
        <nav class="probootstrap-nav">
            <ul>
                <li class="probootstrap-animate active" data-animate-effect="fadeInLeft">
                    <?= $this->Html->link('Home', ['controller' => 'Plans', 'action' => 'index'])?></li>
                <li class="probootstrap-animate" data-animate-effect="fadeInLeft">
                    <?= $this->Html->link('Recommend', ['controller' => 'Plans', 'action' => 'view', $userId])?>
                </li>
                <li class="probootstrap-animate" data-animate-effect="fadeInLeft">
                    <?= $this->Html->link('My Account', ['controller' => 'Users', 'action' => 'view', $userId])?>
                </li>
                <li class="probootstrap-animate" data-animate-effect="fadeInLeft">
                    <?= $this->Html->link('Login', ['controller' => 'Users', 'action' => 'login']) ?>
                </li>
                <li class="probootstrap-animate" data-animate-effect="fadeInLeft"><a href="">Help</a></li>
            </ul>
        </nav>
        <footer class="probootstrap-aside-footer probootstrap-animate" data-animate-effect="fadeInLeft">
            <ul class="list-unstyled d-flex probootstrap-aside-social">
                <li><a href="<?= $this->Url->build(['controller' => 'Plans', 'action' => 'input'] )?>" class="p-2">
                        <span class="button-bar">Add your plan</span>
                    </a>
                </li>
            </ul>
        </footer>
    </div>
</aside>
