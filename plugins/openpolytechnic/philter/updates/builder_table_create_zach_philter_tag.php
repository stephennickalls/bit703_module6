<?php namespace Openpolytechnic\Philter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateOpenpolytechnicPhilterTag extends Migration
{
    public function up()
    {
        Schema::create('Openpolytechnic_philter_tag', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id')->unsigned();
            $table->string('tag', 191);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('Openpolytechnic_philter_tag');
    }
}
