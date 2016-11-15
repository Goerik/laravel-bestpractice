<?php

use Illuminate\Database\Seeder;

class CountriesSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('countries')->delete();

        \DB::table('countries')->insert(array (
            0 =>
                array (
                    'id' => '1',
                    'code' => 'RU',
                    'title' => 'Russian Federation',
                    'created_at' => '2016-03-03 07:33:53',
                    'updated_at' => '2016-03-31 01:57:46',
                ),
            1 =>
                array (
                    'id' => '2',
                    'code' => 'US',
                    'title' => 'United States',
                    'created_at' => '2016-03-03 07:33:53',
                    'updated_at' => '2016-03-31 01:57:46',
                ),


        ));


    }
}
