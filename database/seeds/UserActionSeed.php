<?php

use Illuminate\Database\Seeder;

class UserActionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'user_id' => 1, 'action' => 'created', 'action_model' => 'types', 'action_id' => 1,],
            ['id' => 2, 'user_id' => 1, 'action' => 'created', 'action_model' => 'types', 'action_id' => 2,],
            ['id' => 3, 'user_id' => 1, 'action' => 'created', 'action_model' => 'types', 'action_id' => 3,],
            ['id' => 4, 'user_id' => 1, 'action' => 'updated', 'action_model' => 'types', 'action_id' => 1,],
            ['id' => 5, 'user_id' => 1, 'action' => 'created', 'action_model' => 'types', 'action_id' => 4,],
            ['id' => 6, 'user_id' => 1, 'action' => 'created', 'action_model' => 'types', 'action_id' => 5,],
            ['id' => 7, 'user_id' => 1, 'action' => 'created', 'action_model' => 'products', 'action_id' => 4,],

        ];

        foreach ($items as $item) {
            \App\UserAction::create($item);
        }
    }
}
