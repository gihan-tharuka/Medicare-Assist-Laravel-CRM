<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stockData = [
            [
                'quantity' => 100,
                'product_id' => 1, // Assuming 1 is the ID for Amoxicillin
                'stock_status' => 1,
            ],
            [
                'quantity' => 50,
                'product_id' => 2, // Assuming 2 is the ID for Ciprofloxacin
                'stock_status' => 1,
            ],
            [
                'quantity' => 20,
                'product_id' => 3, // Assuming 3 is the ID for Ibuprofen
                'stock_status' => 1,
            ],
            [
                'quantity' => 80,
                'product_id' => 4, // Assuming 4 is the ID for Acetaminophen
                'stock_status' => 1,
            ],
            [
                'quantity' => 20,
                'product_id' => 5, // Assuming 5 is the ID for Omeprazole
                'stock_status' => 1,
            ],
            [
                'quantity' => 40,
                'product_id' => 6, // Assuming 6 is the ID for Loperamide
                'stock_status' => 1,
            ],
        ];

        DB::table('stocks')->insert($stockData);
    }
}
