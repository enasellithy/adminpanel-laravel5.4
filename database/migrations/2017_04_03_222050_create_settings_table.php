<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->longtext('msg');
            $table->string('flink');
            $table->string('tlink');
            $table->string('inlink');
            $table->string('inslink');
            $table->string('rsslink');
            $table->string('youtublink');
            $table->string('plink');
            $table->string('clink');
            $table->string('glink');
            $table->string('slink');
            $table->longtext('address');
            $table->text('tel1');
            $table->text('tel2');
            $table->string('email1');
            $table->string('email2');
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
        Schema::dropIfExists('settings');
    }
}
