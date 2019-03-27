<?php namespace VedranBrnjetic\Dragonbase\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateVedranbrnjeticDragonbaseDragonFamily extends Migration
{
    public function up()
    {
        Schema::create('vedranbrnjetic_dragonbase_dragon_family', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vedranbrnjetic_dragonbase_dragon_family');
    }
}
