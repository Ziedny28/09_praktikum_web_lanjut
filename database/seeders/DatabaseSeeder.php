<?php

namespace Database\Seeders;

use App\Models\Post;
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
        $this->call([KelasSeeder::class]);
        \App\Models\Mahasiswa::factory(20)->create();
        $this->call([
            PostSeeder::class,
        ]);
        Post::factory(100)->create();

        // langsung seeding userbaru, kelas seeder
        $this->call([UserBaruSeeder::class,MataKuliahSeeder::class]);
        // $this->call([UpdateMahasiswaSeeder::class]);
    }
}
