<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Date Maestro</title>

    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->element('css_js/cj') ?>


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>

<aside class="probootstrap-aside js-probootstrap-aside">
    <?= $this->element('Bar/bar') ?>

    <a href="#" class="probootstrap-close-menu js-probootstrap-close-menu d-md-none"><span class="oi oi-arrow-left"></span> Close</a>
    <div class="probootstrap-site-logo probootstrap-animate" data-animate-effect="fadeInLeft">

        <a href="" class="mb-2 d-block probootstrap-logo">Home</a>
        <p class="mb-0">Another free html5 bootstrap 4 template by <a href="https://uicookies.com/" target="_blank">uiCookies</a></p>
    </div>
    <div class="probootstrap-overflow">
        <nav class="probootstrap-nav">
            <ul>
                <li class="probootstrap-animate active" data-animate-effect="fadeInLeft"><a href="index.html">Home</a></li>
                <li class="probootstrap-animate" data-animate-effect="fadeInLeft"><a href="about.html">About</a></li>
                <li class="probootstrap-animate" data-animate-effect="fadeInLeft"><a href="services.html">Services</a></li>
                <li class="probootstrap-animate" data-animate-effect="fadeInLeft"><a href="portfolio.html">Portfolio</a></li>
                <li class="probootstrap-animate" data-animate-effect="fadeInLeft"><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
        <footer class="probootstrap-aside-footer probootstrap-animate" data-animate-effect="fadeInLeft">
            <ul class="list-unstyled d-flex probootstrap-aside-social">
                <li><a href="#" class="p-2"><span class="button normal">Facebook</span></a></li>
                <li><a href="#" class="p-2"><span class="button normal">Instagram</span></a></li>
                <li><a href="#" class="p-2"><span class="button normal">Twitter</span></a></li>
            </ul>
        </footer>
    </div>
</aside>

<!--    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href="">Date Maestro</a></h1>
            </li>
        </ul>
    </nav>
    -->
    <?= $this->element('Bar/bar') ?>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
