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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->text('categories',100);
            $table->text('subcategories',100);
            $table->enum('preparations', ['Detestei', 'Não Gostei','Indiferente','Gostei','Adorei']);
            $table->enum('flavor', ['Detestei', 'Não Gostei','Indiferente','Gostei','Adorei']);
            $table->enum('menu', ['Detestei', 'Não Gostei','Indiferente','Gostei','Adorei']);
            $table->enum('served', ['Detestei', 'Não Gostei','Indiferente','Gostei','Adorei']);
            $table->enum('opinion', ['Detestei', 'Não Gostei','Indiferente','Gostei','Adorei']);
            $table->enum('service', ['Detestei', 'Não Gostei','Indiferente','Gostei','Adorei']);
            $table->enum('hygiene', ['Detestei', 'Não Gostei','Indiferente','Gostei','Adorei']);
            $table->enum('conditions', ['Detestei', 'Não Gostei','Indiferente','Gostei','Adorei']);
            $table->enum('comfortable', ['Detestei', 'Não Gostei','Indiferente','Gostei','Adorei']);
            $table->enum('general', ['Detestei', 'Não Gostei','Indiferente','Gostei','Adorei']);
            $table->text('experience',255);
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
