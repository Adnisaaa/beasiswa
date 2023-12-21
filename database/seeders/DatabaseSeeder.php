<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('mahasiswas')->delete();

        // Tambahkan data seeder
        DB::table('mahasiswas')->insert([
            'nama' => 'Riska Saraswati',
            'nim' => '20102070',
            'ipk' => 2.4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('mahasiswas')->insert([
            'nama' => 'Anggraini Safira',
            'nim' => '20102162',
            'ipk' => 3.1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('mahasiswas')->insert([
            'nama' => 'Mustafidah Zahrotul',
            'nim' => '20102212',
            'ipk' => 3.9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('mahasiswas')->insert([
            'nama' => 'Becca Sandra',
            'nim' => '20102217',
            'ipk' => 2.3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('mahasiswas')->insert([
            'nama' => 'Adnisa Sabina',
            'nim' => '20102219',
            'ipk' => 3.8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('mahasiswas')->insert([
            'nama' => 'Gultom Edelin',
            'nim' => '20102238',
            'ipk' => 3.7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
