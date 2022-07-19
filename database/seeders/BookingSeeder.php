<?php

namespace Database\Seeders;

use App\Models\booking;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = [
            [
            'Tempat' => 'Bandara Soekarno Hatta',
            'deskripsi' => 'tempatnya nyaman',
            'price' => 70.000,
            'created_at' => date('Y-m-d H:i:s',time()),
            'updated_at' => date('Y-m-d H:i:s',time()),

        ],
        [
            'Tempat' => 'Bandara Soekarno Hatta',
            'deskripsi' => 'tempatnya nyaman dan aman',
            'price' => 70.000,
            'created_at' => date('Y-m-d H:i:s',time()),
            'updated_at' => date('Y-m-d H:i:s',time()),
        ]
    
    ];
        booking::insert($book);
    }
}
