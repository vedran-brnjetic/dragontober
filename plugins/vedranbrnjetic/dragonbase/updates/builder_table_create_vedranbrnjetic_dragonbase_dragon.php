<?php namespace VedranBrnjetic\Dragonbase\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateVedranbrnjeticDragonbaseDragon extends Migration
{
    public function up()
    {
        Schema::create('vedranbrnjetic_dragonbase_dragon', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vedranbrnjetic_dragonbase_dragon');
    }
}
