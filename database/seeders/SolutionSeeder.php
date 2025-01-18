<?php

namespace Database\Seeders;

use App\Models\Solution;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SolutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i=0; $i < 3; $i++) { 
            Solution::create([
                'title' => 'Solution '.$i+1,
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate soluta rem esse, nam repudiandae blanditiis in velit dolores. Distinctio illo nemo nulla voluptas quae reiciendis.'
            ]);
        }
    }
}
