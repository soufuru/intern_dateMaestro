      <!-- File: src/Template/Plans/index.ctp -->

      <h1>Plans</h1>
          <?= $this->Html->link('Home', ['action' => 'index']) ?><br>
          <?= $this->Html->link('おすすめ', ['action' => 'view', rand(1, 5)]) ?><br>
          <?= $this->Html->link('My Account', ['action' => 'index']) ?><br>

      <table>
          <tr>
              <th width="50">ID</th>
              <th>Date plan</th>
              <th width="300">User name</th>
              <th width="500">Created</th>
          </tr>

          <!-- ここから、$plans のクエリーオブジェクトをループして、投稿記事の情報を表示 -->

          <?php foreach ($plans as $plan): ?>
          <tr>
              <td><?= $plan->id ?></td>
              <td><?= $this->Html->image("https://uicookies.com/demo/theme/aside/images/img_4.jpg", [
                          "alt" => $plan->name,
                          'url' => ['action' => 'view', $plan->id]]) ?>
              </td>
              <td><?= $plan->user->name ?>
              <td>
                  <?= $plan->created->format(DATE_RFC850) ?>
              </td>
          </tr>
          <?php endforeach; ?>
      </table>