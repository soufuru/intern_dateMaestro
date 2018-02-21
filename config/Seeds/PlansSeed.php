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
        $data = [];

        $table = $this->table('plans');
        $table->insert($data)->save();
    }
}
