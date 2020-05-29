<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('schools')->insert([

            'name'=>" elementary school 1",
            'user_id'=>1,
           'notes'=>"test school",
           'type'=>1,
        ]);

    }
}
