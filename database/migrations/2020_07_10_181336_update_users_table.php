<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function ($table) {
            $table
                ->string('name_prefix')
                ->after('id')
                ->nullable()
            ;

            $table->renameColumn('name', 'first_name');

            $table
                ->string('last_name')
                ->after('name')
                ->nullable()
            ;

            $table
                ->string('name_suffix')
                ->after('last_name')
                ->nullable()
            ;

            $table
                ->string('address_1')
                ->after('name_suffix')
                ->nullable()
            ;

            $table
                ->string('address_2')
                ->after('address_1')
                ->nullable()
            ;

            $table
                ->string('phone')
                ->after('address_2')
                ->nullable()
            ;

            $table
                ->string('nic')
                ->after('phone')
                ->nullable()
            ;

            $table
                ->string('city')
                ->after('nic')
                ->nullable()
            ;

            $table
                ->text('notes')
                ->after('city')
                ->nullable()
            ;

            $table
                ->integer('age')
                ->after('notes')
                ->nullable()
            ;

            $table
                ->string('gender')
                ->after('age')
                ->nullable()
            ;

            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::table('users', function ($table) {
            $table->dropColumn('name_prefix');
            $table->renameColumn('first_name', 'name');
            $table->dropColumn('last_name');
            $table->dropColumn('name_suffix');
            $table->dropColumn('phone');
            $table->dropColumn('nic');
            $table->dropColumn('address_1');
            $table->dropColumn('address_2');
            $table->dropColumn('city');
            $table->dropColumn('notes');
            $table->dropColumn('gender');
            $table->dropColumn('age');
            $table->dropSoftDeletes();
        });
    }
}
