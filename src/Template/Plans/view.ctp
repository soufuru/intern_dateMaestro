<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: soufuru-->
<!-- * Date: 2018/02/20-->
<!-- * Time: 17:42-->
<!-- */ -->

<!-- File: /app/View/Posts/index.ctp -->
<!---->

<?php

$plan = $plans->first();

?>

<h1> <?=  $plan->name; ?></h1>

<?//=$this->Form->submit('LIKE')?>
<!--<input type="submit" name="insert" value="insert" onclick="insert()" />-->

<?//= $this->Form->submit('Like');?>


<table>
    <tr>
        <th>Time</th>
        <th>Place</th>
        <th>Picture</th>
    </tr>
    <!-- ここから、$posts配列をループして、投稿記事の情報を表示 -->
    <?php foreach ($spots as $spot): ?>
    <tr>
        <td><?= $spot->start_time; ?></td>
        <td><?= $spot->place; ?></td>
        <td><a href=<?=$spot->photo ?>> <img src=<?=$spot->photo ?> border="0"></a></td>
    </tr>
    <?php endforeach; ?>
</table>

<h2>コメント</h2>
<p><?= $plan->comment; ?></p>
