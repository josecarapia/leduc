<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->date('date');
            $table->string('location');
            $table->string('sub-location')->nullable();
            $table->string('category');
            $table->string('sub-category')->nullable();
            $table->integer('timein-hour');
            $table->integer('timein-min');
            $table->integer('timeout-hour');
            $table->integer('timeout-min');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('date');
            $table->dropColumn('location');
            $table->dropColumn('sub-location');
            $table->dropColumn('category');
            $table->dropColumn('sub-category');
            $table->dropColumn('timein-hour');
            $table->dropColumn('timein-min');
            $table->dropColumn('timeout-hour');
            $table->dropColumn('timeout-min');
        });
    }
}
