<?php

namespace Modules\ProductManagement\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\ProductManagement\Entities\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        Product::factory()->count(50000)->create();

        // $this->call("OthersTableSeeder");
    }
}
