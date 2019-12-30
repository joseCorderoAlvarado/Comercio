<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersHasDireccionesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'users_has_direcciones';

    /**
     * Run the migrations.
     * @table users_has_direcciones
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('users_id')->unsigned();
            $table->integer('direcciones_iddirecciones')->unsigned();

            $table->index(["direcciones_iddirecciones"], 'fk_users_has_direcciones_direcciones1_idx');

            $table->index(["users_id"], 'fk_users_has_direcciones_users1_idx');


            $table->foreign('users_id', 'fk_users_has_direcciones_users1_idx')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('direcciones_iddirecciones', 'fk_users_has_direcciones_direcciones1_idx')
                ->references('iddirecciones')->on('direcciones')
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
