<?php

namespace Database\Seeders;

use App\Models\SuperAdmin;
use Illuminate\Database\Seeder;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SuperAdmin::insert([
            'user_name' => 'admin',
            'email' => 'taha.yerlikaya@gruparge.com',
            'name' => 'Taha Yerlikaya',
            'password' => bcrypt('admin')
        ]);
    }
}
