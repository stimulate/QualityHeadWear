<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => "COWBOY HATS", 'description' => "The cowboy hat is a high-crowned, wide-brimmed hat best known as the defining piece of attire for the North American cowboy.",
            ],
            ['name' => "VISORS", 'description' => "A visor (also spelled vizor) is a surface that protects the eyes, such as shading them from the sun or other bright light or protecting them from objects.",
            ],
            ['name' => "Boater Hat", 'description' => "A boater is a kind of summer hat worn by men, regarded as somewhat formal, and particularly popular in the late 19th century and early 20th century.",
            ],
            ['name' => "BEANIES", 'description' => "A beanie is a knit cap, originally of wool (though now often of synthetic fibers) is designed to provide warmth in cold weather.",
            ],
            ['name' => "CAP", 'description' => "A cap is a form of headgear. Caps have crowns that fit very close to the head. They are typically designed for warmth and, when including a visor, blocking sunlight from the eyes. They come in many shapes and sizes.",
            ],
            ['name' => "Fedora", 'description' => "A fedora is a hat with a soft brim and indented crown. It is typically creased lengthwise down the crown and \"pinched\" near the front on both sides.Fedoras can also be creased with teardrop crowns, diamond crowns, center dents, and others, and the positioning of pinches can vary. The typical crown height is 4.5 inches (11 cm).",
            ],
            ['name' => "Stetson", 'description' => "Stetson created a rugged hat for himself made from thick beaver felt while panning for gold in Colorado. According to legend, Stetson invented the hat while on a hunting trip while showing his companions how he could make cloth out of fur without tanning. Fur felt hats are lighter, they maintain their shape, and withstand weather and renovation better.",
            ]
        ]);
    }
}
