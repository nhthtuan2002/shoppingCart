<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('products')->truncate();
        DB::table('products')->insert([
            [
                'id'=> 1,
                'name' => 'áo hoodie',
                'price' => 2500000,
                'thumbnail'=>'https://sakurafashion.vn/upload/sanpham/large/4064-ao-hoodie-tui-gau-1.jpg',
                'created_at'=>Carbon::now()
            ],[
               'id' => 2,
                'name' => 'quần baggy',
                'price' => 2100000,
                'thumbnail'=>'https://product.hstatic.net/1000285106/product/7a99ad55-68c7-4c7b-b4dc-eb9f11de8e17_28c7cefa9d8e4899b5df30022c12d1f9_master.jpg',
                'created_at'=>Carbon::now()
            ],[
                'id' => 3,
                'name' => 'ví da',
                'price' => 1220000,
                'thumbnail'=>'https://lano.vn/wp-content/uploads/2019/07/vi-da-nam-lano-da-bo-cao-cap-co-cuc-bam-vdn061-1.jpg',
                'created_at'=>Carbon::now()
            ],[
                'id' => 4,
                'name' => 'túi xách',
                'price' => 17800000,
                'thumbnail'=>'https://gence.vn/wp-content/uploads/2019/12/tui-xach-cong-so-nam-da-alran-cao-cap-gce12-den-3.jpg',
                'created_at'=>Carbon::now()
            ],[
                'id' => 5,
                'name' => 'áo len',
                'price' => 1500000,
                'thumbnail'=>'https://shoplenkimthy.com/wp-content/uploads/2019/10/ao-len-nu-06.jpg',
                'created_at'=>Carbon::now()
            ],[
                'id' => 6,
                'name' => 'áo dạ',
                'price' => 4500000,
                'thumbnail'=>'https://sakurafashion.vn/upload/sanpham/large/7391-ao-khoac-da-nu-dang-dai-mau-tron-3.jpg',
                'created_at'=>Carbon::now()
            ],[
                'id' => 7,
                'name' => 'áo hồng',
                'price' => 2230000,
                'thumbnail'=>'https://storage.googleapis.com/cdn.nhanh.vn/store/13886/ps/20200515/22.jpg',
                'created_at'=>Carbon::now()
            ],[
                'id' => 8,
                'name' => 'quần sooc',
                'price' => 50000,
                'thumbnail'=>'https://hidanz.com/wp-content/uploads/2020/09/quan-short-nam-phai-co-trong-mua-he9.jpg',
                'created_at'=>Carbon::now()
            ],[
                'id' => 9,
                'name' => 'dép',
                'price' => 300000,
                'thumbnail'=>'https://file.hstatic.net/1000069459/file/z2077130733733_49d306cfecca1b0dfffebecf14fcadbf_802a9c38c59443d7868769743e955be9_grande.jpg',
                'created_at'=>Carbon::now()
            ],[
                'id' => 10,
                'name' => 'giày yz',
                'price' => 1200000,
                'thumbnail'=>'http://viendongshipping.com/wp-content/uploads/2019/04/giay-Balenciaga-1.png',
                'created_at'=>Carbon::now()
            ]
        ]);
    }
}
