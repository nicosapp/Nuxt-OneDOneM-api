<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldUserTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table('users', function (Blueprint $table) {
      if (!Schema::hasColumn('users', 'firstname'))
        $table->string('firstname', 100)->nullable();
      if (!Schema::hasColumn('users', 'slug'))
        $table->string('slug', 100)->nullabel()->unique();
      if (!Schema::hasColumn('users', 'username'))
        $table->string('username', 100);
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('users', function (Blueprint $table) {
      $table->dropColumn('firstname');
      $table->dropColumn('slug');
      $table->dropColumn('username');
    });
  }
}
