<?php namespace Travis\Carousel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTravisCarouselCollections extends Migration
{
    public function up()
    {
        Schema::create('travis_carousel_collections', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 200)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('travis_carousel_collections');
    }
}
