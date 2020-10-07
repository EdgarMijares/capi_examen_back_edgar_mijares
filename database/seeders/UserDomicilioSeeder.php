<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserDomicilio;

class UserDomicilioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        UserDomicilio::factory(100)->create();
    }
}
