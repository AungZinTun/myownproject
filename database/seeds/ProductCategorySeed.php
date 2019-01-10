<?php

use Illuminate\Database\Seeder;

class ProductCategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'Programming',],
            ['id' => 2, 'name' => 'Photography',],
            ['id' => 3, 'name' => 'Fashion Design',],

        ];

        foreach ($items as $item) {
            \App\ProductCategory::create($item);
        }
    }
}
