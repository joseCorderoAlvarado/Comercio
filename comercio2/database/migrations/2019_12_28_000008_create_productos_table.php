<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'productos';

    /**
     * Run the migrations.
     * @table productos
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idproductos');
            $table->string('nombreproducto', 45);
            $table->decimal('precioventa', 6, 2);
            $table->decimal('preciocompra', 6, 2);
            $table->integer('stock');
            $table->string('descripcion');
            $table->integer('categorias_idcategoria')->unsigned();

            $table->index(["categorias_idcategoria"], 'fk_productos_categorias1_idx');


            $table->foreign('categorias_idcategoria', 'fk_productos_categorias1_idx')
                ->references('idcategoria')->on('categorias')
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
