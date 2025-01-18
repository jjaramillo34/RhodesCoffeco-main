<?php

namespace Database\Seeders;

use App\Models\Pricing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PricingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pricings = [
            [
                'tagline' => 'Free',
                'title' => 'Free',
                'price' => 'Free',
                'description' => 'forever free for individuals and small teams up to 3',
                'features' => [
                    'Unlimited Access',
                    '100MB Storage',
                    '3 Users',
                    'Unlimited Task'
                ],
                'btn' => 'Start for free'
            ],
            [
                'tagline' => 'Unlimited',
                'title' => 'Unlimited',
                'price' => '$29',
                'description' => 'per user/month billed yearly $39 billed monthly',
                'features' => [
                    'All in Free +',
                    'Unlimited Guest',
                    'Priority Support',
                    'Smar Notification'
                ],
                'btn' => 'Get Unlimited'
            ],
            [
                'tagline' => 'Enterprise',
                'title' => 'Enterprise',
                'price' => '$35',
                'description' => 'per user/month billed yearly $45 billed monthly',
                'features' => [
                    'All in Unlimited',
                    'Bulk Export',
                    'Advanced Analytics',
                    'Advanced Security'
                ],
                'btn' => 'Get Enterprise'
            ],
        ];

        DB::table('pricings')->truncate();

        foreach($pricings as $item)
        {
            Pricing::create($item);
        }
    }
}
