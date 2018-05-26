<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert(array(
            0 => array(
                'email' => 'test@test.com',
                'type'=>false,
                'first_name' => 'Jose',
                'last_name' => 'Chavarria',
                'password' => app('hash')->make('123456'),
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ),
            1 => array(
                'email' => 'admin@test.com',
                'type'=>true,
                'first_name' => 'Jose',
                'last_name' => 'Chavarria',
                'type' => true,
                'password' => app('hash')->make('123456'),
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ),
            2 => array(
                'email' => 'test1@test.com',
                'type'=>false,
                'first_name' => 'Pablo',
                'last_name' => 'Martinez',
                'password' => app('hash')->make('123456'),
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            )
        ));
    }
}
