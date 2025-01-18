<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 3; $i++) { 
            Testimonial::create([
                'title' => 'Awesome Tool',
                'comment' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt, laboriosam.',
                'name' => 'Olivia Wilson',
                'designation' => 'Founder of Borcelle'
            ]);
        }
    }
}
