<?php

use Illuminate\Database\Seeder;

class CapsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('caps')->insert([

            ['name'=>"Men's Crushable Felt Hat",
            'description'=>"100% Wool Felt\n
            Wool hat featuring wide brim and faux-leather band with feather accent\n
			Water-repellent crushable construction",'price' => 27.2, 'image' => "/images/cap/c01.jpg", 
            'category_id' => 1,
            'supplier_id' => 1,],
            ['name'=>"UwantC Outdoor Wide Brim Hat with Strap",
            'description'=>"The men western hats.\n 
            Size: one size,can be adjusted size\n
            Good for Tourist, Fashion Hipster, Cosplay.",'price' => 11.89, 'image' => "/images/cap/c02.jpg",
            'category_id' => 1,
            'supplier_id' => 1,],
            ['name'=>"Fedora Outdoor Hat ",'description'=>"The Felt cowboy caps men western hats\n
            Size: one size,can be adjusted size\n
            Good for Tourist, Fashion Hipster, Cosplay.",'price' => 12.0, 'image' => "/images/cap/c05.jpeg",
            'category_id' => 1, 'supplier_id' => 1],
             ['name'=>"Fedora Outdoor Hat ",'description'=>"The men western hats\n
            Size: one size,can be adjusted size\n
            Good for Tourist, Fashion Hipster, Cosplay.",'price' => 12.0, 'image' => "/images/cap/boater1.jpeg",
            'category_id' => 2, 'supplier_id' => 1],
              ['name'=>"Fedora Outdoor Hat ",'description'=>"The Felt cowboy caps\n 
            Size: one size,can be adjusted size\n
            Good for Tourist, Fashion Hipster, Cosplay.",'price' => 12.0, 'image' => "/images/cap/boater2.jpeg",
            'category_id' => 3, 'supplier_id' => 1],
               ['name'=>"Fedora Outdoor Hat ",'description'=>"
            Size: one size,can be adjusted size\n 
            Good for Tourist, Fashion Hipster, Cosplay.",'price' => 12.0, 'image' => "/images/cap/c03.jpeg",
            'category_id' => 2, 'supplier_id' => 1],
               ['name'=>"Fedora Outdoor Hat ",'description'=>"The men western hats\n 
            Size: one size,can be adjusted size\n
            Good for Tourist, Fashion Hipster, Cosplay.",'price' => 12.0, 'image' => "/images/cap/c04.jpeg",
            'category_id' => 4, 'supplier_id' => 1],
               ['name'=>"Fedora Outdoor Hat ",'description'=>"The new fashion Faux Felt cowboy caps men western hats\n 
            Good for Tourist, Fashion Hipster, Cosplay.",'price' => 12.0, 'image' => "/images/cap/c06.jpeg",
            'category_id' => 3, 'supplier_id' => 1],
               ['name'=>"Fedora Outdoor Hat ",'description'=>"The Faux Felt cowboy caps 
            ",'price' => 12.0, 'image' => "/images/cap/c07.jpeg",
            'category_id' => 2, 'supplier_id' => 1],
               ['name'=>"Fedora Outdoor Hat ",'description'=>"The good quality hat 
            ",'price' => 12.0, 'image' => "/images/cap/cap1.jpg",
            'category_id' => 6, 'supplier_id' => 1],
               ['name'=>"Fedora Outdoor Hat ",'description'=>"The western hats.
            Good for Tourist, Fashion Hipster, Cosplay.",'price' => 12.0, 'image' => "/images/cap/hat.jpeg",
            'category_id' => 7, 'supplier_id' => 1],
               ['name'=>"Fedora Outdoor Hat ",'description'=>"The cowboy caps men western hats\n 
            Size: one size,can be adjusted size\n 
            Good for Tourist, Fashion Hipster, Cosplay.",'price' => 12.0, 'image' => "/images/cap/hat2.jpeg",
            'category_id' => 5, 'supplier_id' => 1],
               ['name'=>"Fedora Outdoor Hat ",'description'=>"The Felt cowboy western hats\n 
            Size: one size,can be adjusted size\n 
            Good for Tourist, Fashion Hipster, Cosplay.",'price' => 12.0, 'image' => "/images/cap/leather_fiddler.jpg",
            'category_id' => 3, 'supplier_id' => 1],
        ]);
    }
}
