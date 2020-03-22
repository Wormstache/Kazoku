<?php

use Illuminate\Database\Seeder;

class IconsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('icons')->insert([
            'title' => 'Book',
            'slug' => 'book',
            'image' => 'public/images/icons/001-book',
        ]);

        DB::table('icons')->insert([
            'title' => 'Clothes',
            'slug' => 'clothes',
            'image' => 'public/images/icons/001-cloth',
        ]);
        DB::table('icons')->insert([
            'title' => 'Budget',
            'slug' => 'budget',
            'image' => 'public/images/icons/002-budget',
        ]); 
        DB::table('icons')->insert([
            'title' => 'Calculate',
            'slug' => 'calculate',
            'image' => 'public/images/icons/003-calculate',
        ]); 
        DB::table('icons')->insert([
            'title' => 'Coffee',
            'slug' => 'coffee',
            'image' => 'public/images/icons/005-coffee',
        ]); 
        DB::table('icons')->insert([
            'title' => 'Creditcard',
            'slug' => 'creditcard',
            'image' => 'public/images/icons/006-creditcard',
        ]); 
        DB::table('icons')->insert([
            'title' => 'Drink',
            'slug' => 'drink',
            'image' => 'public/images/icons/007-drink',
        ]); 
        DB::table('icons')->insert([
            'title' => 'Electricity',
            'slug' => 'electricity',
            'image' => 'public/images/icons/008-electricity',
        ]); 
        DB::table('icons')->insert([
            'title' => 'Entertainment',
            'slug' => 'entertainment',
            'image' => 'public/images/icons/009-entertainment',
        ]); 
        DB::table('icons')->insert([
            'title' => 'Fastfood',
            'slug' => 'fastfood',
            'image' => 'public/images/icons/010-fastfood',
        ]); 
        DB::table('icons')->insert([
            'title' => 'Financial',
            'slug' => 'financial',
            'image' => 'public/images/icons/011-financial',
        ]); 
        DB::table('icons')->insert([
            'title' => 'Food',
            'slug' => 'food',
            'image' => 'public/images/icons/012-food',
        ]); 
        DB::table('icons')->insert([
            'title' => 'Fruit',
            'slug' => 'fruit',
            'image' => 'public/images/icons/013-fruit',
        ]); 
        DB::table('icons')->insert([
            'title' => 'Gas',
            'slug' => 'gas',
            'image' => 'public/images/icons/014-gas',
        ]); 
        DB::table('icons')->insert([
            'title' => 'Gift',
            'slug' => 'gift',
            'image' => 'public/images/icons/015-gift',
        ]); 
        DB::table('icons')->insert([
            'title' => 'Groceries',
            'slug' => 'groceries',
            'image' => 'public/images/icons/016-groceries',
        ]); 
        DB::table('icons')->insert([
            'title' => 'Gym',
            'slug' => 'gym',
            'image' => 'public/images/icons/017-gym',
        ]); 
        DB::table('icons')->insert([
            'title' => 'Painting',
            'slug' => 'painting',
            'image' => 'public/images/icons/018-painting',
        ]); 
        DB::table('icons')->insert([
            'title' => 'Income',
            'slug' => 'income',
            'image' => 'public/images/icons/019-inocome',
        ]); 
        DB::table('icons')->insert([
            'title' => 'Insurance',
            'slug' => 'insurance',
            'image' => 'public/images/icons/020-insurance',
        ]); 
        DB::table('icons')->insert([
            'title' => 'Investment',
            'slug' => 'investment',
            'image' => 'public/images/icons/021-investment',
        ]); 
        DB::table('icons')->insert([
            'title' => 'Laundry',
            'slug' => 'laundry',
            'image' => 'public/images/icons/022-laundry',
        ]); 
        DB::table('icons')->insert([
            'title' => 'Magazine',
            'slug' => 'magazine',
            'image' => 'public/images/icons/023-magazine',
        ]); 
        DB::table('icons')->insert([
            'title' => 'Medical',
            'slug' => 'medical',
            'image' => 'public/images/icons/024-medical',
        ]); 
        DB::table('icons')->insert([
            'title' => 'Mortgage',
            'slug' => 'mortgage',
            'image' => 'public/images/icons/025-mortgage',
        ]); 
        DB::table('icons')->insert([
            'title' => 'Movie',
            'slug' => 'movie',
            'image' => 'public/images/icons/026-movie',
        ]); 
        DB::table('icons')->insert([
            'title' => 'Music',
            'slug' => 'music',
            'image' => 'public/images/icons/027-music',
        ]); 
        DB::table('icons')->insert([
            'title' => 'Parking',
            'slug' => 'parking',
            'image' => 'public/images/icons/028-parking',
        ]); 
        DB::table('icons')->insert([
            'title' => 'Publictransport',
            'slug' => 'publictransport',
            'image' => 'public/images/icons/029-publictransport',
        ]); 
        DB::table('icons')->insert([
            'title' => 'Salon',
            'slug' => 'salon',
            'image' => 'public/images/icons/030-salon',
        ]); 
        DB::table('icons')->insert([
            'title' => 'Shoppingcart',
            'slug' => 'shoppingcart',
            'image' => 'public/images/icons/031-shoppingcart',
        ]);
        DB::table('icons')->insert([
            'title' => 'Snack',
            'slug' => 'snack',
            'image' => 'public/images/icons/032-snack',
        ]); 
        DB::table('icons')->insert([
            'title' => 'Massage',
            'slug' => 'massage',
            'image' => 'public/images/icons/033-massage',
        ]); 
        DB::table('icons')->insert([
            'title' => 'Toy',
            'slug' => 'toy',
            'image' => 'public/images/icons/034-toy',
        ]); 
        DB::table('icons')->insert([
            'title' => 'Travel',
            'slug' => 'travel',
            'image' => 'public/images/icons/035-travel',
        ]); 
        DB::table('icons')->insert([
            'title' => 'Wallet',
            'slug' => 'wallet',
            'image' => 'public/images/icons/036-walllet',
        ]);

    }
}
