<?php

use Illuminate\Database\Migrations\Migration;

class CreateAuditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audits', function ($table) {
            $table->increments('id');
            $table->enum('type', array('CREATE', 'UPDATE', 'DELETE'))->default('CREATE');
            $table->string('entity');
            $table->string('entity_id');
            $table->integer('user_id');

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
        Schema::drop('audits');
    }
}
