<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterDogsTableForBreeds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dogs', function (Blueprint $table) {
            $table->renameColumn('breed', 'breed_id');

            $table->foreign('breed_id')->references('id')->on('breeds');
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
            $table->dropForeign('breeds_breed_id_foreign');

            $table->renameColumn('breed_id', 'breed');
        });
    }
}
