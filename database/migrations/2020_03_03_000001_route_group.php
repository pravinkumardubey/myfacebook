<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RouteGroup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * 'means these are common routes like get all data, get single data
         */
        Schema::create('route_groups', function (Blueprint $table) {
            $table->smallIncrements('route_group_id');
            $table->string('route_group_description')->commit('Can be used for extra information');
            $table->string('route_group_label', 80)->comment('It will display at user end');
            $table->unsignedTinyInteger('module_id');
            $table->foreign('module_id')->references('id')->on('modules');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('route_groups');
    }
}
