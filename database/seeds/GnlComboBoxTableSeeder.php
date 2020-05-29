<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GnlComboBoxTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('gnl_combo_boxes')->insert([
            'menu_name'=>'school_types',
            'item_name'=>'elementary',
        ]);
        DB::table('gnl_combo_boxes')->insert([
            'menu_name'=>'school_types',
            'item_name'=>'secondary',
        ]);

    }
}
