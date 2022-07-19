<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Shop;
use App\Models\booking;
class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

        public function run()
        {
            $inventory = [
                [
                'title' => 'Yamalube Matic',
                'merek' => 'Yamaha',
                'price' => 70.000,
                'deskripsi' => 'Yamalube Sport Motor Oil diformulasikan khusus untuk mesin motor 4-Tak modern tipe moped (underbone) dan tipe sport yang mana membutuhkan pelumasan untuk performa yang lebih baik.

                Detail:
                1. Melindungi mesin dari karat dan korosi
                2. Membersihkan dan menjaga komponen mesin tetap bersih dari endapan endapan
                3. Dispersan sehingga mampu bekerja pada temperatur rendah
                4. Stabilitas daya oksidasi yang tinggi mampu mempertahankan kekentalan
                5. Lebih ramah lingkungan
                
                Direkomendasikan untuk motor 4-Tak modern tipe moped dan sport
                
                Material: Semi Synthetic',
                'created_at' => date('Y-m-d H:i:s',time()),
                'updated_at' => date('Y-m-d H:i:s',time()),
    
            ],
            [
                'title' => 'Michelin Ban Motor',
                'merek' => 'Michelin',
                'price' => 468.000,
                'deskripsi' => 'Sebuah merek bernama MICHELIN dan MOTO GP yang disetujui dan diakui oleh Dorna Ban Motor pertama yang membawa semangat MotoGP ke dalam keseharian berkendara


                Daya Cengkram luar biasa di permukaan kering
                Teknologi baru dari soft Compound dan desain alur yang berasar dari ban-ban motor MotoGP memberikan daya cengkram luar biasa baik di permukaan kering dengan sensasi balapan.
                Tetap Aman di Permukaan Basah
                Silica Rain Tecnology meningkatkan daya cengkram ban di permukaan basah tanpa mengurangi usia ban',
                'created_at' => date('Y-m-d H:i:s',time()),
                'updated_at' => date('Y-m-d H:i:s',time()),
    
            ]
        
        ];
            Shop::insert($inventory);
        }
        
    
}
