<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'compras';

    /**
     * Run the migrations.
     * @table compras
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idcompras');
            $table->date('fechapedido');
            $table->string('totalCompra', 45);
            $table->date('fechaenvio');
            $table->string('referencia', 45);
            $table->integer('users_id')->unsigned();
            $table->integer('estadocompras_idestadocompra')->unsigned();
            $table->integer('metodopago_idmetodopago')->unsigned();
            $table->integer('metodoenvios_idmetodoenvios')->unsigned();
            $table->index(["metodopago_idmetodopago"], 'fk_compras_metodopago1_idx');
            $table->index(["estadocompras_idestadocompra"], 'fk_compras_estadocompras1_idx');
            $table->index(["users_id"], 'fk_compras_users1_idx');

            $table->index(["metodoenvios_idmetodoenvios"], 'fk_compras_metodoenvios1_idx');


            $table->foreign('users_id', 'fk_compras_users1_idx')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('estadocompras_idestadocompra', 'fk_compras_estadocompras1_idx')
                ->references('idestadocompra')->on('estadocompras')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('metodopago_idmetodopago', 'fk_compras_metodopago1_idx')
                ->references('idmetodopago')->on('metodopagos')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('metodoenvios_idmetodoenvios', 'fk_compras_metodoenvios1_idx')
                ->references('idmetodoenvios')->on('metodoenvios')
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
