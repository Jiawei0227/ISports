<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call('SportsRecordTableSeeder');
    }

}

class SportsRecordTableSeeder extends Seeder
{
    public function run(){
        App\Sportsrecord::truncate();
        factory(App\Sportsrecord::class,50)->create();
    }
}
