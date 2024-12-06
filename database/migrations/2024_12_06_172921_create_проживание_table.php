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
        Schema::create('проживание', function (Blueprint $table) {
            $table->id(); // ID
            $table->foreignId('ID_room')->references('id') ->on('комната'); // внешний ключ
            $table->foreignId('ID_guest')->references('id') ->on('гости'); // внешний ключ
            $table->date('Start_date'); // Дата начала
            $table->date('Finish_date')->nullable(); // Дата окончания
            $table->date('Actual_finish_date')->nullable(); // Фактическая дата окончания
            $table->integer('Number_of_people'); // Количество людей
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('проживание');
    }
};
