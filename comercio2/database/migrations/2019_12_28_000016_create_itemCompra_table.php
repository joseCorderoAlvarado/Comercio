<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemcompraTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'itemCompra';

    /**
     * Run the migrations.
     * @table itemCompra
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('iditemCompra');
            $table->decimal('precio', 6, 2);
            $table->integer('cantidad');
            $table->integer('compras_idcompras')->unsigned();
            $table->integer('productos_idproductos')->unsigned();

            $table->index(["productos_idproductos"], 'fk_itemCompra_productos1_idx');

            $table->index(["compras_idcompras"], 'fk_itemCompra_compras1_idx');


            $table->foreign('compras_idcompras', 'fk_itemCompra_compras1_idx')
                ->references('idcompras')->on('compras')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('productos_idproductos', 'fk_itemCompra_productos1_idx')
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
