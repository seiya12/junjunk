<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('transaction_code', 13)->unique();
            $table->char('seller_code',9);
            $table->char('buyer_code',9);
            $table->char('product_code',12);
            $table->char('warehouse_code',3);
            $table->integer('profit');
            $table->char('status',1)->default('1');
            $table->char('cancel_flg',1)->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
