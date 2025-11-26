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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->string('name', 100);
            $table->text('note');
            $table->integer('price');
            $table->text('image')->nullable();
            $table->text('tag')->nullable();
        });

        // CREATE TABLE `items` (
        //   `id` bigint unsigned NOT NULL AUTO_INCREMENT,
        //   `created_at` timestamp NULL DEFAULT NULL,
        //   `updated_at` timestamp NULL DEFAULT NULL,
        //   `category_id` bigint unsigned NOT NULL,
        //   `name` varchar(100) NOT NULL,
        //   `note` text NOT NULL,
        //   `price` int NOT NULL,
        //   `image` text DEFAULT NULL,
        //   `tag` text DEFAULT NULL,
        //   PRIMARY KEY (`id`),
        //   KEY `items_category_id_foreign` (`category_id`),
        //   CONSTRAINT `items_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
        // ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
