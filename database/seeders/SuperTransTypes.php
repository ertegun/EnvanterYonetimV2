<?php

namespace Database\Seeders;

use App\Models\SuperTransactionType;
use Illuminate\Database\Seeder;

class SuperTransTypes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SuperTransactionType::insert([
            ['name' => 'Oturum Açıldı', 'icon' => 'fas-fa-door-open'],
            ['name' => 'Oturum Kapatıldı', 'icon' => 'fas-fa-door-closed'],
        ]);
    }
}
