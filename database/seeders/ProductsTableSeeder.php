<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Sport Watch',
            'description' => 'A sports watch is defined as a highly functional, durable and usually water-resistant watch.',
            'image' => 'https://cdn2.chrono24.com/images/uhren/23209195-2azd0nntpctqcjl23e0nbveq-Square210.jpg',
            'price' => 500,
            'sale_price' => 300,
            'quantity' => 10,
            'category' => 'Sports',
            'type' => 'Men',
            'created_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Sport Watch',
            'description' => 'A sports watch is defined as a highly functional, durable and usually water-resistant watch.',
            'image' => 'https://cdn2.chrono24.com/images/uhren/23288727-d6aryvemjzlicjsv833kkvs6-Square210.jpg',
            'price' => 300,
            'sale_price' => 100,
            'quantity' => 5,
            'category' => 'Sports',
            'type' => 'Women',
            'created_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Sport Watch',
            'description' => 'A sports watch is defined as a highly functional, durable and usually water-resistant watch.',
            'image' => 'https://cdn2.chrono24.com/images/uhren/22669267-52sdunf39s56nsjpketciiem-Square210.jpg',
            'price' => 350,
            'sale_price' => 150,
            'quantity' => 15,
            'category' => 'Sports',
            'type' => 'Men',
            'created_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Sport Watch',
            'description' => 'A sports watch is defined as a highly functional, durable and usually water-resistant watch.',
            'image' => 'https://cdn2.chrono24.com/images/uhren/22947964-z451pvdhukhwucdsx03qaixn-Square210.jpg',
            'price' => 350,
            'sale_price' => 250,
            'quantity' => 7,
            'category' => 'Sports',
            'type' => 'Men',
            'created_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Sport Watch',
            'description' => 'A sports watch is defined as a highly functional, durable and usually water-resistant watch.',
            'image' => 'https://cdn2.chrono24.com/images/uhren/23009238-1sx52agww3zys2ly3lnzkuq0-Square210.jpg',
            'price' => 850,
            'sale_price' => 700,
            'quantity' => 3,
            'category' => 'Sports',
            'type' => 'Men',
            'created_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Sport Watch',
            'description' => 'A sports watch is defined as a highly functional, durable and usually water-resistant watch.',
            'image' => 'https://cdn2.chrono24.com/images/uhren/22491711-ii49t1g0v4ncb4wctzr4low9-Square210.jpg',
            'price' => 1250,
            'sale_price' => 900,
            'quantity' => 3,
            'category' => 'Sports',
            'type' => 'Men',
            'created_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Sport Watch',
            'description' => 'A sports watch is defined as a highly functional, durable and usually water-resistant watch.',
            'image' => 'https://cdn2.chrono24.com/images/uhren/22534323-gqol3xa94ejxsnh84fc28hub-Square210.jpg',
            'price' => 1350,
            'sale_price' => 950,
            'quantity' => 11,
            'category' => 'Sports',
            'type' => 'Men',
            'created_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Sport Watch',
            'description' => 'A sports watch is defined as a highly functional, durable and usually water-resistant watch.',
            'image' => 'https://cdn2.chrono24.com/images/uhren/22406428-wr0i0g0n04ejsloyg516qpfg-Square210.jpg',
            'price' => 1150,
            'sale_price' => 850,
            'quantity' => 13,
            'category' => 'Sports',
            'type' => 'Men',
            'created_at' => Carbon::now(),
        ]);
    }
}
