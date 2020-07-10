<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserUserRoleTable extends Migration
{
    public function down()
    {
        Schema::dropIfExists('user_user_role');
    }

    public function up()
    {
        Schema::create('user_user_role', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('user_role_id');
        });
    }
}
