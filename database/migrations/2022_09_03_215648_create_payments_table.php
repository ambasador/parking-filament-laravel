<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('moviment_id')->constrained('moviments')->cascadeOnDelete();
            $table->decimal('price', 8, 2);
            $table->string('cpfcliente');
            $table->string('namecliente');
            $table->string('vehiclemodel');
            $table->string('vehicleplate');
            $table->decimal('discount', 8, 2);
            $table->datetime('inputed_at');
            $table->datetime('leaved_at');
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
        Schema::dropIfExists('payments');
    }
};
