<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Expense;
use App\Models\Income;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        $user = User::factory()->create([
            'name' => 'Aditya',
            'email' => 'admin@gmail.com',
        ]);

        $categories = Category::factory(10)->create([
            'user_id' => $user->id,
        ]);

        Income::factory(100)->create([
            'user_id' => $user->id,
            'category_id' => $categories->random()->id,
        ]);

        Expense::factory(100)->create([
            'user_id' => $user->id,
            'category_id' => $categories->random()->id,
        ]);
    }
}
