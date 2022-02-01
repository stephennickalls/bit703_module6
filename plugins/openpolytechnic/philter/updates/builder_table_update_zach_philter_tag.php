<?php namespace Openpolytechnic\Philter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateOpenpolytechnicPhilterTag extends Migration
{
    public function up()
    {
        Schema::table('Openpolytechnic_philter_tag', function($table)
        {
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::table('Openpolytechnic_philter_tag', function($table)
        {
            $table->dropPrimary(['id']);
        });
    }
}
