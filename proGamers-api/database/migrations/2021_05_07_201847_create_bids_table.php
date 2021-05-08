<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bids', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->foreignId('owner_game')->constrained('games')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('bidder_game')->constrained('games')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('bidder')->constrained('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->char('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bids');
    }
}
