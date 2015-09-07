<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        $this->call('UserTableSeeder');
        $this->command->info('User table seeded!');

        Model::reguard();
    }
}


class UserTableSeeder extends Seeder {
 
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vader = DB::table('users')->insert([
                'name'   => 'admin',
                'email'      => 'admin@obama.com',
                'password'   => Hash::make('admin'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]);
 
        DB::table('users')->insert([
                'name'   => 'LanhTV',
                'email'      => 'vanlanh10273@gmail.com',
                'password'   => Hash::make('1211761768'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]);
 
        DB::table('users')->insert([
                'name'   => 'HienPD',
                'email'      => 'hienpd@gmail.com',
                'password'   => Hash::make('123456789'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]);
    }
 
}