<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('products')->insert([
            [
                'name'=>'LG mobile',
                "price"=>"100$",
                "description"=>"A smart phone with 4gb ram and much more features",
                "category"=>"mobile",
                "gallery"=>"https://www.whatmobile.com.pk/admin/images/LG/LGVelvet-b.jpg",
            ],
            [
                'name'=>'Oppo mobile',
                "price"=>"150$",
                "description"=>"A smart phone with 8gb ram and much more features",
                "category"=>"mobile",
                "gallery"=>"https://media.istockphoto.com/id/1189152313/photo/dual-lens-camera-and-fingerprint-scanner-at-the-back-of-a-smartphone-from-a-popular.jpg?s=612x612&w=0&k=20&c=iZBsVgeg9rqrmWZ90P4FyW9kZ-L31cxRyhKkDa4NFXs=",
            ],
            [
                'name'=>'Samsung Tv',
                "price"=>"400$",
                "description"=>"A smart tv with much more features",
                "category"=>"mobile",
                "gallery"=>"https://png.pngitem.com/pimgs/s/175-1755339_smart-tv-samsung-qled-hd-png-download.png",
            ],
            [
                'name'=>'Apple Tv',
                "price"=>"600$",
                "description"=>"A smart tv and much more features",
                "category"=>"mobile",
                "gallery"=>"https://static01.nyt.com/images/2015/10/28/technology/techfix-listy-appletv-screen/techfix-listy-appletv-screen-superJumbo.png",
            ],
            [
                'name'=>'Dawlance fridge',
                "price"=>"350$",
                "description"=>"A fridge with much more features",
                "category"=>"mobile",
                "gallery"=>"https://www.aysonline.pk/wp-content/uploads/2022/02/PURPLE-600x600.jpg",
            ]
        ]);
    }
}
