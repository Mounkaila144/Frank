<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('avis', function (Blueprint $table) {
            $table->renameColumn('nom','note');
            $table->renameColumn('description','commentaire');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('avis', function (Blueprint $table) {
            $table->renameColumn('note','nom');
            $table->renameColumn('commentaire','description');
        });
    }
};
