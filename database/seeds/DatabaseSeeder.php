<?php

use App\User;
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
        // run seeder >= php artisan db:seed
        // llama al ProductSeeder
        factory(User::class, 10)->create();
        $this->call(CategorySeeder::class);
        $this->call(ProductSeeder::class);
    }
}
