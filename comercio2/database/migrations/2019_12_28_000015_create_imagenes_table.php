<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagenesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'imagenes';

    /**
     * Run the migrations.
     * @table imagenes
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idimagenes');
            $table->string('ruta');
            $table->integer('productos_idproductos')->unsigned();

            $table->index(["productos_idproductos"], 'fk_imagenes_productos1_idx');


            $table->foreign('productos_idproductos', 'fk_imagenes_productos1_idx')
                ->references('idproductos')->on('productos')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
