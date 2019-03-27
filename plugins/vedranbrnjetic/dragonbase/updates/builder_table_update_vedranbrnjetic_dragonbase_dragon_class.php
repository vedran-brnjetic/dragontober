<?php namespace VedranBrnjetic\Dragonbase\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVedranbrnjeticDragonbaseDragonClass extends Migration
{
    public function up()
    {
        Schema::table('vedranbrnjetic_dragonbase_dragon_class', function($table)
        {
            $table->string('description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('vedranbrnjetic_dragonbase_dragon_class', function($table)
        {
            $table->dropColumn('description');
        });
    }
}
