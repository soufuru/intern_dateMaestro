<!-- File: src/Template/Plans/user.ctp -->

<h1><?= h($plan->user->name) ?></h1>

<p><small>Created: <?= $plan->created->format(DATE_RFC850) ?></small></p>