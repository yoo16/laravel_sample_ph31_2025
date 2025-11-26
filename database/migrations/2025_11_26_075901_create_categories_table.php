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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->integer('sort')->default(0);
            $table->timestamps();
        });

        // CREATE TABLE `categories` (
        //   `id` bigint unsigned NOT NULL AUTO_INCREMENT,
        //   `name` varchar(255) NOT NULL,
        //   `sort` int NOT NULL DEFAULT '0',
        //   `created_at` timestamp NULL DEFAULT NULL,
        //   `updated_at` timestamp NULL DEFAULT NULL,
        //   PRIMARY KEY (`id`)
        // ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
