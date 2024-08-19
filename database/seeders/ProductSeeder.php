<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $products = [
            // Antibiotics
            [
                'name' => 'Amoxicillin',
                'slug' => 'amoxicillin',
                'description' => 'Amoxicillin is an antibiotic used to treat a variety of bacterial infections.',
                'product_category_id' => 1, // Assuming 1 is the ID for Antibiotics
                'status' => true,
                'meta_title' => 'Amoxicillin Antibiotic',
                'meta_description' => 'Buy Amoxicillin, a broad-spectrum antibiotic to treat bacterial infections.',
                'meta_keywords' => 'amoxicillin, antibiotic, bacterial infections',
                'image' => null,
                'price' => 12.99,
            ],
            [
                'name' => 'Ciprofloxacin',
                'slug' => 'ciprofloxacin',
                'description' => 'Ciprofloxacin is an antibiotic that fights bacterial infections.',
                'product_category_id' => 1, // Assuming 1 is the ID for Antibiotics
                'status' => true,
                'meta_title' => 'Ciprofloxacin Antibiotic',
                'meta_description' => 'Purchase Ciprofloxacin for effective treatment of bacterial infections.',
                'meta_keywords' => 'ciprofloxacin, antibiotic, bacterial infections',
                'image' => null,
                'price' => 15.50,
            ],
            // Analgesics
            [
                'name' => 'Ibuprofen',
                'slug' => 'ibuprofen',
                'description' => 'Ibuprofen is a pain reliever used to reduce fever and treat pain or inflammation.',
                'product_category_id' => 2, // Assuming 2 is the ID for Analgesics
                'status' => true,
                'meta_title' => 'Ibuprofen Pain Reliever',
                'meta_description' => 'Get Ibuprofen for effective pain relief and fever reduction.',
                'meta_keywords' => 'ibuprofen, pain reliever, fever reducer',
                'image' => null,
                'price' => 8.99,
            ],
            [
                'name' => 'Acetaminophen',
                'slug' => 'acetaminophen',
                'description' => 'Acetaminophen is a medication used to treat pain and fever.',
                'product_category_id' => 2, // Assuming 2 is the ID for Analgesics
                'status' => true,
                'meta_title' => 'Acetaminophen Pain Reliever',
                'meta_description' => 'Acetaminophen for effective relief of pain and fever.',
                'meta_keywords' => 'acetaminophen, pain relief, fever',
                'image' => null,
                'price' => 9.50,
            ],
            // Gastrointestinal Drugs
            [
                'name' => 'Omeprazole',
                'slug' => 'omeprazole',
                'description' => 'Omeprazole is used to treat gastroesophageal reflux disease (GERD) and other stomach issues.',
                'product_category_id' => 3, // Assuming 3 is the ID for Gastrointestinal Drugs
                'status' => true,
                'meta_title' => 'Omeprazole GERD Treatment',
                'meta_description' => 'Omeprazole for effective treatment of GERD and stomach issues.',
                'meta_keywords' => 'omeprazole, GERD, acid reflux',
                'image' => null,
                'price' => 11.25,
            ],
            [
                'name' => 'Loperamide',
                'slug' => 'loperamide',
                'description' => 'Loperamide is used to control and relieve diarrhea.',
                'product_category_id' => 3, // Assuming 3 is the ID for Gastrointestinal Drugs
                'status' => true,
                'meta_title' => 'Loperamide Diarrhea Relief',
                'meta_description' => 'Loperamide for effective control and relief of diarrhea.',
                'meta_keywords' => 'loperamide, diarrhea relief, gastrointestinal',
                'image' => null,
                'price' => 7.99,
            ],
        ];

        DB::table('products')->insert($products);
    }
}
