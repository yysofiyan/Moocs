<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(
            'blog_categories',
            function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('slug');
                $table->integer('status')->default(1);
                $table->timestamps();
                $table->softDeletes();
            }
        );
    }

    public function down(): void
    {
        Schema::dropIfExists('blog_categories');
    }
};
