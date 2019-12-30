<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersHasTelefonosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'users_has_telefonos';

    /**
     * Run the migrations.
     * @table users_has_telefonos
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('users_id')->unsigned();
            $table->integer('telefonos_idtelefonos')->unsigned();

            $table->index(["telefonos_idtelefonos"], 'fk_users_has_telefonos_telefonos1_idx');

            $table->index(["users_id"], 'fk_users_has_telefonos_users1_idx');

            $table->foreign('users_id', 'fk_users_has_telefonos_users1_idx')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('telefonos_idtelefonos', 'fk_users_has_telefonos_telefonos1_idx')
                ->references('idtelefonos')->on('telefonos')
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
