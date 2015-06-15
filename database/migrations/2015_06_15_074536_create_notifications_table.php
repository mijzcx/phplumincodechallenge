<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationsTable extends Migration {

    private static $tableName = 'notifications';
    
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
            
            $table->string('message_from');
            $table->string('message_to');
            $table->string('message')->nullable();
            $table->integer('message_type')->default(0);
            $table->integer('message_status')->default(0);
 
      
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
