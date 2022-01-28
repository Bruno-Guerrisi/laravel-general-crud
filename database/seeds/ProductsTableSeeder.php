<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = config('zalando_db');

        foreach ($products as $product) {

            $new_product = new Product();


            $new_product->posterOne = $product['posterOne'];
            $new_product->posterTwo = $product['posterTwo'];
            $new_product->brand = $product['brand'];
            $new_product->description = $product['description'];
            $new_product->price = $product['price'];

            $new_product-> save();
        }
    }
}
