<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    //    $medicineCategories = array(

    //     "Non-opioid analgesics" => array("Tylenol (acetaminophen)", "Ibuprofen", "Advil (naproxen)"),
    //     "Opioid analgesics" => array("Morphine", "OxyContin (oxycodone)", "Vicodin (hydrocodone/acetaminophen)"),
    //     "Topical pain relievers" => array("Icy Hot (menthol/salicylate)", "Lidocaine patches", "Capsaicin cream"),


    //     "Antihistamines" => array("Zyrtec (cetirizine)", "Allegra (fexofenadine)", "Claritin (loratadine)"),
    //     "Decongestants" => array("Sudafed (pseudoephedrine)", "Afrin (oxymetazoline)", "Mucinex (guaifenesin)"),
    //     "Nasal corticosteroids" => array("Flonase (fluticasone)", "Nasonex (mometasone)", "Rhinocort (budesonide)"),



    //     );


    //     // dd($medicineCategories);
    //     foreach ($medicineCategories as $categoryName => $medicines) {
    //         $category = \App\Models\ProductCategory::create([
    //             'name' => $categoryName,
    //             'slug' => \Illuminate\Support\Str::slug($categoryName),
    //         ]);
    //         foreach ($medicines as $medicineName) {
    //             $medicines = \App\Models\Product::create([
    //                 'name' => $medicineName,
    //                 'slug' => \Illuminate\Support\Str::slug($medicineName),
    //                 'description' => 'This is the description',
    //                 'product_category_id' => $category->id,
    //                 'status' => '1',
    //                 'meta_title' => 'This is the meta title',
    //                 'meta_description' => 'This is the meta description',
    //                 'meta_keywords' => 'This is the meta keyword',

    //             // 'description' => $medicineName,
    //             // 'product_category_id' => $category->id,
    //             // 'status' => $medicineName,
    //             // 'meta_title' => $medicineName,
    //             // 'meta_description' => $medicineName,
    //             // 'meta_keywords' => $medicineName,

    //             ]);
    //         }
    //     }

    $categories = [
            [
                'name' => 'Antibiotics',
                'slug' => 'antibiotics',
                'description' => 'Medicines used to treat bacterial infections.',
                'parent_id' => null,
                'status' => true,
                'meta_title' => 'Antibiotics Medications',
                'meta_description' => 'Find a variety of antibiotics to treat bacterial infections.',
                'meta_keywords' => 'antibiotics, bacterial infection, penicillin, amoxicillin',
            ],
            [
                'name' => 'Analgesics',
                'slug' => 'analgesics',
                'description' => 'Pain relievers used to alleviate pain.',
                'parent_id' => null,
                'status' => true,
                'meta_title' => 'Analgesics Pain Relievers',
                'meta_description' => 'Explore a range of analgesics for effective pain relief.',
                'meta_keywords' => 'analgesics, pain relief, acetaminophen, ibuprofen',
            ],
            [
                'name' => 'Gastrointestinal Drugs',
                'slug' => 'gastrointestinal-drugs',
                'description' => 'Medicines for treating digestive system conditions.',
                'parent_id' => null,
                'status' => true,
                'meta_title' => 'Gastrointestinal Medications',
                'meta_description' => 'Discover medications to manage digestive health and treat gastrointestinal issues.',
                'meta_keywords' => 'gastrointestinal drugs, digestive health, antacids, laxatives',
            ],
        ];

        DB::table('product_categories')->insert($categories);

    }
}
