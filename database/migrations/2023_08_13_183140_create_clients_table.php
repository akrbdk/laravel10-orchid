<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('phone', 20)->comment('Номер телефона');
            $table->enum('status', ['interviewed', 'not_interviewed'])->comment('Статус')->default('interviewed');
            $table->string('name')->comment('Имя')->nullable();
            $table->string('last_name')->comment('Фамилия')->nullable();
            $table->string('email')->unique()->nullable();
            $table->date('birthday')->comment('День рождения')->nullable();
            $table->bigInteger('service_id')->comment('Оказанная услуга')->unsigned()->nullable();
            $table->foreign('service_id')
                ->references('id')
                ->on('services')
                ->onDelete('restrict')
                ->onUpdate('cascade');
            $table->string('assessment')->comment('Оценка качества')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
