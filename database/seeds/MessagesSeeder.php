<?php

use Illuminate\Database\Seeder;

class MessagesSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('messages')->delete();

        \DB::table('messages')->insert(array (
            0 =>
                array (
                    'id' => '1',
                    'message' => 'Hello from adminitstrator',
                    'status' => 1,
                    'from_user_id' => 2,
                    'to_user_id' => 1,
                    'created_at' => '2016-03-03 07:33:53',
                    'updated_at' => '2016-03-31 01:57:46',
                    'deleted_at' => NULL,
                ),
            1 =>
                array (
                    'id' => '2',
                    'message' => 'Answwer from user',
                    'status' => 1,
                    'from_user_id' => 1,
                    'to_user_id' => 2,
                    'created_at' => '2016-03-03 07:33:53',
                    'updated_at' => '2016-03-31 01:57:46',
                    'deleted_at' => NULL,
                ),



        ));


    }
}
