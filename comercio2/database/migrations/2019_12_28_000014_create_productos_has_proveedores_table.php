<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosHasProveedoresTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'productos_has_proveedores';

    /**
     * Run the migrations.
     * @table productos_has_proveedores
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('productos_idproductos')->unsigned();
            $table->integer('proveedores_idproveedores')->unsigned();

            $table->index(["productos_idproductos"], 'fk_productos_has_proveedores_productos1_idx');

            $table->index(["proveedores_idproveedores"], 'fk_productos_has_proveedores_proveedores1_idx');


            $table->foreign('productos_idproductos', 'fk_productos_has_proveedores_productos1_idx')
                ->references('idproductos')->on('productos')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('proveedores_idproveedores', 'fk_productos_has_proveedores_proveedores1_idx')
                ->references('idproveedores')->on('proveedores')
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
