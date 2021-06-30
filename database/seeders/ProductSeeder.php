<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert(
            [
                [
                    'name'=>'LG mobile A',
                    'price'=>'200',
                    'description'=>'A smartphone with 4gb ram and much more features',
                    'category'=>'mobile',
                    'gallery'=>'https://www.lg.com/in/images/mobile-phones/md06155757/gallery/Platinum_07-1100-V3.jpg',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ],
                [
                    'name'=>'LG mobile B',
                    'price'=>'300',
                    'description'=>'A smartphone with 6gb ram and much more features',
                    'category'=>'mobile',
                    'gallery'=>'https://www.lg.com/in/images/mobile-phones/md06155757/gallery/Platinum_07-1100-V3.jpg',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ],
                [
                    'name'=>'LG mobile C',
                    'price'=>'400',
                    'description'=>'A smartphone with 8gb ram and much more features',
                    'category'=>'mobile',
                    'gallery'=>'https://www.lg.com/in/images/mobile-phones/md06155757/gallery/Platinum_07-1100-V3.jpg',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ],
                [
                    'name'=>'LG mobile D',
                    'price'=>'500',
                    'description'=>'A smartphone with 10gb ram and much more features',
                    'category'=>'mobile',
                    'gallery'=>'https://www.lg.com/in/images/mobile-phones/md06155757/gallery/Platinum_07-1100-V3.jpg',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ],
                [
                    'name'=>'LG mobile E',
                    'price'=>'600',
                    'description'=>'A smartphone with 12gb ram and much more features',
                    'category'=>'mobile',
                    'gallery'=>'https://www.lg.com/in/images/mobile-phones/md06155757/gallery/Platinum_07-1100-V3.jpg',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ]
            ]
        );
    }
}
