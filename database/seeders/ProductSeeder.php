<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Added Start
        $products = [
            [
                'name' => 'Tahu Goreng',
                'image' => 'https://img.freepik.com/free-vector/hand-drawn-delicious-croquetas-illustration_23-2149189396.jpg',
                'price' => 120,
                'description' => 'PHP Language'
            ],
            [
                'name' => 'Lemonade',
                'image' => 'https://img.freepik.com/free-vector/long-island-ice-tea-cocktail-realistic_1284-3888.jpg?w=740&t=st=1681179120~exp=1681179720~hmac=f88ea342499f350eec1d3d63a92a1cfd07778cab4eaabaa7388a243496b6e427',
                'price' => 220,
                'description' => 'Laravel freamwork'
            ],
            [
                'name' => 'Hotdog',
                'image' => 'https://img.freepik.com/premium-vector/hotdog-vector-isolated-fast-food_484148-9.jpg',
                'price' => 300,
                'description' => 'Python Language'
            ],
            [
                'name' => 'Gudeg',
                'image' => 'https://img.freepik.com/premium-vector/hand-drawn-gudeg-food-1_269774-122.jpg?w=740',
                'price' => 110,
                'description' => 'Codeigniter freamwork'
            ], 
            [
                'name' => 'Gado-Gado',
                'image' => 'https://img.freepik.com/premium-vector/hand-drawn-gadogado-food-1_269774-121.jpg',
                'price' => 110,
                'description' => 'Codeigniter freamwork'
            ], 
            [
                'name' => 'Gudeg',
                'image' => 'https://img.freepik.com/premium-vector/hand-drawn-gudeg-food-1_269774-122.jpg?w=740',
                'price' => 110,
                'description' => 'Codeigniter freamwork'
            ], 
            [
                'name' => 'Ayam Penyet',
                'image' => 'https://img.freepik.com/premium-vector/ayam-penyet-indonesian-food_558855-220.jpg',
                'price' => 110,
                'description' => 'Codeigniter freamwork'
            ],
            [
                'name' => 'Nasi Lemak',
                'image' => 'https://img.freepik.com/free-vector/hand-drawn-nasi-lemak_23-2148938562.jpg?w=740&t=st=1681188712~exp=1681189312~hmac=87e4341ba93b7c3033c19866184faedf32e9b6949612dad803c04599e7099c33',
                'price' => 110,
                'description' => 'Codeigniter freamwork'
            ],
            [
                'name' => 'Dimsum',
                'image' => 'https://img.freepik.com/free-vector/hand-drawn-flat-design-chinese-food-illustration_23-2149269022.jpg?w=740&t=st=1681188565~exp=1681189165~hmac=5276651fb03533b453437cb39e0fb1db32c160d00c0dfce77f6a6ae5a8af6c67',
                'price' => 110,
                'description' => 'Codeigniter freamwork'
            ], 
            [
                'name' => 'Kebab',
                'image' => 'https://img.freepik.com/free-vector/hand-drawn-flat-design-turkish-food-illustration_23-2149269025.jpg?w=740&t=st=1681188551~exp=1681189151~hmac=d0022f8e379d3d1f87ba93329e7faadea0c7c5d3718629917d57d0721a38f236',
                'price' => 110,
                'description' => 'Codeigniter freamwork'
            ], 
            [
                'name' => 'Mochi',
                'image' => 'https://img.freepik.com/free-vector/hand-drawn-ching-ming-dumplings-illustration_23-2148891169.jpg?w=740&t=st=1681188418~exp=1681189018~hmac=515a2b9b1283ad40be1b6f6743d2e417d4fa14f69bc153610d33564dfc378971',
                'price' => 110,
                'description' => 'Codeigniter freamwork'
            ], 
            [
                'name' => 'Waffle',
                'image' => 'https://img.freepik.com/premium-vector/vector-illustration-belgian-waffle-with-ball-ice-cream-apricot-raspberry-chocolate-sauce_87693-1172.jpg?w=740',
                'price' => 110,
                'description' => 'Codeigniter freamwork'
            ], 
            [
                'name' => 'Ramen',
                'image' => 'https://img.freepik.com/premium-photo/ramen-illustration-hand-drawn-asian-food-illustration_217194-19.jpg?w=740',
                'price' => 110,
                'description' => 'Codeigniter freamwork'
            ], 
            [
                'name' => 'Sushi',
                'image' => 'https://img.freepik.com/free-vector/flat-design-korean-food-illustration_23-2149283397.jpg?w=740&t=st=1681188294~exp=1681188894~hmac=b326ef8140354c182151511c889c90547eacb1beaa524499d3fc6c1cddbe5765',
                'price' => 110,
                'description' => 'Codeigniter freamwork'
            ], 
            [
                'name' => 'Bapau',
                'image' => 'https://img.freepik.com/free-vector/hand-drawn-food-illustration_23-2149283393.jpg?w=740&t=st=1681188225~exp=1681188825~hmac=2936355a8e9466ef946a860cec6e1665fbf3e81debf9fb0ac5b71065efe7ddc8',
                'price' => 110,
                'description' => 'Codeigniter freamwork'
            ], 
            [
                'name' => 'Chesee Cake',
                'image' => 'https://img.freepik.com/premium-vector/piece-cheesecake-with-plate-chocolates-it_670330-372.jpg?w=740',
                'price' => 110,
                'description' => 'Codeigniter freamwork'
            ], 
            [
                'name' => 'Pancake',
                'image' => 'https://img.freepik.com/free-vector/breakfast-realistic-pancakes-top-view-image_1284-14472.jpg?w=740&t=st=1681187948~exp=1681188548~hmac=fb625e8dc99e33c78d8865a6558846381b2ff2d3027e82e115bddf38782c6166',
                'price' => 110,
                'description' => 'Codeigniter freamwork'
            ], 
            [
                'name' => 'Nasi Goreng',
                'image' => 'https://img.freepik.com/premium-vector/hand-drawn-fried-rice-with-egg_269774-110.jpg',
                'price' => 110,
                'description' => 'Codeigniter freamwork'
            ], 
            [
                'name' => 'Risol',
                'image' => 'https://img.freepik.com/free-vector/hand-drawn-delicious-croquetas-illustration_23-2149194285.jpg?t=st=1681187775~exp=1681188375~hmac=db6a0c8b072a81c5d6214aa984522422f958236953735f034e6027ee6141cb5a',
                'price' => 110,
                'description' => 'Codeigniter freamwork'
            ], 
            [
                'name' => 'Ayam Penyet',
                'image' => 'https://img.freepik.com/premium-vector/ayam-penyet-indonesian-food_558855-220.jpg',
                'price' => 110,
                'description' => 'Codeigniter freamwork'
            ],
            
        ];

        foreach ($products as $key => $value) {
            Product::create($value);
        }
        //Added End
    }
}