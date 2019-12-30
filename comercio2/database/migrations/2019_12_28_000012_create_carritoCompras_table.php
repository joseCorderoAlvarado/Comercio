<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarritocomprasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'carritoCompras';

    /**
     * Run the migrations.
     * @table carritoCompras
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('cantidad');
            $table->decimal('costo', 6, 2);
            $table->increments('users_id')->unsigned();
            $table->integer('productos_idproductos')->unsigned();

            $table->index(["productos_idproductos"], 'fk_carritoCompras_productos1_idx');


            $table->foreign('productos_idproductos', 'fk_carritoCompras_productos1_idx')
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
