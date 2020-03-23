<?php

use Illuminate\Database\Seeder;
use App\Admin;
use App\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Product::class, 30)
        ->make()
        ->each(function($product){
            $admin = Admin::inRandomOrder() ->first();
            $product -> admin() -> associate($admin);
            $product -> save();
        });
    }
}
