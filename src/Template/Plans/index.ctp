      <!-- File: src/Template/Plans/index.ctp -->

      <h1>Plans</h1>
      <table>
          <tr>
              <th>Id</th>
              <th>Date plan</th>
              <th>Created</th>
          </tr>

          <!-- ここから、$plans のクエリーオブジェクトをループして、投稿記事の情報を表示 -->

          <?php foreach ($plans as $plan): ?>
          <tr>
              <td><?= $plan->id ?></td>
              <td>
                  <?= $this->Html->link($plan->name, ['action' => 'view', $plan->id]) ?>
              </td>
              <td>
                  <?= $plan->created->format(DATE_RFC850) ?>
              </td>
          </tr>
          <?php endforeach; ?>
      </table>