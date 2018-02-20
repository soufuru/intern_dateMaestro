<?php
use Migrations\AbstractMigration;

class Initial extends AbstractMigration
{
    public function up()
    {

        $this->table('Likes')
            ->addColumn('user_id', 'integer', [
                'comment' => 'ユーザーID',
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('plan_id', 'integer', [
                'comment' => 'プランID',
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('deleted', 'tinyinteger', [
                'comment' => '削除フラグ',
                'default' => null,
                'limit' => 4,
                'null' => true,
            ])
            ->addColumn('deleted_date', 'datetime', [
                'comment' => '削除日時',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '登録日時',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('Plans')
            ->addColumn('name', 'text', [
                'comment' => 'プラン名称',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('user_id', 'integer', [
                'comment' => 'ユーザーID',
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('comment', 'text', [
                'comment' => 'コメント',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('deleted', 'tinyinteger', [
                'comment' => '削除フラグ',
                'default' => null,
                'limit' => 4,
                'null' => true,
            ])
            ->addColumn('deleted_date', 'datetime', [
                'comment' => '削除日時',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '登録日時',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('Spots')
            ->addColumn('plan_id', 'integer', [
                'comment' => 'プランID',
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('place', 'text', [
                'comment' => '場所',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('start_time', 'time', [
                'comment' => '開始時間',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('photo', 'text', [
                'comment' => '写真',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('deleted', 'tinyinteger', [
                'comment' => '削除フラグ',
                'default' => null,
                'limit' => 4,
                'null' => true,
            ])
            ->addColumn('deleted_date', 'datetime', [
                'comment' => '削除日時',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '登録日時',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('Users')
            ->addColumn('name', 'text', [
                'comment' => 'ユーザー名',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('pass', 'text', [
                'comment' => 'パスワード',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('photo', 'binary', [
                'comment' => '写真',
                'default' => null,
                'limit' => 16777215,
                'null' => true,
            ])
            ->addColumn('deleted', 'tinyinteger', [
                'comment' => '削除フラグ',
                'default' => null,
                'limit' => 4,
                'null' => true,
            ])
            ->addColumn('deleted_date', 'datetime', [
                'comment' => '削除日時',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '登録日時',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();
    }

    public function down()
    {
        $this->dropTable('Likes');
        $this->dropTable('Plans');
        $this->dropTable('Spots');
        $this->dropTable('Users');
    }
}
