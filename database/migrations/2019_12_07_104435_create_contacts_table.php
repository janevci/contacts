<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->char('first_name', 50);
            $table->char('last_name', 50);
            $table->char('address', 100);
            $table->char('city', 50);
            $table->integer('zip');
            $table->char('country', 50);
            $table->char('email', 50);
            $table->char('phone', 30);
            $table->unsignedInteger('group_id');
            $table->string('avatar')->nullable();
            $table->timestamps();                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
