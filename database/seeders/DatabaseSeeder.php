<?php

namespace Database\Seeders;

use App\Models\jadwalpiket;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        jadwalpiket::create([
            'hari' => 'Senin',
            'nama1' => 'Null',
            'nama2' => 'Null',
            'nama3' => 'Null',
            'nama4' => 'Null',
            'nama5' => 'Null',
            'nama6' => 'Null',
            'nama7' => 'Null',
            'nama8' => 'Null',
            'nama9' => 'Null',
            'nama10' => 'Null',
        ]);
        jadwalpiket::create([
            'hari' => 'Selasa',
            'nama1' => 'Null',
            'nama2' => 'Null',
            'nama3' => 'Null',
            'nama4' => 'Null',
            'nama5' => 'Null',
            'nama6' => 'Null',
            'nama7' => 'Null',
            'nama8' => 'Null',
            'nama9' => 'Null',
            'nama10' => 'Null',
        ]);
        jadwalpiket::create([
            'hari' => 'Rabu',
            'nama1' => 'Null',
            'nama2' => 'Null',
            'nama3' => 'Null',
            'nama4' => 'Null',
            'nama5' => 'Null',
            'nama6' => 'Null',
            'nama7' => 'Null',
            'nama8' => 'Null',
            'nama9' => 'Null',
            'nama10' => 'Null',
        ]);
        jadwalpiket::create([
            'hari' => 'Kamis',
            'nama1' => 'Null',
            'nama2' => 'Null',
            'nama3' => 'Null',
            'nama4' => 'Null',
            'nama5' => 'Null',
            'nama6' => 'Null',
            'nama7' => 'Null',
            'nama8' => 'Null',
            'nama9' => 'Null',
            'nama10' => 'Null',
        ]);
        jadwalpiket::create([
            'hari' => "Jum'at",
            'nama1' => 'Null',
            'nama2' => 'Null',
            'nama3' => 'Null',
            'nama4' => 'Null',
            'nama5' => 'Null',
            'nama6' => 'Null',
            'nama7' => 'Null',
            'nama8' => 'Null',
            'nama9' => 'Null',
            'nama10' => 'Null',
        ]);
        jadwalpiket::create([
            'hari' => 'Sabtu',
            'nama1' => 'Null',
            'nama2' => 'Null',
            'nama3' => 'Null',
            'nama4' => 'Null',
            'nama5' => 'Null',
            'nama6' => 'Null',
            'nama7' => 'Null',
            'nama8' => 'Null',
            'nama9' => 'Null',
            'nama10' => 'Null',
        ]);
    }
}
