      <!-- File: src/Template/Plans/index.ctp -->

      <h1>Plans</h1>
      <table>
          <tr>
              <th width="50">Id</th>
              <th>Date plan</th>
              <th width="300">User id</th>
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
              <td><?= $plan->user_id ?></td>
              <td>
                  <?= $plan->created->format(DATE_RFC850) ?>
              </td>
          </tr>
          <?php endforeach; ?>
      </table>