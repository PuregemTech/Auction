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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('matric_no');
            $table->string('department');
            $table->string('mobile');
            $table->string('gender')->nullable();
            $table->string('dob')->nullable();
            $table->string('address')->nullable();
            $table->string('bank_acc')->nullable();
            $table->string('user_type')->default("1");
            $table->string('paid_user')->default(" ");
            // 1->seller
            // 2->buyer
            // 3->admin
            // 4->block user
            $table->string('status')->default("2");
            // 1-blocked
            // 2->unblocked
            $table->string('bank_name')->nullable();
            $table->string('bank_no')->nullable(); 
            // bank_no-> NUMBER
            $table->string('delivery_address')->nullable();
            $table->string('picture')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
