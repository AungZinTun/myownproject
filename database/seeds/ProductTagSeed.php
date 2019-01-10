<?php

use Illuminate\Database\Seeder;

class ProductTagSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'PHP',],
            ['id' => 2, 'name' => 'Laravel',],
            ['id' => 3, 'name' => 'Python',],
            ['id' => 4, 'name' => 'Django',],
            ['id' => 5, 'name' => 'Microsoft Office',],

        ];

        foreach ($items as $item) {
            \App\ProductTag::create($item);
        }
    }
}
