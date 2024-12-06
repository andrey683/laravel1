
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
        Schema::create('корпус', function (Blueprint $table) {
            $table->id(); // автоматически создается ID
            $table->string('Name')->nullable(); // Название гостиницы
            $table->string('Address')->nullable(); // Адрес гостиницы
            $table->timestamps(); // добавляет created_at и updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('корпус');
    }
};
