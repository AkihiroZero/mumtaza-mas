<?php

use App\Models\CategoryEmas;
use App\Models\KadarEmas;
use App\Models\LevelEmas;
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
        Schema::create('emas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->foreignIdFor(KadarEmas::class);
            $table->foreignIdFor(LevelEmas::class);
            $table->foreignIdFor(CategoryEmas::class);
            $table->string('image')->nullable();
            $table->string('weight');
            $table->string('color')->nullable();
            $table->text('description')->nullable();
            $table->string('barcode')->nullable();
            $table->string('vendor')->nullable();
            $table->boolean('bahan_keramik')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emas');
    }
};
