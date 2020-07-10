<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserUserGroupTable extends Migration
{
    public function down()
    {
        Schema::dropIfExists('user_user_group');
    }

    public function up()
    {
        Schema::create('user_user_group', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('user_group_id');
        });
    }
}
