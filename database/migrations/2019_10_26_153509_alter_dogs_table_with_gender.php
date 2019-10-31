<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterDogsTableWithGender extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dogs', function (Blueprint $table) {
            $table->renameColumn('sex', 'gender_id');

            $table->foreign('gender_id')->references('id')->on('genders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dogs', function (Blueprint $table) {
            $table->dropForeign('genders_gender_id_foreign');

            $table->renameColumn('gender_id', 'gender');
        });
    }
}
