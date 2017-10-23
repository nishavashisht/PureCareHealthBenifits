<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reg_user', function (Blueprint $table) {
            $table->string('email');
            $table->string('fname');
            $table->string('lname');
            $table->string('phone');
            $table->string('credit_card');
            $table->string('bill_address1');
            $table->string('bill_address2');
            $table->string('bill_city');
            $table->string('bill_state');
            $table->string('bill_zipcode');
            $table->string('shipp_address1');
            $table->string('shipp_address2');
            $table->string('shipp_city');
            $table->string('shipp_state');
            $table->string('shipp_zipcode');
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
        Schema::dropIfExists('reg_user');
    }
}
