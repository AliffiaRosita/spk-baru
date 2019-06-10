<?php

use Illuminate\Database\Seeder;

class RandomIndexTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('random_index')->insert([
            [
                'banyak_kriteria'=>1,
                'nilai'=>0
            ],
            [
                'banyak_kriteria'=>2,
                'nilai'=>0
            ],
            [
                'banyak_kriteria'=>3,
                'nilai'=>0.58
            ],
            [
                'banyak_kriteria'=>4,
                'nilai'=>0.9
            ],
            [
                'banyak_kriteria'=>5,
                'nilai'=>1.12
            ],
            [
                'banyak_kriteria'=>6,
                'nilai'=>1.24
            ],
            [
                'banyak_kriteria'=>7,
                'nilai'=>1.32
            ],
            [
                'banyak_kriteria'=>8,
                'nilai'=>1.41
            ],
            [
                'banyak_kriteria'=>9,
                'nilai'=>1.45
            ],
            [
                'banyak_kriteria'=>10,
                'nilai'=>1.49
            ],

        ]);
    }
}
