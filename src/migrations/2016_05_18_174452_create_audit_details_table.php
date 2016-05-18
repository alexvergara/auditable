<?php

use Illuminate\Database\Migrations\Migration;

class CreateAuditDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audit_details', function ($table) {
            $table->increments('id');
            $table->string('audit_id');
            $table->string('key');
            $table->text('old')->nullable();
            $table->text('new')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('audit_details');
    }
}
