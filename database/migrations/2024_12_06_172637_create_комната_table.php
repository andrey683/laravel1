<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('комната', function (Blueprint $table) {
            $table->id(); // ID
            $table->foreignId('ID_building')->references('id') ->on('корпус'); // внешний ключ
            $table->integer('Number_room'); // Номер комнаты
            $table->integer('Number_of_seats'); // Количество мест
            $table->string('Price'); // Стоимость
            $table->string('Food'); // Питание
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('комната');
    }
};
