<?php
/**
 * @author Dodi Priyanto<dodi.priyanto76@gmail.com>
 */
namespace Database\Seeders;

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
        $this->call([
            SetupSeeder::class
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
