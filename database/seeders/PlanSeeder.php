<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;
  
class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plans = [
            [
                'name' => 'Standard', 
                'slug' => 'stadard', 
                'stripe_plan' => 'price_1NcnwFJNSwm9Bv4beZJ3PFyX', 
                'price' => 1000, 
                'description' => 'Standard'
            ],
        ];
  
        foreach ($plans as $plan) {
            Plan::create($plan);
        }
    }
}