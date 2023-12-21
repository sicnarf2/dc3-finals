<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        \App\Models\User::factory(10)->create();
        \App\Models\Customer::factory(10)->create();
        \App\Models\Merchandise::factory(10)->create();
        \App\Models\Supplier::factory(10)->create();
        \App\Models\Purchase::factory(10)->create();
        \App\Models\Sale::factory(10)->create();
        \App\Models\PurchasedItem::factory(10)->create();
        \App\Models\SoldItem::factory(10)->create();
        
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
