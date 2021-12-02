<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('reference');
            $table->string('merchant_ref');
            $table->string('package_name', 15);
            $table->string('fullname', 50);
            $table->string('email', 50);
            $table->string('phone', 16);
            $table->string('address');
            $table->integer('total_amount');
            $table->string('method', 20);
            $table->enum('status', ['PAID', 'EXPIRED', 'FAILED', 'UNPAID'])->default('UNPAID');
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
