<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new \App\Admin();
        $admin->email = 'furqanshah001@gmail.com';
        $admin->password = bcrypt('testpassword');
        $admin->save();
    }
}
