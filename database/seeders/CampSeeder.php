<?php

namespace Database\Seeders;

use App\Models\Camp;
use Illuminate\Database\Seeder;

class CampSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps = 
        [
            [
                'title'         => 'Gila Belajar',
                'slug'          => 'gila-belajar',
                'price'         => 380,
                'created_at'    => date('Y-m-d H:i:s', time())
            ],
            [
                'title'         => 'Belum Gila Banget',
                'slug'          => 'belum-gila-banget',
                'price'         => 280,
                'created_at'    => date('Y-m-d H:i:s', time())
            ],
        ];

        // cara 1
        foreach ($camps as $key => $camp) {
            Camp::create($camp);
        }

        // cara ke 2
        // Camp::insert($camps);
    }
}
