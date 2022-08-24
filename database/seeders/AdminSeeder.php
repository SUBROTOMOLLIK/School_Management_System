<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use function PHPUnit\Framework\isNull;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Admin::where('email','Admin@gmail.com')->first();
        if(isNull( $admin )){
            $admin = new Admin();
            $admin->name = 'Admin';
            $admin->email = 'Admin@gmail.com';
            $admin->password = Hash::make('Admin@2022');

            $admin->save();
        }
    }
}
