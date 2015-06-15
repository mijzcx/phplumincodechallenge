<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

    private static $tableName = 'users';
    
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(self::$tableName, function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
            
            $table->string('username')->unique();
            $table->string('password');
            $table->boolean('force_change_password')->default(TRUE);
            $table->string('remember_token')->default('');
 
     
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists(self::$tableName);
	}

}
