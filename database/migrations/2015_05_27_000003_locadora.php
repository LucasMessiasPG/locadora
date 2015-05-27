<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Locadora extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('marca', function(Blueprint $table)
        {
            $table->increments('id_marca');
            $table->string('nome');
        });

        Schema::create('modelo', function(Blueprint $table)
        {
            $table->increments('id_modelo');
            $table->integer('id_marca')->references('id_marca')->on('marca');
            $table->string('nome');
        });

        Schema::create('cor', function(Blueprint $table)
        {
            $table->increments('id_cor');
            $table->string('nome', 255);
        });

        Schema::create('veiculo', function(Blueprint $table)
        {
            $table->increments('id_veiculo');
            $table->integer('id_modelo')->references('id_modelo')->on('modelo');
            $table->integer('id_cor')->references('id_cor')->on('cor');
            $table->string('placa', 8);
            $table->integer('ano_fabricacao');
            $table->integer('ano_modelo');
            $table->decimal('palca', 8,2);
        });

        Schema::create('cliente', function(Blueprint $table)
        {
            $table->increments('id_cliente');
            $table->string('cnpj',18);
            $table->string('nome');
            $table->string('telefone', 18);
            $table->date('data_nascimento');
            $table->string('cnh', 20);

        });

        Schema::create('usuario', function(Blueprint $table)
        {
            $table->increments('id_usuario');
            $table->string('login',50);
            $table->string('senha');
            $table->string('nome');

        });

        Schema::create('loacacao', function(Blueprint $table)
        {
            $table->increments('id_locacao');
            $table->integer('id_usuario')->references('id_usuario')->on('usuario');
            $table->integer('id_veiculo')->references('id_veiculo')->on('veiculos');
            $table->integer('id_cliente')->references('id_cliente')->on('cliente');
            $table->date('data_registro');
            $table->date('agendamento_retirada');
            $table->date('agendamento_devolucao');
            $table->date('data_retirada');
            $table->date('data_devolucao');
            $table->decimal('preco',10,2);
            $table->date('vencimento');
            $table->date('pagamento');
            $table->decimal('valor_pago',10,2);
            $table->boolean('cancelada');

        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
