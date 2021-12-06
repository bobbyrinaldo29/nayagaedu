<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('firstname', 30)->nullable();;
            $table->string('lastname', 30)->nullable();;
            $table->string('email', 50)->unique();
            $table->boolean('role')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('gender', '10')->nullable();
            $table->string('phone', '15')->nullable();
            $table->string('idCard', '50')->nullable();
            $table->string('address', '200')->nullable();
            $table->string('postalCode', '10')->nullable();
            $table->string('fullName', '50')->nullable();
            $table->string('bankName', '50')->nullable();
            $table->string('accountNumber', '50')->nullable();
            $table->string('package', '50')->nullable();
            $table->string('balance')->nullable();
            $table->string('referred_by')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
