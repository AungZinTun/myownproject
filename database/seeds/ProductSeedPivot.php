<?php

use Illuminate\Database\Seeder;

class ProductSeedPivot extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            1 => [
                'category' => [1],
                'tag' => [1, 2, 3, 4],
                'type' => [],
            ],
            2 => [
                'category' => [2],
                'tag' => [],
                'type' => [],
            ],
            3 => [
                'category' => [1],
                'tag' => [1, 2],
                'type' => [],
            ],
            4 => [
                'category' => [1, 2],
                'tag' => [1, 2, 3, 4],
                'type' => [1],
            ],

        ];

        foreach ($items as $id => $item) {
            $product = \App\Product::find($id);

            foreach ($item as $key => $ids) {
                $product->{$key}()->sync($ids);
            }
        }
    }
}
