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
        Schema::create('tin_tucs', function (Blueprint $table) {
            $table->id();
            $table->string('tieu_de');
            $table->text('tom_tat')->nullable();
            $table->text('noi_dung')->nullable();
            $table->date('ngay_dang');
            $table->unsignedBigInteger('loai_tin_id');
            $table->string('nguon_tin')->nullable();
            $table->string('hinh_anh')->nullable();
            $table->timestamps();

            $table->foreign('loai_tin_id')->references('id')->on('loai_tins')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tin_tucs');
    }
};
