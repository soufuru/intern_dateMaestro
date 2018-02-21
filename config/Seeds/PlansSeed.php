<?php
use Migrations\AbstractSeed;

/**
 * Plans seed.
 */
class PlansSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '1',
                'name' => '天神->博多date',
                'user_id' => '1',
                'comment' => 'コメント',
                'deleted' => '0',
                'deleted_date' => NULL,
                'created' => '2018-02-20 11:57:47',
                'modified' => NULL,
            ],
        ];

        $table = $this->table('plans');
        $table->insert($data)->save();
    }
}
