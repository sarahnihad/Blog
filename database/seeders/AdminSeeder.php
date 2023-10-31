<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user= User::create
        (['name'=>'admin',
        'email'=>'admin@admin.com',
        'password'=>'$2y$10$LOiDzoNAEGGaKoda06ENceg7qx2NBlBLYSzt7av8yhmSLOcA5JfxK',
        ]);
        
        $user->assignRole('admin');
    }
}
