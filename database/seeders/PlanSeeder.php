<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//use plans
use App\Models\Plan;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //3 plans using an array
        $plans = [
            [
                'name' => 'Basic Plan',
                'slug' => 'basic-plan',
                'stripe_plan' => 'price_1PJTO7JncBMXlWz2ZX32QJMG',
                'price' => 6,499,
                'description' => 'The Basic Plan at $19.99/month offers app notifications for medication and appointment reminders, secure cloud storage for medical documents, self-monitoring logs for health metrics, and email support.',
            ],
            [
                'name' => 'Standard Plan',
                'slug' => 'standard-plan',
                'stripe_plan' => 'price_1PJTPKJncBMXlWz2y0ZkBgeH',
                'price' => 11,999,
                'description' => 'The Standard Plan at $39.99/month includes all Basic Plan features, plus SMS reminders, priority support, document management assistance, and monthly health summary reports emailed to you and your caregiver.',
            ],
            [
                'name' => 'Premium Plan',
                'slug' => 'premium-plan',
                'stripe_plan' => 'price_1PJTQFJncBMXlWz2SEsZtgdB',
                'price' => 21,999,
                'description' => 'The Premium Plan at $69.99/month includes all Standard Plan features, plus voice call reminders, caregiver and pharmacy notifications, medication delivery, advanced health insights, 24/7 support, and family access.',
            ],
        ];

        //loop through the plans array
        foreach ($plans as $plan) {
            //create a new plan
            Plan::create($plan);
        }
    }
}
