<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Manufacturer;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnalogueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $index = 0;
        $idProduct = Product::skip($index)->first()->id;
        $idManufacturer = Manufacturer::inRandomOrder()->first()->id;
        $index++;

        return [
            'products_id' => $idProduct,
            'manufacturers_id' => $idManufacturer,
        ];
    }
}
