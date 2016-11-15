<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('message')->default("")->comment = "Message Text";
            $table->integer('status')->default(0)->comment = "Message Status - 0 - unread, 1 - read" ;


            $table->integer('from_user_id')->unsigned()->comment = "Message Sender";
            $table->foreign('from_user_id')->references('id')->on('users')->onDelete('restrict');

            $table->integer('to_user_id')->unsigned()->comment = "Message Reciever";
            $table->foreign('to_user_id')->references('id')->on('users')->onDelete('restrict');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
