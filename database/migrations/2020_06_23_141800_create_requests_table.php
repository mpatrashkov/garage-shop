<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /** 
         * MIGRACIQTA NE E TESTVANA.
         * Modela e syzdaden ot Voyager.
         */
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("email");
            $table->text("question");
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
        Schema::dropIfExists('requests');
    }
}
