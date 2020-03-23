<?php

use Illuminate\Database\Seeder;
use App\Review;
use App\Product;
class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Review::class, 50)
        ->make()
        ->each(function($review){
            $product = Product::inRandomOrder() ->first();
            $review -> product() -> associate($product);
            $review -> save();
        });
    }
}
