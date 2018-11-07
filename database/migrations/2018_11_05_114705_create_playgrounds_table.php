<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaygroundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playgrounds', function (Blueprint $table) {
            $table->increments('playgroundid');
            $table->string('name');
            $table->string('addressStreet');
            $table->string('addressZip');
            $table->string('addressCity')->default('Berlin');
            $table->string('addressCountry')->default('DE');
            $table->string('addressLatitude');
            $table->string('addressLongitude');
            $table->boolean('kleinkinder')->default(0);
            $table->boolean('wasserspielplatz')->default(0);
            $table->boolean('fussball')->default(0);
            $table->boolean('basketball')->default(0);
            $table->boolean('tischtennis')->default(0);
            $table->boolean('rutsche')->default(0);
            $table->boolean('zaun')->default(0);
            $table->boolean('klettern')->default(0);
            $table->boolean('spielsand')->default(0);
            $table->boolean('seilbahn')->default(0);
            $table->boolean('size')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('playgrounds');
    }
}
