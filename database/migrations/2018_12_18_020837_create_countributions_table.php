<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountributionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countributions', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments('id');
            // $table->integer('user_id')->unsigned();
            $table->integer('member_id')->unsigned();
            $table->string('month');
            $table->integer('total');
            $table->integer('payment_id')->unsigned();
            $table->date('date');
            $table->integer('status_id')->unsigned();
            $table->string('description')->nullable();
            $table->timestamps();

            $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('payment_id')->references('id')->on('payments')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('status_id')->references('id')->on('statuses')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countributions');
    }
}
