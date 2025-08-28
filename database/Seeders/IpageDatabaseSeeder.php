<?php

namespace Modules\Ipage\Database\Seeders;

use Illuminate\Database\Seeder;

class IpageDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $this->call([InitialPagesSeeder::class]);
    }
}
