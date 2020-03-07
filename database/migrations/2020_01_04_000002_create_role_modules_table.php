<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleModulesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        $tablePrefix = config('database.connections.sms_db_user.prefix');
        Schema::create('role_modules', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->unsignedTinyInteger('role_id');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->json('module_ids')->nullable();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });

        DB::unprepared('DROP TRIGGER IF EXISTS before_update_role_change_user_hash');
        DB::unprepared('
    CREATE TRIGGER before_update_role_change_user_hash BEFORE UPDATE ON ' . $tablePrefix . 'role_modules FOR EACH ROW BEGIN

    UPDATE ' . $tablePrefix . 'users SET ' . $tablePrefix . 'users.hash = uuid() WHERE ' . $tablePrefix . 'users.user_type = NEW.role_id;

    END
    ');

    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('role_modules');
    }
}
