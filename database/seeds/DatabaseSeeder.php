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
        $this->call('CompetitionTableSeeder');
    }

}

//class SportsRecordTableSeeder extends Seeder
//{
//    public function run(){
//        App\Sportsrecord::truncate();
//        factory(App\Sportsrecord::class,50)->create();
//    }
//}


class CompetitionTableSeeder extends Seeder
{
    public function run()
    {
        factory('App\Competition', 50)->create()->each(function() {
            factory(App\Competition::class, 20)->create();

        });
    }
}
