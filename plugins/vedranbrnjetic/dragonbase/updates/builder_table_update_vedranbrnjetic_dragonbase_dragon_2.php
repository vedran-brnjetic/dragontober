<?php namespace VedranBrnjetic\Dragonbase\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVedranbrnjeticDragonbaseDragon2 extends Migration
{
    public function up()
    {
        Schema::table('vedranbrnjetic_dragonbase_dragon', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
    
    public function down()
    {
        Schema::table('vedranbrnjetic_dragonbase_dragon', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
}
